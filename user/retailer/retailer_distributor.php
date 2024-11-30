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
<body class="flex flex-col min-h-screen">
    <?php
        $page_title = 'Dashboard';
        require_once '../../includes/retailer_topnav.php';
    ?>
    <main class="flex-1">
        <div class="mx-20 my-10 container mx-auto">
            <a href="./retailer_dash.php" class="text-green-500 hover:text-green-700">
                Go back
            </a>
        </div>
        <section class="p-20 mx-20 mb-4 bg-yellow-400 rounded-lg container mx-auto">
            <div class="flex justify-between">
                <div class="flex items-center">
                    <div class="flex items-center justify-center w-24 h-24 bg-white rounded-lg">
                        <img src="../../resources/img/Distrubutors/alaska.png" alt="Distributor Photo" class="w-24 h-24">
                    </div>
                    <div class="ml-4">
                        <h2 class="text-2xl font-bold">Jacob</h2>
                        <p class="text-gray-800">Monkey Drive, Guiwan, Zamboanga City 7000</p>
                    </div>
                </div>
                <div class="flex items-center">
                    
                </div>
            </div>
        </section>
        <nav class="p-2 mx-20 bg-gray-100 container mx-auto">
            <ul class="flex justify-between px-10 space-x-2">
                <li><a href="#" class=" hover:text-green-500">All Products</a></li>
                <li><a href="#" class=" hover:text-green-500">etc</a></li>
                <li><a href="#" class=" hover:text-green-500">etc</a></li>
                <li><a href="#" class=" hover:text-green-500">etc</a></li>
                <li><a href="#" class=" hover:text-green-500">etc</a></li>
                <li><a href="#" class=" hover:text-green-500">etc</a></li>
            </ul>
        </nav>

        <section class="py-5 bg-white h-screen">
            <h2 class="text-2xl font-bold container mx-auto">Distributors Products</h2>
            <div class="container mx-auto">
                <div class="grid grid-cols-1 gap-4 py-10 md:grid-cols-5">

                    <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                        <img src="https://via.placeholder.com/150" alt="Distributor 1" class="mb-4">
                        <h3 class="text-lg font-bold">Product Name</h3>
                        <p>10 Items</p>
                    </div>
                    <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                        <img src="https://via.placeholder.com/150" alt="Distributor 2" class="mb-4">
                        <h3 class="text-lg font-bold">Product Name</h3>
                        <p>20 Items</p>
                    </div>
                    <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                        <img src="https://via.placeholder.com/150" alt="Distributor 3" class="mb-4">
                        <h3 class="text-lg font-bold">Product Name</h3>
                        <p>15 Items</p>
                    </div>
                    <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                        <img src="https://via.placeholder.com/150" alt="Distributor 4" class="mb-4">
                        <h3 class="text-lg font-bold">Product Name</h3>
                        <p>10 Items</p>
                    </div>
                    <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                        <img src="https://via.placeholder.com/150" alt="Distributor 5" class="mb-4">
                        <h3 class="text-lg font-bold">Product Name</h3>
                        <p>22 Items</p>
                    </div>
                    <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                        <img src="https://via.placeholder.com/150" alt="Distributor 5" class="mb-4">
                        <h3 class="text-lg font-bold">Product Name</h3>
                        <p>22 Items</p>
                    </div>
                    <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                        <img src="https://via.placeholder.com/150" alt="Distributor 3" class="mb-4">
                        <h3 class="text-lg font-bold">Product Name</h3>
                        <p>15 Items</p>
                    </div>
                    <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                        <img src="https://via.placeholder.com/150" alt="Distributor 4" class="mb-4">
                        <h3 class="text-lg font-bold">Product Name</h3>
                        <p>10 Items</p>
                    </div>
                    <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                        <img src="https://via.placeholder.com/150" alt="Distributor 5" class="mb-4">
                        <h3 class="text-lg font-bold">Product Name</h3>
                        <p>22 Items</p>
                    </div>
                    
                    <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                        <img src="https://via.placeholder.com/150" alt="Distributor 5" class="mb-4">
                        <h3 class="text-lg font-bold">Product Name</h3>
                        <p>22 Items</p>
                    </div>
                </div>
            </div>
        </section>
        
    </main>

    <?php
        require_once '../../includes/retailer_footer.php';
    ?>  
</body>
</html>