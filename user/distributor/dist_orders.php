<?php

$currentPage = basename($_SERVER['PHP_SELF']); 

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
    .sidebar-menu .group.active .icon {
      color: white;
    }
    .scroll-hide::-webkit-scrollbar {
      display: none;
    }
  </style>
</head>

<body class="bg-gray-100">
  <?php include_once '../../includes/dist_side/header.php'; ?>

  <div class="flex">
    <?php include_once '../../includes/dist_side/sidebar.php'; ?>

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
  <?php include_once '../../includes/retailer_footer.php'; ?>
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