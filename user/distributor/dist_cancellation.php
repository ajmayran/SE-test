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
        <a href="" class="p-1 rounded-lg hover:bg-gray-100"><iconify-icon icon="mdi:notifications" class="text-xl text-green-500"></iconify-icon></a>
        <a href="" class="p-1 rounded-lg hover:bg-gray-100"><iconify-icon icon="mdi:account" class="text-xl text-green-500"></iconify-icon></a>
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
        <li class="group active">
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
        <li class="group">
          <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_insights.php"><iconify-icon icon="gg:insights" class="ml-10 mr-1 text-xl text-green-500"></iconify-icon>
            <span class="ml-2 font-normal">Business Insights</span>
          </a>
        </li>
        <hr class="border-gray-300 shadow-sm" />
        <li class="group">
          <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_voucher.php"><iconify-icon icon="mdi:voucher" class="ml-10 mr-1 text-xl text-green-500"></iconify-icon>
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
      <h1 class="p-3 text-2xl font-semibold bg-green-300 rounded-t-md">Cancellation</h1>
      <div class="container mx-auto">
        <div class="p-4 bg-white rounded-b-lg shadow-md min-h-[600px]">
          <!-- Tabs -->
          <div class="flex justify-between mb-4 border-b">
            <div class="flex space-x-4">
              <button id="tab-cust-cancel" class="px-4 py-2 text-green-600 border-b-4 border-green-600 focus:outline-none">
                Retailer Cancellation
              </button>
              <button id="tab-my-cancel" class="px-4 py-2 text-gray-600 hover:text-green-600 hover:border-green-600 focus:outline-none">
                My Cancellation
              </button>
            </div>
            <button id="tab-records" class="px-4 py-2 text-gray-600 hover:text-green-600 hover:border-green-600 focus:outline-none" onclick="showRecords()">
              Records >
            </button>
          </div>
          <div class="flex items-center justify-between w-full h-10">
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

          <!-- Customer Cancel Table -->
          <div id="cust-cancel-orders" class="block mt-6">
            <h2 class="mb-2 font-light text-gray-500"> Cancelled Order: 2 </h2>
            <div class="overflow-x-auto">
              <table class="w-full table-auto">
                <thead>
                  <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-left">Order ID</th>
                    <th class="px-4 py-2 text-left">Amount</th>
                    <th class="px-4 py-2 text-left ">Delivery</th>
                    <th class="px-4 py-2 text-left ">Customer</th>
                    <th class="px-4 py-2 text-left ">Date</th>
                    <th class="px-4 py-2 text-left ">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-sm border-b-2 border-gray-100">
                    <td class="px-4 py-2 text-[12px] font-semibold">246000EVG4AXL</td>
                    <td class="px-4 py-2 text-[12px] font-light">₱2500.00</td>
                    <td class="px-4 py-2 text-[12px] font-light">Standard Free</td>
                    <td class="px-4 py-2 text-[12px] font-light">Kuku Paal</td>
                    <td class="px-4 py-2 text-[12px] font-light">September 30, 2024</td>
                    <td>
                      <button class="px-4 py-2 text-[12px] font-light text-blue-600 cursor-pointer hover:underline" data-order-id="246000EVG4AXL" onclick="toggleModal(true, pendingOrdersData[0])">Details</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="px-4 py-2 text-[12px] font-semibold">000911VGA2ZIA</td>
                    <td class="px-4 py-2 text-[12px] font-light">₱4000.00</td>
                    <td class="px-4 py-2 text-[12px] font-light">Standard Free</td>
                    <td class="px-4 py-2 text-[12px] font-light">Depo Ngal</td>
                    <td class="px-4 py-2 text-[12px] font-light">September 30, 2024</td>
                    <td>
                      <button class="px-4 py-2 text-[12px] font-light text-blue-600 cursor-pointer hover:underline" data-order-id="000911VGA2ZIA" onclick="toggleModal(true, pendingOrdersData[0])">Details</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- My Cancel Table -->
          <div id="my-cancel-orders" class="hidden mt-6">
            <h2 class="mb-2 font-light text-gray-500"> Cancelled Order: 1 </h2>
            <div class="overflow-x-auto">
              <table class="w-full table-auto">
                <thead>
                  <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-left">Order ID</th>
                    <th class="px-4 py-2 text-left">Amount</th>
                    <th class="px-4 py-2 text-left">Delivery</th>
                    <th class="px-4 py-2 text-left">Customer</th>
                    <th class="px-4 py-2 text-left">Date</th>
                    <th class="px-4 py-2 text-left">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="px-4 py-2 text-[12px] font-semibold">563829HJV3AK</td>
                    <td class="px-4 py-2 text-[12px] font-light">₱500.00</td>
                    <td class="px-4 py-2 text-[12px] font-light">Standard Free</td>
                    <td class="px-4 py-2 text-[12px] font-light">Anna Reyes</td>
                    <td class="px-4 py-2 text-[12px] font-light">September 29, 2024</td>
                    <td>
                      <button class="px-4 py-2 text-[12px] font-light text-blue-600 cursor-pointer hover:underline" data-order-id="563829HJV3AK" onclick="toggleModal(true, completedOrdersData[0])">Details</button>
                    </td>
                  </tr>
                </tbody>
              </table>
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
  <!-- Modal -->
  <div id="cancel-details-modal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50">
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
        <div class="flex justify-between mt-4 ">
          <div class="flex flex-col">
            <span>Subtotal: <span id="order-subtotal">₱0.00</span></span>
            <span>Voucher: <span id="order-voucher">--</span></span>
            <span>Discount: <span id="order-discount">--</span></span>
            <span>Total: <span id="order-total">₱0.00</span></span>
          </div>
          <div>
            <span class=""><strong>Reason for Cancellation</strong>:
              <p id="order-reason" class="mt-1 font-light"></p>
          </div>
          <div class="flex items-center space-x-4">
            <button class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-400">Verify</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Records Table -->
  <div id="records-table" class="hidden mt-1">
    <a href="./dist_cancellation.php"><iconify-icon icon="akar-icons:arrow-back-thick-fill" class="pb-2 text-3xl text-green-500 hover:text-green-400"></iconify-icon></a>
    <h2 class="p-3 text-2xl font-semibold text-white bg-green-300 rounded-t-md">Records</h2>
    <div class="p-4 bg-white rounded-b-lg shadow-md">
      <div class="overflow-x-auto">
        <table class="w-full table-auto">
          <thead>
            <tr class="bg-gray-100">
              <th class="px-4 py-2 text-left">Record ID</th>
              <th class="px-4 py-2 text-left">Type</th>
              <th class="px-4 py-2 text-left">Date</th>
              <th class="px-4 py-2 text-left">Status</th>
              <th class="px-4 py-2 text-left"></th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-sm border-b-2 border-gray-100">
              <td class="px-4 py-2 text-[12px] font-semibold">R001</td>
              <td class="px-4 py-2 text-[12px] font-light">Retailer Cancellation</td>
              <td class="px-4 py-2 text-[12px] font-light">September 30, 2024</td>
              <td class="px-4 py-2 text-[12px] font-light">Cancelled</td>
              <td>
                <button class="px-4 py-2 text-[12px] font-light text-blue-600 cursor-pointer hover:underline" onclick="toggleRecordModal(true)">View Details</button>
              </td>
            </tr>
            <tr>
              <td class="px-4 py-2 text-[12px] font-semibold">R002</td>
              <td class="px-4 py-2 text-[12px] font-light">My Cancellation</td>
              <td class="px-4 py-2 text-[12px] font-light">September 29, 2024</td>
              <td class="px-4 py-2 text-[12px] font-light">Cancelled</td>
              <td>
                <button class="px-4 py-2 text-[12px] font-light text-blue-600 cursor-pointer hover:underline" onclick="toggleRecordModal(true)">View Details</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script>
    const custTab = document.getElementById('tab-cust-cancel');
    const myTab = document.getElementById('tab-my-cancel');
    const pendingOrders = document.getElementById('cust-cancel-orders');
    const completedOrders = document.getElementById('my-cancel-orders');

    custTab.addEventListener('click', () => {
      pendingOrders.classList.remove('hidden');
      completedOrders.classList.add('hidden');
      custTab.classList.add('text-green-600', 'border-b-4', 'border-green-600');
      myTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
    });

    myTab.addEventListener('click', () => {
      completedOrders.classList.remove('hidden');
      pendingOrders.classList.add('hidden');
      myTab.classList.add('text-green-600', 'border-b-4', 'border-green-600');
      custTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
      custTab.classList.add('text-gray-600');
    });


    const pendingOrdersData = [{
        id: "246000EVG4AXL",
        products: [{
          name: "Magnolia Ready to Cook Cheesy Chicken Fingers",
          price: 250,
          qty: 10,
          image: "../../resources/img/Products/rtc-cheesy-chicken-fingers.png",
          reason: "Wrong order, this order is no longer needed"
        }, ],
        subtotal: 2500,
        voucher: "--",
        discount: "--",
        total: 2500,
      },

      {
        id: "000911VGA2ZIA",
        products: [{
          name: "Magnolia Ready to Cook Chicken Siomai",
          price: 200,
          qty: 20,
          image: "../../resources/img/Products/rtc-chicken-siomai.png",
          reason: "Sorry i bought already on the other shop"
        }, ],
        subtotal: 4000,
        voucher: "--",
        discount: "--",
        total: 4000,
      },
    ];

    const completedOrdersData = [{
      id: "563829HJV3AK",
      products: [{
        name: "Magnolia Ready to Cook Chicken Tocino",
        price: 250,
        qty: 10,
        image: "../../resources/img/Products/rtc-chicken-tocino.png",
        reason: "Suspicious of Fraudulent Activity"
      }, ],
      subtotal: 2500,
      voucher: "₱50.00",
      discount: "₱20.00",
      total: 2430,
    }, ];

    function toggleModal(show, orderData = null) {
      const modal = document.getElementById("cancel-details-modal");
      modal.classList.toggle("hidden", !show);

      if (orderData) {
        // Update modal content
        document.getElementById("order-id").textContent = orderData.id;

        const productsTable = document.getElementById("order-products");
        productsTable.innerHTML = ""; // Clear existing rows

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


        document.getElementById("order-subtotal").textContent = `₱${orderData.subtotal.toFixed(2)}`;
        document.getElementById("order-voucher").textContent = orderData.voucher;
        document.getElementById("order-discount").textContent = orderData.discount;
        document.getElementById("order-total").textContent = `₱${orderData.total.toFixed(2)}`;

        document.getElementById("order-reason").textContent = orderData.products[0].reason;
      }
    }

    document.querySelectorAll("[data-order-id]").forEach((button) => {
      button.addEventListener("click", (e) => {
        const orderId = e.target.getAttribute("data-order-id");
        const orderData = [...pendingOrdersData, ...completedOrdersData].find((order) => order.id === orderId);
        toggleModal(true, orderData);
      });
    });


    const mainContent = document.querySelector('main');
    const recordsTable = document.getElementById('records-table');

    // Store the original HTML of the main content
    const originalMainContentHTML = mainContent.innerHTML;

    // Function to show the records and swap the content
    function showRecords() {
      // Swap the content
      mainContent.innerHTML = recordsTable.innerHTML;
      recordsTable.classList.remove('hidden'); // Ensure records table is visible
    }

    // Back function to return to the main content
    backButton.addEventListener('click', () => {
      // Restore the original main content
      mainContent.innerHTML = originalMainContentHTML;
    });
  </script>
</body>

</html>