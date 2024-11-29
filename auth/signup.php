<?php
    require_once ("../classes/account.class.php");
    $last_name = $first_name = $middle_name = $email = $password = $permit = $confirmpassword = "";
    $last_nameErr = $first_nameErr = $middle_nameErr = $emailErr = $permitErr = $passwordErr = $confirmpasswordErr = "";
    $AccountObj = new Account();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Clean and assign the input values to variables using the clean_input function to prevent XSS or other malicious input.
    $first_name = ($_POST['first_name']);
    $middle_name = ($_POST['middle_name']);
    $last_name = ($_POST['last_name']);
    $email = ($_POST['email']);
    $permit = ($_POST['permit']);
    $password = ($_POST['password']);
    $confirmpassword = ($_POST['confirmpassword']);

    // Validate the 'code' field: check if it's empty or if the code already exists in the database.
    if(empty($last_name)){
        $last_nameErr = 'Last Name is required';
    }

    // Validate the 'name' field: it must not be empty.
    if(empty($first_name)){
        $first_nameErr = 'First Name is required';
    }

    if(is_numeric($middle_name)){
        $middle_nameErr = 'Should only be letters!';
    }

    // Validate the 'category' field: it must not be empty.
    if(empty($email)){
        $emailErr = 'Email is required';
    }elseif($AccountObj->emailExists($email)){
        $emailErr = 'Email already exist';
    }

    if(empty($password)){
        $passwordErr = 'password is required';
    }

    if(!($confirmpassword == $password)){
        $confirmpasswordErr = ' Confirm password Does not match';
    }
    
    if(empty($last_nameErr) && empty($first_nameErr) && empty($emailErr) && empty($passwordErr) && empty($confirmpasswordErr)){
        // Assign the sanitized inputs to the product object.
        $AccountObj->first_name = $first_name;
        $AccountObj->middle_name = $middle_name;
        $AccountObj->last_name = $last_name;
        $AccountObj->permit = $permit;
        $AccountObj->email = $email;
        $AccountObj->password = $password;
     
        // Attempt to add the product to the database.
        if($AccountObj->add()){
            // If successful, redirect to the product listing page.
            header('Location: ./login.php');
        } else {
            // If an error occurs during insertion, display an error message.
            echo 'Something went wrong when adding new account.';
        }

    }
        
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../src/output.css">
    <style>
        body {
            font-family: 'Lexend', sans-serif;
        }
    </style>

</head>

<body class="flex items-center justify-center min-h-screen bg-center bg-cover" style="background-image: url('../resources/img/loginbg.png');">
    <div class="w-full max-w-xl p-8 mx-4 bg-white rounded-lg shadow-lg">
        <h2 class="mb-5 text-2xl font-semibold text-center">Signup</h2>
        <form method="POST">
            <div class="mb-3">
                <input type="text" name="first_name" placeholder="First Name" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mb-3">
                <input type="text" name="middle_name"placeholder="Middle Name  (Optional)" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mb-3">
                <input type="text" name="last_name"placeholder="Last Name" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mb-3">
                <input type="email" name="email" placeholder="Email Address" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mb-3 w-full py-1.5 border rounded-lg">
                <input type="file" name="permit" class="hidden" id="fileInput" accept=".jpeg, .jpg, .png">
                <label for="fileInput" class="px-4 py-2 font-semibold text-white transition duration-300 bg-green-500 rounded-lg shadow-lg hover:bg-green-600"> Upload File</label><span class="ml-1" id="fileName"></span>
            </div>
            <div class="text-right m-2 text-[8px]">
                <p class="text-gray-400">Any of the following (Business Permit, Mayor's Permit, Barangay Permit) JPG, JPEG, PNG, PDF support. Maximum of 20MB</p>
            </div>

            <div class="mb-3">
                <input type="password" name="password" placeholder="Password" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mb-3">
                <input type="password" name="confirmpassword" placeholder="Confirm Password" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <input type="submit" name="signup" class="w-full p-3 text-white transition duration-300 bg-green-500 shadow-lg rounded-3xl hover:bg-green-600">
            <div class="flex justify-between w-full m-2">
                <p class="text-sm text-left">Already have an account? <a href="login.php" class="text-green-500 transition duration-500 ease-in-out hover:text-green-400">Login</a></p>
                <a href="../user/distributor/dist_registration.php" class="text-sm text-right text-green-500 hover:text-green-400">Register as Distributor &rarr;</a>
            </div>
        </form>

    </div>

</body>
<script>
    document.getElementById('fileInput').addEventListener('change', function() {
      var fileName = this.value.split('\\').pop();
      document.getElementById('fileName').innerHTML = fileName;
    });
  </script>

</html>