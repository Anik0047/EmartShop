<?php
// connect to database
include('./database/connect.php');


// getting brands from database

function getBrands()
{

    global $conn;

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
}

// getting categories from database

function getCategories()
{
    global $conn;

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
}

// getting products from database

function getProducts()
{
    global $conn;
    // condition
    if (!isset($_GET['category'])) {
        if (!isset($_GET['brand'])) {
            $select_product_query = "SELECT * from `products` order by rand() LIMIT 0,6";
            $result = mysqli_query($conn, $select_product_query);
            while ($row_data = mysqli_fetch_assoc($result)) {
                $product_id = $row_data['product_id'];
                $product_name = $row_data['product_name'];
                $product_price = $row_data['product_price'];
                $product_image_1 = $row_data['product_image_1'];
                $category_id = $row_data['category_id'];
                $brand_id = $row_data['brands_id'];

                echo "
                        <div class='card w-96 h-min bg-base-100 drop-shadow-2xl'>
                            <figure><img src='./admin_area/product_images/$product_image_1' alt='Shoes' /></figure>
                            <div class='card-body'>
                                <h2 class='card-title'>$product_name</h2>
                                <p class='text-lg'>Tk <span class='text-xl'>$product_price</span></p>
                                <div class='card-actions justify-start'>
                                    <button class='btn btn-primary'>Buy Now</button>
                                    <button class='btn btn-primary'>Details</button>
                                    <button class='btn btn-primary'>View More</button>
                                </div>
                            </div>
                        </div>
                        ";
            }
        }
    }
}

function get_Specific_Categories()
{
    global $conn;
    // condition
    if (isset($_GET['category'])) {
        $category_id = $_GET['category'];
        $select_product_query = "SELECT * from `products` where category_id=$category_id";
        $result = mysqli_query($conn, $select_product_query);
        while ($row_data = mysqli_fetch_assoc($result)) {
            $product_id = $row_data['product_id'];
            $product_name = $row_data['product_name'];
            $product_price = $row_data['product_price'];
            $product_image_1 = $row_data['product_image_1'];
            $category_id = $row_data['category_id'];

            echo "
                        <div class='card w-96 h-min bg-base-100 drop-shadow-2xl'>
                            <figure><img src='./admin_area/product_images/$product_image_1' alt='Shoes' /></figure>
                            <div class='card-body'>
                                <h2 class='card-title'>$product_name</h2>
                                <p class='text-lg'>Tk <span class='text-xl'>$product_price</span></p>
                                <div class='card-actions justify-start'>
                                    <button class='btn btn-primary'>Buy Now</button>
                                    <button class='btn btn-primary'>Details</button>
                                    <button class='btn btn-primary'>View More</button>
                                </div>
                            </div>
                        </div>
                        ";
        }
    }
}

function get_Specific_Brands()
{
    global $conn;
    // condition
    if (isset($_GET['brand'])) {
        $brand_id = $_GET['brand'];
        $select_product_query = "SELECT * from `products` where brands_id=$brand_id";
        $result = mysqli_query($conn, $select_product_query);
        while ($row_data = mysqli_fetch_assoc($result)) {
            $product_id = $row_data['product_id'];
            $product_name = $row_data['product_name'];
            $product_price = $row_data['product_price'];
            $product_image_1 = $row_data['product_image_1'];
            $brand_id = $row_data['brands_id'];

            echo "
                        <div class='card w-96 h-min bg-base-100 drop-shadow-2xl'>
                            <figure><img src='./admin_area/product_images/$product_image_1' alt='Shoes' /></figure>
                            <div class='card-body'>
                                <h2 class='card-title'>$product_name</h2>
                                <p class='text-lg'>Tk <span class='text-xl'>$product_price</span></p>
                                <div class='card-actions justify-start'>
                                    <button class='btn btn-primary'>Buy Now</button>
                                    <button class='btn btn-primary'>Details</button>
                                    <button class='btn btn-primary'>View More</button>
                                </div>
                            </div>
                        </div>
                        ";
        }
    }
}
