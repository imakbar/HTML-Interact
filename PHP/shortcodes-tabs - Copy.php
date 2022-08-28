<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BUTTONS</title>

	<?php include'includes___header_links.php'; ?>

</head>
<body>

	<section class="bg-white pt-s2 pb-s3">
		<div class="container">

			<div>
				<div class="nav nav-pills nav-fill mb-s3">
					<a class="nav-link btn btn-xl bg-none text-uppercase text-center text-size-s1 text-bold-600 bg-dark bg-green--active rounded-0 text-white text-white--active active" id="tab-1-tab" href="#tab-1">1</a>
					<a class="nav-link btn btn-xl bg-none text-uppercase text-center text-size-s1 text-bold-600 bg-dark bg-green--active rounded-0 text-white text-white--active" id="tab-2-tab" href="#tab-2">2</a>
					<a class="nav-link btn btn-xl bg-none text-uppercase text-center text-size-s1 text-bold-600 bg-dark bg-green--active rounded-0 text-white text-white--active" id="tab-3-tab" href="#tab-3">3</a>
					<a class="nav-link btn btn-xl bg-none text-uppercase text-center text-size-s1 text-bold-600 bg-dark bg-green--active rounded-0 text-white text-white--active" id="tab-4-tab" href="#tab-4">4</a>
				</div>
			</div>

			<div class="d-flex mt-s3 mb-s1">
				<div>
					<h4 class="text-uppercase text-bold-700">Tab #1</h4>
				</div>
			</div>
			<div class="mb-s3">
				<hr class="mb-0">
				<hr class="w--60 bs-solid bc-v9-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="">
						<div class="nav nav-pills mb-s3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link btn bg-none text-uppercase text-center text-size-s1 text-bold-600 text-dark text-green--active hover-buzz-out text-left active" id="tab-1-tab" data-toggle="pill" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Home</a>
							<a class="nav-link btn bg-none text-uppercase text-center text-size-s1 text-bold-600 text-dark text-green--active hover-buzz-out text-left" id="tab-2-tab" data-toggle="pill" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Profile</a>
							<a class="nav-link btn bg-none text-uppercase text-center text-size-s1 text-bold-600 text-dark text-green--active hover-buzz-out text-left" id="tab-3-tab" data-toggle="pill" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Messages</a>
							<a class="nav-link btn bg-none text-uppercase text-center text-size-s1 text-bold-600 text-dark text-green--active hover-buzz-out text-left" id="tab-4-tab" data-toggle="pill" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Settings</a>
						</div>
						<div class="tab-content w-100" id="v-pills-tabContent">
							<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
							<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
							<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
							<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-v5-light pt-s2 pb-s3">
		<div class="container">
			<div class="d-flex mt-s3 mb-s1">
				<div>
					<h4 class="text-uppercase text-bold-700">Tabs</h4>
				</div>
			</div>
			<div class="mb-s3">
				<hr class="mb-0">
				<hr class="w--60 bs-solid bc-v9-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="">
						<div class="nav nav-pills mb-s3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link btn bg-none text-uppercase text-center text-size-s1 text-bold-600 text-dark text-green--active bs-solid bw-s5 bc-green--active bl-0 br-0 bt-0 rounded-0 hover-buzz-out text-left active" id="tab-1-tab" data-toggle="pill" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Home</a>
							<a class="nav-link btn bg-none text-uppercase text-center text-size-s1 text-bold-600 text-dark text-green--active bs-solid bw-s5 bc-green--active bl-0 br-0 bt-0 rounded-0 hover-buzz-out text-left" id="tab-2-tab" data-toggle="pill" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Profile</a>
							<a class="nav-link btn bg-none text-uppercase text-center text-size-s1 text-bold-600 text-dark text-green--active bs-solid bw-s5 bc-green--active bl-0 br-0 bt-0 rounded-0 hover-buzz-out text-left" id="tab-3-tab" data-toggle="pill" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Messages</a>
							<a class="nav-link btn bg-none text-uppercase text-center text-size-s1 text-bold-600 text-dark text-green--active bs-solid bw-s5 bc-green--active bl-0 br-0 bt-0 rounded-0 hover-buzz-out text-left" id="tab-4-tab" data-toggle="pill" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Settings</a>
						</div>
						<div class="tab-content w-100" id="v-pills-tabContent">
							<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
							<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
							<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
							<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s2 pb-s3">
		<div class="container">
			<div class="d-flex mt-s3 mb-s1">
				<div>
					<h4 class="text-uppercase text-bold-700">Tabs</h4>
				</div>
			</div>
			<div class="mb-s3">
				<hr class="mb-0">
				<hr class="w--60 bs-solid bc-v9-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="">
						<div class="nav nav-pills mb-s3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link btn bg-green--active text-uppercase text-center bg-v5-light text-size-s1 text-bold-600 text-shadow-s1--active box-shadow-v2-s1-child--active text-dark text-white--active hover-buzz-out text-left active" id="tab-1-tab" data-toggle="pill" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Home</a>
							<a class="nav-link btn bg-green--active text-uppercase text-center bg-v5-light text-size-s1 text-bold-600 text-shadow-s1--active box-shadow-v2-s1-child--active text-dark text-white--active hover-buzz-out text-left" id="tab-2-tab" data-toggle="pill" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Profile</a>
							<a class="nav-link btn bg-green--active text-uppercase text-center bg-v5-light text-size-s1 text-bold-600 text-shadow-s1--active box-shadow-v2-s1-child--active text-dark text-white--active hover-buzz-out text-left" id="tab-3-tab" data-toggle="pill" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Messages</a>
							<a class="nav-link btn bg-green--active text-uppercase text-center bg-v5-light text-size-s1 text-bold-600 text-shadow-s1--active box-shadow-v2-s1-child--active text-dark text-white--active hover-buzz-out text-left" id="tab-4-tab" data-toggle="pill" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Settings</a>
						</div>
						<div class="tab-content w-100" id="v-pills-tabContent">
							<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
							<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
							<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
							<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-v5-light pt-s2 pb-s3">
		<div class="container">
			<div class="d-flex mt-s3 mb-s1">
				<div>
					<h4 class="text-uppercase text-bold-700">Tabs</h4>
				</div>
			</div>
			<div class="mb-s3">
				<hr class="mb-0">
				<hr class="w--60 bs-solid bc-v9-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="">
						<div class="nav nav-pills nav-fill mb-s3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link btn bg-green--active text-uppercase text-center bg-v5-light text-size-s1 text-bold-600 text-shadow-s1--active box-shadow-v2-s1-child--active text-dark text-white--active hover-buzz-out text-left active" id="tab-1-tab" data-toggle="pill" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Home</a>
							<a class="nav-link btn bg-green--active text-uppercase text-center bg-v5-light text-size-s1 text-bold-600 text-shadow-s1--active box-shadow-v2-s1-child--active text-dark text-white--active hover-buzz-out text-left" id="tab-2-tab" data-toggle="pill" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Profile</a>
							<a class="nav-link btn bg-green--active text-uppercase text-center bg-v5-light text-size-s1 text-bold-600 text-shadow-s1--active box-shadow-v2-s1-child--active text-dark text-white--active hover-buzz-out text-left" id="tab-3-tab" data-toggle="pill" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Messages</a>
							<a class="nav-link btn bg-green--active text-uppercase text-center bg-v5-light text-size-s1 text-bold-600 text-shadow-s1--active box-shadow-v2-s1-child--active text-dark text-white--active hover-buzz-out text-left" id="tab-4-tab" data-toggle="pill" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Settings</a>
						</div>
						<div class="tab-content w-100" id="v-pills-tabContent">
							<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
							<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
							<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
							<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s2 pb-s3">
		<div class="container">
			<div class="d-flex mt-s3 mb-s1">
				<div>
					<h4 class="text-uppercase text-bold-700">Tabs</h4>
				</div>
			</div>
			<div class="mb-s3">
				<hr class="mb-0">
				<hr class="w--60 bs-solid bc-v9-dark bw-s5 bt-0 bl-0 br-0 mt-0 ml-0">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="d-flex">
						<div class="nav nav-pills d-flex flex-column w--300 mr-s3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link btn btn-block bg-green--active text-uppercase text-size-s1 text-bold-600 text-shadow-s1--active box-shadow-v2-s1-child--active text-dark text-white--active hover-buzz-out text-left active" id="tab-1-tab" data-toggle="pill" href="#tab-1-1" role="tab" aria-controls="tab-1-1" aria-selected="true">Home</a>
							<a class="nav-link btn btn-block bg-green--active text-uppercase text-size-s1 text-bold-600 text-shadow-s1--active box-shadow-v2-s1-child--active text-dark text-white--active hover-buzz-out text-left" id="tab-2-tab" data-toggle="pill" href="#tab-2-1" role="tab" aria-controls="tab-2-1" aria-selected="false">Profile</a>
							<a class="nav-link btn btn-block bg-green--active text-uppercase text-size-s1 text-bold-600 text-shadow-s1--active box-shadow-v2-s1-child--active text-dark text-white--active hover-buzz-out text-left" id="tab-3-tab" data-toggle="pill" href="#tab-3-1" role="tab" aria-controls="tab-3-1" aria-selected="false">Messages</a>
							<a class="nav-link btn btn-block bg-green--active text-uppercase text-size-s1 text-bold-600 text-shadow-s1--active box-shadow-v2-s1-child--active text-dark text-white--active hover-buzz-out text-left" id="tab-4-tab" data-toggle="pill" href="#tab-4-1" role="tab" aria-controls="tab-4-1" aria-selected="false">Settings</a>
						</div>
						<div class="tab-content w-100" id="v-pills-tabContent">
							<div class="tab-pane fade show active" id="tab-1-1" role="tabpanel" aria-labelledby="tab-1-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
							<div class="tab-pane fade" id="tab-2-1" role="tabpanel" aria-labelledby="tab-2-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
							<div class="tab-pane fade" id="tab-3-1" role="tabpanel" aria-labelledby="tab-3-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
							</div>
							<div class="tab-pane fade" id="tab-4-1" role="tabpanel" aria-labelledby="tab-4-tab">
								<p>Morbi sodales lacinia magna eget ornare. Vivamus ac posuere neque. Phasellus porta eu nisi eget accumsan. Pellentesque egestas arcu elementum neque finibus iaculis. Vivamus bibendum, metus sit amet fermentum maximus, quam mi euismod felis, pulvinar vehicula lacus nunc eget augue. Nullam tincidunt, sapien eu tristique vestibulum, arcu ipsum eleifend sapien, eu dictum lectus elit ac risus. Nullam congue, ante non porta euismod, velit neque rhoncus velit, eget aliquet massa velit quis tellus. In et augue luctus, sollicitudin sem vitae, hendrerit quam. Aenean vehicula lectus enim, vel tempor arcu luctus sed. Nunc tempus fermentum leo, quis semper velit venenatis eget. Proin id leo non magna imperdiet faucibus et ut ipsum. Praesent convallis placerat velit ut imperdiet. Sed nec consequat felis. Duis odio sem, consectetur vitae ultrices vel, vulputate id sapien. Maecenas posuere ligula non accumsan sagittis. Morbi elementum bibendum ipsum, ac venenatis leo faucibus vel.</p>

								<p>Donec eleifend, nulla eu dapibus malesuada, nisi elit interdum ipsum, a feugiat est erat nec libero. Sed lacus enim, laoreet sit amet metus vitae, congue laoreet ligula. Sed rutrum justo vitae gravida ultricies. Aliquam erat volutpat. Sed consequat purus et odio lobortis, eget lacinia mauris ultricies. Vestibulum dictum mattis nisl, eu malesuada sapien iaculis eget. Maecenas euismod turpis nec viverra faucibus.</p>
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