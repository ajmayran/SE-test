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
    <title>User Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../../src/output.css">
    <link rel="stylesheet" href="../../src/user_dash.css">
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
</head>

<body>
    <?php

    if (!isset($_SESSION['retailer_id'])) {
        header('Location:../../login.php');
        exit;
    }

    if (isset($_SESSION['success_message'])) {
        $success_message = $_SESSION['success_message'];
        unset($_SESSION['success_message']); // Clear the message after showing
    }

    if (isset($_SESSION['error_message'])) {
        $error_message = $_SESSION['error_message'];
        unset($_SESSION['error_message']); // Clear the message after showing
    }

    require_once '../../classes/product.class.php';

    $page_title = 'Dashboard';
    require_once '../../includes/retailer_topnav.php';

    $productObj = new Product();
    // Fetch all products for displaying
    $allProducts = $productObj->fetchAllProducts();
    $distributors = $productObj->fetchDistributors();
    ?>
    <?php if (!empty($success_message)): ?>
        <div class="p-4 text-green-700 bg-green-300 border border-green-500" id="success-alert">
            <?php echo htmlspecialchars($success_message); ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($error_message)): ?>
        <div class="p-4 mb-4 text-red-700 bg-red-100 border border-red-200 rounded-lg" id="error-alert">
            <?php echo htmlspecialchars($error_message); ?>
        </div>
    <?php endif; ?>
    <?php include_once '../../includes/dash-section.php';    ?>   
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
            <div class="flex flex-wrap gap-4 py-10">
                <?php if (!empty($allProducts)): ?>
                    <?php foreach ($allProducts as $product): ?>
                        <div class="flex flex-col items-center p-6 bg-white rounded-lg shadow-md basis-1/5 w-[20] border bordr-gray-100">
                            <div class="flex justify-center mb-4">
                                <img src="<?php echo htmlspecialchars($product['img']); ?>" alt="Product Image" class="h-32 rounded">
                            </div>
                            <div class="text-left">
                                <h3 class="text-lg font-bold"><?php echo htmlspecialchars($product['product_name']); ?></h3>
                                <p class="text-[12px] text-gray-500">By <?php echo htmlspecialchars($product['distributor_name']); ?></p>           
                                <p class="text-[12px] text-gray-500">Min purchase qty: <?php echo htmlspecialchars($product['min_qty']); ?></p>
                                <p class="text-[12px] text-gray-500">Stocks Remaining: <?php echo htmlspecialchars($product['quantity']); ?></p>   
                                <div class="flex flex-col items-center mt-4">
                                    <span class="text-lg font-bold text-green-600">₱<?php echo htmlspecialchars($product['price']); ?></span>
                                    <form action="../../user/retailer/add_to_cart.php" method="POST" class="flex items-center mt-2">
                                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                                        <input type="number" name="quantity" value="<?php echo htmlspecialchars($product['min_qty']); ?>" min="10" class="w-16 text-center border border-gray-300 rounded focus:ring focus:ring-green-200">
                                        <button type="submit" class="px-4 py-2 ml-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="w-full text-center text-gray-500">No products available.</p>
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
    <script>
        // Automatically hide success alert after 3 seconds
        setTimeout(() => {
            const successAlert = document.getElementById('success-alert');
            if (successAlert) {
                successAlert.style.display = 'none';
            }
        }, 3000);

        // Automatically hide error alert after 3 seconds
        setTimeout(() => {
            const errorAlert = document.getElementById('error-alert');
            if (errorAlert) {
                errorAlert.style.display = 'none';
            }
        }, 3000);
    </script>
</body>

</html>