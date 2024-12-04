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
    <title>Distributors Inventory</title>
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
        .delisted {
        column-span: 5;
        }
        td{
            white-space: nowrap;
        }

        .switch {
        position: relative;
        display: inline-block;
        width: 32px;
        height: 16px;
        }

        .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
        border-radius: 16px;
        }

        .slider:before {
        position: absolute;
        content: "";
        height: 12px;
        width: 12px;
        left: 2px;
        bottom: 2px;
        background-color: #fff;
        transition: .4s;
        border-radius: 50%;
        }

        input:checked + .slider {
        background-color: #2ecc71; /* green */
        }

        input:focus + .slider {
        box-shadow: 0 0 1px #2ecc71;
        }

        input:checked + .slider:before {
        transform: translateX(16px);
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
      <?php 
            require_once '../../includes/distributor_sidebar.php';
        ?>
        
        <main class="w-3/4 p-8 overflow-y-auto" style="max-height:100vh;">
            <div class="p-4 mx-auto mb-6 bg-white rounded-lg">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="text-xl font-semibold">Inventory Dashboard</h1>
                    <span class="text-sm font-light text-gray-500">( Last Updated at GMT +8 16:05 )</span>
                </div>
                <div class="grid grid-cols-5 gap-0">
                    <div class="p-4 text-center border">
                        <p class="text-xl font-semibold">18</p>
                        <p class="text-gray-600">Live</p>
                    </div>
                    <div class="p-4 text-center border">
                        <p class="text-xl font-semibold">0</p>
                        <p class="text-gray-600">Delisted and Suspended</p>
                    </div>
                    <div class="p-4 text-center border">
                        <p class="text-xl font-semibold">0</p>
                        <p class="text-gray-600">Out of Stock</p>
                    </div>
                    <div class="p-4 text-center border">
                        <p class="text-xl font-semibold">0</p>
                        <p class="text-gray-600">Low Stock</p>
                    </div>
                    <div class="p-4 text-center border">
                        <p class="text-xl font-semibold">0</p>
                        <p class="text-gray-600">On-demand</p>
                    </div>
                </div>
            </div>
            
            <div class="p-6 bg-white rounded-lg shadow-sm">
                <div class="flex mb-4 space-x-4 border-b">
                    <button id="tab-live" class="px-4 py-2 text-sm text-gray-600 border-b-4 border-green-600 focus:outline-none">
                      Live
                    </button>
                    <button id="tab-delisted" class="px-4 py-2 text-sm text-gray-600 hover:text-green-600 hover:border-green-600 focus:outline-none">
                      Delisted and Suspended
                    </button>
                    <button id="tab-outstock" class="px-4 py-2 text-sm text-gray-600 hover:text-green-600 hover:border-green-600 focus:outline-none">
                        Out of Stock
                      </button>
                      <button id="tab-lowstock" class="px-4 py-2 text-sm text-gray-600 hover:text-green-600 hover:border-green-600 focus:outline-none">
                        Low Stock
                      </button>
                      <button id="tab-ondemand" class="px-4 py-2 text-sm text-gray-600 hover:text-green-600 hover:border-green-600 focus:outline-none">
                        On-demand
                      </button>
                  </div>
                <!-- Header Section -->
                
                <div class="flex items-center justify-between mb-4 space-x-4">
                  <!-- Search Bar -->
                  <div class="flex items-center w-full max-w-md">
                        <input type="text" placeholder="Search product" class="w-64 px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-green-500"/>
                        <button class="w-12 p-2 text-white bg-green-500 rounded-r-md hover:bg-green-600 focus:outline-none">
                            <iconify-icon icon="material-symbols:search" class="items-center p-1 text-xl align-middle"></iconify-icon>
                        </button>
                    </div>
                    <div class="flex items-center">
                    <span class="mr-1 font-sans text-sm">Restock Alert</span>
                    <label class="p-1 switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                    </label>
                    </div>
                   
                    <button type="" onclick="openstocksModal()"  class="px-2 py-2 text-white bg-green-500 rounded-md hover:bg-green-600">Manage Stocks</button> 
                </div>
              
                  <!-- Live Tab Table -->
                  <div id="live-table" class="block mt-6">
                    <h2 class="mb-2 font-light text-gray-500"> Live: 18 </h2>
                    <div class="overflow-x-auto">
                      <table class="w-full table-auto">
                        <thead>
                          <tr class="bg-gray-100">
                            <th class="px-4 py-2 text-left">Product ID</th>
                            <th class="px-4 py-2 text-left">Product</th>
                            <th class="px-4 py-2 text-left ">On-demand</th>
                            <th class="px-4 py-2 text-left ">Stocks</th>
                            <th class="px-4 py-2 text-left ">Date Updated</th>
                            <th class="px-4 py-2 text-left">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00124</td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/rtc-chicken-inasal.png" class="w-12 h-12 rounded-xl" alt=""/>
                                    <span class="ml-3">Ready to Cook Chicken Inasal</span>
                                </div>
                            </td> 
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">100</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00567</td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/rtc-chicken-bbq.png" class="w-12 h-12 rounded-xl" alt=""/>
                                    <span class="ml-3">Ready to Cook Chicken BBQ</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">100</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00839</td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/rtc-chicken-siomai.png" class="w-10 h-10 ml-1 rounded-sm" alt=""/>
                                    <span class="ml-3">Ready to Cook Chicken Siomai</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">400</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00218</td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/rtc-chicken-longanisa.png" class="w-12 h-12 rounded-xl" alt=""/>
                                    <span class="ml-3">Ready to Cook Chicken Longanisa</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">300</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00987</td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/rtc-cheesy-chicken-fingers.png" class="w-12 h-12 rounded-xl" alt=""/>
                                    <span class="ml-3">Ready to Cook Chicken Cheesy Fingers</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">100</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00456</td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/rtc-chicken-lumpia.png" class="w-10 h-10 ml-1 rounded-sm" alt=""/>
                                    <span class="ml-3">Ready to Cook Chicken Lumpia</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">250</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00329</td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/rtc-chicken-tapa.png" class="w-10 h-10 ml-1 rounded-sm" alt=""/>
                                    <span class="ml-3">Ready to Cook Chicken Tapa</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">100</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00743</td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/rtc-korean-chicken-bbq.png" class="w-10 h-10 ml-1 rounded-sm" alt=""/>
                                    <span class="ml-3">Ready to Cook Korean Chicken BBQ</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">100</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00185</td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/rtc-chicken-teriyaki.png" class="w-12 h-12 rounded-xl" alt=""/>
                                    <span class="ml-3">Ready to Cook Chicken Teriyaki</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">100</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00621</td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/rtc-mideterranian.png" class="w-10 h-10 ml-1 rounded-sm" alt=""/>
                                    <span class="ml-3">Ready to Cook Middeterranian</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">100</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00934
                            </td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/rtc-fried-chicken.png" class="w-12 h-12 rounded-xl" alt=""/>
                                    <span class="ml-3">Ready to Cook Fried Chicken</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">250</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00267</td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/rtc-chicken-tocino.png" class="w-12 h-12 rounded-xl" alt=""/>
                                    <span class="ml-3">Ready to Cook Chicken Tocino</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">200</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00892</td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/rtc-vanilla-chicken-finger.png" class="w-10 h-10 ml-1 rounded-sm" alt=""/>
                                    <span class="ml-3">Ready to Cook Vanilla Chicken Finger</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">100</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00498</td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/rtc-spicy-wings.png" class="w-12 h-12 rounded-xl" alt=""/>
                                    <span class="ml-3">Ready to Cook Chicken Spicy Wings</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">250</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00149</td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/rtc-spicy-fried-chicken.png" class="w-12 h-12 rounded-xl" alt=""/>
                                    <span class="ml-3">Ready to Cook Spicy Fried Chicken</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">150</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00583</td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/rtc-oriental-wings.png" class="w-12 h-12 rounded-xl" alt=""/>
                                    <span class="ml-3">Ready to Cook Oriental WIngs</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">100</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00711</td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/rtc-pepper-steak.png" class="w-10 h-10 ml-1 rounded-sm" alt=""/>
                                    <span class="ml-3">Ready to Cook Pepper Steak</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">100</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          <tr class="text-sm border-b-2 border-gray-100">
                            <td class="px-4 py-2 text-[12px] font-normal">PROD-00358</td>
                            <td class="font-light text-[12px] py-2 px-4">
                                <div class="flex items-center">
                                    <img src="../../resources/img/Products/Chicken-lumpia-shanghai-mix.png" class="w-10 h-10 ml-1 rounded-sm" alt=""/>
                                    <span class="ml-3">Ready to Cook Chicken Lumpia Shanghai Mix</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-light text-center">
                                <label class="switch">
                                    <input type="checkbox" class="hidden" id="toggle">
                                    <span class="slider round"></span>
                                  </label>
                            </td>
                            <td class="px-4 py-2 text-[12px] font-light">200</td>
                            <td class="px-4 py-2 text-[12px] text-left font-light">September 30, 2024</td>
                            <td class="px-4">
                              <button class="px-4 py-2 text-[12px] font-semibold text-white rounded-md hover:bg-gray-400 hover:text-black bg-gray-500">Edit</button>
                            </td>
                          </tr>
                          
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                    
                    <!-- Delisted Tab Table -->
                    <div id="delisted-table" class="hidden mt-6">
                        <h2 class="mb-2 font-light text-gray-500"> Delited and Suspended: 0 </h2>
                        <div class="overflow-x-auto">
                          <table class="w-full border table-auto">
                            <thead>
                              <tr class="bg-gray-100">
                                <th class="px-4 py-2 text-left">Product ID</th>
                                <th class="px-4 py-2 text-left">Product</th>
                                <th class="px-4 py-2 text-left ">On-demand</th>
                                <th class="px-4 py-2 text-left ">Stocks</th>
                                <th class="px-4 py-2 text-left ">Date Updated</th>
                                <th class="px-4 py-2 text-left">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td colspan="6" class="px-4 py-20 font-light text-center border text-md">No Products are Delisted and Suspended.</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>

                      <!-- Out of Stock Tab Table -->   
                      <div id="outstock-table" class="hidden mt-6">
                        <h2 class="mb-2 font-light text-gray-500"> Out Of Stock: 0 </h2>
                        <div class="overflow-x-auto">
                          <table class="w-full table-auto">
                            <thead>
                              <tr class="bg-gray-100">
                                <th class="px-4 py-2 text-left">Product ID</th>
                                <th class="px-4 py-2 text-left">Product</th>
                                <th class="px-4 py-2 text-left ">On-demand</th>
                                <th class="px-4 py-2 text-left ">Stocks</th>
                                <th class="px-4 py-2 text-left ">Date Updated</th>
                                <th class="px-4 py-2 text-left">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td colspan="6" class="px-4 py-20 font-light text-center border text-md">No Out-of-Stock Products.</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>

                      <!-- Low Stock Tab Table -->
                      <div id="lowstock-table" class="hidden mt-6">
                        <h2 class="mb-2 font-light text-gray-500"> Low Stock: 0 </h2>
                        <div class="overflow-x-auto">
                          <table class="w-full table-auto">
                            <thead>
                              <tr class="bg-gray-100">
                                <th class="px-4 py-2 text-left">Product ID</th>
                                <th class="px-4 py-2 text-left">Product</th>
                                <th class="px-4 py-2 text-left ">On-demand</th>
                                <th class="px-4 py-2 text-left ">Stocks</th>
                                <th class="px-4 py-2 text-left ">Date Updated</th>
                                <th class="px-4 py-2 text-left">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td colspan="6" class="px-4 py-20 font-light text-center border text-md">No Products are on Low Stocks.</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>

                      <!-- On-demand Tab Table -->
                      <div id="ondemand-table" class="hidden mt-6">
                        <h2 class="mb-2 font-light text-gray-500"> On-demand: 0 </h2>
                        <div class="overflow-x-auto">
                          <table class="w-full table-auto">
                            <thead>
                              <tr class="bg-gray-100">
                                <th class="px-4 py-2 text-left">Product ID</th>
                                <th class="px-4 py-2 text-left">Product</th>
                                <th class="px-4 py-2 text-left ">On-demand</th>
                                <th class="px-4 py-2 text-left ">Stocks</th>
                                <th class="px-4 py-2 text-left ">Date Updated</th>
                                <th class="px-4 py-2 text-left">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td colspan="6" class="px-4 py-20 font-light text-center border text-md">No On-demand products.</td>
                              </tr>
                            </tbody>
                          </table>
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

    <!-- Stocks Modal -->

    <div id="stocksModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">
        <div class="relative w-1/2 p-6 bg-white rounded-lg shadow-md">
            <button onclick="closestocksModal()" class="absolute text-blue-600 top-4 right-4 hover:underline">
                Close
            </button>
            <div class="mb-4">
                <label class="block mb-2 text-gray-700">Product</label>
                <div class="relative">
                    <select class="w-full px-3 py-2 border rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-green-500">
                        <option class="font-light text-[12px]">Choose Product</option>
                        <option class="font-light text-[12px]">Ready To Cook Chicken Tocino</option>
                        <option class="font-light text-[12px]">Ready To Cook Fried Chicken</option>
                        <option class="font-light text-[12px]">Ready To Cook Spicy Fried Chicken</option>
                        <option class="font-light text-[12px]">Ready To Cook Spicy Wings</option>
                        <option class="font-light text-[12px]">Ready To Cook Chicken Lumpia</option>
                        <option class="font-light text-[12px]">Ready To Cook Chicken Siomai</option>
                        <option class="font-light text-[12px]">Ready To Cook Chicken Cheesy Fingers</option>
                        <option class="font-light text-[12px]">Ready To Cook Chicken Lumpia Shanghai Mix</option>
                        <option class="font-light text-[12px]">Ready To Cook Oriental Wings</option>
                        <option class="font-light text-[12px]">Ready To Cook Chicken Barbeque</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <iconify-icon icon="mdi:arrow-down-drop" class="w-4 h-4 text-xl"></iconify-icon>
                    </div>
                </div>
            </div>
            <!-- ... other form fields ... -->
            <div class="mb-4">  
                <label class="block mb-2 text-gray-700">Stocks</label>
                <input type="number" placeholder="Enter Number of Stocks" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-gray-700">Stock Type</label>
                <div class="relative">
                    <select class="w-full px-3 py-2 border rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-green-500">
                        <option>Choose Stock Type</option>
                        <option>In Stock</option>
                        <option>Out Stock</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <iconify-icon icon="mdi:arrow-down-drop" class="w-4 h-4 text-xl"></iconify-icon>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-gray-700">Reorder Level</label>
                <input type="number" placeholder="Enter Reorder Level" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-gray-700">Stock Date</label>
                <input type="date" placeholder="Enter Date" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-gray-700">Stock Reason</label>
                <textarea placeholder="Enter Reason" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
            </div>

            <div class="flex justify-end mt-6">
                <button onclick="closestocksModal()" class="px-6 py-2 mr-4 text-gray-700 bg-white border rounded-lg hover:bg-gray-100">Cancel</button>
                <button class="px-6 py-2 text-white bg-green-500 border rounded-lg hover:bg-green-600">Save and Publish</button>
            </div> 
        </div>
    </div>

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
        
        const liveTab = document.getElementById('tab-live');
        const delistedTab = document.getElementById('tab-delisted');
        const outstockTab = document.getElementById('tab-outstock');
        const lowstockTab = document.getElementById('tab-lowstock');
        const ondemandTab = document.getElementById('tab-ondemand');

        const Live = document.getElementById('live-table');
        const Delisted = document.getElementById('delisted-table');
        const Outstock = document.getElementById('outstock-table');
        const Lowstock = document.getElementById('lowstock-table');
        const Ondemand = document.getElementById('ondemand-table');

        function showTab(tabToShow) {
            // Hide all tables
            Live.classList.add('hidden');
            Delisted.classList.add('hidden');
            Outstock.classList.add('hidden');
            Lowstock.classList.add('hidden');
            Ondemand.classList.add('hidden');

            // Show the selected tab
            tabToShow.classList.remove('hidden');
        }

        liveTab.addEventListener('click', () => {
            showTab(Live);
            liveTab.classList.add('text-green-600', 'border-b-4', 'border-green-600');
            delistedTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            outstockTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            lowstockTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            ondemandTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
        });

        delistedTab.addEventListener('click', () => {
            showTab(Delisted);
            liveTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            delistedTab.classList.add('text-green-600', 'border-b-4', 'border-green-600');
            outstockTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            lowstockTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            ondemandTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
        });

        outstockTab.addEventListener('click', () => {
            showTab(Outstock);
            liveTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            delistedTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            outstockTab.classList.add('text-green-600', 'border-b-4', 'border-green-600');
            lowstockTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            ondemandTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
        });

        lowstockTab.addEventListener('click', () => {
            showTab(Lowstock);
            liveTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            delistedTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            outstockTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            lowstockTab.classList.add('text-green-600', 'border-b-4', 'border-green-600');
            ondemandTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
        });

        ondemandTab.addEventListener('click', () => {
            showTab(Ondemand);
            liveTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            delistedTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            outstockTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            lowstockTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
            ondemandTab.classList.add('text-green-600', 'border-b-4', 'border-green-600');
        });


        showTab(Live);

        function openstocksModal() {
            document.getElementById('stocksModal').classList.remove('hidden');
        }
        function closestocksModal() {
            document.getElementById('stocksModal').classList.add('hidden');
        }
    </script>
</body>
</html>