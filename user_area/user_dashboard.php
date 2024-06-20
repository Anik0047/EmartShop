<?php
include('../database/connect.php');
include('../functions/common_function.php');
session_start();
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
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
    <div class="navbar bg-base-100 fixed top-0 z-40">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Products</a></li>
                    <li><a>About US</a></li>
                    <li><a>Contact</a></li>
                </ul>
            </div>
            <div class="flex items-center">
                <img class="w-20 md:w-24" src="../images/logo.png" alt="">
                <a href="../index.php" class="btn btn-ghost text-xl">Emart Shop</a>
            </div>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="../all_products.php">Products</a></li>
                <li><a>About US</a></li>
                <li><a>Contact</a></li>
            </ul>
        </div>
        <div class="navbar-end flex-none gap-2">
            <div class="flex">
                <form method="get" action="../search_product.php">
                    <input name="search_field" type="search" placeholder="Search"
                        class="input input-bordered w-24 md:w-auto" />
                    <input class="mx-5" type="submit" name="search_button" value="search">
                </form>
            </div>
            <div class="flex-none">
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                        <div class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="badge badge-sm indicator-item"><?php showing_cart_item(); ?></span>
                        </div>
                    </div>
                    <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
                        <div class="card-body">
                            <span class="font-bold text-lg"><?php showing_cart_item(); ?> Items</span>
                            <div class="card-actions">
                                <a href="../cart.php" class="btn btn-primary btn-block">View cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown dropdown-end">
                    <?php
                    if (!isset($_SESSION['user_email'])) {
                        echo "<div><a class='btn btn-ghost' href='../user_area/user_login.php'>Login</a></div>";
                    } else {
                        $email = $_SESSION['user_email'];
                        $select_query = "SELECT * FROM `user_table` WHERE user_email='$email'";
                        $result = mysqli_query($conn, $select_query);

                        if ($result && mysqli_num_rows($result) > 0) {
                            $row_data = mysqli_fetch_assoc($result);
                            $user_image = $row_data['user_image'];

                            echo "<div tabindex='0' role='button' class='btn btn-ghost btn-circle avatar'>
                                    <div class='w-10 rounded-full'>
                                        <img src='../user_area/user_profile_image/$user_image' />
                                    </div>
                                  </div>
                                  <ul tabindex='0' class='mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52'>
                                    <li><a class='justify-between' href='../user_area/user_dashboard.php'>Profile</a></li>
                                    <li><a href='../user_area/logout.php'>Logout</a></li>
                                  </ul>";
                        } else {
                            echo "<script>alert('User not found. Please log in again.'); window.location.href='../user_area/user_login.php';</script>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-5 gap-4 mt-40">
        <div class="border border-black text-center">
            <ul>
                <?php
                if (isset($_SESSION['user_email'])) {
                    $email = $_SESSION['user_email'];
                    $select_query = "SELECT * FROM `user_table` WHERE user_email='$email'";
                    $result = mysqli_query($conn, $select_query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        $row_data = mysqli_fetch_assoc($result);
                        $user_image = $row_data['user_image'];
                        echo "<li class='mb-5'><img class='w-56 mx-auto' src='../user_area/user_profile_image/$user_image' alt=''></li>";
                    } else {
                        echo "<li class='mb-5'><img class='w-56 mx-auto' src='../user_area/user_profile_image/default.png' alt=''></li>";
                    }
                }
                ?>

                <li class="mb-5"><a class="text-xl font-bold" href="user_dashboard.php">My Profile</a></li>
                <li class="mb-5"><a class="text-xl font-bold" href="user_dashboard.php">Pending Orders</a></li>
                <li class="mb-5"><a class="text-xl font-bold" href="user_dashboard.php?user_orders">My Orders</a></li>
                <li class="mb-5"><a class="text-xl font-bold" href="user_dashboard.php?edit_account">Edit Account</a>
                </li>
                <li class="mb-5"><a class="text-xl font-bold" href="user_dashboard.php?delete_account">Delete
                        Account</a></li>
                <li class="mb-5"><a class="text-xl font-bold" href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="col-span-4 border border-black">
            <?php
            user_order_details();
            if (isset($_GET['user_orders'])) {
                include('user_orders.php');
            }
            if (isset($_GET['edit_account'])) {
                include('edit_account.php');
            }
            if (isset($_GET['delete_account'])) {
                include('delete_account.php');
            }
            ?>
        </div>
    </div>
</body>

</html>