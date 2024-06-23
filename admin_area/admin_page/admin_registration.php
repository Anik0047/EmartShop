<?php
include('../../database/connect.php');



if (isset($_POST['admin_register'])) {
    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];
    $admin_confirm_password = $_POST['admin_confirm_password'];

    $hash_password = password_hash($admin_password, PASSWORD_DEFAULT);

    $select_query = "SELECT * from `admin_table` where admin_email='$admin_email'";
    $select_result = mysqli_query($conn, $select_query);
    $rows = mysqli_num_rows($select_result);
    if ($rows > 0) {
        echo "<script>alert('Email already exist!!')</script>";
    } else if ($admin_password != $admin_confirm_password) {
        echo "<script>alert('Password do not match')</script>";
    } else {

        $insert_query = "INSERT into `admin_table` (admin_name,admin_email,admin_password) values ('$admin_name','$admin_email','$hash_password')";
        $result = mysqli_query($conn, $insert_query);
        if ($result) {
            echo "<script>alert('Registration has successfully')</script>";
            echo "<script>window.open('./admin_login.php','_self')</script>";
        }
    }
}
?>



<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes bounce-once {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .hover\:bounce-once:hover {
            animation: bounce-once 0.5s ease;
        }

        .custom {
            margin-left: 800px;
        }
    </style>
</head>

<body>
    <h1 class="text-3xl font-bold text-center my-28">Admin Registration</h1>
    <div class="grid grid-cols-2 gap-4 mt-20">
        <div class="grid justify-items-center">
            <img class="w-1/2" src="../../images/svg-admin-email.svg" alt="">
        </div>
        <div class="">
            <form action="" method="post">
                <div class="w-96 mb-5 ms-14">
                    <span class="text-lg font-bold">Name</span>
                    <input name="admin_name" type="text" class="input input-bordered w-full" placeholder="Enter your name" required />
                </div>
                <div class="w-96 mb-5 ms-14">
                    <span class="text-lg font-bold">Email</span>
                    <input name="admin_email" type="email" class="input input-bordered w-full" placeholder="Enter your email" required />
                </div>
                <div class="w-96 mb-5 ms-14">
                    <span class="text-lg font-bold">Password</span>
                    <input name="admin_password" type="password" class="input input-bordered w-full" placeholder="Enter your password" required />
                </div>
                <div class="w-96 mb-5 ms-14">
                    <span class="text-lg font-bold">Confirm Password</span>
                    <input name="admin_confirm_password" type="password" class="input input-bordered w-full" placeholder="Enter your confirm password" required />
                </div>
                <div class="w-96  text-center ms-14 my-10">
                    <input name="admin_register" type="submit" class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once' value="Register">
                    <p class="font-bold pt-5">Already have an account? <a class="text-red-700 link" href="admin_login.php">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>