<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shortcodes Forms | Interact Responsive Template</title>

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
							<h3 class="text-bold-400 text-size-s2 m-0 text-white">Forms</h3>
						</div>
						<div class="ml-auto align-self-center">
							<ol class="breadcrumb d-flex justify-content-center m-0 bg-none text-size-s1 p-0">
								<li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
								<li class="breadcrumb-item"><a class="text-white" href="#">Shortcodes</a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
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
					<div class="mb-s4 bg-white p-s4 box-shadow-v1-s3">
						<div class="mb-s4">
							<h4 class="text-bold-700 mb-20">Form #1</h4>
							<hr class="mb-0 bc-v1-dark">
							<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-md-12">
							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label class="text-size-12 text-bold-700 text-uppercase" for="inputEmail4">Email</label>
										<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
									</div>
									<div class="form-group col-md-6">
										<label class="text-size-12 text-bold-700 text-uppercase" for="inputPassword4">Password</label>
										<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label class="text-size-12 text-bold-700 text-uppercase" for="inputAddress">Address</label>
									<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
								</div>
								<div class="form-group">
									<label class="text-size-12 text-bold-700 text-uppercase" for="inputAddress2">Address 2</label>
									<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label class="text-size-12 text-bold-700 text-uppercase" for="inputCity">City</label>
										<input type="text" class="form-control" id="inputCity">
									</div>
									<div class="form-group col-md-4">
										<label class="text-size-12 text-bold-700 text-uppercase" for="inputState">State</label>
										<select id="inputState" class="form-control">
											<option selected>Choose...</option>
											<option>...</option>
										</select>
									</div>
									<div class="form-group col-md-2">
										<label class="text-size-12 text-bold-700 text-uppercase" for="inputZip">Zip</label>
										<input type="text" class="form-control" id="inputZip">
									</div>
								</div>
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="gridCheck">
										<label class="form-check-label" for="gridCheck">
											Check me out
										</label>
									</div>
								</div>
								<button type="submit" class="btn bg-pink text-white text-shadow-s1 text-uppercase text-bold-600 text-size-s1 rounded-0 pt-12 pb-12 pl-s3 pr-s3 mt-s1 mb-s1">Submit</button>
							</form>
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
					<div class="mb-s4 bg-white p-s4 box-shadow-v1-s3">
						<div class="mb-s4">
							<h4 class="text-bold-700 mb-20">Form #2</h4>
							<hr class="mb-0 bc-v1-dark">
							<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-md-12">
							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label class="text-size-12 text-bold-700 text-uppercase" for="inputEmail4">Email</label>
										<input type="email" class="form-control rounded-0 box-shadow-v1-s1" id="inputEmail4" placeholder="Email">
									</div>
									<div class="form-group col-md-6">
										<label class="text-size-12 text-bold-700 text-uppercase" for="inputPassword4">Password</label>
										<input type="password" class="form-control rounded-0 box-shadow-v1-s1" id="inputPassword4" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label class="text-size-12 text-bold-700 text-uppercase" for="inputAddress">Address</label>
									<input type="text" class="form-control rounded-0 box-shadow-v1-s1" id="inputAddress" placeholder="1234 Main St">
								</div>
								<div class="form-group">
									<label class="text-size-12 text-bold-700 text-uppercase" for="inputAddress2">Address 2</label>
									<input type="text" class="form-control rounded-0 box-shadow-v1-s1" id="inputAddress2" placeholder="Apartment, studio, or floor">
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label class="text-size-12 text-bold-700 text-uppercase" for="inputCity">City</label>
										<input type="text" class="form-control rounded-0 box-shadow-v1-s1" id="inputCity">
									</div>
									<div class="form-group col-md-4">
										<label class="text-size-12 text-bold-700 text-uppercase" for="inputState">State</label>
										<select id="inputState" class="form-control rounded-0 box-shadow-v1-s1">
											<option selected>Choose...</option>
											<option>...</option>
										</select>
									</div>
									<div class="form-group col-md-2">
										<label class="text-size-12 text-bold-700 text-uppercase" for="inputZip">Zip</label>
										<input type="text" class="form-control rounded-0 box-shadow-v1-s1" id="inputZip">
									</div>
								</div>
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="gridCheck">
										<label class="form-check-label" for="gridCheck">
											Check me out
										</label>
									</div>
								</div>
								<button type="submit" class="btn bg-pink text-white text-shadow-s1 text-uppercase text-bold-600 text-size-s1 rounded-0 pt-12 pb-12 pl-s3 pr-s3 mt-s1 mb-s1">Submit</button>
							</form>
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
					<div class="mb-s4 bg-white p-s4 box-shadow-v1-s3">
						<div class="mb-s4">
							<h4 class="text-bold-700 mb-20">Form #3</h4>
							<hr class="mb-0 bc-v1-dark">
							<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-md-12">
							<div class="p-s3 bg-light box-shadow-v1-s3 bs-solid bc-v1-dark bw-s5">
								<form>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label class="text-size-12 text-bold-700 text-uppercase" for="inputEmail4">Email</label>
											<input type="email" class="form-control rounded-0 box-shadow-v1-s1" id="inputEmail4" placeholder="Email">
										</div>
										<div class="form-group col-md-6">
											<label class="text-size-12 text-bold-700 text-uppercase" for="inputPassword4">Password</label>
											<input type="password" class="form-control rounded-0 box-shadow-v1-s1" id="inputPassword4" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<label class="text-size-12 text-bold-700 text-uppercase" for="inputAddress">Address</label>
										<input type="text" class="form-control rounded-0 box-shadow-v1-s1" id="inputAddress" placeholder="1234 Main St">
									</div>
									<div class="form-group">
										<label class="text-size-12 text-bold-700 text-uppercase" for="inputAddress2">Address 2</label>
										<input type="text" class="form-control rounded-0 box-shadow-v1-s1" id="inputAddress2" placeholder="Apartment, studio, or floor">
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label class="text-size-12 text-bold-700 text-uppercase" for="inputCity">City</label>
											<input type="text" class="form-control rounded-0 box-shadow-v1-s1" id="inputCity">
										</div>
										<div class="form-group col-md-4">
											<label class="text-size-12 text-bold-700 text-uppercase" for="inputState">State</label>
											<select id="inputState" class="form-control rounded-0 box-shadow-v1-s1">
												<option selected>Choose...</option>
												<option>...</option>
											</select>
										</div>
										<div class="form-group col-md-2">
											<label class="text-size-12 text-bold-700 text-uppercase" for="inputZip">Zip</label>
											<input type="text" class="form-control rounded-0 box-shadow-v1-s1" id="inputZip">
										</div>
									</div>
									<div class="form-group">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="gridCheck">
											<label class="form-check-label" for="gridCheck">
												Check me out
											</label>
										</div>
									</div>
									<button type="submit" class="btn bg-pink text-white text-shadow-s1 text-uppercase text-bold-600 text-size-s1 rounded-0 pt-12 pb-12 pl-s3 pr-s3 mt-s1 mb-s1">Submit</button>
								</form>
							</div>
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
					<div class="mb-s4 bg-white p-s4 box-shadow-v1-s3">
						<div class="mb-s4">
							<h4 class="text-bold-700 mb-20">Form #4</h4>
							<hr class="mb-0 bc-v1-dark">
							<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-md-12">
							<div class="p-s3 bg-white box-shadow-v1-s3 bs-solid bc-v2-dark bw-s5">
								<form>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label class="text-size-12 text-bold-700 text-uppercase" for="inputEmail4">Email</label>
											<input type="email" class="form-control rounded-0 bg-light bc-v1-dark" id="inputEmail4" placeholder="Email">
										</div>
										<div class="form-group col-md-6">
											<label class="text-size-12 text-bold-700 text-uppercase" for="inputPassword4">Password</label>
											<input type="password" class="form-control rounded-0 bg-light bc-v1-dark" id="inputPassword4" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<label class="text-size-12 text-bold-700 text-uppercase" for="inputAddress">Address</label>
										<input type="text" class="form-control rounded-0 bg-light bc-v1-dark" id="inputAddress" placeholder="1234 Main St">
									</div>
									<div class="form-group">
										<label class="text-size-12 text-bold-700 text-uppercase" for="inputAddress2">Address 2</label>
										<input type="text" class="form-control rounded-0 bg-light bc-v1-dark" id="inputAddress2" placeholder="Apartment, studio, or floor">
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label class="text-size-12 text-bold-700 text-uppercase" for="inputCity">City</label>
											<input type="text" class="form-control rounded-0 bg-light bc-v1-dark" id="inputCity">
										</div>
										<div class="form-group col-md-4">
											<label class="text-size-12 text-bold-700 text-uppercase" for="inputState">State</label>
											<select id="inputState" class="form-control rounded-0 bg-light bc-v1-dark">
												<option selected>Choose...</option>
												<option>...</option>
											</select>
										</div>
										<div class="form-group col-md-2">
											<label class="text-size-12 text-bold-700 text-uppercase" for="inputZip">Zip</label>
											<input type="text" class="form-control rounded-0 bg-light bc-v1-dark" id="inputZip">
										</div>
									</div>
									<div class="form-group">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="gridCheck">
											<label class="form-check-label" for="gridCheck">
												Check me out
											</label>
										</div>
									</div>
									<button type="submit" class="btn bg-pink text-white text-shadow-s1 text-uppercase text-bold-600 text-size-s1 rounded-0 pt-12 pb-12 pl-s3 pr-s3 mt-s1 mb-s1">Submit</button>
								</form>
							</div>
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
					<div class="mb-s4 bg-white p-s4 box-shadow-v1-s3">
						<div class="mb-s4">
							<h4 class="text-bold-700 mb-20">Form #5</h4>
							<hr class="mb-0 bc-v1-dark">
							<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-md-12">
							<div class="p-s3 bg-pink box-shadow-v1-s3 rounded-s4">
								<form>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label class="text-size-12 text-bold-700 text-uppercase text-v6-dark" for="inputEmail4">Email</label>
											<input type="email" class="form-control rounded-0 bg-v2-dark bc-v2-dark" id="inputEmail4">
										</div>
										<div class="form-group col-md-6">
											<label class="text-size-12 text-bold-700 text-uppercase text-v6-dark" for="inputPassword4">Password</label>
											<input type="password" class="form-control rounded-0 bg-v2-dark bc-v2-dark" id="inputPassword4">
										</div>
									</div>
									<div class="form-group">
										<label class="text-size-12 text-bold-700 text-uppercase text-v6-dark" for="inputAddress">Address</label>
										<input type="text" class="form-control rounded-0 bg-v2-dark bc-v2-dark" id="inputAddress">
									</div>
									<div class="form-group">
										<label class="text-size-12 text-bold-700 text-uppercase text-v6-dark" for="inputAddress2">Address 2</label>
										<input type="text" class="form-control rounded-0 bg-v2-dark bc-v2-dark" id="inputAddress2">
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label class="text-size-12 text-bold-700 text-uppercase text-v6-dark" for="inputCity">City</label>
											<input type="text" class="form-control rounded-0 bg-v2-dark bc-v2-dark" id="inputCity">
										</div>
										<div class="form-group col-md-4">
											<label class="text-size-12 text-bold-700 text-uppercase text-v6-dark" for="inputState">State</label>
											<select id="inputState" class="form-control rounded-0 bg-v2-dark bc-v2-dark">
												<option selected>Choose...</option>
												<option>...</option>
											</select>
										</div>
										<div class="form-group col-md-2">
											<label class="text-size-12 text-bold-700 text-uppercase text-v6-dark" for="inputZip">Zip</label>
											<input type="text" class="form-control rounded-0 bg-v2-dark bc-v2-dark" id="inputZip">
										</div>
									</div>
									<div class="form-group">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="gridCheck">
											<label class="form-check-label" for="gridCheck">
												Check me out
											</label>
										</div>
									</div>
									<button type="submit" class="btn bg-none text-white text-shadow-s1 text-uppercase text-bold-600 text-size-s1 rounded-0 pt-12 pb-12 pl-s3 pr-s3 mt-s1 mb-s1 bs-solid bc-white bw-s2 text-v7-white--hover bg-v2-dark--hover bc-v2-dark--hover">Submit</button>
								</form>
							</div>
						</div>
					</div> <!-- /ROW -->
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<?php include'includes___footer_links.php'; ?>

</body>
</html>