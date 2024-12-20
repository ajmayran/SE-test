<?php
require_once '../../classes/account.class.php';

session_start();

$email = $password = '';
$accountObj = new Account();
$loginErr = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = (($_POST['email']));
    $password = ($_POST['password']);

    if ($accountObj->loginDistributor($email, $password)) {
        $data = $accountObj->fetch($email);
        $_SESSION['user'] = $data;
        header('location: ../distributor/dist_dashboard.php');
    } else {
        $loginErr = 'Invalid email/password';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distriution Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../../src/output.css">
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>

    <style>
        body {
            font-family: 'Lexend', sans-serif;
        }

        .login-container {
            transition: transform 1.5s;
            /* Smooth transition for moving the form */
        }

        .move-right {
            transform: translateX(60%);
            /* Move the form to the right */
        }

        .letter {
            display: inline-block;
            opacity: 0;
            transform: translateY(500px) rotateY(20deg) translateZ(0);
            ;
            animation: fadeIn 1.5s forwards;
            font-size: 5em;
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            color: white;
        }

        .platform-text {
            display: block;
            /* Ensure it takes up its own line */
            margin-top: 20px;
            /* Adjust as needed */
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="flex h-screen" >
        <div class="flex justify-center items-center w-2/3" style="background-color: #00bf63;"> 
            <img src="../../resources/img/dist_graphic2.png" alt="Distributor Graphic" class="w-2/3 h-2/3 opacity-20">
        </div>
            <div class="w-1/2 bg-opacity-100 flex justify-start items-center pl-5" style="background-color: #00bf63;">
                <div class="w-1/2 rounded-lg shadow-lg p-8 border" style="background-color: white;">
                    <h2 class="mb-6 text-2xl text-center text-gray-700">
                        <iconify-icon icon="mdi:truck" class="pb-1 mr-2 text-3xl text-green-500 align-middle icon"></iconify-icon>
                        Distributor Login
                    </h2>
                    <form action="" method="POST">
                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm text-gray-700">Email</label>
                            <input type="email" name="email" required class="w-full p-3 text-gray-800 bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent" placeholder="Enter your email">
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block mb-2 text-sm text-gray-700">Password</label>
                            <input type="password" id="password" name="password" required class="w-full p-3 text-gray-800 bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent" placeholder="Enter your password">
                        </div>

                        <div class="mb-4">
                            <input type="submit" value="Login" class="w-full p-3 font-semibold text-white bg-green-500 rounded-md cursor-pointer hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                        </div>
                        <div class="flex justify-between item-center">
                            <a href="#" class="text-sm text-gray-700 hover:text-gray-500">Forgot Password?</a>
                            <a href="./dist_registration.php" class="text-sm text-gray-700 hover:text-gray-500">Register</a>
                        </div>
                    </form>
                    <div class="p-6">
                        <a href="../../auth/login.php" class="">
                            <button class="w-full p-3 text-white transition duration-300 bg-green-500 shadow-lg rounded-3xl hover:bg-green-600">Sign in as Retailer</button>
                        </a>
                    </div>
                </div>
            </div>
</body>

<script>
    const video = document.getElementById('background-video');
    video.playbackRate = 2.5;
    // Move the login form when the text appears
    window.onload = function() {
        const loginContainer = document.querySelector('.login-container');
        loginContainer.classList.add('move-right');

        setTimeout(() => {
            loginContainer.classList.add('move-right');
        }, 8000); // Adjust this value to sync with the text animation duration
    };
</script>

</html>