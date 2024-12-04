<?php
session_start();

// Ensure retailer is logged in
if (!isset($_SESSION['retailer_id'])) {
    header('Location: ../../login.php');
    exit;
}

// Include the Order class and create an object
require_once '../../classes/order.class.php';
$orderObj = new Order();

// Ensure cart data exists
if (!isset($_SESSION['cart_items']) || !isset($_SESSION['cart_total']) || 
    !is_array($_SESSION['cart_items']) || !is_numeric($_SESSION['cart_total']) || 
    $_SESSION['cart_total'] <= 0) {
    $_SESSION['flash_message'] = "Invalid cart data.";
    header('Location: retailer_cart.php');
    exit;
}

// Place the order
if ($orderObj->confirmOrder($_SESSION['retailer_id'], $_SESSION['cart_items'], $_SESSION['cart_total'])) {
    // Clear cart session data

    $_SESSION['order_placed'] = true;
    header('Location: retailer_checkout.php');
    exit;
} else {
    // Log error and redirect to the checkout page
    error_log("Order placement failed for retailer ID: " . $_SESSION['retailer_id']);
    header('Location: retailer_checkout.php');
    exit;
}
?>
