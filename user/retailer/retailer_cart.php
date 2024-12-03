<?php
session_start();
if (!isset($_SESSION['retailer_id'])) {
    header('Location:../../login.php');
    exit;
}

require_once '../../classes/order.class.php';
$orderObj = new Order();
$retailer_id = $_SESSION['retailer_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['checkout'])) {
    // Fetch cart items and total amount
    $cartsData = $orderObj->getCartItems($retailer_id);
    $_SESSION['cart_items'] = $cartsData['items']; // Store items in session
    $_SESSION['cart_total'] = $cartsData['total']; // Store total amount in session

    // Redirect to retailer_checkout.php
    header('Location: retailer_checkout.php');
    exit;
}

// Handle delete request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cart_item_id'])) {
    $cartItemId = intval($_POST['cart_item_id']); // Sanitize input

    // Attempt to delete the cart item
    if ($orderObj->deleteCartItem($cartItemId, $retailer_id)) {
        $message = "Item successfully deleted.";
    } else {
        $errorMessage = "Failed to delete the item. Please try again.";
    }
}

// Fetch cart items
$cartsData = $orderObj->getCartItems($retailer_id);

// Extract items and total from cart data
$cartItems = $cartsData['items'] ?? [];
$totalAmount = $cartsData['total'] ?? 0;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../src/output.css">
    <link rel="stylesheet" href="../../src/user_dash.css">
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
</head>
<?php require_once '../../includes/retailer_topnav.php'; ?>

<body>
   

    <section class="container h-screen py-6 mx-auto bg-white">
        <h2 class="mb-4 text-2xl font-bold">Order Cart</h2>

        <!-- Display Success or Error Message -->
        <?php if (isset($message)): ?>
            <div class="p-4 mb-4 text-green-700 bg-green-100 rounded"><?php echo htmlspecialchars($message); ?></div>
        <?php elseif (isset($errorMessage)): ?>
            <div class="p-4 mb-4 text-red-700 bg-red-100 rounded"><?php echo htmlspecialchars($errorMessage); ?></div>
        <?php endif; ?>

        <table class="w-full table-auto">
            <thead class="border border-gray-100">
                <tr>
                    <th class="px-4 py-2">Product</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">Quantity</th>
                    <th class="px-4 py-2">Total</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($cartItems)): ?>
                    <?php foreach ($cartItems as $cart): ?>
                        <?php
                        $itemTotal = ($cart['price'] ?? 0) * ($cart['quantity'] ?? 0);
                        ?>
                        <tr>
                            <td class="px-4 py-2 "><?php echo htmlspecialchars($cart['product_name'] ?? 'N/A'); ?></td>
                            <td class="px-4 py-2">₱<?php echo htmlspecialchars(number_format($cart['price'] ?? 0, 2)); ?></td>
                            <td class="px-4 py-2 "><?php echo htmlspecialchars($cart['quantity'] ?? 0); ?></td>
                            <td class="px-4 py-2 ">₱<?php echo htmlspecialchars(number_format($itemTotal, 2)); ?></td>
                            <td class="px-4 py-2 ">
                            <form action="" method="POST" style="display:inline;">
                                    <input type="hidden" name="cart_item_id" value="<?php echo htmlspecialchars($cart['id']); ?>">
                                    <button type="submit" class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="px-4 py-2 text-center">This cart is empty.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <h4 class="m-2 text-lg font-semibold">Total Amount: ₱<?php echo htmlspecialchars(number_format($totalAmount, 2)); ?></h4>
        <section class="container flex justify-end py-6 mx-auto mt-12 bg-white">
            <div class="p-6 text-center">
                <h3 class="mb-4 text-xl font-semibold">Ready to place your order?</h3>
                <form action="" method="POST">
                    <button type="submit" name="checkout" class="px-6 py-3 text-lg font-bold text-white bg-blue-500 rounded-lg hover:bg-blue-600">
                        Proceed to Checkout
                    </button>
                </form>
            </div>
        </section>
    </section>
</body>
<?php
    require_once '../../includes/retailer_footer.php';
?> 
</html>
