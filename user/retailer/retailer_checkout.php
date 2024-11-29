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
<body class="min-h-screen flex flex-col">
    <?php
        $page_title = 'Dashboard';
        require_once '../../includes/retailer_topnav.php';
    ?>
    <div class="mx-20 mt-10 container mx-auto">
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
            </div>
            <div class="w-1/2 border-l pt-5 border-t">
                <table class="w-full table-auto">
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 text-left"><iconify-icon icon="mingcute:store-line" class="mr-2"></iconify-icon>Magnolia Chicken</td>
                            <td class=" px-4 py-2 text-right">Quantity</td>
                            <td class=" px-4 py-2 text-right">Total</td>
                        </tr>
                        <tr>
                            <td class=" px-4 py-2 flex items-center">
                                <img src="https://via.placeholder.com/50" alt="Product Image" class="w-16 h-16 mr-4">
                                <div>
                                    <p class="text-gray-700">1kg Cut-ups Premium Quality Wings</p>
                                </div>
                            </td>
                            <td class=" px-4 py-2 text-right">10</td>
                            <td class=" px-4 py-2 text-right">₱2,000.00</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="border px-4 py-2 text-right">Subtotal: 30 items</td>
                            <td class="border px-4 py-2 text-right">₱6,000.00</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="border px-4 py-2 text-right">Shipping Fee</td>
                            <td class="border px-4 py-2 text-right">₱60.00</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="border px-4 py-2 text-right font-semibold">Total:</td>
                            <td class="border px-4 py-2 text-right font-semibold text-green-500">₱6,060.00</td>
                        </tr>
                    </tbody>
                </table>        
            </div>
        </div>
    </section>
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

  