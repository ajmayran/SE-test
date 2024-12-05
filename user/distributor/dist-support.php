<?php

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
    <title>Distributors Dashboard</title>
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
    </style>
</head>

<body>
<?php include_once '../../includes/dist_side/header.php'; ?>
    <section class="flex items-center justify-center min-h-screen p-10 mx-4 mt-4">
        <div class="w-1/2 p-6 bg-white rounded-lg">
            <header class="flex items-center mb-4 space-x-2">
                <div class="text-3xl text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9V5.25m4.5 3.75V5.25m-9 11.25h13.5m-13.5 0A2.25 2.25 0 004.5 18h15a2.25 2.25 0 002.25-2.25m-17.25 0V8.25C4.5 7.008 5.508 6 6.75 6h10.5c1.242 0 2.25 1.008 2.25 2.25v7.5" />
                    </svg>
                </div>
                <h1 class="text-2xl font-semibold">Support Ticket Form</h1>
            </header>
            <p class="mb-6 text-sm font-light text-gray-600">Please Fill Up the Form <span class="text-red-500">*</span></p>
            <form class="space-y-6">
                <!-- Name Fields -->
                <div class="flex mb-4 space-x-4">
                    <div class="w-1/3">
                        <label for="first_name" class="block text-sm font-medium text-gray-700">First Name <span class="text-red-500">*</span></label>
                        <input type="text" id="first_name" class="block w-full mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent sm:text-sm" required>
                    </div>
                    <div class="w-1/3">
                        <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input type="text" id="last_name" class="block w-full mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent sm:text-sm">
                    </div>
                    <div class="w-1/3">
                        <label for="middle_name" class="block text-sm font-medium text-gray-700">Middle Name (Optional)</label>
                        <input type="text" id="middle_name" class="block w-full mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent sm:text-sm">
                    </div>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email <span class="text-red-500">*</span></label>
                    <input type="email" id="email" class="block w-full mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent sm:text-sm" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">What can we help for today? <span class="text-red-500">*</span></label>
                    <div class="mt-2 space-y-2">
                        <div>
                            <input type="radio" id="general_question" name="help_topic" class="text-green-500 focus:ring-green-500" required>
                            <label for="general_question" class="ml-2 text-gray-700">General question</label>
                        </div>
                        <div>
                            <input type="radio" id="bug_report" name="help_topic" class="text-green-500 focus:ring-green-500">
                            <label for="bug_report" class="ml-2 text-gray-700">Bug Report</label>
                        </div>
                        <div>
                            <input type="radio" id="payment_issues" name="help_topic" class="text-green-500 focus:ring-green-500">
                            <label for="payment_issues" class="ml-2 text-gray-700">Payment Issues</label>
                        </div>
                        <div>
                            <input type="radio" id="account_problems" name="help_topic" class="text-green-500 focus:ring-green-500">
                            <label for="account_problems" class="ml-2 text-gray-700">Account Problems</label>
                        </div>
                        <div>
                            <input type="radio" id="other" name="help_topic" class="text-green-500 focus:ring-green-500">
                            <label for="other" class="ml-2 text-gray-700">Other</label>
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="other_text" class="block text-sm font-medium text-gray-700">If other...</label>
                        <textarea rows="4" cols="50" class="block w-full p-1 mt-1 text-sm font-light border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent sm:text-sm"></textarea>
                    </div>
                </div>

                <!-- User Type -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">What kind of user? <span class="text-red-500">*</span></label>
                    <div class="flex items-center mt-2 space-x-4">
                        <div>
                            <input type="radio" id="customer" name="user_type" class="text-green-500 focus:ring-green-500" required>
                            <label for="retailer" class="ml-2 text-gray-700">Retailer</label>
                        </div>
                        <div>
                            <input type="radio" id="seller" name="user_type" class="text-green-500 focus:ring-green-500">
                            <label for="distributor" class="ml-2 text-gray-700">Distributor</label>
                        </div>
                    </div>
                </div>

                <!-- Issue/Message -->
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Issue / Message</label>
                    <textarea rows="4" cols="50" class="block w-full p-1 mt-1 text-sm font-light border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent sm:text-sm"></textarea>
                </div>

                <!-- File Upload -->
                <label for="file_upload" class="block p-1 text-sm font-medium text-gray-700">Upload a Screenshot</label>
                <div class="mb-4 w-full py-1.5 border rounded-lg">
                    <input type="file" name="file" class="hidden" id="fileInput" accept=".jpeg, .jpg, .png">
                    <label for="fileInput" class="px-4 py-2 font-semibold text-white transition duration-300 bg-green-500 rounded-lg shadow-lg hover:bg-green-600"> Upload File</label><span class="ml-1" id="fileName"></span>
                </div>

                <!-- Buttons -->
                <div class="flex justify-end mb-4 space-x-4">
                    <button type="button" class="px-6 py-2 font-medium text-gray-700 bg-gray-300 rounded-md shadow-sm hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                        Cancel
                    </button>
                    <button type="submit" class="px-6 py-2 font-medium text-white bg-green-500 rounded-md shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </section>
    <?php include_once '../../includes/retailer_footer.php'; ?>
    <script>
        document.getElementById('fileInput').addEventListener('change', function() {
            var fileName = this.value.split('\\').pop();
            document.getElementById('fileName').innerHTML = fileName;
        });
    </script>
</body>

</html>