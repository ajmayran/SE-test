<?php

require_once __DIR__ . '../../../classes/distributor.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orderId = isset($_POST['order_id']) ? $_POST['order_id'] : '';
    $action = isset($_POST['action']) ? $_POST['action'] : '';
    $reason = isset($_POST['reason']) ? $_POST['reason'] : '';

    if ($orderId && $action) {
        $distributor = new Order();

        if ($action === 'approve') {
            if ($distributor->approveOrder($orderId)) {
                echo 'success';
            } else {
                echo 'failed';
            }
        } elseif ($action === 'reject') {
            if ($distributor->rejectOrder($orderId, $reason)) {
                echo 'success';
            } else {
                echo 'failed';
            }
        }
    }
}

?>
