<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../src/output.css">
    <style>
        body {
            font-family: 'Lexend', sans-serif;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen bg-center bg-no-repeat bg-cover" style="background-image: url('../resources/img/Registration\ Stepsbg.png');">
    <div class="w-full max-w-4xl p-8 bg-white border border-gray-100 rounded-lg shadow-lg">
        <h1 class="mb-6 text-2xl font-bold">Distributor Registration</h1>
        <div class="flex items-center mb-6">
            <div class="flex items-center flex-1">
                <div class="w-3 h-3 ml-16 bg-green-500 rounded-full"></div>
                <div class="flex-1 h-0.5 bg-green-500 mx-2"></div>
                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                <div class="flex-1 h-0.5 bg-green-500 mx-2"></div>
                <div class="w-3 h-3 mr-8 bg-green-500 rounded-full"></div>
            </div>
        </div>
        <div class="flex justify-between mb-12">
            <span class="font-medium text-green-500 text-[10px] ml-6">Business Information</span>
            <span class="text-green-500 text-[10px] mr-8">Distributor Information</span>
            <span class="text-green-500 text-[10px] mr-6">Submit</span>
        </div>
        <div class="ml-6 text-center">
            <div class="flex items-center justify-center mb-4">
                <div class="flex items-center justify-center w-16 h-16 bg-green-500 rounded-full">
                    <i class="text-3xl text-white fas fa-check"></i>
                </div>
            </div>
            <p class="mb-2 text-lg font-medium">Submitted Successfully!</p>
            <p class="mb-6 text-gray-600">Wait for the confirmation for 2-3 working days</p>
            <button class="px-6 py-2 text-white bg-green-500 rounded-lg hover:bg-green-600"><a href="../user/distributor/dist_dash.php">Done</a></button>
        </div>
    </div>
</body>
</html>