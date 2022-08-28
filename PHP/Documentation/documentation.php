<!DOCTYPE html>
<html>
<head>
	<title>Clients</title>

	<?php include'includes___header_links.php'; ?>

</head>
<body class="one-page" data-target="#header" data-spy="scroll" data-offset="100">

	<!-- <header id="header">
		<nav>
			<ul id="mainNav">
				<li>
					<a data-hash data-hash-offset="70" href="#projects">Latest Projects</a>
				</li>
				<li>
					<a data-hash data-hash-offset="70" href="#features">Features</a>
				</li>
				<li>
					<a data-hash data-hash-offset="70" href="#team">Meet the Team</a>
				</li>
				<li>
					<a data-hash data-hash-offset="70" href="#contact">Contact Us</a>
				</li>
			</ul>
		</nav>
	</header> -->


	<header id="header" class="main-header header-shadow primary-header">
		<div class="container">

			<div class="main-header-container">

				<div class="logo" data-mobile-logo="../assets/images/logo/logo-dark.png" data-sticky-logo="../assets/images/logo/logo-dark.png">
					<a href="index.php"><img src="../assets/images/logo/logo-dark.png" alt="logo"/></a>
				</div> <!-- /LOGO -->

				<div class="burger-menu">
					<div class="line-menu line-half first-line"></div>
					<div class="line-menu"></div>
					<div class="line-menu line-half last-line"></div>
				</div> <!-- /BURGER MENU -->

				<nav class="main-menu menu-caret submenu-top-border submenu-scale">
					<ul id="mainNav">
						<li><a data-hash data-hash-offset="70" href="#start">Start</a></li>
						<li><a data-hash data-hash-offset="70" href="#html_structure">HTML Structure</a></li>
						<li><a data-hash data-hash-offset="70" href="#headers">Header</a></li>
						<li><a data-hash data-hash-offset="70" href="#portfolio">Portfolio</a></li>
						<li><a data-hash data-hash-offset="70" href="#shop">Shop</a></li>
						<li><a data-hash data-hash-offset="70" href="#blog">Blog</a></li>
						<li><a data-hash data-hash-offset="70" href="#shortcodes">Shortcodes</a></li>
						<li><a data-hash data-hash-offset="70" href="#tips">Tips</a></li>
					</ul>
				</nav> <!-- NAVIGATION MENU -->

			</div> <!-- /HEADER CONTAINER -->

		</div> <!-- /CONTAINER -->
	</header> <!-- /HEADER -->

	<section class="pt-s5 pb-s5" id="start">
		<div class="container">
			<h1>Interact - <span style="font-weight:400;">Documentation</span></h1>
			<ul class="marketing-byline">
				<li><strong>Created:</strong> 02/06/2017</li>
				<li><strong>Create By:</strong> <a href="#">immersivesoul</a></li>
			</ul>
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->
	
	<section class="pt-s5 pb-s5">
		<div class="container">
			<h3>File Structure</h3><hr>
			<p>Follow the below steps to get started with your Site Template:</p>
			<ul class="list-unstyled">
				<li>Open the <code>Interact/site</code> Folder to find all the Templates Files</li>
				<li>You will need to Upload these Files to your Web Server using FTP in order to use it on your Website.</li>
				<li>Make sure you Upload the Required Files / Folders listed below:
					<ul>
						<li><code>site/assets/css</code></li>
						<li><code>site/assets/fonts</code></li>
						<li><code>site/assets/images</code></li>
						<li><code>site/assets/js</code></li>
						<li><code>site/assets/vendors</code></li>
						<li><code>site/assets/videos</code></li>
					</ul>
					The other Files can be used according to your preferences.
				</li>
				<li>You're now good to go..! Start adding your Content and show off your Brand New Beautiful Website in style.</li>
			</ul>
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->
	
	<section class="pt-s5 pb-s5" id="html_structure">
		<div class="container">
			<h3>HTML Structure</h3><hr>
			<p>Interact follows a simple coding structure. here is the sample:</p>
			<div class="bg-v1-dark p-s3">
<pre><p class="m-0">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	
	&lt;title&gt;Title&lt;/title&gt;

	&lt;!-- HEADER LINKS --&gt;

&lt;/head&gt;
&lt;body&gt;

	&lt;div class="main-header header-shadow primary-header"&gt;
		&lt;div class="container"&gt;
			Menu
		&lt;/div&gt; &lt;!-- /CONTAINER --&gt;
	&lt;/div&gt; &lt;!-- /HEADER --&gt;

	&lt;section class="bg-white pt-s5 pb-s5"&gt;
		&lt;div class="container"&gt;
			Content
		&lt;/div&gt; &lt;!-- /CONTAINER --&gt;
	&lt;/section&gt; &lt;!-- /SECTION --&gt;

	&lt;footer class="bg-v9-dark pt-s4 pb-s4"&gt;
		&lt;div class="container"&gt;
			Footer
		&lt;/div&gt; &lt;!-- /CONTAINER --&gt;
	&lt;/footer&gt; &lt;!-- /FOOTER --&gt;

	&lt;footer class="bg-dark pt-s1 pb-s1"&gt;
		&lt;div class="container"&gt;
			Copyright
		&lt;/div&gt; &lt;!-- /CONTAINER --&gt;
	&lt;/footer&gt; &lt;!-- /FOOTER --&gt;

&lt;/body&gt;
&lt;/html&gt;</p></pre>
			</div>
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->
	
	<section class="pt-s5 pb-s5" id="headers">
		<div class="container">
			<h3>Header</h3><hr>
			<p>Interact follows a simple coding structure. here is the sample:</p>

			<div class="alert mb-20 alert-dismissible bg-info text-white bc-info fade show rounded-0 d-flex align-items-center" role="alert">
				<i class="fa fa-flag mr-s3"></i>
				<div>
					<code class="bg-v2-white text-white bc-v3-white">main-header</code>
					<code class="bg-v2-white text-white bc-v3-white">primary-header</code>
					these are main classes.
					<code class="bg-v2-white text-white bc-v3-white">header-shadow</code>
					is optional
				</div>
			</div>

			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Header Style</th>
							<th>Class</th>
							<th>Example Code</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<div class="w--100">
									Default
								</div>
							</td>
							<td>
								<div class="w--250">
									<strong>Default</strong>
								</div>
							</td>
							<td>
<div class="h--200 overflow-hidden overflow-scroll-auto p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="main-header header-shadow primary-header"&gt;
	&lt;div class="container"&gt;

		&lt;div class="main-header-container"&gt;

			&lt;div class="logo" data-mobile-logo="assets/images/logo/logo-dark.png" data-sticky-logo="assets/images/logo/logo-dark.png"&gt;
				&lt;a href="index.php"&gt;&lt;img src="assets/images/logo/logo-dark.png" alt="logo"/&gt;&lt;/a&gt;
			&lt;/div&gt; &lt;!-- /LOGO --&gt;

			&lt;div class="burger-menu"&gt;
				&lt;div class="line-menu line-half first-line"&gt;&lt;/div&gt;
				&lt;div class="line-menu"&gt;&lt;/div&gt;
				&lt;div class="line-menu line-half last-line"&gt;&lt;/div&gt;
			&lt;/div&gt; &lt;!-- /BURGER MENU --&gt;

			&lt;nav class="main-menu menu-caret submenu-top-border submenu-scale"&gt;
				&lt;ul&gt;
					&lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt;
						&lt;ul&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;About&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Services&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Contact&lt;/a&gt;&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/nav&gt; &lt;!-- NAVIGATION MENU --&gt;

		&lt;/div&gt; &lt;!-- /HEADER CONTAINER --&gt;

	&lt;/div&gt; &lt;!-- /CONTAINER --&gt;
&lt;/div&gt; &lt;!-- /HEADER --&gt;</p></pre>
				</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Default
								</div>
							</td>
							<td>
								<div class="w--250">
									<strong>Dark header</strong> <br>
									use this class <code>header-dark</code> with <code>main-header</code>
								</div>
							</td>
							<td>
<div class="h--200 overflow-hidden overflow-scroll-auto p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="main-header header-shadow primary-header header-dark"&gt;
	&lt;div class="container"&gt;

		&lt;div class="main-header-container"&gt;

			&lt;div class="logo" data-mobile-logo="assets/images/logo/logo-dark.png" data-sticky-logo="assets/images/logo/logo-dark.png"&gt;
				&lt;a href="index.php"&gt;&lt;img src="assets/images/logo/logo-dark.png" alt="logo"/&gt;&lt;/a&gt;
			&lt;/div&gt; &lt;!-- /LOGO --&gt;

			&lt;div class="burger-menu"&gt;
				&lt;div class="line-menu line-half first-line"&gt;&lt;/div&gt;
				&lt;div class="line-menu"&gt;&lt;/div&gt;
				&lt;div class="line-menu line-half last-line"&gt;&lt;/div&gt;
			&lt;/div&gt; &lt;!-- /BURGER MENU --&gt;

			&lt;nav class="main-menu menu-caret submenu-top-border submenu-scale"&gt;
				&lt;ul&gt;
					&lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt;
						&lt;ul&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;About&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Services&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Contact&lt;/a&gt;&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/nav&gt; &lt;!-- NAVIGATION MENU --&gt;

		&lt;/div&gt; &lt;!-- /HEADER CONTAINER --&gt;

	&lt;/div&gt; &lt;!-- /CONTAINER --&gt;
&lt;/div&gt; &lt;!-- /HEADER --&gt;</p></pre>
				</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Default
								</div>
							</td>
							<td>
								<div class="w--250">
									<strong>Separate Line</strong> <br>
									use this class <code>separate-line</code> in nav tag <br>
									<strong>Dark Header Separate Line</strong> <br>
									you can also use the dark header with separate line to use this class <code>header-dark</code> with <code>main-header</code>
								</div>
							</td>
							<td>
