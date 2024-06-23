<?php
if (isset($_GET['delete_brands'])) {
    $delete_id = $_GET['delete_brands'];
    var_dump($delete_id);

    // delete query

    $delete_query = "DELETE from `brands` where brands_id=$delete_id";
    $result = mysqli_query($conn, $delete_query);
    if ($result) {
        echo "<script>alert('Delete successfully'); window.location.href='./index.php?view_brands';</script>";
    }
}
