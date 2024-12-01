<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Messages</title>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="icon" href="../../resources/img/Pconnect Logo.png">
  <link rel="stylesheet" href="../../src/output.css">
  <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
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

    .message-active {
      background-color: #d1fae5;
      /* Light green background */
      border-left: 4px solid #34d399;
      /* Green left border */
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
        <li class="group active">
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

    <main class="w-3/4 p-8 overflow-y-auto max-h-3/4">
      <h1 class="p-3 text-2xl font-semibold bg-green-300 rounded-t-md">Messages</h1>
      <div class="flex h-screen">
        <!-- Left Side: Message List -->
        <div class="flex flex-col w-1/3 bg-white border-r rounded-bl-lg">
          <!-- Search Bar -->
          <div class="p-4 border-b">
            <input type="text" placeholder="Search..." class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-green-300">
          </div>

          <!-- Message List -->
          <ul class="flex-1 overflow-y-auto">
            <!-- Message Thread 1 -->
            <li class="border-b-2 border-gray-200 cursor-pointer" onclick="selectMessage(1)">
              <div class="flex items-center p-4">
                <img src="../../resources/img/Avatar/avatar-5.jpg" alt="User  Avatar" class="w-10 h-10 mr-3 rounded-full">
                <div>
                  <p class="font-normal text-gray-800">Anthon Zuckerberg</p>
                  <p class="text-sm text-gray-500 truncate">Good morning, may I ask about...</p>
                </div>
                <span class="text-gray-400 text-[10px]">10:44 AM</span>
              </div>
            </li>

            <!-- Message Thread 2 -->
            <li class="border-b-2 border-gray-200 cursor-pointer" onclick="selectMessage(2)">
              <div class="flex items-center p-4">
                <img src="../../resources/img/Avatar/avatar-1.jpg" alt="User  Avatar" class="w-10 h-10 mr-3 rounded-full">
                <div>
                  <p class="font-normal text-gray-800">Elon Mask</p>
                  <p class="text-sm font-light text-gray-500 truncate">Thank you so much for the update.</p>
                </div>
                <span class="ml-auto text-[10px] text-gray-400">9:00 AM</span>
              </div>
            </li>
          </ul>
        </div>

        <!-- Right Side: Conversation View -->
        <div class="flex flex-col flex-1 rounded-br-lg bg-gray-50">
          <!-- Conversation Header -->
          <div id="conversation-header" class="p-4 bg-white border-b">
            <h2 class="text-lg font-normal">Anthon Zuckerberg</h2>
          </div>

          <!-- Convo -->
          <div id="conversation-content" class="flex-1 p-4 space-y-4 overflow-y-auto">
            <div class="flex justify-start">
              <img src="https://via.placeholder.com/40" alt="User  Avatar" class="w-10 h-10 mr-3 rounded-full">
              <div class="max-w-xs px-4 py-3 bg-gray-200 rounded-lg">
                <p class="text-sm text-gray-700">Good morning, may I ask about...</p>
              </div>
            </div>
            <div class="flex justify-end">
              <div class="max-w-xs px-4 py-3 text-white bg-green-500 rounded-lg">
                <p class="text-sm">Great news! Your order is now out for delivery and will arrive soon.</p>
              </div>
            </div>
          </div>

          <!-- Message Input -->
          <div class="flex items-center p-4 space-x-2 bg-white border-t rounded-br-lg">
            <label class="cursor-pointer">
              <iconify-icon icon="akar-icons:attach" class="text-xl text-green-500"></iconify-icon>
              <input type="file" class="hidden" accept="image/*">
            </label>
            <button id="open-camera" onclick="openCamera();">
              <iconify-icon icon="mdi:camera" class="pb-1 text-2xl text-green-500 align-middle"></iconify-icon>
            </button>

            <video id="video" width="640" height="480" autoplay style="display: none;"></video>
            <input type="text" placeholder="Type your message here" class="flex-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-green-300">
            <button type="submit"><iconify-icon icon="majesticons:send" class="pb-1 text-2xl text-green-500 align-middle"></iconify-icon></button>
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
  <script>
    function selectMessage(messageId) {
      const messageItems = document.querySelectorAll('main ul.flex-1 li');
      const conversationHeader = document.getElementById('conversation-header');
      const conversationContent = document.getElementById('conversation-content');


      // Clear active classes and set the active class to the selected message
      messageItems.forEach((item, index) => {
        item.classList.remove('message-active');
        item.classList.add('hover:bg-gray-100')
        if (index === messageId - 1) {
          item.classList.add('message-active');
          item.classList.remove('hover:bg-gray-100');
        }
      });

      // Set active class to the selected message
      messageItems[messageId - 1].classList.add('message-active');

      // Change conversation content based on selected message
      if (messageId === 1) {
        conversationHeader.innerHTML = `<div class="relative">
              <!-- Header with Name and Icon -->
              <div class="flex items-center justify-between">
                <h2 class="text-lg font-normal">Anthon Zuckerberg</h2>
                <!-- Icon -->
                <iconify-icon 
                  icon="heroicons-solid:exclamation-circle" 
                  class="text-2xl text-green-500 cursor-pointer" 
                  onclick="togglePopper(event)">
                </iconify-icon>
              </div>

              <!-- Popper Menu -->
              <div id="popper-menu" 
                  class="absolute right-0 z-50 hidden w-40 mt-2 bg-white border rounded-lg shadow-lg">
                <ul class="py-1 text-sm text-gray-700">
                  <li>
                    <button 
                      onclick="showReportModal()" 
                      class="block w-full px-4 py-2 text-left hover:bg-gray-100">
                      Report User
                    </button>
                  </li>
                  <li>
                    <button 
                      onclick="blockUser()" 
                      class="block w-full px-4 py-2 text-left hover:bg-gray-100">
                      Block User
                    </button>
                  </li>
                </ul>
              </div>

              <!-- Report Modal -->
              <div id="report-modal" 
                  class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
                <div class="p-6 bg-white rounded-lg shadow-lg w-96">
                  <h2 class="mb-4 text-xl font-semibold">Report User</h2>
                  <p class="mb-4 text-gray-600">Why are you reporting this user?</p>
                  <!-- Radio Button Options -->
                  <form id="report-form" class="space-y-4">
                    <div>
                      <label class="flex items-center space-x-2">
                        <input type="radio" name="reason" value="Spam" class="text-red-500 form-radio">
                        <span>Spam</span>
                      </label>
                    </div>
                    <div>
                      <label class="flex items-center space-x-2">
                        <input type="radio" name="reason" value="Inappropriate Behavior" class="text-red-500 form-radio">
                        <span>Inappropriate Behavior</span>
                      </label>
                    </div>
                    <div>
                      <label class="flex items-center space-x-2">
                        <input type="radio" name="reason" value="Harassment" class="text-red-500 form-radio">
                        <span>Harassment</span>
                      </label>
                    </div>
                    <div>
                      <label class="flex items-center space-x-2">
                        <input type="radio" name="reason" value="Fraudulent Activity" class="text-red-500 form-radio">
                        <span>Fraudulent Activity</span>
                      </label>
                    </div>
                    <div>
                      <label class="flex items-center space-x-2">
                        <input type="radio" name="reason" value="Other" class="text-red-500 form-radio">
                        <span>Other</span>
                      </label>
                    </div>
                    <!-- Text Area for Additional Details -->
                    <textarea 
                      id="report-details" 
                      class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-red-300"
                      rows="3" 
                      placeholder="Please provide more details (optional)">
                    </textarea>
                  </form>
                  <!-- Modal Actions -->
                  <div class="flex justify-end mt-4 space-x-2">
                    <button 
                      onclick="closeModal()" 
                      class="px-4 py-2 text-gray-700 bg-gray-300 rounded-lg">
                      Cancel
                    </button>
                    <button 
                      onclick="submitReport()" 
                      class="px-4 py-2 text-white bg-red-500 rounded-lg">
                      Submit
                    </button>
                  </div>
                </div>
              </div>
            </div>
                `;
        conversationContent.innerHTML = `
              <div class="flex justify-start">
                <img src="../../resources/img/avatar/avatar-5.jpg" alt="User   Avatar" class="w-10 h-10 mr-3 rounded-full">
                <div class="max-w-xs px-4 py-3 bg-gray-200 rounded-lg">
                  <p class="text-sm text-gray-700">Good morning, may I ask about...</p>
                </div>
              </div>
              <div class="flex justify-center">
                  <p class="text-[10px] text-gray-600 font-light">Friday 10:50 AM</p>
              </div>
              <div class="flex justify-end">
                <div class="max-w-xs px-4 py-3 text-white bg-green-500 rounded-lg">
                  <p class="text-sm">Great news! Your order is now out for delivery and will arrive soon.</p>
                </div>
              </div>
            `;
      } else if (messageId === 2) {
        conversationHeader.innerHTML = `<div class="relative">
              <!-- Header with Name and Icon -->
              <div class="flex items-center justify-between">
                <h2 class="text-lg font-normal">Elon Mask</h2>
                <!-- Icon -->
                <iconify-icon 
                  icon="heroicons-solid:exclamation-circle" 
                  class="text-2xl text-green-500 cursor-pointer" 
                  onclick="togglePopper(event)">
                </iconify-icon>
              </div>

              <!-- Popper Menu -->
              <div id="popper-menu" 
                  class="absolute right-0 z-50 hidden w-40 mt-2 bg-white border rounded-lg shadow-lg">
                <ul class="py-1 text-sm text-gray-700">
                  <li>
                    <button 
                      onclick="showReportModal()" 
                      class="block w-full px-4 py-2 text-left hover:bg-gray-100">
                      Report User
                    </button>
                  </li>
                  <li>
                    <button 
                      onclick="blockUser()" 
                      class="block w-full px-4 py-2 text-left hover:bg-gray-100">
                      Block User
                    </button>
                  </li>
                </ul>
              </div>

              <!-- Report Modal -->
              <div id="report-modal" 
                  class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
                <div class="p-6 bg-white rounded-lg shadow-lg w-96">
                  <h2 class="mb-4 text-xl font-semibold">Report User</h2>
                  <p class="mb-4 text-gray-600">Why are you reporting this user?</p>
                  <!-- Radio Button Options -->
                  <form id="report-form" class="space-y-4">
                    <div>
                      <label class="flex items-center space-x-2">
                        <input type="radio" name="reason" value="Spam" class="text-red-500 form-radio">
                        <span>Spam</span>
                      </label>
                    </div>
                    <div>
                      <label class="flex items-center space-x-2">
                        <input type="radio" name="reason" value="Inappropriate Behavior" class="text-red-500 form-radio">
                        <span>Inappropriate Behavior</span>
                      </label>
                    </div>
                    <div>
                      <label class="flex items-center space-x-2">
                        <input type="radio" name="reason" value="Harassment" class="text-red-500 form-radio">
                        <span>Harassment</span>
                      </label>
                    </div>
                    <div>
                      <label class="flex items-center space-x-2">
                        <input type="radio" name="reason" value="Fraudulent Activity" class="text-red-500 form-radio">
                        <span>Fraudulent Activity</span>
                      </label>
                    </div>
                    <div>
                      <label class="flex items-center space-x-2">
                        <input type="radio" name="reason" value="Other" class="text-red-500 form-radio">
                        <span>Other</span>
                      </label>
                    </div>
                    <!-- Text Area for Additional Details -->
                    <textarea 
                      id="report-details" 
                      class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-red-300"
                      rows="3" 
                      placeholder="Please provide more details (optional)">
                    </textarea>
                  </form>
                  <!-- Modal Actions -->
                  <div class="flex justify-end mt-4 space-x-2">
                    <button 
                      onclick="closeModal()" 
                      class="px-4 py-2 text-gray-700 bg-gray-300 rounded-lg">
                      Cancel
                    </button>
                    <button 
                      onclick="submitReport()" 
                      class="px-4 py-2 text-white bg-red-500 rounded-lg">
                      Submit
                    </button>
                  </div>
                </div>
              </div>
            </div>
                `;
        conversationContent.innerHTML = `
              <div class="flex justify-start">
                <img src="../../resources/img/avatar/avatar-1.jpg" alt="User   Avatar" class="w-10 h-10 mr-3 rounded-full">
                <div class="max-w-xs px-4 py-3 bg-gray-200 rounded-lg">
                  <p class="text-sm text-gray-700">Thank you so much for the update.</p>
                </div>
              </div>
            <div class="flex justify-center">
                  <p class="text-[10px] text-gray-600 font-light">Friday 9:12 AM</p>
              </div>
              <div class="flex justify-end">
                <div class="max-w-xs px-4 py-3 text-white bg-green-500 rounded-lg">
                  <p class="text-sm">You're welcome! Let me know if you need anything else.</p>
                </div>
              </div>
            `;
      }
    }

    // Automatically select the first message on page load
    window.onload = function() {
      selectMessage(1);
    }



    async function openCamera() {
      const video = document.getElementById('video');

      if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        try {
          const stream = await navigator.mediaDevices.getUserMedia({
            video: true
          });
          video.srcObject = stream;
          video.style.display = 'block'; // Show the video element
        } catch (error) {
          console.error("Error accessing the camera: ", error);
          alert("An error occurred: " + error.message);
        }
      } else {
        alert("Camera not supported in this browser.");
      }
    }

    // Toggle the visibility of the popper menu
    function togglePopper(event) {
      const popperMenu = document.getElementById('popper-menu');
      popperMenu.classList.toggle('hidden');
      event.stopPropagation(); // Prevent event bubbling

      // Close the popper when clicking outside
      document.addEventListener('click', (e) => {
        if (!popperMenu.contains(e.target) && e.target !== event.target) {
          popperMenu.classList.add('hidden');
        }
      }, {
        once: true
      });
    }

    // Show the report modal
    function showReportModal() {
      const modal = document.getElementById('report-modal');
      modal.classList.remove('hidden');
    }

    // Close the modal
    function closeModal() {
      const modal = document.getElementById('report-modal');
      modal.classList.add('hidden');
    }

    // Submit the report
    function submitReport() {
      // Get the selected reason
      const reason = document.querySelector('input[name="reason"]:checked');
      const details = document.getElementById('report-details').value.trim();

      if (!reason) {
        alert('Please select a reason for reporting.');
        return;
      }

      // Prepare report data
      const reportData = {
        reason: reason.value,
        details: details || 'No additional details provided.',
      };

      // Simulate sending the report (replace with real API logic)
      console.log('Report submitted:', reportData);
      alert('Thank you for your report.');

      closeModal(); // Close the modal
    }

    // Placeholder for block user functionality
    function blockUser() {
      alert('User has been blocked.');
    }
  </script>
</body>

</html>