<div class="h--200 overflow-hidden overflow-scroll-auto p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="main-header header-shadow primary-header header-dark"&gt;
	&lt;div class="container"&gt;

		&lt;div class="main-header-container"&gt;

			&lt;div class="logo" data-mobile-logo="assets/images/logo/logo-dark.png" data-sticky-logo="assets/images/logo/logo-dark.png"&gt;
				&lt;a href="index.php"&gt;&lt;img src="assets/images/logo/logo-dark.png" alt="logo"/&gt;&lt;/a&gt;
			&lt;/div&gt; &lt;!-- /LOGO --&gt;

			&lt;div class="burger-menu"&gt;
				&lt;div class="line-menu line-half first-line"&gt;&lt;/div&gt;
				&lt;div class="line-menu"&gt;&lt;/div&gt;
				&lt;div class="line-menu line-half last-line"&gt;&lt;/div&gt;
			&lt;/div&gt; &lt;!-- /BURGER MENU --&gt;

			&lt;nav class="main-menu menu-caret separate-line submenu-top-border submenu-scale"&gt;
				&lt;ul&gt;
					&lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt;
						&lt;ul&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;About&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Services&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Contact&lt;/a&gt;&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/nav&gt; &lt;!-- NAVIGATION MENU --&gt;

		&lt;/div&gt; &lt;!-- /HEADER CONTAINER --&gt;

	&lt;/div&gt; &lt;!-- /CONTAINER --&gt;
&lt;/div&gt; &lt;!-- /HEADER --&gt;</p></pre>
				</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Default
								</div>
							</td>
							<td>
								<div class="w--250">
									<strong>Transparent</strong> <br>
									use this class <code>header-transparent</code> with <code>main-header</code> <br>
									<strong>Overlay</strong> <br>
									use this class <code>header-opacity</code> with <code>main-header</code>
								</div>
							</td>
							<td>
<div class="h--200 overflow-hidden overflow-scroll-auto p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="main-header header-shadow primary-header header-transparent"&gt;
	&lt;div class="container"&gt;

		&lt;div class="main-header-container"&gt;

			&lt;div class="logo" data-mobile-logo="assets/images/logo/logo-dark.png" data-sticky-logo="assets/images/logo/logo-dark.png"&gt;
				&lt;a href="index.php"&gt;&lt;img src="assets/images/logo/logo-dark.png" alt="logo"/&gt;&lt;/a&gt;
			&lt;/div&gt; &lt;!-- /LOGO --&gt;

			&lt;div class="burger-menu"&gt;
				&lt;div class="line-menu line-half first-line"&gt;&lt;/div&gt;
				&lt;div class="line-menu"&gt;&lt;/div&gt;
				&lt;div class="line-menu line-half last-line"&gt;&lt;/div&gt;
			&lt;/div&gt; &lt;!-- /BURGER MENU --&gt;

			&lt;nav class="main-menu menu-caret submenu-top-border submenu-scale"&gt;
				&lt;ul&gt;
					&lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt;
						&lt;ul&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;About&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Services&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Contact&lt;/a&gt;&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/nav&gt; &lt;!-- NAVIGATION MENU --&gt;

		&lt;/div&gt; &lt;!-- /HEADER CONTAINER --&gt;

	&lt;/div&gt; &lt;!-- /CONTAINER --&gt;
&lt;/div&gt; &lt;!-- /HEADER --&gt;</p></pre>
				</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Logo Center
								</div>
							</td>
							<td>
								<div class="w--250">
									All structure will be same as default header above examples.
									you only need to made two <code>&lt;ul&gt;</code>
									You can use any design form default header and make in two parts <code>&lt;ul&gt;</code>
								</div>
							</td>
							<td>
<div class="h--200 overflow-hidden overflow-scroll-auto p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="main-header header-shadow primary-header"&gt;
	&lt;div class="container"&gt;

		&lt;div class="main-header-container"&gt;

			&lt;div class="logo" data-mobile-logo="assets/images/logo/logo-dark.png" data-sticky-logo="assets/images/logo/logo-dark.png"&gt;
				&lt;a href="index.php"&gt;&lt;img src="assets/images/logo/logo-dark.png" alt="logo"/&gt;&lt;/a&gt;
			&lt;/div&gt; &lt;!-- /LOGO --&gt;

			&lt;div class="burger-menu"&gt;
				&lt;div class="line-menu line-half first-line"&gt;&lt;/div&gt;
				&lt;div class="line-menu"&gt;&lt;/div&gt;
				&lt;div class="line-menu line-half last-line"&gt;&lt;/div&gt;
			&lt;/div&gt; &lt;!-- /BURGER MENU --&gt;

			&lt;nav class="main-menu menu-caret submenu-top-border submenu-scale"&gt;
				&lt;ul&gt;
					&lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt;
						&lt;ul&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;About&lt;/a&gt;&lt;/li&gt;
				&lt;/ul&gt;
				&lt;ul&gt;
					&lt;li&gt;&lt;a href="#"&gt;Services&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Contact&lt;/a&gt;&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/nav&gt; &lt;!-- NAVIGATION MENU --&gt;

		&lt;/div&gt; &lt;!-- /HEADER CONTAINER --&gt;

	&lt;/div&gt; &lt;!-- /CONTAINER --&gt;
&lt;/div&gt; &lt;!-- /HEADER --&gt;</p></pre>
				</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Logo Top
								</div>
							</td>
							<td>
								<div class="w--250">
									All structure will be same as default header above examples.
									only use this class <code>center-menu-2</code> with <code>main-header</code>
								</div>
							</td>
							<td>
<div class="h--200 overflow-hidden overflow-scroll-auto p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="main-header header-shadow primary-header center-menu-2"&gt;
	&lt;div class="container"&gt;

		&lt;div class="main-header-container"&gt;

			&lt;div class="logo" data-mobile-logo="assets/images/logo/logo-dark.png" data-sticky-logo="assets/images/logo/logo-dark.png"&gt;
				&lt;a href="index.php"&gt;&lt;img src="assets/images/logo/logo-dark.png" alt="logo"/&gt;&lt;/a&gt;
			&lt;/div&gt; &lt;!-- /LOGO --&gt;

			&lt;div class="burger-menu"&gt;
				&lt;div class="line-menu line-half first-line"&gt;&lt;/div&gt;
				&lt;div class="line-menu"&gt;&lt;/div&gt;
				&lt;div class="line-menu line-half last-line"&gt;&lt;/div&gt;
			&lt;/div&gt; &lt;!-- /BURGER MENU --&gt;

			&lt;nav class="main-menu menu-caret submenu-top-border submenu-scale"&gt;
				&lt;ul&gt;
					&lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt;
						&lt;ul&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;About&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Services&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Contact&lt;/a&gt;&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/nav&gt; &lt;!-- NAVIGATION MENU --&gt;

		&lt;/div&gt; &lt;!-- /HEADER CONTAINER --&gt;

	&lt;/div&gt; &lt;!-- /CONTAINER --&gt;
&lt;/div&gt; &lt;!-- /HEADER --&gt;</p></pre>
				</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Mega Menu
								</div>
							</td>
							<td>
								<div class="w--250">
									All structure will be same as default header above examples.
									You can see the html list item structure which is very simple
								</div>
							</td>
							<td>
<div class="h--200 overflow-hidden overflow-scroll-auto p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="main-header header-shadow primary-header center-menu-2"&gt;
	&lt;div class="container"&gt;

		&lt;div class="main-header-container"&gt;

			&lt;div class="logo" data-mobile-logo="assets/images/logo/logo-dark.png" data-sticky-logo="assets/images/logo/logo-dark.png"&gt;
				&lt;a href="index.php"&gt;&lt;img src="assets/images/logo/logo-dark.png" alt="logo"/&gt;&lt;/a&gt;
			&lt;/div&gt; &lt;!-- /LOGO --&gt;

			&lt;div class="burger-menu"&gt;
				&lt;div class="line-menu line-half first-line"&gt;&lt;/div&gt;
				&lt;div class="line-menu"&gt;&lt;/div&gt;
				&lt;div class="line-menu line-half last-line"&gt;&lt;/div&gt;
			&lt;/div&gt; &lt;!-- /BURGER MENU --&gt;

			&lt;nav class="main-menu menu-caret submenu-top-border submenu-scale"&gt;
				&lt;ul&gt;
					&lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt;
						&lt;ul&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/li&gt;
					&lt;li class="mega-menu"&gt;&lt;a href="#"&gt;Portfolio&lt;/a&gt;
						&lt;ul&gt;
							&lt;li&gt;
								&lt;!-- Mega menu container --&gt;
								&lt;div class="mega-menu-container"&gt;
									&lt;div class="row"&gt;
										&lt;!-- Column --&gt;
										&lt;div class="col-md-6 col-lg-3"&gt;
											&lt;div class="mega-menu-box"&gt;
												&lt;h6 class="text-bold-600"&gt;Column Heading&lt;/h6&gt;
												&lt;ul class="mega-menu-list"&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
												&lt;/ul&gt;
											&lt;/div&gt;
										&lt;/div&gt;
										&lt;!-- Column --&gt;
										&lt;div class="col-md-6 col-lg-3"&gt;
											&lt;div class="mega-menu-box"&gt;
												&lt;h6 class="text-bold-600"&gt;Column Heading&lt;/h6&gt;
												&lt;ul class="mega-menu-list"&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
												&lt;/ul&gt;
											&lt;/div&gt;
										&lt;/div&gt;
										&lt;!-- Column --&gt;
										&lt;div class="col-md-6 col-lg-3"&gt;
											&lt;div class="mega-menu-box"&gt;
												&lt;h6 class="text-bold-600"&gt;Column Heading&lt;/h6&gt;
												&lt;ul class="mega-menu-list"&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
												&lt;/ul&gt;
											&lt;/div&gt;
										&lt;/div&gt;
										&lt;!-- Column --&gt;
										&lt;div class="col-md-6 col-lg-3"&gt;
											&lt;div class="mega-menu-box"&gt;
												&lt;h6 class="text-bold-600"&gt;Column Heading&lt;/h6&gt;
												&lt;ul class="mega-menu-list"&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
												&lt;/ul&gt;
											&lt;/div&gt;
										&lt;/div&gt;
									&lt;/div&gt;
								&lt;/div&gt;
							&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;About&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Services&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Contact&lt;/a&gt;&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/nav&gt; &lt;!-- NAVIGATION MENU --&gt;

		&lt;/div&gt; &lt;!-- /HEADER CONTAINER --&gt;

	&lt;/div&gt; &lt;!-- /CONTAINER --&gt;
