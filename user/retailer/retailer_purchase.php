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
<body class="flex flex-col min-h-screen">
    <?php
    session_start();
    if (!isset($_SESSION['retailer_id'])) {
        header("Location: login.php"); // Redirect to login if no retailer is logged in
        exit;
    }
    
    $retailer_id = $_SESSION['retailer_id'];
        $page_title = 'Dashboard';
        require_once '../../includes/retailer_topnav.php';
    ?>
    
    <section class="container px-4 mx-auto mt-12">
    <div class="container flex px-4 mx-auto">
        <div class="flex-shrink-0 mr-4">
        <img src="../../resources/img/avatar.png.jpeg" alt="Profile Picture" class="w-8 h-8 mr-2 rounded-full">
        </div>
        <div>
            <p class="font-semibold text-gray-900">Micheal Jordan</p>
            
            <p class="text-xl font-medium text-green-500">My Purchases Status</p>
        </div>
    </div>
    <hr class="my-4 border-gray-200">
    </section>
    
    <section class="container relative px-4 pb-24 mx-auto">
        <div class="px-4 mx-auto md:px-5 lg:px-5">
            <div class="inline-flex flex-col items-center justify-start w-full gap-10">
                <div class="flex flex-col items-center justify-start w-full gap-4">
                    <h2 class="w-full text-3xl font-bold leading-normal text-center text-black font-manrope">Order Tracking</h2>
                </div>
                <div class="flex flex-col items-start justify-start w-full gap-10">
                    <div class="flex flex-col items-center justify-between w-full gap-3 sm:flex-row">
                        <h3 class="text-2xl font-semibold leading-9 text-gray-900 font-manrope">Order Details</h3>
                    </div>
                    <div class="flex flex-wrap items-center justify-center w-full gap-10 py-6 border-t border-b border-gray-100 md:justify-between md:items-start md:gap-8">
                        
                        <div class="inline-flex flex-col items-start justify-start gap-3">
                            <h6 class="text-base font-normal leading-relaxed text-gray-500">Order Placed</h6>
                            <h4 class="text-xl font-semibold leading-8 text-black">Feb 20, 2024</h4>
                        </div>
                        <div class="inline-flex flex-col items-start justify-start gap-3">
                            <h6 class="text-base font-normal leading-relaxed text-gray-500">To be delivered</h6>
                            <h4 class="text-xl font-semibold leading-8 text-black">Feb 27, 2024</h4>
                        </div>
                        <div class="inline-flex flex-col items-start justify-start gap-3">
                            <h6 class="text-base font-normal leading-relaxed text-gray-500">No of Items</h6>
                            <h4 class="text-xl font-semibold leading-8 text-black">1 items</h4>
                        </div>
                        <div class="inline-flex flex-col items-start justify-start gap-3">
                            <h6 class="text-base font-normal leading-relaxed text-gray-500">Status</h6>
                            <h4 class="text-xl font-semibold leading-8 text-yellow-500">Waiting for Confirmation</h4>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start justify-start w-full gap-10">
                    <div class="flex flex-col items-start justify-between w-full gap-3 sm:flex-row">
                        <h3 class="text-2xl font-semibold leading-9 text-gray-900 font-manrope">Order Tracking</h3>
                        <h3 class="text-2xl font-semibold leading-9 text-right text-gray-600 font-manrope">Order ID: 340909EVJ4XVY</h3>
                    </div>
                    <div class="flex flex-col items-start justify-start w-full border border-gray-200 py-9 rounded-xl">
                        <div class="flex flex-col items-start justify-center w-full gap-8 sm:items-center">
                            <ol class="flex items-start w-full gap-5 sm:items-center sm:gap-0">
                                <li class="flex w-full relative justify-center text-green-600 text-base font-semibold after:content-['']  after:w-full after:h-0.5 after:bg-green-600 after:inline-block after:absolute lg:after:top-4 after:top-3 xl:after:left-40 lg:after:left-36 md:after:left-28 sm:after:left-20 after:left-16">
                                <div class="z-10 flex flex-col items-center block text-center sm:whitespace-nowrap">
                                    <span class="flex items-center justify-center w-6 h-6 mx-auto mb-1 text-base font-bold text-center text-white bg-green-600 border-2 border-transparent rounded-full lg:w-8 lg:h-8">1</span> Order Placed
                                    <span class="text-base font-normal text-center text-green-600">Feb 20th, 2024</span>
                                </div>
                                </li>
                                <li class="flex w-full relative justify-center text-gray-500 text-base font-semibold after:content-['']  after:w-full after:h-0.5 after:bg-gray-300 after:inline-block after:absolute lg:after:top-4 after:top-3 xl:after:left-40 lg:after:left-36 md:after:left-28 sm:after:left-20 after:left-16">
                                <div class="z-10 flex flex-col items-center block text-center sm:whitespace-nowrap">
                                    <span class="flex items-center justify-center w-6 h-6 mx-auto mb-1 text-base font-bold text-center text-white bg-gray-400 border-2 border-transparent rounded-full lg:w-8 lg:h-8">2</span> Order Packed
                                    <span class="text-base font-normal text-center text-gray-500">Feb 20th, 2024</span>
                                </div>
                                </li>
                                <li class="flex w-full relative justify-center text-gray-500 text-base font-semibold after:content-['']  after:w-full after:h-0.5 after:bg-gray-300 after:inline-block after:absolute lg:after:top-4 after:top-3 xl:after:left-40 lg:after:left-36 md:after:left-28 sm:after:left-20 after:left-16">
                                    <div class="z-10 flex flex-col items-center block text-center sm:whitespace-nowrap">
                                        <span class="flex items-center justify-center w-6 h-6 mx-auto mb-1 text-base font-bold text-center text-white bg-gray-400 border-2 border-transparent rounded-full lg:w-8 lg:h-8">3</span> In Translt
                                        <span class="text-base font-normal text-center text-gray-500">Feb 25th, 2024</span>
                                    </div>
                                    </li>
                                <li class="relative flex justify-center w-full text-base font-semibold text-gray-500">
                                    <div class="z-10 flex flex-col items-center block text-center sm:whitespace-nowrap">
                                        <span class="flex items-center justify-center w-6 h-6 mx-auto mb-1 text-base font-bold text-center text-white bg-gray-400 border-2 border-transparent rounded-full lg:w-8 lg:h-8">4</span> Out for Delivery
                                        <span class="text-base font-normal text-center text-gray-500">Feb 27th, 2024 </span>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start justify-start w-full gap-10">
                    <h3 class="text-2xl font-semibold leading-9 text-gray-900 font-manrope">Items from the order</h3>
                    <div class="items-start justify-center w-full ">
                        <div class="hidden w-full grid-cols-2 p-4 md:grid bg-gray-50">
                            <span class="text-base font-normal leading-relaxed text-gray-500">Product</span>
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
                                <div class="inline-flex flex-col items-start justify-start w-full max-w-sm gap-2 pro-data">
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
        <div class="container w-full px-4 pt-5 mx-auto">
            <table class="w-full table-auto">
                <tbody>
                    <tr>
                        <td class="px-4 py-2 text-left"><iconify-icon icon="mingcute:store-line" class="mr-2"></iconify-icon>Magnolia Chicken</td>
                        <td class="px-4 py-2 text-right "></td>
                        <td class="px-4 py-2 text-xl font-medium text-right ">Total</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="px-4 py-2 text-xl font-medium text-right border ">Subtotal: 1 items</td>
                        <td class="px-4 py-2 text-xl font-medium text-right border ">₱2,000.00</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="px-4 py-2 text-xl font-medium text-right border ">Shipping Fee</td>
                        <td class="px-4 py-2 text-xl font-medium text-right border ">₱60.00</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="px-4 py-2 text-xl font-medium text-right border ">Total:</td>
                        <td class="px-4 py-2 text-xl font-medium font-semibold text-right text-green-500 border ">₱2,060.00</td>
                    </tr>
                </tbody>
            </table>        
        </div>
    </section>
                                        
    <?php
        require_once '../../includes/retailer_footer.php';
    ?>  
</body>

  