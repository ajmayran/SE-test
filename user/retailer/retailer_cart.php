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
        $message = "Item successfully removed.";
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
            <div class="p-4 mb-4 text-green-700 bg-green-100 rounded" id="success"><?php echo htmlspecialchars($message); ?></div>
        <?php elseif (isset($errorMessage)): ?>
            <div class="p-4 mb-4 text-red-700 bg-red-100 rounded" id="fail"><?php echo htmlspecialchars($errorMessage); ?></div>
        <?php endif; ?>

        <table class="w-full table-auto">
            <thead class="border border-gray-100">
                <tr>
                    <th class="px-4 py-2">Product</th>
                    <th class="px-4 py-2">Product Code</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">Quantity</th>
                    <th class="px-4 py-2">Total</th>
                    <th class="px-4 py-2"></th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($cartItems)): ?>
                    <?php foreach ($cartItems as $cart): ?>
                        <?php
                        $itemTotal = ($cart['price'] ?? 0) * ($cart['quantity'] ?? 0);
                        ?>
                        <tr class="border">
                            <td class="px-4 py-2 text-lg font-bold text-center"><?php echo htmlspecialchars($cart['product_name'] ?? 'N/A'); ?></td>
                            <td class="px-4 py-2 text-lg text-center"><?php echo htmlspecialchars($cart['product_code'] ?? 'N/A'); ?></td>
                            <td class="px-4 py-2 text-center">₱<?php echo htmlspecialchars(number_format($cart['price'] ?? 0, 2)); ?></td>
                            <td class="px-4 py-2 text-center"><?php echo htmlspecialchars($cart['quantity'] ?? 0); ?></td>
                            <td class="px-4 py-2 text-center">₱<?php echo htmlspecialchars(number_format($itemTotal, 2)); ?></td>
                            <td class="px-4 py-2 text-center">
                                <form action="" method="POST" style="display:inline;">
                                    <input type="hidden" name="cart_item_id" value="<?php echo htmlspecialchars($cart['id']); ?>">
                                    <button type="submit" class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">Remove</button>
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

        <section class="container flex justify-end mx-auto mt-12 bg-white border">
            <div class="flex p-6 text-center">
                <h4 class="m-2 mr-5 text-lg font-semibold text-green-500">Total Amount: ₱<?php echo htmlspecialchars(number_format($totalAmount, 2)); ?></h4>
                <form action="" method="POST" onsubmit="return validateCart()">
                    <button type="submit" name="checkout" class="px-6 py-2 text-lg font-bold text-white bg-green-500 rounded-lg hover:bg-green-600">
                        Proceed to Checkout
                    </button>
                </form>
            </div>
        </section>
    </section>
    <script>
        function validateCart() {
            const cartItems = <?php echo json_encode($cartItems); ?>;
            if (!cartItems || cartItems.length === 0) {
                alert('Your cart is empty! You cannot proceed to checkout.');
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
        setTimeout(() => {
            const successAlert = document.getElementById('success');
            if (successAlert) {
                successAlert.style.display = 'none';
            }
        }, 2000);

        // Automatically hide error alert after 3 seconds
        setTimeout(() => {
            const errorAlert = document.getElementById('fail');
            if (errorAlert) {
                errorAlert.style.display = 'none';
            }
        }, 3000);
    </script>
</body>
<?php
require_once '../../includes/retailer_footer.php';
?>

</html>