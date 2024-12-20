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
        $page_title = 'Dashboard';
        require_once '../../includes/retailer_topnav.php';
    ?>

    <div class="container mx-auto my-10">
        <a href="./retailer_dash.php" class="text-green-500 hover:text-green-700">
            Go back
        </a>
    </div>
    <div class="container flex items-center px-4 py-5 mx-auto border border-gray-400">
    <div class="flex justify-center p-5 mx-auto bg-white ">

<div>
  <!-- Main Product Image -->
    <div class="flex justify-center px-5 py-5 m-5">
        <img id="main-product-image" src="../../resources/img/alaska_products/krem_top_5g.jpg" alt="main product img" class="object-cover h-48 rounded-lg"/>
    </div>

    <!-- Product Variants -->
    <div>
        <div class="flex justify-center">
        <label class="flex items-center space-x-2">
            <input type="radio" name="product-variant" class="hidden peer" data-image="../../resources/img/alaska_products/krem_top_5g.jpg" checked/>
            <img src="../../resources/img/alaska_products/krem_top_5g.jpg" alt="product img variant 1" class="object-cover w-24 h-24 p-1 m-2 bg-gray-100 border rounded-lg peer-checked:border-green-500"/>
        </label>
        
        <label class="flex items-center space-x-2">
            <input type="radio" name="product-variant" class="hidden peer" data-image="../../resources/img/alaska_products/krem_top_back.jpg"/>
            <img src="../../resources/img/alaska_products/krem_top_back.jpg" alt="product img variant 2" class="object-cover w-24 h-24 p-1 m-2 border border-gray-300 rounded-lg peer-checked:border-green-500"/>
        </label>

        <label class="flex items-center space-x-2"><input type="radio" name="product-variant" class="hidden peer" data-image="../../resources/img/alaska_products/krem_top_left.jpg"/>
            <img src="../../resources/img/alaska_products/krem_top_left.jpg" alt="product img variant 3" class="object-cover w-24 h-24 p-1 m-2 border border-gray-300 rounded-lg peer-checked:border-green-500"/>
        </label>

        <label class="flex items-center space-x-2"><input type="radio" name="product-variant" class="hidden peer" data-image="../../resources/img/alaska_products/krem_top_right.jpg"/>
            <img src="../../resources/img/alaska_products/krem_top_right.jpg" alt="product img variant 4" class="object-cover w-24 h-24 p-1 m-2 border border-gray-300 rounded-lg peer-checked:border-green-500"/>
        </label>

        <label class="flex items-center space-x-2"><input type="radio" name="product-variant" class="hidden peer" data-image="../../resources/img/alaska_products/krem_top_alaska.jpg"/>
            <img src="../../resources/img/alaska_products/krem_top_alaska.jpg" alt="product img variant 4" class="object-cover w-24 h-24 p-1 m-2 border border-gray-300 rounded-lg peer-checked:border-green-500"/>
        </label>
        </div>
    </div>
