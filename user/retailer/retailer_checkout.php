<?php
session_start();
if (!isset($_SESSION['retailer_id'])) {
    header('Location:../../login.php');
    exit;
}

// Check if cart data exists in session
if (!isset($_SESSION['cart_items']) || !isset($_SESSION['cart_total'])) {
    header('Location: retailer_cart.php'); // Redirect to cart page if no cart data
    exit;
}

$cartItems = $_SESSION['cart_items'];  // Cart items from session
$totalAmount = $_SESSION['cart_total']; // Total amount from session
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../src/output.css">
    <link rel="stylesheet" href="../../src/user_dash.css">
</head>

<body class="flex flex-col min-h-screen">
    <?php require_once '../../includes/retailer_topnav.php'; ?>

    <section class="container h-screen py-6 mx-auto bg-white">
        <h2 class="mb-4 text-2xl font-bold">Checkout</h2>

        <!-- Display Cart Items -->
        <table class="w-full table-auto">
            <thead class="border border-gray-100">
                <tr>
                    <th class="px-4 py-2">Product</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">Quantity</th>
                    <th class="px-4 py-2">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($cartItems)): ?>
                    <?php foreach ($cartItems as $cart): ?>
                        <tr>
                            <td class="px-4 py-2"><?php echo htmlspecialchars($cart['product_name'] ?? 'N/A'); ?></td>
                            <td class="px-4 py-2">₱<?php echo htmlspecialchars(number_format($cart['price'] ?? 0, 2)); ?></td>
                            <td class="px-4 py-2"><?php echo htmlspecialchars($cart['quantity'] ?? 0); ?></td>
                            <td class="px-4 py-2">₱<?php echo htmlspecialchars(number_format(($cart['price'] ?? 0) * ($cart['quantity'] ?? 0), 2)); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="px-4 py-2 text-center">Your cart is empty.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <h4 class="m-2 text-lg font-semibold">Total Amount: ₱<?php echo htmlspecialchars(number_format($totalAmount, 2)); ?></h4>

        <!-- Proceed to Order Confirmation -->
        <section class="container flex justify-end py-6 mx-auto mt-12 bg-white">
            <div class="p-6 text-center">
                <h3 class="mb-4 text-xl font-semibold">Ready to place your order?</h3>
                <form action="place_order.php" method="POST">
                    <button type="submit" name="place_order" class="px-6 py-3 text-lg font-bold text-white bg-blue-500 rounded-lg hover:bg-blue-600">
                        Place Order
                    </button>
                </form>
            </div>
        </section>
    </section>

    <?php require_once '../../includes/retailer_footer.php'; ?>
</body>

</html>
