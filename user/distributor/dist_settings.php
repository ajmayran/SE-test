<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distributors Settings</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../../src/output.css">
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                <li class="group active">
                    <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_settings.php"><iconify-icon icon="material-symbols:settings" class="ml-10 mr-1 text-xl text-green-500 icon"></iconify-icon>
                        <span class="ml-2 font-normal">Shop Settings </span>
                    </a>
                </li>
            </ul>
        </aside>

        <main class="w-3/4 p-8 overflow-y-auto" style="max-height:100vh;">
            <!-- Page Content -->

            <div class="max-w-5xl p-6 mx-auto bg-white rounded-lg shadow-lg">
                <h2 class="pb-2 mb-4 text-xl font-bold border-b-2 border-gray-200">Distributor Information</h2>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    <!-- Form Section -->
                    <div class="md:col-span-2">
                        <div class="mb-4">
                            <label class="block mb-1 font-medium text-gray-700">Distributor Name</label>
                            <input type="text" placeholder="Enter shop name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block mb-1 font-medium text-gray-700">Opening Time</label>
                                <input type="time" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                            </div>
                            <div>
                                <label class="block mb-1 font-medium text-gray-700">Closing Time</label>
                                <input type="time" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-1 font-medium text-gray-700">Distributor Address</label>
                            <input type="text" placeholder="Street Address" class="w-full px-4 py-2 mb-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                            <div class="grid grid-cols-2 gap-4">
                                <input type="text" placeholder="City" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                                <input type="text" placeholder="Postal Code" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                            </div>
                            <input type="text" placeholder="State/Province" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                        </div>
                        <div class="mb-4">
                            <div class="flex items-center">
                                <label class="block mb-1 font-medium text-gray-700">Deliverable Areas</label>
                                <span>
                                    <iconify-icon icon="ant-design:edit-filled" class="ml-2 text-xl text-green-500 cursor-pointer hover:text-green-400" id="editAreasIcon"></iconify-icon>
                                </span>
                            </div>
                            <div class="flex flex-wrap items-center gap-2 mt-4">
                                <span class="px-4 py-2 text-green-700 bg-green-100 rounded-lg">Tetuan</span>
                                <span class="px-4 py-2 text-green-700 bg-green-100 rounded-lg">Tumaga</span>
                                <span class="px-4 py-2 text-green-700 bg-green-100 rounded-lg">Guiwan</span>
                            </div>
                        </div>
                    </div>
                    <!-- Image Upload Section -->
                    <div class="flex flex-col items-center justify-center">
                        <label for="upload-image" class="flex items-center justify-center w-32 h-32 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-100">
                            <iconify-icon icon="akar-icons:plus" class="text-xl"></iconify-icon>
                            <input type="file" id="upload-image" class="hidden" accept="image/*">
                        </label>
                        <button class="px-4 py-2 mt-4 text-white bg-green-500 rounded-lg focus:ring focus:ring-green-200">Upload Image</button>
                    </div>
                </div>
                <!-- Save Button -->
                <div class="flex justify-end mt-6">
                    <button class="px-6 py-2 text-white bg-green-500 rounded-lg focus:ring focus:ring-green-200">Save</button>
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

    <!-- Modal for Deliverable Areas -->
    <div id="areasModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
        <div class="w-1/3 p-6 bg-white rounded-lg shadow-lg">
            <h2 class="mb-4 text-xl font-normal">Manage Deliverable Areas</h2>
            <div id="areaInputs">
                <div class="flex items-center mb-2">
                    <input type="text" class="px-2 py-1 border border-gray-300 rounded-lg" placeholder="Enter area name">
                    <button class="px-2 py-1 ml-2 text-white bg-red-500 rounded-lg remove-area">Remove</button>
                </div>
            </div>
            <button id="addArea" class="px-4 py-2 mt-4 text-white bg-green-500 rounded-lg">Add Area</button>
            <button id="closeModal" class="px-4 py-2 mt-4 text-black bg-gray-300 rounded-lg">Close</button>
        </div>
    </div>
    <script>
        document.getElementById('editAreasIcon').onclick = function() {
            document.getElementById('areasModal').classList.remove('hidden');
        };

        document.getElementById('closeModal').onclick = function() {
            document.getElementById('areasModal').classList.add('hidden');
        };

        document.getElementById('addArea').onclick = function() {
            const areaInput = document.createElement('div');
            areaInput.className = 'flex items-center mb-2';
            areaInput.innerHTML = `
                <input type="text" class="px-2 py-1 border border-gray-300 rounded-lg" placeholder="Enter area name">
                <button class="px-2 py-1 ml-2 text-white bg-red-500 rounded-lg remove-area">Remove</button>
            `;
            document.getElementById('areaInputs').appendChild(areaInput);

            // Add event listener to the new remove button
            areaInput.querySelector('.remove-area').onclick = function() {
                areaInput.remove();
            };
        };

        // Remove area functionality for existing areas
        document.querySelectorAll('.remove-area').forEach(button => {
            button.onclick = function() {
                button.parentElement.remove();
            };
        });
    </script>


</body>

</html>