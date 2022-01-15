<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<title>Welcome to RumahWeb</title>

	<!-- Bootstrap CSS -->
	<link href="<?= base_url() . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet">
	<!-- styles -->
	<link href="<?php echo base_url() . 'assets/css/style.css' ?>" rel="stylesheet">
</head>

<body>
	<!-- Sign in -->
	<div class="container">
		<div class="row content">
			<div class="col-md-6 mb-3">
				<img src="<?= base_url() . 'assets/img/undraw_step_to_the_sun_nxqq.svg' ?>" class="img-fluid" alt="image">
			</div>
			<div class="col-md-6">
				<form action="<?= base_url() ?>index.php/welcome/login" method="POST">
					<h2 class="card-title">Sign in</h2>
					<h6 class="card-subtitle text-muted mb-5">Please login to use this site!</h6>
					<?php echo $this->session->flashdata('msg'); ?>
					<div class="form-group">
						<div class="mb-3">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control" id="email" name="username" placeholder="name@rumahweb.co.id">
						</div>
					</div>
					<div class="form-group">
						<div class="mb-3">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" id="myInput" name="password" placeholder="password">
						</div>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" name="checkbox" onclick="myFunction()" class="form-check-input" id="checkbox">
						<label class="form-check-label">show password</label>
					</div>
					<div class="form-group">
						<div class="d-grid mt-5">
							<button type="submit" class="btn btn-class">Login</button>
						</div>
					</div>
					<div class="mt-4 text-center">
						<!-- <span class="card-subtitle text-muted mb-5">Don't have an Account?</span>
						<span class="card-subtitle text-muted mb-5" id="sign-up">Sign Up</span> -->
						<p class="card-subtitle text-muted mb-5">Don't have an account?<a href="<?= base_url(); ?>index.php/register">Sign up</a></p>
						<h6 class="card-subtitle text-muted mb-5">@2022 Putu Eka Purnama Sari</h6>
					</div>
				</form>

			</div>
		</div>
		<script src="<?= base_url() . 'assets/js/main.js' ?>"></script>
		<script src="<?= base_url() . 'assets/js//bootstrap.bundle.min.js' ?>"></script>
		<script>
			function myFunction() {
				var x = document.getElementById("myInput");
				if (x.type === "password") {
					x.type = "text";
				} else {
					x.type = "password";
				}
			}
		</script>
		<script>
			function myFunction2() {
				var x = document.getElementById("myInput2");
				var y = document.getElementById("myInput3");
				if (x.type === "password" && y.type === "password") {
					x.type = "text";
					y.type = "text";
				} else {
					x.type = "password";
					y.type = "password";
				}
			}
		</script>
</body>

</html>