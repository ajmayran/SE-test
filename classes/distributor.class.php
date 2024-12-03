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

    // Fetch Pending Orders for a Distributor
    public function fetchPendingOrders($distributor_id)
    {
        try {
            // Query to fetch orders along with retailer information
            $query = "SELECT o.id AS order_id, o.retailer_id, r.first_name,r.last_name, r.address AS retailer_address, 
                             o.status, o.total_amount, o.date
                      FROM orders o
                      JOIN retailer r ON o.retailer_id = r.id
                      WHERE o.distributor_id = :distributor_id AND o.status = 'pending';";

            // Prepare the SQL statement
            $stmt = $this->db->connect()->prepare($query);
            $stmt->execute(['distributor_id' => $distributor_id]);

            // Fetch all pending orders
            $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Now, fetch order details for each order
            foreach ($orders as &$order) {
                $order['details'] = $this->fetchOrderDetails($order['order_id']); // Use 'order_id' to fetch details
            }

            return $orders;
        } catch (PDOException $e) {
            echo "Error fetching pending orders: " . $e->getMessage();
            return [];
        }
    }


    // Fetch Order Details for a Specific Order
    public function fetchOrderDetails($order_id)
    {
        try {
            $query = "SELECT od.product_id, od.quantity, p.product_name, p.price
                      FROM order_details od
                      JOIN product p ON od.product_id = p.id
                      WHERE od.order_id = :order_id";

            $stmt = $this->db->connect()->prepare($query);
            $stmt->bindParam(':order_id', $order_id);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                echo "No products found for order_id: " . $order_id;
                return [];
            }
        } catch (PDOException $e) { 
            echo "Error fetching order details: " . $e->getMessage();
            return [];
        }
    }


    public function approveOrder($order_id)
    {
        try {
            // Update order status to 'accepted'
            $updateOrderQuery = "UPDATE orders SET status = 'accepted' WHERE id = :order_id";
            $stmt = $this->db->connect()->prepare($updateOrderQuery);
            $stmt->bindParam(':order_id', $order_id);
            $stmt->execute();

            // Insert into delivery table
            $deliveryDate = date('Y-m-d', strtotime('+3 days')); // Set delivery date to 3 days from now
            $insertDeliveryQuery = "INSERT INTO delivery (order_id, status, delivery_date) 
                                    VALUES (:order_id, 'processing', :delivery_date)";
            $stmt = $this->db->connect()->prepare($insertDeliveryQuery);
            $stmt->bindParam(':order_id', $order_id);
            $stmt->bindParam(':delivery_date', $deliveryDate);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo "Error approving order: " . $e->getMessage();
            return false;
        }
    }

    // Reject an order
    public function rejectOrder($order_id)
    {
        try {
            // Update order status to 'rejected'
            $updateOrderQuery = "UPDATE orders SET status = 'rejected' WHERE id = :order_id";
            $stmt = $this->db->connect()->prepare($updateOrderQuery);
            $stmt->bindParam(':order_id', $order_id);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo "Error rejecting order: " . $e->getMessage();
            return false;
        }
    }

    public function fetchProcessOrders($distributor_id)
    {
        try {
            $query = "SELECT d.id, d.order_id, r.first_name, r.last_name, r.contact, r.address, d.status 
                  FROM delivery d
                  JOIN orders o ON d.order_id = o.id
                  JOIN retailer r ON o.retailer_id = r.id
                  WHERE o.distributor_id = :distributor_id AND d.status = 'processing'";

            $stmt = $this->db->connect()->prepare($query);
            $stmt->execute(['distributor_id' => $distributor_id]);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error fetching delivery orders: " . $e->getMessage();
            return [];
        }
    }

    public function fetchTransitOrders($distributor_id)
    {
        try {
            $query = "SELECT d.id, d.order_id, r.first_name, r.last_name, r.contact, r.address, d.status 
                  FROM delivery d
                  JOIN orders o ON d.order_id = o.id
                  JOIN retailer r ON o.retailer_id = r.id
                  WHERE o.distributor_id = :distributor_id AND d.status = 'On Transit'";

            $stmt = $this->db->connect()->prepare($query);
            $stmt->execute(['distributor_id' => $distributor_id]);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error fetching delivery orders: " . $e->getMessage();
            return [];
        }
    }

    public function fetchDeliveredOrders($distributor_id)
    {
        try {
            $query = "SELECT d.id, d.order_id, r.first_name, r.last_name, r.contact, r.address, d.status 
                  FROM delivery d
                  JOIN orders o ON d.order_id = o.id
                  JOIN retailer r ON o.retailer_id = r.id
                  WHERE o.distributor_id = :distributor_id AND d.status = 'delivered'";

            $stmt = $this->db->connect()->prepare($query);
            $stmt->execute(['distributor_id' => $distributor_id]);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error fetching delivery orders: " . $e->getMessage();
            return [];
        }
    }

    public function updateDeliveryStatus($order_id, $status)
    {
        try {
            $query = "UPDATE delivery SET status = :status WHERE order_id = :order_id";
            $stmt = $this->db->connect()->prepare($query);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':order_id', $order_id);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating delivery status: " . $e->getMessage());
            return false;
        }
    }
    

}