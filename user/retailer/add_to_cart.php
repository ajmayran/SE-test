<?php
session_start();
require_once '../../classes/account.class.php'; // Include your Order class
require_once '../../classes/order.class.php'; // Include your Order class

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the product ID and quantity from the form submission
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Check if the user is logged in (retailer_id should be set in session)
    if (!isset($_SESSION['retailer_id'])) {
        header('Location: ./login.php');
        exit;
    }

    // Create an instance of the Order class
    $orderObj = new Order();
    $retailer_id = $_SESSION['retailer_id'];

    // Add the product to the cart
    if ($orderObj->addToCart($retailer_id, $product_id, $quantity)) {
        // Redirect back to the retailer dashboard or cart page with a success message
        header('Location: ./retailer_cart.php?success=Product added to cart');
    } else {
        // Handle the error (e.g., product could not be added)
        header('Location: ./retailer_dash.php?error=Could not add product to cart');
    }
}
?>