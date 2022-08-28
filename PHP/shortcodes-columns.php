<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shortcodes Columns | Interact Responsive Template</title>

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
							<h3 class="text-bold-400 text-size-s2 m-0 text-white">Columns</h3>
						</div>
						<div class="ml-auto align-self-center">
							<ol class="breadcrumb d-flex justify-content-center m-0 bg-none text-size-s1 p-0">
								<li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
								<li class="breadcrumb-item"><a class="text-white" href="#">Shortcodes</a></li>
								<li class="breadcrumb-item" aria-current="page">Columns</li>
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
				<div class="col-lg-12">
					<div class="mb-s3">
						<h4 class="text-bold-700 mb-20">Grid Options</h4>
						<hr class="mb-0 bc-v1-dark">
						<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
					</div>
					<div class="mb-s3">
						<p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th></th>
									<th class="text-center">
										Extra small<br>
										<small>&lt;576px</small>
									</th>
									<th class="text-center">
										Small<br>
										<small>≥576px</small>
									</th>
									<th class="text-center">
										Medium<br>
										<small>≥768px</small>
									</th>
									<th class="text-center">
										Large<br>
										<small>≥992px</small>
									</th>
									<th class="text-center">
										Extra large<br>
										<small>≥1200px</small>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="text-nowrap" scope="row">Max container width</th>
									<td>None (auto)</td>
									<td>540px</td>
									<td>720px</td>
									<td>960px</td>
									<td>1140px</td>
								</tr>
								<tr>
									<th class="text-nowrap" scope="row">Class prefix</th>
									<td><code>.col-</code></td>
									<td><code>.col-sm-</code></td>
									<td><code>.col-md-</code></td>
									<td><code>.col-lg-</code></td>
									<td><code>.col-xl-</code></td>
								</tr>
								<tr>
									<th class="text-nowrap" scope="row"># of columns</th>
									<td colspan="5">12</td>
								</tr>
								<tr>
									<th class="text-nowrap" scope="row">Gutter width</th>
									<td colspan="5">30px (15px on each side of a column)</td>
								</tr>
								<tr>
									<th class="text-nowrap" scope="row">Nestable</th>
									<td colspan="5">Yes</td>
								</tr>
								<tr>
									<th class="text-nowrap" scope="row">Column ordering</th>
									<td colspan="5">Yes</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="mb-s3">
						<h4 class="text-bold-700 mb-20">Example: Stacked-to-horizontal</h4>
						<hr class="mb-0 bc-v1-dark">
						<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
					</div>
					<div class="mb-s3">
						<p>Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code>.</p>
					</div>
				</div>
			</div> <!-- /ROW -->
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-1 demo-grid">.col-md-1</div>
					<div class="col-md-1 demo-grid">.col-md-1</div>
					<div class="col-md-1 demo-grid">.col-md-1</div>
					<div class="col-md-1 demo-grid">.col-md-1</div>
					<div class="col-md-1 demo-grid">.col-md-1</div>
					<div class="col-md-1 demo-grid">.col-md-1</div>
					<div class="col-md-1 demo-grid">.col-md-1</div>
					<div class="col-md-1 demo-grid">.col-md-1</div>
					<div class="col-md-1 demo-grid">.col-md-1</div>
					<div class="col-md-1 demo-grid">.col-md-1</div>
					<div class="col-md-1 demo-grid">.col-md-1</div>
					<div class="col-md-1 demo-grid">.col-md-1</div>
				</div> <!-- /ROW -->
				<div class="row">
					<div class="col-md-2 demo-grid">.col-md-2</div>
					<div class="col-md-2 demo-grid">.col-md-2</div>
					<div class="col-md-2 demo-grid">.col-md-2</div>
					<div class="col-md-2 demo-grid">.col-md-2</div>
					<div class="col-md-2 demo-grid">.col-md-2</div>
					<div class="col-md-2 demo-grid">.col-md-2</div>
				</div> <!-- /ROW -->
				<div class="row">
					<div class="col-md-3 demo-grid">.col-md-3</div>
					<div class="col-md-3 demo-grid">.col-md-3</div>
					<div class="col-md-3 demo-grid">.col-md-3</div>
					<div class="col-md-3 demo-grid">.col-md-3</div>
				</div> <!-- /ROW -->
				<div class="row">
					<div class="col-md-4 demo-grid">.col-md-4</div>
					<div class="col-md-4 demo-grid">.col-md-4</div>
					<div class="col-md-4 demo-grid">.col-md-4</div>
				</div> <!-- /ROW -->
				<div class="row">
					<div class="col-md-6 demo-grid">.col-md-6</div>
					<div class="col-md-6 demo-grid">.col-md-6</div>
				</div> <!-- /ROW -->
				<div class="row">
					<div class="col-md-12 demo-grid">.col-md-12</div>
				</div> <!-- /ROW -->
			</div>
			<div class="mb-s3 mt-s5">
				<h4 class="text-bold-700 mb-20">wrap with this class (.custom-5-column) for 5 colum</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="col-md-12">
				<div class="row custom-5-column">
					<div class="col-md-5 demo-grid">.col-md-5</div>
					<div class="col-md-5 demo-grid">.col-md-5</div>
					<div class="col-md-5 demo-grid">.col-md-5</div>
					<div class="col-md-5 demo-grid">.col-md-5</div>
					<div class="col-md-5 demo-grid">.col-md-5</div>
				</div> <!-- /ROW -->
			</div>
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<?php include'includes___footer_links.php'; ?>

</body>
</html>