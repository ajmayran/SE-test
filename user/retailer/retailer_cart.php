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
        require_once '../../includes/retailer_topnav.php';
    ?>
    <div class="my-10 container mx-auto">
        <a href="./retailer_dash.php" class="text-green-500 hover:text-green-700">
            Go back
        </a>
    </div>
   
    <section class="bg-white py-6 container mx-auto h-screen">
        
        <h2 class="text-2xl font-bold mb-4">Order Cart</h2>
        <table class="w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">Product</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">Quantity</th>
                    <th class="px-4 py-2">Total Weight</th>
                    <th class="px-4 py-2">Total</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">
                        <div class="flex items-center">
                            <input type="checkbox" class="mr-2" />
                            <img src="https://via.placeholder.com/50" alt="Product Image" class="w-16 h-16 mr-4">
                            <div>
                                <p class="font-bold">Chicken Tocino</p>
                                <p class="text-gray-600">1kg Cut-ups Premium Quality Wings</p>
                            </div>
                        </div>
                    </td>
                    <td class="border px-4 py-2">₱200.00</td>
                    <td class="border px-4 py-2">
                        <div class="flex items-center justify-center">
                            <input type="number" value="10" class="w-12 text-center border border-gray-300 rounded px-2 py-1">
                        </div>
                    </td>
                    <td class="border px-4 py-2">10 Kg</td>
                    <td class="border px-4 py-2">₱2,000.00</td>
                    <td class="border px-4 py-2">
                        <div class="flex items-center justify-center">
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded just">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <section class="bg-white p-6 container mx-auto mt-12 shadow-md border">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <input type="checkbox" class="mr-2">
                    <span class="text-gray-700">Select All (1)</span>
                </div>
                <div>
                    <span class="text-green-500 font-semibold">Total Weight: 30 kg</span>
                </div>
                <div>
                    <span class="text-green-500 font-semibold">Total (3 items): ₱6,000.00</span>
                </div>
                <a href="./retailer_checkout.php"><button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Checkout</button></a>
                </div>
        </section>
    </section>
    <?php
        require_once '../../includes/retailer_footer.php';
    ?>  
</body>

  