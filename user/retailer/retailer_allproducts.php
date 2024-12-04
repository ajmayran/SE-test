<?php
session_start();
if (isset($_SESSION['success_message'])) {
    $success_message = $_SESSION['success_message'];
    unset($_SESSION['success_message']); // Clear the message after showing
}

if (isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']); // Clear the message after showing
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../../src/output.css">
    <link rel="stylesheet" href="../../src/user_dash.css">
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
</head>
<body>
    <?php
        $page_title = 'Dashboard';
        require_once '../../includes/retailer_topnav.php';
    ?>
   <section class="py-10" id="category">
        <div class="container px-4 mx-auto">
            <h2 class="mb-10 text-2xl font-bold text-gray-800">Categories</h2>
            <ul class="container flex mx-auto mb-5 border-b border-gray-200 tab-list ">
                <li class="flex-1 py-5 mx-2 text-lg font-bold text-center text-white bg-gray-500 rounded-lg cursor-pointer tab-item hover:bg-gray-200">All Products</li>
                <li class="flex-1 py-5 mx-2 text-lg font-bold text-center text-white bg-blue-500 rounded-lg cursor-pointer tab-item hover:bg-gray-200">Milks and Dairies</li>
                <li class="flex-1 py-5 mx-2 text-lg font-bold text-center text-white bg-yellow-400 rounded-lg cursor-pointer tab-item hover:bg-gray-200">Wines & Alcohol</li>
                <li class="flex-1 py-5 mx-2 text-lg font-bold text-center text-white bg-red-500 rounded-lg cursor-pointer tab-item hover:bg-gray-200">Soft Drinks</li>
                <li class="flex-1 py-5 mx-2 text-lg font-bold text-center text-white bg-purple-500 rounded-lg cursor-pointer tab-item hover:bg-gray-200">Toiletries</li>
                <li class="flex-1 py-5 mx-2 text-lg font-bold text-center text-white bg-green-500 rounded-lg cursor-pointer tab-item hover:bg-gray-200">Ready To Cook Foods</li>
            </ul>
        </div>
    </section>

    <div class="container h-auto mx-auto tabsrounded-lg">
       <div class="p-4">
         <div class="tab-pane">
         <h2 class="text-2xl font-bold text-gray-800">All Products</h2>
            <div class="grid grid-cols-1 gap-4 py-10 md:grid-cols-5">
            <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-chicken-tocino.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Chicken Tocino Templados</h3>
                        <p class="text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/Chicken-lumpia-shanghai-mix.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Chicken lumpia shanghai mix</h3>
                        <p class="text-gray-500">By NestFood</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-cheesy-chicken-fingers.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Cheesy Chicken Fingers</h3>
                        <p class="text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-pepper-steak.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Pepper Steak</h3>
                        <p class="text-gray-500">By NestFood</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-mideterranian.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">mideterranian</h3>
                        <p class="text-gray-500">By NestFood</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/softdrinks/f3n.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">F3N Strawberry 24x500ml</h3>
                        <p class="text-gray-500">By Boss Jim Grovery</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,447.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/softdrinks/yeos.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Yeos Sugar Cane Drink</h3>
                        <p class="text-gray-500">By Boss Jim Grovery</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,944.00</span>
                    </div>
                </a>  
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/softdrinks/coke_can.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Coca-Cola in Can 32ml</h3>
                        <p class="text-gray-500">By Glenmark</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱936.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/softdrinks/coke_bottle.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Coca-Cola Bottled 32ml</h3>
                        <p class="text-gray-500">By Glenmark</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱414.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/softdrinks/100plus.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">100 PLUS Zero Sugar</h3>
                        <p class="text-gray-500">By Boss Jim Grovery</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱2,070.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-chicken-siomai.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Chicken Siomai</h3>
                        <p class="text-gray-500">By NestFood</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-spicy-wings.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Spicy Wings</h3>
                        <p class="text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-oriental-wings.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Oriental Wings</h3>
                        <p class="text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-chicken-tapa.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Chicken Tapa</h3>
                        <p class="text-gray-500">By NestFood</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                  <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-spicy-wings.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Spicy Wings</h3>
                        <p class="text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
              <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/krem_top_5g.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Krem-Top Coffee Creamer 24x5g</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱840.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/krem_top_80g.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Krem-Top Coffee Creamer 80g</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱840.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/krem_top_170g.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Krem-Top Coffee Creamer 170g</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱2,070.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/krem_top_250g.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Krem-Top Coffee Creamer 250g</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,447.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/krem_top_450g.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Krem-Top Coffee Creamer 450g</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,944.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/condensada_168ml.jpg" alt="Product Image" class="mb-4">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Alaska Condensada Sweetened Creamer 168ml</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,848.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/condensada_300ml.jpg" alt="Product Image" class="mb-4">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Alaska Condensada Sweetened Creamer 300ml</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱2,736.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/condensada_560ml.jpg" alt="Product Image" class="mb-4">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Alaska Condensada Sweetened Creamer 560ml</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: 1,416.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/condensada_1.27kg.jpg" alt="Product Image" class="mb-4">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Alaska Condensada Sweetened Creamer 1.27kg</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,296.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/condensada_melon300ml.jpg" alt="Product Image" class="mb-4">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Alaska Condensada Melon</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱2,256.00</span>
                    </div>
                </a>     
        </div>
        </div>

         <div class="hidden tab-pane">
         <h2 class="text-2xl font-bold text-gray-800">Milks and Dairies</h2>
         <div class="grid grid-cols-1 gap-4 py-10 md:grid-cols-5">
              <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/rdm_185ml.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Alaska Fortified Ready To Drink Milk 185ml</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱936.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/rdm_choco120ml.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Alaska Choco Ready To Drink Milk 110ml</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱414.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/rdm_choco185ml.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Alaska Choco Ready To Drink Milk 185ml</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱2,070.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/rdm_milky236ml.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Alaska Milky Ready To Drink Milk 236ml</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,447.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/rdm_milky110ml.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Alaska Milky Ready To Drink Milk 110ml</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,944.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/condensada_168ml.jpg" alt="Product Image" class="mb-4">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Alaska Condensada Sweetened Creamer 168ml</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,848.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/condensada_300ml.jpg" alt="Product Image" class="mb-4">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Alaska Condensada Sweetened Creamer 300ml</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱2,736.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/condensada_560ml.jpg" alt="Product Image" class="mb-4">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Alaska Condensada Sweetened Creamer 560ml</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: 1,416.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/condensada_1.27kg.jpg" alt="Product Image" class="mb-4">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Alaska Condensada Sweetened Creamer 1.27kg</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,296.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md">
                    <div class="flex justify-center">
                        <img src="../../resources/img/alaska_products/condensada_melon300ml.jpg" alt="Product Image" class="mb-4">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Alaska Condensada Melon</h3>
                        <p class="text-gray-500">By Jacob Trading</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱2,256.00</span>
                    </div>
                </a>     
            </div>
         </div>

         <div class="hidden tab-pane">
         <h2 class="text-2xl font-bold text-gray-800">Wines & Alcohol</h2>
         </div>

         <div class="hidden tab-pane">
         <h2 class="text-2xl font-bold text-gray-800">Soft Drinks</h2>
         <h2 class="text-2xl font-bold text-gray-800">Soft Drinks</h2>
         <div class="grid grid-cols-1 gap-4 py-10 md:grid-cols-5">
              <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/softdrinks/coke_can.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Coca-Cola in Can 32ml</h3>
                        <p class="text-gray-500">By Glenmark</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱936.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/softdrinks/coke_bottle.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Coca-Cola Bottled 32ml</h3>
                        <p class="text-gray-500">By Glenmark</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱414.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/softdrinks/100plus.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">100 PLUS Zero Sugar</h3>
                        <p class="text-gray-500">By Boss Jim Grovery</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱2,070.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/softdrinks/f3n.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">F3N Strawberry 24x500ml</h3>
                        <p class="text-gray-500">By Boss Jim Grovery</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,447.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/softdrinks/yeos.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Yeos Sugar Cane Drink</h3>
                        <p class="text-gray-500">By Boss Jim Grovery</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,944.00</span>
                    </div>
                </a>    
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/softdrinks/f3n.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">F3N Strawberry 24x500ml</h3>
                        <p class="text-gray-500">By Boss Jim Grovery</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,447.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/softdrinks/yeos.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Yeos Sugar Cane Drink</h3>
                        <p class="text-gray-500">By Boss Jim Grovery</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,944.00</span>
                    </div>
                </a>  
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/softdrinks/coke_can.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Coca-Cola in Can 32ml</h3>
                        <p class="text-gray-500">By Glenmark</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱936.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/softdrinks/coke_bottle.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Coca-Cola Bottled 32ml</h3>
                        <p class="text-gray-500">By Glenmark</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱414.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/softdrinks/100plus.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">100 PLUS Zero Sugar</h3>
                        <p class="text-gray-500">By Boss Jim Grovery</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱2,070.00</span>
                    </div>
                </a>
            </div>
         </div>

         <div class="hidden tab-pane">
         <h2 class="text-2xl font-bold text-gray-800">Toiletries</h2>
         <div class="grid grid-cols-1 gap-4 py-10 md:grid-cols-5">
              <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/shampoo/pal1.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Palmolive Naturals Intesive Moisture Coconut Cream</h3>
                        <p class="text-gray-500">By Primus Ventures</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱936.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/shampoo/pal2.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Palmolive Naturals Ultra Smooth Aloe Vera</h3>
                        <p class="text-gray-500">By Primus Ventures</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱414.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/shampoo/pal3.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Palmolive Naturals Coconut</h3>
                        <p class="text-gray-500">By Primus Ventures</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱2,070.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/shampoo/pal4.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Palmolive Naturals Aloe Vera</h3>
                        <p class="text-gray-500">By Primus Ventures</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,447.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/shampoo/pal5.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Palmolive Naturals Anti-dandruff + Scalp health</h3>
                        <p class="text-gray-500">By Primus Ventures</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,944.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/shampoo/pal4.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Palmolive Naturals Aloe Vera</h3>
                        <p class="text-gray-500">By Primus Ventures</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,447.00</span>
                    </div>
                </a>

                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/shampoo/pal5.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Palmolive Naturals Anti-dandruff + Scalp health</h3>
                        <p class="text-gray-500">By Primus Ventures</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱1,944.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/shampoo/pal1.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Palmolive Naturals Intesive Moisture Coconut Cream</h3>
                        <p class="text-gray-500">By Primus Ventures</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱936.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/shampoo/pal2.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Palmolive Naturals Ultra Smooth Aloe Vera</h3>
                        <p class="text-gray-500">By Primus Ventures</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱414.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/shampoo/pal3.jpg" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Palmolive Naturals Coconut</h3>
                        <p class="text-gray-500">By Primus Ventures</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">Per Case: ₱2,070.00</span>
                    </div>
                </a>
            </div>
         </div>

         <div class="hidden tab-pane">
         <h2 class="text-2xl font-bold text-gray-800">Ready To Cook Foods</h2>
         <div class="grid grid-cols-1 gap-4 py-10 md:grid-cols-5">
         <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-chicken-tocino.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Chicken Tocino Templados</h3>
                        <p class="text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/Chicken-lumpia-shanghai-mix.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Chicken lumpia shanghai mix</h3>
                        <p class="text-gray-500">By NestFood</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-cheesy-chicken-fingers.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Cheesy Chicken Fingers</h3>
                        <p class="text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-pepper-steak.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Pepper Steak</h3>
                        <p class="text-gray-500">By NestFood</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-mideterranian.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">mideterranian</h3>
                        <p class="text-gray-500">By NestFood</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-chicken-siomai.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Chicken Siomai</h3>
                        <p class="text-gray-500">By NestFood</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-spicy-wings.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Spicy Wings</h3>
                        <p class="text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-oriental-wings.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Oriental Wings</h3>
                        <p class="text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-chicken-tapa.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Chicken Tapa</h3>
                        <p class="text-gray-500">By NestFood</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a>
                  <a href="../retailer/single_product_view.php" class="p-6 bg-white border rounded-lg shadow-md ">
                    <div class="flex justify-center">
                        <img src="../../resources/img/Products/rtc-spicy-wings.png" alt="Product Image" class="mb-4 just ">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Spicy Wings</h3>
                        <p class="text-gray-500">By Magnolia</p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-bold">₱250.00</span>
                    </div>
                </a> 
            </div>
         </div>
         
           <script>
               const tabItems = document.querySelectorAll('.tab-item');
               const tabPanes = document.querySelectorAll('.tab-pane');

               // Set the first tab as active by default
               tabItems[0].classList.add('active');
               tabPanes[0].classList.remove('hidden');

               tabItems.forEach((item, index) => {
               item.addEventListener('click', () => {
                   tabItems.forEach(item => item.classList.remove('active'));
                   tabPanes.forEach(pane => pane.classList.add('hidden'));

                   item.classList.add('active');
                   tabPanes[index].classList.remove('hidden');
               });
               });
           </script>
       </div>
    </div>

    <?php
        require_once '../../includes/retailer_footer.php';
    ?>  
<script src="../../js/tailwind/user_dash.js"></script>
</body>
</html>