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
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
</head>

<body class="flex flex-col min-h-screen">
    <?php
        $page_title = 'Dashboard';
        require_once '../../includes/retailer_topnav.php';
    ?>
    <div class="mt-10 container mx-auto">
        <a href="./retailer_dash.php" class="text-green-500 hover:text-green-700">
            Go back
        </a>
    </div>
    
    <section class="bg-white py-6 container mx-auto h-screen">
        <h2 class="text-2xl font-bold mb-10 text-green-500 flex justify-center">Checkout</h2>
        <div class="flex flex-row pt-10">
            <div class="pl-10 pt-5 border-t w-1/2">
                <h3 class="text-xl font-semibold mb-5">Delivery Address</h3>
                <p class="text-gray-700">
                    Micheal Jordan (+63) 997 945 1947<br>
                    119 Cabato Road<br>
                    Tetuan, Zamboanga City, Zamboanga Del Sur,<br>
                    Mindanao, 7000
                </p>
                <button onclick="openproductModal()" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mt-4">Change Address</button>
        
                <h3 class="text-xl font-semibold mt-6 mb-2">Payment Method</h3>
                <div class="flex items-center mb-2">
                    <input type="radio" class="mr-2" name="payment" value="cash">
                    <label class="text-gray-700">Cash on Delivery</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" class="mr-2" name="payment" value="gcash">
                    <label class="text-gray-700">G-cash</label>
                </div>
                <button onclick="openorderConfirmationModal()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mt-6 w-11/12 flex justify-center">Place Order</button>
                <form action="place_order.php" method="POST">
                    <button type="submit" name="place_order" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mt-6 w-11/12 flex justify-center">
                        Place Order
                    </button>
                </form>
            </div>
            <div class="w-1/2 border-l pt-5 border-t">
            <section class="container h-screen py-6 mx-auto bg-white">

        <!-- Display Cart Items -->
        <table class="w-full table-auto">
            <thead class="border border-gray-100">
                <tr>
                    <th class="px-4 py-2">Product</th>
                    <th class="px-4 py-2">Product Code</th>
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
                            <td class="px-4 py-2 text-lg text-center"><?php echo htmlspecialchars($cart['product_code'] ?? 'N/A'); ?></td>
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

        <!-- Proceed to Order Confirmation -->
        <section class="container flex justify-end mx-auto mt-12 bg-white border">
            <div class="p-4 text-center flex">
            <h4 class="m-2 text-lg font-semibold mr-5 text-green-500">Total Amount: ₱<?php echo htmlspecialchars(number_format($totalAmount, 2)); ?></h4>
            </div>
        </section>
    </section>
            </div>
        </div>
    </section>

    <?php require_once '../../includes/retailer_footer.php'; ?>

    <div id="productModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-white">
        <form>
            <h2 class="text-2xl font-bold mb-4">New Address</h2>
        
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full" />
                </div>
            </div>
        
            <div>
                <label class="block text-sm font-medium text-gray-700">Address</label>
                <input type="text" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full" />
            </div>
        
            <div>
                <label class="block text-sm font-medium text-gray-700">Apartment, suite, etc (Optional)</label>
                <input type="text" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full" />
            </div>
        
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Postal Code</label>
                    <input type="text" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">City</label>
                    <input type="text" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full" />
                </div>
            </div>
        
            <div>
                <label class="block text-sm font-medium text-gray-700">Province</label>
                <select class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full">
                    <option value="">Select a Province</option>
                    <option value="1">Province 1</option>
                    <option value="2">Province 2</option>
                    </select>
            </div>
        
            <div>
                <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="tel" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full" />
            </div>
        
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4 w-full">Submit</button>
        </form>
    </div>

    <div id="orderConfirmationModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-opacity-50">
        <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
          <h2 class="text-2xl font-bold mb-4 text-center">Your order has been placed successfully!</h2>
      
          <div class="mb-4">
            <h3 class="text-lg font-semibold mb-2">Delivery Details</h3>
            <p class="text-gray-700">
              <i class="fa-solid fa-location-dot mr-2"></i>Micheal Jordan (+63) 997 945 1947<br>
              119 Cabato Road, Tetuan, Zamboanga City, Zamboanga Del Sur, Mindanao, 7000
            </p>
            <p class="text-gray-700">Order ID: 340909EVJ4XVY</p>
            <p class="text-gray-700">Date Placed: 09/30/2024 16:22</p>
          </div>
      
          <div class="mb-4">
            <h3 class="text-lg font-semibold mb-2">Payment Method</h3>
            <p class="text-gray-700">
              <i class="fa-solid fa-money-bill-wave mr-2"></i> Cash on Delivery
            </p>
      
            <table class="w-full table-auto">
              <tbody>
                <tr>
                  <td class="px-4 py-2 text-right">Subtotal: 30 Items</td>
                  <td class="px-4 py-2 text-right">₱6,000.00</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 text-right">Shipping Fee</td>
                  <td class="px-4 py-2 text-right">₱60.00</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 text-right font-semibold">Total:</td>
                  <td class="px-4 py-2 text-right font-semibold text-green-500">₱6,060.00</td>
                </tr>
              </tbody>
            </table>
          </div>
      
          <div class="flex justify-end">
            <button onclick="closeorderConfirmationModal()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">Close</button>
            <a href="./retailer_purchase_status.php"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View My Purchase</button></a>
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
        
    </script>
</body>

</html>
