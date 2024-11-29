<body>
    <div class="">
    <h1 class="text-2xl font-bold mb-6">Manage Profile</h1>

        <div class="mt-6 flex justify-center">
        <div class="flex flex-col items-center">
            <img class="h-24 w-24 rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture">
            <label for="imageUpload" class="mt-4 px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-medium rounded-md cursor-pointer">
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
                        <input type="text" id="username" name="username" value="mj123091231" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-full" disabled>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">First Name</label>
                        <input type="text" id="first_name" name="first_name" value="Michael" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 w-full">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Middle Name</label>
                        <input type="text" id="middle_name" name="middle_name" placeholder="(Optional)" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-greeen-500 focus:border-green-500 w-full">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input type="text" id="last_name" name="last_name" value="Jordan" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 w-full">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="flex">
                            <input type="email" id="email" name="email" value="mj*****14@gmail.com" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 w-full">
                            <button type="button" class="ml-2 px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-medium rounded-md">Change</button>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <div class="flex">
                            <input type="tel" id="phone_number" name="phone_number" value="*********14" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 w-full">
                            <button type="button" class="ml-2 px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-medium rounded-md">Change</button>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Date of Birth</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 w-full">
                    </div>
                </div>

                <div class="mt-6 flex justify-center">
                    <button type="submit" class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-medium rounded-md">Save</button>
                </div>
            </form>
        </div>
    </div>
</body>