&lt;/div&gt; &lt;!-- /HEADER --&gt;</p></pre>
				</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Mega Menu Full Width
								</div>
							</td>
							<td>
								<div class="w--250">
									All structure will be same as default and Mega Menu header above examples.
									You only need to add classes <code>main-mega-menu</code> and <code>mega-menu-fullwidth</code> with <code>main-header</code>
								</div>
							</td>
							<td>
<div class="h--200 overflow-hidden overflow-scroll-auto p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="main-header header-shadow primary-header center-menu-2"&gt;
	&lt;div class="container"&gt;

		&lt;div class="main-header-container"&gt;

			&lt;div class="logo" data-mobile-logo="assets/images/logo/logo-dark.png" data-sticky-logo="assets/images/logo/logo-dark.png"&gt;
				&lt;a href="index.php"&gt;&lt;img src="assets/images/logo/logo-dark.png" alt="logo"/&gt;&lt;/a&gt;
			&lt;/div&gt; &lt;!-- /LOGO --&gt;

			&lt;div class="burger-menu"&gt;
				&lt;div class="line-menu line-half first-line"&gt;&lt;/div&gt;
				&lt;div class="line-menu"&gt;&lt;/div&gt;
				&lt;div class="line-menu line-half last-line"&gt;&lt;/div&gt;
			&lt;/div&gt; &lt;!-- /BURGER MENU --&gt;

			&lt;nav class="main-menu menu-caret submenu-top-border submenu-scale"&gt;
				&lt;ul&gt;
					&lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt;
						&lt;ul&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/li&gt;
					&lt;li class="mega-menu"&gt;&lt;a href="#"&gt;Portfolio&lt;/a&gt;
						&lt;ul&gt;
							&lt;li&gt;
								&lt;!-- Mega menu container --&gt;
								&lt;div class="mega-menu-container"&gt;
									&lt;div class="row"&gt;
										&lt;!-- Column --&gt;
										&lt;div class="col-md-6 col-lg-3"&gt;
											&lt;div class="mega-menu-box"&gt;
												&lt;h6 class="text-bold-600"&gt;Column Heading&lt;/h6&gt;
												&lt;ul class="mega-menu-list"&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
												&lt;/ul&gt;
											&lt;/div&gt;
										&lt;/div&gt;
										&lt;!-- Column --&gt;
										&lt;div class="col-md-6 col-lg-3"&gt;
											&lt;div class="mega-menu-box"&gt;
												&lt;h6 class="text-bold-600"&gt;Column Heading&lt;/h6&gt;
												&lt;ul class="mega-menu-list"&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
												&lt;/ul&gt;
											&lt;/div&gt;
										&lt;/div&gt;
										&lt;!-- Column --&gt;
										&lt;div class="col-md-6 col-lg-3"&gt;
											&lt;div class="mega-menu-box"&gt;
												&lt;h6 class="text-bold-600"&gt;Column Heading&lt;/h6&gt;
												&lt;ul class="mega-menu-list"&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
												&lt;/ul&gt;
											&lt;/div&gt;
										&lt;/div&gt;
										&lt;!-- Column --&gt;
										&lt;div class="col-md-6 col-lg-3"&gt;
											&lt;div class="mega-menu-box"&gt;
												&lt;h6 class="text-bold-600"&gt;Column Heading&lt;/h6&gt;
												&lt;ul class="mega-menu-list"&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
													&lt;li&gt;&lt;a href="#"&gt;Link Here&lt;/a&gt;&lt;/li&gt;
												&lt;/ul&gt;
											&lt;/div&gt;
										&lt;/div&gt;
									&lt;/div&gt;
								&lt;/div&gt;
							&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;About&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Services&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Contact&lt;/a&gt;&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/nav&gt; &lt;!-- NAVIGATION MENU --&gt;

		&lt;/div&gt; &lt;!-- /HEADER CONTAINER --&gt;

	&lt;/div&gt; &lt;!-- /CONTAINER --&gt;
&lt;/div&gt; &lt;!-- /HEADER --&gt;</p></pre>
				</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Full Screen Overlay
								</div>
							</td>
							<td>
								<div class="w--250">
									use class <code>main-header-overlay</code> to the main div and use the <code>main-menu-overlay</code> class to the nav tag <br>
									<strong>Background Color</strong>
									use classes <code>header-color-bg</code> <code>primary-header</code> <br>
									<strong>Background Image</strong>
									use classes <code>header-bg-image</code> <code>bg-2</code>
								</div>
							</td>
							<td>
<div class="h--200 overflow-hidden overflow-scroll-auto p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="main-header-overlay primary-header"&gt;
	&lt;div class="container"&gt;

		&lt;div class="main-header-container"&gt;

			&lt;div class="logo" data-mobile-logo="assets/images/logo/logo-dark.png" data-sticky-logo="assets/images/logo/logo-dark.png"&gt;
				&lt;a href="index.php"&gt;&lt;img src="assets/images/logo/logo-dark.png" alt="logo"/&gt;&lt;/a&gt;
			&lt;/div&gt; &lt;!-- /LOGO --&gt;

			&lt;div class="burger-menu"&gt;
				&lt;div class="line-menu line-half first-line"&gt;&lt;/div&gt;
				&lt;div class="line-menu"&gt;&lt;/div&gt;
				&lt;div class="line-menu line-half last-line"&gt;&lt;/div&gt;
			&lt;/div&gt; &lt;!-- /BURGER MENU --&gt;

			&lt;nav class="main-menu-overlay"&gt;
				&lt;ul&gt;
					&lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt;
						&lt;ul&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;About&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Services&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Contact&lt;/a&gt;&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/nav&gt; &lt;!-- NAVIGATION MENU --&gt;

		&lt;/div&gt; &lt;!-- /HEADER CONTAINER --&gt;

	&lt;/div&gt; &lt;!-- /CONTAINER --&gt;
&lt;/div&gt; &lt;!-- /HEADER --&gt;</p></pre>
				</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Full Screen Overlay Center
								</div>
							</td>
							<td>
								<div class="w--250">
									use classes <code>main-header-overlay</code> and <code>overlay-center-menu</code> to the main div and use the <code>main-menu-overlay</code> class to the nav tag <br>
									<strong>Background Color</strong>
									use classes <code>header-color-bg</code> <code>primary-header</code> <br>
									<strong>Background Image</strong>
									use classes <code>header-bg-image</code> <code>bg-2</code>
								</div>
							</td>
							<td>
<div class="h--200 overflow-hidden overflow-scroll-auto p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="main-header-overlay overlay-center-menu primary-header"&gt;
	&lt;div class="container"&gt;

		&lt;div class="main-header-container"&gt;

			&lt;div class="logo" data-mobile-logo="assets/images/logo/logo-dark.png" data-sticky-logo="assets/images/logo/logo-dark.png"&gt;
				&lt;a href="index.php"&gt;&lt;img src="assets/images/logo/logo-dark.png" alt="logo"/&gt;&lt;/a&gt;
			&lt;/div&gt; &lt;!-- /LOGO --&gt;

			&lt;div class="burger-menu"&gt;
				&lt;div class="line-menu line-half first-line"&gt;&lt;/div&gt;
				&lt;div class="line-menu"&gt;&lt;/div&gt;
				&lt;div class="line-menu line-half last-line"&gt;&lt;/div&gt;
			&lt;/div&gt; &lt;!-- /BURGER MENU --&gt;

			&lt;nav class="main-menu-overlay"&gt;
				&lt;ul&gt;
					&lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt;
						&lt;ul&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;About&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Services&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Contact&lt;/a&gt;&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/nav&gt; &lt;!-- NAVIGATION MENU --&gt;

		&lt;/div&gt; &lt;!-- /HEADER CONTAINER --&gt;

	&lt;/div&gt; &lt;!-- /CONTAINER --&gt;
&lt;/div&gt; &lt;!-- /HEADER --&gt;</p></pre>
				</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Slide Menu
								</div>
							</td>
							<td>
								<div class="w--250">
									All structure will be same as Full Screen Overlay only use class <code>menu-slide</code> to the main div
								</div>
							</td>
							<td>
<div class="h--200 overflow-hidden overflow-scroll-auto p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="main-header-overlay primary-header menu-slide"&gt;
	&lt;div class="container"&gt;

		&lt;div class="main-header-container"&gt;

			&lt;div class="logo" data-mobile-logo="assets/images/logo/logo-dark.png" data-sticky-logo="assets/images/logo/logo-dark.png"&gt;
				&lt;a href="index.php"&gt;&lt;img src="assets/images/logo/logo-dark.png" alt="logo"/&gt;&lt;/a&gt;
			&lt;/div&gt; &lt;!-- /LOGO --&gt;

			&lt;div class="burger-menu"&gt;
				&lt;div class="line-menu line-half first-line"&gt;&lt;/div&gt;
				&lt;div class="line-menu"&gt;&lt;/div&gt;
				&lt;div class="line-menu line-half last-line"&gt;&lt;/div&gt;
			&lt;/div&gt; &lt;!-- /BURGER MENU --&gt;

			&lt;nav class="main-menu-overlay"&gt;
				&lt;ul&gt;
					&lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt;
						&lt;ul&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;About&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Services&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#"&gt;Contact&lt;/a&gt;&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/nav&gt; &lt;!-- NAVIGATION MENU --&gt;

		&lt;/div&gt; &lt;!-- /HEADER CONTAINER --&gt;

	&lt;/div&gt; &lt;!-- /CONTAINER --&gt;
