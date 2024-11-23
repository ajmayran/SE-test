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
            
            <p class="text-green-500 text-xl font-medium">My Purchases Status</p>
        </div>
    </div>
    <hr class="my-4 border-gray-200">
    </section>
    
    <section class="pb-24 relative container px-4 mx-auto">
        <div class="px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full flex-col justify-start items-center gap-10 inline-flex">
                <div class="w-full flex-col justify-start items-center gap-4 flex">
                    <h2 class="w-full text-center text-black text-3xl font-bold font-manrope leading-normal">Order Tracking</h2>
                </div>
                <div class="w-full flex-col justify-start items-start gap-10 flex">
                    <div class="w-full justify-between items-center flex sm:flex-row flex-col gap-3">
                        <h3 class="text-gray-900 text-2xl font-semibold font-manrope leading-9">Order Details</h3>
                    </div>
                    <div class="w-full py-6 border-t border-b border-gray-100 md:justify-between justify-center md:items-start items-center md:gap-8 gap-10 flex flex-wrap">
                        
                        <div class="flex-col justify-start items-start gap-3 inline-flex">
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed">Order Placed</h6>
                            <h4 class="text-black text-xl font-semibold leading-8">Feb 20, 2024</h4>
                        </div>
                        <div class="flex-col justify-start items-start gap-3 inline-flex">
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed">To be delivered</h6>
                            <h4 class="text-black text-xl font-semibold leading-8">Feb 27, 2024</h4>
                        </div>
                        <div class="flex-col justify-start items-start gap-3 inline-flex">
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed">No of Items</h6>
                            <h4 class="text-black text-xl font-semibold leading-8">1 items</h4>
                        </div>
                        <div class="flex-col justify-start items-start gap-3 inline-flex">
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed">Status</h6>
                            <h4 class="text-yellow-500 text-xl font-semibold leading-8">Waiting for Confirmation</h4>
                        </div>
                    </div>
                </div>
                <div class="w-full flex-col justify-start items-start gap-10 flex">
                    <div class="w-full justify-between items-start flex sm:flex-row flex-col gap-3">
                        <h3 class="text-gray-900 text-2xl font-semibold font-manrope leading-9">Order Tracking</h3>
                        <h3 class="text-right text-gray-600 text-2xl font-semibold font-manrope leading-9">Order ID: 340909EVJ4XVY</h3>
                    </div>
                    <div class="w-full py-9 rounded-xl border border-gray-200 flex-col justify-start items-start flex">
                        <div class="w-full flex-col justify-center sm:items-center items-start gap-8 flex">
                            <ol class="flex sm:items-center items-start w-full sm:gap-0 gap-5">
                                <li class="flex w-full relative justify-center text-green-600 text-base font-semibold after:content-['']  after:w-full after:h-0.5 after:bg-green-600 after:inline-block after:absolute lg:after:top-4 after:top-3 xl:after:left-40 lg:after:left-36 md:after:left-28 sm:after:left-20 after:left-16">
                                <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center">
                                    <span class="w-6 h-6 bg-green-600 text-center border-2 border-transparent rounded-full flex justify-center items-center mx-auto mb-1 text-base font-bold text-white lg:w-8 lg:h-8">1</span> Order Placed
                                    <span class="text-green-600 text-base font-normal text-center">Feb 20th, 2024</span>
                                </div>
                                </li>
                                <li class="flex w-full relative justify-center text-gray-500 text-base font-semibold after:content-['']  after:w-full after:h-0.5 after:bg-gray-300 after:inline-block after:absolute lg:after:top-4 after:top-3 xl:after:left-40 lg:after:left-36 md:after:left-28 sm:after:left-20 after:left-16">
                                <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center">
                                    <span class="w-6 h-6 bg-gray-400 text-center border-2 border-transparent rounded-full flex justify-center items-center mx-auto mb-1 text-base font-bold text-white lg:w-8 lg:h-8">2</span> Order Packed
                                    <span class="text-gray-500 text-base font-normal text-center">Feb 20th, 2024</span>
                                </div>
                                </li>
                                <li class="flex w-full relative justify-center text-gray-500 text-base font-semibold after:content-['']  after:w-full after:h-0.5 after:bg-gray-300 after:inline-block after:absolute lg:after:top-4 after:top-3 xl:after:left-40 lg:after:left-36 md:after:left-28 sm:after:left-20 after:left-16">
                                    <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center">
                                        <span class="w-6 h-6 bg-gray-400 text-center border-2 border-transparent rounded-full flex justify-center items-center mx-auto mb-1 text-base font-bold text-white lg:w-8 lg:h-8">3</span> In Translt
                                        <span class="text-gray-500 text-base font-normal text-center">Feb 25th, 2024</span>
                                    </div>
                                    </li>
                                <li class="flex w-full relative justify-center text-gray-500 text-base font-semibold">
                                    <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center">
                                        <span class="w-6 h-6 bg-gray-400 text-center border-2 border-transparent rounded-full flex justify-center items-center mx-auto mb-1 text-base font-bold text-white lg:w-8 lg:h-8">4</span> Out for Delivery
                                        <span class="text-gray-500 text-base font-normal text-center">Feb 27th, 2024 </span>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="w-full flex-col justify-start items-start gap-10 flex">
                    <h3 class="text-gray-900 text-2xl font-semibold font-manrope leading-9">Items from the order</h3>
                    <div class="w-full justify-center items-start ">
                        <div class="w-full hidden md:grid grid-cols-2 p-4 bg-gray-50">
                            <span class="text-gray-500 text-base font-normal leading-relaxed">Product</span>
                            <p class="flex items-center justify-between">
                                <span class="w-full max-w-[200px] text-center px-8 text-gray-500 text-base font-normal leading-relaxed "></span>
                                <span class="w-full max-w-[260px] text-center px-8 text-gray-500 text-base font-normal leading-relaxed ">Quantity</span>
                                <span class="w-full max-w-[200px] text-center px-8 text-gray-500 text-base font-normal leading-relaxed ">Price</span>
                            </p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 min-[550px]:gap-6 py-3 border-b border-gray-200 max-sm:max-w-xl max-xl:mx-auto">
                            <div class="flex items-center flex-col min-[550px]:flex-row gap-3 min-[550px]:gap-4 w-full max-sm:justify-center max-sm:max-w-xl max-xl:mx-auto">
                                <div class="w-[120px] h-[120px] img-box bg-gray-50 rounded-xl justify-center items-center inline-flex">
                                    <img src="../img/Products/rtc-chicken-tocino.png" alt="Denim Shirt image" class="xl:w-[75px] object-cover">
                                </div>
                                <div class="pro-data w-full max-w-sm flex-col justify-start items-start gap-2 inline-flex">
                                    <h4 class="w-full text-black text-lg font-medium leading-8 max-[550px]:text-center">Chicken Tocino</h4>
                                    <h5 class="w-full text-gray-500 text-base font-normal leading-relaxed min-[550px]:my-0 my-2 max-[550px]:text-center">Product SKU: FWM513VKT</h5>
                                </div>
                            </div>
                            <div class="w-full flex items-center justify-between flex-col min-[550px]:flex-row w-full max-sm:max-w-xl max-xl:mx-auto gap-2">
                                <h5 class="w-full max-w-[142px] text-center text-black text-lg font-medium leading-relaxed"></h5>
                                <button class="max-w-[160px] flex items-center w-full mx-0 justify-center gap-5">
                                    <input type="text" class="w-12 h-12 focus:outline-none text-gray-900 placeholder-gray-900 text-lg font-medium leading-relaxed px-2.5 bg-white rounded-full border border-gray-200 justify-center items-center flex" placeholder="02">     
                                </button>
                                <h5 class="max-w-[142px] w-full text-center text-black text-lg font-medium leading-relaxed pl-5">₱2,000.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full pt-5 container px-4 mx-auto">
            <table class="w-full table-auto">
                <tbody>
                    <tr>
                        <td class="px-4 py-2 text-left"><iconify-icon icon="mingcute:store-line" class="mr-2"></iconify-icon>Magnolia Chicken</td>
                        <td class=" px-4 py-2 text-right"></td>
                        <td class=" px-4 py-2 text-right text-right text-xl font-medium ">Total</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="border px-4 py-2 text-right text-right text-xl font-medium ">Subtotal: 1 items</td>
                        <td class="border px-4 py-2 text-right text-right text-xl font-medium ">₱2,000.00</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="border px-4 py-2 text-right text-right text-xl font-medium ">Shipping Fee</td>
                        <td class="border px-4 py-2 text-right text-right text-xl font-medium ">₱60.00</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="border px-4 py-2 text-right text-xl font-medium ">Total:</td>
                        <td class="border px-4 py-2 text-right font-semibold text-green-500 text-right text-xl font-medium ">₱2,060.00</td>
                    </tr>
                </tbody>
            </table>        
        </div>
    </section>
                                        
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
</body>

  