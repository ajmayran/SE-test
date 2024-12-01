<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../../src/output.css">
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../src/user_dash.css">
    <title>Settings</title>
</head>
<style>
    body {
    font-family: 'Lexend', sans-serif;
    }
    .sidebar-menu .group.active a {
        /* Active state */
        background-color: #f9fafb; 
        color: #1f2937; 
        position: relative;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }
    .sidebar-menu .group.active a::after {
        content: '';
        position: absolute;
        right: -16px; 
        top: 0;
        bottom: 0;
        width: 16px;
        background-color: #f9fafb; 
        z-index: 10;
        
    }
</style>
<body class="text-gray-800">
    
    <!-- Sidebar -->
    <div class="fixed top-0 left-0 z-50 w-64 h-full p-4 transition-transform sidebar-menu" style="background-color: #abebc6;">
        <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
            <img src="../../resources/img/Pconnect Logo.png" alt="Logo" class="object-cover w-8 h-8">
            <span class="ml-3 text-lg font-bold">PConnect</span>
        </a>
        <ul class="mt-4">
            <li class="mb-1 group">
                <a href="./dashboard.php" class="flex items-center px-4 py-2 hover:bg-green-400 hover:text-gray-100">
                    <iconify-icon icon="mdi:home" class="mr-3 text-xl"></iconify-icon> 
                    <span class="text-sm">Dashboard</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="#" class="flex items-center py-2 px-4  hover:bg-green-300 hover:text-gray-100 rounded-md group-[.active]:text-white group-[.selected]:bg-green-400 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <iconify-icon icon="mdi:package-variant-closed" class="mr-3 text-xl"></iconify-icon> 
                    <span class="text-sm">Products</span>
                    <iconify-icon icon="mdi:keyboard-arrow-right" class="ml-auto group-[.selected]:rotate-90"></iconify-icon>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="./products/acceptedProducts.php" class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Accepted Products</a>
                    </li>
                    <li class="mb-4">
                        <a href="./products/pendingProducts.php" class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Pending Products</a>
                    </li> 
                    <li class="mb-4">
                        <a href="./products/rejectedProducts.php" class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Rejected Products</a>
                    </li> 
                </ul>
            </li>
            <li class="mb-1 group">
                <a href="#" class="flex items-center py-2 px-4  hover:bg-green-300 hover:text-gray-100 rounded-md group-[.active]:text-white group-[.selected]:bg-green-400 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <iconify-icon icon="tdesign:undertake-transaction" class="mr-3 text-xl"></iconify-icon> 
                    <span class="text-sm">Transactions</span>
                    <iconify-icon icon="mdi:keyboard-arrow-right" class="ml-auto group-[.selected]:rotate-90"></iconify-icon>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="./transactions/completedOrders.php" class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Completed order</a>
                    </li> 
                    <li class="mb-4">
                        <a href="./transactions/CancelledOrders.php" class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Cancelled order</a>
                    </li> 
                </ul>
            </li>
            <li class="mb-1 group">
                <a href="#" class="flex items-center py-2 px-4  hover:bg-green-300 hover:text-gray-100 rounded-md group-[.active]:text-white group-[.selected]:bg-green-400 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <iconify-icon icon="mdi:users" class="mr-3 text-xl"></iconify-icon>
                    <span class="text-sm">Retailers</span>
                    <iconify-icon icon="mdi:keyboard-arrow-right" class="ml-auto group-[.selected]:rotate-90"></iconify-icon>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="./retailers/pending.php" class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Pending Retailers</a>
                    </li> 
                    <li class="mb-4">
                        <a href="./retailers/activeRetailers.php" class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Active Retailers</a>
                    </li> 
                    <li class="mb-4">
                        <a href="./retailers/restricted.php" class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Restricted Retailers</a>
                    </li> 
                    <li class="mb-4">
                        <a href="./retailers/banned.php" class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Banned Retailers</a>
                    </li> 
                </ul>
            </li>
            <li class="mb-1 group">
                <a href="#" class="flex items-center py-2 px-4  hover:bg-green-300 hover:text-gray-100 rounded-md group-[.active]:text-white group-[.selected]:bg-green-400 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <iconify-icon icon="mdi:truck" class="mr-3 text-xl"></iconify-icon>
                    <span class="text-sm">Distributors</span>
                    <iconify-icon icon="mdi:keyboard-arrow-right" class="ml-auto group-[.selected]:rotate-90"></iconify-icon>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="./distributors/pendingDist.php" class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Pending Distributor</a>
                    </li> 
                    <li class="mb-4">
                        <a href="./distributors/activeDist.php" class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Active Distributor</a>
                    </li> 
                    <li class="mb-4">
                        <a href="./distributors/restrictedDist.php" class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Restricted</a>
                    </li> 
                    <li class="mb-4">
                        <a href="./distributors/bannedDist.php" class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Banned</a>
                    </li> 
                </ul>
            </li>
            <li class="mb-1 group">
                <a href="#" class="flex items-center py-2 px-4 hover:bg-green-300 hover:text-gray-100 rounded-md group-[.active]:text-white group-[.selected]:bg-green-400 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <iconify-icon icon="bx:support" class="mr-3 text-xl"></iconify-icon>
                    <span class="text-sm">Support</span>
                    <iconify-icon icon="mdi:keyboard-arrow-right" class="ml-auto group-[.selected]:rotate-90"></iconify-icon>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="./support/tickets.php" class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Tickets</a>
                    </li> 
                    <li class="mb-4">
                        <a href="./support/resolved.php" class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Resolved</a>
                    </li>
                </ul>
            </li>
            <li class="mt-20 mb-1 group">
                <a href="#" class="flex items-center py-2 px-4 hover:bg-green-300 hover:text-gray-100 rounded-md group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <iconify-icon icon="mdi:settings" class="mr-3 text-xl"></iconify-icon>
                    <span class="text-sm">Settings</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="fixed top-0 left-0 z-40 w-full h-full bg-black/50 md:hidden sidebar-overlay"></div>
    
    <!-- Main -->
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
        <!-- Topbar -->
        <div class="sticky top-0 left-0 z-30 flex items-center px-6 py-2 bg-white shadow-md shadow-black/5">
            <button type="button" class="text-lg text-gray-600 sidebar-toggle">
                <i class="ri-menu-line"></i>
            </button>
            <ul class="flex items-center ml-4 text-sm">
                <li class="mr-2">
                    <a href="#" class="font-medium text-gray-400 hover:text-gray-600">Admin</a>
                </li>
                <li class="mr-2 font-thin text-gray-400">|</li>
                <li class="mr-2 font-medium text-gray-600">Profile</li>
            </ul>
            <ul class="flex items-center ml-auto">
                <li class="mr-1 dropdown">
                    <button type="button" class="flex items-center justify-center w-8 h-8 text-gray-400 rounded dropdown-toggle hover:bg-gray-50 hover:text-gray-600">
                        <iconify-icon icon="mdi:search" class="text-xl"></iconify-icon>
                    </button>
                    <div class="z-30 hidden w-full max-w-xs bg-white border border-gray-100 rounded-md shadow-md dropdown-menu shadow-black/5">
                        <form action="" class="p-4 border-b border-b-gray-100">
                            <div class="relative w-full">
                                <input type="text" class="w-full py-2 pl-10 pr-4 text-sm border border-gray-100 rounded-md outline-none bg-gray-50 focus:border-blue-500" placeholder="Search...">
                                <i class="absolute text-gray-400 -translate-y-1/2 ri-search-line top-1/2 left-4"></i>
                            </div>
                        </form>
                        <div class="mt-3 mb-2">
                            <div class="text-[13px] font-medium text-gray-400 ml-4 mb-2">Recently</div>
                            <ul class="overflow-y-auto max-h-64">
                                <li>
                                    <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-50 group">
                                        <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 align-middle rounded">
                                        <div class="ml-2">
                                            <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Seach</div>
                                            <div class="text-[11px] truncate text-gray-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam placeat nobis natus ab quaerat, officia, soluta culpa veniam, ut architecto porro magni iure totam minus id explicabo illum nihil. Minus.</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-50 group">
                                        <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 align-middle rounded">
                                        <div class="ml-2">
                                            <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Search</div>
                                            <div class="text-[11px] truncate text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil consequuntur quas repudiandae qui fuga eligendi voluptas sequi culpa distinctio consectetur delectus at hic laborum et, vitae id in labore tempore.</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-50 group">
                                        <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 align-middle rounded">
                                        <div class="ml-2">
                                            <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Search</div>
                                            <div class="text-[11px] truncate text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut qui magni hic deserunt, cum inventore fuga voluptate iusto possimus ipsa quas neque voluptatem non vitae ullam quaerat aliquid magnam corporis.</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <button type="button" class="flex items-center justify-center w-8 h-8 text-gray-400 rounded dropdown-toggle hover:bg-gray-50 hover:text-gray-600">
                        <iconify-icon icon="mdi:message-bubble" class="text-lg"></iconify-icon>
                    </button>
                    <div class="z-30 hidden w-full max-w-xs bg-white border border-gray-100 rounded-md shadow-md dropdown-menu shadow-black/5">
                       <h4 class="p-2 font-medium">Messages</h4>
                        <div class="my-2"> 
                            <ul class="overflow-y-auto max-h-64" data-tab-for="notification" data-page="messages">
                                <li>
                                    <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-50 group">
                                        <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 align-middle rounded">
                                        <div class="ml-2">
                                            <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Ashly Rose</div>
                                            <div class="text-[11px] text-gray-400">Hello there!</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-50 group">
                                        <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 align-middle rounded">
                                        <div class="ml-2">
                                            <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Cristel Jane</div>
                                            <div class="text-[11px] text-gray-400">Hello there!</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <button type="button" class="flex items-center justify-center w-8 h-8 text-gray-400 rounded dropdown-toggle hover:bg-gray-50 hover:text-gray-600">
                        <iconify-icon icon="mdi:notifications" class="text-lg"></iconify-icon>
                    </button>
                    <div class="z-30 hidden w-full max-w-xs bg-white border border-gray-100 rounded-md shadow-md dropdown-menu shadow-black/5">
                        <h4 class="p-2 font-medium">Notifications</h4>
                        <div class="my-2">
                            <ul class="overflow-y-auto max-h-64" data-tab-for="notification" data-page="notifications">
                                <li>
                                    <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-50 group">
                                        <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 align-middle rounded">
                                        <div class="ml-2">
                                            <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Request Access</div>
                                            <div class="text-[11px] text-gray-400">from a user</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-50 group">
                                        <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 align-middle rounded">
                                        <div class="ml-2">
                                            <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Request Access</div>
                                            <div class="text-[11px] text-gray-400">from a user</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>                      
                        </div>
                    </div>
                </li>
                <li class="ml-3 dropdown">
                    <button type="button" class="flex items-center dropdown-toggle">
                        <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 align-middle rounded"> <span class="ml-2 font-light text-[10px]">Emmanuel John</span>
                    </button>
                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <a href="../admin/adminprofile.php" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                        </li>
                        <li>
                        <a href="../admin/settings.php" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

