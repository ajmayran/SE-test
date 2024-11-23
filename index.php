<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="./img/Pconnect Logo.png">
    <link rel="stylesheet" href="./src/output.css">
    <link rel="stylesheet" href="./src/user_dash.css">

    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
    <style>
        body {
        font-family: 'Lexend', sans-serif;
        }
    </style>
</head>
<body>
    <nav class="flex flex-col items-center justify-between w-full px-20 py-4 bg-white shadow-sm min-h-20">
        <div class="flex items-center justify-between w-full">
            <div class="flex items-center">
                <a href="./public/dist_login.html" class="pb-1 font-sans text-sm text-gray-800 hover:text-green-500">Distributor Centre</a><span class="px-4 font-light text-gray-500 opacity-50">|</span>
                <a href="./public/dist_registration.html" class="pb-1 font-sans text-sm text-gray-800 hover:text-green-500">Register Now</a><span class="px-4 font-light text-gray-500 opacity-50">|</span>   
                <span class="pb-1 font-sans text-sm text-gray-800">Follow us on</span>
                <a href="https://www.facebook.com/profile.php?id=61567370446187" class="pb-1 ml-2 text-blue-500 hover:text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" class="text-xl" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M20.9 2H3.1A1.1 1.1 0 0 0 2 3.1v17.8A1.1 1.1 0 0 0 3.1 22h9.58v-7.75h-2.6v-3h2.6V9a3.64 3.64 0 0 1 3.88-4a20 20 0 0 1 2.33.12v2.7H17.3c-1.26 0-1.5.6-1.5 1.47v1.93h3l-.39 3H15.8V22h5.1a1.1 1.1 0 0 0 1.1-1.1V3.1A1.1 1.1 0 0 0 20.9 2" />
                </svg></a>
                <a href="#" class="pb-1 mt-2 ml-1 text-gray-800 align-middle hover:text-green-500"><iconify-icon icon="mdi:instagram" class="text-xl"></iconify-icon> </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center">
                <a href="#" class="font-sans text-sm text-gray-800 hover:text-green-500"><iconify-icon icon="material-symbols:help" class="pb-1 text-lg text-green-500 align-middle"></iconify-icon>Help</a><span class="px-4 font-light text-gray-500 opacity-50">|</span>
                </div>  
                <div class="flex items-center">
                <a href="./public/login.php" class="font-sans text-sm text-gray-800 hover:text-green-500"><iconify-icon icon="mdi:notifications" class="pb-1 text-lg text-green-500 align-middle"></iconify-icon>Notifications</a><span class="px-4 font-light text-gray-500 opacity-50">|</span>
                </div>  
                <a href="./public/signup.php" class="pb-1 font-sans text-sm text-gray-800 hover:text-green-500">Signup</a><span class="px-4 font-light text-gray-500 opacity-50">|</span>
                <a href="./public/login.php" class="pb-1 font-sans text-sm text-gray-800 hover:text-green-500">Login</a>
            </div>
        </div>
        <div class="relative flex items-center px-10 mt-4">
            <div class="flex items-center mr-10">
                <img src="./img/Pconnect Logo.png" alt="PC Connect Logo" class="h-10 mr-2">
                <span class="text-2xl font-semibold text-black-700">PConnect</span>
            </div>
            <select class="px-3 py-2 mr-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent">
                <option value="all">All Categories</option>
            </select>
            <input type="text" placeholder="Search for items..." class="flex-1 px-3 py-2 bg-gray-200 border border-gray-300 rounded-tl-lg rounded-bl-lg focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent">
            <button class="px-4 py-2 font-bold text-white bg-green-500 rounded-tr-lg rounded-br-lg hover:bg-green-600">
                <iconify-icon icon="mdi:search" class="pb-1 text-xl align-middle"></iconify-icon> 
            </button>
            <a href="./public/login.php" class="py-2 ml-10 align-middle">
                <iconify-icon icon="mdi:cart" class="text-3xl text-green-500 hover:text-green-600"></iconify-icon> 
            </a>
        </div>
    </nav>
    <nav class="flex items-center justify-between bg-white shadow-sm">
        <div class="w-full px-20 py-2 text-white bg-gray-900">
            <ul class="flex justify-center space-x-20 ">
                <li class=" hover:text-green-00"><a href="#">HOME</a></li>
                <li class=" hover:text-green-500"><a href="./public/login.php">DISTRIBUTORS</a></li>
                <li class=" hover:text-green-500"><a href="./public/login.php">PRODUCTS</a></li>
                <li class=" hover:text-green-500"><a href="./public/login.php">CATEGORY</a></li>
            </ul>
        </div>
    </nav>
    <section>
        <div class="relative">
            <!-- Design 1 -->
            <div class="flex flex-row items-center justify-between w-full text-white section active" style="background-color: #D8F1E5;">
              <div class="relative flex flex-col items-center justify-center w-1/2">
                    <img src="./img/sec1-des1.png" class="object-cover w-[550px] h-[380px] p-2" alt="Background Image">
                    <div class="absolute text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"> 
                        <h1 class="mt-2 ml-2 text-3xl font-bold">Welcome to Our Store</h1>
                        <p class="mb-10 text-sm">Discover amazing products just for you!</p>
                        <a href="./public/login.php" class="px-6 py-3 text-black bg-white rounded-lg hover:bg-gray-200">Shop Now &rarr;</a>
                    </div>
              </div>
              <div class="w-1/2"> 
                 <img src="./img/sec1-des2.png" class="object-cover w-3/4 p-2 h-3/4"></img> 
              </div>
            </div>
          
            <!-- Design 2 -->
            <div class="flex flex-col items-center justify-center hidden w-full min-h-[400px] text-white bg-green-500 section">
              <h1 class="text-5xl font-bold">Exclusive Offers</h1>
              <p class="text-lg">Don't miss out on our limited-time deals!</p>
              <a href="./public/login.php" class="px-6 py-3 mt-2 text-black bg-white rounded-lg hover:bg-gray-200">Shop Now &rarr;</a>
            </div>
          
            <!-- Design 3 -->
            <div class="flex flex-col items-center justify-center hidden w-full min-h-[400px] text-white bg-red-500 section">
              <h1 class="text-5xl font-bold">New Arrivals</h1>
              <p class="text-lg">Check out the latest products in our collection!</p>
              <a href="./public/login.php" class="px-6 py-3 mt-2 text-black bg-white rounded-lg hover:bg-gray-200">Shop Now &rarr;</a>
            </div>
          
            <!-- Design 4 -->
            <div class="flex flex-col items-center justify-center hidden w-full min-h-[400px] text-white bg-purple-500 section">
              <h1 class="text-5xl font-bold">Customer Favorites</h1>
              <p class="text-lg">See what our customers love the most!</p>
              <a href="./public/login.php" class="px-6 py-3 mt-2 text-black bg-white rounded-lg hover:bg-gray-200">Shop Now &rarr;</a>
            </div>
          
            <!-- Navigation Circles -->
            <div class="absolute flex space-x-2 transform -translate-x-1/2 bottom-4 left-1/2">
              <button class="circle-button active" data-index="0"></button>
              <button class="circle-button" data-index="1"></button>
              <button class="circle-button" data-index="2"></button>
              <button class="circle-button" data-index="3"></button>
            </div>
          </div>
    </section>

    <section class="py-8 bg-white">
        <div class="container px-4 mx-auto">
            <div class="flex items-center justify-between">
                <h2 class="mr-4 text-2xl font-bold">Explore Distributors</h2>
                <div class="flex items-center">
                    <i class="mr-2 fa-solid fa-angle-left"></i>
                    <button class="px-4 py-2 mr-2 font-bold text-gray-700 bg-gray-200 rounded hover:bg-gray-300">All</button>
                    <button class="px-4 py-2 mr-2 font-bold text-gray-700 bg-gray-200 rounded hover:bg-gray-300">Drinks</button>
                    <button class="px-4 py-2 mr-2 font-bold text-gray-700 bg-gray-200 rounded hover:bg-gray-300">Frozen Products</button>
                    <button class="px-4 py-2 mr-2 font-bold text-gray-700 bg-gray-200 rounded hover:bg-gray-300">Instant Drink</button>
                    <button class="px-4 py-2 font-bold text-gray-700 bg-gray-200 rounded hover:bg-gray-300">Toiletries</button>
                    <i class="ml-2 fa-solid fa-angle-right"></i>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 py-10 md:grid-cols-5">
                <a href="./public/login.php" class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                  <img src="./img/Distrubutors/alaska.png" alt="Distributor 1" class="mb-4">
                  <h3 class="text-lg font-bold">Jacob</h3>
                  <p>10 Items</p>
                </a>
                <a href="./public/login.php" class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                  <img src="./img/Distrubutors/ph.png" alt="Distributor 2" class="mb-4">
                  <h3 class="text-lg font-bold">Zambasulta</h3>
                  <p>20 Items</p>
                </a>
                <a href="./public/login.php" class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                  <img src="./resources/img/Distrubutors/gm.png" alt="Distributor 3" class="mb-4">

                  <h3 class="text-lg font-bold">Glenmark Trading</h3>
                  <p>15 Items</p>
                </a>
                <a href="./public/login.php" class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                  <img src="./img/Distrubutors/bass.png" alt="Distributor 4" class="mb-4">
                  <h3 class="text-lg font-bold">Boss Jim Grocery </h3>
                  <p>10 Items</p>
                </a>
                <a href="./public/login.php" class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                  <img src="./img/Distrubutors/primus.png" alt="Distributor 5" class="mb-4">
                  <h3 class="text-lg font-bold">Primus</h3>
                  <p>22 Items</p>
                </a>
              </div>
        </div>
    </section>  
    <section class="py-5 bg-white">
        <div class="container px-4 mx-auto">
            <div class="flex items-center justify-between">
                <h2 class="mr-4 text-2xl font-bold">Popular Products</h2>
            </div>
            <div class="grid grid-cols-2 gap-4 py-10 md:grid-cols-5">
                <a href="./public/login.php" class="p-6 text-center bg-white border-2 border-gray-100 rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="./img/Products/rtc-chicken-tocino.png" alt="Product Image" class="h-20 mb-4 w-30">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-normal">Chicken Tocino Templados</h3>
                        <p class="text-sm text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-center mt-4">
                        <span class="font-sans text-xl">₱250.00</span>
                    </div>
                    <button class="w-full px-4 py-2 mt-10 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                        Add to Cart
                    </button>
                </a>
                <a href="./public/login.php" class="p-6 text-center bg-white border-2 border-gray-100 rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="./img/Products/Chicken-lumpia-shanghai-mix.png" alt="Product Image" class="w-20 h-20 mb-4 rounded-lg ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-normal">Chicken Lumpia Shanghai Mix</h3>
                        <p class="text-sm text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-center mt-4">
                        <span class="font-sans text-xl">₱250.00</span>
                    </div>
                    <button class="w-full px-4 py-2 mt-10 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                        Add to Cart
                    </button>
                </a>
                <a href="./public/login.php" class="p-6 text-center bg-white border-2 border-gray-100 rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="./img/Products/rtc-cheesy-chicken-fingers.png" alt="Product Image" class="w-20 h-20 mb-4 rounded-lg ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-normal">Chicken Lumpia Shanghai Mix</h3>
                        <p class="text-sm text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-center mt-4">
                        <span class="font-sans text-xl">₱250.00</span>
                    </div>
                    <button class="w-full px-4 py-2 mt-10 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                        Add to Cart
                    </button>
                </a>
                <a href="./public/login.php" class="p-6 text-center bg-white border-2 border-gray-100 rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="./img/Products/rtc-pepper-steak.png" alt="Product Image" class="w-20 h-20 mb-4 rounded-lg ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-normal">Chicken Pepper Steak</h3>
                        <p class="text-sm text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-center mt-4">
                        <span class="font-sans text-xl">₱250.00</span>
                    </div>
                    <button class="w-full px-4 py-2 mt-10 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                        Add to Cart
                    </button>
                </a>
                <a href="./public/login.php" class="p-6 text-center bg-white border-2 border-gray-100 rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="./img/Products/rtc-mideterranian.png" alt="Product Image" class="w-20 h-20 mb-4 rounded-lg ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-normal">Timplados Mideterranian</h3>
                        <p class="text-sm text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-center mt-4">
                        <span class="font-sans text-xl">₱250.00</span>
                    </div>
                    <button class="w-full px-4 py-2 mt-10 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                        Add to Cart
                    </button>
                </a>
                <a href="./public/login.php" class="p-6 text-center bg-white border-2 border-gray-100 rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="./img/Products/rtc-chicken-siomai.png" alt="Product Image" class="w-20 h-20 mb-4 rounded-lg ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-normal">Timplados Chicken Siomai</h3>
                        <p class="text-sm text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-center mt-4">
                        <span class="font-sans text-xl">₱250.00</span>
                    </div>
                    <button class="w-full px-4 py-2 mt-10 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                        Add to Cart
                    </button>
                </a>
                <a href="./public/login.php" class="p-6 text-center bg-white border-2 border-gray-100 rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="./img/Products/rtc-spicy-wings.png" alt="Product Image" class="w-20 h-20 mb-4 rounded-lg ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-normal">Chicken Spicy Wings</h3>
                        <p class="text-sm text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-center mt-4">
                        <span class="font-sans text-xl">₱250.00</span>
                    </div>
                    <button class="w-full px-4 py-2 mt-10 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                        Add to Cart
                    </button>
                </a>
                <a href="./public/login.php" class="p-6 text-center bg-white border-2 border-gray-100 rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="./img/Products/rtc-oriental-wings.png" alt="Product Image" class="w-20 h-20 mb-4 rounded-lg ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-normal">Chicken Oriental Wings</h3>
                        <p class="text-sm text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-center mt-4">
                        <span class="font-sans text-xl">₱250.00</span>
                    </div>
                    <button class="w-full px-4 py-2 mt-10 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                        Add to Cart
                    </button>
                </a>
                <a href="./public/login.php" class="p-6 text-center bg-white border-2 border-gray-100 rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="./img/Products/rtc-chicken-tapa.png" alt="Product Image" class="w-20 h-20 mb-4 rounded-lg ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-normal">Timplados Chicken Tapa</h3>
                        <p class="text-sm text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-center mt-4">
                        <span class="font-sans text-xl">₱250.00</span>
                    </div>
                    <button class="w-full px-4 py-2 mt-10 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                        Add to Cart
                    </button>
                </a>
                <a href="./public/login.php" class="p-6 text-center bg-white border-2 border-gray-100 rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="./img/Products/rtc-korean-chicken-bbq.png" alt="Product Image" class="w-20 h-20 mb-4 rounded-lg ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-normal">Korean Chicken Barbeque</h3>
                        <p class="text-sm text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-center mt-4">
                        <span class="font-sans text-xl">₱250.00</span>
                    </div>
                    <button class="w-full px-4 py-2 mt-10 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                        Add to Cart
                    </button>
                </a>
              </div>
        </div>
    </section>
    <div class="flex justify-center gap-2 my-6">
        <button class="px-3 py-1 font-medium text-gray-700 bg-gray-200 rounded-full hover:bg-gray-300">←</button>
        <button class="px-3 py-1 font-medium text-white bg-green-500 rounded-full">1</button>
        <button class="px-3 py-1 font-medium text-gray-700 bg-gray-200 rounded-full hover:bg-gray-300">2</button>
        <button class="px-3 py-1 font-medium text-gray-700 bg-gray-200 rounded-full hover:bg-gray-300">3</button>
        <span class="text-gray-400">...</span>
        <button class="px-3 py-1 font-medium text-gray-700 bg-gray-200 rounded-full hover:bg-gray-300">6</button>
        <button class="px-3 py-1 font-medium text-gray-700 bg-gray-200 rounded-full hover:bg-gray-300">→</button>
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
<script src="./user_dash.js"></script>
</body>
</html>