&lt;/div&gt; &lt;!-- /HEADER --&gt;</p></pre>
				</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->
	
	<section class="pt-s5 pb-s5" id="portfolio">
		<div class="container">
			<h3>Portfolio</h3><hr>
			<p>You can set column side using bootstrap column classes</p>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;ul class="nav nav-pills sort-source d-flex justify-content-start mb-s3" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}"&gt;
	&lt;li data-option-value="*" class="active"&gt;
		&lt;a class="btn bg-none text-uppercase text-size-s1 text-bold-600 text-dark text-white--active bg-primary--active rounded-0 mb-s2 mr-s3 hover-buzz-out active" href="#"&gt;All&lt;/a&gt;
	&lt;/li&gt;
	&lt;li data-option-value=".design"&gt;
		&lt;a class="btn bg-none text-uppercase text-size-s1 text-bold-600 text-dark text-white--active bg-primary--active rounded-0 mb-s2 mr-s3 hover-buzz-out" href="#"&gt;Design&lt;/a&gt;
	&lt;/li&gt;
	&lt;li data-option-value=".branding"&gt;
		&lt;a class="btn bg-none text-uppercase text-size-s1 text-bold-600 text-dark text-white--active bg-primary--active rounded-0 mb-s2 mr-s3 hover-buzz-out" href="#"&gt;Branding&lt;/a&gt;
	&lt;/li&gt;
	&lt;li data-option-value=".studio"&gt;
		&lt;a class="btn bg-none text-uppercase text-size-s1 text-bold-600 text-dark text-white--active bg-primary--active rounded-0 mb-s2 mr-s3 hover-buzz-out" href="#"&gt;Studio&lt;/a&gt;
	&lt;/li&gt;
	&lt;li data-option-value=".photography"&gt;
		&lt;a class="btn bg-none text-uppercase text-size-s1 text-bold-600 text-dark text-white--active bg-primary--active rounded-0 mb-s2 mr-s3 hover-buzz-out" href="#"&gt;Photography&lt;/a&gt;
	&lt;/li&gt;
&lt;/ul&gt;

&lt;ul class="row sort-destination" data-sort-id="portfolio"&gt;
	&lt;li class="col-lg-4 col-md-4 isotope-item design"&gt;
		Place your content
	&lt;/li&gt;
	&lt;li class="col-lg-4 col-md-4 isotope-item branding photography"&gt;
		Place your content
	&lt;/li&gt;
	&lt;li class="col-lg-4 col-md-4 isotope-item studio"&gt;
		Place your content
	&lt;/li&gt;
	&lt;li class="col-lg-4 col-md-4 isotope-item design"&gt;
		Place your content
	&lt;/li&gt;
	&lt;li class="col-lg-4 col-md-4 isotope-item branding photography"&gt;
		Place your content
	&lt;/li&gt;
	&lt;li class="col-lg-4 col-md-4 isotope-item studio"&gt;
		Place your content
	&lt;/li&gt;
	&lt;li class="col-lg-4 col-md-4 isotope-item design"&gt;
		Place your content
	&lt;/li&gt;
	&lt;li class="col-lg-4 col-md-4 isotope-item branding photography"&gt;
		Place your content
	&lt;/li&gt;
	&lt;li class="col-lg-4 col-md-4 isotope-item studio"&gt;
		Place your content
	&lt;/li&gt;
