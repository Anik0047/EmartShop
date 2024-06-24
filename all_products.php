<?php
// Include the database connection file
include('database/connect.php');
include('functions/common_function.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Include SweetAlert2 CSS for styling the alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
    <!-- Navbar section -->
    <?php include('./navbar.php'); ?>
    <!-- End Navbar section -->

    <!-- Products section -->
    <section>
        <div>
            <!-- Section title -->
            <p class="text-4xl md:ms-32 md:mt-40 md:ps-2 border-black border-b-2 w-40 rounded-bl-lg">Products</p>
        </div>
        <div class="flex justify-around mx-5 my-10">
            <!-- Sidebar with brands and categories -->
            <div class="w-72 text-center">
                <div>
                    <p class="text-2xl bg-slate-200 py-5">Brands</p>
                    <div>
                        <?php
                        getBrands();
                        ?>
                    </div>
                </div>
                <div>
                    <p class="text-2xl bg-slate-200 py-5">Categories</p>
                    <div>
                        <?php
                        getCategories();
                        ?>
                    </div>
                </div>
            </div>
            <!-- Product cards -->
            <div class="grid justify-items-stretch grid-cols-3 gap-20">
                <!-- Example product card -->
                <?php
                get_all_product();
                get_Specific_Categories();
                get_Specific_Brands();
                add_to_cart();
                ?>
            </div>
        </div>
    </section>
    <!-- End Products section -->

    <!--  Footer section -->

    <section class="relative mt-52">
        <?php
        include('./footer.php');
        ?>
    </section>

    <!-- End Footer section -->


    <!-- Include SweetAlert2 JS for handling the alert popups -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>