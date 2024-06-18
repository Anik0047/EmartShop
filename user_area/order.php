<?php
include('../database/connect.php');
include('../functions/common_function.php');

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
}

// getting total items and total price of product

$ip_address = getIPAddress();

$total_price = 0;

$cart_query = "SELECT * from `cart_details` where ip_address='$ip_address'";

$cart_result = mysqli_query($conn, $cart_query);

$products_count = mysqli_num_rows($cart_result);

$invoice_number = mt_rand();

$status = "pending";

while ($row_price = mysqli_fetch_array($cart_result)) {

    $product_id = $row_price['product_id'];

    $product_query = "SELECT * from `products` where product_id='$product_id'";

    $product_result = mysqli_query($conn, $product_query);

    while ($row_product_price = mysqli_fetch_array($product_result)) {

        $product_price = array($row_product_price['product_price']);

        $product_values = array_sum($product_price);

        $total_price = $total_price + $product_values;
    }
}


// getting quantity form cart

$get_cart = "SELECT * from `cart_details`";

$cart_details_result = mysqli_query($conn, $get_cart);

$get_item_quantity = mysqli_fetch_array($cart_details_result);

$quantity = $get_item_quantity['quantity'];

if ($quantity == 1) {

    $quantity = 1;

    $subtotal = $total_price;
} else {

    $quantity = $quantity;

    $subtotal = $total_price * $quantity;
}


$insert_orders = "INSERT into `user_orders` (user_id,amount_due,invoice_number,total_products,order_date,order_status) values ($user_id,$subtotal,$invoice_number,$products_count,NOW(),'$status')";

$result_query = mysqli_query($conn, $insert_orders);

if ($result_query) {

    echo "<script>alert('Orders are submitted successfully')</script>";
    echo "<script>window.open('user_dashboard.php','_self')</script>";
}
