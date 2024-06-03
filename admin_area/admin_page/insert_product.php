<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Categories</title>
    <!-- Include SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>

    <?php
    // Include the database connection file
    include('.././database/connect.php');

    // Check if the insert_product button is pressed
    if (isset($_POST['insert_product'])) {
        // Escape special characters to prevent SQL injection
        $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
        $product_description = mysqli_real_escape_string($conn, $_POST['product_description']);
        $product_keywords = mysqli_real_escape_string($conn, $_POST['product_keywords']);
        $product_categories = mysqli_real_escape_string($conn, $_POST['product_categories']);
        $product_brands = mysqli_real_escape_string($conn, $_POST['product_brands']);
        $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
        $product_status = 'true';

        // Get the uploaded file names
        $product_image_1 = $_FILES['product_image_1']['name'];
        $product_image_2 = $_FILES['product_image_2']['name'];
        $product_image_3 = $_FILES['product_image_3']['name'];

        // Get the temporary file names
        $temp_image_1 = $_FILES['product_image_1']['tmp_name'];
        $temp_image_2 = $_FILES['product_image_2']['tmp_name'];
        $temp_image_3 = $_FILES['product_image_3']['tmp_name'];

        // Check if any required field is empty
        if ($product_name == '' || $product_description == '' || $product_keywords == '' || $product_categories == '' || $product_brands == '' || $product_price == '' || $product_image_1 == '' || $product_image_2 == '' || $product_image_3 == '') {
            echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill all the fields.'
            });
        });
    </script>";;
        } else {
            // Move uploaded files to the specified directory
            move_uploaded_file($temp_image_1, "../admin_area/product_images/$product_image_1");
            move_uploaded_file($temp_image_2, "../admin_area/product_images/$product_image_2");
            move_uploaded_file($temp_image_3, "../admin_area/product_images/$product_image_3");

            // Insert product information into the database
            $insert_product_query = "INSERT INTO `products` (product_name, product_description, product_keywords, category_id, brands_id, product_image_1, product_image_2, product_image_3, product_price, date, status) VALUES ('$product_name', '$product_description', '$product_keywords', '$product_categories', '$product_brands', '$product_image_1', '$product_image_2', '$product_image_3', '$product_price', NOW(), '$product_status')";

            // Execute the query
            $product_result_query = mysqli_query($conn, $insert_product_query);

            // Check if the query was successful
            if ($product_result_query) {
                echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Products has been insert in database.'
                });
            });
        </script>";
            }
        }
    }
    ?>
    <div>
        <h1 class="text-center text-3xl">Insert Products</h1>
        <div class="mt-10">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="flex justify-evenly items-center">
                    <div>
                        <div class="mb-5">
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text font-bold">Product Name</span>
                                </div>
                                <input type="text" name="product_name" placeholder="Enter Product Name" class="input input-bordered w-full max-w-xs" autocomplete="off" required />
                            </label>
                        </div>
                        <div class="mb-5">
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text font-bold">Product Description</span>
                                </div>
                                <input type="text" name="product_description" placeholder="Enter Description" class="input input-bordered w-full max-w-xs" autocomplete="off" required />
                            </label>
                        </div>
                        <div class="mb-5">
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text font-bold">Product Keywords</span>
                                </div>
                                <input type="text" name="product_keywords" placeholder="Enter Keywords" class="input input-bordered w-full max-w-xs" autocomplete="off" required />
                            </label>
                        </div>
                        <div class="mb-5">
                            <select name="product_categories" class="select select-bordered w-full max-w-xs">
                                <option disabled selected>Select a category</option>
                                <?php
                                // Query to select all categories from the database
                                $select_categories = "SELECT * FROM `categories`";
                                // Execute the query
                                $categories_result = mysqli_query($conn, $select_categories);
                                // Loop through the results and display each category
                                while ($row_data = mysqli_fetch_assoc($categories_result)) {
                                    $category_id = $row_data['category_id'];
                                    $category_title = $row_data['category_title'];
                                    echo "<option value='$category_id'>$category_title</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-5">
                            <select name="product_brands" class="select select-bordered w-full max-w-xs">
                                <option disabled selected>Select a brand</option>
                                <?php
                                // Query to select all brands from the database
                                $select_brands = "SELECT * FROM `brands`";
                                // Execute the query
                                $brands_result = mysqli_query($conn, $select_brands);
                                // Loop through the results and display each brand
                                while ($row_data = mysqli_fetch_assoc($brands_result)) {
                                    $brand_id = $row_data['brands_id'];
                                    $brand_title = $row_data['brands_title'];
                                    echo "<option value='$brand_id'>$brand_title</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="mb-5">
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text font-bold">Product Image 1</span>
                                </div>
                                <input type="file" name="product_image_1" class="file-input file-input-bordered w-full max-w-xs" required />
                            </label>
                        </div>
                        <div class="mb-5">
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text font-bold">Product Image 2</span>
                                </div>
                                <input type="file" name="product_image_2" class="file-input file-input-bordered w-full max-w-xs" required />
                            </label>
                        </div>
                        <div class="mb-5">
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text font-bold">Product Image 3</span>
                                </div>
                                <input type="file" name="product_image_3" class="file-input file-input-bordered w-full max-w-xs" required />
                            </label>
                        </div>
                        <div class="mb-5">
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text font-bold">Product Price</span>
                                </div>
                                <input type="text" name="product_price" placeholder="Enter Price" class="input input-bordered w-full max-w-xs" autocomplete="off" required />
                            </label>
                        </div>
                    </div>
                </div>
                <div class="flex justify-evenly">
                    <input class="text-lg font-bold rounded-lg py-2 px-10 w-52 mt-5 bg-white hover:bg-orange-500 transition ease-in delay-150 hover:-translate-y-1 hover:ease-in-out hover:scale-110 duration-300" type="submit" name="insert_product" value="Insert Product">
                </div>
            </form>
        </div>
    </div>

    <!-- Include SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>