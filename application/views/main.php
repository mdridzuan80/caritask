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
					<?php if (check()) { ?>
						<a href="<?= site_url('dashboard') ?>" class="nav-item nav-link">Dashboard</a>
					<?php } ?>
				</div>
				<?php if (!check()) { ?>
					<a href="<?= site_url('auth') ?>" class="btn btn-light border border-primary rounded-pill text-primary py-2 px-4 me-4">Log In</a>
					<a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4">Sign Up</a>
				<?php } ?>
			</div>
		</nav>


		<!-- Hero Header Start -->
		<div class="hero-header overflow-hidden px-5">
			<div class="rotate-img">
				<img src="<?= base_url('assets/images/sty-1.png') ?>" class="img-fluid w-100" alt="">
				<div class="rotate-sty-2"></div>
			</div>
			<div class="row gy-5 align-items-center">
				<div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
					<h1 class="display-4 text-dark mb-4 wow fadeInUp" data-wow-delay="0.3s">Make Life Easier with On-Demand Services</h1>
					<p class="fs-4 mb-4 wow fadeInUp" data-wow-delay="0.5s">A platform that takes the hassle out of everyday tasks, connecting you with trusted professionals who get the job done efficiently, quickly, and with care.</p>
					<a href="#features" class="btn btn-primary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.7s">Get Started</a>
				</div>
				<div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
					<video class="img-fluid w-100 h-100" autoplay muted loop>
						<source src="<?= base_url('assets/images/index.mp4') ?>" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div>
			</div>
		</div>
		<!-- Hero Header End -->
	</div>
	<!-- Navbar & Hero End -->


	<!-- About Start -->
	<div class="container-fluid overflow-hidden py-5" style="margin-top: 6rem;">
		<div class="container py-5">
			<div class="row g-5">
				<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
					<div class="RotateMoveLeft">
						<img src="<?= base_url('assets/images/about-1.png') ?>" class="img-fluid w-100" alt="">
					</div>
				</div>
				<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
					<h4 class="mb-1 text-primary">About Us</h4>
					<h1 class="display-5 mb-4">CariTask – Bringing Ease to Your Everyday Life</h1>
					<p class="mb-4">At <b>CariTask,</b> we believe that life’s most important moments shouldn’t be weighed down by everyday tasks. That's why we've created a platform that connects you with reliable experts who can help get things done—quickly, effortlessly, and with a personal touch. Whether you're juggling work, family, or simply trying to make time for yourself, CariTask is your go-to solution for everything from home repairs and fitness coaching to pet care and cleaning services.
					</p>
					<a href="<?= base_url() ?>about" class="btn btn-primary rounded-pill py-3 px-5">About More</a>
				</div>
			</div>
		</div>
	</div>
	<!-- About End -->


	<!-- Service Start -->
	<div class="container-fluid service py-5">
		<div class="container py-5">
			<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
				<h4 class="mb-1 text-primary">Our Service</h4>
				<h1 class="display-5 mb-4">What We Can Do For You</h1>
				<p class="mb-0"><b>CariTask started with one simple idea:</b> Everyone deserves a Little more ease in their lives. <br><B>Our mission</B> is to streamline your Day-to-Day by providing on-demand services <br>that integrate seamlessly into your routine.<br> No more frantic internet searches or last-minute stress. With our easy-to-use platform, you can find and book trusted professionals who show up at your door, ready to help—allowing you to focus on what truly matters.
				</p>
			</div>
			<div class="row g-4 justify-content-center">
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
					<div class="service-item text-center rounded p-4">
						<div class="service-icon d-inline-block bg-light rounded p-4 mb-4">
							<img src="<?= base_url('assets/images/repair-tools.png') ?>" class="img-fluid" alt="">
						</div>
						<div class="service-content">
							<h4 class="mb-4">Home Repair</h4>
							<p class="mb-4">From Minor Fixes To Major Renovations,<br> Our Skilled Technicians are Here to Help You.
							</p>
							<a href="<?= base_url() ?>Home_Repair" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
					<div class="service-item text-center rounded p-4">
						<div class="service-icon d-inline-block bg-light rounded p-4 mb-4">
							<img src="<?= base_url('assets/images/trainer.png') ?>" class="img-fluid" alt="">
						</div>
						<div class="service-content">
							<h4 class="mb-4">Fitness coaching </h4>
							<p class="mb-4">We Provide you with the Support & Motivation You Need to Lead a Healthier & Active Lifestyle.
							</p>
							<a href="<?= base_url() ?>Fitness_Coaching" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
					<div class="service-item text-center rounded p-4">
						<div class="service-icon d-inline-block bg-light rounded p-4 mb-4">
							<img src="<?= base_url('assets/images/world-animal-day.png') ?>" class="img-fluid" alt="">
						</div>
						<div class="service-content">
							<h4 class="mb-4"><b>Pet care</b></h4>
							<p class="mb-4">From Grooming & Boarding to Medical Care & Training, We Offer a Wide Range Of Services.
							</p>
							<a href="<?= base_url() ?>Pet_Care" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
					<div class="service-item text-center rounded p-4">
						<div class="service-icon d-inline-block bg-light rounded p-4 mb-4">
							<img src="<?= base_url('assets/images/housekeeping.png') ?>" class="img-fluid" alt="">
						</div>
						<div class="service-content">
							<h4 class="mb-4">Cleaning Service</h4>
							<p class="mb-4">Whether you need a one-time deep clean or regular maintenance, Caritask Cleaning Services has you covered.
							</p>
							
							<a href="<?= base_url() ?>Cleaning_Service" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
						</div>
					</div>
				</div>
				<!--div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i class="fas fa-mail-bulk fa-5x text-secondary"></i></div>
                            <div class="service-content">
                                <h4 class="mb-4">Home maintaince</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit
                                </p>
                                <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i class="fas fa-thumbs-up fa-5x text-secondary"></i></div>
                            <div class="service-content">
                                <h4 class="mb-4">Acquistion Emails </h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit
                                </p>
                                <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i class="fa fa-subway fa-5x text-secondary"></i></div>
                            <div class="service-content">
                                <h4 class="mb-4">Retention Emails</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit
                                </p>
                                <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i class="fas fa-sitemap fa-5x text-secondary"></i></div>
                            <div class="service-content">
                                <h4 class="mb-4">Promotional Emails</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit
                                </p>
                                <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div> -->
			</div>
		</div>
	</div>
	<!-- Service End -->


	<!-- Feature Start -->
	<div id="features" class="container-fluid feature overflow-hidden py-5">
		<div class="container py-5">
			<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
				<h4 class="text-primary">Our Feature</h4>
				<h1 class="display-5 mb-4">Convenience and Trust at Your Fingertips</h1>
				<p class="mb-0">We’re more than just a service platform. We bring peace of mind by connecting you with experienced, vetted professionals who take the stress out of everyday tasks.
				</p>
			</div>
			<div class="row g-4 justify-content-center text-center mb-5">
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
					<div class="text-center p-4">
						<div class="d-inline-block rounded bg-light p-4 mb-4"><i class="fas fa-envelope fa-5x text-secondary"></i></div>
						<div class="feature-content">
							<a href="#" class="h4">Easy Booking <i class="fa fa-long-arrow-alt-right"></i></a>
							<p class="mt-4 mb-0">Simple, user-friendly interface for booking services on demand.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
					<div class="text-center p-4">
						<div class="d-inline-block rounded bg-light p-4 mb-4"><i class="fas fa-mail-bulk fa-5x text-secondary"></i></div>
						<div class="feature-content">
							<a href="#" class="h4">Vetted Professionals <i class="fa fa-long-arrow-alt-right"></i></a>
							<p class="mt-4 mb-0">Trust that our experts are qualified and reliable.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
					<div class="text-center rounded p-4">
						<div class="d-inline-block rounded bg-light p-4 mb-4"><i class="fas fa-sitemap fa-5x text-secondary"></i></div>
						<div class="feature-content">
							<a href="#" class="h4">Transparent Pricing<i class="fa fa-long-arrow-alt-right"></i></a>
							<p class="mt-4 mb-0"> Clear, fair pricing with no hidden fees.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
					<div class="text-center rounded p-4">
						<div class="d-inline-block rounded bg-light p-4 mb-4"><i class="fas fa-tasks fa-5x text-secondary"></i></div>
						<div class="feature-content">
							<a href="#" class="h4">Real-Time Updates <i class="fa fa-long-arrow-alt-right"></i></a>
							<p class="mt-4 mb-0">Stay informed with real-time booking and service updates.
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
					<div class="my-3">
						<a href="#" class="btn btn-primary d-inline rounded-pill px-5 py-3">Sign Up / Sign In</a>
					</div>
				</div>
			</div>
			<div class="row g-5 pt-5" style="margin-top: 6rem;">
				<div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
					<div class="feature-img RotateMoveLeft h-100" style="object-fit: cover;">
						<img src="<?= base_url('assets/images/features-1.png') ?>" class="img-fluid w-100 h-100" alt="">
					</div>
				</div>
				<div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
					<h4 class="text-primary">Customer Experience</h4>
					<h1 class="display-5 mb-4">Happy Customers</h1>
					<p class="mb-4"> No more frantic Googling or last-minute stress. Just a simple, user-friendly platform that brings trusted professionals right to your door.
					</p>
					<div class="row g-4">
						<div class="col-6">
							<div class="d-flex">
								<i class="fas fa-newspaper fa-4x text-secondary"></i>
								<div class="d-flex flex-column ms-3">
									<h2 class="mb-0 fw-bold">285</h2>
									<small class="text-dark">Created Projects</small>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="d-flex">
								<i class="fas fa-users fa-4x text-secondary"></i>
								<div class="d-flex flex-column ms-3">
									<h2 class="mb-0 fw-bold">6560</h2>
									<small class="text-dark">Happy Clients</small>
								</div>
							</div>
						</div>
					</div>
					<!--div class="my-4">
                            <a href="#" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                        </div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- Feature End -->


	<!-- FAQ Start -->
	<div class="container-fluid FAQ bg-light overflow-hidden py-5">
		<div class="container py-5">
			<div class="row g-5 align-items-center">
				<div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item border-0 mb-4">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseTOne">
									Why Choose Caritask?
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body my-2">
									<h5>Convenience at Your Fingertips</h5>
									<p>Why choose CariTask? Because we’re more than just a service platform—we’re the helping hand you didn’t know you needed. Whether it’s a personal training session, a plumbing issue, or someone to walk your dog, CariTask connects you with reliable experts in just a few clicks. </p>
									<p>You no longer need to stress about searching, negotiating, or wondering who to trust. With CariTask, convenience isn’t a luxury—it’s our standard.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item border-0 mb-4">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Are professionals are trustworthy?
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body my-2">
									<h5>Vetted Professionals You Can Trust</h5>
									<p>Every service provider on our platform is carefully vetted, so when they show up, they bring not only the necessary tools and expertise but also the peace of mind that comes with knowing you’re in good hands.</p>
									<p>We prioritize trust, ensuring that all our experts are thoroughly reviewed before they reach you.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item border-0">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Are There Any Hidden Charges?
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body my-2">
									<h5>Transparent Pricing & Seamless Experience</h5>
									<p>We go beyond just providing a service—we offer an experience. At CariTask, we pride ourselves on being transparent, offering fair pricing with no hidden fees. Our secure payments, real-time booking updates, and rating system ensure that you have a smooth, hassle-free experience every time. </p>
									<p>When you book with CariTask, you can trust that the process will be straightforward, and the result will meet your expectations.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
					<div class="FAQ-img RotateMoveRight rounded">
						<img src="<?= base_url('assets/images/about-1.png') ?>" class="img-fluid w-100" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- FAQ End -->


	<!-- Pricing Start -->
	<div id="Booking" class="container-fluid price py-5">
		<div class="container py-5">
			<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
				<h4 class="text-primary">How It Works</h4>
				<h1 class="display-5 mb-4">As Simple As it Looks</h1>
				<p class="mb-0">Get Things Done in 3 Simple Steps.
				</p>
			</div>
			<div class="row g-5 justify-content-center">
				<div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
					<div class="price-item bg-light rounded text-center">
						<div class="text-center text-secondary border-bottom d-flex flex-column justify-content-center p-4" style="width: 100%; height: 160px;">
							<p class="fs-2 fw-bold text-uppercase mb-0">Select <br> Service</p>
							<div class="d-flex justify-content-center">
								<strong class="align-self-start"></strong>
								<p class="mb-0"><span class="display-5"></span></p>
							</div>
						</div>
						<div class="text-start p-5">
							<p>Browse our wide range of services and choose the one that fits your needs.</p>
							<div class="accordion" id="accordionExample">
								<div class="accordion-item border-0 mb-4">
									<h2 class="accordion-header" id="headingOne">
										<button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseTOne">
											Set Service
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body my-2">
											<b>*CLEANING SERVICES</b><br>
											<b>*HOME REPAIR</b> <br>
											<b>*PET CARE</b><br>
											<b>*Fitness</b> <br>
										</div>
									</div>
								</div>

								<div class="accordion-item border-0">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Service
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body my-2">
											<p>
												<b>*</b> Gereral repair <br>
												<b>*</b> Plumbing<br>
												<b>*</b> Electrial Work<br>
												<b>*</b> HVAC Services<br>
												<b>*</b> Smart Home Installation<br>
												<b>*</b> Emergency Repair
											</p>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
					<div class="price-item bg-light rounded text-center">

						<div class="text-center text-primary border-bottom d-flex flex-column justify-content-center p-4" style="width: 100%; height: 160px;">
							<p class="fs-2 fw-bold text-uppercase mb-0">Book <br> Expert</p>

						</div>
						<div class="text-start p-5">
							<p>With just a few clicks, book a trusted professional at a time that’s convenient for you.</p>
							<div class="accordion" id="accordionExample">
								<div class="accordion-item border-0 mb-4">
									<h2 class="accordion-header" id="headingThree">
										<button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
											DATE
										</button>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="accordion-body my-2">
											1 2 3 4 5 6 7<BR>
											8 9 10 11 12 13 14<BR>
											15 16 17 18 19 20 21<BR>
											22 23 24 25 26 27 28<BR>
											29 30 31
										</div>
									</div>
								</div>
								<button class="btn btn-light rounded-pill py-2 px-5" type="button">Time Slot</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
					<div class="price-item bg-light rounded text-center">
						<div class="text-center text-secondary border-bottom d-flex flex-column justify-content-center p-4" style="width: 100%; height: 160px;">
							<p class="fs-2 fw-bold text-uppercase mb-0">Enjoy <br>Peace of Mind</p>
							<!--div class="d-flex justify-content-center">
                                    <strong class="align-self-start">$</strong>
                                    <p class="mb-0"><span class="display-5">49</span>/mo</p>
                                </div>    -->
						</div>
						<div class="text-start p-5">
							<p>Relax knowing the job will be handled by a vetted, reliable expert.</p>
							<div class="accordion" id="accordionExample">
								<div class="accordion-item border-0 mb-4">
									<h2 class="accordion-header" id="headingFour">
										<button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
											Enter Amount
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body my-2">
											*RM 20<br>
											*RM 30 <br>
											*RM 40<br>
											*RM 50 <br>
										</div>
									</div>
								</div>
								<button class="btn btn-light rounded-pill py-2 px-5" type="button">SUBMIT</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pricing End -->
	</div>
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
					<span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i><b>CariTask</b></a>, All right reserved.</span>
				</div>
				<div class="col-md-6 text-center text-md-end text-white">
					Designed & Maintained By <a href="https://alphabyte.com.my"><b>Alphabyte Technologies (M) Sdn. Bhd.</b></a>
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
	<!-- Footer Page
    <div id="footer"></div>
    <script>
        fetch('footer.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('footer').innerHTML = data;
        });
    </script> -->

	<!-- Template Javascript -->

</body>

</html>