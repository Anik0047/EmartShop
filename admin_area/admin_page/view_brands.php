<h1 class="text-3xl font-bold text-center mb-10">Brands</h1>

<div class="overflow-x-auto w-1/2 mx-auto">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th>Sl no</th>
                <th>Categories Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $select_brands = "SELECT * FROM `brands`";
            $result_brands = mysqli_query($conn, $select_brands);
            $number = 1;
            while ($row_data = mysqli_fetch_assoc($result_brands)) {
                $brands_id = $row_data['brands_id'];
                $brands_title = $row_data['brands_title'];

                echo "<tr class='hover'>
                <th>$number</th>
                <td>$brands_title</td>
                <th><a href='./index.php?edit_brands=$brands_id' class='btn btn-ghost btn-xs'><i class='fa-solid fa-pen-to-square text-lg'></i></a></th>
                <th>
                    <a href='./index.php?delete_brands=$brands_id' class='btn btn-ghost btn-xs'><i class='fa-solid fa-trash text-lg'></i></a>
                </th>
            </tr>";
                $number++;
            }
            ?>

        </tbody>
    </table>
</div>