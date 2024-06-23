<?php
if (isset($_GET['delete_category'])) {
    $delete_id = $_GET['delete_category'];
    var_dump($delete_id);

    // delete query

    $delete_query = "DELETE from `categories` where category_id=$delete_id";
    $result = mysqli_query($conn, $delete_query);
    if ($result) {
        echo "<script>alert('Delete successfully'); window.location.href='./index.php?view_categories';</script>";
    }
}
