<!-- 
<div class="container h-screen mx-auto mb-24 tabsrounded-lg bg-gray-50">
        <ul class="flex border-b border-gray-200 tab-list">
          <li class="flex-1 py-2 text-center cursor-pointer tab-item hover:bg-gray-200">All</li>
          <li class="flex-1 py-2 text-center cursor-pointer tab-item hover:bg-gray-200">To Pay</li>
          <li class="flex-1 py-2 text-center cursor-pointer tab-item hover:bg-gray-200">To Receive</li>
          <li class="flex-1 py-2 text-center cursor-pointer tab-item hover:bg-gray-200">Completed</li>
          <li class="flex-1 py-2 text-center cursor-pointer tab-item hover:bg-gray-200">Cancelled</li>
          <li class="flex-1 py-2 text-center cursor-pointer tab-item hover:bg-gray-200">Return/Refund</li>
        </ul>
        
        <div class="p-4">
          <div class="tab-pane">
            <div class="p-6 mb-24 bg-white rounded-lg shadow-md">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-semibold">Magnolia Chicken</h2>
                    <p class="text-sm font-semibold text-yellow-500">Order Status: Waiting Approval</p>
                </div>
            
                <div class="mb-4 border-b border-gray-200">
                    <div class="flex items-center mb-2">
                        <img src="../../resources/img/Products/rtc-chicken-tocino.png" alt="Product Image" class="w-16 h-16 mr-4">
                        <div>
                            <p class="text-gray-700">Tocino Chicken</p>
                            <p class="text-gray-500">x10</p>
                        </div>
                        <p class="ml-auto text-right text-gray-700">₱2,000.00</p>
                    </div>
                </div>
            
                <div class="flex justify-between mb-4">
                    <p class="text-gray-700">Subtotal Total:</p>
                    <p class="text-gray-700">₱2,000.00</p>
                </div>
                <div class="flex justify-between mb-4">
                    <p class="text-gray-700">Shipping Fee:</p>
                    <p class="text-gray-700">₱60.00</p>
                </div>
    
                <div class="flex justify-between mb-4">
                    <p class="font-bold text-gray-700">Total COD Payment:</p>
                    <p class="font-bold text-gray-700">₱2,060.00</p>
                </div>
            
                <div class="flex justify-end">
                    <button class="px-4 py-2 mr-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">Cancel Order</button>
                    <a href="./retailer_purchase.php"><button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">View Details</button></a>
                </div>
            </div>
          </div>
          <div class="hidden tab-pane"></div>
          <div class="hidden tab-pane"></div>
          <div class="hidden tab-pane"></div>
          <div class="hidden tab-pane"></div>
          <div class="hidden tab-pane"></div>
          
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
    </div>   -->