<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="icon" href="../../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../../../src/output.css">
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
    <title>Completed Orders</title>
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
    
    <!-- Sidebar -->
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
            <li class="mb-1 group">
                <a href="#"
                    class="flex items-center py-2 px-4  hover:bg-green-300 hover:text-gray-100 rounded-md group-[.active]:text-white group-[.selected]:bg-green-400 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <iconify-icon icon="mdi:package-variant-closed" class="mr-3 text-xl"></iconify-icon>
                    <span class="text-sm">Products</span>
                    <iconify-icon icon="mdi:keyboard-arrow-right"
                        class="ml-auto group-[.selected]:rotate-90"></iconify-icon>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="../products/acceptedProducts.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Accepted
                            Products</a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Featured
                            Products</a>
                    </li>
                    <li class="mb-4">
                        <a href="../products/pendingProducts.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Pending
                            Products</a>
                    </li>
                    <li class="mb-4">
                        <a href="../products/rejectedProducts.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Rejected
                            Products</a>
                    </li>
                </ul>
            </li>
            <li class="mb-1 group active">
                <a href="#" id="active-link"
                    class="flex items-center py-2 px-4  hover:bg-green-300 hover:text-gray-100 rounded-md group-[.active]:text-white group-[.selected]:bg-green-400 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <iconify-icon icon="tdesign:undertake-transaction" class="mr-3 text-xl"></iconify-icon>
                    <span class="text-sm">Transactions</span>
                    <iconify-icon icon="mdi:keyboard-arrow-right"
                        class="ml-auto group-[.selected]:rotate-90"></iconify-icon>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="#"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Completed
                            order</a>
                    </li>
                    <li class="mb-4">
                        <a href="cancelledOrders.php"
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
                    <a href="#" class="font-medium text-gray-400 hover:text-gray-600">Transactions</a>
                </li>
                <li class="mr-2 font-thin text-gray-400">|</li>
                <li class="mr-2 font-medium text-gray-600">Completed</li>
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

        <!-- Completed orders Content -->
        <div class="p-6">
            <div class="mb-6 flex flex-row justify-between space-x-4">
                <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                    <p class="text-gray-600">All Transactions</p>
                    <h2 class="text-2xl font-bold text-green-700">12,689</h2>
                </div>
                <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                    <p class="text-gray-600">Successful Transactions</p>
                    <h2 class="text-2xl font-bold text-green-700">10,102</h2>
                </div>
                <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                    <p class="text-gray-600">Pending Transactions</p>
                    <h2 class="text-2xl font-bold text-green-700">2,960</h2>
                </div>
                <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                    <p class="text-gray-600">Failed Transactions</p>
                    <h2 class="text-2xl font-bold text-green-700">920</h2>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <div class="mb-6 flex flex-row justify-between space-x-4">
                    <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                        <p class="text-2xl text-gray-600">Jacob Traiding</p>
                        
                        
                        <h2 class="text-1xl font-bold text-green-700">Date Added: </h2>
                        <h3 class="text-1xl font-bold text-green-700">12,689</h3>
                        <button class="bg-green-500 text-white p-1 mt-2 rounded hover:bg-green-700">Show all</button>
                        
                    </div>
                    <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                        <p class="text-gray-600">Successful Transactions</p>
                        <h2 class="text-2xl font-bold text-green-700">10,102</h2>
                    </div>
                    <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                        <p class="text-gray-600">Pending Transactions</p>
                        <h2 class="text-2xl font-bold text-green-700">2,960</h2>
                    </div>
                    <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                        <p class="text-gray-600">Failed Transactions</p>
                        <h2 class="text-2xl font-bold text-green-700">920</h2>
                    </div>
                </div>

                <div class="flex justify-between items-center mb-4">
                    <div class="bg-green-600 text-white font-bold py-2 px-4 rounded">
                        Distributors
                    </div>
                </div>
                <div class="overflow-x-auto"> </div>
                <table id="distTable" class="w-full table-auto"> <!--- Added id to the table --->
                    <thead>
                        <tr class="bg-gray-100 text-gray-600 text-left">
                             <th class="p-2">ID</th>
                             <th class="p-2">Distributor</th>
                             <th class="p-2">Date Approved</th>
                             <th class="p-2">Action</th>  
                        </tr>
                    </thead>
                    <tbody>
                       <!-- Data will be populated by DataTables --> 
                    </tbody>
                </table>
            </div>
        </div>

        <div class="p-6">
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <div class="flex justify-between items-center mb-4">
                    <div class="bg-green-600 text-white font-bold py-2 px-4 rounded">
                        Completed Orders
                    </div>
                </div>
                <table id="orderTable" class="w-full table-auto"> <!--- Added id to the table --->
                    <thead>
                        <tr class="bg-gray-100 text-gray-600 text-left">
                             <th class="p-2">Order ID</th>
                             <th class="p-2">Retailer ID</th>
                             <th class="p-2">Retailer Name</th>
                             <th class="p-2">Distributor</th>
                             <th class="p-2">Date</th> 
                        </tr>
                    </thead>
                    <tbody>
                       <!-- Data will be populated by DataTables --> 
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="../../../js/tailwind/dashboard.js"></script>
    <script>
        $(document).ready( function () {
            $('#distTable').DataTable({  
                data: [ 
                    ['dist001', '<img src="../../../resources/img/distributors/glenmark.png" alt="distributor 1" class="w-12 h-12 inline-block mr-2"> New Horizon Distribution Corporation', '11/14/2024', '<button class="bg-green-500 text-white p-2 rounded hover:bg-green-700">Show all</button>'],
                    ['dist002', '<img src="../../../resources/img/distributors/jacob.png" alt="distributor 2" class="w-12 h-12 inline-block mr-2"> Jacob Trading', '11/15/2024', '<button class="bg-green-500 text-white p-2 rounded hover:bg-green-700">Show all</button>'],
                    ['dist003', '<img src="../../../resources/img/distributors/primus.png" alt="distributor 3" class="w-12 h-12 inline-block mr-2"> Primus', '11/15/2024', '<button class="bg-green-500 text-white p-2 rounded hover:bg-green-700">Show all</button>']
                    
                ],
                columns: [  
                    { title: "ID" },
                    { title: "Distributor" },         
                    { title: "Date Approved" },
                    { title: "Action" }            
                ]
            });

            $('#orderTable').DataTable({  
                data: [ 
                    ['order001', 'user001', 'Jazzer Onggoy', 'Jacob Trading' , '11/14/2024', 'Completed'],
                    ['order002', 'user007', 'Rudeee Abao', 'Primus' , '11/15/2024', 'Completed'],
                    ['order001', 'user001', 'Kyluzz Wiffer', 'Primus' , '11/14/2024', 'Completed'],
                    ['order002', 'user007', 'Therty Carroz', 'New Horizon Distribution Corporation' , '11/15/2024', 'Completed'],
                    ['order001', 'user001', 'Daniba SK', 'Jacob Trading' , '11/14/2024', 'Completed'],
                    ['order002', 'user007', 'No sleep AJ', 'New Horizon Distribution Corporation' , '11/15/2024', 'Completed'],
                    ['order001', 'user001', 'Jazzer Onggoy', 'Jacob Trading' , '11/14/2024', 'Completed'],
                    ['order002', 'user007', 'No sleep AJ', 'New Horizon Distribution Corporation' , '11/15/2024', 'Completed'],
                    ['order001', 'user001', 'Jazzer Onggoy', 'Primus' , '11/14/2024', 'Completed'],
                    ['order002', 'user007', 'Kyluzz Wiffer', 'Primus' , '11/15/2024', 'Completed'],
                    ['order001', 'user001', 'Jazzer Onggoy', 'Primus' , '11/14/2024', 'Completed'],
                    ['order002', 'user007', 'No sleep AJ', 'Primus' , '11/15/2024', 'Completed'],
                    ['order003', 'user004', 'BuggerMan Emman', 'Jacob Trading' , '11/15/2024', 'Completed']
                    
                ],
                columns: [  
                    { title: "Order ID" },
                    { title: "Retailer ID" },
                    { title: "Retailer Name" },         
                    { title: "Distributor" },
                    { title: "Date" }
                ]
            });
        } );
    </script>
</body>
</html>