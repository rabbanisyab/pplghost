<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags --> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>PPLG HOSTINGS</title>
		<link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
		<link rel="stylesheet" href="vendors/owl.carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="vendors/owl.carousel/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendors/aos/css/aos.css">
		<link rel="stylesheet" href="vendors/jquery-flipster/css/jquery.flipster.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" href="images/favicon.png" />
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<div id="mobile-menu-overlay"></div>
		<nav class="navbar navbar-expand-lg fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#"><img src="images/logo.svg" alt="Marshmallow"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="mdi mdi-menu"> </i></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<div class="d-lg-none d-flex justify-content-between px-4 py-3 align-items-center">
						<img src="images/logo-dark.svg" class="logo-mobile-menu" alt="logo">
						<a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
					</div>
					<ul class="navbar-nav ml-auto align-items-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#plans">Plans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contacts</a>
                        </li>

                        <!-- Dropdown Hostings -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="hostingsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hostings
                            </a>
                            <div class="dropdown-menu" aria-labelledby="hostingsDropdown">
                                <a class="dropdown-item" href="#web-hosting">Web Hosting</a>
                                <a class="dropdown-item" href="#cloud-hosting">Cloud Hosting</a>
                                <a class="dropdown-item" href="#wordpress-hosting">Hosting for WordPress</a>
                            </div>
                        </li>

                        <!-- Dropdown Domains -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="domainssDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Domains
                            </a>
                            <div class="dropdown-menu" aria-labelledby="hostingsDropdown">
                                <a class="dropdown-item" href="#web-hosting">Web Hosting</a>
                                <a class="dropdown-item" href="#cloud-hosting">Cloud Hosting</a>
                                <a class="dropdown-item" href="#wordpress-hosting">Hosting for WordPress</a>
                            </div>
                        </li>

                        <!-- Login and Register -->
                        <div class="hidden md:flex space-x-4 items-center">
                            <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900">Login</a>
                            <a href="{{ route('register') }}" class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600">Register</a>
                        </div>
                    </ul>
				</div>
			</div>
		</nav>
		<div class="page-body-wrapper">
			<section id="home" class="home">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="main-banner">
								<div class="d-sm-flex justify-content-between">
									<div data-aos="zoom-in-up">
										<div class="banner-title">
												<h3 class="font-weight-medium">We Help Power
												Millions Of Businesses 
												in 100+ Countries
											</h3>
										</div>
										<p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 

											<br>
											Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
										</p>
										<a href="#" class="btn btn-secondary mt-3">Learn more</a>
									</div>
									<div class="mt-5 mt-lg-0">
										<img src="images/group.png" alt="marsmello" class="img-fluid" data-aos="zoom-in-up">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="our-services" id="services">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h5 class="text-dark">We’re offering</h5>
							<h3 class="font-weight-medium text-dark mb-5">Creative Digital Agency</h3>
						</div>
					</div>
					<div class="row" data-aos="fade-up">
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="images/integrated-marketing.svg" alt="integrated-marketing" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Integrated 
									Marketing
								</h6>
								<p>Lorem ipsum dolor sit amet, 
									pretium pretium tempor.Lorem ipsum 
								</p>
							</div>
						</div>
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box"   data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="images/design-development.svg" alt="design-development" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Design & 
									Development
								</h6>
								<p>Lorem ipsum dolor sit amet, 
									pretium pretium tempor.Lorem ipsum 
								</p>
							</div>
						</div>
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="images/digital-strategy.svg" alt="digital-strategy" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Digital 
									Strategy
								</h6>
								<p>Lorem ipsum dolor sit amet, 
									pretium pretium tempor.Lorem ipsum 
								</p>
							</div>
						</div>
					</div>
					<div class="row" data-aos="fade-up">
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box  pb-lg-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="images/digital-marketing.svg" alt="digital-marketing" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Digital 
									Marketing
								</h6>
								<p>Lorem ipsum dolor sit amet, 
									pretium pretium tempor.Lorem ipsum 
								</p>
							</div>
						</div>
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box pb-lg-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="images/growth-strategy.svg" alt="growth-strategy" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Growth 
									Strategy
								</h6>
								<p>Lorem ipsum dolor sit amet, 
									pretium pretium tempor.Lorem ipsum 
								</p>
							</div>
						</div>
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box pb-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="images/saving-strategy.svg" alt="saving-strategy" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Saving 
									Strategy
								</h6>
								<p>Lorem ipsum dolor sit amet, 
									pretium pretium tempor.Lorem ipsum 
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="our-process" id="about">
				<div class="container">
					<div class="row">
						<div class="col-sm-6" data-aos="fade-up">
							<h5 class="text-dark">Our work process</h5>
							<h3 class="font-weight-medium text-dark">Discover New Idea With Us!</h3>
							<h5 class="text-dark mb-3">Imagination will take us everywhere</h5>
							<p class="font-weight-medium mb-4">Lorem ipsum dolor sit amet, <br> 
								pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur
							</p>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
							</div>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
							</div>
							<div class="d-flex justify-content-start">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
							</div>
						</div>
						<div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
							<img src="images/idea.png" alt="idea" class="img-fluid">
						</div>
					</div>
				</div>
			</section>
			<section class="pricing-list" id="plans">
				<div class="container">
					<div class="row" data-aos="fade-up" data-aos-offset="-500">
						<div class="col-sm-12">
							<div class="d-sm-flex justify-content-between align-items-center mb-2">
								<div>
									<h3 class="font-weight-medium text-dark ">Checkout Pricing Plan</h3>
									<h5 class="text-dark ">Lorem ipsum dolor sit amet, consectetur pretium pretium tempor. Lorem ipsum dolor </h5>
								</div>
								<div class="mb-5 mb-lg-0 mt-3 mt-lg-0">
									<div class="d-flex align-items-center">
										<p class="mr-2 font-weight-medium monthly text-active check-box-label">Monthly</p>
										<label class="toggle-switch toggle-switch">
										<input type="checkbox" checked  id="toggle-switch">
										<span class="toggle-slider round"></span>
										</label>
										<p class="ml-2 font-weight-medium yearly check-box-label">Yearly</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row"  data-aos="fade-up" data-aos-offset="-300">
						<div class="col-sm-4">
							<div class="pricing-box">
								<img src="images/starter.svg" alt="starter">
								<h6 class="font-weight-medium title-text">Starter Business</h6>
								<h1 class="text-amount mb-4 mt-2">$23</h1>
								<ul class="pricing-list">
									<li>Create a free website</li>
									<li>Connect Domain</li>
									<li>Business and ecommerce</li>
									<li>Idea for smaller professional websites</li>
									<li>Web space</li>
								</ul>
								<a href="#" class="btn btn-outline-primary">Puchase Now</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="pricing-box selected">
								<img src="images/proffessional.svg" alt="starter">
								<h6 class="font-weight-medium title-text">Professional</h6>
								<h1 class="text-amount mb-4 mt-2">$45</h1>
								<ul class="pricing-list">
									<li>Create a free website</li>
									<li>Connect Domain</li>
									<li>Business and ecommerce</li>
									<li>Idea for smaller professional websites</li>
									<li>Web space</li>
								</ul>
								<a href="#" class="btn btn-primary">Puchase Now</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="pricing-box">
								<img src="images/premium.svg" alt="starter">
								<h6 class="font-weight-medium title-text">Premium</h6>
								<h1 class="text-amount mb-4 mt-2">$87</h1>
								<ul class="pricing-list">
									<li>Create a free website</li>
									<li>Connect Domain</li>
									<li>Business and ecommerce</li>
									<li>Idea for smaller professional websites</li>
									<li>Web space</li>
								</ul>
								<a href="#" class="btn btn-outline-primary">Puchase Now</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="contactus" id="contact">
				<div class="container">
					<div class="row mb-5 pb-5">
						<div class="col-sm-5" data-aos="fade-up" data-aos-offset="-500">
							<img src="images/contact.jpg" alt="contact" class="img-fluid">
						</div>
						<div class="col-sm-7" data-aos="fade-up" data-aos-offset="-500">
							<h3 class="font-weight-medium text-dark mt-5 mt-lg-0">Got A Problem</h3>
							<h5 class="text-dark mb-5">Lorem ipsum dolor sit amet, consectetur pretium</h5>
							<form>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control" id="name" placeholder="Name*">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input type="email" class="form-control" id="mail" placeholder="Email*">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<textarea name="message" id="message" class="form-control" placeholder="Message*" rows="5"></textarea>
										</div>
									</div>
									<div class="col-sm-12">
										<a href="#" class="btn btn-secondary">SEND</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
        <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden bg-white shadow">
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Home</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">About</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Contact</a>
        <a href="{{ route('login') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Login</a>
        <a href="{{ route('register') }}" class="block px-4 py-2 bg-blue-500 text-white hover:bg-blue-600">Register</a>
    </div>

		<footer class="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<address>
								<p>143 castle road 517</p>
								<p class="mb-4">district, kiyev port south Canada</p>
								<div class="d-flex align-items-center">
									<p class="mr-4 mb-0">+3 123 456 789</p>
									<a href="mailto:info@yourmail.com" class="footer-link">info@yourmail.com</a>
								</div>
								<div class="d-flex align-items-center">
									<p class="mr-4 mb-0">+1 222 345 342</p>
									<a href="mailto:Marshmallow@yourmail.com" class="footer-link">Marshmallow@yourmail.com</a>
								</div>
							</address>
							<div class="social-icons">
								<h6 class="footer-title font-weight-bold">
									Social Share
								</h6>
								<div class="d-flex">
									<a href="#"><i class="mdi mdi-github-circle"></i></a>
									<a href="#"><i class="mdi mdi-facebook-box"></i></a>
									<a href="#"><i class="mdi mdi-twitter"></i></a>
									<a href="#"><i class="mdi mdi-dribbble"></i></a>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-4">
									<h6 class="footer-title">Social Share</h6>
									<ul class="list-footer">
										<li><a href="#" class="footer-link">Home</a></li>
										<li><a href="#" class="footer-link">About</a></li>
										<li><a href="#" class="footer-link">Services</a></li>
										<li><a href="#" class="footer-link">Portfolio</a></li>
										<li><a href="#" class="footer-link">Contact</a></li>
									</ul>
								</div>
								<div class="col-sm-4">
									<h6 class="footer-title">Product</h6>
									<ul class="list-footer">
										<li><a href="#" class="footer-link">Digital Marketing</a></li>
										<li><a href="#" class="footer-link">Web Development</a></li>
										<li><a href="#" class="footer-link">App Development</a></li>
										<li><a href="#" class="footer-link">Design</a></li>
									</ul>
								</div>
								<div class="col-sm-4">
									<h6 class="footer-title">Company</h6>
									<ul class="list-footer">
										<li><a href="#" class="footer-link">Partners</a></li>
										<li><a href="#" class="footer-link">Investors</a></li>
										<li><a href="#" class="footer-link">Partners</a></li>
										<li><a href="#" class="footer-link">FAQ</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex align-items-center">
							<img src="images/logo.svg" alt="logo" class="mr-3">
							<p class="mb-0 text-small pt-1">© 2019-2020 Marshmallow. All rights reserved.</p>
						</div>
						<div>
							<div class="d-flex">
								<a href="#" class="text-small text-white mx-2 footer-link">Privacy Policy </a>          
								<a href="#" class="text-small text-white mx-2 footer-link">Customer Support </a>
								<a href="#" class="text-small text-white mx-2 footer-link">Careers </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script src="vendors/base/vendor.bundle.base.js"></script>
		<script src="vendors/owl.carousel/js/owl.carousel.js"></script>
		<script src="vendors/aos/js/aos.js"></script>
		<script src="vendors/jquery-flipster/js/jquery.flipster.min.js"></script>
		<script src="js/template.js"></script>
	</body>
</html>