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
    <link rel="stylesheet" href="user_style.css">
    <!-- Include SweetAlert2 CSS for styling the alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>

    </style>
</head>

<body>
    <div class="design">
        <h1 class="text-center text-3xl font-bold pt-7">Registration</h1>
        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="custom pt-5">
                <div class="mb-5">
                    <label class="mb-3 ps-2 font-bold" for="">Name</label>
                    <input name="user_name" type="text" placeholder="Enter Your Name"
                        class="border-black input input-bordered w-full  " required />
                </div>
                <div class="mb-5">
                    <label class="mb-3 ps-2 font-bold" for="">Email</label>
                    <input name="user_email" type="text" placeholder="Enter Your Email"
                        class="border-black input input-bordered w-full  " required />
                </div>
                <div class="mb-5">
                    <label class="mb-3 ps-2 font-bold" for="">Image</label>
                    <input name="user_image" type="file" class="border-black file-input file-input-bordered w-full "
                        required />
                </div>
                <div class="mb-5">
                    <label class="mb-3 ps-2 font-bold" for="">Password</label>
                    <input name="user_password" type="password" placeholder="Enter Your Password"
                        class="border-black input input-bordered w-full  " required />
                </div>
                <div class="mb-5">
                    <label class="mb-3 ps-2 font-bold" for="">Confirm Password</label>
                    <input name="confirm_password" type="password" placeholder="Confirm Password"
                        class="border-black input input-bordered w-full  " required />
                </div>
                <div class="mb-5">
                    <label class="mb-3 ps-2 font-bold" for="">Address</label>
                    <input name="user_address" type="text" placeholder="Enter Your Address"
                        class="border-black input input-bordered w-full  " required />
                </div>
                <div class="mb-5">
                    <label class="mb-3 ps-2 font-bold" for="">Contact</label>
                    <input name="user_phone" type="text" placeholder="Enter Your Number"
                        class="border-black input input-bordered w-full  " required />
                </div>
                <div>
                    <input name="user_register" type="submit" class="btn btn-accent font-bold" value="Register">
                    <p class="font-bold pt-2">Already have an account? <a class="text-red-700 link"
                            href="user_login.php">Login</a>
                    </p>
                </div>
            </div>
        </form>
    </div>
</body>

</html>