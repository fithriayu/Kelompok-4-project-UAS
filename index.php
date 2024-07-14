<?php require 'koneksi/koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The Hasturi - Resto App</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0">
                        <!-- <i class="fa fa-utensils me-3"></i> -->
                        The Hasturi
                    </h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#service" class="nav-item nav-link">Service</a>
                        <a href="#menu" class="nav-item nav-link">Menu</a>
                    </div>
                    <a href="login.php" class="btn btn-primary py-2 px-4">Login</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Discover a world of flavors at The Hasturi. Our passion for exquisite cuisine and impeccable service ensures a dining experience like no other. Join us and savor the taste of perfection.</p>
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=6282294513990&text=Halo...%20saya%20mau%20booking%20table" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        <div class="container-xxl py-5" id="about">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpeg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpeg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpeg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpeg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>The Hasturi</h1>
                        <p class="mb-4">Experience culinary excellence at The Hasturi. Indulge in our exquisite dishes crafted with the finest ingredients. Join us for a memorable dining experience, where exceptional flavors meet warm hospitality.</p>
                        <p class="mb-4">Bon appétit!</p>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Service Start -->
        <div class="container-xxl py-5" id="service">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Services</h5>
                    <h1 class="mb-5">Explore Our Services</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-camera-retro text-primary mb-4"></i>
                                <h5>Photo Spot</h5>
                                <p>Capture memories in our stylish photo spots.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-pizza-slice text-primary mb-4"></i>
                                <h5>Excelent Menu</h5>
                                <p>Savor a diverse menu of delicious dishes and refreshing drinks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-guitar text-primary mb-4"></i>
                                <h5>Live Music</h5>
                                <p>Enjoy vibrant live music that enhances your dining experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5" id="menu">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-list fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">All</small>
                                    <h6 class="mt-n1 mb-0">Menus</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-plus fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Main</small>
                                    <h6 class="mt-n1 mb-0">Menu</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Starter</small>
                                    <h6 class="mt-n1 mb-0">Menu</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-4">
                                <i class="fa fa-cookie-bite fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">All About</small>
                                    <h6 class="mt-n1 mb-0">Snacks</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-5">
                                <i class="fa fa-star fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Specialty</small>
                                    <h6 class="mt-n1 mb-0">Foods</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-6">
                                <i class="fa fa-mug-hot fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Cup of</small>
                                    <h6 class="mt-n1 mb-0">Coffee</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-7">
                                <i class="fa fa-wine-glass fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Healthy</small>
                                    <h6 class="mt-n1 mb-0">Drink</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-8">
                                <i class="fa fa-lemon fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Fresh</small>
                                    <h6 class="mt-n1 mb-0">Juice</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">

                                <?php
                                $data = mysqli_query($koneksi, "SELECT * FROM masakan");
                                while ($row = mysqli_fetch_array($data)) {
                                ?>

                                    <div class="col-lg-4">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="dashboard/assets/img/masakan/<?= $row['foto'] ?>" alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span><?= $row['nama_masakan'] ?></span>
                                                </h5>
                                                <span class="text-primary" style="font-size: 1.3em !important;"> Rp. <?= number_format($row['harga'], 2, ',', '.') . ' -' ?> </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>

                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">

                                <?php
                                $data = mysqli_query($koneksi, "SELECT * FROM masakan WHERE kategori = 'Main Menu'");
                                while ($row = mysqli_fetch_array($data)) {
                                ?>

                                    <div class="col-lg-4">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="dashboard/assets/img/masakan/<?= $row['foto'] ?>" alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span><?= $row['nama_masakan'] ?></span>
                                                </h5>
                                                <span class="text-primary" style="font-size: 1.3em !important;"> Rp. <?= number_format($row['harga'], 2, ',', '.') . ' -' ?> </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>

                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">

                                <?php
                                $data = mysqli_query($koneksi, "SELECT * FROM masakan WHERE kategori = 'Starters'");
                                while ($row = mysqli_fetch_array($data)) {
                                ?>

                                    <div class="col-lg-4">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="dashboard/assets/img/masakan/<?= $row['foto'] ?>" alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span><?= $row['nama_masakan'] ?></span>
                                                </h5>
                                                <span class="text-primary" style="font-size: 1.3em !important;"> Rp. <?= number_format($row['harga'], 2, ',', '.') . ' -' ?> </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>

                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">

                                <?php
                                $data = mysqli_query($koneksi, "SELECT * FROM masakan WHERE kategori = 'Snacks'");
                                while ($row = mysqli_fetch_array($data)) {
                                ?>

                                    <div class="col-lg-4">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="dashboard/assets/img/masakan/<?= $row['foto'] ?>" alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span><?= $row['nama_masakan'] ?></span>
                                                </h5>
                                                <span class="text-primary" style="font-size: 1.3em !important;"> Rp. <?= number_format($row['harga'], 2, ',', '.') . ' -' ?> </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>

                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">

                                <?php
                                $data = mysqli_query($koneksi, "SELECT * FROM masakan WHERE kategori = 'Specialty'");
                                while ($row = mysqli_fetch_array($data)) {
                                ?>

                                    <div class="col-lg-4">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="dashboard/assets/img/masakan/<?= $row['foto'] ?>" alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span><?= $row['nama_masakan'] ?></span>
                                                </h5>
                                                <span class="text-primary" style="font-size: 1.3em !important;"> Rp. <?= number_format($row['harga'], 2, ',', '.') . ' -' ?> </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>

                        <div id="tab-6" class="tab-pane fade show p-0">
                            <div class="row g-4">

                                <?php
                                $data = mysqli_query($koneksi, "SELECT * FROM masakan WHERE kategori = 'Coffee'");
                                while ($row = mysqli_fetch_array($data)) {
                                ?>

                                    <div class="col-lg-4">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="dashboard/assets/img/masakan/<?= $row['foto'] ?>" alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span><?= $row['nama_masakan'] ?></span>
                                                </h5>
                                                <span class="text-primary" style="font-size: 1.3em !important;"> Rp. <?= number_format($row['harga'], 2, ',', '.') . ' -' ?> </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>

                        <div id="tab-7" class="tab-pane fade show p-0">
                            <div class="row g-4">

                                <?php
                                $data = mysqli_query($koneksi, "SELECT * FROM masakan WHERE kategori = 'Healthy Drink'");
                                while ($row = mysqli_fetch_array($data)) {
                                ?>

                                    <div class="col-lg-4">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="dashboard/assets/img/masakan/<?= $row['foto'] ?>" alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span><?= $row['nama_masakan'] ?></span>
                                                </h5>
                                                <span class="text-primary" style="font-size: 1.3em !important;"> Rp. <?= number_format($row['harga'], 2, ',', '.') . ' -' ?> </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>

                        <div id="tab-8" class="tab-pane fade show p-0">
                            <div class="row g-4">

                                <?php
                                $data = mysqli_query($koneksi, "SELECT * FROM masakan WHERE kategori = 'Fresh Juice'");
                                while ($row = mysqli_fetch_array($data)) {
                                ?>

                                    <div class="col-lg-4">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="dashboard/assets/img/masakan/<?= $row['foto'] ?>" alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span><?= $row['nama_masakan'] ?></span>
                                                </h5>
                                                <span class="text-primary" style="font-size: 1.3em !important;"> Rp. <?= number_format($row['harga'], 2, ',', '.') . ' -' ?> </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Sei Renggas, Kota Kisaran Barat, Asahan Regency, North Sumatra 21211</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 822-9451-3990</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>thehasturi@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                    <h5 class="text-light fw-normal">Monday - Saturday</h5>
                    <p>09AM - 09PM</p>
                    <h5 class="text-light fw-normal">Sunday</h5>
                    <p>10AM - 08PM</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-0 mb-md-0">
                        &copy; <a class="border-bottom" href="#">The Hasturi</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <span style="visibility: hidden;">
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </span>
                    </div>
                    <div class="col-md-6 text-center text-md-end" style="visibility: hidden;">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>