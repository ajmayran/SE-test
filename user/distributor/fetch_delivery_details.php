<?php
require_once __DIR__ . '/../../classes/distributor.class.php';

if (isset($_GET['order_id'])) {
    $order_id = htmlspecialchars($_GET['order_id']);
    
    // Initialize Distributor class
    $distributor = new Order();

    // Fetch order details
    $orderDetails = $distributor->fetchOrderDetails($order_id);

    if (!empty($orderDetails)) {
        echo "<h5>Order ID: $order_id</h5>";
        echo "<br/>";
        echo "<ul>";
        $totalAmount = 0;

        foreach ($orderDetails as $detail) {
            $productName = htmlspecialchars($detail['product_name']);
            $quantity = htmlspecialchars($detail['quantity']);
            $price = htmlspecialchars($detail['price']);
            $total = $quantity * $price;
            $totalAmount += $total;

            echo "<li><strong>$productName</strong>: $quantity x ₱$price  </li>";
        }

        echo "</ul>";
        echo "<br/>";
        echo "<p><strong>Total Amount:</strong> ₱" . number_format($totalAmount, 2) . "</p>";
    } else {
        echo "<p>No details found for this order.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}
