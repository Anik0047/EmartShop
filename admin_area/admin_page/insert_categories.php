<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Categories</title>
    <!-- Include SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
    <!-- Your PHP and HTML content here -->
    <?php
    // Include the database connection file
    include('.././database/connect.php');

    // Check if the form has been submitted
    if (isset($_POST['insert_category'])) {
        // Get the category title from the form submission
        $category_title = $_POST['category_title'];

        // Query to check if the category already exists in the database
        $select_query = "SELECT * from `categories` where category_title='$category_title'";
        // Execute the query
        $selected_result = mysqli_query($conn, $select_query);
        // Get the number of rows returned by the query
        $number = mysqli_num_rows($selected_result);

        // If the category already exists, show an alert
        if ($number > 0) {
            echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'This category is already in the database.'
                });
            });
        </script>";
        } else {
            // If the category does not exist, insert it into the database
            $insert_query = "INSERT into `categories` (category_title) values ('$category_title')";
            // Execute the insert query
            $result = mysqli_query($conn, $insert_query);
            // If the insert query was successful, show an alert
            if ($result) {
                echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Category has been added to the database!'
                    });
                });
            </script>";
            }
        }
    }
    ?>

    <!-- HTML for the form to insert categories -->
    <h1 class="text-4xl text-center font-bold">Insert Categories</h1>
    <form action="" method="post" class="mt-10 flex flex-col justify-center items-center">
        <!-- Input field for the category title -->
        <input type="text" name="category_title" placeholder="Enter Category"
            class="input input-bordered border border-black w-2/4 mx-96" />
        <!-- Submit button for the form -->
        <input
            class="text-lg font-bold rounded-lg py-2 px-10 w-52 mt-5 bg-white hover:bg-orange-500 transition ease-in delay-150 hover:-translate-y-1 hover:ease-in-out hover:scale-110 duration-300"
            type="submit" name="insert_category">
    </form>

    <!-- Include SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>