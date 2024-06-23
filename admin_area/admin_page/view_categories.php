<h1 class="text-3xl font-bold text-center mb-10">Categories</h1>

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
            $select_category = "SELECT * FROM `Categories`";
            $result_category = mysqli_query($conn, $select_category);
            $number = 1;
            while ($row_data = mysqli_fetch_assoc($result_category)) {
                $category_id = $row_data['category_id'];
                $category_title = $row_data['category_title'];

                echo "<tr class='hover'>
                <th>$number</th>
                <td>$category_title</td>
                <th><a href='./index.php?edit_category=$category_id' class='btn btn-ghost btn-xs'><i class='fa-solid fa-pen-to-square text-lg'></i></a></th>
                <th>
                    <a href='./index.php?delete_category=$category_id' class='btn btn-ghost btn-xs'><i class='fa-solid fa-trash text-lg'></i></a>
                </th>
            </tr>";
                $number++;
            }
            ?>

        </tbody>
    </table>
</div>