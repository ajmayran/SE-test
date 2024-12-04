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
    <title>Pending Distributors</title>
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
                        <a href="../retailers/activeRetailers.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Active
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
            <li class="mb-1 group active">
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
                        <a href="./activeDist.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Active Distributor</a>
                    </li>
                    <li class="mb-4">
                        <a href="./restrictedDist.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Restricted</a>
                    </li>
                    <li class="mb-4">
                        <a href="./bannedDist.php"
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
                        <a href="../support/tickets.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Tickets</a>
                    </li>
                    <li class="mb-4">
                        <a href="../support/resolved.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Resolved</a>
                    </li>
                </ul>
            </li>
            <li class="mt-20 mb-1 group">
                <a href="../settings.php"
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
                    <a href="#" class="font-medium text-gray-400 hover:text-gray-600">Distributors</a>
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

        <!-- Pending distri Content -->
        <div class="p-6">
            <div class="mb-6 flex flex-row justify-between space-x-4">
                <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                    <p class="text-gray-600">All Distributors</p>
                    <h2 class="text-2xl font-bold text-green-700">16</h2>
                </div>
                <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                    <p class="text-gray-600">Reported Distributors</p>
                    <h2 class="text-2xl font-bold text-green-700">6</h2>
                </div>
                <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                    <p class="text-gray-600">Restricted Distributors</p>
                    <h2 class="text-2xl font-bold text-green-700">2</h2>
                </div>
                <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                    <p class="text-gray-600">Banned Distributors</p>
                    <h2 class="text-2xl font-bold text-green-700">2</h2>
                </div>
            </div>

            <div class="p-6 bg-white rounded-lg shadow">
                <h2 class="text-2xl font-bold mb-6">Pending Distributors</h2>
                <div class="mb-6" id="addDistributor">
                    <a href="" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-2 rounded"><button>Add Distributor</button></a>
                </div>
                <table id="distributorTable" class="w-full border-collapse border border-gray-300 display">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-2 border text-left">Distributor ID</th>
                            <th class="p-2 border text-left">Name</th>
                            <th class="p-2 border text-left">Email</th>
                            <th class="p-2 border text-left">Date Created</th>
                            <th class="p-2 border text-left">Status</th>
                            <th class="p-2 border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data will be populated by DataTables -->
                    </tbody>
                </table>
            </div>

            <!-- Approve Modal -->
            <div id="approveModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg p-6 w-2/3 shadow-lg">
                    <h2 class="text-lg font-bold mb-4">Approve Distributor</h2>
                    <div class="mb-6">
                        <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded" id="addDistributor">Add Retailer</button>
                    </div>
                    <div id="distributor-info" class="text-gray-700 mb-4">
                        <!-- Distributor details will be dynamically added here -->
                    </div>
                    <div class="flex justify-between space-x-4 mb-4">
                        <img id="tin-image" class="w-1/3 rounded shadow" alt="TIN Certificate">
                        <img id="mayors-permit" class="w-1/3 rounded shadow" alt="Mayor's Permit">
                        <img id="sec-certificate" class="w-1/3 rounded shadow" alt="SEC Certificate">
                    </div>
                    <div class="flex justify-end space-x-4">
                        <button id="closeApproveModal" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancel</button>
                        <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Confirm Approve</button>
                    </div>
                </div>
            </div>

            <!-- Reject Modal -->
            <div id="rejectModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
                    <h2 class="text-xl font-bold mb-4">Reject Distributor</h2>
                    <div id="reject-retailer-info" class="mb-4">
                        <!-- Distributor details will be dynamically added here -->
                    </div>
                    <label for="reject-reason" class="block text-gray-700 mb-2">Select Reason:</label>
                    <select id="reject-reason" class="w-full border rounded p-2 mb-4">
                        <option value="" disabled selected>Select a reason</option>
                        <option value="Fake documents">Fake documents</option>
                        <option value="Suspicious activity">Suspicious activity</option>
                        <option value="Invalid contact details">Invalid contact details</option>
                        <option value="Incomplete requirements">Incomplete requirements</option>
                        <option value="Other">Other</option>
                    </select>
                    <textarea id="reject-other-reason" class="w-full border rounded p-2 mb-4 hidden" placeholder="Specify reason..."></textarea>
                    <div class="flex justify-end space-x-4">
                        <button id="closeRejectModal" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancel</button>
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Confirm Reject</button>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div 
                id="modal" 
                class="fixed top-0 left-0 flex items-center justify-center w-full h-full bg-black bg-opacity-50 hidden">
                <div class="bg-white p-6 rounded-lg shadow-lg w-1/2 max-h-[90vh] overflow-auto">
                    <h2 class="text-xl font-bold mb-4 text-center">Register Distributor</h2>
                    <form>
                        <!-- Distributor Name -->
                        <div class="mb-2">
                            <label class="block font-medium text-gray-600">Distributor Name</label>
                            <input type="text" class="w-full px-3 py-2 font-light border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                            <p class="text-gray-500 text-sm mt-1">(This name will be your distributor's profile name)</p>
                        </div>

                        <!-- Address -->
                        <div class="mb-2">
                            <label class="block font-medium text-gray-600">Distributor Address</label>
                            <div class="flex items-center mb-2">
                                <label class="block w-1/3 font-medium text-gray-400">City</label>
                                <select id="citySelect" class="w-2/3 px-3 py-2 font-light border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" onchange="updateBarangays()">
                                    <option value="">Select</option>
                                    <option value="Zamboanga">Zamboanga City</option>
                                </select>
                            </div>
                            <div class="flex items-center mb-2">
                                <label class="block w-1/3 font-medium text-gray-400">Barangay</label>
                                <select id="barangaySelect" class="w-2/3 px-3 py-2 font-light border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="flex items-center mb-2">
                                <label class="block w-1/3 font-medium text-gray-400">Street</label>
                                <input type="text" class="w-2/3 px-3 py-2 font-light border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div class="mb-2">
                            <label class="block font-medium text-gray-600">Phone Number</label>
                            <input type="text" class="w-full px-3 py-2 font-light border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>

                        <!-- Email -->
                        <div class="mb-2">
                            <label class="block font-medium text-gray-600">Email</label>
                            <input type="email" class="w-full px-3 py-2 font-light border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>

                        <!-- Password -->
                        <div class="mb-2">
                            <label class="block font-medium text-gray-600">Password</label>
                            <input type="password" class="w-full px-3 py-2 font-light border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>

                        <div class="mb-4">
                            <div class="flex items-center">
                                <label class="block w-1/3 mr-4 text-sm font-bold text-right text-gray-500" for="tin-number">
                                    TaxPayer Identification <br> Number (TIN)
                                </label>
                                <div class="flex items-center w-2/3">
                                    <input class="w-full px-3 py-2 leading-tight text-gray-500 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="tin-number" type="text" placeholder="Input">
                                </div>
                            </div>
                        </div>
                        <!-- For BIR Certificate of Registration -->
                        <div class="mb-2">
                            <div class="flex items-center">
                                <label class="block w-1/2 pb-2 mr-4 text-sm font-bold text-right text-gray-500" for="BIR">
                                    BIR Certifcate of Registration
                                </label>
                                <div class="w-full py-1.5 border rounded-lg">
                                    <input type="file" class="hidden" id="birFileInput" onchange="displayFileName(this, 'birFileName')">
                                    <label for="birFileInput" class="px-4 py-2 font-semibold text-white transition duration-300 bg-green-500 rounded-lg shadow-lg hover:bg-green-600"> Upload File</label>
                                    <span class="ml-1 text-[12px] font-light" id="birFileName"></span>
                                </div>
                            </div>    
                        </div>

                        <!-- For SEC Certificate for Incorporation -->
                        <div class="mb-4">
                            <div class="flex items-center">
                                <label class="block w-1/2 pb-3 mr-4 text-sm font-bold text-right text-gray-500" for="SEC">
                                    SEC Certificate for Incorporation
                                </label>
                                <div class="w-full py-1.5 border rounded-lg">
                                    <input type="file" class="hidden" id="secFileInput" onchange="displayFileName(this, 'secFileName')">
                                    <label for="secFileInput" class="px-4 py-2 font-semibold text-white transition duration-300 bg-green-500 rounded-lg shadow-lg hover:bg-green-600"> Upload File</label>
                                    <span class="ml-1 text-[12px] font-light" id="secFileName"></span>
                                </div>
                            </div>    
                        </div>
                        <div class="flex justify-end mt-4">
                            <button type="button" class="px-4 py-2 mr-2 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-100" id="closeModal">Back</button>
                            <button type="button" class="px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-600">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="../../../js/tailwind/dashboard.js"></script>
    <script>
        $(document).ready(function() {
            const distributorData = [
                ["DistA00001", "Vicente De Leon", "VicenteDeLeon@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00002", "Teodoro Medina", "TeodoroMedina@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00003", "Roberto Cruz", "RobertoCruz@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00004", "Julio Reyes", "JulioReyes@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00005", "Pedro Santos", "PedroSantos@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00006", "Nestor De Leon", "NestorDeLeon@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00007", "Abigail Cruz", "AbigailCruz@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00008", "Dolores Bautista", "DoloresBautista@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00009", "Crisanto Perez", "CrisantoPerez@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00010", "Sofia Dela Cruz", "SofiaDelaCruz@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00011", "Olivia Rodrigo", "OliviaRodrigo@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00012", "Pilar Do", "PilarDo@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00013", "Maria Clara", "MariaClara@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00014", "Julia Montes", "JuliaMontes@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00015", "Joaquin Monroe", "JuliaMontes@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00016", "Juan Dela Pena", "Juandelapena@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00017", "Mariano Marimo", "marianomarima@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00018", "Miguel Red Horse", "redhorse@gmail.com", "January 12, 2024", "Pending"],
                ["DistA00019", "Orlando Cali", "Orlando@gmail.com", "January 12, 2024", "Pending"]
            ];

            $('#distributorTable').DataTable({
                data: distributorData,
                columns: [
                    { title: "Distributor ID", data: 0 },
                    { title: "Name", data: 1 },
                    { title: "Email", data: 2 },
                    { title: "Date Created", data: 3 },
                    { title: "Status", data: 4 },
                    {
                        data: null,
                        render: function () {
                            return `
                                <div class="flex space-x-2">
                                    <button class="approveBtn bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-2 rounded">Approve</button>
                                    <button class="rejectBtn bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Reject</button>
                                </div>`;
                        },
                    },
                ],
            });

            // Modal Functionality
            const addDistributor = document.getElementById('addDistributor');
            const closeModal = document.getElementById('closeModal');
            const modal = document.getElementById('modal');

            addDistributor.addEventListener('click', (event) => {
                event.preventDefault(); // Prevent default action
                modal.classList.remove('hidden');
            });

            closeModal.addEventListener('click', () => {
                modal.classList.add('hidden');
            });

            // Close modal on clicking outside of the modal content
            window.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                }
            });

            // Modal functionality
            $(document).on('click', '.approveBtn', function () {
                $('#approveModal').removeClass('hidden');
                const row = $(this).closest('tr');
                const data = row.find('td').map(function () { return $(this).text(); }).get();
                $('#distributor-info').html(`
                    <p><strong>ID:</strong> ${data[0]}</p>
                    <p><strong>Name:</strong> ${data[1]}</p>
                    <p><strong>Email:</strong> ${data[2]}</p>
                    <p><strong>Date Created:</strong> ${data[3]}</p>
                `);
                $('#tin-image').attr('src', '../../../resources/img/BIR/img1.jpg');
                $('#mayors-permit').attr('src', '../../../resources/img/MP/img1.jpg');
                $('#sec-certificate').attr('src', '../../../resources/img/SEC/img1.jpg');
            });

            $(document).on('click', '.rejectBtn', function () {
                $('#rejectModal').removeClass('hidden');
            });

            $('#closeApproveModal').on('click', function () {
                $('#approveModal').addClass('hidden');
            });

            $('#closeRejectModal').on('click', function () {
                $('#rejectModal').addClass('hidden');
            });
    });
    </script>
</body>
</html>