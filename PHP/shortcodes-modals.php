<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shortcodes Modals | Interact Responsive Template</title>

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
							<h3 class="text-bold-400 text-size-s2 m-0 text-white">Modals</h3>
						</div>
						<div class="ml-auto align-self-center">
							<ol class="breadcrumb d-flex justify-content-center m-0 bg-none text-size-s1 p-0">
								<li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
								<li class="breadcrumb-item"><a class="text-white" href="#">Shortcodes</a></li>
								<li class="breadcrumb-item" aria-current="page">Modals</li>
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
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="bg-white p-s4 box-shadow-v1-s3">
						<div class="mb-s4">
							<h4 class="text-bold-700 mb-20">Modal #1</h4>
							<hr class="mb-0 bc-v1-dark">
							<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-md-12">
							<div class="mt-s5 text-center">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-pink text-white btn-xl text-size-s1 text-bold-600 text-uppercase rounded-0" data-toggle="modal" data-target="#exampleModal">
									Launch Demo Modal
								</button>
							</div>

							<!-- MODAL -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content rounded-0">
										<div class="modal-header bg-pink d-flex justify-content-between align-items-center rounded-0 text-white">
											<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
											<button type="button" class="close text-white text-shadow-none" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body p-s3">
											<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus.</p>

											<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula.</p>
										</div>
										<div class="modal-footer bg-v5-light d-flex justify-content-end align-items-center rounded-0 text-white">
											<button type="button" class="btn bg-danger text-white text-size-s1 text-bold-600 text-uppercase rounded-0" data-dismiss="modal">Close</button>
											<button type="button" class="btn bg-pink text-white text-size-s1 text-bold-600 text-uppercase rounded-0">Save changes</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /MODAL -->
						</div>
					</div> <!-- /ROW -->
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-v5-light pt-s5 pb-s5">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="bg-white p-s4 box-shadow-v1-s3">
						<div class="mb-s4">
							<h4 class="text-bold-700 mb-20">Modal #2</h4>
							<hr class="mb-0 bc-v1-dark">
							<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-md-12">
							<div class="mt-s5 text-center">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-pink text-white btn-xl text-size-s1 text-bold-600 text-uppercase rounded-0" data-toggle="modal" data-target="#exampleModa2">
									Launch Demo Modal
								</button>
							</div>

							<!-- MODAL -->
							<div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content rounded-0">
										<div class="modal-header bc-v2-white bg-pink d-flex justify-content-between align-items-center rounded-0 text-white">
											<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
											<button type="button" class="close text-white text-shadow-none" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body bg-pink text-white p-s3">
											<p class="text-white">Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus.</p>

											<p class="text-white">Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula.</p>
										</div>
										<div class="modal-footer bc-v2-white bg-pink d-flex justify-content-end align-items-center rounded-0 text-white">
											<button type="button" class="btn bg-danger text-white text-size-s1 text-bold-600 text-uppercase rounded-0" data-dismiss="modal">Close</button>
											<button type="button" class="btn bg-pink text-white bc-v2-white text-size-s1 text-bold-600 text-uppercase rounded-0">Save changes</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /MODAL -->
						</div>
					</div> <!-- /ROW -->
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="bg-white p-s4 box-shadow-v1-s3">
						<div class="mb-s4">
							<h4 class="text-bold-700 mb-20">Modal #3</h4>
							<hr class="mb-0 bc-v1-dark">
							<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-md-12">
							<div class="mt-s5 text-center">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-pink text-white btn-xl text-size-s1 text-bold-600 text-uppercase rounded-0" data-toggle="modal" data-target="#exampleModa3">
									Launch Demo Modal
								</button>
							</div>

							<!-- MODAL -->
							<div class="modal fade" id="exampleModa3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content rounded-0">
										<div class="modal-header bc-v2-white bg-dark d-flex justify-content-between align-items-center rounded-0 text-white">
											<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
											<button type="button" class="close text-white text-shadow-none" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body bg-dark text-white p-s3">
											<p class="text-white">Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus.</p>

											<p class="text-white">Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula.</p>
										</div>
										<div class="modal-footer bc-v2-white bg-dark d-flex justify-content-end align-items-center rounded-0 text-white">
											<button type="button" class="btn bg-danger text-white text-size-s1 text-bold-600 text-uppercase rounded-0" data-dismiss="modal">Close</button>
											<button type="button" class="btn bg-pink text-white bc-v2-white text-size-s1 text-bold-600 text-uppercase rounded-0">Save changes</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /MODAL -->
						</div>
					</div> <!-- /ROW -->
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-v5-light pt-s5 pb-s5">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="bg-white p-s4 box-shadow-v1-s3">
						<div class="mb-s4">
							<h4 class="text-bold-700 mb-20">Modal #4</h4>
							<hr class="mb-0 bc-v1-dark">
							<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-md-12">
							<div class="mt-s5 text-center">
								<!-- Button trigger modal -->
								<button type="button" class="btn bg-pink btn-xl text-white text-size-s1 text-bold-600 text-uppercase rounded-0" data-toggle="modal" data-target="#exampleModaSmall">
									Small
								</button>
							</div>

							<!-- MODAL -->
							<div class="modal fade" id="exampleModaSmall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm" role="document">
									<div class="modal-content rounded-0">
										<div class="modal-header bc-v2-white bg-pink d-flex justify-content-between align-items-center rounded-0 text-white">
											<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
											<button type="button" class="close text-white text-shadow-none" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body bg-pink text-white p-s3">
											<p class="text-white">Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus.</p>

											<p class="text-white">Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula.</p>
										</div>
										<div class="modal-footer bc-v2-white bg-pink d-flex justify-content-end align-items-center rounded-0 text-white">
											<button type="button" class="btn bg-danger text-white text-size-s1 text-bold-600 text-uppercase rounded-0" data-dismiss="modal">Close</button>
											<button type="button" class="btn bg-pink text-white bc-v2-white text-size-s1 text-bold-600 text-uppercase rounded-0">Save changes</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /MODAL -->
						</div>
					</div> <!-- /ROW -->
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="bg-white p-s4 box-shadow-v1-s3">
						<div class="mb-s4">
							<h4 class="text-bold-700 mb-20">Modal #5</h4>
							<hr class="mb-0 bc-v1-dark">
							<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-md-12">
							<div class="mt-s5 text-center">
								<!-- Button trigger modal -->
								<button type="button" class="btn bg-pink btn-xl text-white text-size-s1 text-bold-600 text-uppercase rounded-0" data-toggle="modal" data-target="#exampleModaMedium">
									Medium
								</button>
							</div>

							<!-- MODAL -->
							<div class="modal fade" id="exampleModaMedium" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content rounded-0">
										<div class="modal-header bc-v2-white bg-pink d-flex justify-content-between align-items-center rounded-0 text-white">
											<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
											<button type="button" class="close text-white text-shadow-none" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body bg-pink text-white p-s3">
											<p class="text-white">Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus.</p>

											<p class="text-white">Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula.</p>
										</div>
										<div class="modal-footer bc-v2-white bg-pink d-flex justify-content-end align-items-center rounded-0 text-white">
											<button type="button" class="btn bg-danger text-white text-size-s1 text-bold-600 text-uppercase rounded-0" data-dismiss="modal">Close</button>
											<button type="button" class="btn bg-pink text-white bc-v2-white text-size-s1 text-bold-600 text-uppercase rounded-0">Save changes</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /MODAL -->
						</div>
					</div> <!-- /ROW -->
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-v5-light pt-s5 pb-s5">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="bg-white p-s4 box-shadow-v1-s3">
						<div class="mb-s4">
							<h4 class="text-bold-700 mb-20">Modal #6</h4>
							<hr class="mb-0 bc-v1-dark">
							<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-md-12">
							<div class="mt-s5 text-center">
								<!-- Button trigger modal -->
								<button type="button" class="btn bg-pink btn-xl text-white text-size-s1 text-bold-600 text-uppercase rounded-0" data-toggle="modal" data-target="#exampleModaLarge">
									Large
								</button>
							</div>

							<!-- MODAL -->
							<div class="modal fade" id="exampleModaLarge" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content rounded-0">
										<div class="modal-header bc-v2-white bg-pink d-flex justify-content-between align-items-center rounded-0 text-white">
											<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
											<button type="button" class="close text-white text-shadow-none" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body bg-pink text-white p-s3">
											<p class="text-white">Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus.</p>

											<p class="text-white">Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula.</p>
										</div>
										<div class="modal-footer bc-v2-white bg-pink d-flex justify-content-end align-items-center rounded-0 text-white">
											<button type="button" class="btn bg-danger text-white text-size-s1 text-bold-600 text-uppercase rounded-0" data-dismiss="modal">Close</button>
											<button type="button" class="btn bg-pink text-white bc-v2-white text-size-s1 text-bold-600 text-uppercase rounded-0">Save changes</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /MODAL -->
						</div>
					</div> <!-- /ROW -->
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="bg-white p-s4 box-shadow-v1-s3">
						<div class="mb-s4">
							<h4 class="text-bold-700 mb-20">Modal #7</h4>
							<hr class="mb-0 bc-v1-dark">
							<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-md-12">
							<div class="mt-s5 text-center">
								<!-- Button trigger modal -->
								<button type="button" class="btn bg-pink btn-xl text-white text-size-s1 text-bold-600 text-uppercase rounded-0" data-toggle="modal" data-target="#exampleModaLarge-x">
									Background Image
								</button>
							</div>

							<!-- MODAL -->
							<div class="modal fade" id="exampleModaLarge-x" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content rounded-0">
										<div class="modal-body text-white overlay-wrap bg-1">
											<div class="overlay-container">
												<button type="button" class="close text-white text-shadow-none" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												<div class="p-s3">
													<p class="text-white">Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus.</p>

													<p class="text-white">Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus.</p>

													<p class="text-white">Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus.</p>

													<p class="text-white m-0">Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula.</p>
												</div>
											</div>
											<div class="overlay bg-v8-dark"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- /MODAL -->
						</div>
					</div> <!-- /ROW -->
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-v5-light pt-s5 pb-s5">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="bg-white p-s4 box-shadow-v1-s3">
						<div class="mb-s4">
							<h4 class="text-bold-700 mb-20">Modal #7</h4>
							<hr class="mb-0 bc-v1-dark">
							<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-md-12">
							<div class="mt-s5 text-center">
								<!-- Button trigger modal -->
								<button type="button" class="btn bg-pink btn-xl text-white text-size-s1 text-bold-600 text-uppercase rounded-0" data-toggle="modal" data-target="#exampleModaLarge2-x">
									Contact Form
								</button>
							</div>

							<!-- MODAL -->
							<div class="modal fade" id="exampleModaLarge2-x" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content rounded-0">
										<div class="modal-body p-0">
											<div>
												<button type="button" class="close text-shadow-none mt-10 mr-20 position-absolute position-right-0 position-top-0 z-index-10" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												<div class="row">
													<div class="col-lg-6 col-md-12">
														<div class="match-height overlay-wrap bg-1 bg-cc h-100 pt-s5--xs pb-s5--xs pt-s5--sm pb-s5--sm pt-s5--md pb-s5--md d-flex align-items-center">
															<div class="overlay-container p-s4 text-center w-100">
																<div>
																	<h3 class="text-white text-uppercase">Contact Us</h3>
																	<p class="text-white">Let Us Discuss About Your Project</p>
																</div>
															</div>
															<div class="overlay bg-v8-dark"></div>
														</div>
													</div>
													<div class="col-lg-6 col-md-12">
														<form class="pt-s5 pl-s2 pr-s4 pb-s4 match-height">
															<div class="form-row">
																<div class="form-group col-md-6">
																	<input type="text" class="form-control bg-light text-size-12 pt-16 pb-16 pl-20 pr-20 text-bold-600 rounded-0 bc-v1-dark" placeholder="Name">
																</div>
																<div class="form-group col-md-6">
																	<input type="email" class="form-control bg-light text-size-12 pt-16 pb-16 pl-20 pr-20 text-bold-600 rounded-0 bc-v1-dark" placeholder="Email">
																</div>
															</div>
															<div class="form-row">
																<div class="form-group col-md-12">
																	<input type="text" class="form-control bg-light text-size-12 pt-16 pb-16 pl-20 pr-20 text-bold-600 rounded-0 bc-v1-dark" placeholder="Subject">
																</div>
															</div>
															<div class="form-group">
																<textarea class="form-control bg-light text-size-12 pt-16 pb-16 pl-20 pr-20 text-bold-600 rounded-0 bc-v1-dark" rows="5" placeholder="Your Message"></textarea>
															</div>
															<button type="submit" class="btn bg-pink text-white text-shadow-s1 text-uppercase text-bold-600 text-size-s1 rounded-s5 pt-12 pb-12 pl-s3 pr-s3 mt-s1 mb-s1 btn-block">Send Message</button>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /MODAL -->
						</div>
					</div> <!-- /ROW -->
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<?php include'includes___footer_links.php'; ?>

</body>
</html>