<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Include DaisyUI CSS -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <!-- Include custom CSS file -->
    <link rel="stylesheet" href="style.css">
    <!-- Include SweetAlert2 CSS for styling the alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
    .custom {
        width: 600px;
        margin: 0 auto;
        text-align: center;

    }

    .custom label {
        display: block;
        text-align: left;
    }
    </style>
</head>

<body>
    <h1 class="text-center text-3xl font-bold mt-7">Registration</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="custom mt-5">
            <div class="mb-5">
                <label class="mb-3 ps-2 font-bold" for="">Name</label>
                <input type="text" placeholder="Enter Your Name" class="border-black input input-bordered w-full " />
            </div>
            <div class="mb-5">
                <label class="mb-3 ps-2 font-bold" for="">Email</label>
                <input type="text" placeholder="Enter Your Email" class="border-black input input-bordered w-full " />
            </div>
            <div class="mb-5">
                <label class="mb-3 ps-2 font-bold" for="">Image</label>
                <input type="file" class="border-black file-input file-input-bordered w-full" />
            </div>
            <div class="mb-5">
                <label class="mb-3 ps-2 font-bold" for="">Password</label>
                <input type="text" placeholder="Enter Your Password"
                    class="border-black input input-bordered w-full " />
            </div>
            <div class="mb-5">
                <label class="mb-3 ps-2 font-bold" for="">Confirm Password</label>
                <input type="text" placeholder="Confirm Password" class="border-black input input-bordered w-full " />
            </div>
            <div class="mb-5">
                <label class="mb-3 ps-2 font-bold" for="">Address</label>
                <input type="text" placeholder="Enter Your Address" class="border-black input input-bordered w-full " />
            </div>
            <div class="mb-5">
                <label class="mb-3 ps-2 font-bold" for="">Contact</label>
                <input type="text" placeholder="Enter Your Number" class="border-black input input-bordered w-full " />
            </div>
            <div>
                <input type="submit" class="btn btn-accent" value="Submit">
                <p class="font-bold mt-2">Already have an account? <a class="text-red-700 link" href="">Login</a></p>
            </div>
        </div>
    </form>
</body>

</html>