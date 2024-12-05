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
              <div class="overflow-x-auto">
                <table class="w-full mt-4 bg-white table-auto">
                  <thead>
                    <tr class="bg-gray-200 border">
                      <th class="px-4 py-2 text-left">Order ID</th>
                      <th class="px-4 py-2 text-left">Product</th>
                      <th class="px-4 py-2 text-left">Total Amount</th>
                      <th class="px-4 py-2 text-left">Retailer</th>
                      <th class="px-4 py-2 text-left">Order Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($pendingOrders as $order): ?>
                      <tr
                        class="text-sm border-b-2 border-gray-200 cursor-pointer hover:bg-gray-50"
                        onclick="showOrderDetails(<?php echo htmlspecialchars(json_encode($order)); ?>)">
                        <td class="px-4 py-3 text-gray-600"><?php echo $order['order_id']; ?></td>
                        <td class="px-4 py-3 text-[12px] font-light"><?php echo htmlspecialchars($order['details'][0]['product_name']); ?>...</td>
                        <td class="px-4 py-3 text-[12px] font-light">₱<?php echo number_format($order['total_amount'], 2); ?></td>
                        <td class="px-4 py-3 text-[12px] font-light"><?php echo htmlspecialchars($order['first_name'] . ' ' . $order['last_name']); ?></td>
                        <td class="px-4 py-3 text-[12px] font-light"><?php echo htmlspecialchars($order['date']); ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
  </main>
  </div>
  <div id="order-details-modal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50">
    <div class="absolute inset-0 flex items-center justify-center">
      <div class="w-3/4 p-6 bg-white rounded-md shadow-lg">
        <div class="flex items-center justify-between">
          <h2 class="text-lg font-bold">Order ID: <span id="order-id">--</span></h2>
          <button class="text-blue-600 hover:underline" onclick="toggleModal(false)">Close</button>
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

        <!-- Payment Summary -->
        <div class="flex justify-between mt-4">
          <div class="flex flex-col">
            <span>Retailer Name: <span id="order-customer-name" class="text-sm font-light">--</span></span>
            <span>Delivery Address: <span id="order-customer-address" class="text-sm font-light">--</span></span>
            <span>Retailer Contact: <span id="order-customer-contact" class="text-sm font-light">--</span></span>
          </div>
          <div class="flex flex-col">
            <span>Subtotal: <span id="order-subtotal" class="text-sm font-light"></span></span>
            <span>Total: <span id="order-total" class="text-sm font-light"></span></span>
          </div>
          <div class="flex items-center space-x-4">
            <button
              class="px-4 py-2 text-white bg-red-500 rounded-md hover:bg-red-600"
              onclick="updateOrderStatus('reject')">
              Reject Order
            </button>
            <button
              class="px-4 py-2 text-white bg-green-500 rounded-md hover:bg-green-600"
              onclick="updateOrderStatus('approve')">
              Accept Order
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
  <?php include_once '../../includes/retailer_footer.php'; ?>
  <script src="../../js/tailwind/dist_order.js"></script>

</body>

</html>