<?php
session_start();

// Ensure retailer is logged in
if (!isset($_SESSION['retailer_id'])) {
    header('Location:../../login.php');
    exit;
}

// Include the Order class and create an object
require_once '../../classes/order.class.php';  // Adjust the path if necessary
$orderObj = new Order();  // Initialize the order object

// Ensure cart data exists
if (!isset($_SESSION['cart_items']) || !isset($_SESSION['cart_total'])) {
    header('Location: retailer_cart.php');
    exit;
}

// Place the order (ensure you pass the necessary parameters, like retailer_id and any other needed info)
if ($orderObj->confirmOrder($_SESSION['retailer_id'], $_SESSION['cart_items'], $_SESSION['cart_total'])) {
    // Clear cart session data after order is placed
    unset($_SESSION['cart_items']);
    unset($_SESSION['cart_total']);
    
    // Redirect to order confirmation page or success page
    header('Location: ./retailer_purchase_status.php');
    exit;
} else {
    // Handle order placement failure
    echo "There was an issue placing your order.";
}
?>
