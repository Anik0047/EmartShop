<?php
include('.././database/connect.php');
?>
<div>
    <h1 class="text-center text-3xl">Insert Products</h1>
    <div class="mt-10">
        <form action="" method="post" enctype="multipart/form-data"></form>
        <div class="flex justify-evenly items-center">
            <div>
                <div class="mb-5">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text font-bold font-bold">Product Name</span>
                        </div>
                        <input type="text" name="product_name" placeholder="Enter Product Name" class="input input-bordered w-full max-w-xs" autocomplete="off" require />
                    </label>
                </div>
                <div class="mb-5">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text font-bold">Product Description</span>
                        </div>
                        <input type="text" name="product_descriptipm" placeholder="Enter Description" class="input input-bordered w-full max-w-xs" autocomplete="off" require />
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
                        $select_categories = "SELECT * from `categories`";
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
                    <select name="product_categories" class="select select-bordered w-full max-w-xs">
                        <option disabled selected>Select a brand</option>
                        <?php
                        // Query to select all brands from the database
                        $select_brands = "SELECT * from `brands`";
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
            <input class="text-lg font-bold rounded-lg py-2 px-10 w-52 mt-5 bg-white hover:bg-orange-500 transition ease-in delay-150 hover:-translate-y-1 hover:ease-in-out hover:scale-110 duration-300" type="submit" name="insert_product">
        </div>
    </div>
</div>