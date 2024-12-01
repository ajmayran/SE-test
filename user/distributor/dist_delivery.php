<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Distributors Delivery</title>
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
        <span class="p-1 mb-1 font-sans">Zambasulta</span>

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
              <span class="ml-2 text-sm font-normal">Zambasulta</span>
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
        <li class="group active">
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
      <h1 class="p-3 text-2xl font-semibold bg-green-300 rounded-t-md">Delivery</h1>
      <div class="p-4 bg-white rounded-b-lg shadow-md min-h-[600px]">
        <!-- Tabs -->
        <div class="flex mb-4 space-x-4 border-b">
          <button id="tab-process" class="px-4 py-2 text-green-600 border-b-4 border-green-600 text-graay-600 focus:outline-none">
            Processing
          </button>
          <button id="tab-ontransit" class="px-4 py-2 text-gray-600 hover:text-green-600 hover:border-green-600 focus:outline-none">
            On-Transit
          </button>
          <button id="tab-delivered" class="px-4 py-2 text-gray-600 hover:text-green-600 hover:border-green-600 focus:outline-none">
            Delivered
          </button>
        </div>


        <div class="flex items-center justify-between w-full h-10">
          <!-- Search -->
          <div class="flex items-center w-full max-w-md">
            <input type="text" placeholder="Search order" class="w-64 px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-green-500" />
            <button class="w-12 p-2 text-white bg-green-500 rounded-r-md hover:bg-green-600 focus:outline-none">
              <iconify-icon icon="material-symbols:search" class="items-center p-1 text-xl align-middle"></iconify-icon>
            </button>
          </div>
          <!-- Export Reports Button -->
          <button class="p-2 bg-green-500 rounded-md hover:bg-gray-200 hover:text-white group">
            <iconify-icon icon="fa:download" class="px-1 pb-1 text-lg text-white align-middle group-hover:text-black hover:border-green-500"></iconify-icon>
            <span class="pr-1 text-sm text-white group-hover:text-black">Export Reports</span>
          </button>
        </div>

        <!-- Processing Orders Delivery -->
        <div id="process-table" class="block mt-6">
          <h2 class="mb-2 font-light text-gray-500"> Orders for Delivery: 2 </h2>
          <div class="overflow-x-auto">
            <table class="w-full table-auto">
              <thead>
                <tr class="bg-gray-100">
                  <th class="px-4 py-2 text-left">Order ID</th>
                  <th class="px-4 py-2 text-left">Recipient</th>
                  <th class="px-4 py-2 text-left ">Contact Number</th>
                  <th class="px-4 py-2 text-left ">Delivery Address</th>
                  <th class="px-4 py-2 text-left ">Status</th>
                  <th class="px-4 py-2 text-left "></th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-sm border-b-2 border-gray-100">
                  <td class="px-4 py-2 text-[12px] font-semibold">346819EVG4ZUO</td>
                  <td class="px-4 py-2 text-[12px] font-light">Julies Beykshap</td>
                  <td class="px-4 py-2 text-[12px] font-light">09265007819</td>
                  <td class="px-4 py-2 text-[12px] font-light">1st Street, Southcom Village, Zamboanga City</td>
                  <td class="px-4 py-2 text-[12px] font-light">Processing</td>
                  <td>
                    <button class="px-4 py-2 text-[12px] font-light text-blue-600 cursor-pointer hover:underline" data-order-id="346819EVG4ZUO" onclick="toggleProcessModal(true, processingData[0])">Details</button>
                  </td>
                </tr>
                <tr>
                  <td class="px-4 py-2 text-[12px] font-semibold">241911VGA2VIP</td>
                  <td class="px-4 py-2 text-[12px] font-light">Sinto Ron</td>
                  <td class="px-4 py-2 text-[12px] font-light">09918701234</td>
                  <td class="px-4 py-2 text-[12px] font-light">Aquino Drive, Baliwasan Grande, Zamboanga City</td>
                  <td class="px-4 py-2 text-[12px] font-light">Processing</td>
                  <td>
                    <button class="px-4 py-2 text-[12px] font-light text-blue-600 cursor-pointer hover:underline" data-order-id="241911VGA2VIP" onclick="toggleProcessModal(true, processingData[1])">Details</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- On-Transit Delivery Table -->
        <div id="ontransit-table" class="hidden mt-6">
          <h2 class="mb-2 font-light text-gray-500"> On-Transit Orders: 1 </h2>
          <div class="overflow-x-auto">
            <table class="w-full table-auto">
              <thead>
                <tr class="bg-gray-100">
                  <th class="px-4 py-2 text-left">Order ID</th>
                  <th class="px-4 py-2 text-left">Recipient</th>
                  <th class="px-4 py-2 text-left ">Contact Number</th>
                  <th class="px-4 py-2 text-left ">Delivery Address</th>
                  <th class="px-4 py-2 text-left ">Status</th>
                  <th class="px-4 py-2 text-left "></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="px-4 py-2 text-[12px] font-semibold">100242ARKSOU</td>
                  <td class="px-4 py-2 text-[12px] font-light">Ramses Manalolo</td>
                  <td class="px-4 py-2 text-[12px] font-light">09691236969</td>
                  <td class="px-4 py-2 text-[12px] font-light">Astoria Hotel, Pasonanca , Zamboanga City</td>
                  <td class="px-4 py-2 text-[12px] font-light">Completed</td>
                  <td>
                    <button class="px-4 py-2 text-[12px] font-light text-blue-600 cursor-pointer hover:underline" data-order-id="100242ARKSOU" onclick="toggleTransitModal(true, transitData[0])">Details</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Delivered Table -->
        <div id="delivered-table" class="hidden mt-6">
          <h2 class="mb-2 font-light text-gray-500"> Completed Orders: 1 </h2>
          <div class="overflow-x-auto">
            <table class="w-full table-auto">
              <thead>
                <tr class="bg-gray-100">
                  <th class="px-4 py-2 text-left">Order ID</th>
                  <th class="px-4 py-2 text-left">Recipient</th>
                  <th class="px-4 py-2 text-left ">Contact Number</th>
                  <th class="px-4 py-2 text-left ">Delivery Address</th>
                  <th class="px-4 py-2 text-left ">Status</th>
                  <th class="px-4 py-2 text-left "></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="px-4 py-2 text-[12px] font-semibold">100242ARKSOU</td>
                  <td class="px-4 py-2 text-[12px] font-light">Ramses Manalolo</td>
                  <td class="px-4 py-2 text-[12px] font-light">09691236969</td>
                  <td class="px-4 py-2 text-[12px] font-light">Astoria Hotel, Pasonanca , Zamboanga City</td>
                  <td class="px-4 py-2 text-[12px] font-light">Completed</td>
                  <td>
                    <button class="px-4 py-2 text-[12px] font-light text-blue-600 cursor-pointer hover:underline" data-order-id="100242ARKSOU" onclick="toggleDeliveredModal(true, deliveredData[0])">Details</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </main>
  </div>

  <!-- Processing Modal -->
  <div id="process-modal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50">
    <div class="absolute inset-0 flex items-center justify-center">
      <div class="w-3/4 p-6 bg-white rounded-md shadow-lg">
        <div class="flex items-center justify-between">
          <h2 class="text-lg font-bold">Order ID: <span id="order-id">--</span></h2>
          <button class="text-blue-600 hover:underline" onclick="toggleProcessModal(false)">Close</button>
        </div>
        <hr class="my-4 border-gray-300">

        <!-- Order Details Table -->
        <div class="overflow-x-auto">
          <table class="w-full border-b border-gray-200 table-auto">
            <thead>
              <tr class="text-left border-b">
                <th class="px-4 py-2">Products</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Qty</th>
                <th class="px-4 py-2">Amount</th>
              </tr>
            </thead>
            <tbody id="order-products">
              <!-- Content -->
            </tbody>
          </table>
        </div>

        <!-- Order Summary -->
        <div class="flex justify-between mt-4 ">
          <div class="flex flex-col">
            <span class="">Customer Name: <span id="order-customer-name" class="text-sm font-light">--</span></span>
            <span>Delivery Address: <span id="order-customer-address" class="text-sm font-light">--</span></span>
            <span>Customer Contact: <span id="order-customer-contact" class="text-sm font-light">--</span></span>
            <span>Order Date: <span id="order-date" class="text-sm font-light">--</span></span>
          </div>
          <div class="flex flex-col">
            <span>Subtotal: <span id="order-subtotal" class="text-sm font-light">₱0.00</span></span>
            <span>Voucher: <span id="order-voucher" class="text-sm font-light">--</span></span>
            <span>Discount: <span id="order-discount" class="text-sm font-light">--</span></span>
            <span>Total: <span id="order-total" class="text-sm font-light">₱0.00</span></span>
          </div>
          <div class="flex items-center space-x-4">
            <button class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 change-status-button-process">Change Status</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- On-Transit Modal-->
  <div id="transit-modal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50">
    <div class="absolute inset-0 flex items-center justify-center">
      <div class="w-3/4 p-6 bg-white rounded-md shadow-lg">
        <div class="flex items-center justify-between">
          <h2 class="text-lg font-bold">Order ID: <span id="transit-order-id">--</span></h2>
          <button class="text-blue-600 hover:underline" onclick="toggleTransitModal(false)">Close</button>
        </div>
        <hr class="my-4 border-gray-300">

        <!-- Order Details Table -->
        <div class="overflow-x-auto">
          <table class="w-full border-b border-gray-200 table-auto">
            <thead>
              <tr class="text-left border-b">
                <th class="px-4 py-2">Products</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Quantity</th>
                <th class="px-4 py-2">Amount</th>
              </tr>
            </thead>
            <tbody id="transit-order-products">
              <!-- Content -->
            </tbody>
          </table>
        </div>

        <!-- Payment Summary -->
        <div class="flex justify-between mt-4 ">
          <div class="flex flex-col">
            <span class="">Customer Name: <span id="transit-order-name" class="text-sm font-light">--</span></span>
            <span>Delivery Address: <span id="transit-order-address" class="text-sm font-light">--</span></span>
            <span>Customer Contact: <span id="transit-order-contact" class="text-sm font-light">--</span></span>
            <span>Order Date: <span id="transit-order-date" class="text-sm font-light">--</span></span>
          </div>
          <div class="flex flex-col">
            <span>Subtotal: <span id="transit-order-subtotal" class="text-sm font-light">₱0.00</span></span>
            <span>Voucher: <span id="transit-order-voucher" class="text-sm font-light">--</span></span>
            <span>Discount: <span id="transit-order-discount" class="text-sm font-light">--</span></span>
            <span>Total: <span id="transit-order-total" class="text-sm font-light">₱0.00</span></span>
          </div>
          <div class="flex items-center space-x-4">
            <button class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 change-status-button-transit">Change Status</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Complete Delivery Modal-->
  <div id="delivered-modal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50">
    <div class="absolute inset-0 flex items-center justify-center">
      <div class="w-3/4 p-6 bg-white rounded-md shadow-lg">
        <div class="flex items-center justify-between">
          <h2 class="text-lg font-bold">Order ID: <span id="complete-order-id">--</span></h2>
          <button class="text-blue-600 hover:underline" onclick="toggleDeliveredModal(false)">Close</button>
        </div>
        <hr class="my-4 border-gray-300">

        <!-- Order Details Table -->
        <div class="overflow-x-auto">
          <table class="w-full border-b border-gray-200 table-auto">
            <thead>
              <tr class="text-left border-b">
                <th class="px-4 py-2">Products</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Quantity</th>
                <th class="px-4 py-2">Amount</th>
              </tr>
            </thead>
            <tbody id="complete-order-products">
              <!-- Content -->
            </tbody>
          </table>
        </div>

        <!-- Payment Summary -->
        <div class="flex justify-between mt-4 ">
          <div class="flex flex-col">
            <span class="">Customer Name: <span id="complete-order-name" class="text-sm font-light">--</span></span>
            <span>Delivery Address: <span id="complete-order-address" class="text-sm font-light">--</span></span>
            <span>Customer Contact: <span id="complete-order-contact" class="text-sm font-light">--</span></span>
            <span>Order Date: <span id="complete-order-date" class="text-sm font-light">--</span></span>
          </div>
          <div class="flex flex-col">
            <span>Subtotal: <span id="complete-order-subtotal" class="text-sm font-light">₱0.00</span></span>
            <span>Voucher: <span id="complete-order-voucher" class="text-sm font-light">--</span></span>
            <span>Discount: <span id="complete-order-discount" class="text-sm font-light">--</span></span>
            <span>Total: <span id="complete-order-total" class="text-sm font-light">₱0.00</span></span>
          </div>
          <div class="flex items-center space-x-4">
            <button class="px-4 py-2 text-white bg-green-500 rounded-md hover:bg-green-600">Completed</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Change Status Modal -->
  <div id="change-status-modal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50">
    <div class="absolute inset-0 flex items-center justify-center">
      <div class="w-1/3 p-6 bg-white rounded-md shadow-lg">
        <div class="flex items-center justify-between">
          <h2 class="text-lg font-bold">Change Delivery Status</h2>
          <button class="text-blue-600 hover:underline" onclick="toggleChangeStatusModal(false)">Close</button>
        </div>
        <hr class="my-4 border-gray-300">

        <div class="mb-4">
          <label for="new-status" class="block text-sm font-medium text-gray-700">Select New Status</label>
          <select id="new-status" class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500">
            <option value="Processing">Processing</option>
            <option value="On-Transit">On-Transit</option>
            <option value="Delivered">Delivered</option>
          </select>
        </div>
        <div class="flex justify-end">
          <button class="px-4 py-2 text-white bg-green-500 rounded-md hover:bg-green-600 " onclick="changeStatus()">Confirm</button>
        </div>
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
    const processTab = document.getElementById('tab-process');
    const ontransitTab = document.getElementById('tab-ontransit');
    const deliveredTab = document.getElementById('tab-delivered');
    const processTable = document.getElementById('process-table');
    const ontransitTable = document.getElementById('ontransit-table');
    const deliveredTable = document.getElementById('delivered-table');


    processTab.addEventListener('click', () => {
      processTable.classList.remove('hidden');
      ontransitTable.classList.add('hidden');
      deliveredTable.classList.add('hidden');
      processTab.classList.add('text-green-600', 'border-b-4', 'border-green-600');
      ontransitTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
      deliveredTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
    });

    ontransitTab.addEventListener('click', () => {
      processTable.classList.add('hidden');
      ontransitTable.classList.remove('hidden');
      deliveredTable.classList.add('hidden');
      processTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
      ontransitTab.classList.add('text-green-600', 'border-b-4', 'border-green-600');
      deliveredTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
      processTab.classList.add('text-gray-600');
    });

    deliveredTab.addEventListener('click', () => {
      processTable.classList.add('hidden');
      ontransitTable.classList.add('hidden');
      deliveredTable.classList.remove('hidden');
      processTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
      ontransitTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
      deliveredTab.classList.add('text-green-600', 'border-b-4', 'border-green-600');
      processTab.classList.add('text-gray-600');
    });


    const processingData = [{
        id: "346819EVG4ZUO",
        products: [{
            name: "Magnolia Ready to Cook Cheesy Chicken Fingers",
            price: 200,
            qty: 20,
            image: "../../resources/img/Products/rtc-cheesy-chicken-fingers.png"
          },
          {
            name: "Magnolia Ready to Cook Chicken Siomai",
            price: 200,
            qty: 10,
            image: "../../resources/img/Products/rtc-chicken-siomai.png"
          },
          {
            name: "Magnolia Ready to Cook Lumpia Shanghai Mix",
            price: 200,
            qty: 10,
            image: "../../resources/img/Products/rtc-chicken-tocino.png"
          },
        ],
        customername: "Julies Beykshap",
        customeraddress: "1st Street, Southcom Village, Zamboanga City",
        customercontact: "09265007819",
        subtotal: 8000,
        voucher: "--",
        discount: "--",
        total: 8000,
      },

      {
        id: "241911VGA2VIP",
        products: [{
          name: "Magnolia Ready to Cook Chicken Siomai",
          price: 200,
          qty: 20,
          image: "../../resources/img/Products/rtc-chicken-siomai.png"
        }, ],
        customername: "Sinto Ron",
        customeraddress: "Aquino Drive, Baliwasan Grande, Zamboanga City",
        customercontact: "09918701234",
        subtotal: 4000,
        voucher: "--",
        discount: "--",
        total: 4000,
      },
    ];




    const transitData = [{
      id: "100242ARKSOU",
      products: [{
          name: "Magnolia Ready to Cook Cheesy Chicken Fingers",
          price: 200,
          qty: 20,
          image: "../../resources/img/Products/rtc-cheesy-chicken-fingers.png"
        },
        {
          name: "Magnolia Ready to Cook Chicken Siomai",
          price: 200,
          qty: 10,
          image: "../../resources/img/Products/rtc-chicken-siomai.png"
        },
      ],
      customername: "Ramses Manalolo",
      customeraddress: "Astoria Hotel, Pasonanca , Zamboanga City",
      customercontact: "09691236969",
      subtotal: 6000,
      voucher: "--",
      discount: "--",
      total: 6000,
    }, ];

    const deliveredData = [{
      id: "100242ARKSOU",
      products: [{
          name: "Magnolia Ready to Cook Cheesy Chicken Fingers",
          price: 200,
          qty: 20,
          image: "../../resources/img/Products/rtc-cheesy-chicken-fingers.png"
        },
        {
          name: "Magnolia Ready to Cook Chicken Siomai",
          price: 200,
          qty: 10,
          image: "../../resources/img/Products/rtc-chicken-siomai.png"
        },
      ],
      customername: "Ramses Manalolo",
      customeraddress: "Astoria Hotel, Pasonanca , Zamboanga City",
      customercontact: "09691236969",
      subtotal: 6000,
      voucher: "--",
      discount: "--",
      total: 6000,
    }, ];


    //Process Modal
    function toggleProcessModal(show, orderData = null) {
      const processModal = document.getElementById("process-modal");
      const transitModal = document.getElementById("transit-modal");
      const deliveredModal = document.getElementById("delivered-modal");

      // Hide complete modal if it is open
      transitModal.classList.add("hidden");
      deliveredModal.classList.add("hidden");
      processModal.classList.toggle("hidden", !show);

      if (orderData) {
        // Update modal content for pending order
        document.getElementById("order-id").textContent = orderData.id;

        const productsTable = document.getElementById("order-products");
        productsTable.innerHTML = "";

        orderData.products.forEach((product) => {
          const row = `
                    <tr>
                    <td class="flex items-center px-4 py-2">
                        <img src="${product.image}" alt="Product Image" class="w-12 h-12 mr-2 rounded">
                        ${product.name}
                    </td>
                    <td class="px-4 py-2">₱${product.price.toFixed(2)}</td>
                    <td class="px-4 py-2">${product.qty}</td>
                    <td class="px-4 py-2">₱${(product.price * product.qty).toFixed(2)}</td>
                    </tr>
                `;
          productsTable.innerHTML += row;
        });

        // Update Customer details
        document.getElementById("order-customer-name").textContent = orderData.customername;
        document.getElementById("order-customer-address").textContent = orderData.customeraddress;
        document.getElementById("order-customer-contact").textContent = orderData.customercontact;
        document.getElementById("order-date").textContent = "September 29, 2024";

        // Update payment details
        document.getElementById("order-subtotal").textContent = `₱${orderData.subtotal.toFixed(2)}`;
        document.getElementById("order-voucher").textContent = orderData.voucher;
        document.getElementById("order-discount").textContent = orderData.discount;
        document.getElementById("order-total").textContent = `₱${orderData.total.toFixed(2)}`;
      }
    }

    //Transit
    function toggleTransitModal(show, orderData = null) {
      const processModal = document.getElementById("process-modal");
      const transitModal = document.getElementById("transit-modal");
      const deliveredModal = document.getElementById("delivered-modal");

      // Hide pending modal if it is open
      processModal.classList.add("hidden");
      deliveredModal.classList.add("hidden");
      transitModal.classList.toggle("hidden", !show);

      if (orderData) {
        // Update modal content for completed order
        document.getElementById("transit-order-id").textContent = orderData.id;

        const productsTable = document.getElementById("transit-order-products");
        productsTable.innerHTML = "";

        orderData.products.forEach((product) => {
          const row = `
                    <tr>
                    <td class="flex items-center px-4 py-2">
                        <img src="${product.image}" alt="Product Image" class="w-12 h-12 mr-2 rounded">
                        ${product.name}
                    </td>
                    <td class="px-4 py-2">₱${product.price.toFixed(2)}</td>
                    <td class="px-4 py-2">${product.qty}</td>
                    <td class="px-4 py-2">₱${(product.price * product.qty).toFixed(2)}</td>
                    </tr>
                `;
          productsTable.innerHTML += row;
        });

        // Update Customer details
        document.getElementById("transit-order-name").textContent = orderData.customername;
        document.getElementById("transit-order-address").textContent = orderData.customeraddress;
        document.getElementById("transit-order-contact").textContent = orderData.customercontact;
        document.getElementById("transit-order-date").textContent = "September 29, 2024";

        // Update payment details
        document.getElementById("transit-order-subtotal").textContent = `₱${orderData.subtotal.toFixed(2)}`;
        document.getElementById("transit-order-voucher").textContent = orderData.voucher;
        document.getElementById("transit-order-discount").textContent = orderData.discount;
        document.getElementById("transit-order-total").textContent = `₱${orderData.total.toFixed(2)}`;
      }
    }

    //Delivered
    function toggleDeliveredModal(show, orderData = null) {
      const processModal = document.getElementById("process-modal");
      const transitModal = document.getElementById("transit-modal");
      const deliveredModal = document.getElementById("delivered-modal");

      // Hide pending modal if it is open
      processModal.classList.add("hidden");
      transitModal.classList.add("hidden");
      deliveredModal.classList.toggle("hidden", !show);

      if (orderData) {
        // Update modal content for completed order
        document.getElementById("complete-order-id").textContent = orderData.id;

        const productsTable = document.getElementById("complete-order-products");
        productsTable.innerHTML = "";

        orderData.products.forEach((product) => {
          const row = `
                    <tr>
                    <td class="flex items-center px-4 py-2">
                        <img src="${product.image}" alt="Product Image" class="w-12 h-12 mr-2 rounded">
                        ${product.name}
                    </td>
                    <td class="px-4 py-2">₱${product.price.toFixed(2)}</td>
                    <td class="px-4 py-2">${product.qty}</td>
                    <td class="px-4 py-2">₱${(product.price * product.qty).toFixed(2)}</td>
                    </tr>
                `;
          productsTable.innerHTML += row;
        });

        // Update Customer details
        document.getElementById("complete-order-name").textContent = orderData.customername;
        document.getElementById("complete-order-address").textContent = orderData.customeraddress;
        document.getElementById("complete-order-contact").textContent = orderData.customercontact;
        document.getElementById("complete-order-date").textContent = "September 29, 2024";

        // Update payment details
        document.getElementById("complete-order-subtotal").textContent = `₱${orderData.subtotal.toFixed(2)}`;
        document.getElementById("complete-order-voucher").textContent = orderData.voucher;
        document.getElementById("complete-order-discount").textContent = orderData.discount;
        document.getElementById("complete-order-total").textContent = `₱${orderData.total.toFixed(2)}`;
      }
    }



    // Example: Attach toggleModal to the "Details" button
    document.querySelectorAll("[data-order-id]").forEach((button) => {
      button.addEventListener("click", (e) => {
        const orderId = e.target.getAttribute("data-order-id");
        const orderData = [...processingData, ...transitData, ...deliveredData].find((order) => order.id === orderId);
        toggleModal(true, orderData);
      });
    });

    // In toggleProcessModal function
    document.querySelector(".change-status-button-process").addEventListener("click", () => {
      toggleChangeStatusModal(true);
    });

    // In toggleTransitModal function
    document.querySelector(".change-status-button-transit").addEventListener("click", () => {
      toggleChangeStatusModal(true);
    });


    function toggleChangeStatusModal(show) {
      const changeStatusModal = document.getElementById("change-status-modal");
      changeStatusModal.classList.toggle("hidden", !show);
    }

    function changeStatus() {
      const newStatus = document.getElementById("new-status").value;

      // You can add logic here to update the status in your data
      // For example, if you have the current order ID, you can find it in your data and update it

      console.log("New Status:", newStatus);

      // Close the modal after changing the status
      toggleChangeStatusModal(false);
    }


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