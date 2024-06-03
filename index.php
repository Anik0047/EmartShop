<?php
// Include the database connection file
include('database/connect.php');
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
    <link rel="stylesheet" href="style.css">
    <!-- Include Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <!-- Navbar section -->
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <!-- Dropdown button for mobile view -->
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <!-- Dropdown menu for mobile view -->
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Products</a></li>
                    <li><a>About US</a></li>
                    <li><a>Contact</a></li>
                </ul>
            </div>
            <!-- Brand logo and name -->
            <div class="flex items-center">
                <img class="w-20 md:w-24" src="images/logo.png" alt="">
                <a class="btn btn-ghost text-xl">Emart Shop</a>
            </div>
        </div>
        <div class="navbar-center hidden lg:flex">
            <!-- Navbar menu for desktop view -->
            <ul class="menu menu-horizontal px-1">
                <li><a>Products</a></li>
                <li><a>About US</a></li>
                <li><a>Contact</a></li>
            </ul>
        </div>
        <div class="navbar-end flex-none gap-2">
            <!-- Search bar -->
            <div class="form-control">
                <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
            </div>
            <div class="flex-none">
                <div class="dropdown dropdown-end">
                    <!-- Shopping cart icon with notification badge -->
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                        <div class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="badge badge-sm indicator-item">8</span>
                        </div>
                    </div>
                    <!-- Dropdown menu for shopping cart -->
                    <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
                        <div class="card-body">
                            <span class="font-bold text-lg">8 Items</span>
                            <span class="text-info">Subtotal: $999</span>
                            <div class="card-actions">
                                <button class="btn btn-primary btn-block">View cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User profile icon -->
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img alt="Tailwind CSS Navbar component" src="images/logo.png" />
                        </div>
                    </div>
                    <!-- Dropdown menu for user profile -->
                    <ul tabindex="0"
                        class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-between">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar section -->

    <!-- Banner section -->
    <section class="flex md:flex-row flex-col justify-evenly items-center mt-10 md:my-20">
        <!-- Welcome message -->
        <div class="brand_detail">
            <h1 class="text-3xl md:text-4xl tracking-wide md:tracking-wider leading-relaxed md:leading-loose">Welcome to
                <span class="text-4xl md:text-6xl italic text-orange-500">Emart Shop</span>
            </h1>
            <h1 class="text-3xl md:text-4xl tracking-wide md:tracking-wider leading-relaxed md:leading-loose">Your
                One-Stop Online Store
            </h1>
            <h1 class="text-3xl md:text-4xl tracking-wide md:tracking-wider leading-relaxed md:leading-loose">The Future
                of Online Shopping</h1>
        </div>
        <!-- Swiper slider for the banner -->
        <div class="body">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner section -->

    <!-- Products section -->
    <section>
        <div>
            <!-- Section title -->
            <p class="text-4xl md:ms-32 md:my-32 md:ps-2 border-black border-b-2 w-40 rounded-bl-lg">Products</p>
        </div>
        <div class="flex justify-around mx-5 my-10">
            <!-- Sidebar with brands and categories -->
            <div class="border border-black w-72 text-center">
                <div>
                    <p class="text-2xl bg-slate-200 py-5">Brands</p>
                    <div>
                        <?php
                        // Query to select all brands from the database
                        $select_brands = "SELECT * from `brands`";
                        // Execute the query
                        $brands_result = mysqli_query($conn, $select_brands);
                        // Loop through the results and display each brand
                        while ($row_data = mysqli_fetch_assoc($brands_result)) {
                            $brand_id = $row_data['brands_id'];
                            $brand_title = $row_data['brands_title'];
                            echo "<a class='block text-xl py-3' href='index.php?brand=$brand_id'>$brand_title</a>";
                        }
                        ?>
                    </div>
                </div>
                <div>
                    <p class="text-2xl bg-slate-200 py-5">Categories</p>
                    <div>
                        <?php
                        // Query to select all categories from the database
                        $select_categories = "SELECT * from `categories`";
                        // Execute the query
                        $categories_result = mysqli_query($conn, $select_categories);
                        // Loop through the results and display each category
                        while ($row_data = mysqli_fetch_assoc($categories_result)) {
                            $category_id = $row_data['category_id'];
                            $category_title = $row_data['category_title'];
                            echo "<a class='block text-xl py-3' href='index.php?category=$category_id'>$category_title</a>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Product cards -->
            <div class="grid justify-items-stretch grid-cols-3 gap-20">
                <!-- Example product card -->
                <div class="card w-96 bg-base-100 drop-shadow-2xl">
                    <figure><img src="images/Adidas/ULTRABOOST 1.0 SHOES/pic-1.png" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Shoes!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
                <!-- Example product card -->
                <div class="card w-96 bg-base-100 drop-shadow-2xl">
                    <figure><img src="images/Calvin-Klein/Framed-Flower-Graphic-Classic-Crewneck-T-Shirt/pic-1.png"
                            alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Shoes!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
                <!-- Example product card -->
                <div class="card w-96 bg-base-100 drop-shadow-2xl">
                    <figure><img src="images/Nike/Jordan True Flight/pic-1.png" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Shoes!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
                <!-- Example product card -->
                <div class="card w-96 bg-base-100 drop-shadow-2xl">
                    <figure><img src="images/Oliver Brown/Amalfi Linen Shirt - Blue-White Stripe/pic-1.png"
                            alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Shoes!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Products section -->

    <!-- Include Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        effect: "cards",
        grabCursor: true,
    });
    </script>
</body>

</html>