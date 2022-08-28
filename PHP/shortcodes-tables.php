<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shortcodes Tables | Interact Responsive Template</title>

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
							<h3 class="text-bold-400 text-size-s2 m-0 text-white">Tables</h3>
						</div>
						<div class="ml-auto align-self-center">
							<ol class="breadcrumb d-flex justify-content-center m-0 bg-none text-size-s1 p-0">
								<li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
								<li class="breadcrumb-item"><a class="text-white" href="#">Shortcodes</a></li>
								<li class="breadcrumb-item" aria-current="page">Tables</li>
							</ol>
						</div>
					</div>
				</div>
			</div> <!-- ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->
	<!-- /BREADCRUMB -->

	<section class="bg-white pt-s5 pb-s3">
		<div class="container">
			<p class="mb-s4">Due to the widespread use of tables across third-party widgets like calendars and date pickers, we’ve designed our tables to be <strong>opt-in</strong>. Just add the base class <code class="highlighter-rouge">.table</code> to any <code class="highlighter-rouge">&lt;table&gt;</code>, then extend with custom styles or our various included modifier classes.</p>
			<div class="mb-s3">
				<h4 class="text-bold-700 mb-20">Table</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="mb-s4">Using the most basic table markup, here’s how <code class="highlighter-rouge">.table</code>-based tables look in Bootstrap. <strong>All table styles are inherited in Bootstrap 4</strong>, meaning any nested tables will be styled in the same manner as the parent.</p>
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td class="text-center"><span class="bg-danger text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-times"></i></span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s3">
				<h4 class="text-bold-700 mb-20">Table Dark</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="mb-s4">You can also invert the colors—with light text on dark backgrounds—with <code class="highlighter-rouge">.table-dark</code>.</p>
					<table class="table table-dark">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td class="text-center"><span class="bg-v3-success text-success rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td class="text-center"><span class="bg-v3-danger text-danger rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-times"></i></span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td class="text-center"><span class="bg-v3-success text-success rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s3">
				<h4 class="text-bold-700 mb-20">Table Striped</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="mb-s4">Use <code class="highlighter-rouge">.table-striped</code> to add zebra-striping to any table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
				</div>
				<div class="col-md-6">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td class="text-center"><span class="bg-danger text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-times"></i></span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-6">
					<table class="table table-striped table-dark">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td class="text-center"><span class="bg-danger text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-times"></i></span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s3">
				<h4 class="text-bold-700 mb-20">Table Bordered</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="mb-s4">Add <code class="highlighter-rouge">.table-bordered</code> for borders on all sides of the table and cells.</p>
				</div>
				<div class="col-md-6">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td class="text-center"><span class="bg-danger text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-times"></i></span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-6">
					<table class="table table-bordered table-dark">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td class="text-center"><span class="bg-v3-success text-success rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td class="text-center"><span class="bg-v3-danger text-danger rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-times"></i></span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td class="text-center"><span class="bg-v3-success text-success rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s3">
				<h4 class="text-bold-700 mb-20">Table Hover</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="mb-s4">Add <code class="highlighter-rouge">.table-hover</code> to enable a hover state on table rows within a <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
				</div>
				<div class="col-md-6">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td class="text-center"><span class="bg-danger text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-times"></i></span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-6">
					<table class="table table-hover table-dark">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td class="text-center"><span class="bg-danger text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-times"></i></span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s3">
				<h4 class="text-bold-700 mb-20">Table Small</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="mb-s4">Add <code class="highlighter-rouge">.table-sm</code> to make tables more compact by cutting cell padding in half.</p>
				</div>
				<div class="col-md-6">
					<table class="table table-sm">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td class="text-center"><span class="bg-danger text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-times"></i></span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-6">
					<table class="table table-sm table-dark">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td class="text-center"><span class="bg-danger text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-times"></i></span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s3">
				<h4 class="text-bold-700 mb-20">Table Caption</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="mb-s4">A <code class="highlighter-rouge">&lt;caption&gt;</code> functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it.</p>
					<table class="table">
						<caption>List of users</caption>
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td class="text-center"><span class="bg-danger text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-times"></i></span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="mb-s3">
				<h4 class="text-bold-700 mb-20">Table Responsive</h4>
				<hr class="mb-0 bc-v1-dark">
				<hr class="w--60 bs-solid bc-v4-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="mb-s4">Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a <code class="highlighter-rouge">.table</code> with <code class="highlighter-rouge">.table-responsive</code>. Or, pick a maximum breakpoint with which to have a responsive table up to by using <code class="highlighter-rouge">.table-responsive{-sm|-md|-lg|-xl}</code>.</p>
					<p class="mb-s4">Across every breakpoint, use <code class="highlighter-rouge">.table-responsive</code> for horizontally scrolling tables.</p>
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>#</th>
								<th>Heading</th>
								<th>Heading</th>
								<th>Heading</th>
								<th>Heading</th>
								<th>Heading</th>
								<th>Heading</th>
								<th>Heading</th>
								<th>Heading</th>
								<th>Heading</th>
								<th>Heading</th>
								<th>Heading</th>
								<th>Heading</th>
								<th>Heading</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
								<td>Cell</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="mb-s4">Use <code class="highlighter-rouge">.table-responsive{-sm|-md|-lg|-xl}</code> as needed to create responsive tables up to a particular breakpoint. From that breakpoint and up, the table will behave normally and not scroll horizontally.</p>
					<table class="table table-responsive-md">
						<caption>List of users</caption>
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td class="text-center"><span class="bg-danger text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-times"></i></span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td class="text-center"><span class="bg-success text-white rounded-circle text-size-s1 h--30 w--30 d-flex justify-content-center align-items-center"><i class="fa fa-check"></i></span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<?php include'includes___footer_links.php'; ?>

</body>
</html>