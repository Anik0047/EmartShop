<?php
if (isset($_GET['delete_orders'])) {
    $delete_id = $_GET['delete_orders'];
    var_dump($delete_id);

    // delete query

    $delete_query = "DELETE from `user_orders` where order_id=$delete_id";
    $result = mysqli_query($conn, $delete_query);
    if ($result) {
        echo "<script>alert('Delete successfully'); window.location.href='./index.php?all_orders';</script>";
    }
}
