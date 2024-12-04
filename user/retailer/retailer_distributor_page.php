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
        $page_title = 'Dashboard';
        require_once '../../includes/retailer_topnav.php';
    ?>

<section class="py-16 bg-gray-50 mt-10 mb-24">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Our Trusted Distributors</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Distributor 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition duration-300">
                <img src="../../resources/img/Distrubutors/alaska.png" alt="Distributor 1 Logo" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-gray-800">Jacob Trading</h3>
                    <p class="text-gray-600 mt-2">A brief description of the distributor company and what they offer. Providing quality products and excellent service.</p>
                    <div class="mt-4">
                        <p class="font-medium text-gray-700">Location: City, Country</p>
                    </div>
                    <div class="mt-6 flex justify-between items-center">
                        <a href="../retailer/retailer_distributor.php" class="text-blue-500 hover:text-blue-700">View Products</a>
                    </div>
                </div>
            </div>
            <!-- Distributor 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition duration-300">
                <img src="../../resources/img/Distrubutors/ph.png" alt="Distributor 2 Logo" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-gray-800">Zambasulta</h3>
                    <p class="text-gray-600 mt-2">This distributor specializes in delivering the best products to enhance your experience. Always committed to quality.</p>
                    <div class="mt-4">
                        <p class="font-medium text-gray-700">Location: City, Country</p>
                    </div>
                    <div class="mt-6 flex justify-between items-center">
                        <a href="../retailer/retailer_distributor.php" class="text-blue-500 hover:text-blue-700">View Products</a>
                    </div>
                </div>
            </div>
            <!-- Distributor 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition duration-300">
                <img src="../../resources/img/Distrubutors/gm.png" alt="Distributor 3 Logo" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-gray-800">Glenmark Trading</h3>
                    <p class="text-gray-600 mt-2">This distributor offers premium products and services designed to meet your every need in the market.</p>
                    <div class="mt-4">
                        <p class="font-medium text-gray-700">Location: City, Country</p>
                    </div>
                    <div class="mt-6 flex justify-between items-center">
                        <a href="../retailer/retailer_distributor.php" class="text-blue-500 hover:text-blue-700">View Products</a>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition duration-300">
                <img src="../../resources/img/Distrubutors/bass.png" alt="Distributor 3 Logo" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-gray-800">Boss Jim Grocery </h3>
                    <p class="text-gray-600 mt-2">This distributor offers premium products and services designed to meet your every need in the market.</p>
                    <div class="mt-4">
                        <p class="font-medium text-gray-700">Location: City, Country</p>
                    </div>
                    <div class="mt-6 flex justify-between items-center">
                        <a href="../retailer/retailer_distributor.php" class="text-blue-500 hover:text-blue-700">View Products</a>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition duration-300">
                <img src="../../resources/img/Distrubutors/primus.png" alt="Distributor 3 Logo" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-gray-800">Primus</h3>
                    <p class="text-gray-600 mt-2">This distributor offers premium products and services designed to meet your every need in the market.</p>
                    <div class="mt-4">
                        <p class="font-medium text-gray-700">Location: City, Country</p>
                    </div>
                    <div class="mt-6 flex justify-between items-center">
                        <a href="../retailer/retailer_distributor.php" class="text-blue-500 hover:text-blue-700">View Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <?php
        require_once '../../includes/retailer_footer.php';
    ?>  
<script src="../src/tailwind/user_dash.js"></script>
</body>
</html>