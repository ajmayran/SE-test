<?php
// Assuming you're using session to store retailer_id
session_start();
require_once '../../classes/account.class.php'; // Include your Order class
require_once '../../classes/order.class.php'; // Include your Order class
if (!isset($_SESSION['retailer_id'])) {
    header("Location: login.php"); // Redirect to login if no retailer is logged in
    exit;
}

$retailer_id = $_SESSION['retailer_id'];

// Instantiate the Order class
$orderObj = new Order();

// Fetch the pending orders
$pendingOrders = $orderObj->fetchOrders($retailer_id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../src/output.css">
    <link rel="stylesheet" href="../../src/user_dash.css">
    <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
</head>

<body class="flex flex-col min-h-screen">
    <?php
    $page_title = 'Dashboard';
    require_once '../../includes/retailer_topnav_2.php';
    ?>

    <section class="container px-4 mx-auto mt-12">
        <div class="container flex px-4 mx-auto">
            <div class="flex-shrink-0 mr-4">
                <img src="../../resources/img/avatar.png.jpeg" alt="Profile Picture" class="w-8 h-8 mr-2 rounded-full">
            </div>
            <div>
                <p class="font-semibold text-gray-900"><?php echo isset($_SESSION['retailer_fname']) ? htmlspecialchars($_SESSION['retailer_fname']) : 'Guest'; ?> <?php echo isset($_SESSION['retailer_lname']) ? htmlspecialchars($_SESSION['retailer_lname']) : 'Guest'; ?></p>
                <p class="text-xl font-medium text-green-500">My Purchases</p>
            </div>
        </div>
        <hr class="my-4 border-gray-200">
    </section>

    <div class="container h-screen mx-auto mb-24 bg-gray-50">
        <ul class="flex border-b border-gray-200 tab-list">
            <li class="flex-1 py-2 text-center cursor-pointer tab-item hover:bg-gray-200">All</li>
            <li class="flex-1 py-2 text-center cursor-pointer tab-item hover:bg-gray-200">To Pay</li>
            <li class="flex-1 py-2 text-center cursor-pointer tab-item hover:bg-gray-200">To Receive</li>
            <li class="flex-1 py-2 text-center cursor-pointer tab-item hover:bg-gray-200">Completed</li>
            <li class="flex-1 py-2 text-center cursor-pointer tab-item hover:bg-gray-200">Cancelled</li>
            <li class="flex-1 py-2 text-center cursor-pointer tab-item hover:bg-gray-200">Return/Refund</li>
        </ul>

        <div class="p-4">
            <div class="tab-pane">
                <?php if (count($pendingOrders) > 0): ?>
                    <?php foreach ($pendingOrders as $order): ?>
                        <div class="p-6 mb-24 bg-white rounded-lg shadow-md">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-xl font-semibold"><?php echo $order['product_name']; ?></h2>
                                <p class="text-sm font-semibold text-yellow-500">Order Status: <?php echo $order['status']; ?></p>
                            </div>

                            <div class="mb-4 border-b border-gray-200">
                                <div class="flex items-center mb-2">
                                    <img src="<?php echo $img['image_path'] ?>" alt="Product Image" class="w-16 h-16 mr-4">
                                    <div>
                                        <p class="text-gray-700"><?php echo $order['product_name']; ?></p>
                                        <p class="text-gray-500">x<?php echo $order['quantity']; ?></p>
                                    </div>
                                    <p class="ml-auto text-right text-gray-700">₱<?php echo number_format($order['quantity'] * $order['price'], 2); ?></p>
                                </div>
                            </div>

                            <div class="flex justify-between mb-4">
                                <p class="text-gray-700">Subtotal Total:</p>
                                <p class="text-gray-700">₱<?php echo number_format($order['quantity'] * $order['price'], 2); ?></p>
                            </div>

                            <div class="flex justify-between mb-4">
                                <p class="font-bold text-gray-700">Total COD Payment:</p>
                                <p class="font-bold text-gray-700">₱<?php echo number_format($order['total_amount'], 2); ?></p>
                            </div>

                            <div class="flex justify-end">
                                <button class="px-4 py-2 mr-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">Cancel Order</button>
                                <a href="./retailer_purchase.php"><button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">View Details</button></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center text-gray-500">You have no orders at the moment.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>


</body>
</html>
