<?php
include('../database/connect.php');
include('../functions/common_function.php');
?>
<?php
if (isset($_POST['user_login'])) {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];


    $select_query = "SELECT * from `user_table` where user_email='$user_email'";
    $result = mysqli_query($conn, $select_query);
    $rows_data = mysqli_fetch_assoc($result);
    $hash_password = $rows_data['user_password'];

    $rows_count = mysqli_num_rows($result);
    $user_ip = getIPAddress();


    $select_cart_query = "SELECT * from `cart_details` where ip_address='$user_ip'";
    $select_result = mysqli_query($conn, $select_cart_query);
    $cart_rows_count = mysqli_num_rows($select_result);


    if ($rows_count > 0) {
        $_SESSION['user_email'] = $user_email;
        if (password_verify($user_password, $hash_password)) {
            if ($rows_count == 1 and $cart_rows_count == 0) {
                $_SESSION['user_email'] = $user_email;
                echo "<script>alert('Login Successfully')</script>";
                echo "<script>window.open('user_dashboard.php','_self')</script>";
            } else {
                $_SESSION['user_email'] = $user_email;
                echo "<script>alert('Login Successfully')</script>";
                echo "<script>window.open('payment.php','_self')</script>";
            }
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

<body class="flex justify-center items-center">
    <div class="design login-design">
        <h1 class="text-center text-3xl font-bold pt-7">Login</h1>
        <form action="" method="post" autocomplete="off">
            <div class="custom pt-5">
                <div class="mb-5">
                    <label class="mb-3 ps-2 font-bold" for="">Email</label>
                    <input name="user_email" type="text" placeholder="Enter Your Email" class="border-black input input-bordered w-full  " required />
                </div>
                <div class="mb-5">
                    <label class="mb-3 ps-2 font-bold" for="">Password</label>
                    <input name="user_password" type="password" placeholder="Enter Your Password" class="border-black input input-bordered w-full  " required />
                </div>
                <div class="text-left">
                    <a class="font-bold link" href="">Forgot Password</a>
                </div>
                <div>
                    <input name="user_login" type="submit" class="btn btn-accent font-bold" value="Login">
                    <p class="font-bold pt-2">Don't have an account? <a class="text-red-700 link" href="user_register.php">Register</a>
                    </p>
                    <p class="font-bold"><a href="../index.php">Back</a></p>
                </div>
            </div>
        </form>
    </div>
</body>

</html>