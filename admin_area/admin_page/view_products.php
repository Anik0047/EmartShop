<h1 class="text-3xl font-bold text-center">
    Products
</h1>

<div class="overflow-x-auto mt-10">
    <table class="table text-center">
        <!-- head -->
        <thead>
            <tr>
                <th>Product Id</th>
                <th>Product</th>
                <th>Product Price</th>
                <th>Total Sold</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $get_products = "SELECT * from `products`";
            $product_result = mysqli_query($conn, $get_products);
            $number = 1;
            while ($row = mysqli_fetch_assoc($product_result)) {
                $product_id = $row['product_id'];
                $product_name = $row['product_name'];
                $product_image_1 = $row['product_image_1'];
                $product_price = $row['product_price'];
                $status = $row['status'];

                // total sold count
                $get_count = "SELECT * from `orders_pending` where product_id=$product_id";
                $result_count = mysqli_query($conn, $get_count);
                $row_count = mysqli_num_rows($result_count);
                echo " <tr class='hover'>
                <th>$number</th>
                <td>
                    <div class='flex items-center gap-3'>
                        <div class='avatar'>
                            <div class='mask mask-squircle w-12 h-12'>
                                <img src='./product_images/$product_image_1' alt='Avatar Tailwind CSS Component' />
                            </div>
                        </div>
                        <div>
                            <div class='font-bold'>$product_name</div>
                        </div>
                    </div>
                </td>
                <td><span class='text-lg font-bold'>$product_price</span> BDT</td>
                <td>$row_count</td>
                <td>$status</td>
                <th>
                    <a class='btn btn-ghost btn-xs'><i class='fa-solid fa-pen-to-square text-lg'></i></a>
                </th>
                <th>
                    <a class='btn btn-ghost btn-xs'><i class='fa-solid fa-trash text-lg'></i></a>
                </th>
            </tr>";
                $number++;
            }
            ?>
        </tbody>

    </table>
</div>