<?php
if (isset($_GET['edit_category'])) {
    $edit_id = $_GET['edit_category'];


    $get_category = "SELECT * FROM `categories` where category_id=$edit_id";
    $result = mysqli_query($conn, $get_category);
    $row = mysqli_fetch_assoc($result);
    $category_name = $row['category_title'];
}


if (isset($_POST['category_update'])) {
    $update_name = $_POST['category_name'];


    $update_query = "UPDATE `categories` set category_title='$update_name' where category_id=$edit_id";
    $result_update = mysqli_query($conn, $update_query);
    if ($result_update) {
        echo "<script>alert('Update successfully'); window.location.href='./index.php?view_categories';</script>";
    }
}

?>





<h1 class="text-3xl font-bold text-center mb-10">Edit Category</h1>

<form action="" method="post">
    <div class="w-96 mx-auto mb-5">
        <input name="category_name" type="text" value="<?php echo $category_name ?>" class="input input-bordered w-full" required />
    </div>
    <div class="w-96 mx-auto text-center my-10">
        <input name="category_update" type="submit" class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once' value="Update">
    </div>
</form>