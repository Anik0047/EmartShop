<?php


// Assuming $conn is your database connection, make sure it is initialized before using

if (isset($_GET['edit_account'])) {
    if (isset($_SESSION['user_email'])) {
        $user_session_email = $_SESSION['user_email'];
        $select_query = "SELECT * FROM `user_table` WHERE user_email='$user_session_email'";
        $result_query = mysqli_query($conn, $select_query);

        if ($result_query) {
            if (mysqli_num_rows($result_query) > 0) {
                $row_fetch = mysqli_fetch_assoc($result_query);
                $user_id = $row_fetch['user_id'];
                $user_name = $row_fetch['user_name'];
                $user_email = $row_fetch['user_email'];
                $user_address = $row_fetch['user_address'];
                $user_phone = $row_fetch['user_phone'];
            } else {
                echo "<script>alert('No user found with this email.')</script>";
            }
        } else {
            echo "<script>alert('Query failed: " . mysqli_error($conn) . "')</script>";
        }
    } else {
        echo "<script>alert('User not logged in.')</script>";
    }
}

if (isset($_POST['user_update'])) {
    $update_id = $user_id;
    $user_name = $_POST['user_name'];
    $user_address = $_POST['user_address'];
    $user_phone = $_POST['user_phone'];
    $user_image = $_FILES['user_image']['name'];
    $user_image_tmp = $_FILES['user_image']['tmp_name'];
    move_uploaded_file($user_image_tmp, "./user_profile_image/$user_image");

    $update_query = "UPDATE `user_table` SET user_name='$user_name', user_image='$user_image', user_address='$user_address', user_phone='$user_phone' WHERE user_id=$update_id";
    $result_update_query = mysqli_query($conn, $update_query);

    if ($result_update_query) {
        echo "<script>alert('Successfully updated')</script>";
        echo "<script>window.open('logout.php','_self')</script>";
    } else {
        echo "<script>alert('Update failed: " . mysqli_error($conn) . "')</script>";
    }
}
?>

<h1 class="text-3xl text-center font-bold my-5">Edit Account</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="w-96 mx-auto">
        <span class="text-lg font-bold">Name</span>
        <input name="user_name" type="text" value="<?php echo isset($user_name) ? $user_name : ''; ?>" class="input input-bordered w-full" />
    </div>
    <!--
    <div class="w-96 mx-auto my-5">
        <span class="text-lg font-bold">Email</span>
        <input name="user_email" type="email" value="<?php echo isset($user_email) ? $user_email : ''; ?>" class="input input-bordered w-full" />
    </div>
    -->
    <div class="w-96 mx-auto">
        <span class="text-lg font-bold">Image</span>
        <input name="user_image" type="file" class="file-input file-input-bordered w-full" />
    </div>
    <div class="w-96 mx-auto my-5">
        <span class="text-lg font-bold">Address</span>
        <input name="user_address" type="text" value="<?php echo isset($user_address) ? $user_address : ''; ?>" class="input input-bordered w-full" />
    </div>
    <div class="w-96 mx-auto mb-10">
        <span class="text-lg font-bold">Contact</span>
        <input name="user_phone" type="text" value="<?php echo isset($user_phone) ? $user_phone : ''; ?>" class="input input-bordered w-full" />
    </div>
    <div class="w-96 mx-auto text-center">
        <input name="user_update" type="submit" class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once' value="Update">
    </div>
</form>