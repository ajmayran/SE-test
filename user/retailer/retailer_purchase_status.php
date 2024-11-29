<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../src/output.css">
    <link rel="stylesheet" href="../../src/user_dash.css">
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
</head>
<body class="min-h-screen flex flex-col">
    <?php
        $page_title = 'Dashboard';
        require_once '../../includes/retailer_topnav_2.php';
    ?>
    
    <section class="mt-12 container px-4 mx-auto">
    <div class="flex container px-4 mx-auto">
        <div class="flex-shrink-0 mr-4">
            <img src="../../resources/img/avatar.png.jpeg" alt="Profile Picture" class="w-8 h-8 mr-2 rounded-full">
        </div>
        <div>
            <p class="text-gray-900 font-semibold">Micheal Jordan</p>
            
            <p class="text-green-500 text-xl font-medium">My Purchases</p>
        </div>
    </div>
    <hr class="my-4 border-gray-200">
    </section>
    
    <?php
        require_once '../../includes/retailer_purchase_status.php';
    ?>            

    <?php
        require_once '../../includes/retailer_footer.php';
    ?>  
   
</body>

  