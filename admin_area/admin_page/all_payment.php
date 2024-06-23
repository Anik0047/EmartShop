<h1 class="text-3xl font-bold text-center mb-10">All Payments</h1>

<div class="overflow-x-auto">
    <table class="table">
        <!-- head -->
        <thead>
            <?php
            $get_payments = "SELECT * from `user_payments`";
            $result = mysqli_query($conn, $get_payments);
            $row_count = mysqli_num_rows($result);
            echo "<tr>
                <th>Sl No</th>
                <th>Amount</th>
                <th>Payment Mode</th>
                <th>Date</th>
                <th>Delete</th>
                </tr>
                </thead>
                <tbody>";

            if ($row_count == 0) {
                echo "<h1 class='text-3xl font-bold text-center mb-10'>No Payments Yet</h1>";
            } else {
                $number = 1;
                while ($row_data = mysqli_fetch_assoc($result)) {
                    $payment_id  = $row_data['payment_id'];
                    $order_id = $row_data['order_id'];
                    $amount = $row_data['amount'];
                    $payment_mode = $row_data['payment_mode'];
                    $date = $row_data['date'];
                    echo "<tr class='hover'>
                <th>$number</th>
                <td>$amount</td>
                <td>$payment_mode</td>
                <td>$date</td>
                <th>
                    <a href='./index.php?delete_payments=$payment_id' class='btn btn-ghost btn-xs'><i class='fa-solid fa-trash text-lg'></i></a>
                </th>
            </tr>";
                    $number++;
                }
            }
            ?>


            </tbody>
    </table>
</div>