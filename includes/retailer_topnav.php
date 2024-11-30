<nav class="flex justify-between py-4 bg-white min-h-20 container mx-auto">
        <div class="flex items-center " >
            <img src="../../resources/img/Pconnect Logo.png" alt="PC Connect Logo" class="h-10 mr-4">
            <span class="text-2xl font-semibold text-black-700">PConnect</span>
            <div class="relative flex px-10">
                <select class="px-3 py-2 ml-64 mr-2 bg-gray-200 border border-gray-300 ">
                    <option value="all">All Categories</option>
                    <option value="all">All Categories</option>
                    <option value="all">All Categories</option>
                </select>
                <input type="text" placeholder="Search for items..." class="flex-1 px-3 py-2 bg-gray-200 border w-full">
                <button class="px-4 py-2 font-bold text-white bg-green-500 hover:bg-green-700">
                    <iconify-icon icon="mdi:search" class="text-lg flex items-center h-6"></iconify-icon> 
                </button>
            </div>
        </div>
        <div class="flex items-center">
            <a href="retailer_cart.php" class="mr-4 text-gray-500 hover:text-gray-700">
                <iconify-icon icon="mdi:cart" class="text-3xl"></iconify-icon> 
            </a>
            <a href="#" class="mr-4 text-gray-500 hover:text-gray-700">
                <iconify-icon icon="mdi:notifications" class="text-3xl"></iconify-icon> 
            </a>

            <a href="retailer_profile.php"><div class="flex items-center cursor-pointer">
                <img src="../../resources/img/avatar.png.jpeg" alt="User Profile" class="w-8 h-8 mr-2 rounded-full profile-button">
                <span class="font-medium text-gray-700">Michael Jordan</span>
            </div></a>
        </div>
    </nav>
    <nav class="flex items-center justify-between bg-white shadow-sm">
        <div class="w-full px-20 py-2 text-white bg-gray-900">
            <ul class="flex justify-center space-x-20 ">
                <li class=" hover:text-green-500 "><a href="retailer_dash.php">HOME</a></li>
                <li class=" hover:text-green-500 "><a href="#">DISTRIBUTORS</a></li>
                <li class=" hover:text-green-500 "><a href="#">PRODUCTS</a></li>
                <li class=" hover:text-green-500 "><a href="#">CATEGORY</a></li>
            </ul>
        </div>
    </nav>
 
    <script>
    document.addEventListener('DOMContentLoaded', () => {
      const dropdownButton = document.querySelector('.dropdown-button');
      const dropdownMenu = document.getElementById('dropdown');

      dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
      });
    });
  </script>
  
    

   