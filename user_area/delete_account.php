<?php

$user_session_email = $_SESSION['user_email'];

if (isset($_POST['delete_account'])) {
    $delete_query = "DELETE from `user_table` where user_email='$user_session_email'";
    $result = mysqli_query($conn, $delete_query);
    if ($result) {
        session_destroy();
        echo "<script>alert('Account Delete Successfully')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }
}

?>





<div class="mt-48">
    <h1 class="text-3xl text-center font-bold my-10">Delete Account</h1>
    <div>
        <form action="" method="post">
            <div class="w-96 mx-auto text-center">
                <input name="delete_account" type="submit" class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once' value="Delete Account">
            </div>
        </form>
    </div>
</div>