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

    .scroll-hide::-webkit-scrollbar {
      display: none;
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
        <main class="w-full p-8 overflow-y-auto max-h-3/4">
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