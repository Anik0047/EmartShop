<?php
include('../database/connect.php');
include('../functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Tailwind Css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- daisy Ui -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- Page content here -->
            <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
            <div class="flex justify-between items-center bg-gray-300 md:p-8">
                <h1 class="text-3xl"><a href="index.php">Admin Dashboard</a></h1>
                <?php
                if (isset($_SESSION['admin_email'])) {
                    $email = $_SESSION['admin_email'];
                    $select_query = "SELECT * FROM `admin_table` WHERE admin_email='$email'";
                    $result = mysqli_query($conn, $select_query);
                    $row_data = mysqli_fetch_assoc($result);
                    $admin_name = $row_data['admin_name'];
                ?>
                    <div class="flex items-center md:pe-10">
                        <img class="w-16" src="../images/admin-pic.svg" alt="">
                        <p class="text-lg md:ps-5"><?php echo $admin_name ?></p>
                    </div>
                <?php
                } else {
                ?>
                    <div class="flex items-center md:pe-10">
                        <p class="text-lg md:ps-5">Please <a href="./admin_page/admin_logout.php" class="text-blue-500">login</a> to
                            access the dashboard</p>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="md:mt-10">
                <?php
                if (isset($_GET['insert_categories'])) {
                    include('./admin_page/insert_categories.php');
                }
                if (isset($_GET['insert_brands'])) {
                    include('./admin_page/insert_brands.php');
                }
                if (isset($_GET['insert_product'])) {
                    include('./admin_page/insert_product.php');
                }
                if (isset($_GET['view_products'])) {
                    include('./admin_page/view_products.php');
                }
                if (isset($_GET['edit_products'])) {
                    include('./admin_page/edit_products.php');
                }
                if (isset($_GET['delete_products'])) {
                    include('./admin_page/delete_products.php');
                }
                if (isset($_GET['view_categories'])) {
                    include('./admin_page/view_categories.php');
                }
                if (isset($_GET['view_brands'])) {
                    include('./admin_page/view_brands.php');
                }
                if (isset($_GET['edit_category'])) {
                    include('./admin_page/edit_category.php');
                }
                if (isset($_GET['edit_brands'])) {
                    include('./admin_page/edit_brands.php');
                }
                if (isset($_GET['delete_category'])) {
                    include('./admin_page/delete_category.php');
                }
                if (isset($_GET['delete_brands'])) {
                    include('./admin_page/delete_brands.php');
                }
                if (isset($_GET['all_orders'])) {
                    include('./admin_page/all_orders.php');
                }
                if (isset($_GET['delete_orders'])) {
                    include('./admin_page/delete_orders.php');
                }
                if (isset($_GET['all_payment'])) {
                    include('./admin_page/all_payment.php');
                }
                if (isset($_GET['delete_payments'])) {
                    include('./admin_page/delete_payments.php');
                }
                if (isset($_GET['all_user'])) {
                    include('./admin_page/all_user.php');
                }
                if (isset($_GET['delete_user'])) {
                    include('./admin_page/delete_user.php');
                }
                ?>
            </div>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                <!-- Sidebar content here -->
                <div class="flex items-center justify-center border-4 border-inherit border-b-black ">
                    <img class="w-20" src="../images//logo.png" alt="">
                    <p class="text-2xl justify-evenly">Emart Shop</p>
                </div>

                <div class="collapse collapse-plus mt-10">
                    <input type="radio" name="my-accordion-3" />
                    <div class="collapse-title text-xl font-medium">
                        View Products
                    </div>
                    <div class="collapse-content text-lg">
                        <a class="block py-5" href="index.php?view_products"><i class="fa-solid fa-bolt pe-5"></i>Products</a>
                        <a class="block py-5" href="index.php?view_categories"><i class="fa-solid fa-bolt pe-5"></i>Categories</a>
                        <a class="block py-5" href="index.php?view_brands"><i class="fa-solid fa-bolt pe-5"></i>Brands</a>
                    </div>
                </div>
                <div class="collapse collapse-plus">
                    <input type="radio" name="my-accordion-3" />
                    <div class="collapse-title text-xl font-medium">
                        Insert Products
                    </div>
                    <div class="collapse-content text-lg">
                        <a class="block py-5" href="index.php?insert_product"><i class="fa-solid fa-bolt pe-5"></i>Products</a>
                        <a class="block py-5" href="index.php?insert_categories"><i class="fa-solid fa-bolt pe-5"></i>Categories</a>
                        <a class="block py-5" href="index.php?insert_brands"><i class="fa-solid fa-bolt pe-5"></i>Brands</a>
                    </div>
                </div>
                <div class="collapse collapse-plus">
                    <input type="radio" name="my-accordion-3" />
                    <div class="collapse-title text-xl font-medium">
                        All Orders
                    </div>
                    <div class="collapse-content text-lg">
                        <a class="block py-5" href="index.php?all_orders"><i class="fa-solid fa-bolt pe-5"></i>Orders</a>
                        <a class="block py-5" href="index.php?all_payment"><i class="fa-solid fa-bolt pe-5"></i>Payments</a>
                    </div>
                </div>

                <li><a href="index.php?all_user" class="text-lg"><i class="fa-solid fa-bomb pe-5"></i>Users</a></li>
                <?php
                if (!isset($_SESSION['admin_email'])) {
                    echo "<li><a href='./admin_page/admin_logout.php' class='text-lg'><i
                            class='fa-solid fa-bomb pe-5'></i>Login</a></li>";
                } else {
                    echo "<li><a href='./admin_page/admin_logout.php' class='text-lg'><i class='fa-solid fa-bomb pe-5'></i>Logout</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>

</body>

</html>