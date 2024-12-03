<nav class="flex justify-between px-40 py-4 bg-white min-h-20">
        <div class="flex items-center p-4 " >
        <a href="retailer_dash.php"><img src="../../resources/img/Pconnect Logo.png" alt="PConnect Logo" class="h-10 mr-4"></a>
        <a href="retailer_dash.php"><span class="text-2xl font-semibold text-black-700">PConnect</span></a>

        </div>
        <div class="flex items-center p-4">
            <a href="retailer_cart.php" class="mr-4 text-gray-500 hover:text-gray-700">
                <iconify-icon icon="mdi:cart" class="text-3xl"></iconify-icon> 
            </a>
            <div class="relative">
                <button onclick="toggleNotification()" class="mr-4 text-gray-500 hover:text-gray-700">
                    <iconify-icon icon="mdi:notifications" class="text-3xl"></iconify-icon> 
                </button>
                <!-- Notification Popup -->
                <div id="notification-popup" class="absolute right-0 z-10 hidden bg-white rounded-lg shadow-lg w-96 top-12">
                    <div class="p-4 border-b border-gray-200">
                        <h4 class="font-semibold text-gray-800">Notifications</h4>
                    </div>
                    <ul class="overflow-y-auto max-h-48">
                        <li class="p-4 border-b border-gray-200 hover:bg-gray-100">
                            <span class="text-gray-700">Your order #1234 has been shipped!</span>
                        </li>
                        <li class="p-4 border-b border-gray-200 hover:bg-gray-100">
                            <span class="text-gray-700">New message from Distributor A.</span>
                        </li>
                        <li class="p-4 border-b border-gray-200 hover:bg-gray-100">
                            <span class="text-gray-700">Stock update: Product X is back in stock.</span>
                        </li>
                    </ul>
                    <div class="p-4 text-center">
                    <a href="retailer_profile.php?tab=notifications"><button class="px-4 py-2 text-sm font-medium text-white bg-green-500 rounded hover:bg-green-700">
                            View All
                        </button></a> 
                    </div>
                </div>
            </div>


            <a href="retailer_profile.php"><div class="flex items-center cursor-pointer">
                <img src="../../resources/img/avatar.png.jpeg" alt="User Profile" class="w-8 h-8 mr-2 rounded-full profile-button">
                <span class="font-medium text-gray-700"><?php echo isset($_SESSION['retailer_fname']) ? htmlspecialchars($_SESSION['retailer_fname']) : 'Guest'; ?> <?php echo isset($_SESSION['retailer_lname']) ? htmlspecialchars($_SESSION['retailer_lname']) : 'Guest'; ?></span>
            </div></a>
        </div>
    </nav>
    <nav class="flex items-center justify-between bg-white shadow-sm">
        <div class="w-full px-20 py-2 text-white bg-gray-900">
            <ul class="flex justify-center space-x-20 ">
                <li class=" hover:text-green-500"><a href="retailer_dash.php">HOME</a></li>
                <li class="hover:text-green-500"><a href="../retailer/retailer_distributor_page.php">DISTRIBUTORS</a></li>
                <li class="hover:text-green-500"><a href="../retailer/retailer_allproducts.php">PRODUCTS</a></li>

            </ul>
        </div>
    </nav>

    <script>
    function toggleNotification() {
        const popup = document.getElementById('notification-popup');
        popup.classList.toggle('hidden');
    }

    // Close the popup when clicking outside
    document.addEventListener('click', (event) => {
        const popup = document.getElementById('notification-popup');
        const notificationButton = event.target.closest('button[onclick="toggleNotification()"]');
        
        if (!popup.contains(event.target) && !notificationButton) {
            popup.classList.add('hidden');
        }
    });
</script>

    

   