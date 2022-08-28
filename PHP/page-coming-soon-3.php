<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page Coming Soon - 3 | Interact Responsive Template</title>

	<?php include'includes___header_links.php'; ?>

</head>
<body>

	<section class="pt-s5 pb-s5 overlay-wrap text-white" data-video-path="assets/videos/dark" data-plugin-video-background data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}">
		<div class="container overlay-container pt-s3 pb-s3">
			<div class="text-center mb-s3">
				<a href="index.php">
					<img class="w--80" src="assets/images/logo/icon.png" alt="Interact Responsive Template">
				</a>
			</div>
			<h1 class="text-bold-600 text-white text-center">Coming Soon</h1>
			<h5 class="text-bold-200 text-white text-center">Leave your email and we'll let you know once the site goes live.</h5>
			<div class="form-row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="counters mt-s3 mb-s3 ">
						<div class="progress rounded-0 h--2 bg-v4-dark">
							<div class="progress-bar bg-white progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" data-appear-progress-animation="90%">
								<span class="progress-bar-tooltip">90%</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div> <!-- /ROW -->
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div id="getting-started" class="text-center mb-s4"></div>
				</div>
			</div> <!-- /ROW -->
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<form>
						<div class="form-row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="input-group mb-3">
									<input type="text" class="form-control text-size-s1" placeholder="Enter Your Email">
									<div class="input-group-append">
										<button class="btn bg-v4-dark text-white bg-v6-dark--hover text-shadow-s1 text-uppercase text-bold-600 text-size-s1 rounded-0 pt-12 pb-12 pl-s3 pr-s3" type="button" id="button-addon2">Notify Me</button>
									</div>
								</div>
								<small>We promise to never spam you.</small>
							</div>
							<div class="col-md-3"></div>
						</div>
					</form>
				</div>
			</div> <!-- /ROW -->
			<div class="text-center mt-s4">
				<ul class="social list-inline text-size-s2">
					<li class="list-inline-item">
						<a class="bg-v1-white text-white bg-pink--hover text-size-s1 text-white--hover rounded-circle" href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="bg-v1-white text-white bg-pink--hover text-size-s1 text-white--hover rounded-circle" href="#">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="bg-v1-white text-white bg-pink--hover text-size-s1 text-white--hover rounded-circle" href="#">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</li>
				</ul>
			</div>
		</div> <!-- /CONTAINER -->
		<div class="overlay" style="background: url('assets/images/overlay/overlay-1.png');"></div>
	</section> <!-- /SECTION -->

	<?php include'includes___footer_links_only.php'; ?>

	<script type="text/javascript">
		$("#getting-started")
		.countdown("2019/08/22", function(event) {
			var $this = $(this).html(event.strftime(''
				+ '<span class="ml-s2 mr-s2 d-inline-block"><span class="text-size-50">%w</span> <span style="display:block;">weeks</span></span>'
				+ '<span class="ml-s2 mr-s2 d-inline-block"><span class="text-size-50">%d</span> <span style="display:block;">days</span></span>'
				+ '<span class="ml-s2 mr-s2 d-inline-block"><span class="text-size-50">%H</span> <span style="display:block;">hr</span></span>'
				+ '<span class="ml-s2 mr-s2 d-inline-block"><span class="text-size-50">%M</span> <span style="display:block;">min</span></span>'
				+ '<span class="ml-s2 mr-s2 d-inline-block"><span class="text-size-50">%S</span> <span style="display:block;">sec</span></span>'
				));
		});
	</script>

</body>
</html>