<?php
session_start();
require_once '../../classes/account.class.php'; // 
require_once '../../classes/distributor.class.php';

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


// Fetching delivery details
$distributorId = $_SESSION['distributor_id'];

$distributor = new Order();

$deliveryProcess = $distributor->fetchProcessOrders($distributorId);
$deliveryTransit = $distributor->fetchTransitOrders($distributorId);
$deliveryDelivered = $distributor->fetchDeliveredOrders($distributorId);
?>


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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
              <a href="./dist_logout.php">
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

        <!-- Process Orders Table -->
        <div id="process-table" class="block mt-6">
          <h2 class="mb-2 font-light text-gray-500">Delivery Orders: <?php echo count($deliveryProcess); ?></h2>
          <div class="overflow-x-auto">
            <table class="min-w-full bg-white table-auto">
              <thead class="bg-gray-100">
                <tr>
                  <th class="px-4 py-2 text-left">Order ID</th>
                  <th class="px-4 py-2 text-left">Recipient</th>
                  <th class="px-4 py-2 text-left">Contact</th>
                  <th class="px-4 py-2 text-left">Address</th>
                  <th class="px-4 py-2 text-left">Status</th>
                  <th class="px-4 py-2 text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if (empty($deliveryProcess)): ?>
                  <tr>
                    <td colspan="6" class="px-4 py-20 text-center text-gray-500">You don't have orders recently</td>
                  </tr>
                <?php else: ?>
                  <?php foreach ($deliveryProcess as $delivery): ?>
                    <tr class="border-b">
                      <td class="px-4 py-2 text-[12px] font-light"><?php echo htmlspecialchars($delivery['order_id']); ?></td>
                      <td class="px-4 py-2 text-[12px] font-light">
                        <?php echo htmlspecialchars($delivery['first_name']) . ' ' . htmlspecialchars($delivery['last_name']); ?>
                      </td>
                      <td class="px-4 py-2 text-[12px] font-light"><?php echo htmlspecialchars($delivery['contact']); ?></td>
                      <td class="px-4 py-2 text-[12px] font-light"><?php echo htmlspecialchars($delivery['address']); ?></td>
                      <td class="px-4 py-2 text-[12px] font-light"><?php echo htmlspecialchars($delivery['status']); ?></td>
                      <td class="px-4 py-2 text-center">
                        <button class="px-4 py-1 text-white bg-blue-500 rounded hover:bg-blue-600"
                          onclick="viewProcess('<?php echo $delivery['order_id']; ?>')">
                          View Details
                        </button>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>

        <!-- On-Transit Orders Table -->
        <div id="transit-table" class="hidden block mt-6">
          <h2 class="mb-2 font-light text-gray-500">Delivery Orders: <?php echo count($deliveryTransit); ?></h2>
          <div class="overflow-x-auto">
            <table class="min-w-full bg-white table-auto">
              <thead class="bg-gray-100">
                <tr>
                  <th class="px-4 py-2 text-left">Order ID</th>
                  <th class="px-4 py-2 text-left">Recipient</th>
                  <th class="px-4 py-2 text-left">Contact</th>
                  <th class="px-4 py-2 text-left">Address</th>
                  <th class="px-4 py-2 text-left">Status</th>
                  <th class="px-4 py-2 text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if (empty($deliveryTransit)): ?>
                  <tr>
                    <td colspan="6" class="px-4 py-20 text-center text-gray-500">You don't have orders recently</td>
                  </tr>
                <?php else: ?>
                  <?php foreach ($deliveryTransit as $delivery): ?>
                    <tr class="border-b">
                      <td class="px-4 py-2 text-[12px] font-light"><?php echo htmlspecialchars($delivery['order_id']); ?></td>
                      <td class="px-4 py-2 text-[12px] font-light">
                        <?php echo htmlspecialchars($delivery['first_name']) . ' ' . htmlspecialchars($delivery['last_name']); ?>
                      </td>
                      <td class="px-4 py-2 text-[12px] font-light"><?php echo htmlspecialchars($delivery['contact']); ?></td>
                      <td class="px-4 py-2 text-[12px] font-light"><?php echo htmlspecialchars($delivery['address']); ?></td>
                      <td class="px-4 py-2 text-[12px] font-light"><?php echo htmlspecialchars($delivery['status']); ?></td>
                      <td class="px-4 py-2 text-center">
                        <button class="px-4 py-1 text-white bg-blue-500 rounded hover:bg-blue-600"
                          onclick="viewDetails('<?php echo $delivery['order_id']; ?>')">
                          View Details
                        </button>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Delivered Orders Table -->
        <div id="delivered-table" class="hidden block mt-6">
          <h2 class="mb-2 font-light text-gray-500">Delivery Orders: <?php echo count($deliveryDelivered); ?></h2>
          <div class="overflow-x-auto">
            <table class="min-w-full bg-white table-auto">
              <thead class="bg-gray-100">
                <tr>
                  <th class="px-4 py-2 text-left">Order ID</th>
                  <th class="px-4 py-2 text-left">Recipient</th>
                  <th class="px-4 py-2 text-left">Contact</th>
                  <th class="px-4 py-2 text-left">Address</th>
                  <th class="px-4 py-2 text-left">Status</th>
                  <th class="px-4 py-2 text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if (empty($deliveryDelivered)): ?>
                  <tr>
                    <td colspan="6" class="px-4 py-20 text-center text-gray-500">You don't have orders recently</td>
                  </tr>
                <?php else: ?>
                  <?php foreach ($deliveryDelivered as $delivery): ?>
                    <tr class="border-b">
                      <td class="px-4 py-2 text-[12px] font-light"><?php echo htmlspecialchars($delivery['order_id']); ?></td>
                      <td class="px-4 py-2 text-[12px] font-light">
                        <?php echo htmlspecialchars($delivery['first_name']) . ' ' . htmlspecialchars($delivery['last_name']); ?>
                      </td>
                      <td class="px-4 py-2 text-[12px] font-light"><?php echo htmlspecialchars($delivery['contact']); ?></td>
                      <td class="px-4 py-2 text-[12px] font-light"><?php echo htmlspecialchars($delivery['address']); ?></td>
                      <td class="px-4 py-2 text-[12px] font-light"><?php echo htmlspecialchars($delivery['status']); ?></td>
                      <td class="px-4 py-2 text-center">
                        <button class="px-4 py-1 text-white bg-blue-500 rounded hover:bg-blue-600"
                          onclick="viewDetails('<?php echo $delivery['order_id']; ?>')">
                          View Details
                        </button>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
    </main>
  </div>

  <!-- Modal Structure -->
    <!-- Processing-->
  <div id="processdetailsModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
    <div class="relative w-full max-w-xl p-6 bg-white rounded shadow-lg">
      <div class="flex items-center justify-between mb-4">
        <h2 class="mb-4 text-xl font-semibold">Delivery Order No: <?php echo htmlspecialchars($delivery['id']); ?> </h2>
        <button class="text-gray-500 underline hover:text-gray-700" onclick="closeModal()">Close</button>
      </div>
      <div id="processmodalContent" class="text-sm text-gray-700">
        <!-- Order details will be loaded here -->
      </div>
      <div class="flex justify-end mt-4">
        <button id="deliverButton" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Deliver</button>
      </div>
    </div>
  </div>
    <!-- On-Transit-->
  <div id="transitdetailsModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
    <div class="relative w-full max-w-md p-6 bg-white rounded shadow-lg">
      <div class="flex items-center justify-between mb-4">
        <h2 class="mb-4 text-xl font-semibold">Delivery Order No: <?php echo htmlspecialchars($delivery['id']); ?> </h2>
        <button class="text-gray-500 underline hover:text-gray-700" onclick="closeModal()">Close</button>
      </div>
      <div id="transitmodalContent" class="text-sm text-gray-700">
        <!-- Order details will be loaded here -->
      </div>
      <div class="flex justify-end mt-4">
        <button id="deliveredButton" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Delivered</button>
      </div>
    </div>
  </div>
    <!-- Delivered-->
  <div id="delivereddetailsModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
    <div class="relative w-full max-w-md p-6 bg-white rounded shadow-lg">
      <div class="flex items-center justify-between mb-4">
        <h2 class="mb-4 text-xl font-semibold">Delivery Order No: <?php echo htmlspecialchars($delivery['id']); ?> </h2>
        <button class="text-gray-500 underline hover:text-gray-700" onclick="closeModal()">Close</button>
      </div>
      <div id="deliverdmodalContent" class="text-sm text-gray-700">
        <!-- Order details will be loaded here -->
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
<script src="../../js/tailwind/dist_delivery.js"></script>
</body>

</html>