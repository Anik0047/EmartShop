<?php
include('database/connect.php');
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- daisyUi -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <!-- --------------------    Navbar  ------------------------ -->

    <div class="navbar bg-base-100">
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
                <img class="w-20 md:w-24" src="images/logo.png" alt="">
                <a class="btn btn-ghost text-xl">Emart Shop</a>
            </div>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a>Products</a></li>
                <li><a>About US</a></li>
                <li><a>Contact</a></li>
            </ul>
        </div>
        <div class="navbar-end flex-none gap-2">
            <div class="form-control">
                <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
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
                            <span class="badge badge-sm indicator-item">8</span>
                        </div>
                    </div>
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
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img alt="Tailwind CSS Navbar component" src="images/logo.png" />
                        </div>
                    </div>
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

    <!-- --------------------   End Navbar  ------------------------ -->

    <!-- --------------------    Banner  ------------------------ -->
    <section class="flex md:flex-row flex-col justify-evenly items-center mt-10 md:my-20">
        <div class="brand_detail">
            <h1 class="text-3xl md:text-4xl tracking-wide md:tracking-wider leading-relaxed md:leading-loose">Welcome to
                <span class="text-4xl md:text-6xl italic text-orange-500">Emart
                    Shop</span>
            </h1>
            <h1 class="text-3xl md:text-4xl tracking-wide md:tracking-wider leading-relaxed md:leading-loose">Your
                One-Stop Online Store
            </h1>
            <h1 class="text-3xl md:text-4xl tracking-wide md:tracking-wider leading-relaxed md:leading-loose">The Future
                of Online
                Shopping</h1>
        </div>
        <div class="body">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    </div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- --------------------   End Banner  ------------------------ -->


    <!-- --------------------   Products  ------------------------ -->

    <section>
        <div>
            <p class="text-4xl md:ms-32 md:my-32 md:ps-2 border-black border-b-2 w-40 rounded-bl-lg">Products</p>
        </div>
        <div class="flex justify-around mx-5 my-10">
            <div class="border border-black w-72 text-center">
                <div>
                    <p class="text-2xl bg-slate-200 py-5">Brands</p>
                    <div>
                        <?php
                        $select_brands = "SELECT * from `brands`";
                        $brands_result = mysqli_query($conn, $select_brands);
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
                        <a class="block text-xl py-3" href="">Categories 1</a>
                        <a class="block text-xl py-3" href="">Categories 2</a>
                        <a class="block text-xl py-3" href="">Categories 3</a>
                        <a class="block text-xl py-3" href="">Categories 4</a>
                        <a class="block text-xl py-3" href="">Categories 5</a>
                        <a class="block text-xl py-3" href="">Categories 6</a>
                        <a class="block text-xl py-3" href="">Categories 7</a>
                    </div>
                </div>
            </div>
            <div class="grid justify-items-stretch grid-cols-3 gap-20">

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

    <!-- --------------------   End Products  ------------------------ -->


    <!-- Swiper JS -->
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