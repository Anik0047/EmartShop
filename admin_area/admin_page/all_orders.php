<h1 class="text-3xl font-bold text-center mb-10">All Orders</h1>

<div class="overflow-x-auto">
    <table class="table">
        <!-- head -->
        <thead>
            <?php
            $get_orders = "SELECT * from `user_orders`";
            $result = mysqli_query($conn, $get_orders);
            $row_count = mysqli_num_rows($result);
            echo "<tr>
                <th>Sl No</th>
                <th>Due Amount</th>
                <th>Total Products</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Delete</th>
                </tr>
                </thead>
                <tbody>";

            if ($row_count == 0) {
                echo "<h1 class='text-3xl font-bold text-center mb-10'>No Orders Yet</h1>";
            } else {
                $number = 1;
                while ($row_data = mysqli_fetch_assoc($result)) {
                    $order_id = $row_data['order_id'];
                    $user_id = $row_data['user_id'];
                    $amount_due = $row_data['amount_due'];
                    $total_products = $row_data['total_products'];
                    $order_date = $row_data['order_date'];
                    $order_status = $row_data['order_status'];
                    echo "<tr class='hover'>
                <th>$number</th>
                <td>$amount_due</td>
                <td>$total_products</td>
                <td>$order_date</td>
                <td>$order_status</td>
                <th>
                    <a href='./index.php?delete_orders=$order_id' class='btn btn-ghost btn-xs'><i class='fa-solid fa-trash text-lg'></i></a>
                </th>
            </tr>";
                    $number++;
                }
            }
            ?>


            </tbody>
    </table>
</div>