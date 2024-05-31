<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- css link -->
    <link rel="stylesheet" href="admin_style.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <section class="container-fluid">
        <div class="row">
            <div class="col-md-2 border side_menu">
                <div class="admin_brand_name">
                    <img src="../images/logo.png" alt="">
                    <p>Emart Shop</p>
                </div>
                <div class="side_menu_items">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item menu_border">
                            <h2 class="accordion-header  text-center">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    View Product
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <a class="nav-link" class="" href=""><i
                                            class="fa-solid fa-bolt w-25"></i>Product</a>
                                </div>
                                <div class="accordion-body">
                                    <a class="nav-link" href=""><i class="fa-solid fa-bolt w-25"></i>Categories</a>
                                </div>
                                <div class="accordion-body">
                                    <a class="nav-link" href=""><i class="fa-solid fa-bolt w-25"></i>Brands</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item menu_border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Insert Product
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <a class="nav-link" href=""><i class="fa-solid fa-bolt w-25"></i>Product</a>
                                </div>
                                <div class="accordion-body">
                                    <a class="nav-link" href=""><i class="fa-solid fa-bolt w-25"></i>Categories</a>
                                </div>
                                <div class="accordion-body">
                                    <a class="nav-link" href=""><i class="fa-solid fa-bolt w-25"></i>Brands</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item menu_border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    All Orders
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <a class="nav-link" href=""><i class="fa-solid fa-bolt w-25"></i>Orders</a>
                                </div>
                                <div class="accordion-body">
                                    <a class="nav-link" href=""><i class="fa-solid fa-bolt w-25"></i>Payments</a>
                                </div>
                            </div>
                        </div>
                        <div class="user_logout">
                            <p><a class="nav-link" href=""><i class="fa-solid fa-bomb w-25"></i>Users</a></p>
                            <p><a class="nav-link" href=""><i class="fa-solid fa-bomb w-25"></i>Logout</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 border">
                <div class="right_side_name">
                    <h1>Admin Dashboard</h1>
                    <div>
                        <img src="../images/logo.png" alt="">
                        <p>Anik Barua</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>