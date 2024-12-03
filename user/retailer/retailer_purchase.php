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
    <?php
        $page_title = 'Dashboard';
        require_once '../../includes/retailer_topnav.php';
    ?>
    
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
                                    <img src="../../resources/img/Products/rtc-chicken-tocino.png" alt="Denim Shirt image" class="xl:w-[75px] object-cover">
                                </div>
                                <div class="pro-data w-full max-w-sm flex-col justify-start items-start gap-2 inline-flex">
                                    <h4 class="w-full text-black text-lg font-medium leading-8 max-[550px]:text-center">Chicken Tocino</h4>
                                    <h5 class="w-full text-gray-500 text-base font-normal leading-relaxed min-[550px]:my-0 my-2 max-[550px]:text-center">Product SKU: FWM513VKT</h5>
                                </div>
                            </div>
                            <div class="w-full flex items-center justify-between flex-col min-[550px]:flex-row w-full max-sm:max-w-xl max-xl:mx-auto gap-2">
                                <h5 class="w-full max-w-[142px] text-center text-black text-lg font-medium leading-relaxed"></h5>
                                <button class="max-w-[160px] flex items-center w-full mx-0 justify-center gap-5">
                                    <input type="text" class="w-12 h-12 focus:outline-none text-gray-900 placeholder-gray-900 text-lg font-medium leading-relaxed px-2.5 bg-white rounded-full border border-gray-200 justify-center items-center flex" placeholder="10">     
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
                                        
    <?php
        require_once '../../includes/retailer_footer.php';
    ?>  
</body>

  