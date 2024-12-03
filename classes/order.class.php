<?php

require_once __DIR__ . '/../database/connect.php';

class Order
{
    public $id = '';
    public $retailer_id = '';
    public $distributor_id = '';
    public $status = '';
    public $total_amount = '';
    public $date = '';
    public $quantity = '';

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    public function addToCart($retailer_id, $product_id, $quantity)
    {
        try {
            $this->db->connect()->beginTransaction();

            // Check if there's already a cart for the retailer
            $sql = "SELECT id FROM order_cart WHERE retailer_id = :retailer_id LIMIT 1";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':retailer_id', $retailer_id);
            $query->execute();
            $cart_id = $query->fetchColumn();

            if (!$cart_id) {
                // Create a new cart if none exists
                $sql = "INSERT INTO order_cart (retailer_id) VALUES (:retailer_id)";
                $query = $this->db->connect()->prepare($sql);
                $query->bindParam(':retailer_id', $retailer_id);
                $query->execute();
                $cart_id = $this->db->connect()->lastInsertId();
            }

            // Insert item into cart_items
            $sql = "INSERT INTO cart_items (cart_id, product_id, quantity) VALUES (:cart_id, :product_id, :quantity)";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':cart_id', $cart_id);
            $query->bindParam(':product_id', $product_id);
            $query->bindParam(':quantity', $quantity);
            $query->execute();