<body>

 
  <div class="flex h-screen container mx-auto m-10 gap-2">
    <div class="w-1/4 pt-5 border shadow-md h-full">
      <h2 class="text-xl font-bold mb-4 p-4 text-center">Account</h2>
        <ul class="tab-list space-y text-center">
            <li class="tab-item cursor-pointer hover:bg-gray-200 p-2">Profile</li>
            <li class="tab-item cursor-pointer hover:bg-gray-200 p-2">Change Password</li>
            <li class="tab-item cursor-pointer hover:bg-gray-200 p-2" >Notifications</li>
        </ul>
    </div>
    <div class="w-3/4 p-4 pt-5 border shadow-md">
        <div class="tab-content">

            <div class="tab-pane">
            <div class="">
            <h1 class="text-2xl font-bold mb-6">Manage Profile</h1>

                <div class="mt-6 flex justify-center">
                <div class="flex flex-col items-center">
                    <img class="h-24 w-24 rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture">
                    <label for="imageUpload" class="mt-4 px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-medium rounded-md cursor-pointer">
                    Select Image
                    </label>
                    <input type="file" id="imageUpload" accept="image/*" style="display: none;" onchange="updateImageDisplay(this)">
                </div>
                </div>
                <div>
                    <form>
                        <div class="grid grid-cols-1 gap-4 ">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Username</label>
                                <input type="text" id="username" name="username" value="EmmanuelJohn69" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-full" disabled>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Emmanuel John</label>
                                <input type="text" id="first_name" name="first_name" value="Michael" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 w-full">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Middle Name</label>
                                <input type="text" id="middle_name" name="middle_name" placeholder="(Optional)" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-greeen-500 focus:border-green-500 w-full">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Last Name</label>
                                <input type="text" id="last_name" name="last_name" value="Nunez" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 w-full">
                            </div>


  
                        </div>

                        <div class="mt-6 flex justify-center">
                            <button type="submit" class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-medium rounded-md">Save</button>
                        </div>
                    </form>
                </div>
            </div>  
            </div>

            <div class="tab-pane hidden">
            <?php
              require_once '../../includes/retailer_password.php';
            ?>  
            </div>
            
            <div class="tab-pane hidden" >
            <div class="container mx-auto px-4 py-8">
                <h2 class="text-2xl font-bold mb-4">Notifications</h2>

                <div class="bg-white rounded shadow p-4 mb-4">
                    <div class="flex items-center mb-2">
                        <img src="../../resources/img/avatar.png.jpeg" alt="Order Completed" class="w-12 h-12 mr-4 rounded-full">
                        <div>
                        <h3 class="text-lg font-bold">Request Acces From User</h3>
                        <p></p>
                        <p class="text-gray-500">10/01/2024 09:20</p>
                        </div>
                    </div>
                    </div>

                    <div class="bg-white rounded shadow p-4">
                    <div class="flex items-center mb-2">
                        <img src="../../resources/img/avatar.png.jpeg" alt="Welcome" class="w-12 h-12 mr-4 rounded-full">
                        <div>
                        <h3 class="text-lg font-bold">Request Acces From User</h3>
                        <p></p>
                        <p class="text-gray-500">09/025/2024 07:25</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>          

        </div>
    </div>
  </div>

