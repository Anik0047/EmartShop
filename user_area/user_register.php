<?php
include('../database/connect.php');
include('../functions/common_function.php');
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Include DaisyUI CSS -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <!-- Include custom CSS file -->
    <link rel="stylesheet" href="user_style.css">
    <!-- Include SweetAlert2 CSS for styling the alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>

    </style>
</head>

<body>
    <div class="design">
        <h1 class="text-center text-3xl font-bold pt-5">Registration</h1>
        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="custom pt-5">
                <div class="mb-5">
                    <label class="mb-3 ps-2 font-bold" for="">Name</label>
                    <input name="user_name" type="text" placeholder="Enter Your Name" class="border-black input input-bordered w-full  " required autocomplete="off" />
                </div>
                <div class="mb-5">
                    <label class="mb-3 ps-2 font-bold" for="">Email</label>
                    <input name="user_email" type="text" placeholder="Enter Your Email" class="border-black input input-bordered w-full  " required autocomplete="off" />
                </div>
                <div class="mb-5">
                    <label class="mb-3 ps-2 font-bold" for="">Image</label>
                    <input name="user_image" type="file" class="border-black file-input file-input-bordered w-full " required autocomplete="off" />
                </div>
                <div class="mb-5">
                    <label class="mb-3 ps-2 font-bold" for="">Password</label>
                    <input name="user_password" type="password" placeholder="Enter Your Password" class="border-black input input-bordered w-full  " required autocomplete="off" />
                </div>
                <div class="mb-5">
                    <label class="mb-3 ps-2 font-bold" for="">Confirm Password</label>
                    <input name="confirm_password" type="password" placeholder="Confirm Password" class="border-black input input-bordered w-full  " required autocomplete="off" />
                </div>
                <div class="mb-5">
                    <label class="mb-3 ps-2 font-bold" for="">Address</label>
                    <input name="user_address" type="text" placeholder="Enter Your Address" class="border-black input input-bordered w-full  " required autocomplete="off" />
                </div>
                <div class="mb-5">
                    <label class="mb-3 ps-2 font-bold" for="">Contact</label>
                    <input name="user_phone" type="text" placeholder="Enter Your Number" class="border-black input input-bordered w-full  " required autocomplete="off" />
                </div>
                <div>
                    <input name="user_register" type="submit" class="btn btn-accent font-bold" value="Register">
                    <p class="font-bold pt-2">Already have an account? <a class="text-red-700 link" href="user_login.php">Login</a>
                    </p>
                    <p class="font-bold"><a href="../index.php">Back</a></p>
                </div>
            </div>
        </form>
    </div>
</body>

</html>


<?php

if (isset($_POST['user_register'])) {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $confirm_password = $_POST['confirm_password'];
    $user_address = $_POST['user_address'];
    $user_phone = $_POST['user_phone'];
    $user_image = $_FILES['user_image']['name'];
    $user_image_tmp = $_FILES['user_image']['tmp_name'];
    $user_ip = getIPAddress();




    $select_query = "SELECT * from `user_table` where user_email='$user_email'";
    $select_result = mysqli_query($conn, $select_query);
    $rows = mysqli_num_rows($select_result);
    if ($rows > 0) {
        echo "<script>alert('Email already exist!!')</script>";
    } else if ($user_password != $confirm_password) {
        echo "<script>alert('Password do not match')</script>";
    } else {
        move_uploaded_file($user_image_tmp, "./user_profile_image/$user_image");

        $insert_query = "INSERT into `user_table` (user_name,user_email,user_password,user_image,user_ip,user_address,user_phone) values ('$user_name','$user_email',' $user_password','$user_image','$user_ip','$user_address','$user_phone')";
        $result = mysqli_query($conn, $insert_query);
        if ($result) {
            echo "<script>alert('Data inserted successfully')</script>";
        }
    }
}

?>