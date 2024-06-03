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
</head>

<body>
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- Page content here -->
            <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
            <div class="flex justify-between  items-center bg-gray-300 md:p-8">
                <h1 class="text-3xl"><a href="index.php">Admin Dashboard</a></h1>
                <div class="flex items-center md:pe-10">
                    <img class="w-16" src="../images/logo.png" alt="">
                    <p class="text-lg md:ps-5">Anik Barua</p>
                </div>
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
                    <input type="radio" name="my-accordion-3" checked="checked" />
                    <div class="collapse-title text-xl font-medium">
                        View Products
                    </div>
                    <div class="collapse-content text-lg">
                        <a class="block py-5" href=""><i class="fa-solid fa-bolt pe-5"></i>Products</a>
                        <a class="block py-5" href=""><i class="fa-solid fa-bolt pe-5"></i>Categories</a>
                        <a class="block py-5" href=""><i class="fa-solid fa-bolt pe-5"></i>Brands</a>
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
                        <a class="block py-5" href=""><i class="fa-solid fa-bolt pe-5"></i>Orders</a>
                        <a class="block py-5" href=""><i class="fa-solid fa-bolt pe-5"></i>Payments</a>
                    </div>
                </div>

                <li><a class="text-lg"><i class="fa-solid fa-bomb pe-5"></i>Users</a></li>
                <li><a class="text-lg"><i class="fa-solid fa-bomb pe-5"></i>Logout</a></li>
            </ul>
        </div>
    </div>

</body>

</html>