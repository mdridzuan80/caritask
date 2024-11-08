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
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/animate/animate.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/lightbox/css/lightbox.min.css">
        <!-- Customized Bootstrap Stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <!-- Template Stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">

     
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
                        <a href="<?= base_url() ?>" class="nav-item nav-link active">Home</a>
                        <a href="<?= base_url() ?>about" class="nav-item nav-link">About</a>
                        <a href="<?= base_url() ?>Services" class="nav-item nav-link">Services</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Book Now</a>
                            <div class="dropdown-menu m-0">
                                <a href="<?= base_url() ?>Cleaning_Service" class="dropdown-item">Cleaning Service</a>
                                <a href="<?= base_url() ?>Home_Repair" class="dropdown-item">Home Repair</a>
                                <a href="<?= base_url() ?>Fitness_Coaching" class="dropdown-item">Fitness Coaching</a>
                                <a href="<?= base_url() ?>Pet_Care" class="dropdown-item">Pet Care</a>
                                <!-- a href="404.html" class="dropdown-item">404 Page</a -->
                            </div>
                        </div>
                        <a href="<?= base_url() ?>contact" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <a href="<?=base_url('auth') ?>" class="btn btn-light border border-primary rounded-pill text-primary py-2 px-4 me-4">Log In</a>
                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4">Sign Up</a>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->


         <!-- Header Start -->
         <div class="container-fluid bg-breadcrumb">
            <ul class="breadcrumb-animation">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Home Repair</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>Services">Services</a></li>
                    <li class="breadcrumb-item active text-primary">Home Repair</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="text-primary">Services</h4>
                    <h1 class="display-5 mb-4">Home Repair</h1>
                    <p class="mb-0">At Caritask, we understand that maintaining a comfortable and functional home is essential for your peace of mind.<BR> Our Home Repair Services are designed to provide you with professional, reliable, and convenient solutions for all your home maintenance needs. From minor fixes to major renovations, our skilled technicians are here to help.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="<?= base_url('assets/images/blog-1.png') ?>" class="img-fluid w-100" alt="">
                                <div class="blog-info">
                                    <!-- span><i class="fa fa-clock"></i>Plumbing Services</span>
                                    <div class="d-flex">
                                        <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                        <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="blog-content text-dark border p-4 ">
                                <h5 class="mb-4"><b>Plumbing Services</b></h5>
                                <p class="mb-4"><b>*</b>Leak Repairs<br>
                                                <b>*</b>Drain Cleaning<br>
                                                <b>*</b>Pipe Installation<br>
                                                <b>*</b>Water Heater Repair <br>
                                                <b>*</b>Bathroom Remodeling</p>
                                <a class="btn btn-light rounded-pill py-2 px-4" href="#">BOOK</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="<?= base_url('assets/images/blog-2.png') ?>" class="img-fluid w-100" alt="">
                                <div class="blog-info">
                                    <!-- span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                    <div class="d-flex">
                                        <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                        <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="blog-content text-dark border p-4 ">
                                <h5 class="mb-4"><b>Electrical Services</b></h5>
                                <p class="mb-4"><b>*</b>Wiring and Rewiring<br>
                                                <b>*</b>Lighting Installation<br>
                                                <b>*</b>Circuit Breaker Repair<br>
                                                <b>*</b>Outlet & Switch Installation<br>
                                                <b>*</b>Electrical Inspections</p>
                                <a class="btn btn-light rounded-pill py-2 px-4" href="#">BOOK</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="<?= base_url('assets/images/blog-3.png') ?>" class="img-fluid w-100" alt="">
                                <div class="blog-info">
                                    <!-- span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                    <div class="d-flex">
                                        <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                        <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="blog-content text-dark border p-4 ">
                                <h5 class="mb-4"><b>Carpentry Services</b></h5>
                                <p class="mb-4"><b>*</b>Custom Furniture<br>
                                                <b>*</b>Cabinet Installation<br>
                                                <b>*</b>Door and Window Repairs<br>
                                                <b>*</b>Wood Flooring<br>
                                                <b>*</b>Trim and Molding</p>
                                <a class="btn btn-light rounded-pill py-2 px-4" href="#">BOOK</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="<?= base_url('assets/images/blog-4.png') ?>" class="img-fluid w-100" alt="">
                                <div class="blog-info">
                                    <!-- span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                    <div class="d-flex">
                                        <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                        <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="blog-content text-dark border p-4 ">
                                <h5 class="mb-4"><b> HVAC Services </b></h5>
                                <p class="mb-4"><b>*</b>Installation and Replacement<br>
                                                <b>*</b>Maintenance and Repair<br>
                                                <b>*</b>Duct Cleaning<br>
                                                <b>*</b>Thermostat Installation<br>
                                                <b>*</b>Emergency Services</p>
                                <a class="btn btn-light rounded-pill py-2 px-4" href="#">BOOK</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="<?= base_url('assets/images/blog-5.png') ?>" class="img-fluid w-100" alt="">
                                <div class="blog-info">
                                    <!-- span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                    <div class="d-flex">
                                        <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                        <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="blog-content text-dark border p-4 ">
                                <h5 class="mb-4"><b>Painting Services</b></h5>
                                <p class="mb-4"><b>*</b>Interior Painting<br>
                                                <b>*</b>Exterior Painting<br>
                                                <b>*</b>Wallpaper Installation<br>
                                                <b>*</b>Stain and Varnish<br>
                                                <b>*</b>Color Consultation</p>
                                <a class="btn btn-light rounded-pill py-2 px-4" href="#">BOOK</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="<?= base_url('assets/images/blog-6.png') ?>" class="img-fluid w-100" alt="">
                                <div class="blog-info">
                                    <!-- span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                    <div class="d-flex">
                                        <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                        <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                    </div -->
                                </div>
                            </div>
                            <div class="blog-content text-dark border p-4 ">
                                <h5 class="mb-4"><b>General Home Repair</b></h5>
                                <p class="mb-4"><b>*</b>Drywall Repair<br>
                                                <b>*</b>Roof Repair<br>
                                                <b>*</b>Flooring Repair<br>
                                                <b>*</b>Window Treatments<br>
                                                <b>*</b>Gutter Cleaning</p>
                                <a class="btn btn-light rounded-pill py-2 px-4" href="#">BOOK</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-dark mb-4">Company</h4>
                            <a href=""> Why CariTask?</a>
                            <a href=""> Our Features</a>
                            <a href=""> Our Portfolio</a>
                            <a href=""> About Us</a>
                            <a href=""> Our Blog & News</a>
                            <a href=""> Get In Touch</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-dark">Quick Links</h4>
                            <a href=""> About Us</a>
                            <a href=""> Contact Us</a>
                            <a href=""> Privacy Policy</a>
                            <a href=""> Terms & Conditions</a>
                            <a href=""> Our Blog & News</a>
                            <a href=""> Our Team</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-dark">Services</h4>
                            <a href=""> All Services</a>
                            <a href=""> Promotional Emails</a>
                            <a href=""> Product Updates</a>
                            <a href=""> Email Marketing</a>
                            <a href=""> Acquistion Emails</a>
                            <a href=""> Retention Emails</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-dark">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> 27-1, Jalan PJ1, Taman Pertam Jaya, 75050 Melaka</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@caritask.com.my</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-secondary me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Caritask</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed & Maintained By <a class="border-bottom" href="https://alphabyte.com.my">Alphabyte Technologies</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/lib/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('assets/lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/lib/counterup/counterup.min.js') ?>"></script>
    <script src="<?= base_url('assets/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/lib/lightbox/js/lightbox.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    </body>

</html>