<?php
    require_once '../classes/account.class.php';

    session_start();

    $email = $password = '';
    $accountObj = new Account();
    $loginErr = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = (($_POST['email']));
        $password = ($_POST['password']);

        if($accountObj->login($email, $password)){
            $data = $accountObj->fetch($email);
            $_SESSION['user'] = $data;
            header('location: ../user/retailer/retailer_dash.php');
        }else{
            $loginErr = 'Invalid username/password';
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../src/output.css">
    <script src="../js/tailwind/loader.js"></script>
    <style>
        body {
            font-family: 'Lexend', sans-serif;
        }
        @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
        }
        .spin-animation {
            animation: spin 2s linear infinite;
        }
        
    </style>

</head>

<body class="flex items-center justify-center min-h-screen bg-center bg-cover" style="background-image: url('../resources/img/loginbg.png');">
    <div class="w-1/2 flex justify-start mb-24">
    <img src="../resources/img/retailer_graphic.png" alt="Distributor Graphic" class="w-3/4 h-3/4 opacity-20">
    </div>
    <div class="w-1/2 max-w-lg p-8 mx-4 bg-white rounded-lg shadow-lg border">
        <h2 class="mb-6 text-2xl font-semibold text-center">Login</h2>
        <form method="POST">
            <div class="mb-4">
                <input type="email" name="email" placeholder="Email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="relative mb-4">
                <input type="password" name="password" placeholder="Password" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mb-6 text-right">
                <a href="#" class="text-green-500 hover:text-green-400">Forget Password?</a>
            </div>
            <input type="submit" name="login" value="Login" class="w-full p-3 text-white transition duration-300 bg-green-500 shadow-lg rounded-3xl hover:bg-green-600">
        </form>

        <div class="flex items-center my-6">
            <hr class="flex-grow border-t border-gray-300">
            <span class="mx-4 text-gray-500">OR</span>
            <hr class="flex-grow border-t border-gray-300">
        </div>
        <button type="button" class="flex items-center justify-center w-full p-3 mb-4 text-white transition duration-300 bg-blue-600 shadow-lg rounded-3xl hover:bg-blue-700">
            <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
            Continue with Facebook
        </button>
        <button type="button" class="flex items-center justify-center w-full p-3 text-gray-700 transition duration-300 border border-black border-opacity-25 shadow-lg rounded-3xl hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48">
            <path fill="#ffc107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C12.955 4 4 12.955 4 24s8.955 20 20 20s20-8.955 20-20c0-1.341-.138-2.65-.389-3.917"/>
            <path fill="#ff3d00" d="m6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C16.318 4 9.656 8.337 6.306 14.691"/>
            <path fill="#4caf50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238A11.9 11.9 0 0 1 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44"/>
            <path fill="#1976d2" d="M43.611 20.083H42V20H24v8h11.303a12.04 12.04 0 0 1-4.087 5.571l.003-.002l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917"/>
        </svg>
            <p class="ml-2">Continue with Google</p>
        </button>
        <div class="mt-6 text-center">
            <p class="text-gray-500">Don't have an account? <a href="./signup.php" onclick="handleSignup(event)" class="text-green-500 transition duration-500 ease-in-out hover:text-green-400">Create Account</a></p>
        </div>
        <div class="p-6"><a href="../user/distributor/dist_login.php" class=""><button class="w-full p-3 text-white transition duration-300 bg-green-500 shadow-lg rounded-3xl hover:bg-green-600">Sign in as Distributor</button></a></div>
    </div>
</body>
<script>
    function handleSignup(event) {
        event.preventDefault();
        showLoader();
        setTimeout(() => {
            hideLoader();
            window.location.href = './signup.php';
        }, 3000);
    }

    function handleLogin(event) {
        event.preventDefault();
        showLoader();
        setTimeout(() => {
            hideLoader();
            window.location.href = '../user/retailer/retailer_dash.php';
        }, 3000);
    }
    </script>
</html>