</body>
</html>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const tabItems = document.querySelectorAll('.tab-item');
  const tabPanes = document.querySelectorAll('.tab-pane');
  const queryParams = new URLSearchParams(window.location.search);
  const activeTab = queryParams.get('tab'); // Get 'tab' parameter from the URL

  // Default behavior: Set the first tab as active
  let activeIndex = 0;

  // If there's a tab parameter, find the matching tab and set it as active
  if (activeTab) {
    tabItems.forEach((item, index) => {
      if (item.textContent.trim().toLowerCase() === activeTab.toLowerCase()) {
        activeIndex = index;
      }
    });
  }

  // Activate the determined tab
  tabItems.forEach(item => item.classList.remove('active'));
  tabPanes.forEach(pane => pane.classList.add('hidden'));

  tabItems[activeIndex].classList.add('active');
  tabPanes[activeIndex].classList.remove('hidden');
});
const tabItems = document.querySelectorAll('.tab-item');
const tabPanes = document.querySelectorAll('.tab-pane');

// Set the first tab as active by default
tabItems[0].classList.add('active');
tabPanes[0].classList.remove('hidden');

tabItems.forEach((item, index) => {
  item.addEventListener('click', () => {
    tabItems.forEach(item => item.classList.remove('active'));
    tabPanes.forEach(pane => pane.classList.add('hidden'));

    item.classList.add('active');
    tabPanes[index].classList.remove('hidden');
  });
});
</script>  
    </main>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../../js/tailwind/dashboard.js"></script>
</body>
</html>