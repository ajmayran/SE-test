<?php
session_start();

$orderPlaced = isset($_SESSION['order_placed']) ? $_SESSION['order_placed'] : false;
unset($_SESSION['order_placed']); // Clear the session variable

// Debugging output
if ($orderPlaced) {
    echo "<script>console.log('Order was placed successfully.');</script>";
} else {
    echo "<script>console.log('Order was NOT placed.');</script>";
}


if (!isset($_SESSION['retailer_id'])) {
    header('Location:../../login.php');
    exit;
}


// Check if cart data exists in session
if (!isset($_SESSION['cart_items']) || !isset($_SESSION['cart_total'])) {
    // Handle the case where there are no cart items
    $totalQuantity = 0;
} else {
    $cartItems = $_SESSION['cart_items'];
    $totalQuantity = 0;

    // Loop through each cart item and sum the quantities
    foreach ($cartItems as $cart) {
        $totalQuantity += isset($cart['quantity']) ? $cart['quantity'] : 0;
    }
}
$currentDate = date('F j, Y');
$cartItems = $_SESSION['cart_items'];  // Cart items from session
$totalAmount = $_SESSION['cart_total']; // Total amount from session

$subtotal = 0;
foreach ($cartItems as $cart) {
    $subtotal += ($cart['price'] ?? 0) * ($cart['quantity'] ?? 0);
}

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
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
</head>

