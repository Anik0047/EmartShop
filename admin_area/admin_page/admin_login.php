<?php
include('../../database/connect.php');
@session_start();


if (isset($_POST['admin_login'])) {
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];

    $select_query = "SELECT * from `admin_table` where admin_email='$admin_email'";
    $result = mysqli_query($conn, $select_query);
    $rows_data = mysqli_fetch_assoc($result);
    $hash_password = $rows_data['admin_password'];
    $rows_count = mysqli_num_rows($result);
    if ($rows_count > 0) {
        if (password_verify($admin_password, $hash_password)) {
            $_SESSION['admin_email'] = $admin_email;
            echo "<script>alert('Login Successfully')</script>";
            echo "<script>window.open('../index.php', '_self')</script>";
        } else {
            echo "<script>alert('Invalid Password')</script>";
        }
    } else {
        echo "<script>alert('Invalid Account')</script>";
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
    <h1 class="text-3xl font-bold text-center my-28">Admin Login</h1>
    <div class="grid grid-cols-2 gap-4 mt-20">
        <div class="grid justify-items-center">
            <img class="w-1/2" src="../../images/svg-admin-register.svg" alt="">
        </div>
        <div class="content-center">
            <form action="" method="post">
                <div class="w-96 mb-5 ms-14">
                    <span class="text-lg font-bold">Email</span>
                    <input name="admin_email" type="email" class="input input-bordered w-full" placeholder="Enter your email" required />
                </div>
                <div class="w-96 mb-5 ms-14">
                    <span class="text-lg font-bold">Password</span>
                    <input name="admin_password" type="password" class="input input-bordered w-full" placeholder="Enter your password" required />
                </div>
                <div class="w-96  text-center ms-14 my-10">
                    <input name="admin_login" type="submit" class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once' value="Login">
                    <p class="font-bold pt-5">Don't have an account? <a class="text-red-700 link" href="admin_registration.php">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>