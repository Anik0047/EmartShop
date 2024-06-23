<?php
if (isset($_GET['delete_payments'])) {
    $delete_id = $_GET['delete_payments'];
    var_dump($delete_id);

    // delete query

    $delete_query = "DELETE from `user_payments` where payment_id=$delete_id";
    $result = mysqli_query($conn, $delete_query);
    if ($result) {
        echo "<script>alert('Delete successfully'); window.location.href='./index.php?all_payment';</script>";
    }
}
