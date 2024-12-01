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
        
        <section class="p-20 mb-4 bg-yellow-400 rounded-lg container mx-auto">
            <div class="flex justify-between items-center">
                <!-- Left Section: Distributor Info -->
                <div class="flex items-center">
                    <div class="flex items-center justify-center w-24 h-24 bg-white rounded-lg">
                        <img src="../../resources/img/Distrubutors/alaska.png" alt="Distributor Photo" class="w-24 h-24">
                    </div>
                    <div class="ml-4">
                        <h2 class="text-2xl font-bold">Jacob</h2>
                        <p class="text-gray-800 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600 mr-2" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                            Monkey Drive, Guiwan, Zamboanga City 7000
                        </p>
                    </div>
                </div>

                <!-- Right Section: Action Icons -->
                <div class="flex space-x-4">
                    <!-- Report Icon -->
                    <button class="flex items-center justify-center w-10 h-10 bg-white rounded-full shadow hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-500" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/>
                        </svg>
                    </button>

                    <!-- Message Icon -->
                    <button class="flex items-center justify-center w-10 h-10 bg-white rounded-full shadow hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-500" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M21 6.5a2.5 2.5 0 00-2.5-2.5h-13A2.5 2.5 0 003 6.5v10a2.5 2.5 0 002.5 2.5H9v2.2a.8.8 0 001.3.6l4.8-2.8H18.5a2.5 2.5 0 002.5-2.5v-10zm-2 10H14.5a.5.5 0 00-.3.1l-3.2 1.9v-1.5a.5.5 0 00-.5-.5H5.5a.5.5 0 01-.5-.5v-10a.5.5 0 01.5-.5h13a.5.5 0 01.5.5v10a.5.5 0 01-.5.5z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </section>


        <ul class="tab-list flex border-b border-gray-200 container mx-auto mb-5 bg-gray-100">
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">All Products</li>
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">Ready to Drink Milk</li>
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">Powdered Milk</li>
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">Condensada</li>
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">Coffee Creamer</li>
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">Evaporated Milk</li>
        </ul>
        
    <h2 class="text-2xl font-bold container mx-auto mb-5">Distributors Products</h2>

    <div class="tabsrounded-lg container mx-auto  bg-gray-50 h-auto mb-24">
       <div class="p-4">
         <div class="tab-pane">
         <div class="container mx-auto">
         <?php
            require_once '../../includes/retailer_alaska_products.php';
         ?> 
         </div>
         </div>
         <div class="tab-pane hidden">
            
         </div>
         <div class="tab-pane hidden"></div>
         <div class="tab-pane hidden"></div>
         <div class="tab-pane hidden"></div>
         <div class="tab-pane hidden"></div>
         
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
    </main>
    <?php
        require_once '../../includes/retailer_footer.php';
    ?>  
</body>
</html>