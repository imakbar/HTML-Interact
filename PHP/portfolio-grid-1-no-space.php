<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portfolio Grid - 1 No Space | Interact Responsive Template</title>

	<?php include'includes___header_links.php'; ?>

</head>
<body>

	<div class="main-header header-shadow pink-header">
		<div class="container">

			<div class="main-header-container">

				<div class="logo" data-mobile-logo="assets/images/logo/logo-dark.png" data-sticky-logo="assets/images/logo/logo-dark.png">
					<a href="index.php"><img src="assets/images/logo/logo-dark.png" alt="logo"/></a>
				</div> <!-- /LOGO -->

				<div class="burger-menu">
					<div class="line-menu line-half first-line"></div>
					<div class="line-menu"></div>
					<div class="line-menu line-half last-line"></div>
				</div> <!-- /BURGER MENU -->

				<nav class="main-menu menu-caret submenu-top-border submenu-scale">
					<?php include'includes___header_menu_links.php'; ?>
				</nav> <!-- NAVIGATION MENU -->

			</div> <!-- /HEADER CONTAINER -->

		</div> <!-- /CONTAINER -->
	</div> <!-- /HEADER -->

	<!-- BREADCRUMB -->
	<section class="bg-pink pt-s3 pb-s3 text-white">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="d-lg-flex text-center">
						<div class="align-self-center mb-0--lg mb-s1--md mb-s1--sm mb-s1--xs">
							<h3 class="text-bold-400 text-size-s2 m-0 text-white">Portfolio Grid - 1 No Space</h3>
						</div>
						<div class="ml-auto align-self-center">
							<ol class="breadcrumb d-flex justify-content-center m-0 bg-none text-size-s1 p-0">
								<li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
								<li class="breadcrumb-item"><a class="text-white" href="#">Portfolio</a></li>
								<li class="breadcrumb-item" aria-current="page">Portfolio Grid - 1 No Space</li>
							</ol>
						</div>
					</div>
				</div>
			</div> <!-- ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->
	<!-- /BREADCRUMB -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="d-flex justify-content-center mb-s3">
				<div>
					<h2 class="text-bold-600">Our Latest Work</h2>
					<p>eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis vivamus ac posuere neque. Phasellus porta eu nisi eget </p>
				</div>
			</div>
			<ul class="nav nav-pills sort-source d-flex justify-content-start mb-s3" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
				<li data-option-value="*" class="active">
					<a class="btn bg-none text-uppercase text-size-s1 text-bold-600 text-dark text-white--active bg-pink--active rounded-0 mb-s2 mr-s3 hover-buzz-out active" href="#">All</a>
				</li>
				<li data-option-value=".design">
					<a class="btn bg-none text-uppercase text-size-s1 text-bold-600 text-dark text-white--active bg-pink--active rounded-0 mb-s2 mr-s3 hover-buzz-out" href="#">Design</a>
				</li>
				<li data-option-value=".branding">
					<a class="btn bg-none text-uppercase text-size-s1 text-bold-600 text-dark text-white--active bg-pink--active rounded-0 mb-s2 mr-s3 hover-buzz-out" href="#">Branding</a>
				</li>
				<li data-option-value=".studio">
					<a class="btn bg-none text-uppercase text-size-s1 text-bold-600 text-dark text-white--active bg-pink--active rounded-0 mb-s2 mr-s3 hover-buzz-out" href="#">Studio</a>
				</li>
				<li data-option-value=".photography">
					<a class="btn bg-none text-uppercase text-size-s1 text-bold-600 text-dark text-white--active bg-pink--active rounded-0 mb-s2 mr-s3 hover-buzz-out" href="#">Photography</a>
				</li>
			</ul>
			<div class="">
				<div class="col-md-12">
					<ul class="row sort-destination" data-sort-id="portfolio">
						<li class="col-lg-3 col-md-4 p-0 isotope-item design">
							<div class="animate-parent--hover hero-section-parent">
								<img class="img-responsive" src="assets/images/portfolio/1-720x435.jpg" alt="Portfolio"/>
								<div class="hero-section-container-tl bg-v7-dark h-100 w-100 d-flex align-items-end justify-content-start p-s3 animate-bounceIn-child--hover">
									<div>
										<h2 class="text-size-18 text-bold-600"><a class="text-white" href="#">Portfolio 1</a></h2>
										<div class="hero-section-container-tr p-s3">
											<ul class="social list-inline text-center text-size-s1 mb-s2">
												<li class="list-inline-item">
													<a href="assets/images/portfolio/1-720x435.jpg" data-fancybox class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-eye"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-link"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-share"></i></a>
												</li>
											</ul>
										</div>
										<ul class="d-inline-block text-size-12 text-white">
											<li class="list-inline-item mr-s2">
												<a href="#" class="text-white text-underline--hover">Brand</a>
											</li>
											<li class="list-inline-item mr-s2 text-size-10">/</li>
											<li class="list-inline-item mr-s2">
												<a href="#" class="text-white text-underline--hover">Media</a>
											</li>
											<li class="list-inline-item mr-s2 text-size-10">/</li>
											<li class="list-inline-item">
												<a href="#" class="text-white text-underline--hover">Logo</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-3 col-md-4 p-0 isotope-item branding photography">
							<div class="owl-carousel owl-theme owl-nav-bg show-nav-hover owl-dots-inside-top-left" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'margin': 10, 'loop': true, 'nav': true, 'dots': true, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
								<div>
									<div class="animate-parent--hover hero-section-parent">
										<img class="img-responsive" src="assets/images/portfolio/2-720x435.jpg" alt="Portfolio"/>
										<div class="hero-section-container-tl bg-v7-dark h-100 w-100 d-flex align-items-end justify-content-start p-s3 animate-bounceIn-child--hover">
											<div>
												<h2 class="text-size-18 text-bold-600"><a class="text-white" href="#">Portfolio 2</a></h2>
												<div class="hero-section-container-tr p-s3">
													<ul class="social list-inline text-center text-size-s1 mb-s2">
														<li class="list-inline-item">
															<a href="assets/images/portfolio/2-720x435.jpg" data-fancybox="portfolio2" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-eye"></i></a>
														</li>
														<li class="list-inline-item">
															<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-link"></i></a>
														</li>
														<li class="list-inline-item">
															<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-share"></i></a>
														</li>
													</ul>
												</div>
												<ul class="d-inline-block text-size-12 text-white">
													<li class="list-inline-item mr-s2">
														<a href="#" class="text-white text-underline--hover">Brand</a>
													</li>
													<li class="list-inline-item mr-s2 text-size-10">/</li>
													<li class="list-inline-item mr-s2">
														<a href="#" class="text-white text-underline--hover">Media</a>
													</li>
													<li class="list-inline-item mr-s2 text-size-10">/</li>
													<li class="list-inline-item">
														<a href="#" class="text-white text-underline--hover">Logo</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="animate-parent--hover hero-section-parent">
										<img class="img-responsive" src="assets/images/portfolio/5-720x435.jpg" alt="Portfolio"/>
										<div class="hero-section-container-tl bg-v7-dark h-100 w-100 d-flex align-items-end justify-content-start p-s3 animate-bounceIn-child--hover">
											<div>
												<h2 class="text-size-18 text-bold-600"><a class="text-white" href="#">Portfolio 2</a></h2>
												<div class="hero-section-container-tr p-s3">
													<ul class="social list-inline text-center text-size-s1 mb-s2">
														<li class="list-inline-item">
															<a href="assets/images/portfolio/5-720x435.jpg" data-fancybox="portfolio2" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-eye"></i></a>
														</li>
														<li class="list-inline-item">
															<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-link"></i></a>
														</li>
														<li class="list-inline-item">
															<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-share"></i></a>
														</li>
													</ul>
												</div>
												<ul class="d-inline-block text-size-12 text-white">
													<li class="list-inline-item mr-s2">
														<a href="#" class="text-white text-underline--hover">Brand</a>
													</li>
													<li class="list-inline-item mr-s2 text-size-10">/</li>
													<li class="list-inline-item mr-s2">
														<a href="#" class="text-white text-underline--hover">Media</a>
													</li>
													<li class="list-inline-item mr-s2 text-size-10">/</li>
													<li class="list-inline-item">
														<a href="#" class="text-white text-underline--hover">Logo</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="animate-parent--hover hero-section-parent">
										<img class="img-responsive" src="assets/images/portfolio/6-720x435.jpg" alt="Portfolio"/>
										<div class="hero-section-container-tl bg-v7-dark h-100 w-100 d-flex align-items-end justify-content-start p-s3 animate-bounceIn-child--hover">
											<div>
												<h2 class="text-size-18 text-bold-600"><a class="text-white" href="#">Portfolio 2</a></h2>
												<div class="hero-section-container-tr p-s3">
													<ul class="social list-inline text-center text-size-s1 mb-s2">
														<li class="list-inline-item">
															<a href="assets/images/portfolio/6-720x435.jpg" data-fancybox="portfolio2" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-eye"></i></a>
														</li>
														<li class="list-inline-item">
															<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-link"></i></a>
														</li>
														<li class="list-inline-item">
															<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-share"></i></a>
														</li>
													</ul>
												</div>
												<ul class="d-inline-block text-size-12 text-white">
													<li class="list-inline-item mr-s2">
														<a href="#" class="text-white text-underline--hover">Brand</a>
													</li>
													<li class="list-inline-item mr-s2 text-size-10">/</li>
													<li class="list-inline-item mr-s2">
														<a href="#" class="text-white text-underline--hover">Media</a>
													</li>
													<li class="list-inline-item mr-s2 text-size-10">/</li>
													<li class="list-inline-item">
														<a href="#" class="text-white text-underline--hover">Logo</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-3 col-md-4 p-0 isotope-item studio">
							<div class="animate-parent--hover hero-section-parent">
								<img class="img-responsive" src="assets/images/portfolio/3-720x435.jpg" alt="Portfolio"/>
								<div class="hero-section-container-tl bg-v7-dark h-100 w-100 d-flex align-items-end justify-content-start p-s3 animate-bounceIn-child--hover">
									<div>
										<h2 class="text-size-18 text-bold-600"><a class="text-white" href="#">Portfolio 3</a></h2>
										<div class="hero-section-container-tr p-s3">
											<ul class="social list-inline text-center text-size-s1 mb-s2">
												<li class="list-inline-item">
													<a href="assets/images/portfolio/3-720x435.jpg" data-fancybox class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-eye"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-link"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-share"></i></a>
												</li>
											</ul>
										</div>
										<ul class="d-inline-block text-size-12 text-white">
											<li class="list-inline-item mr-s2">
												<a href="#" class="text-white text-underline--hover">Brand</a>
											</li>
											<li class="list-inline-item mr-s2 text-size-10">/</li>
											<li class="list-inline-item mr-s2">
												<a href="#" class="text-white text-underline--hover">Media</a>
											</li>
											<li class="list-inline-item mr-s2 text-size-10">/</li>
											<li class="list-inline-item">
												<a href="#" class="text-white text-underline--hover">Logo</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-3 col-md-4 p-0 isotope-item design">
							<div class="animate-parent--hover hero-section-parent">
								<img class="img-responsive" src="assets/images/portfolio/4-720x435.jpg" alt="Portfolio"/>
								<div class="hero-section-container-tl bg-v7-dark h-100 w-100 d-flex align-items-end justify-content-start p-s3 animate-bounceIn-child--hover">
									<div>
										<h2 class="text-size-18 text-bold-600"><a class="text-white" href="#">Portfolio 4</a></h2>
										<div class="hero-section-container-tr p-s3">
											<ul class="social list-inline text-center text-size-s1 mb-s2">
												<li class="list-inline-item">
													<a href="assets/images/portfolio/4-720x435.jpg" data-fancybox class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-eye"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-link"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-share"></i></a>
												</li>
											</ul>
										</div>
										<ul class="d-inline-block text-size-12 text-white">
											<li class="list-inline-item mr-s2">
												<a href="#" class="text-white text-underline--hover">Brand</a>
											</li>
											<li class="list-inline-item mr-s2 text-size-10">/</li>
											<li class="list-inline-item mr-s2">
												<a href="#" class="text-white text-underline--hover">Media</a>
											</li>
											<li class="list-inline-item mr-s2 text-size-10">/</li>
											<li class="list-inline-item">
												<a href="#" class="text-white text-underline--hover">Logo</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-3 col-md-4 p-0 isotope-item branding photography">
							<div class="animate-parent--hover hero-section-parent">
								<img class="img-responsive" src="assets/images/portfolio/5-720x435.jpg" alt="Portfolio"/>
								<div class="hero-section-container-tl bg-v7-dark h-100 w-100 d-flex align-items-end justify-content-start p-s3 animate-bounceIn-child--hover">
									<div>
										<h2 class="text-size-18 text-bold-600"><a class="text-white" href="#">Portfolio 5</a></h2>
										<div class="hero-section-container-tr p-s3">
											<ul class="social list-inline text-center text-size-s1 mb-s2">
												<li class="list-inline-item">
													<a href="assets/images/portfolio/5-720x435.jpg" data-fancybox class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-eye"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-link"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-share"></i></a>
												</li>
											</ul>
										</div>
										<ul class="d-inline-block text-size-12 text-white">
											<li class="list-inline-item mr-s2">
												<a href="#" class="text-white text-underline--hover">Brand</a>
											</li>
											<li class="list-inline-item mr-s2 text-size-10">/</li>
											<li class="list-inline-item mr-s2">
												<a href="#" class="text-white text-underline--hover">Media</a>
											</li>
											<li class="list-inline-item mr-s2 text-size-10">/</li>
											<li class="list-inline-item">
												<a href="#" class="text-white text-underline--hover">Logo</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-3 col-md-4 p-0 isotope-item studio">
							<div class="animate-parent--hover hero-section-parent">
								<img class="img-responsive" src="assets/images/portfolio/6-720x435.jpg" alt="Portfolio"/>
								<div class="hero-section-container-tl bg-v7-dark h-100 w-100 d-flex align-items-end justify-content-start p-s3 animate-bounceIn-child--hover">
									<div>
										<h2 class="text-size-18 text-bold-600"><a class="text-white" href="#">Portfolio 6</a></h2>
										<div class="hero-section-container-tr p-s3">
											<ul class="social list-inline text-center text-size-s1 mb-s2">
												<li class="list-inline-item">
													<a href="assets/images/portfolio/6-720x435.jpg" data-fancybox class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-eye"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-link"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-share"></i></a>
												</li>
											</ul>
										</div>
										<ul class="d-inline-block text-size-12 text-white">
											<li class="list-inline-item mr-s2">
												<a href="#" class="text-white text-underline--hover">Brand</a>
											</li>
											<li class="list-inline-item mr-s2 text-size-10">/</li>
											<li class="list-inline-item mr-s2">
												<a href="#" class="text-white text-underline--hover">Media</a>
											</li>
											<li class="list-inline-item mr-s2 text-size-10">/</li>
											<li class="list-inline-item">
												<a href="#" class="text-white text-underline--hover">Logo</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-3 col-md-4 p-0 isotope-item design">
							<div class="animate-parent--hover hero-section-parent">
								<img class="img-responsive" src="assets/images/portfolio/7-720x435.jpg" alt="Portfolio"/>
								<div class="hero-section-container-tl bg-v7-dark h-100 w-100 d-flex align-items-end justify-content-start p-s3 animate-bounceIn-child--hover">
									<div>
										<h2 class="text-size-18 text-bold-600"><a class="text-white" href="#">Portfolio 7</a></h2>
										<div class="hero-section-container-tr p-s3">
											<ul class="social list-inline text-center text-size-s1 mb-s2">
												<li class="list-inline-item">
													<a href="assets/images/portfolio/7-720x435.jpg" data-fancybox class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-eye"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-link"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-share"></i></a>
												</li>
											</ul>
										</div>
										<ul class="d-inline-block text-size-12 text-white">
											<li class="list-inline-item mr-s2">
												<a href="#" class="text-white text-underline--hover">Brand</a>
											</li>
											<li class="list-inline-item mr-s2 text-size-10">/</li>
											<li class="list-inline-item mr-s2">
												<a href="#" class="text-white text-underline--hover">Media</a>
											</li>
											<li class="list-inline-item mr-s2 text-size-10">/</li>
											<li class="list-inline-item">
												<a href="#" class="text-white text-underline--hover">Logo</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-3 col-md-4 p-0 isotope-item branding photography">
							<div class="animate-parent--hover hero-section-parent">
								<img class="img-responsive" src="assets/images/portfolio/8-720x435.jpg" alt="Portfolio"/>
								<div class="hero-section-container-tl bg-v7-dark h-100 w-100 d-flex align-items-end justify-content-start p-s3 animate-bounceIn-child--hover">
									<div>
										<h2 class="text-size-18 text-bold-600"><a class="text-white" href="#">Portfolio 8</a></h2>
										<div class="hero-section-container-tr p-s3">
											<ul class="social list-inline text-center text-size-s1 mb-s2">
												<li class="list-inline-item">
													<a href="assets/images/portfolio/8-720x435.jpg" data-fancybox class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-eye"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-link"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-share"></i></a>
												</li>
											</ul>
										</div>
										<ul class="d-inline-block text-size-12 text-white">
											<li class="list-inline-item mr-s2">
												<a href="#" class="text-white text-underline--hover">Brand</a>
											</li>
											<li class="list-inline-item mr-s2 text-size-10">/</li>
											<li class="list-inline-item mr-s2">
												<a href="#" class="text-white text-underline--hover">Media</a>
											</li>
											<li class="list-inline-item mr-s2 text-size-10">/</li>
											<li class="list-inline-item">
												<a href="#" class="text-white text-underline--hover">Logo</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-3 col-md-4 p-0 isotope-item studio">
							<div class="animate-parent--hover hero-section-parent">
								<img class="img-responsive" src="assets/images/portfolio/9-720x435.jpg" alt="Portfolio"/>
								<div class="hero-section-container-tl bg-v7-dark h-100 w-100 d-flex align-items-end justify-content-start p-s3 animate-bounceIn-child--hover">
									<div>
										<h2 class="text-size-18 text-bold-600"><a class="text-white" href="#">Portfolio 9</a></h2>
										<div class="hero-section-container-tr p-s3">
											<ul class="social list-inline text-center text-size-s1 mb-s2">
												<li class="list-inline-item">
													<a href="assets/images/portfolio/9-720x435.jpg" data-fancybox class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-eye"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-link"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="#" class="bg-pink bg-white--hover text-pink--hover text-white rounded-circle"><i class="fa fa-share"></i></a>
												</li>
											</ul>
										</div>
										<ul class="d-inline-block text-size-12 text-white">
											<li class="list-inline-item mr-s2">
												<a href="#" class="text-white text-underline--hover">Brand</a>
											</li>
											<li class="list-inline-item mr-s2 text-size-10">/</li>
											<li class="list-inline-item mr-s2">
												<a href="#" class="text-white text-underline--hover">Media</a>
											</li>
											<li class="list-inline-item mr-s2 text-size-10">/</li>
											<li class="list-inline-item">
												<a href="#" class="text-white text-underline--hover">Logo</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
					</ul> <!-- /ROW -->
				</div>
			</div> <!-- /ROW -->
			<div class="text-center mt-s3">
				<a href="#" class="btn btn-lg bg-pink text-white bg-dark--hover text-white--hover text-uppercase text-size-s1 text-bold-600 rounded-0 box-shadow-v2-s1 box-shadow-v3-s2--hover hover-icon-down">
					Load More
					<span>
						<i class="fa icon-arrow-down-circle hover-icon ml-s1"></i>
					</span>
				</a>
			</div>
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<?php include'includes___footer_links.php'; ?>

</body>
</html>