&lt;/ul&gt; &lt;!-- /ROW --&gt;</p></pre>
</div>
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->
	
	<section class="pt-s5 pb-s5">
		<div class="container">
			<h3>Portfolio Content</h3><hr>

			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Style</th>
							<th>Example Code</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<div class="w--100">
									Classic 1
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="animate-parent--hover mb-s3 box-shadow-v1-s3 box-shadow-v2-s4--hover"&gt;
	&lt;div class="bg-white"&gt;
		&lt;div class="hero-section-parent"&gt;
			&lt;a href="#"&gt;&lt;img class="img-responsive" src="assets/images/portfolio/1-720x435.jpg" alt="Portfolio"/&gt;&lt;/a&gt;
			&lt;div class="hero-section-container-tr w-100 h-100 d-flex justify-content-center align-items-center p-s3 animate-bounceIn-child--hover"&gt;
				&lt;ul class="social list-inline text-center text-size-s1"&gt;
					&lt;li class="list-inline-item"&gt;
						&lt;a href="assets/images/portfolio/1-720x435.jpg" data-fancybox class="bg-white bg-primary--hover text-white--hover text-dark rounded-circle"&gt;&lt;i class="fa fa-eye"&gt;&lt;/i&gt;&lt;/a&gt;
					&lt;/li&gt;
					&lt;li class="list-inline-item"&gt;
						&lt;a href="#" class="bg-white bg-primary--hover text-white--hover text-dark rounded-circle"&gt;&lt;i class="fa fa-link"&gt;&lt;/i&gt;&lt;/a&gt;
					&lt;/li&gt;
					&lt;li class="list-inline-item"&gt;
						&lt;a href="#" class="bg-white bg-primary--hover text-white--hover text-dark rounded-circle"&gt;&lt;i class="fa fa-share"&gt;&lt;/i&gt;&lt;/a&gt;
					&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class="p-s3 bs-solid bc-light bw-s1"&gt;
			&lt;h2 class="text-size-18 text-bold-600"&gt;&lt;a class="text-dark text-primary--hover" href="#"&gt;Portfolio 1&lt;/a&gt;&lt;/h2&gt;
			&lt;ul class="list-inline text-size-12"&gt;
				&lt;li class="list-inline-item mr-s2"&gt;
					&lt;a href="#" class="text-dark text-primary--hover"&gt;Brand&lt;/a&gt;
				&lt;/li&gt;
				&lt;li class="list-inline-item mr-s2 text-size-10"&gt;/&lt;/li&gt;
				&lt;li class="list-inline-item mr-s2"&gt;
					&lt;a href="#" class="text-dark text-primary--hover"&gt;Media&lt;/a&gt;
				&lt;/li&gt;
				&lt;li class="list-inline-item mr-s2 text-size-10"&gt;/&lt;/li&gt;
				&lt;li class="list-inline-item"&gt;
					&lt;a href="#" class="text-dark text-primary--hover"&gt;Logo&lt;/a&gt;
				&lt;/li&gt;
			&lt;/ul&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Classic 2
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="bg-dark bg-parent--hover mb-s3 text-parent--hover bc-parent--hover"&gt;
	&lt;div class="pt-s3 pl-s3 pr-s3 bg-primary-child"&gt;
		&lt;a href="#"&gt;&lt;img class="img-responsive box-shadow-v3-s2" src="assets/images/portfolio/1-720x435.jpg" alt="Portfolio"/&gt;&lt;/a&gt;
	&lt;/div&gt;
	&lt;div class="p-s3 bg-primary-child"&gt;
		&lt;h2 class="text-size-18 text-bold-600"&gt;&lt;a class="text-white" href="#"&gt;Portfolio 1&lt;/a&gt;&lt;/h2&gt;
		&lt;ul class="list-inline text-size-12 text-v5-white mt-s1 mb-s1"&gt;
			&lt;li class="list-inline-item mr-s2"&gt;
				&lt;a href="#" class="text-v5-white text-white--hover"&gt;Brand&lt;/a&gt;
			&lt;/li&gt;
			&lt;li class="list-inline-item mr-s2 text-size-10"&gt;/&lt;/li&gt;
			&lt;li class="list-inline-item mr-s2"&gt;
				&lt;a href="#" class="text-v5-white text-white--hover"&gt;Media&lt;/a&gt;
			&lt;/li&gt;
			&lt;li class="list-inline-item mr-s2 text-size-10"&gt;/&lt;/li&gt;
			&lt;li class="list-inline-item"&gt;
				&lt;a href="#" class="text-v5-white text-white--hover"&gt;Logo&lt;/a&gt;
			&lt;/li&gt;
		&lt;/ul&gt;
		&lt;ul class="d-inline-block text-size-12 text-v5-white"&gt;
			&lt;li class="list-inline-item pr-s1"&gt;
				&lt;a href="assets/images/portfolio/1-720x435.jpg" data-fancybox class="text-v5-white text-white--hover"&gt;&lt;i class="fa fa-eye"&gt;&lt;/i&gt;&lt;/a&gt;
			&lt;/li&gt;
			&lt;li class="list-inline-item pr-s1"&gt;
				&lt;a href="#" class="text-v5-white text-white--hover"&gt;&lt;i class="fa fa-link"&gt;&lt;/i&gt;&lt;/a&gt;
			&lt;/li&gt;
			&lt;li class="list-inline-item"&gt;
				&lt;a href="#" class="text-v5-white text-white--hover"&gt;&lt;i class="fa fa-share"&gt;&lt;/i&gt;&lt;/a&gt;
			&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Classic 3
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="mt-s2 mb-s2"&gt;
	&lt;a href="#"&gt;&lt;img class="img-responsive" src="assets/images/portfolio/1-720x435.jpg" alt="Portfolio"/&gt;&lt;/a&gt;
	&lt;div class="bg-white p-s3 m-s3 mt--s4 position-relative z-index-10 text-center box-shadow-v1-s5"&gt;
		&lt;h2 class="text-size-18 text-bold-600"&gt;&lt;a class="text-dark text-primary--hover" href="#"&gt;Portfolio 1&lt;/a&gt;&lt;/h2&gt;
		&lt;ul class="list-inline text-size-12 text-v5-dark"&gt;
			&lt;li class="list-inline-item mr-s2"&gt;
				&lt;a href="#" class="text-v7-dark text-primary--hover"&gt;Brand&lt;/a&gt;
			&lt;/li&gt;
			&lt;li class="list-inline-item mr-s2 text-size-10"&gt;/&lt;/li&gt;
			&lt;li class="list-inline-item mr-s2"&gt;
				&lt;a href="#" class="text-v7-dark text-primary--hover"&gt;Media&lt;/a&gt;
			&lt;/li&gt;
			&lt;li class="list-inline-item mr-s2 text-size-10"&gt;/&lt;/li&gt;
			&lt;li class="list-inline-item"&gt;
				&lt;a class="text-v7-dark text-primary--hover" href="#"&gt;Logo&lt;/a&gt;
			&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Grid 1
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="animate-parent--hover mb-s3 hero-section-parent"&gt;
	&lt;img class="img-responsive" src="assets/images/portfolio/1-720x435.jpg" alt="Portfolio"/&gt;
	&lt;div class="hero-section-container-tl bg-v7-dark h-100 w-100 d-flex align-items-end justify-content-start p-s3 animate-bounceIn-child--hover"&gt;
		&lt;div&gt;
			&lt;h2 class="text-size-18 text-bold-600"&gt;&lt;a class="text-white" href="#"&gt;Portfolio 1&lt;/a&gt;&lt;/h2&gt;
			&lt;div class="hero-section-container-tr p-s3"&gt;
				&lt;ul class="social list-inline text-center text-size-s1 mb-s2"&gt;
					&lt;li class="list-inline-item"&gt;
						&lt;a href="assets/images/portfolio/1-720x435.jpg" data-fancybox class="bg-primary bg-white--hover text-primary--hover text-white rounded-circle"&gt;&lt;i class="fa fa-eye"&gt;&lt;/i&gt;&lt;/a&gt;
					&lt;/li&gt;
					&lt;li class="list-inline-item"&gt;
						&lt;a href="#" class="bg-primary bg-white--hover text-primary--hover text-white rounded-circle"&gt;&lt;i class="fa fa-link"&gt;&lt;/i&gt;&lt;/a&gt;
					&lt;/li&gt;
					&lt;li class="list-inline-item"&gt;
						&lt;a href="#" class="bg-primary bg-white--hover text-primary--hover text-white rounded-circle"&gt;&lt;i class="fa fa-share"&gt;&lt;/i&gt;&lt;/a&gt;
					&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/div&gt;
			&lt;ul class="d-inline-block text-size-12 text-white"&gt;
				&lt;li class="list-inline-item mr-s2"&gt;
					&lt;a href="#" class="text-white text-underline--hover"&gt;Brand&lt;/a&gt;
				&lt;/li&gt;
				&lt;li class="list-inline-item mr-s2 text-size-10"&gt;/&lt;/li&gt;
				&lt;li class="list-inline-item mr-s2"&gt;
					&lt;a href="#" class="text-white text-underline--hover"&gt;Media&lt;/a&gt;
				&lt;/li&gt;
				&lt;li class="list-inline-item mr-s2 text-size-10"&gt;/&lt;/li&gt;
				&lt;li class="list-inline-item"&gt;
					&lt;a href="#" class="text-white text-underline--hover"&gt;Logo&lt;/a&gt;
				&lt;/li&gt;
			&lt;/ul&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Grid 2
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="animate-parent--hover mb-s3 hero-section-parent box-shadow-v1-s3--hover"&gt;
	&lt;img class="img-responsive" src="assets/images/portfolio/1-720x435.jpg" alt="Portfolio"/&gt;
	&lt;div class="hero-section-container-tl bg-white h-100 w-100 d-flex align-items-center justify-content-center p-s3 text-center animate-jello-child--hover"&gt;
		&lt;div&gt;
			&lt;h2 class="text-size-18 text-bold-600"&gt;&lt;a class="text-dark text-underline--hover" href="#"&gt;Portfolio 1&lt;/a&gt;&lt;/h2&gt;
			&lt;ul class="d-inline-block text-size-12"&gt;
				&lt;li class="list-inline-item mr-s2"&gt;
					&lt;a href="#" class="text-primary text-underline--hover"&gt;Brand&lt;/a&gt;
				&lt;/li&gt;
				&lt;li class="list-inline-item mr-s2 text-size-10"&gt;/&lt;/li&gt;
				&lt;li class="list-inline-item mr-s2"&gt;
					&lt;a href="#" class="text-primary text-underline--hover"&gt;Media&lt;/a&gt;
				&lt;/li&gt;
				&lt;li class="list-inline-item mr-s2 text-size-10"&gt;/&lt;/li&gt;
				&lt;li class="list-inline-item"&gt;
					&lt;a href="#" class="text-primary text-underline--hover"&gt;Logo&lt;/a&gt;
				&lt;/li&gt;
			&lt;/ul&gt;
			&lt;ul class="social list-inline text-center text-size-s1 mt-12"&gt;
				&lt;li class="list-inline-item"&gt;
					&lt;a href="assets/images/portfolio/1-720x435.jpg" data-fancybox="portfolio2" class="bg-primary--hover text-white--hover text-dark rounded-circle"&gt;&lt;i class="fa fa-eye"&gt;&lt;/i&gt;&lt;/a&gt;
				&lt;/li&gt;
				&lt;li class="list-inline-item"&gt;
					&lt;a href="#" class="bg-primary--hover text-white--hover text-dark rounded-circle"&gt;&lt;i class="fa fa-link"&gt;&lt;/i&gt;&lt;/a&gt;
				&lt;/li&gt;
				&lt;li class="list-inline-item"&gt;
					&lt;a href="#" class="bg-primary--hover text-white--hover text-dark rounded-circle"&gt;&lt;i class="fa fa-share"&gt;&lt;/i&gt;&lt;/a&gt;
				&lt;/li&gt;
			&lt;/ul&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->
	
	<section class="pt-s5 pb-s5" id="shop">
		<div class="container">
			<h3>Shop Content</h3><hr>

			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Style</th>
							<th>Example Code</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<div class="w--100">
									Classic 1
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="mb-s3 bs-solid bc-v1-dark bw-s1 box-shadow-v1-s4--hover img-hover-v1"&gt;
	&lt;div class="position-relative"&gt;
		&lt;div class="hero-section-parent"&gt;
			&lt;figure class="overflow-hidden m-0"&gt;
				&lt;img class="img-responsive" src="assets/images/shop/shop-1-f.jpg" alt="Shop"&gt;
			&lt;/figure&gt;
			&lt;span class="hero-section-container-bl m-s3 bg-primary text-white text-size-s2 w--70 h--70 d-flex justify-content-center align-items-center rounded-circle box-shadow-v2-s2"&gt;&lt;span class="text-size-15 mr-3"&gt;$&lt;/span&gt;140&lt;/span&gt;
		&lt;/div&gt;
		&lt;div class="p-s3 bg-white"&gt;
			&lt;div class="star-rating star-rating-s1 text-primary mb-s1" title="4 Rating"&gt;&lt;span class="w-80"&gt;&lt;/span&gt;&lt;/div&gt;
			&lt;h2 class="text-size-20 text-bold-600 text-capitalize m-0"&gt;&lt;a class="text-dark text-primary--hover" href="#"&gt;ray ban glasses&lt;/a&gt;&lt;/h2&gt;
			&lt;div class="d-flex"&gt;
				&lt;a class="text-size-s1 mr-s2 text-dark text-primary--hover mt-s2" href="#"&gt;&lt;i class="icon-basket mr-s1"&gt;&lt;/i&gt; Add to cart&lt;/a&gt;
				&lt;a class="text-size-s1 text-dark text-primary--hover mt-s2" href="#"&gt;&lt;i class="icon-list mr-s1"&gt;&lt;/i&gt; Details&lt;/a&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Classic 2
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="mb-s3 bs-solid bc-light bw-s1 box-shadow-v1-s4--hover img-hover-v1 bg-parent--hover"&gt;
	&lt;div class="position-relative"&gt;
		&lt;div class="hero-section-parent"&gt;
			&lt;figure class="overflow-hidden m-0"&gt;
				&lt;img class="img-responsive" src="assets/images/shop/shop-1-f.jpg" alt="Shop"&gt;
			&lt;/figure&gt;
			&lt;span class="hero-section-container-tl m-s3 bg-primary text-white w--50 h--50 d-flex justify-content-center align-items-center rounded-circle box-shadow-v2-s2"&gt;&lt;span class="text-size-15 mr-3"&gt;$&lt;/span&gt;140&lt;/span&gt;
		&lt;/div&gt;
		&lt;div class="p-s3 bg-light bg-white-child"&gt;
			&lt;div class="star-rating star-rating-s1 text-primary mb-s1" title="4 Rating"&gt;&lt;span class="w-80"&gt;&lt;/span&gt;&lt;/div&gt;
			&lt;h2 class="text-size-20 text-bold-600 text-capitalize"&gt;&lt;a class="text-dark text-primary--hover" href="#"&gt;ray ban glasses&lt;/a&gt;&lt;/h2&gt;
			&lt;p class="m-0"&gt;Morbi sodales lacinia magna eget ornare vivamus.&lt;/p&gt;
			&lt;a class="btn btn-xs bg-primary text-white mt-s2 rounded-0" href="#"&gt;&lt;i class="icon-basket mr-s1"&gt;&lt;/i&gt; Add to cart&lt;/a&gt;
			&lt;a class="btn btn-xs bg-dark text-white mt-s2 rounded-0" href="#"&gt;&lt;i class="icon-list mr-s1"&gt;&lt;/i&gt; Details&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Grid 1
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="hero-section-parent animate-parent--hover mb-s3 box-shadow-v1-s3--hover"&gt;
	&lt;img class="img-responsive" src="assets/images/shop/shop-1-f.jpg" alt="Shop"&gt;
	&lt;section class="hero-section-container-tl bg-v9-white h-100 w-100 d-flex align-items-center justify-content-center animate-fadeIn-child--hover text-center"&gt;
		&lt;div class="pt-s3 pb-s3 pl-s1 pr-s1"&gt;
			&lt;div class="star-rating star-rating-s2 text-primary pb-s2 m-auto" title="4 Rating"&gt;&lt;span class="w-80"&gt;&lt;/span&gt;&lt;/div&gt;
			&lt;h2 class="text-size-20 text-bold-600 text-capitalize"&gt;&lt;a class="text-dark text-primary--hover" href="#"&gt;ray ban glasses&lt;/a&gt;&lt;/h2&gt;
			&lt;div class="mt-s2 mb-s2"&gt;
				&lt;span class="text-primary text-size-s2 text-bold-600"&gt;$140&lt;/span&gt;
			&lt;/div&gt;
			&lt;a class="text-size-s1 mr-s2 text-bold-600 text-dark text-primary--hover mt-s2" href="#"&gt;&lt;i class="icon-basket mr-s1"&gt;&lt;/i&gt; Add to cart&lt;/a&gt;
			&lt;a class="text-size-s1 mr-s2 text-bold-600 text-dark text-primary--hover mt-s2" href="#"&gt;&lt;i class="icon-list mr-s1"&gt;&lt;/i&gt; Details&lt;/a&gt;
		&lt;/div&gt;
	&lt;/section&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Grid 2
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="hero-section-parent animate-parent--hover mb-s3"&gt;
	&lt;img class="img-responsive" src="assets/images/shop/shop-1-f.jpg" alt="Shop"&gt;
	&lt;section class="hero-section-container-tl bg-v9-white h-100 w-100 d-flex align-items-center justify-content-center animate-bounceOut-child--hover text-center bs-solid bc-light bw-s1"&gt;
		&lt;div class="pt-s3 pb-s3 pl-s1 pr-s1"&gt;
			&lt;div class="star-rating star-rating-s2 text-primary pb-s2 m-auto" title="4 Rating"&gt;&lt;span class="w-80"&gt;&lt;/span&gt;&lt;/div&gt;
			&lt;h2 class="text-size-20 text-bold-600 text-capitalize"&gt;&lt;a class="text-dark text-primary--hover" href="#"&gt;ray ban glasses&lt;/a&gt;&lt;/h2&gt;
			&lt;div class="mt-s2 mb-s2"&gt;
				&lt;span class="text-primary text-size-s2 text-bold-600"&gt;$140&lt;/span&gt;
			&lt;/div&gt;
			&lt;a class="text-size-s1 mr-s2 text-bold-600 text-dark text-primary--hover mt-s2" href="#"&gt;&lt;i class="icon-basket mr-s1"&gt;&lt;/i&gt; Add to cart&lt;/a&gt;
			&lt;a class="text-size-s1 mr-s2 text-bold-600 text-dark text-primary--hover mt-s2" href="#"&gt;&lt;i class="icon-list mr-s1"&gt;&lt;/i&gt; Details&lt;/a&gt;
		&lt;/div&gt;
	&lt;/section&gt;
	&lt;section class="hero-section-container-bl w-100 d-flex align-items-center justify-content-center animate-bounceIn-child--hover text-center"&gt;
		&lt;div class="p-s3"&gt;
			&lt;a class="btn btn-xs bg-primary text-white mt-s2 rounded-0" href="#"&gt;&lt;i class="icon-basket mr-s1"&gt;&lt;/i&gt; Add to cart&lt;/a&gt;
		&lt;/div&gt;
	&lt;/section&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->
	
	<section class="pt-s5 pb-s5" id="blog">
		<div class="container">
			<h3>Blog Content</h3><hr>

			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Style</th>
							<th>Example Code</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<div class="w--100">
									Classic 1
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="mt-s2 mb-s2"&gt;
	&lt;a href="#"&gt;&lt;img class="img-responsive" src="assets/images/news/1-720x435.jpg" alt="News"&gt;&lt;/a&gt;
	&lt;div class="pt-s3"&gt;
		&lt;ul class="list-inline text-size-s1 text-bold-600 mb-6"&gt;
			&lt;li class="list-inline-item"&gt;
				May 10, 2018
			&lt;/li&gt;
		&lt;/ul&gt;
		&lt;h2 class="text-size-20 text-bold-600 text-capitalize mb-12"&gt;&lt;a class="text-dark text-primary--hover" href="#"&gt;Phasellus porta eunisi&lt;/a&gt;&lt;/h2&gt;
		&lt;p class="mb-s1"&gt;Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan...&lt;/p&gt;
		&lt;div class="mt-12"&gt;
			&lt;a class="text-size-12 text-bold-600 text-dark text-primary--hover" href="#"&gt;Read More &lt;i class="fa fa-long-arrow-alt-right ml-5"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Classic 2
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="mt-s2 mb-s2 bg-white box-shadow-v1-s3 box-shadow-v1-s5--hover"&gt;
	&lt;a href="#"&gt;&lt;img class="img-responsive" src="assets/images/news/1-720x435.jpg" alt="News"&gt;&lt;/a&gt;
	&lt;div class="p-s3"&gt;
		&lt;ul class="list-inline text-size-s1 text-bold-600 mb-6"&gt;
			&lt;li class="list-inline-item"&gt;
				by John Doe
			&lt;/li&gt;
			&lt;li class="list-inline-item text-size-10"&gt;|&lt;/li&gt;
			&lt;li class="list-inline-item"&gt;
				May 10, 2018
			&lt;/li&gt;
		&lt;/ul&gt;
		&lt;h2 class="text-size-20 text-bold-600 text-capitalize mb-12"&gt;&lt;a class="text-dark text-primary--hover" href="#"&gt;Phasellus porta eunisi&lt;/a&gt;&lt;/h2&gt;
		&lt;p class="mb-s1"&gt;Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan...&lt;/p&gt;
		&lt;div class="mt-20"&gt;
			&lt;a class="btn bg-none text-dark text-bold-600 text-size-12 rounded-0 bs-solid bc-dark bw-s2 bg-dark--hover text-white--hover box-shadow-v1-s3--hover pt-4 pb-4 pl-12 pr-12" href="#"&gt;Read More &lt;i class="fa fa-long-arrow-alt-right ml-5"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Classic 3
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="mt-s3 mb-s3"&gt;
	&lt;a href="#"&gt;&lt;img class="img-responsive" src="assets/images/news/1-720x435.jpg" alt="News"&gt;&lt;/a&gt;
	&lt;div class="pt-s3"&gt;
		&lt;h2 class="text-size-20 text-bold-600 mb-s2 text-capitalize"&gt;&lt;a class="text-dark text-primary--hover" href="#"&gt;Phasellus porta eunisi&lt;/a&gt;&lt;/h2&gt;
		&lt;ul class="list-inline text-size-s1 mb-s2 text-dark"&gt;
			&lt;li class="list-inline-item mr-s2"&gt;
				&lt;strong&gt;By:&lt;/strong&gt; &lt;a href="#" class="text-dark text-primary--hover"&gt;John Doe&lt;/a&gt;
			&lt;/li&gt;
			&lt;li class="list-inline-item mr-s2 text-size-10"&gt;/&lt;/li&gt;
			&lt;li class="list-inline-item mr-s2"&gt;
				&lt;strong&gt;In:&lt;/strong&gt; &lt;a href="#" class="text-dark text-primary--hover"&gt;News&lt;/a&gt;
			&lt;/li&gt;
			&lt;li class="list-inline-item mr-s2 text-size-10"&gt;/&lt;/li&gt;
			&lt;li class="list-inline-item mr-s2"&gt;
				&lt;strong&gt;Posted:&lt;/strong&gt; May 10, 2018
			&lt;/li&gt;
		&lt;/ul&gt;
		&lt;p&gt;Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan...&lt;/p&gt;
		&lt;div&gt;
			&lt;a href="#" class="text-size-s1 text-dark text-primary--hover text-bold-600"&gt;Read More &lt;i class="fa fa-long-arrow-alt-right ml-s1"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Classic 4
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="mt-s3 mb-s3"&gt;
	&lt;a href="#"&gt;&lt;img class="img-responsive" src="assets/images/news/1-720x435.jpg" alt="News"&gt;&lt;/a&gt;
	&lt;div class="pt-s3"&gt;
		&lt;ul class="list-inline text-size-s1 text-bold-600 mb-6"&gt;
			&lt;li class="list-inline-item"&gt;
				May 10, 2018
			&lt;/li&gt;
		&lt;/ul&gt;
		&lt;h2 class="text-size-20 line-height-10 text-bold-600 text-capitalize mb-12"&gt;&lt;a class="text-dark text-primary--hover" href="#"&gt;Vivamus bibendum metus sit amet fermentum maximus quam mi tempor&lt;/a&gt;&lt;/h2&gt;
		&lt;div class="mt-18 d-flex align-items-center bs-solid bc-light bw-s2 bl-0 br-0 bb-0 pt-24"&gt;
			&lt;img class="w--40 rounded-circle box-shadow-v1-s3 bs-solid bc-light bw-s2" src="assets/images/team/auth-1.jpg"&gt;
			&lt;div class="pl-20 text-bold-600 text-size-s1"&gt;
				by John Doe
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Classic 5
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="mt-s3 mb-s3"&gt;
	&lt;a href="#"&gt;&lt;img class="img-responsive" src="assets/images/news/1-720x435.jpg" alt="News"&gt;&lt;/a&gt;
	&lt;div class="bg-white p-s3 m-s3 mt--s5 position-relative z-index-10 box-shadow-v1-s5"&gt;
		&lt;ul class="list-inline text-size-s1 text-bold-600 mb-6"&gt;
			&lt;li class="list-inline-item"&gt;
				by John Doe
			&lt;/li&gt;
			&lt;li class="list-inline-item text-size-10"&gt;|&lt;/li&gt;
			&lt;li class="list-inline-item"&gt;
				&lt;a class="text-v7-dark text-primary--hover" href="#"&gt;News&lt;/a&gt;
			&lt;/li&gt;
		&lt;/ul&gt;
		&lt;h2 class="text-size-16 text-bold-600 text-capitalize"&gt;&lt;a class="text-dark text-primary--hover" href="#"&gt;Phasellus Porta Eunisi&lt;/a&gt;&lt;/h2&gt;
		&lt;ul class="list-inline text-size-s1 text-bold-600 mb-6"&gt;
			&lt;li class="list-inline-item"&gt;
				May 10, 2018
			&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Classic 6
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="mt-s2 mb-s2 bg-white box-shadow-v1-s3"&gt;
	&lt;div class="hero-section-parent"&gt;
		&lt;a href="#"&gt;&lt;img class="img-responsive" src="assets/images/news/1-720x435.jpg" alt="News"&gt;&lt;/a&gt;
		&lt;div class="hero-section-container-tl w-100 h-100 d-flex justify-content-center align-items-center"&gt;
			&lt;a class="text-dark text-size-16 d-flex justify-content-center align-items-center w--70 h--70 bg-v5-white rounded-circle bg-v5-dark--hover text-white--hover" href="#"&gt;
				&lt;i class="fa fa-play"&gt;&lt;/i&gt;
			&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="p-s3"&gt;
		&lt;ul class="list-inline text-size-s1 text-bold-600 mb-6"&gt;
			&lt;li class="list-inline-item"&gt;
				May 10, 2018
			&lt;/li&gt;
		&lt;/ul&gt;
		&lt;h2 class="text-size-20 text-bold-600 mb-0 text-capitalize"&gt;&lt;a class="text-dark text-primary--hover" href="#"&gt;Phasellus porta eunisi&lt;/a&gt;&lt;/h2&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Classic 7
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="mt-s2 mb-s2 bg-light box-shadow-v1-s5--hover"&gt;
	&lt;div class="p-s3"&gt;
		&lt;ul class="list-inline text-size-s1 text-bold-600 mb-6"&gt;
			&lt;li class="list-inline-item"&gt;
				May 10, 2018
			&lt;/li&gt;
		&lt;/ul&gt;
		&lt;h2 class="text-size-20 text-bold-600 mb-0 text-capitalize"&gt;&lt;a class="text-dark text-primary--hover" href="#"&gt;Phasellus porta eunisi&lt;/a&gt;&lt;/h2&gt;
	&lt;/div&gt;
	&lt;div class="hero-section-parent"&gt;
		&lt;a href="#"&gt;&lt;img class="img-responsive" src="assets/images/news/1-720x435.jpg" alt="News"&gt;&lt;/a&gt;
		&lt;div class="hero-section-container-tl w-100 h-100 d-flex justify-content-center align-items-center"&gt;
			&lt;a class="text-dark text-size-16 d-flex justify-content-center align-items-center w--70 h--70 bg-v5-white rounded-circle bg-v5-dark--hover text-white--hover" href="#"&gt;
				&lt;i class="fa fa-play"&gt;&lt;/i&gt;
			&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="p-s3"&gt;
		&lt;p&gt;Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan...&lt;/p&gt;
		&lt;div&gt;
			&lt;a href="#" class="text-size-s1 text-dark text-primary--hover text-bold-600"&gt;Read More &lt;i class="fa fa-long-arrow-alt-right ml-s1"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Classic 8
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="mt-s2 mb-s2 bg-white bg-light--hover box-shadow-v1-s5--hover"&gt;
	&lt;div class="hero-section-parent"&gt;
		&lt;a href="#"&gt;&lt;img class="img-responsive" src="assets/images/news/1-720x435.jpg" alt="News"&gt;&lt;/a&gt;
		&lt;div class="hero-section-container-tl m-s2"&gt;
			&lt;span class="d-block badge bg-dark text-white text-size-s2 text-bold-400 pt-s1 pb-s1 pl-s2 pr-s2 rounded-0 text-uppercase"&gt;04&lt;/span&gt;
			&lt;span class="d-block badge bg-white text-dark text-size-s1 text-bold-400 pt-s1 pb-s1 pl-s2 pr-s2 rounded-0 text-uppercase"&gt;Jun&lt;/span&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="p-s3 bs-solid bc-light bw-s1"&gt;
		&lt;ul class="list-inline text-size-s1 text-bold-600 mb-6"&gt;
			&lt;li class="list-inline-item"&gt;
				&lt;a class="text-v7-dark text-uppercase" href="#"&gt;Magazine&lt;/a&gt;
			&lt;/li&gt;
		&lt;/ul&gt;
		&lt;h2 class="text-size-20 text-bold-600 text-capitalize"&gt;&lt;a class="text-dark text-primary--hover" href="#"&gt;Phasellus Porta Eunisi&lt;/a&gt;&lt;/h2&gt;
		&lt;p&gt;Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan...&lt;/p&gt;
		&lt;div&gt;
			&lt;a class="btn bg-none text-dark text-bold-600 text-size-12 rounded-0 bs-solid bc-dark bw-s2 bg-dark--hover text-white--hover box-shadow-v1-s3--hover pt-4 pb-4 pl-12 pr-12" href="#"&gt;Read More &lt;i class="fa fa-long-arrow-alt-right ml-s1"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Classic 9
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="mt-s2 mb-s2 bg-v5-light"&gt;
	&lt;a href="#"&gt;&lt;img class="img-responsive" src="assets/images/news/1-720x435.jpg" alt="News"&gt;&lt;/a&gt;
	&lt;div&gt;
		&lt;div class="bg-white p-s2 ml-s3 mr-s3 mt--s3 position-relative z-index-10 box-shadow-v1-s5 rounded-s5"&gt;
			&lt;ul class="list-inline text-size-s1 text-center font-italic text-dark"&gt;
				&lt;li class="list-inline-item mr-s2"&gt;
					&lt;strong&gt;By:&lt;/strong&gt; &lt;a href="#" class="text-dark text-primary--hover"&gt;John Doe&lt;/a&gt;
				&lt;/li&gt;
				&lt;li class="list-inline-item mr-s2 text-size-10"&gt;/&lt;/li&gt;
				&lt;li class="list-inline-item mr-s2"&gt;
					&lt;strong&gt;In:&lt;/strong&gt; &lt;a href="#" class="text-dark text-primary--hover"&gt;News&lt;/a&gt;
				&lt;/li&gt;
				&lt;li class="list-inline-item mr-s2 text-size-10"&gt;/&lt;/li&gt;
				&lt;li class="list-inline-item mr-s2"&gt;
					&lt;i class="fas fa-comments"&gt;&lt;/i&gt; &lt;a class="text-dark text-primary--hover" href="#"&gt;12&lt;/a&gt;
				&lt;/li&gt;
			&lt;/ul&gt;
		&lt;/div&gt;
		&lt;div class="p-s3"&gt;
			&lt;h2 class="text-size-20 text-bold-600 text-capitalize"&gt;&lt;a class="text-dark text-primary--hover" href="#"&gt;Phasellus Porta Eunisi&lt;/a&gt;&lt;/h2&gt;
			&lt;p&gt;Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan...&lt;/p&gt;
			&lt;div&gt;
				&lt;a class="btn btn-xs bg-dark text-white bg-primary--hover text-bold-600 text-uppercase text-size-s1 rounded-0" href="#"&gt;Read More&lt;/a&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Grid 1
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="mb-s3 bg-white"&gt;
	&lt;div class="hero-section-parent"&gt;
		&lt;div class="img-hover-v1"&gt;
			&lt;figure class="overflow-hidden m-0"&gt;
				&lt;a href="#"&gt;&lt;img class="img-responsive" src="assets/images/news/1-720x435.jpg" alt="News"&gt;&lt;/a&gt;
				&lt;div class="hero-section-container-tl w-100 h-100 d-flex justify-content-center align-items-center bg-v7-dark p-s3 text-center"&gt;
					&lt;div&gt;
						&lt;div class="d-flex justify-content-center align-items-center w-100 h-100"&gt;
							&lt;a class="text-white text-size-s2 d-flex justify-content-center align-items-center w--70 h--70 bg-primary rounded-circle bg-white--hover text-dark--hover" href="#"&gt;
								&lt;i class="fa fa-play"&gt;&lt;/i&gt;
							&lt;/a&gt;
						&lt;/div&gt;
						&lt;h5 class="text-bold-600 mt-s2 mb text-capitalize"&gt;&lt;a class="text-white" href="#"&gt;Phasellus Porta Eunisi&lt;/a&gt;&lt;/h5&gt;
					&lt;/div&gt;
				&lt;/div&gt;
			&lt;/figure&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Grid 2
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="mt-s2 mb-s2 bg-white"&gt;
	&lt;div class="hero-section-parent"&gt;
		&lt;div class="img-hover-v1"&gt;
			&lt;figure class="overflow-hidden m-0"&gt;
				&lt;img class="img-responsive" src="assets/images/news/1-720x435.jpg" alt="News"&gt;
				&lt;div class="hero-section-container-bl w-100 h-100 d-flex justify-content-start align-items-end p-s3 bg-v7-dark"&gt;
					&lt;div class="hero-section-container-tr p-s3 z-index-10"&gt;
						&lt;div class="d-flex justify-content-center align-items-center w-100 h-100"&gt;
							&lt;a class="text-dark text-size-s1 d-flex justify-content-center align-items-center w--40 h--40 bg-white rounded-circle bg-primary--hover text-white--hover" href="#"&gt;
								&lt;i class="far fa-image"&gt;&lt;/i&gt;
							&lt;/a&gt;
						&lt;/div&gt;
					&lt;/div&gt;
					&lt;div class="pt-s3"&gt;
						&lt;ul class="list-inline text-size-s1 text-bold-600 text-white mb-6"&gt;
							&lt;li class="list-inline-item"&gt;
								May 10, 2018
							&lt;/li&gt;
						&lt;/ul&gt;
						&lt;h2 class="text-size-20 text-bold-600 text-capitalize"&gt;&lt;a class="text-white" href="#"&gt;Phasellus Porta Eunisi&lt;/a&gt;&lt;/h2&gt;
						&lt;ul class="list-inline text-size-s1 text-bold-600 text-white"&gt;
							&lt;li class="list-inline-item"&gt;
								by John Doe
							&lt;/li&gt;
							&lt;li class="list-inline-item text-size-10"&gt;|&lt;/li&gt;
							&lt;li class="list-inline-item"&gt;
								&lt;a class="text-white" href="#"&gt;News&lt;/a&gt;
							&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/div&gt;
				&lt;/div&gt;
			&lt;/figure&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="w--100">
									Grid 3
								</div>
							</td>
							<td>
