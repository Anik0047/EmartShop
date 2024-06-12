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
    <?php
    include('./navbar.php');
    ?>
    <!-- End Navbar section -->


    <!-- cart table -->
    <form action="" method="post">
        <div class="overflow-x-auto mt-40">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr class="text-justify">
                        <th></th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    global $conn;
                    $ip = getIPAddress();
                    $sub_total = 0;
                    $total_product_price_query = "SELECT * from `cart_details` where ip_address='$ip'";
                    $result = mysqli_query($conn, $total_product_price_query);
                    while ($row = mysqli_fetch_array($result)) {
                        $product_id = $row['product_id'];
                        $products_query = "SELECT * from `products` where product_id='$product_id'";
                        $products_result = mysqli_query($conn, $products_query);
                        while ($products_row = mysqli_fetch_array($products_result)) {
                            $product_price = array($products_row['product_price']);
                            $price_table = $products_row['product_price'];
                            $product_name = $products_row['product_name'];
                            $product_image = $products_row['product_image_1'];
                            $product_sum = array_sum($product_price);
                            $sub_total += $product_sum;

                    ?>
                    <tr>
                        <th>
                            <label>
                                <input type="checkbox" class="checkbox border border-black" />
                            </label>
                        </th>
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle w-12 h-12">
                                        <img src="./admin_area/product_images/<?php echo $product_image ?>"
                                            alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold"><?php echo $product_name ?></div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <input class="border border-black" type="text">
                        </td>
                        <td>
                            <p class="text-xl"><strong><?php echo $price_table ?></strong> BDT</p>
                        </td>
                        <th>
                            <button
                                class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once'>Update</button>
                            <button
                                class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once'>Remove</button>
                        </th>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- End cart table -->

        <div class="my-20 ms-20">
            <p class="text-2xl">Subtotal: <strong><?php echo $sub_total ?></strong> BDT</p>
            <div class="mt-5">
                <button
                    class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg      focus:outline-none hover:bounce-once'><a
                        href="index.php">Continue shop</a></button>
                <button
                    class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg     focus:outline-none hover:bounce-once'><a
                        href="index.php">Checkout</a></button>
            </div>
        </div>
    </form>

    <!-- Include Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        effect: "cards",
        grabCursor: true,
    });
    </script>
    <!-- Include SweetAlert2 JS for handling the alert popups -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>