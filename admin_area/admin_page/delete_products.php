<?php
if (isset($_GET['delete_products'])) {
    $delete_id = $_GET['delete_products'];


    // delete query

    $delete_query = "DELETE from `products` where product_id=$delete_id";
    $result = mysqli_query($conn, $delete_query);
    if ($result) {
        echo "<script>alert('Delete successfully'); window.location.href='./index.php?view_products';</script>";
    }
}
