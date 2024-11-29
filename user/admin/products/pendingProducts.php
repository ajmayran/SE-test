<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="icon" href="../../../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../../../src/output.css">
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
    <title>Pending Products</title>
</head>
<style>
    body {
        font-family: 'Lexend', sans-serif;
    }
    .sidebar-menu .group a {
        border-top-left-radius: 10px;
        /* Added for all links */
        border-bottom-left-radius: 10px;
        /* Added for all links */
    }
    .sidebar-menu .group.active a {
        /* Target selected group */
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
    <div class="fixed top-0 left-0 z-50 w-64 h-full p-4 transition-transform sidebar-menu"
        style="background-color: #abebc6;">
        <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
            <img src="../../../resources/img/Pconnect Logo.png" alt="Logo" class="object-cover w-8 h-8">
            <span class="ml-3 text-lg font-bold">PConnect</span>
        </a>
        <ul class="mt-4">
            <li class="mb-1 group">
                <a href="../dashboard.php" class="flex items-center px-4 py-2 hover:bg-green-400 hover:text-gray-100">
                    <iconify-icon icon="mdi:home" class="mr-3 text-xl"></iconify-icon>
                    <span class="text-sm">Dashboard</span>
                </a>
            </li>
            <li class="mb-1 group active">
                <a href="#"
                    class="flex items-center py-2 px-4  hover:bg-green-300 hover:text-gray-100 rounded-md group-[.active]:text-white group-[.selected]:bg-green-400 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <iconify-icon icon="mdi:package-variant-closed" class="mr-3 text-xl"></iconify-icon>
                    <span class="text-sm">Products</span>
                    <iconify-icon icon="mdi:keyboard-arrow-right"
                        class="ml-auto group-[.selected]:rotate-90"></iconify-icon>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="./acceptedProducts.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Accepted
                            Products</a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Featured
                            Products</a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Pending
                            Products</a>
                    </li>
                    <li class="mb-4">
                        <a href="./rejectedProducts.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Rejected
                            Products</a>
                    </li>
                </ul>
            </li>
            <li class="mb-1 group">
                <a href="#"
                    class="flex items-center py-2 px-4  hover:bg-green-300 hover:text-gray-100 rounded-md group-[.active]:text-white group-[.selected]:bg-green-400 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <iconify-icon icon="tdesign:undertake-transaction" class="mr-3 text-xl"></iconify-icon>
                    <span class="text-sm">Transactions</span>
                    <iconify-icon icon="mdi:keyboard-arrow-right"
                        class="ml-auto group-[.selected]:rotate-90"></iconify-icon>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="../transactions/completedOrders.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Completed
                            order</a>
                    </li>
                    <li class="mb-4">
                        <a href="../transactions/cancelledOrders.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Cancelled
                            order</a>
                    </li>
                </ul>
            </li>
            <li class="mb-1 group">
                <a href="#"
                    class="flex items-center py-2 px-4  hover:bg-green-300 hover:text-gray-100 rounded-md group-[.active]:text-white group-[.selected]:bg-green-400 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <iconify-icon icon="mdi:users" class="mr-3 text-xl"></iconify-icon>
                    <span class="text-sm">Retailers</span>
                    <iconify-icon icon="mdi:keyboard-arrow-right"
                        class="ml-auto group-[.selected]:rotate-90"></iconify-icon>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="../retailers/pending.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Pending
                            Retailers</a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All
                            Retailers</a>
                    </li>
                    <li class="mb-4">
                        <a href="../retailers/restricted.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Restricted
                            Retailers</a>
                    </li>
                    <li class="mb-4">
                        <a href="../retailers/banned.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Banned
                            Retailers</a>
                    </li>
                </ul>
            </li>
            <li class="mb-1 group">
                <a href="#"
                    class="flex items-center py-2 px-4  hover:bg-green-300 hover:text-gray-100 rounded-md group-[.active]:text-white group-[.selected]:bg-green-400 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <iconify-icon icon="mdi:truck" class="mr-3 text-xl"></iconify-icon>
                    <span class="text-sm">Distributors</span>
                    <iconify-icon icon="mdi:keyboard-arrow-right"
                        class="ml-auto group-[.selected]:rotate-90"></iconify-icon>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="#"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Pending Distributor</a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All Distributor</a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Restricted</a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Banned</a>
                    </li>
                </ul>
            </li>
            <li class="mb-1 group">
                <a href="#"
                    class="flex items-center py-2 px-4 hover:bg-green-300 hover:text-gray-100 rounded-md group-[.active]:text-white group-[.selected]:bg-green-400 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <iconify-icon icon="bx:support" class="mr-3 text-xl"></iconify-icon>
                    <span class="text-sm">Support</span>
                    <iconify-icon icon="mdi:keyboard-arrow-right"
                        class="ml-auto group-[.selected]:rotate-90"></iconify-icon>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="#"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All
                            Ticket</a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Pending</a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Solved</a>
                    </li>
                </ul>
            </li>
            <li class="mt-20 mb-1 group">
                <a href="#"
                    class="flex items-center py-2 px-4 hover:bg-green-300 hover:text-gray-100 rounded-md group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
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
                    <a href="#" class="font-medium text-gray-400 hover:text-gray-600">Products</a>
                </li>
                <li class="mr-2 font-thin text-gray-400">|</li>
                <li class="mr-2 font-medium text-gray-600">Pending</li>
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
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Accepted Products Content -->
        <div class="p-6">
            <div class="mb-6 flex flex-row justify-between space-x-4">
                <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                    <p class="text-gray-600">All Products</p>
                    <h2 class="text-2xl font-bold text-green-700">68</h2>
                </div>
                <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                    <p class="text-gray-600">Featured Products</p>
                    <h2 class="text-2xl font-bold text-green-700">5</h2>
                </div>
                <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                    <p class="text-gray-600">Pending Request</p>
                    <h2 class="text-2xl font-bold text-green-700">20</h2>
                </div>
                <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                    <p class="text-gray-600">Rejected Products</p>
                    <h2 class="text-2xl font-bold text-green-700">6</h2>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <div class="flex justify-between items-center mb-4">
                    <div class="bg-green-600 text-white font-bold py-2 px-4 rounded">Pending Products</div>

                    <div class="flex space-x-2">
                        <button class="bg-green-500 hover:bg-green-700 text-white p-2 rounded"><iconify-icon icon="mdi:pencil" /></button>
                        <button class="bg-red-500 hover:bg-red-700 text-white p-2 rounded"><iconify-icon icon="mdi:delete" /></button>
                    </div>
                </div>
                <table id="productTable" class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-100 text-gray-600 text-left">
                             <th class="p-2">Product Code</th>
                             <th class="p-2">Product</th>
                             <th class="p-2">Distributor</th>
                             <th class="p-2">Price</th>
                             <th class="p-2">Date Issued</th>
                             <th class="p-2">Action</th>  
                        </tr>
                    </thead>
                    <tbody>
                       <!-- Data will be populated by DataTables --> 
                    </tbody>
                </table>

                <!-- Modal accept -->
                <div id="product-details-modal" class="hidden fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
                    <div class="bg-white p-6 rounded shadow-lg max-w-sm w-full">
                        <h2 class="text-xl font-bold mb-4">Product Details</h2>
                        <div class="flex items-center mb-4">
                            <img id="modal-product-image" src="" alt="Product Image" class="w-16 h-16 rounded mr-4">
                            <div>
                                <p><strong>Product Code:</strong> <span id="modal-product-code"></span></p>
                                <p><strong>Product Name:</strong> <span id="modal-product-name"></span></p>
                            </div>
                        </div>
                        <p><strong>Description:</strong> <span id="modal-product-description"></span></p>
                        <div class="flex justify-end mt-4">
                            <button id="cancel-modal" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">Cancel</button>
                            <button id="confirm-product" class="bg-green-500 text-white px-4 py-2 rounded">Confirm</button>
                        </div>
                    </div>
                </div>
                
                <!-- modal reject -->
                <div id="reject-modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
                    <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
                      <h2 class="text-xl font-bold mb-4">Reject Product</h2>
                      <p id="reject-modal-product-name" class="mb-4"></p>
                      <label for="reject-reason" class="block text-gray-700 mb-2">Reason for Rejection:</label>
                      <textarea id="reject-reason" class="w-full border rounded p-2 mb-4" rows="3" placeholder="Enter rejection reason..."></textarea>
                      <div class="flex justify-end space-x-4">
                        <button id="cancel-reject" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancel</button>
                        <button id="confirm-reject" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Confirm Reject</button>
                      </div>
                    </div>
                  </div>
  
            </div>
        </div>
    </main>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="../../../js/tailwind/dashboard.js"></script>
    <script>
       $(document).ready(function () {
    // Initialize DataTable
            $('#productTable').DataTable({
                data: [
                    [
                        'PRC001',
                        '<img src="../../../resources/img/Products/rtc-chicken-lumpia.png" alt="Product 1" class="w-8 h-8 inline-block mr-2"> RTC Chicken Lumpia',
                        'Magnolia',
                        '250.00',
                        '11/14/2024',
                        '<button class="approve-btn bg-green-500 text-white p-2 rounded hover:bg-green-600">Approve</button> <button class="bg-red-500 text-white p-2 rounded hover:bg-red-700">Reject</button>'
                    ],
                    [
                        'PRC002',
                        '<img src="../../../resources/img/Products/rtc-chicken-bbq.png" alt="Product 2" class="w-8 h-8 inline-block mr-2"> RTC Chicken BBQ',
                        'Timplados',
                        '120.50',
                        '11/15/2024',
                        '<button class="approve-btn bg-green-500 text-white p-2 rounded hover:bg-green-600">Approve</button> <button class="bg-red-500 text-white p-2 rounded hover:bg-red-700">Reject</button>'
                    ],
                ],
                columns: [
                    { title: "Product Code" },
                    { title: "Product" },
                    { title: "Distributor" },
                    { title: "Price" },
                    { title: "Date Approved" },
                    { title: "Action" }
                ]
            });

            // Modal and button setup
            const productModal = document.getElementById("product-details-modal");
            const modalProductCode = document.getElementById("modal-product-code");
            const modalProductName = document.getElementById("modal-product-name");
            const modalProductImage = document.getElementById("modal-product-image");
            const modalProductDescription = document.getElementById("modal-product-description");
            const confirmButton = document.getElementById("confirm-product");
            const cancelButton = document.getElementById("cancel-modal");

            // Open Modal and Populate Details
            $('#productTable').on('click', '.approve-btn', function () {
                const row = $(this).closest('tr');
                const productCode = row.find('td:eq(0)').text();
                const productName = row.find('td:eq(1)').text().trim();
                const productDistributor = row.find('td:eq(2)').text();
                const productDescription = `${productName} is a premium product from ${productDistributor}.`;

                // Extract image URL from the first image tag in the second column
                const imgTag = row.find('td:eq(1) img').attr('src');

                // Update modal content
                modalProductCode.textContent = productCode;
                modalProductName.textContent = productName;
                modalProductDescription.textContent = productDescription;

                // Set the product image in the modal
                modalProductImage.setAttribute('src', imgTag);

                productModal.classList.remove("hidden");
            });

            // Confirm Button Action
            confirmButton.addEventListener("click", () => {
                alert("Product Approved!");
                productModal.classList.add("hidden");
            });

            // Cancel Button Action
            cancelButton.addEventListener("click", () => {
                productModal.classList.add("hidden");
            });

            // Close Modal when clicking outside
            window.addEventListener("click", (event) => {
                if (event.target === productModal) {
                    productModal.classList.add("hidden");
                }
            });


            const rejectModal = document.getElementById('reject-modal');
            const rejectModalProductName = document.getElementById('reject-modal-product-name');
            const rejectReasonInput = document.getElementById('reject-reason');
            const confirmRejectButton = document.getElementById('confirm-reject');
            const cancelRejectButton = document.getElementById('cancel-reject');

            // Open Reject Modal
            document.querySelectorAll('.bg-red-500').forEach((button) => {
            button.addEventListener('click', (e) => {
                const row = e.target.closest('tr');
                const productName = row.children[1].textContent.trim();
                rejectModalProductName.textContent = `Are you sure you want to reject "${productName}"?`;
                rejectModal.classList.remove('hidden');
            });
            });

            // Confirm Reject Action
            confirmRejectButton.addEventListener('click', () => {
            const reason = rejectReasonInput.value.trim();
            if (!reason) {
                alert('Please provide a reason for rejection.');
                return;
            }
            alert(`Product Rejected! Reason: ${reason}`);
            rejectModal.classList.add('hidden');
            rejectReasonInput.value = ''; // Clear input
            });

            // Cancel Reject Action
            cancelRejectButton.addEventListener('click', () => {
            rejectModal.classList.add('hidden');
            rejectReasonInput.value = ''; // Clear input
            });

            // Close Modal when clicking outside
            window.addEventListener('click', (event) => {
            if (event.target === rejectModal) {
                rejectModal.classList.add('hidden');
                rejectReasonInput.value = ''; // Clear input
            }
            });
        });

    </script>
</body>
</html>