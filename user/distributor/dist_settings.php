<?php
$currentPage = basename($_SERVER['PHP_SELF']); 

session_start();
if (isset($_SESSION['distributor_id']) && isset($_SESSION['distributor_info'])) {
    // Retrieve distributor details from the session
    $distributorInfo = $_SESSION['distributor_info'];

    $distributorName = htmlspecialchars($distributorInfo['name']);
    $distributorAddress = htmlspecialchars($distributorInfo['address']);
} else {
    // If no session exists, redirect to the login page
    header("Location: dist_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distributors Settings</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../../src/output.css">
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Lexend', sans-serif;
        }

        .sidebar-menu .group.active a {
            background-color: #27AE60;
            color: white;
            border-radius: 5px;
        }

        .sidebar-menu .group.active .icon {
            color: white;
        }

        .scroll-hide::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="bg-gray-100">
<?php include_once '../../includes/dist_side/header.php'; ?>
    <div class="flex">
        <?php include_once '../../includes/dist_side/sidebar.php'; ?>

        <main class="w-3/4 p-8 overflow-y-auto" style="max-height:100vh;">
            <!-- Page Content -->

            <div class="max-w-5xl p-6 mx-auto bg-white rounded-lg shadow-lg">
                <h2 class="pb-2 mb-4 text-xl font-bold border-b-2 border-gray-200">Distributor Information</h2>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    <!-- Form Section -->
                    <div class="md:col-span-2">
                        <div class="mb-4">
                            <label class="block mb-1 font-medium text-gray-700">Distributor Name</label>
                            <input type="text" placeholder="Enter shop name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block mb-1 font-medium text-gray-700">Opening Time</label>
                                <input type="time" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                            </div>
                            <div>
                                <label class="block mb-1 font-medium text-gray-700">Closing Time</label>
                                <input type="time" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-1 font-medium text-gray-700">Distributor Address</label>
                            <input type="text" placeholder="Street Address" class="w-full px-4 py-2 mb-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                            <div class="grid grid-cols-2 gap-4">
                                <input type="text" placeholder="City" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                                <input type="text" placeholder="Postal Code" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                            </div>
                            <input type="text" placeholder="State/Province" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                        </div>
                        <div class="mb-4">
                            <div class="flex items-center">
                                <label class="block mb-1 font-medium text-gray-700">Deliverable Areas</label>
                                <span>
                                    <iconify-icon icon="ant-design:edit-filled" class="ml-2 text-xl text-green-500 cursor-pointer hover:text-green-400" id="editAreasIcon"></iconify-icon>
                                </span>
                            </div>
                            <div class="flex flex-wrap items-center gap-2 mt-4">
                                <span class="px-4 py-2 text-green-700 bg-green-100 rounded-lg">Tetuan</span>
                                <span class="px-4 py-2 text-green-700 bg-green-100 rounded-lg">Tumaga</span>
                                <span class="px-4 py-2 text-green-700 bg-green-100 rounded-lg">Guiwan</span>
                            </div>
                        </div>
                    </div>
                    <!-- Image Upload Section -->
                    <div class="flex flex-col items-center justify-center">
                        <label for="upload-image" class="flex items-center justify-center w-32 h-32 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-100">
                            <iconify-icon icon="akar-icons:plus" class="text-xl"></iconify-icon>
                            <input type="file" id="upload-image" class="hidden" accept="image/*">
                        </label>
                        <button class="px-4 py-2 mt-4 text-white bg-green-500 rounded-lg focus:ring focus:ring-green-200">Upload Image</button>
                    </div>
                </div>
                <!-- Save Button -->
                <div class="flex justify-end mt-6">
                    <button class="px-6 py-2 text-white bg-green-500 rounded-lg focus:ring focus:ring-green-200">Save</button>
                </div>
            </div>

        </main>
    </div>

    <?php include_once '../../includes/retailer_footer.php'; ?> 

    <!-- Modal for Deliverable Areas -->
    <div id="areasModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
        <div class="w-1/3 p-6 bg-white rounded-lg shadow-lg">
            <h2 class="mb-4 text-xl font-normal">Manage Deliverable Areas</h2>
            <div id="areaInputs">
                <div class="flex items-center mb-2">
                    <input type="text" class="px-2 py-1 border border-gray-300 rounded-lg" placeholder="Enter area name">
                    <button class="px-2 py-1 ml-2 text-white bg-red-500 rounded-lg remove-area">Remove</button>
                </div>
            </div>
            <button id="addArea" class="px-4 py-2 mt-4 text-white bg-green-500 rounded-lg">Add Area</button>
            <button id="closeModal" class="px-4 py-2 mt-4 text-black bg-gray-300 rounded-lg">Close</button>
        </div>
    </div>
    <script>
        document.getElementById('editAreasIcon').onclick = function() {
            document.getElementById('areasModal').classList.remove('hidden');
        };

        document.getElementById('closeModal').onclick = function() {
            document.getElementById('areasModal').classList.add('hidden');
        };

        document.getElementById('addArea').onclick = function() {
            const areaInput = document.createElement('div');
            areaInput.className = 'flex items-center mb-2';
            areaInput.innerHTML = `
                <input type="text" class="px-2 py-1 border border-gray-300 rounded-lg" placeholder="Enter area name">
                <button class="px-2 py-1 ml-2 text-white bg-red-500 rounded-lg remove-area">Remove</button>
            `;
            document.getElementById('areaInputs').appendChild(areaInput);

            // Add event listener to the new remove button
            areaInput.querySelector('.remove-area').onclick = function() {
                areaInput.remove();
            };
        };

        // Remove area functionality for existing areas
        document.querySelectorAll('.remove-area').forEach(button => {
            button.onclick = function() {
                button.parentElement.remove();
            };
        });


        //Notif and account 
        document.getElementById('notificationButton').addEventListener('click', function() {
            const dropdown = document.getElementById('notificationDropdown');
            dropdown.classList.toggle('hidden');
        });

        document.getElementById('accountButton').addEventListener('click', function() {
            const popper = document.getElementById('accountPopper');
            popper.classList.toggle('hidden');
        });


        window.addEventListener('click', function(event) {
            const dropdown = document.getElementById('notificationDropdown');
            const popper = document.getElementById('accountPopper');

            if (!event.target.closest('#notificationButton')) {
                dropdown.classList.add('hidden');
            }
            if (!event.target.closest('#accountButton')) {
                popper.classList.add('hidden');
            }
        });
    </script>


</body>

</html>