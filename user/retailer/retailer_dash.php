<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../../src/output.css">
    <link rel="stylesheet" href="../../src/user_dash.css">
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['retailer_id'])) {
        header('Location:../../login.php');
        exit;
    }

    require_once '../../classes/product.class.php';

    $page_title = 'Dashboard';
    require_once '../../includes/retailer_topnav.php';

    $productObj = new Product();
    // Fetch all products for displaying
    $allProducts = $productObj->fetchAllProducts();
    $distributors = $productObj->fetchDistributors();
    ?>
    <section>
        <div class="relative">
            <!-- Design 1 -->
            <div class="flex flex-row items-center justify-between w-full text-white section active" style="background-color: #D8F1E5;">
                <div class="relative flex flex-col items-center justify-center w-1/2">
                    <img src="../../resources/img/sec1-des1.png" class="object-cover w-[550px] h-[380px] p-2" alt="Background Image">
                    <div class="absolute text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <h1 class="mt-2 ml-2 text-3xl font-bold">Welcome to Our Store</h1>
                        <p class="mb-10 text-sm">Discover amazing products just for you!</p>
                        <a href="#" class="px-6 py-3 text-black bg-white rounded-lg hover:bg-gray-200">Shop Now &rarr;</a>
                    </div>
                </div>
                <div class="w-1/2">
                    <img src="../../resources/img/sec1-des2.png" class="object-cover w-3/4 p-2 h-3/4"></img>
                </div>
            </div>

            <!-- Design 2 -->
            <div class="flex flex-col items-center justify-center hidden w-full min-h-[400px] text-white bg-green-500 section">
                <h1 class="text-5xl font-bold">Exclusive Offers</h1>
                <p class="text-lg">Don't miss out on our limited-time deals!</p>
                <a href="#" class="px-6 py-3 mt-2 text-black bg-white rounded-lg hover:bg-gray-200">Shop Now &rarr;</a>
            </div>

            <!-- Design 3 -->
            <div class="flex flex-col items-center justify-center hidden w-full min-h-[400px] text-white bg-red-500 section">
                <h1 class="text-5xl font-bold">New Arrivals</h1>
                <p class="text-lg">Check out the latest products in our collection!</p>
                <a href="#" class="px-6 py-3 mt-2 text-black bg-white rounded-lg hover:bg-gray-200">Shop Now &rarr;</a>
            </div>

            <!-- Design 4 -->
            <div class="flex flex-col items-center justify-center hidden w-full min-h-[400px] text-white bg-purple-500 section">
                <h1 class="text-5xl font-bold">Customer Favorites</h1>
                <p class="text-lg">See what our customers love the most!</p>
                <a href="#" class="px-6 py-3 mt-2 text-black bg-white rounded-lg hover:bg-gray-200">Shop Now &rarr;</a>
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
            </div>

            <div class="grid grid-cols-1 gap-4 py-10 md:grid-cols-5">
                <?php if (!empty($distributors)): ?>
                    <?php foreach ($distributors as $distributor): ?>
                        <a href="./retailer_distributor.php?id=<?php echo htmlspecialchars($distributor['id']); ?>" class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                            <img class="mb-4" src="<?php echo htmlspecialchars($product['img']); ?>">
                            <h3 class="text-lg font-bold"><?php echo htmlspecialchars($distributor['distributor_name']); ?></h3>
                        </a>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center">No distributors available at the moment.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container px-4 mx-auto">
            <div class="flex items-center justify-between">
                <h2 class="mr-4 text-2xl font-bold">Popular Products</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 py-10 md:grid-cols-2 lg:grid-cols-3">
                <?php if (!empty($allProducts)): ?>
                    <?php foreach ($allProducts as $product): ?>
                        <div class="p-6 bg-white rounded-lg shadow-md">
                            <div class="flex justify-center">
                                <img src="<?php echo htmlspecialchars($product['img']); ?>" alt="Product Image" class="mb-4">
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-bold"><?php echo htmlspecialchars($product['product_name']); ?></h3>
                                <p class="text-gray-500">By <?php echo htmlspecialchars($product['distributor_name']); ?></p>
                                <p class="text-gray-500">Minimum purchase qty: <?php echo htmlspecialchars($product['min_qty']); ?></p>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">₱<?php echo htmlspecialchars($product['price']); ?></span>
                                    <form action="../../user/retailer/add_to_cart.php" method="POST">
                                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                                        <input type="number" name="quantity" value="10" min="10" class="w-16 text-center border rounded">
                                        <button type="submit" class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No products available.</p>
                <?php endif; ?>
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

    <?php
    require_once '../../includes/retailer_footer.php';
    ?>
    <script src="../../js/tailwind/user_dash.js"></script>
</body>

</html>