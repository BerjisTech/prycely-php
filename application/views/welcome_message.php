<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico" />
	<title>Chama</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets/frontend/css/bootstrap.min.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/frontend/vendors/bootstrap-selector/css/bootstrap-select.min.css"); ?>">
	<!--icon font css-->
	<link rel="stylesheet" href="<?php echo base_url("assets/frontend/vendors/themify-icon/themify-icons.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/frontend/vendors/flaticon/flaticon.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/frontend/vendors/animation/animate.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/frontend/vendors/owl-carousel/assets/owl.carousel.min.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/frontend/vendors/magnify-pop/magnific-popup.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/frontend/vendors/nice-select/nice-select.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/frontend/vendors/elagent/style.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/frontend/css/style.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/frontend/css/responsive.css"); ?>">
</head>

<body>
	<div id="preloader">
		<div id="ctn-preloader" class="ctn-preloader">
			<div class="animation-preloader">
				<div class="spinner"></div>
				<div class="txt-loading">
					<span data-text-preloader="T" class="letters-loading">
						T
					</span>
					<span data-text-preloader="H" class="letters-loading">
						H
					</span>
					<span data-text-preloader="E" class="letters-loading">
						E
					</span>
					<span data-text-preloader="C" class="letters-loading">
						C
					</span>
					<span data-text-preloader="H" class="letters-loading">
						H
					</span>
					<span data-text-preloader="A" class="letters-loading">
						A
					</span>
					<span data-text-preloader="M" class="letters-loading">
						M
					</span>
					<span data-text-preloader="A" class="letters-loading">
						A
					</span>
				</div>
				<p class="text-center">Loading</p>
			</div>
			<div class="loader">
				<div class="row">
					<div class="col-3 loader-section section-left">
						<div class="bg"></div>
					</div>
					<div class="col-3 loader-section section-left">
						<div class="bg"></div>
					</div>
					<div class="col-3 loader-section section-right">
						<div class="bg"></div>
					</div>
					<div class="col-3 loader-section section-right">
						<div class="bg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="body_wrapper">
		<header class="header_area">
			<nav class="navbar navbar-expand-lg menu_one menu_four">
				<div class="container">
					<a class="navbar-brand sticky_logo" href="#"><img src="<?php echo base_url("assets/frontend/img/logo2.png"); ?>" srcset="img/logo2x-2.png 2x" alt="logo"><img src="<?php echo base_url("assets/frontend/img/logo.png"); ?>" srcset="img/logo2x.png 2x" alt=""></a>
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="menu_toggle">
							<span class="hamburger">
								<span></span>
								<span></span>
								<span></span>
							</span>
							<span class="hamburger-cross">
								<span></span>
								<span></span>
							</span>
						</span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav menu w_menu ml-auto mr-auto">
							<li class="nav-item dropdown submenu active">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Home
								</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a href="home-project-management.html" class="nav-link">Project Management</a></li>
									<li class="nav-item"><a href="home-mail.html" class="nav-link">Mail</a></li>
									<li class="nav-item"><a href="home-prototyping.html" class="nav-link">Prototyping</a></li>
									<li class="nav-item"><a href="home-digital-marketing.html" class="nav-link">Digital Marketing</a></li>
									<li class="nav-item"><a href="home-cloud.html" class="nav-link">Cloud</a></li>
									<li class="nav-item"><a href="home-software-dark.html" class="nav-link">Software (dark)</a></li>
									<li class="nav-item"><a href="home-app-showcase.html" class="nav-link">App Showcase</a></li>
									<li class="nav-item"><a href="home-startup.html" class="nav-link">Startup</a></li>
									<li class="nav-item active"><a href="home-payment-processing.html" class="nav-link">Payment processing</a></li>
									<li class="nav-item"><a href="home-saas.html" class="nav-link">Saas</a></li>
								</ul>
							</li>
							<li class="dropdown submenu nav-item"><a title="Pages" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Pages&nbsp;</a>
								<ul role="menu" class=" dropdown-menu">
									<li class="dropdown submenu nav-item"><a title="Service" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Service <span class="arrow_carrot-right"></span> </a>
										<ul class=" dropdown-menu">
											<li class="nav-item"><a title="Service 01" class="nav-link" href="service-1.html">Service 01&nbsp;</a></li>
											<li class="nav-item"><a title="Service 02" class="nav-link" href="service-2.html">Service 02&nbsp;</a></li>
											<li class="nav-item"><a title="Service 03" class="nav-link" href="service-3.html">Service 03&nbsp;</a></li>
											<li class="nav-item"><a title="Service Details" class="nav-link" href="service-details.html">Service Details&nbsp;</a></li>
										</ul>
									</li>

									<li class="dropdown submenu nav-item"><a title="Career" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Career <span class="arrow_carrot-right"></span> </a>
										<ul class=" dropdown-menu">
											<li class="nav-item"><a title="Job Listing" class="nav-link" href="job-listing.html">Job Listing&nbsp;</a></li>
											<li class="nav-item"><a title="Job Details" class="nav-link" href="job-details.html">Job Details&nbsp;</a></li>
											<li class="nav-item"><a title="Apply Job" class="nav-link" href="job-apply.html">Apply Job&nbsp;</a></li>
										</ul>
									</li>

									<li class="nav-item"><a title="About" class="nav-link" href="about.html">About&nbsp;</a></li>

									<li class="nav-item"><a title="Process" class="nav-link" href="process.html">Process&nbsp;</a></li>


									<li class="nav-item"><a title="Pricing" class="nav-link" href="price.html">Pricing&nbsp;</a></li>

									<li class="dropdown submenu nav-item"><a title="Case Study" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Case Study<span class="arrow_carrot-right"></span> </a>
										<ul class=" dropdown-menu">
											<li class="nav-item"><a title="Case Study" class="nav-link" href="case-study.html">Case Study&nbsp;</a></li>
											<li class="nav-item"><a title="Case study Details" class="nav-link" href="case-study-details.html">Case Study Details&nbsp;</a></li>
										</ul>
									</li>

									<li class="nav-item"><a title="Team" class="nav-link" href="team.html">Team&nbsp;</a></li>

									<li class="dropdown submenu nav-item"><a title="Sign Up" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Sign Up <span class="arrow_carrot-right"></span> </a>
										<ul class=" dropdown-menu">
											<li class="nav-item"><a title="Sign Up 01" class="nav-link" href="sign-up-1.html">Sign Up 01&nbsp;</a></li>
											<li class="nav-item"><a title="Sign Up 02" class="nav-link" href="sign-up-2.html">Sign Up 02&nbsp;</a></li>

										</ul>
									</li>

									<li class="dropdown submenu nav-item"><a title="Login" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Login<span class="arrow_carrot-right"></span> </a>
										<ul class=" dropdown-menu">
											<li class="nav-item"><a title="Login 01" class="nav-link" href="login.html">Login 01&nbsp;</a></li>
											<li class="nav-item"><a title="Login 02" class="nav-link" href="login-two.html">Login 02&nbsp;</a></li>
										</ul>
									</li>
									<li class="nav-item"><a title="FAQ" class="nav-link" href="faq.html">FAQ&nbsp;</a></li>

									<li class="dropdown submenu nav-item"><a title="Contact" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Contact <span class="arrow_carrot-right"></span> </a>
										<ul role="menu" class="dropdown-menu">
											<li class="nav-item"><a title="Contact 01" class="nav-link" href="contact-1.html">Contact 01&nbsp;</a></li>
											<li class="nav-item"><a title="Contact  02" class="nav-link" href="contact-2.html">Contact 02&nbsp;</a></li>
										</ul>
									</li>

									<li class="nav-item"><a title="Thank You" class="nav-link" href="thanks.html">Thank You&nbsp;</a></li>
									<li class="nav-item"><a title="Coming Soon" class="nav-link" href="coming-soon.html">Coming Soon&nbsp;</a></li>

									<li class="dropdown submenu nav-item"><a title="404" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">404<span class="arrow_carrot-right"></span> </a>
										<ul class=" dropdown-menu">
											<li class="nav-item"><a title="404 01" class="nav-link" href="404.html">404 01&nbsp;</a></li>
											<li class="nav-item"><a title="404 02" class="nav-link" href="404-two.html">404 02&nbsp;</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="nav-item dropdown submenu mega_menu">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Portfolio
								</a>
								<div class="mega_menu_inner">
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="index.html" class="nav-link">Portfolio Grid</a>
											<ul class="dropdown-menu">
												<li class="nav-item"><a href="portfolio-grid-2col.html" class="nav-link">Style 1 (2 columns)</a></li>
												<li class="nav-item"><a href="portfolio-grid-3columns.html" class="nav-link">Style 1 (3 columns)</a></li>
												<li class="nav-item"><a href="portfolio-grid-4columns.html" class="nav-link">Style 1 (4 columns)</a></li>
												<li class="nav-item"><a href="portfolio-grid-2col-2.html" class="nav-link">Style 2 (2 columns)</a></li>
												<li class="nav-item"><a href="portfolio-grid-2col-3.html" class="nav-link">Style 2 (3 columns)</a></li>
												<li class="nav-item"><a href="portfolio-grid-2col-4.html" class="nav-link">Style 2 (4 columns)</a></li>
											</ul>
										</li>
										<li class="nav-item">
											<a href="index.html" class="nav-link">Portfolio Fluid</a>
											<ul class="dropdown-menu">
												<li class="nav-item"><a href="portfolio-fullwidth-3columns.html" class="nav-link">Style 1 (3 columns)</a></li>
												<li class="nav-item"><a href="portfolio-fullwidth-4columns.html" class="nav-link">Style 1 (4 columns)</a></li>
												<li class="nav-item"><a href="portfolio-grid-fullwidth1.html" class="nav-link">Style 2 (3 columns)</a></li>
												<li class="nav-item"><a href="portfolio-grid-fullwidth2.html" class="nav-link">Style 2 (4 columns)</a></li>
											</ul>
										</li>
										<li class="nav-item">
											<a href="index.html" class="nav-link">Portfolio Masonry</a>
											<ul class="dropdown-menu">
												<li class="nav-item"><a href="portfolio-mas-2col.html" class="nav-link">Style 1 (2 columns)</a></li>
												<li class="nav-item"><a href="portfolio-mas-3col.html" class="nav-link">Style 1 (3 columns)</a></li>
												<li class="nav-item"><a href="portfolio-mas-4col.html" class="nav-link">Style 1 (4 columns)</a></li>
												<li class="nav-item"><a href="portfolio-mas-3col-2.html" class="nav-link">Style 2 (3 columns)</a></li>
												<li class="nav-item"><a href="portfolio-mas-4col-2.html" class="nav-link">Style 2 (4 columns)</a></li>
											</ul>
										</li>
										<li class="nav-item">
											<a href="index.html" class="nav-link">Project details</a>
											<ul class="dropdown-menu">
												<li class="nav-item"><a href="portfolio-details-1.html" class="nav-link">Style 1</a></li>
												<li class="nav-item"><a href="portfolio-details-2.html" class="nav-link">Style 2</a></li>
												<li class="nav-item"><a href="portfolio-details-3.html" class="nav-link">Style 3</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>


							<li class="nav-item dropdown submenu">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Shop
								</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a href="shop-grid.html" class="nav-link">Shop Grid</a></li>
									<li class="nav-item"><a href="shop-list.html" class="nav-link">Shop list</a></li>
									<li class="nav-item"><a href="product-details-1.html" class="nav-link">Product detail</a></li>
									<li class="nav-item"><a href="shoping-cart.html" class="nav-link">Shopping cart</a></li>
									<li class="nav-item"><a href="checkout.html" class="nav-link">Checkout</a></li>
									<li class="nav-item"><a href="wishlist.html" class="nav-link">Wishlist</a></li>
								</ul>
							</li>

							<li class="nav-item dropdown submenu">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Blog
								</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
									<li class="nav-item"><a href="blog-list.html" class="nav-link">Blog list</a></li>
									<li class="nav-item"><a href="blog-masonry.html" class="nav-link">Blog Masonry</a></li>
									<li class="nav-item"><a href="blog-masonry-sidebar.html" class="nav-link">Blog Masonry Sidebar</a></li>
									<li class="nav-item"><a href="blog-single.html" class="nav-link">Blog Single</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown submenu mega_menu">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Elements
								</a>
								<div class="mega_menu_inner">
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a class="nav-link">Elements 01</a>
											<ul class="dropdown-menu">
												<li class="nav-item"><a href="Accordion.html" class="nav-link">Accordions</a></li>
												<li class="nav-item"><a href="button.html" class="nav-link">Buttons</a></li>
												<li class="nav-item"><a href="team.html" class="nav-link">Team</a></li>
												<li class="nav-item"><a href="integration.html" class="nav-link">Integration</a></li>
												<li class="nav-item"><a href="client.html" class="nav-link">Clients</a></li>
												<li class="nav-item"><a href="subscribe.html" class="nav-link">Subscribe</a></li>
												<li class="nav-item"><a href="call-to-action.html" class="nav-link">Call to Action</a></li>
												<li class="nav-item"><a href="tab.html" class="nav-link">Tab</a></li>
											</ul>
										</li>

										<li class="nav-item">
											<a class="nav-link">Elements 02</a>
											<ul class="dropdown-menu">
												<li class="nav-item"><a href="testimonial.html" class="nav-link">Testimonials</a></li>
												<li class="nav-item"><a href="video.html" class="nav-link">Video</a></li>
												<li class="nav-item"><a href="carosuel.html" class="nav-link">Carosuel</a></li>
												<li class="nav-item"><a href="google-map.html" class="nav-link">Google Map</a></li>
												<li class="nav-item"><a href="contact-form.html" class="nav-link">Contact Form</a></li>
												<li class="nav-item"><a href="process.html" class="nav-link">Process</a></li>
												<li class="nav-item"><a href="getapp.html" class="nav-link">Get App</a></li>
											</ul>
										</li>

										<li class="nav-item">
											<a class="nav-link">Elements 03</a>
											<ul class="dropdown-menu">
												<li class="nav-item"><a href="heading.html" class="nav-link">Heading</a></li>
												<li class="nav-item"><a href="blockquote.html" class="nav-link">Blockquote</a></li>
												<li class="nav-item"><a href="price.html" class="nav-link">Pricing Table</a></li>
												<li class="nav-item"><a href="fun-fact.html" class="nav-link">Fun Fact</a></li>
												<li class="nav-item"><a href="coming-soon.html" class="nav-link">Countdown Timer</a></li>
												<li class="nav-item"><a href="pagination.html" class="nav-link">Pagination</a></li>
											</ul>
										</li>

										<li class="nav-item">
											<a class="nav-link">
												Headers
											</a>
											<ul class="dropdown-menu">
												<li class="nav-item"><a href="header-dark.html" class="nav-link">Header Dark</a></li>
												<li class="nav-item"><a href="header-style2.html" class="nav-link">Header Style 2</a></li>
												<li class="nav-item"><a href="header-style3.html" class="nav-link">Header Style 3</a></li>
												<li class="nav-item"><a href="header-style4.html" class="nav-link">Header Style 4</a></li>
												<li class="nav-item"><a href="header-style5.html" class="nav-link">Header Style 5</a></li>
												<li class="nav-item"><a href="header-style6.html" class="nav-link">Header Style 6</a></li>
												<li class="nav-item"><a href="header-style7.html" class="nav-link">Header Style 7</a></li>
												<li class="nav-item"><a href="header-style8.html" class="nav-link">Header Style 8</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>

						</ul>
						<a class="btn_get btn_hover menu_cus" href="createaccount">Sign In</a>
					</div>

				</div>
			</nav>
		</header>

		<section class="payment_banner_area">
			<div class="shape one"></div>
			<div class="shape two"></div>
			<div class="container">
				<div class="payment_banner_content wow fadeInLeft" data-wow-delay="0.4s">
					<h1 class="f_p f_700 f_size_50 w_color">The simpler, safer way to pay and get paid.</h1>
					<p class="w_color f_p f_size_18">Why I say old chap that is, spiffing jolly good a load of old tosh spend a penny tosser arse over tit excuse.!</p>
					<div class="action_btn d-flex align-items-center mt_60">
						<a href="#" class="btn_hover agency_banner_btn">Sign Up for Free</a>
						<a href="#" class="agency_banner_btn_two">Find Out More<i class="ti-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="animation_img_two wow fadeInRight" data-wow-delay="0.5s">
				<img src="<?php echo base_url("assets/frontend/img/home9/mac.png"); ?>" alt="">
			</div>
			<img class=" svg_intro_bottom" src="<?php echo base_url("assets/frontend/img/home9/shape.png"); ?>" alt="">
		</section>

		<section class="payment_features_area">
			<div class="bg_shape shape_one"></div>
			<div class="bg_shape shape_two"></div>
			<div class="bg_shape shape_three"></div>
			<div class="container">
				<div class="row featured_item">
					<div class="col-lg-6">
						<div class="payment_featured_img wow fadeInLeft" data-wow-delay="0.2s">
							<img src="<?php echo base_url("assets/frontend/img/home9/featured_img.png"); ?>" alt="">
						</div>
					</div>
					<div class="col-lg-6 d-flex align-items-center">
						<div class="payment_features_content pl_70 wow fadeInRight" data-wow-delay="0.3s">
							<div class="icon">
								<img class="img_shape" src="<?php echo base_url("assets/frontend/img/home9/icon_shape.png"); ?>" alt="">
								<img class="icon_img" src="<?php echo base_url("assets/frontend/img/home9/icon1.png"); ?>" alt="">
							</div>
							<h2>Quick & Easy Process</h2>
							<p>Cras mush pardon you knees up he lost his bottle it's all gone to pot faff about porkies arse, barney argy-bargy cracking goal loo cheers spend.!</p>
							<a href="#" class="btn_hover agency_banner_btn pay_btn">Sign Up for Free</a>
							<a href="#" class="btn_hover agency_banner_btn pay_btn pay_btn_two">Find Out More</a>
						</div>
					</div>
				</div>
				<div class="row flex-row-reverse featured_item">
					<div class="col-lg-6">
						<div class="payment_featured_img img_two wow fadeInRight" data-wow-delay="0.3s">
							<img src="<?php echo base_url("assets/frontend/img/home9/featured_img_two.png"); ?>" alt="">
						</div>
					</div>
					<div class="col-lg-6 d-flex align-items-center">
						<div class="payment_features_content pr_70 wow fadeInLeft" data-wow-delay="0.4s">
							<div class="icon">
								<img class="img_shape" src="<?php echo base_url("assets/frontend/img/home9/icon_shape.png"); ?>" alt="">
								<img class="icon_img" src="<?php echo base_url("assets/frontend/img/home9/icon2.png"); ?>" alt="">
							</div>
							<h2>Quick & Easy Process</h2>
							<p>Cras mush pardon you knees up he lost his bottle it's all gone to pot faff about porkies arse, barney argy-bargy cracking goal loo cheers spend.!</p>
							<a href="#" class="btn_hover agency_banner_btn pay_btn">Pay On Ebay</a>
							<a href="#" class="btn_hover agency_banner_btn pay_btn pay_btn_two">Pay On Website</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="payment_service_area">
			<div class="container">
				<div class="row flex-row-reverse">
					<div class="col-lg-4">
						<div class="service-content wow fadeInRight" data-wow-delay="0.2s">
							<div class="pay_icon">
								<div class="icon_shape"></div>
								<img src="<?php echo base_url("assets/frontend/img/home9/icon3.png"); ?>" alt="">
							</div>
							<h2 class="f_p w_color f_700">Our Services</h2>
							<p class="f_p w_color">Why I say old chap that is, spiffing jolly good a load of old tosh spend a penny tosser arse over.!</p>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="col-md-6 media payment_service_item wow fadeInUp" data-wow-delay="0.2s">
								<div class="icon">
									<img src="<?php echo base_url("assets/frontend/img/home9/icon4.png"); ?>" alt="">
								</div>
								<div class="media-body">
									<h3 class="f_size_20 f_p w_color f_600">Safer</h3>
									<p class="f_400 f_size_15 w_color">Well at public scho cheeky bugger grub burke.!</p>
								</div>
							</div>
							<div class="col-md-6 media payment_service_item wow fadeInUp" data-wow-delay="0.3s">
								<div class="icon">
									<img src="<?php echo base_url("assets/frontend/img/home9/icon7.png"); ?>" alt="">
								</div>
								<div class="media-body">
									<h3 class="f_size_20 f_p w_color f_600">Flexible</h3>
									<p class="f_400 f_size_15 w_color">Well at public scho cheeky bugger grub burke.!</p>
								</div>
							</div>
							<div class="col-md-6 media payment_service_item wow fadeInUp" data-wow-delay="0.4s">
								<div class="icon">
									<img src="<?php echo base_url("assets/frontend/img/home9/icon5.png"); ?>" alt="">
								</div>
								<div class="media-body">
									<h3 class="f_size_20 f_p w_color f_600">Convinient</h3>
									<p class="f_400 f_size_15 w_color">Well at public scho cheeky bugger grub burke.!</p>
								</div>
							</div>
							<div class="col-md-6 media payment_service_item wow fadeInUp" data-wow-delay="0.5s">
								<div class="icon">
									<img src="<?php echo base_url("assets/frontend/img/home9/icon8.png"); ?>" alt="">
								</div>
								<div class="media-body">
									<h3 class="f_size_20 f_p w_color f_600">Protected</h3>
									<p class="f_400 f_size_15 w_color">Well at public scho cheeky bugger grub burke.!</p>
								</div>
							</div>
							<div class="col-md-6 media payment_service_item wow fadeInUp" data-wow-delay="0.6s">
								<div class="icon">
									<img src="<?php echo base_url("assets/frontend/img/home9/icon6.png"); ?>" alt="">
								</div>
								<div class="media-body">
									<h3 class="f_size_20 f_p w_color f_600">World wide</h3>
									<p class="f_400 f_size_15 w_color">Well at public scho cheeky bugger grub burke.!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="payment_clients_area">
			<div class="clients_bg_shape_top"></div>
			<div class="clients_bg_shape_right"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="payment_features_content pr_70 wow fadeInLeft" data-wow-delay="0.2s">
							<div class="icon">
								<img class="img_shape" src="<?php echo base_url("assets/frontend/img/home9/icon_shape.png"); ?>" alt="">
								<img class="icon_img" src="<?php echo base_url("assets/frontend/img/home9/icon2.png"); ?>" alt="">
							</div>
							<h2>Quick & Easy Process</h2>
							<p>Cras mush pardon you knees up he lost his bottle it's all gone to pot faff about porkies arse, barney argy-bargy cracking goal loo cheers spend.!</p>
							<a href="#" class="btn_hover agency_banner_btn pay_btn">Sign Up for Free</a>
							<a href="#" class="btn_hover agency_banner_btn pay_btn pay_btn_two">Sign Up for Free</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="payment_clients_inner">
							<div class="clients_item one wow fadeInLeft" data-wow-delay="0.2s">
								<img src="<?php echo base_url("assets/frontend/img/home9/logo1.png"); ?>" alt="">
							</div>
							<div class="clients_item two wow fadeInLeft" data-wow-delay="0.3s">
								<img src="<?php echo base_url("assets/frontend/img/home9/logo2.png"); ?>" alt="">
							</div>
							<div class="clients_item three wow fadeInLeft" data-wow-delay="0.4s">
								<img src="<?php echo base_url("assets/frontend/img/home9/logo3.png"); ?>" alt="">
							</div>
							<div class="clients_item four wow fadeInLeft" data-wow-delay="0.5s">
								<img src="<?php echo base_url("assets/frontend/img/home9/logo4.png"); ?>" alt="">
							</div>
							<div class="clients_item five wow fadeInLeft" data-wow-delay="0.6s">
								<img src="<?php echo base_url("assets/frontend/img/home9/logo5.png"); ?>" alt="">
							</div>
							<div class="clients_item six wow fadeInLeft" data-wow-delay="0.7s">
								<img src="<?php echo base_url("assets/frontend/img/home9/logo6.png"); ?>" alt="">
							</div>
							<div class="clients_item seven wow fadeInLeft" data-wow-delay="0.8s">
								<img src="<?php echo base_url("assets/frontend/img/home9/logo7.png"); ?>" alt="">
							</div>
							<div class="clients_item eight wow fadeInLeft" data-wow-delay="0.8s">
								<img src="<?php echo base_url("assets/frontend/img/home9/logo8.png"); ?>" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="payment_testimonial_area">
			<div class="container">
				<div class="row payment_testimonial_info flex-row-reverse">
					<div class="col-lg-7 d-flex align-items-center">
						<div class="testimonial_content">
							<div class="icon">,,</div>
							<p class="f_p f_size_20">“This theme aute irure dolor in reprehe erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur for the life sint occaecat cupidatat non proident, sunt in culpa qui officia de est laborum.”</p>
							<div class="author f_600 f_p t_color f_size_20">James Anderson</div>
							<div class="author_description f_p f_size_15">UI/UX designer</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="testimonial_img">
							<img src="<?php echo base_url("assets/frontend/img/home9/testimonial_img.png"); ?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="payment_action_area">
			<div class="clients_bg_shape_bottom"></div>
			<div class="container">
				<div class="payment_action_content text-center wow fadeInUp" data-wow-delay="0.2s">
					<div class="pay_icon">
						<div class="icon_shape"></div>
						<img class="icon_img" src="<?php echo base_url("assets/frontend/img/home9/icon2.png"); ?>" alt="">
					</div>
					<h2 class="f_p t_color f_700">Join 200 million PayPal users worldwide.</h2>
					<p>All you need is an email address or mobile phone number to transfer money. If they<br> don't have an account, they can create one quickly, for free.</p>
					<a href="#" class="btn_hover agency_banner_btn pay_btn pay_btn_two">Sign Up for Free</a>
				</div>
			</div>
		</section>
		<footer class="footer_nine_area">
			<div class="footer_nine_top">
				<div class="footer_shap left"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6">
							<div class="f_widget company_widget pr_100">
								<a href="index.html" class="f-logo"><img src="<?php echo base_url("assets/frontend/img/logo.png"); ?>" srcset="img/logo2x.png 2x" alt=""></a>
								<p class="f_400 f_p f_size_16 mb-0 l_height28 mt_40">Tickety-boo victoria sponge only a quid I don't want no agro morish bum bag gutted mate up the duff, bloke blag cup of char super bugger all mate.!</p>
								<div class="f_social_icon_two mt_30">
									<a href="#"><i class="ti-facebook"></i></a>
									<a href="#"><i class="ti-twitter-alt"></i></a>
									<a href="#"><i class="ti-vimeo-alt"></i></a>
									<a href="#"><i class="ti-pinterest"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-6">
							<div class="f_widget about-widget">
								<h3 class="f-title f_500 f_size_16 mb-30">About Us</h3>
								<ul class="list-unstyled f_list">
									<li><a href="#">Developer</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Investor</a></li>
									<li><a href="#">Sitemap</a></li>
									<li><a href="#">Jobs</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-6">
							<div class="f_widget about-widget">
								<h3 class="f-title f_500 f_size_16 mb-30">Help & Suport</h3>
								<ul class="list-unstyled f_list">
									<li><a href="#">Help aand Contact</a></li>
									<li><a href="#">Fees</a></li>
									<li><a href="#">Security</a></li>
									<li><a href="#">App</a></li>
									<li><a href="#">Shop</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 pl_100">
							<div class="f_widget about-widget">
								<h3 class="f-title f_500 f_size_16 mb-30">Privacy Contact</h3>
								<ul class="list-unstyled f_list">
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Legal Agreement</a></li>
									<li><a href="#">Feedback</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_nine_bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 align-self-center">
							<p class="mb-0 f_400">Copyright © <?php date('Y'); ?> Powered by <a href="#">Berjis Technologies LTD</a></p>
						</div>
						<div class="col-sm-5">
							<select class="selectpicker flag_selector" data-width="fit">
								<option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
								<option data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
								<option data-content='<span class="flag-icon flag-icon-us"></span> English'>Potogal</option>
								<option data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Brazil</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo base_url("assets/frontend/js/jquery-3.2.1.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/frontend/js/propper.js"); ?>"></script>
	<script src="<?php echo base_url("assets/frontend/js/bootstrap.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/frontend/vendors/wow/wow.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/frontend/vendors/sckroller/jquery.parallax-scroll.js"); ?>"></script>
	<script src="<?php echo base_url("assets/frontend/vendors/owl-carousel/owl.carousel.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/frontend/vendors/imagesloaded/imagesloaded.pkgd.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/frontend/vendors/isotope/isotope-min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/frontend/vendors/magnify-pop/jquery.magnific-popup.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/frontend/vendors/bootstrap-selector/js/bootstrap-select.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/frontend/vendors/nice-select/jquery.nice-select.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/frontend/js/plugins.js"); ?>"></script>
	<script src="<?php echo base_url("assets/frontend/js/main.js"); ?>"></script>
</body>

</html>