</div>

    </div>
            <div class="w-1/3">
                <div class="flex items-center justify-between mb-2">
                    <h2 class="text-lg font-bold">Krem-Top Coffee Creamer</h2>
                </div>
                <p class="w-auto mb-4 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi.</p>
                <span class="mr-2 text-2xl font-md">Size:</span>
                <span class="text-2xl font-bold">24x5g</span>
                <div class="flex items-center mb-4">
                    <span class="mr-2 text-2xl font-md">Per Case:</span>
                    <span class="text-2xl font-bold">₱840</span>
                </div>
                <div class="flex items-center space-x-2">
                    <button class="flex items-center justify-center w-8 h-8 text-white bg-green-500 rounded hover:bg-green-600 focus:outline-none" id="minus-btn">-</button>
                    <input type="number" id="quantity-input" value="1" min="1" class="w-12 text-center border border-gray-300 rounded focus:ring-2 focus:ring-green-500 focus:outline-none"/>
                <button class="flex items-center justify-center w-8 h-8 text-white bg-green-500 rounded hover:bg-green-600 focus:outline-none" id="plus-btn">+</button>
            </div>

            <!-- change variant code
            <div class="flex space-x-2">
            <label class="flex items-center mt-5">
            <input type="radio" name="product-variant" value="Small" class="hidden peer"data-image="../../resources/img/alaska_products/krem_top_5g.jpg" />
            <div class="px-4 py-2 border rounded-lg cursor-pointer peer-checked:border-green-500">24x5g</div>
            </label>

            <label class="flex items-center mt-5">
            <input type="radio" name="product-variant" value="Medium" class="hidden peer" data-image="../../resources/img/alaska_products/krem_top_80g.jpg" 
            />
            <div class="px-4 py-2 border rounded-lg cursor-pointer peer-checked:border-green-500">80g</div>
            </label>

            <label class="flex items-center mt-5">
            <input type="radio" name="product-variant" value="Large" class="hidden peer" data-image="../../resources/img/alaska_products/krem_top_250g.jpg"/>
            <div class="px-4 py-2 border rounded-lg cursor-pointer peer-checked:border-green-500">250g</div>
            </label>

            <label class="flex items-center mt-5"><input type="radio" name="product-variant" value="Extra-large" class="hidden peer" data-image="../../resources/img/alaska_products/krem_top_450g.jpg"/>
            <div class="px-4 py-2 border rounded-lg cursor-pointer peer-checked:border-green-500">450g</div>
            </label>
    </div> -->


    <div class="rounded-lg">
                <button type="" onclick="openproductModal()" class="px-4 py-2 mt-5 mr-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                     Add to Cart
                </button>

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

    <section class="container p-2 px-4 mx-auto mb-4 border border-t-0 border-gray-400">
        <div class="flex justify-between px-10">
            <div class="flex items-center">
                <div class="flex items-center justify-center w-24 h-24 bg-white rounded-lg">
                    <img src="../../resources/img/Distrubutors/alaska.png" alt="Distributor Photo" class="w-24 h-24">
                </div>
                <div class="ml-4">
                    <h2 class="text-2xl font-bold">Jacob</h2>
                    <a href="../retailer/retailer_distributor.php">
                        <button class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">
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
            <div class="grid grid-cols-2 gap-4 py-10 md:grid-cols-4">
               <a href="./single_product_view.php" class="p-6 bg-white rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-chicken-tocino.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Chicken Tocino Templados</h3>
                        <p class="text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱150.85</span>

                    </div>
                </a>
                <a href="./single_product_view.php" class="p-6 bg-white rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/Chicken-lumpia-shanghai-mix.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Chicken lumpia shanghai mix</h3>
                        <p class="text-gray-500">By NestFood</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱150.85</span>

                    </div>
                </a>
                <a href="./single_product_view.php" class="p-6 bg-white rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-cheesy-chicken-fingers.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Cheesy Chicken Fingers</h3>
                        <p class="text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱150.85</span>

                    </div>
                </a>
                <a href="./single_product_view.php" class="p-6 bg-white rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-pepper-steak.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Pepper Steak</h3>
                        <p class="text-gray-500">By NestFood</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱150.85</span>

                    </div>
                </a>
              </div>
        </div>
    </section>
    
    <div id="productModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">
        <div class="relative w-full max-w-sm max-h-screen p-8 overflow-y-auto bg-white rounded-lg">   
            <div class="flex justify-center">
                <div class="p-2 text-white bg-green-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75" />
                    </svg>
                </div>
            </div>
            <p class="flex justify-center text-2xl font-semibold text-green-500">Success!</p>
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
    
        document.getElementById('plus-btn').addEventListener('click', () => {
        const input = document.getElementById('quantity-input');
        input.value = parseInt(input.value) + 1;
        });

        document.getElementById('minus-btn').addEventListener('click', () => {
        const input = document.getElementById('quantity-input');
        if (parseInt(input.value) > 1) {
            input.value = parseInt(input.value) - 1;
        }
        });
        
        // Select all radio buttons
        const variantRadios = document.querySelectorAll('input[name="product-variant"]');

        // Select the main product image element
        const mainImage = document.getElementById('main-product-image');

        // Add a change event listener to all radio buttons
        variantRadios.forEach((radio) => {
        radio.addEventListener('change', (event) => {
            // Get the data-image attribute of the selected variant
            const selectedImage = event.target.getAttribute('data-image');
            // Update the src attribute of the main image
            mainImage.src = selectedImage;
        });
        });
    </script>
</body>

  