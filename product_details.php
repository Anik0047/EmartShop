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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Include SweetAlert2 CSS for styling the alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
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
    </style>
</head>

<body>
    <!-- Navbar section -->
    <?php include('./navbar.php'); ?>
    <!-- End Navbar section -->

    <!-- Products section  -->
    <?php
    product_details();
    add_to_cart();
    ?>
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