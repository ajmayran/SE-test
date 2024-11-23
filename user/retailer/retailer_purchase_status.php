<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../src/output.css">
    <link rel="stylesheet" href="../../src/user_dash.css">
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
</head>
<body class="min-h-screen flex flex-col">
    <header class="bg-white shadow-sm">
        <nav class="flex items-center justify-between w-full px-20 py-4 bg-white shadow-sm min-h-20">
            <div class="flex items-center" >
                <img src="../../resources/img/Pconnect Logo.png" alt="PC Connect Logo" class="h-10 mr-4">
                <span class="text-2xl font-semibold text-black-700">PConnect</span>
                <div class="relative flex items-center px-10">
                    <select class="px-3 py-2 ml-64 mr-2 bg-gray-200 border border-gray-300 rounded-md">
                        <option value="all">All Categories</option>
                        <option value="all">Meow</option>
                        <option value="all">Meow2</option>
                    </select>
                    <input type="text" placeholder="Search for items..." class="flex-1 px-3 py-2 bg-gray-200 border border-gray-300 rounded-md">
                    <button class="px-4 py-2 font-bold text-white bg-green-500 rounded-md hover:bg-green-700">
                        <iconify-icon icon="mdi:search" class="text-lg"></iconify-icon> 
                    </button>
                </div>
            </div>
            <div class="flex items-center">
                <a href="./retailer_cart.php" class="mr-4 text-gray-500 hover:text-gray-700 ">
                    <iconify-icon icon="mdi:cart" class="text-3xl"></iconify-icon> 
                </a>
                <a href="#" class="mr-4 text-gray-500 hover:text-gray-700">
                    <iconify-icon icon="mdi:notifications" class="text-3xl"></iconify-icon> 
                </a>
                <div class="flex items-center">
                    <img src="../../resources/img/avatar.png.jpeg" alt="User Profile" class="w-8 h-8 mr-2 rounded-full">
                    <span class="font-medium text-gray-700">Michael Jordan</span>
                </div>
            </div>
        </nav>
        <nav class="flex items-center justify-between bg-white shadow-sm">
            <div class="w-full px-20 py-2 text-white bg-gray-900">
                <ul class="flex justify-center space-x-20 ">
                    <li class=" hover:text-green-500"><a href="./retailer_dash.php">HOME</a></li>
                    <li class=" hover:text-green-500"><a href="#">DISTRIBUTORS</a></li>
                    <li class=" hover:text-green-500"><a href="#">PRODUCTS</a></li>
                    <li class=" hover:text-green-500"><a href="#">CATEGORY</a></li>
                </ul>
            </div>
        </nav>
    </header>
    
    <section class="mt-12 container px-4 mx-auto">
    <div class="flex container px-4 mx-auto">
        <div class="flex-shrink-0 mr-4">
            <img src="../../resources/img/avatar.png.jpeg" alt="Profile Picture" class="w-8 h-8 mr-2 rounded-full">
        </div>
        <div>
            <p class="text-gray-900 font-semibold">Micheal Jordan</p>
            
            <p class="text-green-500 text-xl font-medium">My Purchases</p>
        </div>
    </div>
    <hr class="my-4 border-gray-200">
    </section>

    <div class="tabsrounded-lg container mx-auto  bg-gray-50 h-screen mb-24">
        <ul class="tab-list flex border-b border-gray-200">
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">All</li>
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">To Pay</li>
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">To Receive</li>
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">Completed</li>
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">Cancelled</li>
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">Return/Refund</li>
        </ul>
        <div class="tab-content p-4">
          <div class="tab-pane">
            <div class="bg-white p-6 rounded-lg shadow-md mb-24">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold">Magnolia Chicken</h2>
                    <p class="text-sm font-semibold text-yellow-500">Order Status: Waiting Approval</p>
                </div>
            
                <div class="border-b border-gray-200 mb-4">
                    <div class="flex items-center mb-2">
                        <img src="../../resources/img/Products/rtc-chicken-tocino.png" alt="Product Image" class="w-16 h-16 mr-4">
                        <div>
                            <p class="text-gray-700">Tocino Chicken</p>
                            <p class="text-gray-500">x10</p>
                        </div>
                        <p class="text-gray-700 text-right ml-auto">₱2,000.00</p>
                    </div>
                </div>
            
                <div class="flex justify-between mb-4">
                    <p class="text-gray-700">Subtotal Total:</p>
                    <p class="text-gray-700">₱2,000.00</p>
                </div>
                <div class="flex justify-between mb-4">
                    <p class="text-gray-700">Shipping Fee:</p>
                    <p class="text-gray-700">₱60.00</p>
                </div>
    
                <div class="flex justify-between mb-4">
                    <p class="text-gray-700 font-bold">Total COD Payment:</p>
                    <p class="text-gray-700 font-bold">₱2,060.00</p>
                </div>
            
                <div class="flex justify-end">
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">Cancel Order</button>
                    <a href="./retailer_purchase.php"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View Details</button></a>
                </div>
            </div>
          </div>
          <div class="tab-pane hidden"></div>
          <div class="tab-pane hidden"></div>
          <div class="tab-pane hidden"></div>
          <div class="tab-pane hidden"></div>
          <div class="tab-pane hidden"></div>
          
        </div>
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
        const tabItems = document.querySelectorAll('.tab-item');
        const tabPanes = document.querySelectorAll('.tab-pane');
        
        tabItems.forEach((item, index) => {
          item.addEventListener('click', () => {
            tabItems.forEach(item => item.classList.remove('active'));
            tabPanes.forEach(pane => pane.classList.add('hidden'));
        
            item.classList.add('active');
            tabPanes[index].classList.remove('hidden');
          });
        });
    </script>
</body>

  