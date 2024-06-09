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
        echo "<a class='block text-xl py-3'  href='all_products.php?brand=$brand_id'>$brand_title</a>";
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
        echo "<a class='block text-xl py-3' href='all_products.php?category=$category_id'>$category_title</a>";
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
                                    <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>Details</a>
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
                                    <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>Details</a>
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
                                    <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>Details</a>
                                </div>
                            </div>
                        </div>
                        ";
        }
    }
}


function search_product()
{
    global $conn;

    if (isset($_GET['search_button'])) {
        $search_data_value = $_GET['search_field'];
    }


    $search_product_query = "SELECT * from `products` where product_keywords like '%$search_data_value%'";
    $result = mysqli_query($conn, $search_product_query);
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
                                    <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>Details</a>
                                </div>
                            </div>
                        </div>
                        ";
    }
}


// get all products in product page

function get_all_product()
{
    global $conn;
    // condition
    if (!isset($_GET['category'])) {
        if (!isset($_GET['brand'])) {
            $select_product_query = "SELECT * from `products` order by rand()";
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
                                    <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>Details</a>
                                </div>
                            </div>
                        </div>
                        ";
            }
        }
    }
}


// product details

function product_details()
{
    global $conn;
    // condition
    if (isset($_GET['product_id'])) {
        if (!isset($_GET['category'])) {
            if (!isset($_GET['brand'])) {

                $product_id = $_GET['product_id'];

                $select_product_query = "SELECT * from `products` where product_id=$product_id";
                $result = mysqli_query($conn, $select_product_query);
                while ($row_data = mysqli_fetch_assoc($result)) {
                    $product_id = $row_data['product_id'];
                    $product_name = $row_data['product_name'];
                    $product_description = $row_data['product_description'];
                    $product_price = $row_data['product_price'];
                    $product_image_1 = $row_data['product_image_1'];
                    $product_image_2 = $row_data['product_image_2'];
                    $product_image_3 = $row_data['product_image_3'];
                    $category_id = $row_data['category_id'];
                    $brand_id = $row_data['brands_id'];

                    echo "
                        <section class='my-32 mx-20 grid grid-cols-2'>
        <div class=''>
            <div class='w-4/6 carousel rounded-box shadow-2xl shadow-cyan-500'>
                <div class='carousel-item w-full'>
                    <img src='./admin_area/product_images/$product_image_1' class='w-full' alt='Tailwind CSS Carousel component' />
                </div>
                <div class='carousel-item w-full'>
                    <img src='./admin_area/product_images/$product_image_2' class='w-full' alt='Tailwind CSS Carousel component' />
                </div>
                <div class='carousel-item w-full'>
                    <img src='./admin_area/product_images/$product_image_3' class='w-full' alt='Tailwind CSS Carousel component' />
                </div>
            </div>
            <div class='mt-20 mx-20'>
                <p>Click and use right arrow to change image</p>
            </div>
        </div>
        <div class='mt-20 '>
            <p class='text-3xl mb-10'>$product_name</p>
            <p class='text-lg mb-10'>$product_description</p>
            <p class='text-xl mb-10'>Tk <span class='text-2xl px-2 font-bold'>$product_price</span> BDT</p>
            <button class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once'><a href='#'>
                    Buy Now
                </a></button>
        </div>
    </section>
                        ";
                }
            }
        }
    }
}


// get ip address function

function getIPAddress()
{
    //whether ip is from the share internet  
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from the remote address  
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
// $ip = getIPAddress();
// echo 'User Real IP Address - ' . $ip;