<h1 class="text-3xl font-bold text-center mb-10">All Users</h1>


<h1 class="text-3xl font-bold text-center mb-10">All Payments</h1>

<div class="overflow-x-auto">
    <table class="table">
        <!-- head -->
        <thead>
            <?php
            $get_payments = "SELECT * from `user_table`";
            $result = mysqli_query($conn, $get_payments);
            $row_count = mysqli_num_rows($result);
            echo "<tr>
                <th>Sl No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Delete</th>
                </tr>
                </thead>
                <tbody>";

            if ($row_count == 0) {
                echo "<h1 class='text-3xl font-bold text-center mb-10'>No Users</h1>";
            } else {
                $number = 1;
                while ($row_data = mysqli_fetch_assoc($result)) {
                    $user_id   = $row_data['user_id'];
                    $user_name = $row_data['user_name'];
                    $user_email = $row_data['user_email'];
                    $user_image = $row_data['user_image'];
                    $user_address = $row_data['user_address'];
                    $user_phone = $row_data['user_phone'];
                    echo "<tr class='hover'>
                <th>$number</th>
                <td>
          <div class='flex items-center gap-3'>
            <div class='avatar'>
              <div class='mask mask-squircle w-12 h-12'>
                <img src='./../user_area/user_profile_image/$user_image' alt='Avatar Tailwind CSS Component' />
              </div>
            </div>
            <div>
              <div class='font-bold'>$user_name</div>
            </div>
          </div>
        </td>
                <td>$user_email</td>
                <td>$user_address</td>
                <td>$user_phone</td>
                <th>
                    <a href='./index.php?delete_user=$user_id' class='btn btn-ghost btn-xs'><i class='fa-solid fa-trash text-lg'></i></a>
                </th>
            </tr>";
                    $number++;
                }
            }
            ?>


            </tbody>
    </table>
</div>