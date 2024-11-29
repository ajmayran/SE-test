<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distributors Products</title>
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
        th {
        white-space: nowrap;
        }
        td {
        white-space: nowrap;
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
                <li class="group">
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_dashboard.php"><iconify-icon icon="mdi:home" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
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
                <li class="group active">
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
            <h1 class="p-3 text-2xl font-semibold bg-green-300 rounded-t-md">Products</h1>
            <div class="p-6 bg-white rounded-b-lg shadow-sm">
                <!-- Header Section -->
                
                <div class="flex items-center justify-between mb-4 space-x-4">
                  <!-- Search Bar -->
                  <div class="flex items-center w-full max-w-md">
                    <input type="text" placeholder="Search product" class="w-64 px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-green-500"/>
                    <button class="w-12 p-2 text-white bg-green-500 rounded-r-md hover:bg-green-600 focus:outline-none">
                        <iconify-icon icon="material-symbols:search" class="items-center p-1 text-xl align-middle"></iconify-icon>
                    </button>
                  </div>
                
                  <!-- Category Filter -->
                  <div class="flex items-center space-x-2">
                        <span class="text-gray-700">Category</span>
                        <div class="relative">
                            <select class="w-full px-3 py-2 border rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-green-500">
                                <option>All</option>
                                <option>Frozen Goods</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <iconify-icon icon="mdi:arrow-down-drop" class="w-4 h-4 text-xl"></iconify-icon>
                            </div>
                        </div>
                  </div>
                    <button type="" onclick="openproductModal()"  class="px-2 py-2 text-white bg-green-500 rounded-md hover:bg-green-600">Add Product</button>        
                </div>
              
                <!-- Table Section -->
                <div class="overflow-x-auto bg-white">
                  <table class="min-w-full table-auto">
                    <thead>
                      <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-sm font-medium text-left text-gray-700">Image</th>
                        <th class="px-4 py-2 text-sm font-medium text-left text-gray-700">Name</th>
                        <th class="px-4 py-2 text-sm font-medium text-left text-gray-700">Category</th>
                        <th class="px-4 py-2 text-sm font-medium text-center text-gray-700">Stocks</th>
                        <th class="px-4 py-2 text-sm font-medium text-left text-gray-700">Minimum  Purchase Qty</th>
                        <th class="px-4 py-2 text-sm font-medium text-left text-gray-700">Maximum Purchase Qty</th>
                        <th class="px-4 py-2 text-sm font-medium text-left text-gray-700">Tags</th>
                        <th class="px-4 py-2 text-sm font-medium text-left text-gray-700">Price</th>
                        <th class="px-4 py-2 text-sm font-medium text-center text-gray-700">Date Added</th>
                        <th class="px-4 py-2 text-sm font-medium text-center text-gray-700">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- Data Rows -->     
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/rtc-chicken-inasal.png" class="w-12 h-12 my-1 ml-3 rounded-xl" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Chicken Inasal</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">100</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>            
                      </tr>
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/rtc-chicken-bbq.png" class="w-12 h-12 my-1 ml-3 rounded-xl" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Chicken BBQ</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">100</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>
                      </tr>
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/rtc-chicken-siomai.png" class="w-10 h-10 my-1 ml-4 rounded-md" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Chicken Siomai</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">400</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>
                      </tr>
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/rtc-chicken-longanisa.png" class="w-12 h-12 my-1 ml-3 rounded-xl" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Chicken Longanisa</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">300</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>
                      </tr>
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/rtc-cheesy-chicken-fingers.png" class="w-12 h-12 my-1 ml-3 rounded-xl" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Chicken Cheesy Fingers</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">100</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>
                      </tr>
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/rtc-chicken-lumpia.png" class="w-10 h-10 my-1 ml-4 rounded-md" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Chicken Lumpia</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">250</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>
                      </tr>
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/rtc-chicken-tapa.png" class="w-10 h-10 my-1 ml-4 rounded-md" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Chicken Tapa</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">100</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>
                      </tr>
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/rtc-korean-chicken-bbq.png" class="w-10 h-10 my-1 ml-4 rounded-md" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Korean Chicken BBQ</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">100</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>
                      </tr>
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/rtc-chicken-teriyaki.png" class="w-12 h-12 my-1 ml-3 rounded-xl" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Chicken Teriyaki</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">100</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>
                      </tr>
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/rtc-mideterranian.png" class="w-10 h-10 my-1 ml-4 rounded-md" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Middeterranian</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">100</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>
                      </tr>
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/rtc-fried-chicken.png" class="w-12 h-12 my-1 ml-3 rounded-xl" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Fried Chicken</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">250</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>
                      </tr>
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/rtc-chicken-tocino.png" class="w-12 h-12 my-1 ml-3 rounded-xl" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Chicken Tocino</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">200</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>
                      </tr>
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/rtc-vanilla-chicken-finger.png" class="w-10 h-10 my-1 ml-4 rounded-md" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Vanilla Chicken Finger</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">100</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>
                      </tr>
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/rtc-spicy-wings.png" class="w-12 h-12 my-1 ml-3 rounded-xl" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Spicy Wings</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">250</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>
                      </tr>
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/rtc-spicy-fried-chicken.png" class="w-12 h-12 my-1 ml-3 rounded-xl" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Spicy Fried Chicken</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">150</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>
                      </tr>
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/rtc-oriental-wings.png" class="w-12 h-12 my-1 ml-3 rounded-xl" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Oriental Wings</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">100</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>
                      </tr>
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/rtc-pepper-steak.png" class="w-10 h-10 my-1 ml-4 rounded-md" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Pepper Steak</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">100</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>
                      </tr>
                      <tr class="border-b border-gray-200 shadow-sm">
                        <td><img src="../../resources/img/Products/Chicken-lumpia-shanghai-mix.png" class="w-10 h-10 my-1 ml-4 rounded-md" alt=""></td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Ready to Cook Chicken Lumpia Shanghai Mix</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Frozen Goods</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">200</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">10</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">Food, Meat</td>   
                        <td class="px-4 py-2 text-[12px] font-light text-left">250.00</td>
                        <td class="px-4 py-2 text-[12px] font-light text-center">2024-11-20</td>
                        <td class="px-4 py-2 text-[12px] font-light text-left">
                            <button class="px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-400">Edit</button>
                            <button class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500">Delete</button>
                        </td>
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
        
    <div id="productModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">
        <div class="relative w-full max-w-3xl max-h-screen p-8 overflow-y-auto bg-white rounded-lg">
            <button onclick="closeproductModal()" class="absolute text-blue-600 top-4 right-4 hover:underline">
                Close
            </button>
            <div class="relative flex items-center justify-center w-1/4 h-40 mx-auto mb-6 ml-4 border-2 border-gray-400 border-dashed">
                <input type="file" class="absolute inset-0 opacity-0 cursor-pointer">
                <span class="text-gray-500">+ Add Photo</span>
            </div>
            <div class="flex">
                <div class="w-1/2 pr-4">
                    <div class="mb-4">
                        <label class="block mb-2 text-gray-700">Product Name</label>
                        <input type="text" placeholder="Enter Name of your Product" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-gray-700">Product Description</label>
                        <textarea placeholder="Enter Description" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-gray-700">Category</label>
                        <div class="relative">
                            <select class="w-full px-3 py-2 border rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-green-500">
                                <option>Choose Category</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <iconify-icon icon="mdi:arrow-down-drop" class="w-4 h-4 text-xl"></iconify-icon>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-gray-700">Price</label>
                        <input type="number" placeholder="Set Price" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:green-blue-500">
                    </div>
                </div>
                <div class="w-1/2 pl-4">
                    <div class="mb-4">
                        <label class="block mb-2 text-gray-700">Tags</label>
                        <input type="text" placeholder="Set a Keyword for this product" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-gray-700">Stock</label>
                        <input type="number" placeholder="Set Number of Stocks" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-gray-700">Minimum Purchase Quantity</label>
                        <input type="number" placeholder="Set minimum qty." class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-gray-700">Maximum Purchase Quantity</label>
                        <input type="number" placeholder="Set maximum qty." class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                </div>
            </div>
            <hr class="my-6">
            <div class="flex justify-end mt-6">
                <button onclick="closeproductModal()" class="px-6 py-2 mr-4 text-gray-700 bg-white border rounded-lg hover:bg-gray-100">Cancel</button>
                <button class="px-6 py-2 text-white bg-green-500 border rounded-lg hover:bg-green-600">Save and Publish</button>
            </div>
        </div>
    </div>
    <script>
        function openproductModal() {
            document.getElementById('productModal').classList.remove('hidden');
        }
        function closeproductModal() {
            document.getElementById('productModal').classList.add('hidden');
        }
    </script>
</body>
</html>