            $this->db->connect()->commit();
            return true; // Success
        } catch (Exception $e) {
            $this->db->connect()->rollBack();
            error_log("Error adding to cart: " . $e->getMessage());
            return false; // Failure
        }
    }

    public function getCartItems($retailer_id)
    {
        $sql = "
            SELECT ci.*, p.product_name, p.price, (ci.quantity * p.price) AS item_total
            FROM cart_items ci
            JOIN order_cart oc ON ci.cart_id = oc.id
            JOIN product p ON ci.product_id = p.id
            WHERE oc.retailer_id = :retailer_id
        ";

        try {
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':retailer_id', $retailer_id);

            $data = [];
            $totalAmount = 0;

            if ($query->execute()) {
                $data = $query->fetchAll(PDO::FETCH_ASSOC);

                // Calculate the total amount using item totals
                $totalAmount = array_sum(array_column($data, 'item_total'));
            }

            return ['items' => $data, 'total' => $totalAmount];
        } catch (PDOException $e) {
            // Log the error and return an empty response
            error_log('Database error: ' . $e->getMessage());
            return ['items' => [], 'total' => 0];
        }
    }


    public function deleteCartItem($cartItemId, $retailerId)
    {
        try {
            // Start a transaction
            $this->db->connect()->beginTransaction();

            // Check if the cart item belongs to the retailer
            $sql = "
            SELECT ci.id 
            FROM cart_items ci
            JOIN order_cart oc ON ci.cart_id = oc.id
            WHERE ci.id = :cart_item_id AND oc.retailer_id = :retailer_id
        ";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':cart_item_id', $cartItemId, PDO::PARAM_INT);
            $query->bindParam(':retailer_id', $retailerId, PDO::PARAM_INT);
            $query->execute();

            // If the cart item does not exist or doesn't belong to the retailer, throw an exception
            if (!$query->fetchColumn()) {
                throw new Exception("Cart item not found or access denied.");
            }

            // Delete the cart item
            $sql = "DELETE FROM cart_items WHERE id = :cart_item_id";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':cart_item_id', $cartItemId, PDO::PARAM_INT);
            $query->execute();

            // Commit the transaction
            $this->db->connect()->commit();

            return true; // Indicate success
        } catch (Exception $e) {
            // Rollback the transaction if something fails
            $this->db->connect()->rollBack();
            return false; // Indicate failure
        }
    }


    public function confirmOrder($retailer_id, $distributor_id)
    {
        try {
            $this->db->connect()->beginTransaction();

            // Get the cart ID for the retailer
            $sql = "SELECT id FROM order_cart WHERE retailer_id = :retailer_id LIMIT 1";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':retailer_id', $retailer_id, PDO::PARAM_INT);
            $query->execute();
            $cartId = $query->fetchColumn();

            if (!$cartId) {
                throw new Exception("No cart found for this retailer.");
            }

            // Fetch cart items
            $sql = "
                SELECT ci.product_id, ci.quantity, p.price 
                FROM cart_items ci
                JOIN product p ON ci.product_id = p.id
                WHERE ci.cart_id = :cart_id
            ";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':cart_id', $cartId, PDO::PARAM_INT);
            $query->execute();
            $cartItems = $query->fetchAll(PDO::FETCH_ASSOC);

            if (empty($cartItems)) {
                throw new Exception("Cart is empty.");
            }

            // Calculate total amount
            $totalAmount = 0;
            foreach ($cartItems as $item) {
                $totalAmount += $item['quantity'] * $item['price'];
            }

            // Create a new order
            $sql = "
                INSERT INTO orders (retailer_id, distributor_id, total_amount, status, date)
                VALUES (:retailer_id, :distributor_id, :total_amount, 'Pending', NOW())
            ";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':retailer_id', $retailer_id, PDO::PARAM_INT);
            $query->bindParam(':distributor_id', $distributor_id, PDO::PARAM_INT);
            $query->bindParam(':total_amount', $totalAmount, PDO::PARAM_STR);
            $query->execute();
            $orderId = $this->db->connect()->lastInsertId();

            // Insert order details (items)
            $sql = "
                INSERT INTO order_details (order_id, product_id, quantity, price)
                VALUES (:order_id, :product_id, :quantity, :price)
            ";
            $query = $this->db->connect()->prepare($sql);
            foreach ($cartItems as $item) {
                $query->bindParam(':order_id', $orderId, PDO::PARAM_INT);
                $query->bindParam(':product_id', $item['product_id'], PDO::PARAM_INT);
                $query->bindParam(':quantity', $item['quantity'], PDO::PARAM_INT);
                $query->bindParam(':price', $item['price'], PDO::PARAM_STR);
                $query->execute();
            }

            // Clear the cart
            $sql = "DELETE FROM cart_items WHERE cart_id = :cart_id";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':cart_id', $cartId, PDO::PARAM_INT);
            $query->execute();

            $sql = "DELETE FROM order_cart WHERE id = :cart_id";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':cart_id', $cartId, PDO::PARAM_INT);
            $query->execute();

            // Commit the transaction
            $this->db->connect()->commit();
            return true;
        } catch (Exception $e) {
            $this->db->connect()->rollBack();
            error_log("Checkout failed: " . $e->getMessage());
            return false;
        }
    }



    public function getCartTotal($retailer_id)
    {
        $sql = "
            SELECT ci.product_id, ci.quantity, p.price 
            FROM cart_items ci
            JOIN order_cart oc ON ci.cart_id = oc.id
            JOIN product p ON ci.product_id = p.id
            WHERE oc.retailer_id = :retailer_id
        ";
        try {
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':retailer_id', $retailer_id, PDO::PARAM_INT);
            $query->execute();
            $cartItems = $query->fetchAll(PDO::FETCH_ASSOC);

            if (empty($cartItems)) {
                return ['items' => [], 'total' => 0];
            }

            // Calculate total amount
            $totalAmount = 0;
            foreach ($cartItems as $item) {
                $totalAmount += $item['quantity'] * $item['price'];
            }

            return ['items' => $cartItems, 'total' => $totalAmount];
        } catch (Exception $e) {
            error_log("Error fetching cart total: " . $e->getMessage());
            return ['items' => [], 'total' => 0];
        }
    }

    
    public function fetchOrders()
    {
        // Start the session to access session variables
    
    
        // Check if the retailer is logged in (session contains retailer_id)
        if (!isset($_SESSION['retailer_id'])) {
            header("Location: login.php"); // Redirect to login if no retailer is logged in
            exit;
        }
        
        $retailer_id = $_SESSION['retailer_id'];
    
        $sql = "
            SELECT o.id AS order_id, o.status, o.total_amount, o.date, 
                   od.product_id, od.quantity, od.price, p.product_name
            FROM orders o
            JOIN order_details od ON o.id = od.order_id
            JOIN product p ON od.product_id = p.id
            WHERE o.retailer_id = :retailer_id;
        ";
    
        try {
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':retailer_id', $retailer_id, PDO::PARAM_INT);
    
            $query->execute();
            $orders = [];
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $orders[] = $row;
            }
    
            return $orders;
        } catch (Exception $e) {
            error_log("Error fetching pending orders: " . $e->getMessage());
            return [];
        }
    }
    
}