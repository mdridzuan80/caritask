<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Caritask - Services at your Door</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" crossorigin rel="preconnect">
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&family=Rubik:wght@400;500&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="<?= base_url('assets/lib/animate/animate.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/lib/lightbox/css/lightbox.min.css') ?>" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid header position-relative overflow-hidden p-0">
            <nav class="navbar navbar-expand-lg fixed-top navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="<?= base_url() ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                  <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" style="height: 75px;"> <!-- Adjust the height as needed --></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="main.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="<?=base_url() ?>Services" class="nav-item nav-link">Services</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Book Now</a>
                            <div class="dropdown-menu m-0">
                                <a href="Cleaning Service.php" class="dropdown-item">Cleaning Service</a>
                                <a href="HomeRepair.php" class="dropdown-item">Home Repair</a>
                                <a href="Fitness coaching.php" class="dropdown-item">Fitness Coaching</a>
                                <a href="PetCare.php" class="dropdown-item">Pet Care</a>
                                <!-- a href="404.html" class="dropdown-item">404 Page</a -->
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <a href="<?=base_url('auth') ?>" class="btn btn-light border border-primary rounded-pill text-primary py-2 px-4 me-4">Log In</a>
                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4">Sign Up</a>
                </div>
            </nav>
        </div>