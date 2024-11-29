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
    <?php
        require_once '../../includes/retailer_footer.php';
    ?>  
    <script>
        function openproductModal() {
            document.getElementById('productModal').classList.remove('hidden');
        }
        function closeproductModal() {
            document.getElementById('productModal').classList.add('hidden');
        }
    </script>
</body>

  