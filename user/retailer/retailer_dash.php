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
                <a href="../retailer/retailer_distributor.php" class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                  <img src="../../resources/img/Distrubutors/alaska.png" alt="Distributor 1" class="mb-4">
                  <h3 class="text-lg font-bold">Jacob</h3>
                  <p>10 Items</p>
                </a>
                <a href="../retailer/retailer_distributor.php" class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                  <img src="../../resources/img/Distrubutors/ph.png" alt="Distributor 2" class="mb-4">
                  <h3 class="text-lg font-bold">Zambasulta</h3>
                  <p>20 Items</p>
                </a>
                <a href="../retailer/retailer_distributor.php" class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                  <img src="../../resources/img/Distrubutors/gm.png" alt="Distributor 3" class="mb-4">
                  <h3 class="text-lg font-bold">Glenmark Trading</h3>
                  <p>15 Items</p>
                </a>
                <a href="../retailer/retailer_distributor.php" class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                  <img src="../../resources/img/Distrubutors/bass.png" alt="Distributor 4" class="mb-4">
                  <h3 class="text-lg font-bold">Boss Jim Grocery </h3>
                  <p>10 Items</p>
                </a>
                <a href="../retailer/retailer_distributor.php" class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                  <img src="../../resources/img/Distrubutors/primus.png" alt="Distributor 5" class="mb-4">
                  <h3 class="text-lg font-bold">Primus</h3>
                  <p>22 Items</p>
                </a>
              </div>
        </div>
    </section>

    <div class="flex items-center justify-between container mx-auto">
        <h2 class="mr-4 text-2xl font-bold">Popular Products</h2>
    </div>

    <?php
        $page_title = 'Dashboard';
        require_once '../../includes/popular_products.php';
    ?>

    <div class="flex justify-center gap-2 my-6">
        <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium rounded-full px-3 py-1">←</button>
        <button class="bg-green-500 text-white font-medium rounded-full px-3 py-1">1</button>
        <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium rounded-full px-3 py-1">2</button>
        <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium rounded-full px-3 py-1">3</button>
        <span class="text-gray-400">...</span>
        <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium rounded-full px-3 py-1">6</button>
        <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium rounded-full px-3 py-1">→</button>
    </div>
    
    <?php
        require_once '../../includes/retailer_footer.php';
    ?>  
<script src="../../js/tailwind/user_dash.js"></script>
</body>
</html>