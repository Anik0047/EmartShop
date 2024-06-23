<?php
if (isset($_GET['delete_user'])) {
    $delete_id = $_GET['delete_user'];
    var_dump($delete_id);

    // delete query

    $delete_query = "DELETE from `user_table` where user_id=$delete_id";
    $result = mysqli_query($conn, $delete_query);
    if ($result) {
        echo "<script>alert('Delete successfully'); window.location.href='./index.php?all_user';</script>";
    }
}
