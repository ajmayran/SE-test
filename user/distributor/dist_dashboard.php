<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distributors Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../../src/output.css">
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
        font-family: 'Lexend', sans-serif;
        }
        .sidebar-menu .group.active a{
            background-color: #27AE60;
            color: white;
            border-radius: 5px;
        }
        .sidebar-menu .group.active .icon{
            color: white;
        }
        
    </style>
</head>
<body class="bg-gray-100">
    <header class="sticky top-0 z-10 bg-white border-b border-gray-300 drop-shadow-sm">
        <div class="container flex items-center justify-between px-4 py-4 mx-auto">
            <div class="flex items-center">
                <img alt="PConnect Logo" class="w-8 h-8" src="../../resources/img/Pconnect Logo.png"/>
                <span class="ml-2 text-xl font-bold">
                PConnect
                </span>
            </div>
            <div class="flex items-center space-x-2">
                <span class="p-1 mb-1">Logo</span>
                <span class="p-1 mb-1">Shop Name</span>
                <a href="#" class="p-1 rounded-lg hover:bg-gray-100"><iconify-icon icon="mdi:notifications" class="text-xl text-green-500"></iconify-icon></a>
                <a href="#" class="p-1 rounded-lg hover:bg-gray-100"><iconify-icon icon="mdi:account" class="text-xl text-green-500"></iconify-icon></a>
            </div>
         </div>
    </header>
    <div class="flex">
        <aside class="w-1/4 min-h-screen mt-0.5 bg-white sidebar-menu">
            <ul class="m-10 ml-10 space-y-2">
                <li class="group active">
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="#"><iconify-icon icon="mdi:home" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
                        <span class="ml-2 font-normal">Dashboard</span>
                    </a>
                </li>
                <li class="group">
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_orders.php"><iconify-icon icon="material-symbols-light:sell" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
                        <span class="ml-2 font-normal">My Orders</span>
                    </a>
                </li>
                <li class="group">
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_return.php"><iconify-icon icon="ph:key-return-fill" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
                        <span class="ml-2 font-normal">Return | Refund</span>
                    </a>
                </li>
                <li class="group">
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_cancellation.php"><iconify-icon icon="basil:cancel-solid" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
                        <span class="ml-2 font-normal">Cancellation</span>
                    </a>
                </li>
                <li class="group">
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_delivery.php"><iconify-icon icon="mdi:truck-delivery" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
                        <span class="ml-2 font-normal">Delivery</span>
                    </a>
                </li>
                <hr class="border-gray-300 shadow-sm"/>
                <li class="group">
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_products.php"><iconify-icon icon="dashicons:products" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
                        <span class="ml-2 font-normal">My Products</span>
                    </a>
                </li>
                <li class="group">
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_inventory.php"><iconify-icon icon="ic:baseline-inventory-2" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
                        <span class="ml-2 font-normal">Inventory</span>
                    </a>
                </li>
                <hr class="border-gray-300 shadow-sm"/>
                <li class="group">
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_messages.php"><iconify-icon icon="ant-design:message-filled" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
                        <span class="ml-2 font-normal">Messages</span>
                    </a>
                </li>
                <li class="group">
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_blocking.php"><iconify-icon icon="material-symbols:block" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
                        <span class="ml-2 font-normal">Blocking</span>
                    </a>
                </li>
                <hr class="border-gray-300 shadow-sm"/>
                <li class="group">
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_income.php"><iconify-icon icon="solar:money-bag-bold" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
                        <span class="ml-2 font-normal">My Income</span>
                    </a>
                </li>
                <li class="group">
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_insights.php"><iconify-icon icon="gg:insights" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
                        <span class="ml-2 font-normal">Business Insights</span>
                    </a>
                </li>
                <hr class="border-gray-300 shadow-sm"/>

                <li class="group">
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_voucher.php"><iconify-icon icon="mdi:voucher" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
                        <span class="ml-2 font-normal">Voucher</span>
                    </a>
                </li>
                <li class="group">
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_settings.php"><iconify-icon icon="material-symbols:settings" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
                        <span class="ml-2 font-normal">Shop Settings</span>
                    </a>
                </li>
            </ul>
        </aside>
        
        <main class="w-3/4 p-8 overflow-y-auto" style="max-height:100vh;">
            <h1 class="mb-4 text-2xl font-semibold">Overview</h1>
            
            <!-- Overview Section -->
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3"> 
                <!-- Product Sales -->
                <div class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="text-lg font-semibold"><iconify-icon icon="healthicons:money-bag" class="pb-1 mr-1 text-xl text-green-500 align-middle"></iconify-icon>Product Sales</h3>
                <canvas id="productSalesChart" class="mt-4"></canvas>
                </div>
        
                <!-- Add to Cart -->
                <div class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="text-lg font-semibold"><iconify-icon icon="mdi:cart" class="pb-1 mr-1 text-xl text-green-500 align-middle"></iconify-icon>Add to Cart</h3>
                <canvas id="addToCartChart" class="mt-4"></canvas>
                </div>
        
                <!-- Checkout -->
                <div class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="text-lg font-semibold"><iconify-icon icon="material-symbols:shopping-cart-checkout" class="pb-1 mr-1 text-xl text-green-500 align-middle"></iconify-icon>Checkout</h3>
                <canvas id="checkoutChart" class="mt-4"></canvas>
                </div>
            </div>
  
      
            <div class="grid grid-cols-1 gap-4 mt-6 lg:grid-cols-3">
                <!-- Most Selling Products -->
                <div class="col-span-1 p-4 bg-white rounded-lg shadow-md lg:col-span-2">
                <h3 class="text-lg font-semibold"><iconify-icon icon="mdi:fire" class="pb-1 mr-1 text-xl text-green-500 align-middle"></iconify-icon>Most Selling Products</h3>
                <table class="w-full mt-4 text-sm table-auto">
                    <thead>
                    <tr class="border-b">
                        <th class="py-2 text-left">Product</th>
                        <th class="py-2 text-left"></th>
                        <th class="py-2 text-left">Category</th>
                        <th class="py-2 text-right">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-b">
                        <td class="py-2"><img src="../../resources/img/Products/rtc-fried-chicken.png" alt="" class="w-16 h-16 rounded"></td>
                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Fried Chicken</td>
                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                        <td class="py-2 text-right text-[12px] font-light">₱200</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2"><img src="../../resources/img/Products/Chicken-lumpia-shanghai-mix.png" alt="" class="ml-1 rounded h-14 w-14"></td>
                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Chicken Lumpia  Shanghai Mix</td>
                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                        <td class="py-2 text-right text-[12px] font-light">₱200</td>
                    </tr>
                    <!-- Rows -->
                    </tbody>
                </table>
                </div>
  
             <!-- Chart Orders -->
                <div class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="text-lg font-semibold"><iconify-icon icon="lets-icons:order-fill" class="pb-1 mr-1 text-xl text-green-500 align-middle"></iconify-icon>Orders</h3>
                <canvas id="chartOrders"></canvas>
                </div>
            </div>
  
            <!-- Income Section -->
            <div class="grid grid-cols-1 gap-4 mt-6 lg:grid-cols-3">
                <div class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="text-lg font-semibold"><iconify-icon icon="tdesign:money" class="pb-1 mr-1 text-xl text-green-500 align-middle"></iconify-icon>Income</h3>
                <canvas id="incomeChart"></canvas>
                </div>
        
                <!-- Trending Products -->
                <div class="col-span-1 p-4 bg-white rounded-lg shadow-md lg:col-span-2">
                <h3 class="text-lg font-semibold"><iconify-icon icon="mdi:fire" class="pb-1 mr-1 text-xl text-green-500 align-middle"></iconify-icon>Trending Products</h3>
                <table class="w-full mt-4 text-sm table-auto">
                    <thead>
                    <tr class="border-b">
                        <th class="py-2">#</th>
                        <th class="py-2 text-left">Product</th>
                        <th class="py-2 text-left"></th>
                        <th class="py-2 text-left">Category</th>
                        <th class="py-2 text-right">Likes</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-b">
                        <td class="px-2 py-2">1</td>
                        <td class="py-2"><img src="../../resources/img/Products/rtc-chicken-siomai.png" alt="" class="w-16 h-16 rounded"></td>
                        <td class="py-2 text-[12px] font-light">Ready to Cook Chicken Siomai</td>
                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                        <td class="py-2 text-right text-[12px] font-light">314</td>
                    </tr>
                    <tr class="border-b">
                        <td class="px-2">2</td>
                        <td class="py-2"><img src="../../resources/img/Products/rtc-chicken-lumpia.png" alt="" class="w-16 h-16 rounded"></td>
                        <td class="py-2 text-[12px] font-light">Ready to Cook Chicken Lumpia</td>
                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                        <td class="py-2 text-right text-[12px] font-light">290</td>
                    </tr>         
                    </tbody>
                </table>
            </div>
         </div>
        </main>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../../js/tailwind/dist_dashboard.js"></script>
</body>
</html>