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

                <?php
                global $conn;
                $ip = getIPAddress();
                $sub_total = 0;
                $total_product_price_query = "SELECT * from `cart_details` where ip_address='$ip'";
                $result = mysqli_query($conn, $total_product_price_query);
                $result_count = mysqli_num_rows($result);
                if ($result_count > 0) {
                    echo "<thead>
                    <tr class='text-justify'>
                        <th></th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>";
                    while ($row = mysqli_fetch_array($result)) {
                        $product_id = $row['product_id'];
                        $quantity = $row['quantity'];
                        $products_query = "SELECT * from `products` where product_id='$product_id'";
                        $products_result = mysqli_query($conn, $products_query);
                        while ($products_row = mysqli_fetch_array($products_result)) {
                            $product_price = $products_row['product_price'];
                            $price_table = $products_row['product_price'] * $quantity;
                            $product_name = $products_row['product_name'];
                            $product_image = $products_row['product_image_1'];
                            $sub_total += $price_table;
                ?>
                            <tr>
                                <th>
                                    <label>
                                        <input name="remove_item[]" value="<?php echo $product_id ?>" type="checkbox" class="checkbox border border-black" />
                                    </label>
                                </th>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="mask mask-squircle w-12 h-12">
                                                <img src="./admin_area/product_images/<?php echo $product_image ?>" alt="Product Image" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold"><?php echo $product_name ?></div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <input name="quantity[<?php echo $product_id ?>]" value="<?php echo $quantity ?>" class="border border-black" type="number" min="1">
                                </td>
                                <td>
                                    <p class="text-xl"><strong><?php echo $price_table ?></strong> BDT</p>
                                </td>
                                <th>
                                    <input name="update_cart" type="submit" class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once' value="Update">
                                    <input name="remove_cart" type="submit" class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once' value="Remove">
                                </th>
                            </tr>
                <?php
                        }
                    }
                } else {
                    echo "<h2 class='text-3xl text-center'>Please Buy Something !!</h2>";
                }
                ?>
                </tbody>
            </table>
        </div>
        <!-- End cart table -->

        <div class="my-20 ms-20">
            <?php
            global $conn;
            $ip = getIPAddress();

            $total_product_price_query = "SELECT * from `cart_details` where ip_address='$ip'";
            $result = mysqli_query($conn, $total_product_price_query);
            $result_count = mysqli_num_rows($result);
            if ($result_count > 0) {
                echo "<p class='text-2xl'>Subtotal: <strong> $sub_total </strong> BDT</p>
            <div class='mt-5'>
                <input name='continue_shop' type='submit' class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once' value='Continue shop'>
                <button class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once'><a href='./user_area/checkout.php'>Checkout</a></button>

            </div>";
            } else {
                echo "<input name='continue_shop' type='submit' class='custom px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once' value='Continue shop'>";
            }

            if (isset($_POST['continue_shop'])) {
                echo "<script>window.open('index.php','_self')</script>";
            }
            ?>



        </div>
    </form>

    <!-- function to update and remove from cart -->
    <?php
    function update_cart_item()
    {
        global $conn;
        $ip = getIPAddress();

        if (isset($_POST['update_cart'])) {
            foreach ($_POST['quantity'] as $product_id => $quantity) {
                if ($quantity > 0) {
                    $update_cart_query = "UPDATE `cart_details` SET quantity = ? WHERE ip_address = ? AND product_id = ?";
                    $stmt = $conn->prepare($update_cart_query);
                    $stmt->bind_param("isi", $quantity, $ip, $product_id);
                    $stmt->execute();
                }
            }
            echo "<script>window.location = 'cart.php';</script>";
        }
    }

    function remove_cart_item()
    {
        global $conn;

        if (isset($_POST['remove_cart'])) {
            foreach ($_POST['remove_item'] as $remove_id) {
                $delete_cart_query = "DELETE FROM `cart_details` WHERE product_id = ?";
                $stmt = $conn->prepare($delete_cart_query);
                $stmt->bind_param("i", $remove_id);
                $stmt->execute();

                if ($stmt->affected_rows > 0) {
                    echo "<script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Item removed from cart'
                        }).then(function() {
                            window.location = 'cart.php';
                        });
                    });
                </script>";
                }
            }
        }
    }

    update_cart_item();
    remove_cart_item();
    ?>

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