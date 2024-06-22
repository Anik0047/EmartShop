<?php

if (isset($_GET['edit_products'])) {
    $edit_id = $_GET['edit_products'];

    $get_data = "SELECT * from `products` where product_id=$edit_id";
    $result_product = mysqli_query($conn, $get_data);
    $row = mysqli_fetch_assoc($result_product);
    $product_name = $row['product_name'];
    $product_description = $row['product_description'];
    $product_keywords = $row['product_keywords'];
    $category_id = $row['category_id'];
    $brands_id = $row['brands_id'];
    $product_image_1 = $row['product_image_1'];
    $product_image_2 = $row['product_image_2'];
    $product_image_3 = $row['product_image_3'];
    $product_price = $row['product_price'];
    $status = $row['status'];
}

// get category

// Query to select all categories from the database
$select_categories = "SELECT * FROM `categories`";
// Execute the query
$categories_result = mysqli_query($conn, $select_categories);
// Loop through the results and display each category
$row_data = mysqli_fetch_assoc($categories_result);
$category_id = $row_data['category_id'];
$category_title = $row_data['category_title'];

// get brand

// Query to select all brands from the database
$select_brands = "SELECT * FROM `brands`";
// Execute the query
$brands_result = mysqli_query($conn, $select_brands);
// Loop through the results and display each brand
$row_data = mysqli_fetch_assoc($brands_result);
$brand_id = $row_data['brands_id'];
$brand_title = $row_data['brands_title'];

?>







<h1 class="text-3xl font-bold text-center mb-10">
    Edit Product
</h1>

<form action="" method="post" enctype="multipart/form-data">
    <div class="flex justify-evenly items-center">
        <div>
            <div class="w-96 mx-auto mb-5">
                <span class="text-lg font-bold">Product Name</span>
                <input name="product_name" type="text" value="<?php echo $product_name ?>"
                    class="input input-bordered w-full" required />
            </div>
            <div class="w-96 mx-auto mb-5">
                <span class="text-lg font-bold">Product Description</span>
                <input name="product_description" type="text" value="<?php echo $product_description ?>"
                    class="input input-bordered w-full" required />
            </div>
            <div class="w-96 mx-auto mb-5">
                <span class="text-lg font-bold">Product Keyword</span>
                <input name="product_keyword" type="text" value="<?php echo $product_keywords ?>"
                    class="input input-bordered w-full" required />
            </div>
            <div class="w-96 mx-auto mb-5 text-black">
                <select name="product_category" class="select select-bordered w-full" required>
                    <option value="<?php echo $category_title ?>" disabled selected><?php echo $category_title ?>
                    </option>

                    <?php
                    $select_categories_all = "SELECT * FROM `categories`";
                    $categories_result_all = mysqli_query($conn, $select_categories_all);
                    while ($row_data_all = mysqli_fetch_assoc($categories_result_all)) {
                        $category_id_edit = $row_data_all['category_id'];
                        $category_title_edit = $row_data_all['category_title'];
                        echo $category_title_edit;
                        echo "<option value='$category_id_edit'>$category_title_edit</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="w-96 mx-auto mb-5">
                <select name="product_brand" class="select select-bordered w-full" required>
                    <option value="<?php echo $brand_title ?>" disabled selected><?php echo $brand_title ?></option>
                    <?php
                        $select_brands_all = "SELECT * FROM `brands`";
                        $brands_result_all = mysqli_query($conn, $select_brands_all);
                        while ($row_data_all = mysqli_fetch_assoc($brands_result_all)) {
                            $brand_id_edit = $row_data_all['brands_id'];
                            $brand_title_edit = $row_data_all['brands_title'];
                            echo $brand_title_edit;
                            echo "<option value='$brand_id_edit'>$brand_title_edit</option>";
                        }
                        ?>
                </select>
            </div>
        </div>
        <div>
            <div class="w-96 mx-auto mb-5 flex">
                <input name="product_image_1" type="file" class="file-input file-input-bordered w-full" />
                <div class='mask mask-squircle w-20 h-20'>
                    <img src='./product_images/<?php echo $product_image_1 ?>' alt='Avatar Tailwind CSS Component' />
                </div>
            </div>
            <div class="w-96 mx-auto mb-5 flex">
                <input name="product_image_2" type="file" class="file-input file-input-bordered w-full" />
                <div class='mask mask-squircle w-20 h-20'>
                    <img src='./product_images/<?php echo $product_image_2 ?>' alt='Avatar Tailwind CSS Component' />
                </div>
            </div>
            <div class="w-96 mx-auto mb-5 flex">
                <input name="product_image_3" type="file" class="file-input file-input-bordered w-full" />
                <div class='mask mask-squircle w-20 h-20'>
                    <img src='./product_images/<?php echo $product_image_3 ?>' alt='Avatar Tailwind CSS Component' />
                </div>
            </div>
            <div class="w-96 mx-auto mb-5">
                <span class="text-lg font-bold">Product Price</span>
                <input name="product_price" type="text" value="<?php echo $product_price ?>"
                    class="input input-bordered w-full" required />
            </div>
        </div>
    </div>
    <div class="w-96 mx-auto text-center my-10">
        <input name="product_update" type="submit"
            class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once'
            value="Update">
    </div>
</form>