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
    <title>Distributors Voucher</title>
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

        .voucher-card {
            width: 49%;
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
                <span><img alt="Profile Picture" class="w-10 h-10 border border-gray-100 rounded-full" src="../../resources/img/Distrubutors/zamba.jpg" /></span>
                <span class="p-1 mb-1 font-sans"><?php echo $distributorName; ?></span>

                <!-- Notification Button -->
                <div class="relative">
                    <button class="p-1 rounded-lg hover:bg-gray-100" id="notificationButton">
                        <iconify-icon icon="mdi:notifications" class="text-xl text-green-500"></iconify-icon>
                    </button>
                    <div id="notificationDropdown" class="absolute right-0 z-10 hidden w-64 p-2 bg-white border border-gray-200 rounded-lg shadow-lg">
                        <div class="flex justify-between p-2">
                            <span class="text-lg font-semibold">Notifications</span>
                            <iconify-icon icon="proicons:more" class="mt-1 text-xl text-gray-500"></iconify-icon>
                        </div>
                        <hr class="border-gray-300 shadow-sm" />
                        <ul class="py-2 mb-2">
                            <li class="px-4 py-2 font-sans text-sm hover:bg-gray-100">Notification 1</li>
                            <li class="px-4 py-2 font-sans text-sm hover:bg-gray-100">Notification 2</li>
                            <li class="px-4 py-2 font-sans text-sm hover:bg-gray-100">Notification 3</li>
                        </ul>
                        <button class="w-full px-1 py-2 mx-auto text-white bg-green-500 rounded-md text-[12px] hover:bg-green-400">See previous notifications</button>
                    </div>
                </div>

                <!-- Account Button -->
                <div class="relative">
                    <button class="p-1 rounded-lg hover:bg-gray-100" id="accountButton">
                        <iconify-icon icon="mdi:account" class="text-xl text-green-500"></iconify-icon>
                    </button>
                    <div id="accountPopper" class="absolute right-0 z-10 hidden w-64 bg-white border border-gray-200 rounded-lg shadow-lg">
                        <div class="flex items-center p-4 mx-2 my-2 border border-gray-200 rounded-lg shadow-sm">
                            <img alt="Profile Picture" class="w-10 h-10 border border-gray-100 rounded-full" src="../../resources/img/Distrubutors/zamba.jpg" />
                            <span class="ml-2 text-sm font-normal"><?php echo $distributorName; ?></span>
                        </div>
                        <ul class="py-2">
                            <a href="./dist_settings.php">
                                <li class="px-4 py-2 font-sans text-sm hover:bg-gray-100">Settings</li>
                            </a>
                            <a href="../../auth/logout.php">
                                <li class="px-4 py-2 font-sans text-sm hover:bg-gray-100">Logout</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
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
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_insights.php"><iconify-icon icon="gg:insights" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
                        <span class="ml-2 font-normal">Business Insights</span>
                    </a>
                </li>
                <hr class="border-gray-300 shadow-sm" />
                <li class="group active">
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

        <main class="w-3/4 max-h-screen p-8 overflow-y-auto">
            <h1 class="p-3 text-2xl font-semibold bg-green-300 rounded-t-md">Voucher</h1>
            <div class="container mx-auto">
                <div class="p-4 bg-white rounded-b-lg shadow-md min-h-[600px]">
                    <!-- Tabs -->
                    <div class="flex items-center mb-4 border-b">
                        <button id="tab-active" class="px-4 py-2 mx-auto text-green-600 border-b-4 border-green-600 focus:outline-none">
                            Active
                        </button>
                        <button id="tab-expired" class="px-4 py-2 mx-auto text-gray-600 hover:text-green-600 hover:border-green-600 focus:outline-none">
                            Expired
                        </button>
                    </div>
                    <div class="flex items-center justify-between w-full h-10">
                        <div class="flex items-center w-full max-w-md">
                            <input type="text" placeholder="Search voucher" class="w-64 px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-green-500" />
                            <button class="w-12 p-2 text-white bg-green-500 rounded-r-md hover:bg-green-600 focus:outline-none">
                                <iconify-icon icon="material-symbols:search" class="items-center p-1 text-xl align-middle"></iconify-icon>
                            </button>
                        </div>
                        <!-- Add Voucher Button -->
                        <button class="p-2 text-white bg-green-500 rounded-md hover:bg-green-400" id="openModalBtn">
                            <span class="pr-1 text-sm">Add New Voucher</span>
                        </button>
                    </div>
                    <!-- Active Vouchers -->
                    <div id="active-voucher" class="flex flex-wrap w-full p-4" style="gap: 10px;">
                        <!-- Voucher Card -->
                        <div class="flex bg-white border border-gray-200 rounded-lg shadow-md voucher-card">
                            <!-- Icon Section -->
                            <div class="flex items-center justify-center w-1/4 bg-green-500 rounded-tl-lg rounded-bl-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="full" height="full" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4 4a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2a2 2 0 0 1-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 1-2-2a2 2 0 0 1 2-2V6a2 2 0 0 0-2-2zm11.5 3L17 8.5L8.5 17L7 15.5zm-6.69.04c.98 0 1.77.79 1.77 1.77a1.77 1.77 0 0 1-1.77 1.77c-.98 0-1.77-.79-1.77-1.77a1.77 1.77 0 0 1 1.77-1.77m6.38 6.38c.98 0 1.77.79 1.77 1.77a1.77 1.77 0 0 1-1.77 1.77c-.98 0-1.77-.79-1.77-1.77a1.77 1.77 0 0 1 1.77-1.77" />
                                </svg>
                            </div>
                            <!-- Content Section -->
                            <div class="flex-grow p-4">
                                <div class="flex items-center justify-between">
                                    <!-- Title and Date -->
                                    <div>
                                        <h3 class="text-lg font-semibold">Discount Voucher</h3>
                                        <p class="text-sm text-gray-500">11-25-2024 - 12-12-2024</p>
                                    </div>
                                </div>
                                <!-- Voucher Info -->
                                <div class="flex items-center mt-3">
                                    <p class="text-3xl font-bold text-gray-800">10%</p>
                                    <p class="ml-2 text-sm text-gray-500">Shop Voucher</p>
                                </div>
                                <!-- Button -->
                                <div class="flex justify-end gap-2">
                                    <button class="px-4 py-1 text-gray-700 border border-gray-300 rounded-md">Edit</button>
                                    <button class="px-4 py-1 text-white bg-red-500 rounded-md">End Now</button>
                                </div>
                            </div>
                        </div>
                        <!-- Voucher Card -->
                        <div class="flex bg-white border border-gray-200 rounded-lg shadow-md voucher-card">
                            <!-- Icon Section -->
                            <div class="flex items-center justify-center w-1/4 bg-green-500 rounded-tl-lg rounded-bl-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="full" height="full" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4 4a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2a2 2 0 0 1-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 1-2-2a2 2 0 0 1 2-2V6a2 2 0 0 0-2-2zm11.5 3L17 8.5L8.5 17L7 15.5zm-6.69.04c.98 0 1.77.79 1.77 1.77a1.77 1.77 0 0 1-1.77 1.77c-.98 0-1.77-.79-1.77-1.77a1.77 1.77 0 0 1 1.77-1.77m6.38 6.38c.98 0 1.77.79 1.77 1.77a1.77 1.77 0 0 1-1.77 1.77c-.98 0-1.77-.79-1.77-1.77a1.77 1.77 0 0 1 1.77-1.77" />
                                </svg>
                            </div>

                            <!-- Content Section -->
                            <div class="flex-grow p-4">
                                <div class="flex items-center justify-between">
                                    <!-- Title and Date -->
                                    <div>
                                        <h3 class="text-lg font-semibold">Discount Voucher</h3>
                                        <p class="text-sm text-gray-500">11-25-2024 - 12-12-2024</p>
                                    </div>
                                </div>
                                <!-- Voucher Info -->
                                <div class="flex items-center mt-3">
                                    <p class="text-3xl font-bold text-gray-800">₱500</p>
                                    <p class="ml-2 text-sm text-gray-500">Shop Voucher</p>
                                </div>
                                <!-- Button -->
                                <div class="flex justify-end gap-2">
                                    <button class="px-4 py-1 text-gray-700 border border-gray-300 rounded-md">Edit</button>
                                    <button class="px-4 py-1 text-white bg-red-500 rounded-md">End Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Expired Vouchers -->
                    <div id="expired-voucher" class="flex flex-wrap hidden w-full p-4" style="gap: 10px;">
                        <!-- Voucher Card -->
                        <div class="flex bg-white border border-gray-200 rounded-lg shadow-md voucher-card">
                            <!-- Icon Section -->
                            <div class="flex items-center justify-center w-1/4 bg-green-500 rounded-tl-lg rounded-bl-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="full" height="full" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4 4a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2a2 2 0 0 1-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 1-2-2a2 2 0 0 1 2-2V6a2 2 0 0 0-2-2zm11.5 3L17 8.5L8.5 17L7 15.5zm-6.69.04c.98 0 1.77.79 1.77 1.77a1.77 1.77 0 0 1-1.77 1.77c-.98 0-1.77-.79-1.77-1.77a1.77 1.77 0 0 1 1.77-1.77m6.38 6.38c.98 0 1.77.79 1.77 1.77a1.77 1.77 0 0 1-1.77 1.77c-.98 0-1.77-.79-1.77-1.77a1.77 1.77 0 0 1 1.77-1.77" />
                                </svg>
                            </div>
                            <!-- Content Section -->
                            <div class="flex-grow p-4">
                                <div class="flex items-center justify-between">
                                    <!-- Title and Date -->
                                    <div>
                                        <h3 class="text-lg font-semibold">Discount Voucher</h3>
                                        <p class="text-sm text-gray-500">09-25-2024 - 10-31-2024</p>
                                    </div>
                                </div>
                                <!-- Voucher Info -->
                                <div class="flex items-center mt-3">
                                    <p class="text-3xl font-bold text-gray-800">10%</p>
                                    <p class="ml-2 text-sm text-gray-500">Shop Voucher</p>
                                </div>
                                <!-- Button -->
                                <div class="flex justify-end gap-2">
                                    <button class="px-4 py-1 text-gray-700 border border-gray-300 rounded-md">Edit</button>
                                    <button class="px-4 py-1 text-white bg-red-500 rounded-md">End Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

    <!-- Voucher Modal -->
    <div id="voucherModal" class="fixed inset-0 z-10 flex items-center justify-center hidden bg-gray-900 bg-opacity-50">
        <div class="p-6 bg-white rounded-lg w-96">
            <!-- Modal Header -->
            <div class="flex items-center justify-between">
                <h3 class="text-xl font-semibold" id="modalTitle">Select Voucher Type</h3>
                <button id="closeModalBtn" class="text-gray-600 hover:text-gray-800">Close</button>
            </div>
            <!-- Modal Body -->
            <div class="mt-4">
                <!-- Initial Buttons for Shop or Product Voucher -->
                <div id="voucherSelection" class="flex mb-6 space-x-4">
                    <button id="shopVoucherBtn" class="w-full px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Shop Voucher</button>
                    <button id="productVoucherBtn" class="w-full px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-400">Product Voucher</button>
                </div>

                <!-- Form for Shop Voucher (Initially Hidden) -->
                <div id="shopVoucherForm" class="hidden space-y-4">
                    <div>
                        <label for="voucherName" class="block text-gray-700">Voucher Name</label>
                        <input type="text" id="voucherName" class="w-full p-1 mt-2 border border-gray-300 rounded-lg" placeholder="Enter voucher name">
                    </div>

                    <div>
                        <label for="discountType" class="block text-gray-700">Discount Type</label>
                        <select id="discountType" class="w-full p-1 mt-2 border border-gray-300 rounded-lg">
                            <option value="fixed">Select</option>
                            <option value="fixed">Fixed Amount</option>
                            <option value="percentage">Percentage</option>
                        </select>
                        <input type="number" id="discountValue" class="w-full p-1 mt-2 border border-gray-300 rounded-lg" placeholder="Enter discount value">
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <div class="pr-2" style="width:48%">
                                <label for="startDate" class="block text-gray-700">Start Date</label>
                                <input type="date" id="startDate" class="w-full p-2 mt-2 border border-gray-300 rounded-lg" required>
                            </div>

                            <div class="pl-2" style="width:48%">
                                <label for="endDate" class="block text-gray-700">End Date</label>
                                <input type="date" id="endDate" class="w-full p-2 mt-2 border border-gray-300 rounded-lg" required>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="minSpend" class="block text-gray-700">Minimum Spend</label>
                        <input type="number" id="minSpend" class="w-full p-1 mt-2 border border-gray-300 rounded-lg" placeholder="Enter minimum spend">
                    </div>


                    <div>
                        <label for="usageQty" class="block text-gray-700">Usage Quantity</label>
                        <input type="number" id="usageQty" class="w-full p-1 mt-2 border border-gray-300 rounded-lg" placeholder="Enter usage quantity">
                    </div>

                    <div>
                        <label for="maxDistribution" class="block text-gray-700">Max Distribution per Retailer</label>
                        <input type="number" id="maxDistribution" class="w-full p-1 mt-2 border border-gray-300 rounded-lg" placeholder="Enter max distribution">
                    </div>
                </div>

                <!-- Form for Product Voucher (Initially Hidden) -->
                <div id="productVoucherForm" class="hidden space-y-2">
                    <div class="relative">
                        <button type="button" class="block w-full px-3 py-2 text-left bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400" id="dropdownButton">
                            Select Products
                        </button>

                        <!-- Dropdown Options -->
                        <div id="dropdownOptions" class="absolute z-10 hidden w-full mt-2 bg-white border border-gray-300 rounded-lg shadow-lg">
                            <div class="p-2">
                                <label class="block">
                                    <input type="checkbox" name="products[]" value="music" class="mr-2">RTC Chicken Lumpia
                                </label>
                                <label class="block">
                                    <input type="checkbox" name="products[]" value="movies" class="mr-2"> RTC Cheesy Chicken Fingers
                                </label>
                                <label class="block">
                                    <input type="checkbox" name="products[]" value="sports" class="mr-2"> RTC Spicy Fried Chicken
                                </label>
                                <label class="block">
                                    <input type="checkbox" name="products[]" value="books" class="mr-2"> RTC Fried Chicken
                                </label>
                                <label class="block">
                                    <input type="checkbox" name="products[]" value="travel" class="mr-2"> RTC Chicken Shanghai Mix </label>
                                <label class="block">
                                    <input type="checkbox" name="products[]" value="travel" class="mr-2"> RTC Chicken Siomai
                                </label>
                                <label class="block">
                                    <input type="checkbox" name="products[]" value="travel" class="mr-2"> RTC Chicken BBQ
                                </label>
                                <label class="block">
                                    <input type="checkbox" name="products[]" value="travel" class="mr-2"> RTC Chicken Tapa
                                </label>
                                <label class="block">
                                    <input type="checkbox" name="products[]" value="travel" class="mr-2"> RTC Chicken Tocino
                                </label>
                                <label class="block">
                                    <input type="checkbox" name="products[]" value="travel" class="mr-2"> RTC Korean Chicken BBQ
                                </label>
                                <label class="block">
                                    <input type="checkbox" name="products[]" value="travel" class="mr-2"> RTC Mideterranian Chicken
                                </label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="productVoucherName" class="block text-gray-700">Voucher Name</label>
                        <input type="text" id="productVoucherName" class="w-full p-1 mt-2 border border-gray-300 rounded-lg" placeholder="Enter voucher name">
                    </div>

                    <div>
                        <label for="productDiscountType" class="block text-gray-700">Discount Type</label>
                        <select id="productDiscountType" class="w-full p-1 mt-2 border border-gray-300 rounded-lg">
                            <option value="fixed">Select</option>
                            <option value="fixed">Fixed Amount</option>
                            <option value="percentage">Percentage</option>
                        </select>
                        <input type="number" id="productDiscountValue" class="w-full p-2 mt-2 border border-gray-300 rounded-lg" placeholder="Enter discount value">
                    </div>

                    <div>
                        <label for="productMinSpend" class="block text-gray-700">Minimum Spend</label>
                        <input type="number" id="productMinSpend" class="w-full p-2 mt-2 border border-gray-300 rounded-lg" placeholder="Enter minimum spend">
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <div class="pr-2 " style="width:48%">
                                <label for="startDate" class="block text-gray-700">Start Date</label>
                                <input type="date" id="startDate" class="w-full p-1 mt-2 border border-gray-300 rounded-lg" required>
                            </div>
                            <div class="pl-2" style="width:48%">
                                <label for="endDate" class="block text-gray-700">End Date</label>
                                <input type="date" id="endDate" class="w-full p-1 mt-2 border border-gray-300 rounded-lg" required>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="productUsageQty" class="block text-gray-700">Usage Quantity</label>
                        <input type="number" id="productUsageQty" class="w-full p-1 mt-2 border border-gray-300 rounded-lg" placeholder="Enter usage quantity">
                    </div>

                    <div>
                        <label for="productMaxDistribution" class="block text-gray-700">Max Distribution per Retailer</label>
                        <input type="number" id="productMaxDistribution" class="w-full p-1 mt-2 border border-gray-300 rounded-lg" placeholder="Enter max distribution">
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="flex justify-between mt-6">
                <button id="cancelBtn" class="px-4 py-2 text-gray-800 bg-gray-300 rounded-lg hover:bg-gray-400">Cancel</button>
                <button id="saveBtn" class="px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-600">Save and Publish</button>
            </div>
        </div>
    </div>



    <script>
        const activeTab = document.getElementById('tab-active');
        const expiredTab = document.getElementById('tab-expired');
        const activeVoucher = document.getElementById('active-voucher');
        const expiredVoucher = document.getElementById('expired-voucher');


        activeTab.addEventListener('click', () => {
            activeVoucher.classList.remove('hidden');
            expiredVoucher.classList.add('hidden');
            activeTab.classList.add('text-green-600', 'border-b-4', 'border-green-600');
            expiredTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
        });

        expiredTab.addEventListener('click', () => {
            expiredVoucher.classList.remove('hidden');
            activeVoucher.classList.add('hidden');
            expiredTab.classList.add('text-green-600', 'border-b-4', 'border-green-600');
            activeTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            activeTab.classList.add('text-gray-600');
        });


        // Open the modal when the "Add New Voucher" button is clicked
        document.getElementById("openModalBtn").addEventListener("click", function() {
            // Reset modal content to initial state before opening
            document.getElementById("voucherSelection").classList.remove("hidden");
            document.getElementById("shopVoucherForm").classList.add("hidden");
            document.getElementById("productVoucherForm").classList.add("hidden");
            document.getElementById("voucherModal").classList.remove("hidden");
            document.getElementById("modalTitle").innerText = "Select Voucher Type"; // Set title to initial
            document.getElementById("saveBtn").classList.add("hidden");
        });

        // Close the modal when the close button is clicked
        document.getElementById("closeModalBtn").addEventListener("click", function() {
            document.getElementById("voucherModal").classList.add("hidden");
        });

        // Close the modal when the cancel button is clicked
        document.getElementById("cancelBtn").addEventListener("click", function() {
            document.getElementById("voucherModal").classList.add("hidden");
        });

        // Switch to Shop Voucher form
        document.getElementById("shopVoucherBtn").addEventListener("click", function() {
            // Hide selection buttons and show shop voucher form
            document.getElementById("voucherSelection").classList.add("hidden");
            document.getElementById("shopVoucherForm").classList.remove("hidden");
            document.getElementById("productVoucherForm").classList.add("hidden");
            document.getElementById("modalTitle").innerText = "Create Shop Voucher"; // Update title
            document.getElementById("saveBtn").classList.remove("hidden"); // Enable save button again if it was hidden during the previous form selection
        });

        // Switch to Product Voucher form
        document.getElementById("productVoucherBtn").addEventListener("click", function() {
            // Hide selection buttons and show product voucher form
            document.getElementById("voucherSelection").classList.add("hidden");
            document.getElementById("productVoucherForm").classList.remove("hidden");
            document.getElementById("shopVoucherForm").classList.add("hidden");
            document.getElementById("modalTitle").innerText = "Create Product Voucher"; // Update title
            document.getElementById("saveBtn").classList.remove("hidden"); // Enable save button again if it was hidden during the previous form selection
        });

        // Save button logic (you can add your own logic for saving the form)
        document.getElementById("saveBtn").addEventListener("click", function() {
            alert("Voucher saved!");
            document.getElementById("voucherModal").classList.add("hidden");
        });


        // Show/Hide Dropdown
        document.getElementById('dropdownButton').addEventListener('click', function() {
            const dropdown = document.getElementById('dropdownOptions');
            dropdown.classList.toggle('hidden');
        });

        // Close dropdown if clicked outside
        window.addEventListener('click', function(e) {
            if (!e.target.closest('.relative')) {
                document.getElementById('dropdownOptions').classList.add('hidden');
            }
        });

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
    </script>
</body>

</html>