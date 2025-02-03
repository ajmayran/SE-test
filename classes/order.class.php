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
    public $date_rejected = '';
    public $reason = '';
    public $date_updated = '';

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
    
            // Check if the product already exists in the cart
            $sql = "SELECT id, quantity FROM cart_items WHERE cart_id = :cart_id AND product_id = :product_id LIMIT 1";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':cart_id', $cart_id);
            $query->bindParam(':product_id', $product_id);
            $query->execute();
            $existingItem = $query->fetch(PDO::FETCH_ASSOC);
    
            if ($existingItem) {
                // If the product already exists in the cart, update its quantity
                $newQuantity = $existingItem['quantity'] + $quantity; // Add the new quantity to the existing one
                $sql = "UPDATE cart_items SET quantity = :quantity WHERE id = :item_id";
                $query = $this->db->connect()->prepare($sql);
                $query->bindParam(':quantity', $newQuantity);
                $query->bindParam(':item_id', $existingItem['id']);
                $query->execute();
            } else {
                // If the product does not exist, insert a new item into the cart
                $sql = "INSERT INTO cart_items (cart_id, product_id, quantity) VALUES (:cart_id, :product_id, :quantity)";
                $query = $this->db->connect()->prepare($sql);
                $query->bindParam(':cart_id', $cart_id);
                $query->bindParam(':product_id', $product_id);
                $query->bindParam(':quantity', $quantity);
                $query->execute();
            }
    
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
            SELECT ci.*, p.product_name, p.product_code, p.price, (ci.quantity * p.price) AS item_total
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

    public function updateCartItemQuantity($cartItemId, $quantity, $retailerId)
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

            // Update the quantity
            $sql = "UPDATE cart_items SET quantity = :quantity WHERE id = :cart_item_id";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':quantity', $quantity, PDO::PARAM_INT);
            $query->bindParam(':cart_item_id', $cartItemId, PDO::PARAM_INT);
            $query->execute();

            // Commit the transaction
            $this->db->connect()->commit();

            return true; // Indicate success
        } catch (Exception $e) {
            // Rollback the transaction if something fails
            $this->db->connect()->rollBack();
            error_log("Error updating cart item quantity: " . $e->getMessage());
            return false; // Indicate failure
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

    public function confirmOrder($retailer_id, $cart_items, $total_amount)
    {
        // Implementation for confirming the order
        // This method should handle the order confirmation logic
        // including inserting the order into the database and clearing the cart.
    }

    // Other existing methods...

}