<div class="p-s3 bg-v1-dark">
<pre><p class="m-0">
&lt;div class="mt-s2 mb-s2 bg-white"&gt;
	&lt;div class="hero-section-parent"&gt;
		&lt;div class="img-hover-v1"&gt;
			&lt;img class="img-responsive" src="assets/images/news/1.jpg" alt="News"&gt;
			&lt;div class="hero-section-container-bl w-100 h-100 d-flex justify-content-start align-items-end p-s3 bg-v7-dark"&gt;
				&lt;div class="hero-section-container-tr w-100 p-s3 z-index-10"&gt;
					&lt;div class="d-flex align-items-center bs-solid bc-v1-light bw-s1 bl-0 br-0 bt-0 pb-10 text-white"&gt;
						&lt;img class="w--30 rounded-circle box-shadow-v1-s3 bs-solid bc-light bw-s2" src="assets/images/team/auth-1.jpg"&gt;
						&lt;div class="pl-14 text-bold-600 text-size-s1"&gt;
							by John Doe
						&lt;/div&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class="pt-s3"&gt;
					&lt;h2 class="text-size-20 text-bold-600 text-capitalize"&gt;&lt;a class="text-white" href="#"&gt;Phasellus porta eunisi&lt;/a&gt;&lt;/h2&gt;
					&lt;ul class="list-inline text-size-s1 text-bold-600 text-white mb-6"&gt;
						&lt;li class="list-inline-item"&gt;
							May 10, 2018
						&lt;/li&gt;
					&lt;/ul&gt;
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</p></pre>
</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->
	
	<section class="pt-s5 pb-s5" id="shortcodes">
		<div class="container">
			<h3>Shortcodes</h3><hr>
			<div class="row mt-s3">
				<ul class="col-md-3">
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-alerts.php"><i class="fa icon-exclamation w--26"></i>Alerts</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-animations.php"><i class="fa icon-magic-wand w--26"></i>Animations</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-animated-headlines.php"><i class="fa icon-pencil w--26"></i>Animated Headlines</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-accordions.php"><i class="fa icon-menu w--26"></i>Accordions</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-buttons.php"><i class="fa icon-link w--26"></i>Buttons</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-badges.php"><i class="fa icon-badge w--26"></i>Badges</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-breadcrumbs.php"><i class="fa icon-options w--26"></i>Breadcrumbs</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-columns.php"><i class="fa icon-grid w--26"></i>Columns</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-carousels.php"><i class="fa icon-equalizer w--26"></i>Carousels</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-clients.php"><i class="fa icon-people w--26"></i>Clients</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-comments.php"><i class="fa icon-bubbles w--26"></i>Comments</a>
					</li>
				</ul>
				<ul class="col-md-3">
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-counters.php"><i class="fa icon-speedometer w--26"></i>Counters</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-content-boxes.php"><i class="fa icon-notebook w--26"></i>Content Boxes</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-card-panels.php"><i class="fa icon-screen-tablet w--26"></i>Card Panels</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-dropcaps.php"><i class="fa icon-emotsmile w--26"></i>Dropcaps</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-forms.php"><i class="fa icon-paper-plane w--26"></i>Forms</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-gallery.php"><i class="fa icon-picture w--26"></i>Gallery</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-hero-section.php"><i class="fa icon-star w--26"></i>Hero Section</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-headings.php"><i class="fa icon-note w--26"></i>Headings</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-hover-effects.php"><i class="fa icon-eye w--26"></i>Hover Effects</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-lists.php"><i class="fa icon-list w--26"></i>Lists</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-modals.php"><i class="fa icon-ghost w--26"></i>Modals</a>
					</li>
				</ul>
				<ul class="col-md-3">
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-news.php"><i class="fa icon-book-open w--26"></i>News</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-news-magazine.php"><i class="fa icon-book-open w--26"></i>News Magazine</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-portfolio.php"><i class="fa icon-briefcase w--26"></i>Portfolio</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-products.php"><i class="fa icon-basket w--26"></i>Products</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-product-lists.php"><i class="fa icon-basket-loaded w--26"></i>Product Lists</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-parallax-background.php"><i class="fa icon-layers w--26"></i>Parallax Background</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-progress-bars.php"><i class="fa icon-chart w--26"></i>Progress Bars</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-pricing-tables.php"><i class="fa icon-umbrella w--26"></i>Pricing Tables</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-paginations.php"><i class="fa icon-share w--26"></i>Paginations</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-ratings.php"><i class="fa icon-energy w--26"></i>Ratings</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-social.php"><i class="fa icon-share w--26"></i>Social</a>
					</li>
				</ul>
				<ul class="col-md-3">
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-tags.php"><i class="fa icon-tag w--26"></i>Tags</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-taglines.php"><i class="fa icon-menu w--26"></i>Taglines</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-testimonials.php"><i class="fa icon-globe w--26"></i>Testimonials</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-teams.php"><i class="fa icon-people w--26"></i>Teams</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-tables.php"><i class="fa icon-grid w--26"></i>Tables</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-tabs-1.php"><i class="fa icon-list w--26"></i>Tabs 1</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-tabs-2.php"><i class="fa icon-list w--26"></i>Tabs 2</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-tabs-3.php"><i class="fa icon-list w--26"></i>Tabs 3</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-tabs-4.php"><i class="fa icon-list w--26"></i>Tabs 4</a>
					</li>
					<li>
						<a class="text-dark" target="_blank" href="../shortcodes-tabs-5.php"><i class="fa icon-list w--26"></i>Tabs 5</a>
					</li>
				</ul>
			</div>
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->
	
	<section class="pt-s5 pb-s5" id="tips">
		<div class="container">
			<h3>Website Optimization Tips</h3><hr>
			<p>A Fast &amp; Optimized Website has several factors which needs to be implemented in order to achieve the desired results. There are several Optimization Techniques available which will definitely affect your Website's Performance in a Positive Way &amp; we want to share a few of them with you:</p>
			<ul>
				<li>
					<h4>gZip Compression &amp; Browser Caching</h4>
					<p>This is probably one of the Most Important Techniques you should definitely implement in order to bump up your Website's Loading Speed. <strong>gZip Compression</strong> is used to compress the Files that are delivered when loading a Website. It covers HTML, CSS, Javascript &amp; Font Files along with other miscellaneous text files. Where as <strong>Browser Caching</strong> also covers Images &amp; Videos apart from including the above files. This is used to saves the Static Data in your Browser itself so that when you open the Next Pages on the Same Website, the content does not gets Downloaded again, loading the Website fast.</p>
					<p><strong>gZip Compression</strong> &amp; <strong>Browser Caching</strong> can be enabled using the <code>.htaccess</code> File on an Apache Web Server. You can use the Codes from here: <a href="https://github.com/h5bp/html5-boilerplate/blob/master/dist/.htaccess" target="_blank">https://github.com/h5bp/html5-boilerplate/blob/master/dist/.htaccess</a> to enable these modules on your server.</p>
				</li>
				<li>
					<h4>Image Compression &amp; Optimization</h4>
					<p>We tend to use Lots of Images on our Websites but we often do not make efforts to Compress &amp; Optimize them. Remember, the Larger the Image, the more time it takes to download and therefore this slows your website loading times affecting User Experience. Your customer will leave your website if it does not load within 3-5 Seconds which adversely affects your Sales. Therefore, it is important to Resize, Optimize &amp; Compress your Images before using it on your Website. Here are some Tips which might come handy in optimizing images:</p>
					<ul>
						<li>
							<ul>
								<li>
									<p><strong>Resize your Images:</strong> Resize your Images before using it on your Website. Do not just Download an Image &amp; place it as it is in your Website's <code>&lt;img&gt;</code> Tag without resizing it. The size/resolution of the Image matters since it is not recommended to use an Image size of <code>1200px</code> x <code>800px</code> in a Content Size of <code>300px</code> x <code>200px</code> as this is unnecessary. Resize it to <code>300px</code> x <code>200px</code></p>
								</li>
								<li>
									<p><strong>Image Formats:</strong> There are three common file types that are used for web images which are JPEG, GIF, &amp; PNG. For images with a Flat Background use <strong>JPEG</strong> images, for images with a Transparent background use <strong>PNG</strong> images and for images with Animations use <strong>GIF</strong> images.</p>
								</li>
								<li>
									<p><strong>Compressing Images:</strong> Images Compression is important as it considerably reduces the size without losing the quality. There are several FREE Image Optimization Tools available to Download.</p>
									<p><strong>For MAC</strong> use <a href="https://imageoptim.com/" target="_blank">ImageOptim</a></p>
									<p><strong>For Windows</strong> use <a href="http://luci.criosweb.ro/riot/" target="_blank">Riot</a> for compressing JPEG Images &amp; <a href="http://pnggauntlet.com/" target="_blank">PNG Gauntlet</a> for PNG Images.</p>
								</li>
							</ul>
						</li>
						<li>
							<h4>CSS &amp; jQuery Minifications</h4>
							<p>It is also recommended that you <strong>Combine &amp; Minify</strong> all your CSS Files to a single CSS File &amp; all Javascript Files to a single JS File since <strong>Minification</strong> reduces the size of the File and <strong>Combining</strong> the files helps in reducing the number of HTTP requests made to the server. This is also an Important Factor in increasing the speed of your website. There are several tools available online to Minify your CSS &amp; JS Files. Our recommendations are:</p>
							<p><strong>For CSS</strong> use <a href="http://cssminifier.com/" target="_blank">CSS Minifier</a> and <strong>For Javascript</strong> use <a href="http://javascript-minifier.com/" target="_blank">Javascript Minifier</a>.</p>
						</li>
						<li>
							<h4>Content Delivery Network</h4>
							<p>You can use a <strong>CDN</strong> to further speed up your website. You can use the CDN to deliver static files of your website like CSS, JS, Images &amp; Font Files. There are several CDN Hosting Providers available on the Internet but we would recommend <a href="https://www.maxcdn.com/" target="_blank">MaxCDN</a> or <a href="http://www.cloudflare.com/" target="_blank">CloudFlare</a>. <span class="label label-danger">Note:</span> CDN setup requires Extra monthly Fees to setup, so it is completely optional &amp; according to your needs.</p>
						</li>
						<li>
							<h4>Fast Web Hosting Servers</h4>
							<p>A lot depends on your Web Hosting Servers, so it is recommended that you choose a Hosting Company/Server that provides a Reliable &amp; a Fast Hosting Service. You can check out some recommended Hosting Services here: <a href="http://themeforest.net/get_hosting" target="_blank">http://themeforest.net/get_hosting</a>.</p>
						</li>
					</ul>
				</li>
			</ul>
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s2 pb-s3">
		<div class="container">
			<table class="table table-bordered">
				<thead>
					<tr>
						<td class="text-bold-600">&nbsp;</td>
						<td class="text-bold-600">Simple</td>
						<td class="text-bold-600">Hover</td>
						<td class="text-bold-600">Opacity</td>
						<td class="text-bold-600">Opacity Hover</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-bold-600">
							Text
						</td>
						<td>
							<p><code>.text-primary</code></p>
						</td>
						<td>
							<p><code>.text-primary--hover</code></p>
						</td>
						<td>
							<p><code>.text-v1-primary</code></p>
						</td>
						<td>
							<p><code>.text-v1-primary--hover</code></p>
						</td>
					</tr>
					<tr>
						<td class="text-bold-600">
							Background
						</td>
						<td>
							<p><code>.bg-primary</code></p>
						</td>
						<td>
							<p><code>.bg-primary--hover</code></p>
						</td>
						<td>
							<p><code>.bg-v1-primary</code></p>
						</td>
						<td>
							<p><code>.bg-v1-primary--hover</code></p>
						</td>
					</tr>
					<tr>
						<td class="text-bold-600">
							Border
						</td>
						<td>
							<p><code>.bc-primary</code></p>
						</td>
						<td>
							<p><code>.bc-primary--hover</code></p>
						</td>
						<td>
							<p><code>.bc-v1-primary</code></p>
						</td>
						<td>
							<p><code>.bc-v1-primary--hover</code></p>
						</td>
					</tr>
					<tr>
						<td class="text-bold-600">
							Box Shadow
						</td>
						<td>
							<p><code>.box-shadow-v1-s1</code></p>
						</td>
						<td>
							<p><code>.box-shadow-v1-s1--hover</code></p>
						</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				</tbody>
			</table>
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<?php include'includes___footer_links.php'; ?>

</body>
</html>