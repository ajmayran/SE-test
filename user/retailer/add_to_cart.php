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

    if ($orderObj->addToCart($retailer_id, $product_id, $quantity)) {
        // Set a success message in the session
        $_SESSION['success_message'] = 'Product successfully added to cart!';
    } else {
        // Set an error message in the session
        $_SESSION['error_message'] = 'Failed to add product to cart.';
    }

    // Redirect back to the same page
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
?>