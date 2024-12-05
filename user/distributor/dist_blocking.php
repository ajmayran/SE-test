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
    <title>Distributors Blocking</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../../src/output.css">
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>

    <style>
        body {
            font-family: 'Lexend', sans-serif;
        }

        .scroll-hide::-webkit-scrollbar {
            display: none;
        }


        .sidebar-menu .group.active a {
            background-color: #27AE60;
            color: white;
            border-radius: 5px;
        }

        .sidebar-menu .group.active .icon {
            color: white;
        }
    </style>
</head>

<body class="bg-gray-100">
<?php include_once '../../includes/dist_side/header.php'; ?>
    <div class="flex">
        <?php include_once '../../includes/dist_side/sidebar.php'; ?>

        <main class="w-3/4 max-h-screen p-8 overflow-y-auto">
            <h1 class="p-3 text-2xl font-semibold bg-green-300 rounded-t-md">Blocking</h1>
            <div class="container mx-auto">
                <div class="min-h-[600px] p-4 overflow-y-auto bg-white rounded-b-lg shadow-md">
                    <h1 class="mb-4 text-lg font-normal">Blocked Users: <span class="ml-1 text-gray-500">3</span></h1>

                    <!-- Blocked User List -->
                    <div class="space-y-4">
                        <!-- Blocked User Item -->
                        <div onclick="showModal('Fei Shang', 'Fraudulent Activity', 'feishang@example.com')"
                            class="flex items-center justify-between w-1/3 p-3 border rounded-md shadow-sm cursor-pointer hover:bg-gray-100">
                            <div class="flex items-center space-x-4">
                                <img src="../../resources/img/Reported/image-2.png" alt="Fei Shang"
                                    class="object-cover w-10 h-10 border rounded-full">
                                <p class="font-light text-gray-800">Fei Shang</p>
                            </div>
                        </div>

                        <div onclick="showModal('Alice Wonderland', 'Blocked for spamming', 'alice@example.com')"
                            class="flex items-center justify-between w-1/3 p-3 border rounded-md shadow-sm cursor-pointer hover:bg-gray-100">
                            <div class="flex items-center space-x-4">
                                <img src="../../resources/img/Reported/image-1.png" alt="Alice Wonderland"
                                    class="object-cover w-10 h-10 border rounded-full">
                                <p class="font-light text-gray-800">Alice Wonderland</p>
                            </div>
                        </div>

                        <div onclick="showModal('Саша Новиков', 'Blocked for Harassment', 'sasha@example.com')"
                            class="flex items-center justify-between w-1/3 p-3 border rounded-md shadow-sm cursor-pointer hover:bg-gray-100">
                            <div class="flex items-center space-x-4">
                                <img src="../../resources/img/Reported/image.png" alt="Саша Новиков"
                                    class="object-cover w-10 h-10 border rounded-full">
                                <p class="font-light text-gray-800">Саша Новиков</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div id="userModal" class="fixed inset-0 flex items-center justify-center hidden bg-black bg-opacity-50">
                    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-lg">
                        <h2 class="mb-4 text-lg font-semibold">User Details</h2>

                        <!-- User Details Table -->
                        <table class="w-full mb-4 text-left border-collapse">
                            <tbody>
                                <tr class="border-b">
                                    <td class="py-2 font-medium text-gray-600">Name</td>
                                    <td id="modalName" class="py-2">-</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="py-2 font-medium text-gray-600">Reason</td>
                                    <td id="modalReason" class="py-2">-</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="py-2 font-medium text-gray-600">Email</td>
                                    <td id="modalEmail" class="py-2">-</td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Unblock Button -->
                        <div class="text-right">
                            <button onclick="hideModal()" class="px-4 py-2 text-gray-600 bg-gray-300 rounded-md hover:bg-gray-400">Cancel</button>
                            <button class="px-4 py-2 text-white bg-red-500 rounded-md hover:bg-red-600">Unblock</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php include_once '../../includes/retailer_footer.php'; ?>
    <script>
        // Show Modal
        function showModal(name, reason, email) {
            document.getElementById('modalName').innerText = name;
            document.getElementById('modalReason').innerText = reason;
            document.getElementById('modalEmail').innerText = email;
            document.getElementById('userModal').classList.remove('hidden');
        }

        // Hide Modal
        function hideModal() {
            document.getElementById('userModal').classList.add('hidden');
        }


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