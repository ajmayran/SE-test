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

$order = new Order();
$pendingOrders = $order->fetchPendingOrders($_SESSION['distributor_id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Distributors Orders</title>
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
    .scroll-hide::-webkit-scrollbar {
      display: none;
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
              <a href="../../user/distributor/dist_logout.php">
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
        <li class="group active">
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
      <h1 class="p-3 text-2xl font-semibold bg-green-300 rounded-t-md">My Orders</h1>
      <div class="container mx-auto">
        <div class="p-4 bg-white rounded-b-lg shadow-md min-h-[600px]">
          <!-- Tabs -->
          <div class="flex mb-4 space-x-4 border-b">
            <button id="tab-pending" class="px-4 py-2 text-green-600 border-b-4 border-green-600 focus:outline-none">
              Pending
            </button>
            <button id="tab-completed" class="px-4 py-2 text-gray-600 hover:text-green-600 hover:border-green-600 focus:outline-none">
              Completed
            </button>
          </div>

          <div class="flex items-center justify-between w-full h-10">
            <div class="flex items-center w-full max-w-md">
              <input type="text" placeholder="Search order" class="w-64 px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-green-500" />
              <button class="w-12 p-2 text-white bg-green-500 rounded-r-md hover:bg-green-600 focus:outline-none">
                <iconify-icon icon="material-symbols:search" class="items-center p-1 text-xl align-middle"></iconify-icon>
              </button>
            </div>
            <!-- Order Reports Button -->
            <button class="p-2 bg-green-500 rounded-md hover:bg-gray-200 hover:text-white group">
              <iconify-icon icon="fa:download" class="px-1 pb-1 text-lg text-white align-middle group-hover:text-black hover:border-green-500"></iconify-icon>
              <span class="pr-1 text-sm text-white group-hover:text-black">Export Reports</span>
            </button>
          </div>
          <!-- Pending Orders Table -->
          <div id="pending-orders" class="block mt-6">
            <h2 class="mb-2 font-light text-gray-500">
              Number of Orders: <?php echo count($pendingOrders); ?>
            </h2>
            <div class="overflow-x-auto">
              <table class="w-full mt-4 bg-white border border-gray-200 table-auto">
                <thead>
                  <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-left ">Order ID</th>
                    <th class="px-4 py-2 text-left ">Product</th>
                    <th class="px-4 py-2 text-left ">Total Amount</th>
                    <th class="px-4 py-2 text-left">Retailer</th>
                    <th class="px-4 py-2 text-left ">Order Date</th>
                    <th class="px-4 py-2 text-left ">Address</th>
                    <th class="px-4 py-2 ">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pendingOrders as $order): ?>

                    <tr class="text-sm border-b-2 border-gray-100">
                      <!-- Order ID Column -->
                      <td class="px-4 py-2 text-gray-600">
                        <?php echo $order['order_id']; ?>
                      </td>
                      <!-- Product Column -->
                      <td class="flex items-center px-4 py-2 text-[12px] font-light">
                        <?php foreach ($order['details'] as $detail): ?>
                          <div class="flex items-center space-x-2">
                            <img src="" alt="Product" class="mr-2 rounded w-14 h-14">
                            <span class="font-medium"><?php echo htmlspecialchars($detail['product_name']); ?></span>
                          </div>
                        <?php endforeach; ?>
                      </td>

                      <!-- Total Amount Column -->
                      <td class="px-4 py-2 text-[12px] font-light">
                        ₱<?php echo number_format($order['total_amount'], 2); ?>
                      </td>

                      <!-- Retailer Column -->
                      <td class="px-4 py-2 text-[12px] font-light">
                        <?php echo htmlspecialchars($order['first_name'] . ' ' . $order['last_name']); ?>
                      </td>

                      <!-- Order Date Column -->
                      <td class="px-4 py-2 text-[12px] font-light">
                        <?php echo htmlspecialchars($order['date']); ?>
                      </td>

                      <!-- Address Column -->
                      <td class="px-4 py-2 text-[12px] font-light">
                        <?php echo htmlspecialchars($order['retailer_address']); ?>
                      </td>

                      <!-- Actions Column -->
                      <td class="px-4 py-2 text-[12px] font-light">
                        <div class="flex items-center p-2">
                          <button class="px-2 py-1 mr-2 text-white bg-green-500 rounded hover:bg-green-600"
                            data-order-id="<?php echo htmlspecialchars($order['order_id']); ?>"
                            onclick="approveOrder(this)">
                            Accept
                          </button>
                          <button class="px-2 py-1 text-white bg-red-500 rounded hover:bg-red-600"
                            data-order-id="<?php echo htmlspecialchars($order['order_id']); ?>"
                            onclick="rejectOrder(this)">
                            Reject
                          </button>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
  </main>
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


    function approveOrder(button) {
      var orderId = button.getAttribute('data-order-id');

      // Create a new XMLHttpRequest to call the PHP function
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "./accept_reject_order.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          var response = xhr.responseText.trim();
          if (response === 'success') {
            // Update the status on the UI or refresh the page
            alert("Order Approved!");
            window.location.reload(); // Refresh the page after approval
          } else {
            alert("Failed to approve order.");
          }
        }
      };

      // Send the request with the order_id
      xhr.send("order_id=" + orderId + "&action=approve");
    }

    function rejectOrder(button) {
      var orderId = button.getAttribute('data-order-id');

      // Create a new XMLHttpRequest to call the PHP function
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "./accept_reject_order.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          var response = xhr.responseText.trim();
          if (response === 'success') {
            // Update the status on the UI or refresh the page
            alert("Order Rejected!");
            window.location.reload(); // Refresh the page after rejection
          } else {
            alert("Failed to reject order.");
          }
        }
      };

      // Send the request with the order_id
      xhr.send("order_id=" + orderId + "&action=reject");
    }
  </script>
</body>

</html>