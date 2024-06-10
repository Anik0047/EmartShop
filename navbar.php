<div class="navbar bg-base-100 fixed top-0 z-40">
    <div class="navbar-start">
        <div class="dropdown">
            <!-- Dropdown button for mobile view -->
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <!-- Dropdown menu for mobile view -->
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a>Products</a></li>
                <li><a>About US</a></li>
                <li><a>Contact</a></li>
            </ul>
        </div>
        <!-- Brand logo and name -->
        <div class="flex items-center">
            <img class="w-20 md:w-24" src="images/logo.png" alt="">
            <a href="index.php" class="btn btn-ghost text-xl">Emart Shop</a>
        </div>
    </div>
    <div class="navbar-center hidden lg:flex">
        <!-- Navbar menu for desktop view -->
        <ul class="menu menu-horizontal px-1">
            <li><a href="all_products.php">Products</a></li>
            <li><a>About US</a></li>
            <li><a>Contact</a></li>
        </ul>
    </div>
    <div class="navbar-end flex-none gap-2">
        <!-- Search bar -->
        <div class="flex">
            <form method="get" action="search_product.php">
                <input name="search_field" type="search" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
                <input class="mx-5" type="submit" name="search_button" value="search">
            </form>
        </div>
        <div class="flex-none">
            <div class="dropdown dropdown-end">
                <!-- Shopping cart icon with notification badge -->
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="badge badge-sm indicator-item"><?php showing_cart_item(); ?></span>
                    </div>
                </div>
                <!-- Dropdown menu for shopping cart -->
                <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
                    <div class="card-body">
                        <span class="font-bold text-lg"><?php showing_cart_item(); ?> Items</span>
                        <span class="text-black">Subtotal: <span class="text-lg"><?php total_product_price(); ?></span>
                            BDT</span>
                        <div class="card-actions">
                            <a href="cart.php" class="btn btn-primary btn-block">View cart</a>
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
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
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