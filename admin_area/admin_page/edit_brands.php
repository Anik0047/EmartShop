<?php
if (isset($_GET['edit_brands'])) {
    $edit_id = $_GET['edit_brands'];


    $get_brands = "SELECT * FROM `brands` where brands_id=$edit_id";
    $result = mysqli_query($conn, $get_brands);
    $row = mysqli_fetch_assoc($result);
    $brands_name = $row['brands_title'];
}


if (isset($_POST['brands_update'])) {
    $update_name = $_POST['brands_name'];


    $update_query = "UPDATE `brands` set brands_title='$update_name' where brands_id=$edit_id";
    $result_update = mysqli_query($conn, $update_query);
    if ($result_update) {
        echo "<script>alert('Update successfully'); window.location.href='./index.php?view_brands';</script>";
    }
}

?>





<h1 class="text-3xl font-bold text-center mb-10">Edit brands</h1>

<form action="" method="post">
    <div class="w-96 mx-auto mb-5">
        <input name="brands_name" type="text" value="<?php echo $brands_name ?>" class="input input-bordered w-full"
            required />
    </div>
    <div class="w-96 mx-auto text-center my-10">
        <input name="brands_update" type="submit"
            class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once'
            value="Update">
    </div>
</form>