<?php
$user_session_email = $_SESSION['user_email'];
$get_user_table_query = "SELECT * FROM `user_table` WHERE user_email='$user_session_email'";
$user_table_result = mysqli_query($conn, $get_user_table_query);
$row_fetch = mysqli_fetch_assoc($user_table_result);
$user_id = $row_fetch['user_id'];
?>

<h1 class="text-3xl text-center font-bold my-5">All Orders</h1>
<div class="overflow-x-auto">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th>SL no</th>
                <th>Amount Due</th>
                <th>Total Products</th>
                <th>Date</th>
                <th>Complete/Incomplete</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $get_user_orders_query = "SELECT * FROM `user_orders` WHERE user_id=$user_id";
            $user_orders_result = mysqli_query($conn, $get_user_orders_query);
            $number = 1;
            while ($row_data = mysqli_fetch_assoc($user_orders_result)) {
                $order_id = $row_data['order_id'];
                $amount_due = $row_data['amount_due'];
                $invoice_number = $row_data['invoice_number'];
                $total_products = $row_data['total_products'];
                $order_date = $row_data['order_date'];
                $order_status = $row_data['order_status'];
                if ($order_status == 'pending') {
                    $order_status_text = 'Incomplete';
                } else {
                    $order_status_text = 'Complete';
                }

                echo "<tr class='hover'>
                    <th>$number</th>
                    <td>$amount_due</td>
                    <td>$total_products</td>
                    <td>$order_date</td>
                    <td>$order_status_text</td>";

                if ($order_status == 'Complete') {
                    echo "<td>Paid</td>";
                } else {
                    echo "<td><a href='confirm_payment.php?order_id=$order_id' class='link'>Confirm</a></td>";
                }

                echo "</tr>";
                $number++;
            }
            ?>
        </tbody>
    </table>
</div>