<body class="flex flex-col min-h-screen">
    <?php
    $page_title = 'Dashboard';
    require_once '../../includes/retailer_topnav.php';
    ?>
    <div class="container mx-auto mt-10">
        <a href="./retailer_dash.php" class="text-green-500 hover:text-green-700">
            Go back
        </a>
    </div>

    <section class="container h-screen py-6 mx-auto bg-white">
        <h2 class="flex justify-center mb-10 text-2xl font-bold text-green-500">Checkout</h2>
        <div class="flex flex-row pt-10">
            <div class="w-2/5 p-10 border-t">
                <h3 class="mb-5 text-xl font-semibold">Delivery Address and Contact</h3>
                <p class="text-gray-700">
                    <?php echo isset($_SESSION['retailer_fname']) ? htmlspecialchars($_SESSION['retailer_fname']) : 'Guest'; ?> <?php echo isset($_SESSION['retailer_lname']) ? htmlspecialchars($_SESSION['retailer_lname']) : 'Guest'; ?> <span><?php echo isset($_SESSION['retailer_contact']) ? htmlspecialchars($_SESSION['retailer_contact']) : 'Guest'; ?></span> <br>
                    <?php echo isset($_SESSION['retailer_address']) ? htmlspecialchars($_SESSION['retailer_address']) : 'Guest'; ?><br>
                    Zamboanga Del Sur,<br>
                    Mindanao, 7000
                </p>
                <button onclick="openproductModal()" class="px-4 py-2 mt-4 font-bold text-white bg-blue-500 rounded hover:bg-blue-600">Change Address</button>

                <button type="button" onclick="openorderConfirmationModal()" name="place_order" class="flex justify-center w-11/12 px-4 py-2 mt-6 font-bold text-white bg-green-500 rounded hover:bg-green-600">
                    Place Order
                </button>
            </div>
            <div class="w-3/5 pt-5 border-t border-l">
                <section class="container h-screen py-6 mx-auto bg-white">

                    <!-- Display Cart Items -->
                    <table class="w-full table-auto">
                        <thead class="border border-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left">Product Code</th>
                                <th class="px-4 py-2 text-left">Product</th>
                                <th class="px-4 py-2 text-left">Price</th>
                                <th class="px-4 py-2 text-left">Quantity</th>
                                <th class="px-4 py-2 text-left">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($cartItems)): ?>
                                <?php foreach ($cartItems as $cart): ?>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold text-[12px]"><?php echo htmlspecialchars($cart['product_code'] ?? 'N/A'); ?></td>
                                        <td class="px-4 py-2 font-light text-[12px]"><?php echo htmlspecialchars($cart['product_name'] ?? 'N/A'); ?></td>
                                        <td class="px-4 py-2 font-light text-[12px]">₱<?php echo htmlspecialchars(number_format($cart['price'] ?? 0, 2)); ?></td>
                                        <td class="px-4 py-2 font-light text-[12px]"><?php echo htmlspecialchars($cart['quantity'] ?? 0); ?></td>
                                        <td class="px-4 py-2 font-light text-[12px]">₱<?php echo htmlspecialchars(number_format(($cart['price'] ?? 0) * ($cart['quantity'] ?? 0), 2)); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="px-4 py-2 text-center">Your cart is empty.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                    <!-- Proceed to Order Confirmation -->
                    <section class="container flex justify-end mx-auto mt-12 bg-white border">
                        <div class="p-4 text-right">
                            <h4 class="m-2 mr-5 text-lg font-semibold text-green-500">Subtotal: ₱<?php echo htmlspecialchars(number_format($subtotal, 2)); ?></h4>
                            <h4 class="m-2 mr-5 text-lg font-semibold text-red-500">Discount: -₱<?php echo htmlspecialchars($cart['discount'] ?? '0'); ?></h4>
                            <h4 class="m-2 mr-5 text-lg font-semibold text-green-500">Total Amount: ₱<?php echo htmlspecialchars(number_format($totalAmount, 2)); ?></h4>
                        </div>
                    </section>
                </section>
            </div>
        </div>
    </section>

    <?php 
    require_once '../../includes/retailer_footer.php'; 
    ?>
    
    <div id="productModal" class="flex items-center justify-center">
     <div class="fixed z-50 flex items-center justify-center w-1/3 bg-white border shadow-lg h-3/4">
            <form>
                <h2 class="mb-4 text-2xl font-bold">New Address</h2>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">First Name</label>
                        <input type="text" class="w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input type="text" class="w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Address</label>
                    <input type="text" class="w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Apartment, suite, etc (Optional)</label>
                    <input type="text" class="w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Postal Code</label>
                        <input type="text" class="w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">City</label>
                        <input type="text" class="w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Province</label>
                    <select class="w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Select a Province</option>
                        <option value="1">Province 1</option>
                        <option value="2">Province 2</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="tel" class="w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                </div>
                <div class="flex justify-center">
                    <button onclick="closeproductModal()" class="w-2/3 px-4 py-2 mt-4 mr-5 font-bold text-white bg-gray-400 rounded hover:bg-gray-500">Cancel</button>
                    <button type="submit" class="w-2/3 px-4 py-2 mt-4 font-bold text-white bg-green-500 rounded hover:bg-green-700">Submit</button>
                </div>
            </form>
           </div>
        </div>
 

    <div id="orderConfirmationModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-opacity-50">
        <div class="w-1/3 p-6 bg-white rounded-lg shadow-lg">
            <h2 class="mb-4 text-2xl font-bold text-center">Confirm Your Order</h2>
            <div class="mb-4">
                <h3 class="mb-2 text-lg font-semibold">Delivery Details</h3>
                <p class="text-gray-700">
                    <i class="mr-2 fa-solid fa-location-dot"><?php echo isset($_SESSION['retailer_fname']) ? htmlspecialchars($_SESSION['retailer_fname']) : 'Guest'; ?> <?php echo isset($_SESSION['retailer_lname']) ? htmlspecialchars($_SESSION['retailer_lname']) : 'Guest'; ?> <?php echo isset($_SESSION['retailer_contact']) ? htmlspecialchars($_SESSION['retailer_contact']) : 'Guest'; ?></i><br>
                    <?php echo isset($_SESSION['retailer_address']) ? htmlspecialchars($_SESSION['retailer_address']) : 'Guest'; ?><br>
                    Zamboanga Del Sur, <br>
                    Mindanao, 7000
                </p>
                <p class="text-gray-700">Date Placed: <?php echo date('F j, Y'); // Outputs: "December 5, 2024" ?>
            </div>

            <div class="mb-4">
                <h3 class="mb-2 text-lg font-semibold">Payment Method</h3>
                <p class="text-gray-700">
                    <i class="mr-2 fa-solid fa-money-bill-wave"></i> Cash on Delivery
                </p>

                <table class="w-full table-auto">
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 text-right">Total Items: <?php echo htmlspecialchars($totalQuantity); ?> </td>
                            <td class="px-4 py-2 text-right"><?php echo htmlspecialchars($totalQuantity); ?> </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-right">Subtotal: </td>
                            <td class="px-4 py-2 text-right">₱<?php echo number_format($subtotal, 2); ?></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-right">Discount: </td>
                            <td class="px-4 py-2 text-right">₱<?php echo isset($_SESSION['discount']) ? htmlspecialchars($_SESSION['discount']) : '0'; ?></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold text-right">Total:</td>
                            <td class="px-4 py-2 font-semibold text-right text-green-500">₱<?php echo number_format($totalAmount, 2); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex justify-end mt-4">
            <form action=""><button onclick="closeorderConfirmationModal()" class="px-4 py-2 mr-2 font-bold text-white bg-red-500 rounded hover:bg-red-600">Cancel</button></form>
                <form action="place_order.php" method="POST">
                    <button type="submit" class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-600">Confirm</button>
                </form>
            </div>
        </div>
    </div>

    <div id="finalConfirmationModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-opacity-50">
        <div class="w-1/3 p-6 bg-white rounded-lg shadow-lg">
            <h2 class="mb-4 text-2xl font-bold text-center">Your order has been placed successfully!</h2>
            <!-- Display Order Summary -->
            <div class="mt-4">
                <h3 class="font-semibold">Order Summary:</h3>
                <ul>
                    <?php foreach ($cartItems as $cart): ?>
                        <li><?php echo htmlspecialchars($cart['product_name']); ?> - ₱<?php echo number_format($cart['price'] * $cart['quantity'], 2); ?> (<?php echo htmlspecialchars($cart['quantity']); ?>)</li>
                    <?php endforeach; ?>
                </ul>
                <h4 class="mt-2 font-bold">Total: ₱<?php echo number_format($totalAmount, 2); ?></h4>
            </div>


            <div class="flex justify-end">
                <a href="./retailer_purchase_status.php"><button class="px-4 py-2 font-bold text-gray-500 bg-gray-200 border border-gray-500 rounded hover:text-white hover:bg-gray-500">View My Purchase</button></a>
            </div>
        </div>
    </div>

    <?php
    require_once '../../includes/retailer_footer.php';
    ?>
    <script>
        function openproductModal() {
            document.getElementById('productModal').classList.remove('hidden');
        }

        function closeproductModal() {
            document.getElementById('productModal').classList.add('hidden');
        }

        function openorderConfirmationModal() {
            document.getElementById('orderConfirmationModal').classList.remove('hidden');
        }

        function closeorderConfirmationModal() {
            document.getElementById('orderConfirmationModal').classList.add('hidden');
        }

        function openFinalConfirmationModal() {
            document.getElementById('finalConfirmationModal').classList.remove('hidden');
        }

        function closeFinalConfirmationModal() {
        document.getElementById('finalConfirmationModal').classList.add('hidden');
        }

        // Check if the order was placed and open the modal
        <?php if ($orderPlaced): ?>
            openFinalConfirmationModal();
        <?php endif; ?>
    </script>
</body>

</html>