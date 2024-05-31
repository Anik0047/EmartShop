<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-commerce website</title>
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- style css link -->
    <link rel="stylesheet" href="style.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img class="logo" src="images/logo.png" alt="">
                <a class="navbar-brand" href="#">Emart Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse container-lg-d-flex justify-content-around"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav mb-2 mb-lg-0 ms-0 ms-lg-0 align-items-lg-center">
                        <li class="nav-item pt-sm-3 pt-lg-0">
                            <div class="d-flex align-items-sm-center align-items-lg-center">
                                <img class="lcon" src="images/logo.png" alt="">
                                <a class="nav-link fw-bold fs-6" aria-current="page" href="#">Anik Barua</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li class="nav-item ps-sm-2">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Banner -->

    <section class="banner d-flex justify-content-around align-items-center flex-column flex-lg-row">
        <div class="brand_detail">
            <h1 class="brand_name">Welcome to <span class="brand_name_style">Emart Shop</span></h1>
            <h1 class="brand_name">Your One-Stop Online Store</h1>
            <h1 class="brand_name">The Future of Online Shopping</h1>
        </div>
        <div class="body">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    </div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                </div>
            </div>
        </div>
    </section>



    <!-- product -->

    <div class="product_container">
        <p class="ms-5 fs-2">Products</p>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 border p-0">
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item product_brand_style">
                        <a class="nav-link" href="">
                            <h4>Brands</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <h6>Brand 1</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <h6>Brand 2</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <h6>Brands 3</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <h6>Brands 4</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <h6>Brands 5</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <h6>Brands 6</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <h6>Brands 7</h6>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item product_brand_style">
                        <a class="nav-link" href="">
                            <h4>Categories</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <h6>Categories 1</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <h6>Categories 2</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <h6>Categories 3</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <h6>Categories 4</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <h6>Categories 5</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <h6>Categories 6</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <h6>Categories 7</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <h6>Categories 8</h6>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-4  mb-3 mb-3">
                        <div class="card card_style shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                            <img src="images/Adidas/DROPSET 2 TRAINING SHOES/pic-1.avif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn btn-primary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  mb-3">
                        <div class="card card_style shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                            <img src="images/Burberry/B Cut Bifold Coin Wallet/pic-1.webp" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn btn-primary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  mb-3">
                        <div class="card card_style shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                            <img src="images/Nike/Jordan True Flight/pic-1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn btn-primary">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center bg-body-tertiary ">
        <div class="container pt-4">
            <section class="mb-4">
                <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>
                <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>
                <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>
                <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>
                <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
                <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
            </section>
        </div>
        <div class="text-center text-body p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
    </footer>







    <!-- Bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-c4I/66yy9LNhO07w3dju3CVCIfCOJzLm2xrO+ws37A6OKA6cI/XQv7DYWg9e8o6E" crossorigin="anonymous">
    </script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        effect: "cards",
        grabCursor: true,
    });
    </script>


</body>

</html>