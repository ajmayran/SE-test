<?php
session_start();
if (isset($_SESSION['distributor_id']) && isset($_SESSION['distributor_info'])) {
    // Retrieve distributor details from the session
    $distributorInfo = $_SESSION['distributor_info'];

    $distributorName = htmlspecialchars($distributorInfo['name']);
    $distributorAddress = htmlspecialchars($distributorInfo['address']);
} else {
    // If no session exists, redirect to the login page
    header("Location: dist_login.php");
    exit;
}
?>

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

        .scroll-hide::-webkit-scrollbar {
            display: none;
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
        }
    </style>
</head>

<body class="bg-gray-100">
<?php include_once '../../includes/dist_side/header.php'; ?>
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
                <div class="flex mb-4 space-x-4 border-b">
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
                        <div class="flex flex-col p-2 bg-gray-100 rounded-lg">
                            <div class="flex mb-4">
                                <iconify-icon icon="icon-park-solid:sales-report" class="text-xl text-green-500"></iconify-icon>
                                <span class="ml-1 font-semibold text-gray-700">Sales</span>
                            </div>
                            <div class="flex items-center">
                                <span class="font-sans text-3xl">₱13,190</span>
                                <iconify-icon icon="raphael:arrowup" class="ml-4 text-xl text-green-500 align-middle"></iconify-icon>
                                <p class="text-green-500">2%</p>
                            </div>
                        </div>
                        <div class="flex flex-col p-2 bg-gray-100 rounded-lg">
                            <div class="flex mb-4">
                                <iconify-icon icon="lets-icons:order-fill" class="text-xl text-green-500"></iconify-icon>
                                <span class="ml-1 font-semibold text-gray-700">Orders</span>
                            </div>
                            <div class="flex items-center">
                                <span class="ml-4 font-sans text-3xl text-blue-600">12</span>
                                <iconify-icon icon="raphael:arrowup" class="ml-4 text-xl text-green-500 align-middle"></iconify-icon>
                                <p class="text-green-500">1%</p>
                            </div>
                        </div>
                        <div class="flex flex-col p-2 bg-gray-100 rounded-lg">
                            <div class="flex mb-4">
                                <iconify-icon icon="ion:people-sharp" class="text-xl text-green-500"></iconify-icon>
                                <span class="ml-1 font-semibold text-gray-700">Visitors</span>
                            </div>
                            <div class="flex items-center">
                                <span class="ml-4 font-sans text-3xl">215</span>
                                <iconify-icon icon="raphael:arrowdown" class="ml-4 text-xl text-red-500 align-middle"></iconify-icon>
                                <p class="text-red-500">-32%</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h2 class="mb-4 text-lg font-semibold text-gray-900">Trend Chart</h2>
                        <div class="p-6 bg-white rounded-lg shadow">
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
                        <div class="col-span-1 p-4 bg-white border border-gray-100 rounded-lg shadow-md lg:col-span-2">
                            <h3 class="text-lg font-semibold">
                                <iconify-icon icon="fa6-solid:ranking-star" class="pb-2 mr-1 text-3xl text-green-500 align-middle"></iconify-icon>
                                Product Ranking
                            </h3>
                            <table class="w-full mt-4 text-sm table-auto">
                                <thead>
                                    <tr class="border-b">
                                        <th class="px-1 py-2 font-normal text-left">Rank</th>
                                        <th class="px-1 py-2 font-normal text-left">Preview</th>
                                        <th class="px-1 py-2 font-normal text-left">Product</th>
                                        <th class="px-1 py-2 font-normal text-left">Category</th>
                                        <th class="px-1 py-2 font-normal text-right">Price</th>
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
                                        <td class="py-2 font-semibold text-center text-green-500 text-log">2</td>
                                        <td class="py-2">
                                            <img src="../../resources/img/Products/Chicken-lumpia-shanghai-mix.png" alt="" class="ml-1 rounded h-14 w-14">
                                        </td>
                                        <td class="py-2 text-[12px] font-light">Magnolia Ready to Cook Chicken Lumpia Shanghai Mix</td>
                                        <td class="py-2 text-[12px] font-light">Frozen Products</td>
                                        <td class="py-2 text-right text-[12px] font-light">₱200</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="py-2 text-lg font-semibold text-center text-green-500">3</td>
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

                        <div class="w-full p-8 mx-auto">

                            <!-- Button Toggle for Weekly/Monthly -->
                            <div class="mb-6 text-center">
                                <button id="weeklyBtn" class="px-6 py-2 font-semibold text-white transition-all duration-300 bg-green-600 rounded-md focus:outline-none">Weekly Sales</button>
                                <button id="monthlyBtn" class="px-6 py-2 ml-4 font-semibold transition-all duration-300 bg-gray-200 rounded-md focus:outline-none">Monthly Sales</button>
                            </div>

                            <!-- Card Container for the Chart -->
                            <div class="p-6 bg-white rounded-lg shadow-lg">
                                <h2 class="mb-6 text-2xl font-semibold text-center">Sales Overview</h2>
                                <!-- Bar Chart Canvas -->
                                <canvas id="salesChart"></canvas>
                            </div>
                        </div>



                        <!-- Sales Performance Table -->
                        <div class="col-span-1 p-4 bg-white rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold">Sales Performance</h3>
                            <table class="w-full mt-4 text-sm table-auto">
                                <thead>
                                    <tr class="border-b">
                                        <th class="py-2 font-normal text-left">Total Sales</th>
                                        <th class="py-2 font-normal text-left">Preview</th>
                                        <th class="py-2 font-normal text-left">Product</th>
                                        <th class="py-2 font-normal text-left">Category</th>
                                        <th class="py-2 font-normal text-right">Total Order</th>
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
                                        <td class="py-2 text-sm font-semibold text-left text-green-500">₱8000</td>
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
        //Notif and account 
        document.getElementById('notificationButton').addEventListener('click', function() {
            const dropdown = document.getElementById('notificationDropdown');
            dropdown.classList.toggle('hidden');
        });

        document.getElementById('accountButton').addEventListener('click', function() {
            const popper = document.getElementById('accountPopper');
            popper.classList.toggle('hidden');
        });


        window.addEventListener('click', function(event) {
            const dropdown = document.getElementById('notificationDropdown');
            const popper = document.getElementById('accountPopper');

            if (!event.target.closest('#notificationButton')) {
                dropdown.classList.add('hidden');
            }
            if (!event.target.closest('#accountButton')) {
                popper.classList.add('hidden');
            }
        });


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

            //Sales Charts
            const weekly = document.getElementById('weeklyBtn');
            const monthly = document.getElementById('monthlyBtn');

            const weeklySalesData = [7000, 8500, 11200, 9000, 7000, 6000, 10200];
            const weeklyLabels = ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5', 'Week 6', 'Week 7'];

            // Monthly Sales Data
            const monthlySalesData = [24000, 22500, 26200, 24500, 27000, 26000, 20800, 25250, 22500, 26400];
            const monthlyLabels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October'];

            // Create a default chart with monthly sales data
            const cty = document.getElementById('salesChart').getContext('2d');
            let salesData = monthlySalesData;
            let labels = monthlyLabels;

            const salesChart = new Chart(cty, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Sales (₱)',
                        data: salesData,
                        backgroundColor: '#34D399', // Tailwind green color
                        borderColor: '#10B981', // Darker green
                        borderWidth: 1,
                        hoverBackgroundColor: '#16A34A', // Hover effect color
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top',
                            labels: {
                                font: {
                                    size: 16,
                                    family: 'Inter, sans-serif',
                                }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return `₱${context.raw.toLocaleString()}`; // Format tooltip as currency
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return `₱${value.toLocaleString()}`; // Format Y axis as currency
                                }
                            },
                            grid: {
                                display: true
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });

            // Switch to Weekly Sales Chart
            document.getElementById('weeklyBtn').addEventListener('click', function() {
                salesData = weeklySalesData;
                labels = weeklyLabels;
                salesChart.data.labels = labels;
                salesChart.data.datasets[0].data = salesData;
                salesChart.update();
                toggleButtonState('weekly');
            });

            // Switch to Monthly Sales Chart
            document.getElementById('monthlyBtn').addEventListener('click', function() {
                salesData = monthlySalesData;
                labels = monthlyLabels;
                salesChart.data.labels = labels;
                salesChart.data.datasets[0].data = salesData;
                salesChart.update();
                toggleButtonState('monthly');
            });

            // Toggle active state of buttons
            function toggleButtonState(active) {
                if (active === 'weekly') {
                    weekly.classList.add('bg-green-600', 'text-white');
                    monthly.classList.remove('bg-green-600', 'text-white');
                    monthly.classList.add('bg-gray-200');
                } else {
                    monthly.classList.add('bg-green-600', 'text-white');
                    weekly.classList.remove('bg-green-600', 'text-white');
                    weekly.classList.add('bg-gray-200');
                }
            }

            // Initialize the monthly button as active
            toggleButtonState('monthly');


        }
        window.onload = initializeChart;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



</body>

</html>