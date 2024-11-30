<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distributors Insights</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../../src/output.css">

    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>

    <style>
        body {
            font-family: 'Lexend', sans-serif;
        }

        .sidebar-menu .group.active a {
            background-color: #27AE60;
            color: white;
            border-radius: 5px;
        }

        .sidebar-menu .group.active .icon {
            color: white;
        }

        #dataSeriesChart {
            height: 500px;
            /* or any height you prefer */
        }
    </style>
</head>

<body class="bg-gray-100">
    <header class="sticky top-0 z-10 bg-white border-b border-gray-300 drop-shadow-sm">
        <div class="container flex items-center justify-between px-4 py-4 mx-auto">
            <div class="flex items-center">
                <img alt="PConnect Logo" class="w-8 h-8" src="../../resources/img/Pconnect Logo.png" />
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
                <hr class="border-gray-300 shadow-sm" />
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
                <hr class="border-gray-300 shadow-sm" />
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
                <hr class="border-gray-300 shadow-sm" />
                <li class="group">
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_income.php"><iconify-icon icon="solar:money-bag-bold" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
                        <span class="ml-2 font-normal">My Income</span>
                    </a>
                </li>
                <li class="group active">
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_insights.php"><iconify-icon icon="gg:insights" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
                        <span class="ml-2 font-normal">Business Insights</span>
                    </a>
                </li>
                <hr class="border-gray-300 shadow-sm" />

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
            <h1 class="p-3 text-2xl font-semibold bg-green-300 rounded-t-md">Business Insights</h1>
            <div class="p-4 bg-white rounded-b-lg shadow-md">
                <!-- Tabs -->
                <div class="flex space-x-4 border-b mb-4">
                    <button id="tab-overview" class="px-4 py-2 text-green-600 border-b-4 border-green-600 focus:outline-none">
                        Overview
                    </button>
                    <button id="tab-products" class="px-4 py-2 text-gray-600 hover:text-green-600 focus:outline-none">
                        Products
                    </button>
                    <button id="tab-sales" class="px-4 py-2 text-gray-600 hover:text-green-600 focus:outline-none">
                        Sales
                    </button>
                </div>
                <div class="flex justify-end w-full h-10">
                    <!-- Export Reports Button -->
                    <button class="p-2 bg-green-500 rounded-md hover:bg-gray-200 hover:text-white group">
                        <iconify-icon icon="fa:download" class="px-1 pb-1 text-lg text-white align-middle group-hover:text-black hover:border-green-500"></iconify-icon>
                        <span class="pr-1 text-sm text-white group-hover:text-black">Export Reports</span>
                    </button>
                </div>

                <!-- Overview Tab -->

                <div id="tab-content-overview" class="mb-10">
                    <div class="grid grid-cols-5 gap-4 mb-10">
                        <div class="rounded-lg p-2 flex flex-col bg-gray-100">
                            <div class="flex mb-4">
                                <iconify-icon icon="icon-park-solid:sales-report" class="text-xl text-green-500"></iconify-icon>
                                <span class="font-semibold text-gray-700 ml-1">Sales</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-3xl font-sans">₱13,190</span>
                                <iconify-icon icon="raphael:arrowup" class="text-xl align-middle ml-4 text-green-500"></iconify-icon>
                                <p class="text-green-500">2%</p>
                            </div>
                        </div>
                        <div class="bg-gray-100 rounded-lg p-2 flex flex-col">
                            <div class="flex mb-4">
                                <iconify-icon icon="lets-icons:order-fill" class="text-xl text-green-500"></iconify-icon>
                                <span class="font-semibold text-gray-700 ml-1">Orders</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-blue-600 text-3xl font-sans ml-4">12</span>
                                <iconify-icon icon="raphael:arrowup" class="text-xl align-middle ml-4 text-green-500"></iconify-icon>
                                <p class="text-green-500">1%</p>
                            </div>
                        </div>
                        <div class="bg-gray-100 rounded-lg p-2 flex flex-col">
                            <div class="flex  mb-4">
                                <iconify-icon icon="ion:people-sharp" class="text-xl text-green-500"></iconify-icon>
                                <span class="font-semibold text-gray-700 ml-1">Visitors</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-3xl font-sans ml-4">215</span>
                                <iconify-icon icon="raphael:arrowdown" class="text-xl align-middle ml-4 text-red-500"></iconify-icon>
                                <p class="text-red-500">-32%</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h2 class="text-lg font-semibold mb-4 text-gray-900">Trend Chart</h2>
                        <div class="bg-white rounded-lg shadow p-6">
                            <div class="relative w-full h-64">
                                <canvas id="dataSeriesChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products Tab -->

                <div id="tab-content-products" class="hidden">
                    <div class="grid grid-cols-1 gap-4 mt-6 lg:grid-cols-3">
                        <!-- Most Selling Products Table -->
                        <div class="col-span-1 p-4 bg-white rounded-lg shadow-md lg:col-span-2 border border-gray-100">
                            <h3 class="text-lg font-semibold">
                                <iconify-icon icon="fa6-solid:ranking-star" class="pb-2 mr-1 text-3xl text-green-500 align-middle"></iconify-icon>
                                Product Ranking
                            </h3>
                            <table class="w-full mt-4 text-sm table-auto">
                                <thead>
                                    <tr class="border-b">
                                        <th class="py-2 px-1 text-left font-normal">Rank</th>
                                        <th class="py-2 px-1 text-left font-normal">Preview</th>
                                        <th class="py-2 px-1 text-left font-normal">Product</th>
                                        <th class="py-2 px-1 text-left font-normal">Category</th>
                                        <th class="py-2 px-1 text-right font-normal" >Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-lg font-semibold text-center text-green-500">1</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-fried-chicken.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Fried Chicken</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">₱200</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-log font-semibold text-center text-green-500">2</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/Chicken-lumpia-shanghai-mix.png" alt="" class="ml-1 rounded h-14 w-14">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Chicken Lumpia Shanghai Mix</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">₱200</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2  text-lg font-semibold text-center text-green-500">3</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-chicken-tocino.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Chicken Tocino</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">₱200</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-lg font-semibold text-center text-green-500">4</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-chicken-siomai.png" alt="" class="ml-1 rounded h-14 w-14">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Chicken Siomai</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">₱200</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-lg font-semibold text-center text-green-500">5</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-spicy-wings.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Spicy Wings</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">₱200</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-lg font-semibold text-center text-green-500">6</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-oriental-wings.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Oriental Wings</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">₱200</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-lg font-semibold text-center text-green-500">7</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-chicken-longanisa.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Chicken Longanisa</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">₱200</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-lg font-semibold text-center text-green-500">8</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-chicken-teriyaki.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Chicken Teriyaki</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">₱200</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-lg font-semibold text-center text-green-500">9</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-chicken-bbq.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Chicken Barbeque</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">₱200</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-lg font-semibold text-center text-green-500">10</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-mideterranian.png" alt="" class="ml-1 rounded h-14 w-14">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Chicken Mideterranian</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">₱200</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-lg font-semibold text-center text-green-500">11</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-korean-chicken-bbq.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Korean Chicken Barbaque</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">₱200</td>
                                    </tr>
                                    <tr>
                                    <td class="py-2 text-lg font-semibold text-center text-green-500">12</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-cheesy-chicken-fingers.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Cheesy Chicken Fingers</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">₱200</td>
                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>

                        <!-- Category Chart -->
                        <div class="p-4 bg-white rounded-lg shadow-md" style="width: auto; height: 400px;">
                            <h3 class="text-lg font-semibold">
                                <iconify-icon icon="carbon:categories" class="pb-2 mr-1 text-3xl text-green-500 align-middle"></iconify-icon>
                                Category Trends
                            </h3>
                            <canvas id="categoryChart" class="w-full h-full"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Sales Tab -->
                <div id="tab-content-sales" class="hidden">
                    <div class="grid grid-cols-1 gap-4 mt-6">
                        <!-- Sales Performance Table -->
                        <div class="col-span-1 p-4 bg-white rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold">
                                <iconify-icon icon="icon-park-solid:sales-report " class="pb-1 mr-1 text-xl text-green-500 align-middle"></iconify-icon>
                                Sales Performance
                            </h3>
                            <table class="w-full mt-4 text-sm table-auto">
                                <thead>
                                    <tr class="border-b">
                                        <th class="py-2 text-left font-normal">Total Sales</th>
                                        <th class="py-2 text-left font-normal">Preview</th>
                                        <th class="py-2 text-left font-normal">Product</th>
                                        <th class="py-2 text-left font-normal">Category</th>
                                        <th class="py-2 text-right font-normal">Total Order</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-gray-200">
                                    <td class="py-2 text-sm font-semibold text-left text-green-500">₱24000</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-fried-chicken.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Fried Chicken</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">120</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-sm font-semibold text-left text-green-500">₱9000</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/Chicken-lumpia-shanghai-mix.png" alt="" class="ml-1 rounded h-14 w-14">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Chicken Lumpia Shanghai Mix</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">45</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2  text-sm font-semibold text-left text-green-500">₱8000</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-chicken-tocino.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Chicken Tocino</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">40</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-sm font-semibold text-left text-green-500">₱8000</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-chicken-siomai.png" alt="" class="ml-1 rounded h-14 w-14">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Chicken Siomai</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">40</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-sm font-semibold text-left text-green-500">₱7000</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-spicy-wings.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Spicy Wings</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">35</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-sm font-semibold text-left text-green-500">₱6000</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-oriental-wings.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Oriental Wings</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">30</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-sm font-semibold text-left text-green-500">₱6000</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-chicken-longanisa.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Chicken Longanisa</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">30</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-sm font-semibold text-left text-green-500">₱6000</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-chicken-teriyaki.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Chicken Teriyaki</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">30</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-sm font-semibold text-left text-green-500">₱6000</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-chicken-bbq.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Chicken Barbeque</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">30</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-sm font-semibold text-left text-green-500">₱5000</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-mideterranian.png" alt="" class="ml-1 rounded h-14 w-14">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Chicken Mideterranian</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">25</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                    <td class="py-2 text-sm font-semibold text-left text-green-500">₱4000</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-korean-chicken-bbq.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Korean Chicken Barbaque</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">20</td>
                                    </tr>
                                    <tr>
                                    <td class="py-2 text-sm font-semibold text-left text-green-500">₱2000</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/rtc-cheesy-chicken-fingers.png" alt="" class="w-16 h-16 rounded">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Cheesy Chicken Fingers</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">10</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        </main>
    </div>

    <script>
        const overviewTab = document.getElementById('tab-overview');
        const productsTab = document.getElementById('tab-products');
        const salesTab = document.getElementById('tab-sales');

        const overviewContent = document.getElementById('tab-content-overview');
        const productsContent = document.getElementById('tab-content-products');
        const salesContent = document.getElementById('tab-content-sales');


        overviewTab.addEventListener('click', () => {
            overviewContent.classList.remove('hidden');
            productsContent.classList.add('hidden');
            salesContent.classList.add('hidden');
            overviewTab.classList.add('text-green-600', 'border-b-4', 'border-green-600');
            productsTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            salesTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
        });

        productsTab.addEventListener('click', () => {
            overviewContent.classList.add('hidden');
            productsContent.classList.remove('hidden');
            salesContent.classList.add('hidden');
            overviewTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            productsTab.classList.add('text-green-600', 'border-b-4', 'border-green-600');
            salesTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            overviewTab.classList.add('text-gray-600');
        });

        salesTab.addEventListener('click', () => {
            overviewContent.classList.add('hidden');
            productsContent.classList.add('hidden');
            salesContent.classList.remove('hidden');
            overviewTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            productsTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            salesTab.classList.add('text-green-600', 'border-b-4', 'border-green-600');
            overviewTab.classList.add('text-gray-600');
        });




        function initializeChart() {
            const ctx = document.getElementById('dataSeriesChart').getContext('2d');

            const dataSeriesChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['4-1', '5-1', '6-1', '7-1', '8-1', '9-1', '10-9', '11-11'], // X-axis labels
                    datasets: [{
                            label: 'Sales',
                            data: [12000, 13500, 12800, 14000, 14500, 11500, 14500, 13000], // Y-axis data
                            borderColor: 'rgba(54, 162, 235, 1)', // Blue line
                            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Blue fill
                            fill: true,
                            tension: 0.4, // Smooth curves
                        },
                        {
                            label: 'Orders',
                            data: [10, 12, 11, 13, 14, 15, 17, ],
                            borderColor: 'rgba(255, 99, 132, 1)', // Red line
                            backgroundColor: 'rgba(255, 99, 132, 0.2)', // Red fill
                            fill: true,
                            tension: 0.4,
                        },
                        {
                            label: 'Visitors',
                            data: [100, 150, 180, 125, 250, 350, 240, 250],
                            borderColor: 'rgba(75, 192, 192, 1)', // Green line
                            backgroundColor: 'rgba(75, 192, 192, 0.2)', // Green fill
                            fill: true,
                            tension: 0.4,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // Makes the chart responsive
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top', // Legend on top
                            labels: {
                                font: {
                                    size: 14,
                                    family: 'Inter, sans-serif', // Flowbite uses Inter font
                                },
                                color: '#374151', // Tailwind's text-gray-700
                                usePointStyle: true, // Rounded legend indicators
                            },
                        },
                        tooltip: {
                            backgroundColor: '#f9fafb', // Light background for tooltips
                            titleColor: '#374151', // Dark title color
                            bodyColor: '#1f2937', // Body text color
                            borderWidth: 1,
                            borderColor: '#e5e7eb', // Tailwind's gray-200
                            titleFont: {
                                size: 16,
                                family: 'Inter, sans-serif',
                                weight: 'bold',
                            },
                            bodyFont: {
                                size: 14,
                                family: 'Inter, sans-serif',
                            },
                            padding: 10,
                            cornerRadius: 6,
                        },
                    },
                    scales: {
                        x: {
                            grid: {
                                color: '#e5e7eb', // Light gray grid lines
                            },
                            title: {
                                display: true,
                                text: 'Dates',
                                font: {
                                    size: 14,
                                    family: 'Inter, sans-serif',
                                },
                                color: '#374151', // Tailwind's text-gray-700
                            },
                        },
                        y: {
                            grid: {
                                color: '#e5e7eb', // Light gray grid lines
                            },
                            title: {
                                display: true,
                                text: 'Values',
                                font: {
                                    size: 14,
                                    family: 'Inter, sans-serif',
                                },
                                color: '#374151', // Tailwind's text-gray-700
                            },
                            beginAtZero: true,
                        },
                    },
                },
            });



            //Pie Chart

            const ctz = document.getElementById('categoryChart').getContext('2d');

            const gradient1 = ctz.createLinearGradient(0, 100, 250, 400);
            gradient1.addColorStop(0, '#641e16'); // 
            gradient1.addColorStop(1, '#d98880'); // 

            const gradient2 = ctz.createLinearGradient(0, 100, 250, 400);
            gradient2.addColorStop(0, '#512e5f');
            gradient2.addColorStop(1, '#c39bd3');

            const gradient3 = ctz.createLinearGradient(0, 100, 250, 400);
            gradient3.addColorStop(0, '#1b4f72'); // 
            gradient3.addColorStop(1, '#7fb3d5'); // 

            const gradient4 = ctz.createLinearGradient(0, 100, 250, 400);
            gradient4.addColorStop(0, '#212f3c'); // 
            gradient4.addColorStop(1, '#85929e'); //

            const gradient5 = ctz.createLinearGradient(0, 100, 250, 400);
            gradient5.addColorStop(0, '#9a7d0a');
            gradient5.addColorStop(1, '#f7dc6f');


            const categoryChart = new Chart(ctz, {
                type: 'pie',
                data: {
                    labels: ['Frozen Products', 'Beverages', 'Snacks', 'Dairy', 'Others'],
                    datasets: [{
                        label: 'Category',
                        data: [25, 20, 30, 15, 10],
                        backgroundColor: [
                            gradient1,
                            gradient2,
                            gradient3,
                            gradient4,
                            gradient5
                        ],
                        borderColor: '#FFFFFF',
                        borderWidth: 2,
                        hoverOffset: 8,
                    }],
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top',
                            labels: {
                                color: '#6B7280', // Gray-500
                                font: {
                                    size: 14,
                                    family: 'Inter, sans-serif',
                                }
                            }
                        },
                        tooltip: {
                            backgroundColor: '#111827', // Dark Gray
                            bodyColor: '#FFFFFF', // White text
                            borderWidth: 0,
                        },
                    },
                },
            });

        }
        window.onload = initializeChart;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



</body>

</html>