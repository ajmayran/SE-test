
<div class="tabsrounded-lg container mx-auto  bg-gray-50 h-screen mb-24">
        <ul class="tab-list flex border-b border-gray-200">
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">All</li>
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">To Pay</li>
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">To Receive</li>
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">Completed</li>
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">Cancelled</li>
          <li class="tab-item flex-1 text-center py-2 cursor-pointer hover:bg-gray-200">Return/Refund</li>
        </ul>
        
        <div class="p-4">
          <div class="tab-pane">
            <div class="bg-white p-6 rounded-lg shadow-md mb-24">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold">Magnolia Chicken</h2>
                    <p class="text-sm font-semibold text-yellow-500">Order Status: Waiting Approval</p>
                </div>
            
                <div class="border-b border-gray-200 mb-4">
                    <div class="flex items-center mb-2">
                        <img src="../../resources/img/Products/rtc-chicken-tocino.png" alt="Product Image" class="w-16 h-16 mr-4">
                        <div>
                            <p class="text-gray-700">Tocino Chicken</p>
                            <p class="text-gray-500">x10</p>
                        </div>
                        <p class="text-gray-700 text-right ml-auto">₱2,000.00</p>
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
                    <p class="text-gray-700 font-bold">Total COD Payment:</p>
                    <p class="text-gray-700 font-bold">₱2,060.00</p>
                </div>
            
                <div class="flex justify-end">
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">Cancel Order</button>
                    <a href="./retailer_purchase.php"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View Details</button></a>
                </div>
            </div>
          </div>
          <div class="tab-pane hidden"></div>
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