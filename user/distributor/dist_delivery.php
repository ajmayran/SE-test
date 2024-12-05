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
  </style>
</head>

<body class="bg-gray-100">
<?php include_once '../../includes/dist_side/header.php'; ?>
  <div class="flex">
    <?php include_once '../../includes/dist_side/sidebar.php'; ?>
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


  <?php include_once '../../includes/retailer_footer.php'; ?>
  <script src="../../js/tailwind/dist_delivery.js"></script>
</body>

</html>