<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shortcodes Accordions | Interact Responsive Template</title>

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
							<h3 class="text-bold-400 text-size-s2 m-0 text-white">Accordions</h3>
						</div>
						<div class="ml-auto align-self-center">
							<ol class="breadcrumb d-flex justify-content-center m-0 bg-none text-size-s1 p-0">
								<li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
								<li class="breadcrumb-item"><a class="text-white" href="#">Shortcodes</a></li>
								<li class="breadcrumb-item" aria-current="page">Accordions</li>
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
			<div class="mb-s4">
				<h4 class="text-bold-700 mb-20">Accordion #1</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="accordion" id="accordion-acc1">
						<div class="card border-none bg-none">
							<div id="headingOne-acc1-1">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 pl-0 pr-0 text-left text-pink--active text-pink--hover active collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseOne-acc1-1" aria-expanded="true" aria-controls="collapseOne-acc1-1">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										What we do
									</button>
								</h5>
							</div>

							<div id="collapseOne-acc1-1" class="collapse show" aria-labelledby="headingOne-acc1-1" data-parent="#accordion-acc1">
								<div class="card-body mt-s2 mb-s2 bg-v5-light">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingTwo-acc1-2">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 pl-0 pr-0 text-left text-pink--active text-pink--hover collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseTwo-acc1-2" aria-expanded="false" aria-controls="collapseTwo-acc1-2">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Research & Development
									</button>
								</h5>
							</div>
							<div id="collapseTwo-acc1-2" class="collapse" aria-labelledby="headingTwo-acc1-2" data-parent="#accordion-acc1">
								<div class="card-body mt-s2 mb-s2 bg-v5-light">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingThree-acc1-3">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 pl-0 pr-0 text-left text-pink--active text-pink--hover collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseThree-acc1-3" aria-expanded="false" aria-controls="collapseThree-acc1-3">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Who we are
									</button>
								</h5>
							</div>
							<div id="collapseThree-acc1-3" class="collapse" aria-labelledby="headingThree-acc1-3" data-parent="#accordion-acc1">
								<div class="card-body mt-s2 mb-s2 bg-v5-light">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-v5-light pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s4">
				<h4 class="text-bold-700 mb-20">Accordion #2</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="accordion" id="accordion-acc2">
						<div class="card border-none bg-none">
							<div id="headingOne-acc2-1">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 pl-0 pr-0 text-left text-pink--active text-pink--hover active collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseOne-acc2-1" aria-expanded="true" aria-controls="collapseOne-acc2-1">
										<span class="bs-solid bc-pink bw-s2 d-inline-block w--20 h--20 text-center d-flex align-items-center justify-content-center float-left mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										What we do
									</button>
								</h5>
							</div>

							<div id="collapseOne-acc2-1" class="collapse show" aria-labelledby="headingOne-acc2-1" data-parent="#accordion-acc2">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingTwo-acc2-2">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 pl-0 pr-0 text-left text-pink--active text-pink--hover collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseTwo-acc2-2" aria-expanded="false" aria-controls="collapseTwo-acc2-2">
										<span class="bs-solid bc-pink bw-s2 d-inline-block w--20 h--20 text-center d-flex align-items-center justify-content-center float-left mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Research & Development
									</button>
								</h5>
							</div>
							<div id="collapseTwo-acc2-2" class="collapse" aria-labelledby="headingTwo-acc2-2" data-parent="#accordion-acc2">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingThree-acc2-3">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 pl-0 pr-0 text-left text-pink--active text-pink--hover collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseThree-acc2-3" aria-expanded="false" aria-controls="collapseThree-acc2-3">
										<span class="bs-solid bc-pink bw-s2 d-inline-block w--20 h--20 text-center d-flex align-items-center justify-content-center float-left mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Who we are
									</button>
								</h5>
							</div>
							<div id="collapseThree-acc2-3" class="collapse" aria-labelledby="headingThree-acc2-3" data-parent="#accordion-acc2">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s4">
				<h4 class="text-bold-700 mb-20">Accordion #3</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="accordion" id="accordion-acc3">
						<div class="card border-none bg-none">
							<div id="headingOne-acc3-1">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 pl-0 pr-0 text-left text-pink--active text-pink--hover active collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseOne-acc3-1" aria-expanded="true" aria-controls="collapseOne-acc3-1">
										<span class="bg-pink text-white d-inline-block w--20 h--20 text-center d-flex align-items-center justify-content-center float-left mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										What we do
									</button>
								</h5>
							</div>

							<div id="collapseOne-acc3-1" class="collapse show" aria-labelledby="headingOne-acc3-1" data-parent="#accordion-acc3">
								<div class="card-body mt-s2 mb-s2 bg-v5-light">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingTwo-acc3-2">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 pl-0 pr-0 text-left text-pink--active text-pink--hover collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseTwo-acc3-2" aria-expanded="false" aria-controls="collapseTwo-acc3-2">
										<span class="bg-pink text-white d-inline-block w--20 h--20 text-center d-flex align-items-center justify-content-center float-left mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Research & Development
									</button>
								</h5>
							</div>
							<div id="collapseTwo-acc3-2" class="collapse" aria-labelledby="headingTwo-acc3-2" data-parent="#accordion-acc3">
								<div class="card-body mt-s2 mb-s2 bg-v5-light">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingThree-acc3-3">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 pl-0 pr-0 text-left text-pink--active text-pink--hover collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseThree-acc3-3" aria-expanded="false" aria-controls="collapseThree-acc3-3">
										<span class="bg-pink text-white d-inline-block w--20 h--20 text-center d-flex align-items-center justify-content-center float-left mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Who we are
									</button>
								</h5>
							</div>
							<div id="collapseThree-acc3-3" class="collapse" aria-labelledby="headingThree-acc3-3" data-parent="#accordion-acc3">
								<div class="card-body mt-s2 mb-s2 bg-v5-light">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-v5-light pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s4">
				<h4 class="text-bold-700 mb-20">Accordion #4</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="accordion" id="accordion-acc4">
						<div class="card border-none bg-none">
							<div id="headingOne-acc4-1">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 pl-0 pr-0 text-left text-pink--active text-pink--hover active collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseOne-acc4-1" aria-expanded="true" aria-controls="collapseOne-acc4-1">
										<span class="bs-solid bc-pink bw-s2 d-inline-block w--20 h--20 text-center d-flex align-items-center justify-content-center float-left rounded-circle mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										What we do
									</button>
								</h5>
							</div>

							<div id="collapseOne-acc4-1" class="collapse show" aria-labelledby="headingOne-acc4-1" data-parent="#accordion-acc4">
								<div class="card-body mt-s2 mb-s2 bg-white">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingTwo-acc4-2">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 pl-0 pr-0 text-left text-pink--active text-pink--hover collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseTwo-acc4-2" aria-expanded="false" aria-controls="collapseTwo-acc4-2">
										<span class="bs-solid bc-pink bw-s2 d-inline-block w--20 h--20 text-center d-flex align-items-center justify-content-center float-left rounded-circle mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Research & Development
									</button>
								</h5>
							</div>
							<div id="collapseTwo-acc4-2" class="collapse" aria-labelledby="headingTwo-acc4-2" data-parent="#accordion-acc4">
								<div class="card-body mt-s2 mb-s2 bg-white">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingThree-acc4-3">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 pl-0 pr-0 text-left text-pink--active text-pink--hover collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseThree-acc4-3" aria-expanded="false" aria-controls="collapseThree-acc4-3">
										<span class="bs-solid bc-pink bw-s2 d-inline-block w--20 h--20 text-center d-flex align-items-center justify-content-center float-left rounded-circle mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Who we are
									</button>
								</h5>
							</div>
							<div id="collapseThree-acc4-3" class="collapse" aria-labelledby="headingThree-acc4-3" data-parent="#accordion-acc4">
								<div class="card-body mt-s2 mb-s2 bg-white">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s4">
				<h4 class="text-bold-700 mb-20">Accordion #5</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="accordion" id="accordion-acc5">
						<div class="card border-none bg-none">
							<div id="headingOne-acc5-1">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 pl-0 pr-0 text-left text-pink--active text-pink--hover active collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseOne-acc5-1" aria-expanded="true" aria-controls="collapseOne-acc5-1">
										<span class="bg-pink text-white d-inline-block w--20 h--20 text-center d-flex align-items-center justify-content-center float-left rounded-circle mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										What we do
									</button>
								</h5>
							</div>

							<div id="collapseOne-acc5-1" class="collapse show" aria-labelledby="headingOne-acc5-1" data-parent="#accordion-acc5">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingTwo-acc5-2">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 pl-0 pr-0 text-left text-pink--active text-pink--hover collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseTwo-acc5-2" aria-expanded="false" aria-controls="collapseTwo-acc5-2">
										<span class="bg-pink text-white d-inline-block w--20 h--20 text-center d-flex align-items-center justify-content-center float-left rounded-circle mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Research & Development
									</button>
								</h5>
							</div>
							<div id="collapseTwo-acc5-2" class="collapse" aria-labelledby="headingTwo-acc5-2" data-parent="#accordion-acc5">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingThree-acc5-3">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 pl-0 pr-0 text-left text-pink--active text-pink--hover collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseThree-acc5-3" aria-expanded="false" aria-controls="collapseThree-acc5-3">
										<span class="bg-pink text-white d-inline-block w--20 h--20 text-center d-flex align-items-center justify-content-center float-left rounded-circle mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Who we are
									</button>
								</h5>
							</div>
							<div id="collapseThree-acc5-3" class="collapse" aria-labelledby="headingThree-acc5-3" data-parent="#accordion-acc5">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-v5-light pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s4">
				<h4 class="text-bold-700 mb-20">Accordion #6</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="accordion" id="accordion-acc6">
						<div class="card border-none bg-none">
							<div id="headingOne-acc6-1">
								<h5 class="mb-s1">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bg-white bg-pink--active text-white--active text-pink--hover active collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseOne-acc6-1" aria-expanded="true" aria-controls="collapseOne-acc6-1">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										What we do
									</button>
								</h5>
							</div>

							<div id="collapseOne-acc6-1" class="collapse show" aria-labelledby="headingOne-acc6-1" data-parent="#accordion-acc6">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingTwo-acc6-2">
								<h5 class="mb-s1">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bg-white bg-pink--active text-white--active text-pink--hover collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseTwo-acc6-2" aria-expanded="false" aria-controls="collapseTwo-acc6-2">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Research & Development
									</button>
								</h5>
							</div>
							<div id="collapseTwo-acc6-2" class="collapse" aria-labelledby="headingTwo-acc6-2" data-parent="#accordion-acc6">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingThree-acc6-3">
								<h5 class="mb-s1">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bg-white bg-pink--active text-white--active text-pink--hover collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseThree-acc6-3" aria-expanded="false" aria-controls="collapseThree-acc6-3">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Who we are
									</button>
								</h5>
							</div>
							<div id="collapseThree-acc6-3" class="collapse" aria-labelledby="headingThree-acc6-3" data-parent="#accordion-acc6">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="accordion" id="accordion-acc7">
						<div class="card border-none bg-none">
							<div id="headingOne-acc7-1">
								<h5 class="mb-s1">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bg-white bg-pink--active text-white--active text-pink--hover active collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseOne-acc7-1" aria-expanded="true" aria-controls="collapseOne-acc7-1">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										What we do
									</button>
								</h5>
							</div>

							<div id="collapseOne-acc7-1" class="collapse show" aria-labelledby="headingOne-acc7-1" data-parent="#accordion-acc7">
								<div class="card-body bg-white p-s3 mb-s1">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingTwo-acc7-2">
								<h5 class="mb-s1">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bg-white bg-pink--active text-white--active text-pink--hover collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseTwo-acc7-2" aria-expanded="false" aria-controls="collapseTwo-acc7-2">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Research & Development
									</button>
								</h5>
							</div>
							<div id="collapseTwo-acc7-2" class="collapse" aria-labelledby="headingTwo-acc7-2" data-parent="#accordion-acc7">
								<div class="card-body bg-white p-s3 mb-s1">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingThree-acc7-3">
								<h5 class="mb-s1">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bg-white bg-pink--active text-white--active text-pink--hover collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseThree-acc7-3" aria-expanded="false" aria-controls="collapseThree-acc7-3">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Who we are
									</button>
								</h5>
							</div>
							<div id="collapseThree-acc7-3" class="collapse" aria-labelledby="headingThree-acc7-3" data-parent="#accordion-acc7">
								<div class="card-body bg-white p-s3 mb-s1">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s4">
				<h4 class="text-bold-700 mb-20">Accordion #7</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="accordion" id="accordion-acc8">
						<div class="card border-none bg-none">
							<div id="headingOne-acc8-1">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bg-v5-light bg-pink--active text-white--active text-pink--hover active collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseOne-acc8-1" aria-expanded="true" aria-controls="collapseOne-acc8-1">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										What we do
									</button>
								</h5>
							</div>

							<div id="collapseOne-acc8-1" class="collapse show" aria-labelledby="headingOne-acc8-1" data-parent="#accordion-acc8">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingTwo-acc8-2">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bg-v5-light bg-pink--active text-white--active text-pink--hover collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseTwo-acc8-2" aria-expanded="false" aria-controls="collapseTwo-acc8-2">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Research & Development
									</button>
								</h5>
							</div>
							<div id="collapseTwo-acc8-2" class="collapse" aria-labelledby="headingTwo-acc8-2" data-parent="#accordion-acc8">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingThree-acc8-3">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bg-v5-light bg-pink--active text-white--active text-pink--hover collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseThree-acc8-3" aria-expanded="false" aria-controls="collapseThree-acc8-3">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Who we are
									</button>
								</h5>
							</div>
							<div id="collapseThree-acc8-3" class="collapse" aria-labelledby="headingThree-acc8-3" data-parent="#accordion-acc8">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-v5-light pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s4">
				<h4 class="text-bold-700 mb-20">Accordion #8</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="accordion" id="accordion-acc12">
						<div class="card border-none bg-none">
							<div id="headingOne-acc12-1">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-s5 text-left bg-pink--active text-white--active text-pink--hover active collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseOne-acc12-1" aria-expanded="true" aria-controls="collapseOne-acc12-1">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										What we do
									</button>
								</h5>
							</div>

							<div id="collapseOne-acc12-1" class="collapse show" aria-labelledby="headingOne-acc12-1" data-parent="#accordion-acc12">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingTwo-acc12-2">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-s5 text-left bg-pink--active text-white--active text-pink--hover collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseTwo-acc12-2" aria-expanded="false" aria-controls="collapseTwo-acc12-2">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Research & Development
									</button>
								</h5>
							</div>
							<div id="collapseTwo-acc12-2" class="collapse" aria-labelledby="headingTwo-acc12-2" data-parent="#accordion-acc12">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingThree-acc12-3">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-s5 text-left bg-pink--active text-white--active text-pink--hover collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseThree-acc12-3" aria-expanded="false" aria-controls="collapseThree-acc12-3">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Who we are
									</button>
								</h5>
							</div>
							<div id="collapseThree-acc12-3" class="collapse" aria-labelledby="headingThree-acc12-3" data-parent="#accordion-acc12">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s4">
				<h4 class="text-bold-700 mb-20">Accordion #9</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="accordion" id="accordion-acc13">
						<div class="card border-none bg-none">
							<div id="headingOne-acc13-1">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bs-solid bc-pink--active bw-s4 text-pink--active text-pink--hover active collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseOne-acc13-1" aria-expanded="true" aria-controls="collapseOne-acc13-1">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										What we do
									</button>
								</h5>
							</div>

							<div id="collapseOne-acc13-1" class="collapse show" aria-labelledby="headingOne-acc13-1" data-parent="#accordion-acc13">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingTwo-acc13-2">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bs-solid bc-pink--active bw-s4 text-pink--active text-pink--hover collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseTwo-acc13-2" aria-expanded="false" aria-controls="collapseTwo-acc13-2">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Research & Development
									</button>
								</h5>
							</div>
							<div id="collapseTwo-acc13-2" class="collapse" aria-labelledby="headingTwo-acc13-2" data-parent="#accordion-acc13">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingThree-acc13-3">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bs-solid bc-pink--active bw-s4 text-pink--active text-pink--hover collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseThree-acc13-3" aria-expanded="false" aria-controls="collapseThree-acc13-3">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Who we are
									</button>
								</h5>
							</div>
							<div id="collapseThree-acc13-3" class="collapse" aria-labelledby="headingThree-acc13-3" data-parent="#accordion-acc13">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-v5-light pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s4">
				<h4 class="text-bold-700 mb-20">Accordion #10</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="accordion" id="accordion-acc16">
						<div class="card border-none bg-none">
							<div id="headingOne-acc16-1">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-s5 text-left bs-solid bc-pink--active bw-s4 text-pink--active text-pink--hover active collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseOne-acc16-1" aria-expanded="true" aria-controls="collapseOne-acc16-1">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										What we do
									</button>
								</h5>
							</div>

							<div id="collapseOne-acc16-1" class="collapse show" aria-labelledby="headingOne-acc16-1" data-parent="#accordion-acc16">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingTwo-acc16-2">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-s5 text-left bs-solid bc-pink--active bw-s4 text-pink--active text-pink--hover collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseTwo-acc16-2" aria-expanded="false" aria-controls="collapseTwo-acc16-2">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Research & Development
									</button>
								</h5>
							</div>
							<div id="collapseTwo-acc16-2" class="collapse" aria-labelledby="headingTwo-acc16-2" data-parent="#accordion-acc16">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingThree-acc16-3">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-s5 text-left bs-solid bc-pink--active bw-s4 text-pink--active text-pink--hover collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseThree-acc16-3" aria-expanded="false" aria-controls="collapseThree-acc16-3">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Who we are
									</button>
								</h5>
							</div>
							<div id="collapseThree-acc16-3" class="collapse" aria-labelledby="headingThree-acc16-3" data-parent="#accordion-acc16">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s4">
				<h4 class="text-bold-700 mb-20">Accordion #11</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="accordion" id="accordion-acc17">
						<div class="card border-none bg-none">
							<div id="headingOne-acc17-1">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bs-solid bc-pink--active bw-s4 bt-0 bl-0 br-0 text-pink--active text-pink--hover active collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseOne-acc17-1" aria-expanded="true" aria-controls="collapseOne-acc17-1">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										What we do
									</button>
								</h5>
							</div>

							<div id="collapseOne-acc17-1" class="collapse show" aria-labelledby="headingOne-acc17-1" data-parent="#accordion-acc17">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingTwo-acc17-2">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bs-solid bc-pink--active bw-s4 bt-0 bl-0 br-0 text-pink--active text-pink--hover collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseTwo-acc17-2" aria-expanded="false" aria-controls="collapseTwo-acc17-2">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Research & Development
									</button>
								</h5>
							</div>
							<div id="collapseTwo-acc17-2" class="collapse" aria-labelledby="headingTwo-acc17-2" data-parent="#accordion-acc17">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingThree-acc17-3">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bs-solid bc-pink--active bw-s4 bt-0 bl-0 br-0 text-pink--active text-pink--hover collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseThree-acc17-3" aria-expanded="false" aria-controls="collapseThree-acc17-3">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Who we are
									</button>
								</h5>
							</div>
							<div id="collapseThree-acc17-3" class="collapse" aria-labelledby="headingThree-acc17-3" data-parent="#accordion-acc17">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-v5-light pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s4">
				<h4 class="text-bold-700 mb-20">Accordion #12</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="accordion" id="accordion-acc19">
						<div class="card border-none bg-none">
							<div id="headingOne-acc19-1">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bs-solid bc-pink--active bw-s4 bt-0 bb-0 br-0 text-pink--active text-pink--hover active collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseOne-acc19-1" aria-expanded="true" aria-controls="collapseOne-acc19-1">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										What we do
									</button>
								</h5>
							</div>

							<div id="collapseOne-acc19-1" class="collapse show" aria-labelledby="headingOne-acc19-1" data-parent="#accordion-acc19">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingTwo-acc19-2">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bs-solid bc-pink--active bw-s4 bt-0 bb-0 br-0 text-pink--active text-pink--hover collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseTwo-acc19-2" aria-expanded="false" aria-controls="collapseTwo-acc19-2">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Research & Development
									</button>
								</h5>
							</div>
							<div id="collapseTwo-acc19-2" class="collapse" aria-labelledby="headingTwo-acc19-2" data-parent="#accordion-acc19">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingThree-acc19-3">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-0 text-left bs-solid bc-pink--active bw-s4 bt-0 bb-0 br-0 text-pink--active text-pink--hover collapsed pt-s1 pb-s1" type="button" data-toggle="collapse" data-target="#collapseThree-acc19-3" aria-expanded="false" aria-controls="collapseThree-acc19-3">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Who we are
									</button>
								</h5>
							</div>
							<div id="collapseThree-acc19-3" class="collapse" aria-labelledby="headingThree-acc19-3" data-parent="#accordion-acc19">
								<div class="card-body p-s3">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s4">
				<h4 class="text-bold-700 mb-20">Accordion #13</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="accordion" id="accordion-acc23">
						<div class="card border-none bg-none mb-s2">
							<div id="headingOne-acc23-1">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-s2 text-left bs-solid bc-pink--active bg-white bg-white--active box-shadow-v1-s2--active bw-s4 bt-0 bl-0 br-0 text-pink--active text-pink--hover active collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseOne-acc23-1" aria-expanded="true" aria-controls="collapseOne-acc23-1">
										<span class="mr-s1 float-right">
											<span>
												<i class="far fa-eye hide"></i>
												<i class="far fa-eye-slash show"></i>
											</span>
										</span>
										<span class="mr-s2">01.</span> Consectetur adipiscing elit vivamus dapibus
									</button>
								</h5>
							</div>

							<div id="collapseOne-acc23-1" class="collapse show" aria-labelledby="headingOne-acc23-1" data-parent="#accordion-acc23">
								<div class="card-body pt-s3 p-s3">
									<p>Nulla ultrices enim at erat scelerisque, id euismod sem consequat. Pellentesque ac pulvinar diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In consectetur mauris ac elit finibus, tempor gravida nibh posuere. Nullam lobortis maximus sapien sed euismod. Integer tempor justo dolor.</p>
									<p>Nulla ultrices enim at erat scelerisque, id euismod sem consequat. Pellentesque ac pulvinar diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In consectetur mauris ac elit finibus, tempor gravida nibh posuere. Nullam lobortis maximus sapien sed euismod. Integer tempor justo dolor. Nunc quis lectus finibus, gravida ex vitae, egestas diam. Donec malesuada est elit, ac interdum eros malesuada id. Proin luctus fringilla ligula eu scelerisque. Praesent eleifend pulvinar imperdiet. Sed est massa, sodales vitae sem at, sodales placerat sem.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none mb-s2">
							<div id="headingTwo-acc23-2">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-s2 text-left bs-solid bc-pink--active bg-white bg-white--active box-shadow-v1-s2--active bw-s4 bt-0 bl-0 br-0 text-pink--active text-pink--hover collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseTwo-acc23-2" aria-expanded="false" aria-controls="collapseTwo-acc23-2">
										<span class="mr-s1 float-right">
											<span>
												<i class="far fa-eye hide"></i>
												<i class="far fa-eye-slash show"></i>
											</span>
										</span>
										<span class="mr-s2">02.</span> Mollis ornare integer pharetra malesuada
									</button>
								</h5>
							</div>
							<div id="collapseTwo-acc23-2" class="collapse" aria-labelledby="headingTwo-acc23-2" data-parent="#accordion-acc23">
								<div class="card-body pt-s3 p-s3">
									<p>Nulla ultrices enim at erat scelerisque, id euismod sem consequat. Pellentesque ac pulvinar diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In consectetur mauris ac elit finibus, tempor gravida nibh posuere. Nullam lobortis maximus sapien sed euismod. Integer tempor justo dolor.</p>
									<p>Nulla ultrices enim at erat scelerisque, id euismod sem consequat. Pellentesque ac pulvinar diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In consectetur mauris ac elit finibus, tempor gravida nibh posuere. Nullam lobortis maximus sapien sed euismod. Integer tempor justo dolor. Nunc quis lectus finibus, gravida ex vitae, egestas diam. Donec malesuada est elit, ac interdum eros malesuada id. Proin luctus fringilla ligula eu scelerisque. Praesent eleifend pulvinar imperdiet. Sed est massa, sodales vitae sem at, sodales placerat sem.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none mb-s2">
							<div id="headingThree-acc23-3">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-s2 text-left bs-solid bc-pink--active bg-white bg-white--active box-shadow-v1-s2--active bw-s4 bt-0 bl-0 br-0 text-pink--active text-pink--hover collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseThree-acc23-3" aria-expanded="false" aria-controls="collapseThree-acc23-3">
										<span class="mr-s1 float-right">
											<span>
												<i class="far fa-eye hide"></i>
												<i class="far fa-eye-slash show"></i>
											</span>
										</span>
										<span class="mr-s2">03.</span> Aliquam aliquam orci non placerat vestibulum
									</button>
								</h5>
							</div>
							<div id="collapseThree-acc23-3" class="collapse" aria-labelledby="headingThree-acc23-3" data-parent="#accordion-acc23">
								<div class="card-body pt-s3 p-s3">
									<p>Nulla ultrices enim at erat scelerisque, id euismod sem consequat. Pellentesque ac pulvinar diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In consectetur mauris ac elit finibus, tempor gravida nibh posuere. Nullam lobortis maximus sapien sed euismod. Integer tempor justo dolor.</p>
									<p>Nulla ultrices enim at erat scelerisque, id euismod sem consequat. Pellentesque ac pulvinar diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In consectetur mauris ac elit finibus, tempor gravida nibh posuere. Nullam lobortis maximus sapien sed euismod. Integer tempor justo dolor. Nunc quis lectus finibus, gravida ex vitae, egestas diam. Donec malesuada est elit, ac interdum eros malesuada id. Proin luctus fringilla ligula eu scelerisque. Praesent eleifend pulvinar imperdiet. Sed est massa, sodales vitae sem at, sodales placerat sem.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none mb-s2">
							<div id="headingThree-acc23-4">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-s2 text-left bs-solid bc-pink--active bg-white bg-white--active box-shadow-v1-s2--active bw-s4 bt-0 bl-0 br-0 text-pink--active text-pink--hover collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseThree-acc23-4" aria-expanded="false" aria-controls="collapseThree-acc23-4">
										<span class="mr-s1 float-right">
											<span>
												<i class="far fa-eye hide"></i>
												<i class="far fa-eye-slash show"></i>
											</span>
										</span>
										<span class="mr-s2">04.</span> Commodo consectetur tellus eu ornare
									</button>
								</h5>
							</div>
							<div id="collapseThree-acc23-4" class="collapse" aria-labelledby="headingThree-acc23-4" data-parent="#accordion-acc23">
								<div class="card-body pt-s3 p-s3">
									<p>Nulla ultrices enim at erat scelerisque, id euismod sem consequat. Pellentesque ac pulvinar diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In consectetur mauris ac elit finibus, tempor gravida nibh posuere. Nullam lobortis maximus sapien sed euismod. Integer tempor justo dolor.</p>
									<p>Nulla ultrices enim at erat scelerisque, id euismod sem consequat. Pellentesque ac pulvinar diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In consectetur mauris ac elit finibus, tempor gravida nibh posuere. Nullam lobortis maximus sapien sed euismod. Integer tempor justo dolor. Nunc quis lectus finibus, gravida ex vitae, egestas diam. Donec malesuada est elit, ac interdum eros malesuada id. Proin luctus fringilla ligula eu scelerisque. Praesent eleifend pulvinar imperdiet. Sed est massa, sodales vitae sem at, sodales placerat sem.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none mb-s2">
							<div id="headingThree-acc23-5">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-uppercase text-size-s1 text-bold-600 text-dark rounded-s2 text-left bs-solid bc-pink--active bg-white bg-white--active box-shadow-v1-s2--active bw-s4 bt-0 bl-0 br-0 text-pink--active text-pink--hover collapsed p-s2" type="button" data-toggle="collapse" data-target="#collapseThree-acc23-5" aria-expanded="false" aria-controls="collapseThree-acc23-5">
										<span class="mr-s1 float-right">
											<span>
												<i class="far fa-eye hide"></i>
												<i class="far fa-eye-slash show"></i>
											</span>
										</span>
										<span class="mr-s2">05.</span> Nunc quis lectus finibus, gravida ex vitae
									</button>
								</h5>
							</div>
							<div id="collapseThree-acc23-5" class="collapse" aria-labelledby="headingThree-acc23-5" data-parent="#accordion-acc23">
								<div class="card-body pt-s3 p-s3">
									<p>Nulla ultrices enim at erat scelerisque, id euismod sem consequat. Pellentesque ac pulvinar diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In consectetur mauris ac elit finibus, tempor gravida nibh posuere. Nullam lobortis maximus sapien sed euismod. Integer tempor justo dolor.</p>
									<p>Nulla ultrices enim at erat scelerisque, id euismod sem consequat. Pellentesque ac pulvinar diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In consectetur mauris ac elit finibus, tempor gravida nibh posuere. Nullam lobortis maximus sapien sed euismod. Integer tempor justo dolor. Nunc quis lectus finibus, gravida ex vitae, egestas diam. Donec malesuada est elit, ac interdum eros malesuada id. Proin luctus fringilla ligula eu scelerisque. Praesent eleifend pulvinar imperdiet. Sed est massa, sodales vitae sem at, sodales placerat sem.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<?php include'includes___footer_links.php'; ?>

</body>
</html>