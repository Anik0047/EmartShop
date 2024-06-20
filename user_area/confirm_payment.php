<?php
include('../database/connect.php');
session_start();

if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];

    $select_query = "SELECT * FROM `user_orders` WHERE order_id=$order_id";
    $result = mysqli_query($conn, $select_query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row_data = mysqli_fetch_assoc($result);
        $invoice_number = $row_data['invoice_number'];
        $amount_due = $row_data['amount_due'];
    } else {
        echo "<script>alert('Order not found.'); window.location.href='../user_area/user_dashboard.php';</script>";
        exit();
    }
}

if (isset($_POST['confirm_payment'])) {
    $invoice_number = $_POST['invoice_number'];
    $amount = $_POST['amount'];
    if (isset($_POST['payment_mode'])) {
        $payment_mode = $_POST['payment_mode'];
        $insert_query = "INSERT INTO `user_payments` (order_id, invoice_number, amount, payment_mode) VALUES ($order_id, $invoice_number, $amount, '$payment_mode')";
        $result_query = mysqli_query($conn, $insert_query);
        if ($result_query) {
            echo "<script>alert('Successfully completed the payment.'); window.location.href='../user_area/user_dashboard.php';</script>";
        } else {
            echo "<script>alert('Error processing payment. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Please select a payment mode.');</script>";
    }

    $update_orders = "UPDATE `user_orders` set order_status='Complete' where order_id=$order_id";
    $result_order = mysqli_query($conn, $update_orders);
}
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <style>
        @keyframes bounce-once {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .hover\:bounce-once:hover {
            animation: bounce-once 0.5s ease;
        }

        .custom {
            margin-left: 800px;
        }
    </style>
</head>

<body>
    <h1 class="text-3xl font-bold text-center mt-10">
        Confirm Payment
    </h1>

    <div class="w-1/4 mx-auto mt-10">
        <form action="" method="post">
            <input name="invoice_number" type="text" placeholder="Type here" class="input input-bordered w-full mb-10" value="<?php echo $invoice_number ?>" readonly />
            <label for="" class="font-bold">Amount</label>
            <input name="amount" type="text" placeholder="Type here" class="input input-bordered w-full mb-10" value="<?php echo $amount_due ?>" readonly />
            <div class=" mb-10">
                <select name="payment_mode" class="select select-bordered w-full" required>
                    <option disabled selected>Select Payment Mode</option>
                    <option value="Bkash">Bkash</option>
                    <option value="Nogod">Nogod</option>
                    <option value="Cash on Delivery">Cash on Delivery</option>
                </select>
            </div>
            <div class="text-center">
                <input name="confirm_payment" type="submit" class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once' value="Confirm">
            </div>
        </form>
    </div>
</body>

</html>