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
    <header class="bg-white shadow-sm">
        <nav class="flex items-center justify-between w-full px-20 py-4 bg-white shadow-sm min-h-20">
            <div class="flex items-center" >
                <img src="../../resources/img/Pconnect Logo.png" alt="PC Connect Logo" class="h-10 mr-4">
                <span class="text-2xl font-semibold text-black-700">PConnect</span>
                <div class="relative flex items-center px-10">
                    <select class="px-3 py-2 ml-64 mr-2 bg-gray-200 border border-gray-300 rounded-md">
                        <option value="all">All Categories</option>
                        <option value="all">Meow</option>
                        <option value="all">Meow2</option>
                    </select>
                    <input type="text" placeholder="Search for items..." class="flex-1 px-3 py-2 bg-gray-200 border border-gray-300 rounded-md">
                    <button class="px-4 py-2 font-bold text-white bg-green-500 rounded-md hover:bg-green-700">
                        <iconify-icon icon="mdi:search" class="text-lg"></iconify-icon> 
                    </button>
                </div>
            </div>
            <div class="flex items-center">
                <a href="./retailer_cart.php" class="mr-4 text-gray-500 hover:text-gray-700">
                    <iconify-icon icon="mdi:cart" class="text-3xl"></iconify-icon> 
                </a>
                <a href="#" class="mr-4 text-gray-500 hover:text-gray-700">
                    <iconify-icon icon="mdi:notifications" class="text-3xl"></iconify-icon> 
                </a>
                <div class="flex items-center">
                    <img src="../../resources/img/avatar.png.jpeg" alt="User Profile" class="w-8 h-8 mr-2 rounded-full">
                    <span class="font-medium text-gray-700">Michael Jordan</span>
                </div>
            </div>
        </nav>
        <nav class="flex items-center justify-between bg-white shadow-sm">
            <div class="w-full px-20 py-2 text-white bg-gray-900">
                <ul class="flex justify-center space-x-20 ">
                    <li class=" hover:text-green-500"><a href="./retailer_dash.php">HOME</a></li>
                    <li class=" hover:text-green-500"><a href="#">DISTRIBUTORS</a></li>
                    <li class=" hover:text-green-500"><a href="#">PRODUCTS</a></li>
                    <li class=" hover:text-green-500"><a href="#">CATEGORY</a></li>
                </ul>
            </div>
        </nav>
    </header>
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
    <footer class="py-8" style="background-color: #282424;">
        <div class="container px-4 mx-auto mt-10">
            <div class="flex justify-between">
                <div>
                    <h3 class="mb-2 font-semibold text-gray-100">Information</h3>
                    <ul>
                        <li class="mb-1"><a href="#" class="font-light text-gray-500 hover:text-gray-200">About Us</a></li>
                        <li class="mb-1"><a href="#" class="font-light text-gray-500 hover:text-gray-200">Testimonial</a></li>
                        <li class="mb-1"><a href="#" class="font-light text-gray-500 hover:text-gray-200">Blogs</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-2 font-semibold text-gray-100">Helpful Links</h3>
                    <ul>
                        <li class="mb-1"><a href="#" class="font-light text-gray-500 hover:text-gray-200">Services</a></li>
                        <li class="mb-1"><a href="#" class="font-light text-gray-500 hover:text-gray-200">Supports</a></li>
                        <li class="mb-1"><a href="#" class="font-light text-gray-500 hover:text-gray-200">Terms of service</a></li>
                        <li class="mb-1"><a href="#" class="font-light text-gray-500 hover:text-gray-200">Privacy Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-2 font-semibold text-gray-100">Our Services</h3>
                    <ul>
                        <li class="mb-1"><a href="#" class="font-light text-gray-500 hover:text-gray-200">Become seller</a></li>
                        <li class="mb-1"><a href="#" class="font-light text-gray-500 hover:text-gray-200">Service Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-2 font-semibold text-gray-100">Contact us</h3>
                    <ul>
                        <li class="mb-1"><a href="#" class="font-light text-gray-500 hover:text-gray-200">Email Us</a></li>
                        <li class="mb-1"><a href="#" class="font-light text-gray-500 hover:text-gray-200">Message Us</a></li>
                        <li class="mb-1"><a href="#" class="font-light text-gray-500 ">Mon-Sat 9am-3pm GMT+8</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-2 font-semibold text-gray-100">Get Social With Us</h3>
                    <div class="flex space-x-2">
                        <a href="#" class="text-gray-300"><svg xmlns="http://www.w3.org/2000/svg" class="text-xl" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M20.9 2H3.1A1.1 1.1 0 0 0 2 3.1v17.8A1.1 1.1 0 0 0 3.1 22h9.58v-7.75h-2.6v-3h2.6V9a3.64 3.64 0 0 1 3.88-4a20 20 0 0 1 2.33.12v2.7H17.3c-1.26 0-1.5.6-1.5 1.47v1.93h3l-.39 3H15.8V22h5.1a1.1 1.1 0 0 0 1.1-1.1V3.1A1.1 1.1 0 0 0 20.9 2" />
                        </svg></a>
                        <a href="#" class="text-gray-300"><iconify-icon icon="mdi:instagram" class="text-xl"></iconify-icon> </a>
                        <a href="#" class="text-gray-300"><iconify-icon icon="mdi:linkedin" class="text-xl"></iconify-icon> </a>
                        <a href="#" class="text-gray-300"><svg xmlns="http://www.w3.org/2000/svg" class="text-xl" width="0.88em" height="1em" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96v320c0 35.3 28.7 64 64 64h320c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64zm297.1 84L257.3 234.6L379.4 396h-95.6L209 298.1L123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5l78.2-89.5zm-37.8 251.6L153.4 142.9h-28.3l171.8 224.7h26.3z" />
                        </svg></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-36">
                <p class="font-light text-gray-500">©2024 Pconnect | All rights reserved</p>
            </div>
        </div>
    </footer>
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

  