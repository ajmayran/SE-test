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
    <div class="mx-20 my-10 container mx-auto">
        <a href="./retailer_dash.php" class="text-green-500 hover:text-green-700">
            Go back
        </a>
    </div>
    <div class="flex items-center border border-gray-400 container px-4 mx-auto py-5">
        <div class="bg-white mx-auto p-5 flex justify-center ">
            <div class="mx-10 rounded-lg">
                <div class="flex justify-center py-5 px-5 m-5 ">
                    <img src="../../resources/img/Products/rtc-chicken-tocino.png" alt="Product Image" class="h-48 object-cover ">
                </div>
                <div>
                    <div class="justify-center flex ">
                        <img src="../../resources/img/Products/rtc-chicken-tocino.png" alt="Image 1" class="w-24 h-24 object-cover p-1 m-2 bg-gray-100 border border-green-500 rounded-lg">
                        <img src="../../resources/img/Products/rtc-chicken-tocino.png" alt="Image 2" class="w-24 h-24 object-cover p-1 m-2 border border-gray-300 rounded-lg">
                        <img src="../../resources/img/Products/rtc-chicken-tocino.png" alt="Image 3" class="w-24 h-24 object-cover p-1 m-2 border border-gray-300 rounded-lg">
                        <img src="../../resources/img/Products/rtc-chicken-tocino.png" alt="Image 4" class="w-24 h-24 object-cover p-1 m-2 border border-gray-300 rounded-lg">
                    </div>
                </div>
            </div>
            <div class="w-1/3">
                <div class="flex justify-between items-center mb-2">
                    <h2 class="text-lg font-bold">Chicken Tocino</h2>
                </div>
                <p class="text-gray-500 mb-4 w-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi.</p>
                <div class="flex items-center mb-4">
                    <span class="text-2xl font-bold">₱150</span>
              
                </div>
                <div class="flex items-center">
                    <div class="flex items-center mr-2">
                        <label for="quantity" class="text-xl">Min Order Quantity:</label>
                        <select id="quantity" class="border border-gray-300 rounded-md px-2 py-1 ml-2">
                            <option value="50g">10</option>
                            <option value="80g">25</option>
                            <option value="100g">50</option>
                            <option value="150g">100</option>
                        </select>
                    </div>
                    <button type="" onclick="openproductModal()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">
                        Add to Cart
                    </button>
                </div>
                <div class="mt-4">
                    <p>Type: Ready to Cook</p>
                    <p>SKU: FWM513VKT</p>
                    <p>MFG: Jun 4, 2024</p>
                    <p>LIFE: 70 days</p>
                    <p>Stock: 8 Items In Stock</p>
                </div>
            </div>
        </div>
    </div>
    <section class="p-2  mb-4 border border-t-0 border-gray-400 container px-4 mx-auto">
        <div class="px-10 flex justify-between">
            <div class="flex items-center">
                <div class="flex items-center justify-center w-24 h-24 bg-white rounded-lg">
                    <img src="../../resources/img/Distrubutors/alaska.png" alt="Distributor Photo" class="w-24 h-24">
                </div>
                <div class="ml-4">
                    <h2 class="text-2xl font-bold">Jacob</h2>
                    <a href="./retailer_distributor.html">
                        <button class="px-4 py-2  font-bold text-white bg-green-500 rounded hover:bg-green-700">
                        View Shop
                    </button></a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-white">
        <div class="container px-4 mx-auto">
            <div class="flex items-center justify-between">
                <h2 class="mr-4 text-2xl font-bold">Related Products</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-10">
               <a href="./single_product_view.php" class="bg-white rounded-lg shadow-md p-6 ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-chicken-tocino.png" alt="Product Image" class="just mb-4 ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Chicken Tocino Templados</h3>
                        <p class="text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-lg font-bold">₱150.85</span>
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Add to Cart
                        </button>
                    </div>
                </a>
                <a href="./single_product_view.php" class="bg-white rounded-lg shadow-md p-6 ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/Chicken-lumpia-shanghai-mix.png" alt="Product Image" class="just mb-4 ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Chicken lumpia shanghai mix</h3>
                        <p class="text-gray-500">By NestFood</p>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-lg font-bold">₱150.85</span>
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Add to Cart
                        </button>
                    </div>
                </a>
                <a href="./single_product_view.php" class="bg-white rounded-lg shadow-md p-6 ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-cheesy-chicken-fingers.png" alt="Product Image" class="just mb-4 ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Cheesy Chicken Fingers</h3>
                        <p class="text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-lg font-bold">₱150.85</span>
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Add to Cart
                        </button>
                    </div>
                </a>
                <a href="./single_product_view.php" class="bg-white rounded-lg shadow-md p-6 ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-pepper-steak.png" alt="Product Image" class="just mb-4 ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Pepper Steak</h3>
                        <p class="text-gray-500">By NestFood</p>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-lg font-bold">₱150.85</span>
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Add to Cart
                        </button>
                    </div>
                </a>
              </div>
        </div>
    </section>
    
    <div id="productModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">
        <div class="relative w-full max-w-sm max-h-screen p-8 overflow-y-auto bg-white rounded-lg">   
            <div class="flex justify-center">
                <div class="bg-green-500 text-white rounded-full p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75" />
                    </svg>
                </div>
            </div>
            <p class="text-green-500 font-semibold text-2xl flex justify-center">Success!</p>
            <div class="flex justify-center">
                    <p>Your item has been added to the cart.</p>
            </div>
            <hr class="my-6">
            <div class="flex justify-center mt-6">
                <button onclick="closeproductModal()" class="px-6 py-2 mr-4 text-white bg-gray-400 border rounded-lg hover:bg-gray-300 hover:text-gray-700">Close</button>
                <a href="./retailer_cart.php"><button onclick="closeproductModal()" class="px-6 py-2 mr-4 text-gray-700 bg-white border rounded-lg hover:bg-gray-100">View Cart</button></a>
            </div>
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
        function openproductModal() {
            document.getElementById('productModal').classList.remove('hidden');
        }
        function closeproductModal() {
            document.getElementById('productModal').classList.add('hidden');
        }
    </script>
</body>

  