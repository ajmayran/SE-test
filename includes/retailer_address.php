<body class="bg-gray-100">
  <div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-4">My Addresses</h2>
    <button onclick="openproductModal()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded flex items-center mb-5">
    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3h-3a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
    Add New Address
    </button>
    <div class="bg-white rounded shadow p-4 mb-4">
      <h3 class="text-lg font-bold mb-2">Micheal Jordan (+63) 997 945 1947</h3>
      <p>119 Cabato Road</p>
      <p>Tetuan, Zamboanga City, Zamboanga Del Sur, Mindanao, 7000</p>
      <div class="flex justify-between mt-2">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
        <button class="border border-green-500 font-bold text-green-500 py-2 px-4 rounded">Set as default</button>
      </div>
    </div>

    <div class="bg-white rounded shadow p-4">
      <h3 class="text-lg font-bold mb-2">Micheal Jordan Jr (+63) 904 677 1181</h3>
      <p>Ortega Street & Don Mc Enriquez Drive</p>
      <p>Tetuan, Zamboanga City, Zamboanga Del Sur, Mindanao, 7000</p>
      <div class="flex justify-between mt-2">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Set as default</button>
      </div>
    </div>
  </div>
  
</body>
<div id="productModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-opacity-50 backdrop-blur-sm bg-black ">
        <form class="bg-white p-10 border">
            <h2 class="text-2xl font-bold mb-4">New Address</h2>
        
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full" />
                </div>
            </div>
        
            <div>
                <label class="block text-sm font-medium text-gray-700">Address</label>
                <input type="text" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full" />
            </div>
        
            <div>
                <label class="block text-sm font-medium text-gray-700">Apartment, suite, etc (Optional)</label>
                <input type="text" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full" />
            </div>
        
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Postal Code</label>
                    <input type="text" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">City</label>
                    <input type="text" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full" />
                </div>
            </div>
        
            <div>
                <label class="block text-sm font-medium text-gray-700">Province</label>
                <select class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full">
                    <option value="">Select a Province</option>
                    <option value="1">Province 1</option>
                    <option value="2">Province 2</option>
                    </select>
            </div>
        
            <div>
                <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="tel" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full" />
            </div>
        
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4 w-full">Submit</button>
        </form>
    </div>
   
<script>
     function openproductModal() {
            document.getElementById('productModal').classList.remove('hidden');
        }
        function closeproductModal() {
            document.getElementById('productModal').classList.add('hidden');
        }

        function openorderConfirmationModal() {
            document.getElementById('orderConfirmationModal').classList.remove('hidden');
        }
        function closeorderConfirmationModal() {
            document.getElementById('orderConfirmationModal').classList.add('hidden');
        }
</script>
