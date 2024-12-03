

<body>
    <div class="">
    <h1 class="mb-6 text-2xl font-bold">Manage Profile</h1>

        <div class="flex justify-center mt-6">
        <div class="flex flex-col items-center">
            <img class="w-24 h-24 rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture">
            <label for="imageUpload" class="px-4 py-2 mt-4 font-medium text-white bg-green-600 rounded-md cursor-pointer hover:bg-green-700">
            Select Image
            </label>
            <input type="file" id="imageUpload" accept="image/*" style="display: none;" onchange="updateImageDisplay(this)">
        </div>
        </div>

        <div>
            <form>
                <div class="grid grid-cols-1 gap-4 ">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Username</label>
                        <input type="text" id="username" name="username" value="" class="w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" disabled>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">First Name</label>
                        <input type="text" id="first_name" name="first_name" value="<?php echo isset($_SESSION['retailer_fname']) ? htmlspecialchars($_SESSION['retailer_fname']) : 'Guest'; ?>" class="w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Middle Name</label>
                        <input type="text" id="middle_name" name="middle_name" placeholder="" class="w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-greeen-500 focus:border-green-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input type="text" id="last_name" name="last_name" value="<?php echo isset($_SESSION['retailer_lname']) ? htmlspecialchars($_SESSION['retailer_lname']) : 'Guest'; ?>" class="w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="flex">
                            <input type="email" id="email" name="email" value="<?php echo isset($_SESSION['retailer_email']) ? htmlspecialchars($_SESSION['retailer_email']) : ''; ?>" class="w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                            <button type="button" class="px-4 py-2 ml-2 font-medium text-white bg-green-600 rounded-md hover:bg-green-700">Change</button>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <div class="flex">
                            <input type="tel" id="phone_number" name="phone_number" value="*********14" class="w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                            <button type="button" class="px-4 py-2 ml-2 font-medium text-white bg-green-600 rounded-md hover:bg-green-700">Change</button>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Date of Birth</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" class="w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                    </div>
                </div>

                <div class="flex justify-center mt-6">
                    <button type="submit" class="px-4 py-2 font-medium text-white bg-green-600 rounded-md hover:bg-green-700">Save</button>
                </div>
            </form>
        </div>
    </div>
</body>