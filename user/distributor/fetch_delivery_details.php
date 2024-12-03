<?php
require_once __DIR__ . '/../../classes/distributor.class.php';

$orderDetails = [];
$order_id = '';

if (isset($_GET['order_id'])) {
    $order_id = htmlspecialchars($_GET['order_id']);

    // Initialize Distributor class
    $distributor = new Order();

    // Fetch order details
    $orderDetails = $distributor->fetchOrderDetails($order_id);
}

$totalAmount = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="text-gray-800 bg-gray-100">
    <div class="max-w-3xl p-6 mx-auto mt-10 bg-white rounded-lg shadow-md">
        <?php if (!empty($orderDetails)): ?>
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-blue-600">Order Details</h1>
                <p class="text-sm text-gray-600">Order ID: <span class="font-medium"><?php echo $order_id; ?></span></p>
            </div>
            <ul class="divide-y divide-gray-200">
                <?php foreach ($orderDetails as $detail): 
                    $productName = htmlspecialchars($detail['product_name']);
                    $quantity = htmlspecialchars($detail['quantity']);
                    $price = htmlspecialchars($detail['price']);
                    $total = $quantity * $price;
                    $totalAmount += $total;
                ?>
                    <li class="flex items-center justify-between py-4">
                        <div>
                            <h3 class="text-lg font-semibold"><?php echo $productName; ?></h3>
                            <p class="text-sm text-gray-600">Price: <?php echo $price; ?></p>
                            <p class="text-sm text-gray-500">Quantity: <?php echo $quantity; ?></p>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-medium text-gray-800">₱<?php echo number_format($total, 2); ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="flex items-center justify-between mt-6">
                <p class="text-xl font-bold text-green-600">Total Amount:</p>
                <p class="text-xl font-bold text-green-600">₱<?php echo number_format($totalAmount, 2); ?></p>
            </div>
        <?php else: ?>
            <div class="py-10 text-center">
                <p class="text-lg text-gray-600"><?php echo isset($_GET['order_id']) ? 'No details found for this order.' : 'Invalid request.'; ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>
