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
    <title>Pending Retailers</title>
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
            <li class="mb-1 group active">
                <a href="#"
                    class="flex items-center py-2 px-4  hover:bg-green-300 hover:text-gray-100 rounded-md group-[.active]:text-white group-[.selected]:bg-green-400 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <iconify-icon icon="mdi:users" class="mr-3 text-xl"></iconify-icon>
                    <span class="text-sm">Retailers</span>
                    <iconify-icon icon="mdi:keyboard-arrow-right"
                        class="ml-auto group-[.selected]:rotate-90"></iconify-icon>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="#"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Pending
                            Retailers</a>
                    </li>
                    <li class="mb-4">
                        <a href="./activeRetailers.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Active
                            Retailers</a>
                    </li>
                    <li class="mb-4">
                        <a href="./restricted.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Restricted
                            Retailers</a>
                    </li>
                    <li class="mb-4">
                        <a href="./banned.php"
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
                        <a href="../distributors/pendingDist.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Pending Distributor</a>
                    </li>
                    <li class="mb-4">
                        <a href="../distributors/activeDist.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Active Distributor</a>
                    </li>
                    <li class="mb-4">
                        <a href="../distributors/restrictedDist.php"
                            class="text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Restricted</a>
                    </li>
                    <li class="mb-4">
                        <a href="../distributors/bannedDist.php"
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
                    <a href="#" class="font-medium text-gray-400 hover:text-gray-600">Retailers</a>
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

        <!-- Pending retailers Content -->
        <div class="p-6">
            <div class="mb-6 flex flex-row justify-between space-x-4">
                <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                    <p class="text-gray-600">All Retailers</p>
                    <h2 class="text-2xl font-bold text-green-700">560</h2>
                </div>
                <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                    <p class="text-gray-600">Reported Retailers</p>
                    <h2 class="text-2xl font-bold text-green-700">12</h2>
                </div>
                <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                    <p class="text-gray-600">Restricted Retailers</p>
                    <h2 class="text-2xl font-bold text-green-700">4</h2>
                </div>
                <div class="bg-abebc6 p-4 rounded-lg shadow-md w-1/4">
                    <p class="text-gray-600">Banned Retailers</p>
                    <h2 class="text-2xl font-bold text-green-700">2</h2>
                </div>
            </div>

            <div class="p-6 bg-white rounded-lg shadow">
                <h2 class="text-2xl font-bold mb-6">Pending Retailers</h2>
                <div class="mb-6">
                    <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded" id="addRetailerBtn">Add Retailer</button>
                </div>
                <table id="retailerTable" class="w-full border-collapse border border-gray-300 display">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-2 border text-left">User ID</th>
                            <th class="p-2 border text-left">Name</th>
                            <th class="p-2 border text-left">Email</th>
                            <th class="p-2 border text-left">Date Created</th>
                            <th class="p-2 border text-left">Status</th>
                            <th class="p-2 border text-left">TIN</th>
                            <th class="p-2 border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data will be populated by DataTables -->
                    </tbody>
                </table>
            </div>

            <!-- Modal for Approve -->
            <div id="approve-modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
                <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
                    <h2 class="text-xl font-bold mb-4">Approve Retailer</h2>
                    <div id="approve-retailer-info" class="mb-4">
                        <!-- Retailer details will be dynamically added here -->
                    </div>
                    <img id="retailer-certificate" class="w-full rounded shadow" src="" alt="Certificate">
                    <div class="flex justify-end space-x-4 mt-4">
                        <button id="cancel-approve" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancel</button>
                        <button id="confirm-approve" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Confirm Approve</button>
                    </div>
                </div>
            </div>

            <!-- Modal for Reject -->
            <div id="reject-modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
                <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
                    <h2 class="text-xl font-bold mb-4">Reject Retailer</h2>
                    <div id="reject-retailer-info" class="mb-4">
                        <!-- Retailer details will be dynamically added here -->
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
                        <button id="cancel-reject" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancel</button>
                        <button id="confirm-reject" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Confirm Reject</button>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div 
                id="retailerModal" 
                class="fixed top-0 left-0 flex items-center justify-center w-full h-full bg-black bg-opacity-50 hidden">
                <div class="bg-white p-6 rounded-lg shadow-lg w-1/2 max-h-[90vh] overflow-auto">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold">Register Retailer</h2>
                        <button id="closeModal" class="text-gray-500 hover:text-red-500 text-2xl">&times;</button>
                    </div>
                    <form method="POST"> 
                        <div class="mb-3">
                            <input type="text" name="first_name" placeholder="First Name" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="middle_name" placeholder="Middle Name (Optional)" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="last_name" placeholder="Last Name" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" placeholder="Email Address" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>
                        <div class="mb-3 w-full py-1.5 border rounded-lg">
                            <input type="file" name="permit" class="hidden" id="fileInput" accept=".jpeg, .jpg, .png">
                            <label for="fileInput" class="px-4 py-2 font-semibold text-white transition duration-300 bg-green-500 rounded-lg shadow-lg hover:bg-green-600"> Upload File</label><span class="ml-1" id="fileName"></span>
                        </div>
                        <div class="text-right m-2 text-[8px]">
                            <p class="text-gray-400">Any of the following (Business Permit, Mayor's Permit, Barangay Permit) JPG, JPEG, PNG, PDF support. Maximum of 20MB</p>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" placeholder="Password" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="confirmpassword" placeholder="Confirm Password" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>
                        <input type="submit" name="signup" value="Register" class="w-full p-3 text-white transition duration-300 bg-green-500 shadow-lg rounded-3xl hover:bg-green-600">
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
            const retailerData = [
                ["UserA00001", "Vicente De Leon", "VicenteDeLeon@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00002", "Teodoro Medina", "TeodoroMedina@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00003", "Roberto Cruz", "RobertoCruz@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00004", "Julio Reyes", "JulioReyes@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00005", "Pedro Santos", "PedroSantos@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00006", "Nestor De Leon", "NestorDeLeon@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00007", "Abigail Cruz", "AbigailCruz@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00008", "Dolores Bautista", "DoloresBautista@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00009", "Crisanto Perez", "CrisantoPerez@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00010", "Sofia Dela Cruz", "SofiaDelaCruz@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00011", "Olivia Rodrigo", "OliviaRodrigo@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00012", "Pilar Do", "PilarDo@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00013", "Maria Clara", "MariaClara@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00014", "Julia Montes", "JuliaMontes@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00015", "Joaquin Monroe", "JuliaMontes@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00016", "Juan Dela Pena", "Juandelapena@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00017", "Mariano Marimo", "marianomarima@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00018", "Miguel Red Horse", "redhorse@gmail.com", "January 12, 2024", "Pending", "123456789"],
                ["UserA00019", "Orlando Cali", "Orlando@gmail.com", "January 12, 2024", "Pending", "123456789"]
            ];

            $('#retailerTable').DataTable({
            data: retailerData,
            columns: [
                { title: "User ID", data: 0 },
                { title: "Name", data: 1 },
                { title: "Email", data: 2 },
                { title: "Date Created", data: 3 },
                { title: "Status", data: 4 },
                { title: "TIN", data: 5 },
                {
                    data: null,
                    render: function(data) {
                        return `
                            <div class="flex space-x-2">
                                <button class="approve-btn bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-2 rounded">Approve</button>
                                <button class="reject-btn bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Reject</button>
                            </div>`;
                    },
                },
            ],
        });

        // Get modal and buttons
        const modal = document.getElementById('retailerModal');
        const addRetailerBtn = document.getElementById('addRetailerBtn');
        const closeModal = document.getElementById('closeModal');

        // Open modal
        addRetailerBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        // Close modal
        closeModal.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        // Close modal by clicking outside the form
        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });

            // Approve Modal
            const approveModal = $('#approve-modal');
            const approveRetailerInfo = $('#approve-retailer-info');
            const retailerCertificate = $('#retailer-certificate');

            $('.approve-btn').on('click', function() {
                const rowData = $(this).closest('tr').children();
                const userID = rowData.eq(0).text();
                const name = rowData.eq(1).text();
                const email = rowData.eq(2).text();
                const TIN = rowData.eq(5).text();

                approveRetailerInfo.html(`
                    <p><strong>User ID:</strong> ${userID}</p>
                    <p><strong>Name:</strong> ${name}</p>
                    <p><strong>Email:</strong> ${email}</p>
                    <p><strong>TIN:</strong> ${TIN}</p>
                `);
                retailerCertificate.attr('src', `../../../resources/img/certificates/${userID}.jpg`);
                approveModal.removeClass('hidden');
            });

            $('#confirm-approve').on('click', function() {
                alert('Retailer Approved!');
                approveModal.addClass('hidden');
            });

            $('#cancel-approve').on('click', function() {
                approveModal.addClass('hidden');
            });

            // Reject Modal
            const rejectModal = $('#reject-modal');
            const rejectRetailerInfo = $('#reject-retailer-info');
            const rejectReason = $('#reject-reason');
            const rejectOtherReason = $('#reject-other-reason');

            $('.reject-btn').on('click', function() {
                const rowData = $(this).closest('tr').children();
                const userID = rowData.eq(0).text();
                const name = rowData.eq(1).text();
                const email = rowData.eq(2).text();

                rejectRetailerInfo.html(`
                <p><strong>User ID:</strong> ${userID}</p>
                <p><strong>Name:</strong> ${name}</p>
                <p><strong>Email:</strong> ${email}</p>
                `);
                rejectModal.removeClass('hidden');
            });

            rejectReason.on('change', function() {
                if ($(this).val() === 'Other') {
                    rejectOtherReason.removeClass('hidden');
                } else {
                    rejectOtherReason.addClass('hidden').val('');
                }
            });

            $('#confirm-reject').on('click', function() {
                const selectedReason = rejectReason.val();
                const otherReason = rejectOtherReason.val().trim();
                if (!selectedReason || (selectedReason === 'Other' && !otherReason)) {
                    alert('Please provide a valid reason for rejection.');
                    return;
                }

                const reason = selectedReason === 'Other' ? otherReason : selectedReason;
                alert(`Retailer Rejected! Reason: ${reason}`);
                rejectModal.addClass('hidden');
            });

            $('#cancel-reject').on('click', function() {
                rejectModal.addClass('hidden');
                rejectReason.val('');
                rejectOtherReason.addClass('hidden').val('');
            });
        });
    </script>
</body>

</html>