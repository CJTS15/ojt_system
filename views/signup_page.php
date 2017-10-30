<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Exercise 1: Sign Up</title>

	<!-- Bootstrap core CSS-->
	<link href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/vendor/bootstrap/css/style.css"); ?>" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url("assets/vendor/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
	<!-- Custom styles for this template-->
	<link href="<?php echo base_url("assets/css/sb-admin.css"); ?>" rel="stylesheet">

	<body class="bg-dark">
		<div class="container">
			<div class="card card-register mx-auto mt-5">
				<?php $attributes = array("name" => "signupform");
				echo form_open("signup/index", $attributes); ?>

				<div class="card-header">Register an Account</div>
				<div class="card-body">
					<form>
						<div class="form-group">
							<div class="form-row">

								<div class="col-md-6">
									<label for="exampleInputName">First name</label>
									<input class="form-control" id="exampleInputName" name="fname" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required="" value="<?php echo set_value('fname'); ?>" />
									<span class="text-danger"><?php echo form_error('fname'); ?></span>
								</div>

								<div class="col-md-6">
									<label for="exampleInputLastName">Last name</label>
									<input class="form-control" id="exampleInputLastName" name="lname" type="text" aria-describedby="nameHelp" placeholder="Enter last name" required="" value="<?php echo set_value('lname'); ?>" />
									<span class="text-danger"><?php echo form_error('lname'); ?></span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Username</label>
							<input class="form-control" id="exampleInputUsername" name="username" type="username" aria-describedby="usernameHelp" placeholder="Enter username" required="" value="<?php echo set_value('username'); ?>" />
							<span class="text-danger"><?php echo form_error('username'); ?></span>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input class="form-control" id="exampleInputEmail1" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email" required="" value="<?php echo set_value('email'); ?>" />
							<span class="text-danger"><?php echo form_error('email'); ?></span>
						</div>

						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<label for="exampleInputPassword1">Password</label>
									<input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password" required="" />
									<span class="text-danger"><?php echo form_error('password'); ?></span>
								</div>

								<div class="col-md-6">
									<label for="exampleConfirmPassword">Confirm password</label>
									<input class="form-control" id="exampleConfirmPassword" name="cpassword" type="password" placeholder="Confirm password">
									<span class="text-danger"><?php echo form_error('cpassword'); ?></span>
								</div>
							</div>
						</div>

						<button name="submit" type="submit" class="btn btn-danger btn-block">Register</button>
					</form>
					<div class="text-center">
						<br> Already Registered? <a class="d-block small mt-3" href="<?php echo base_url('login/index'); ?>">Login Here</a>
						<!-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
					</div>
				</div>
			</div>
		</div>
		<!-- Bootstrap core JavaScript-->
		<script src="<?php echo_base_url("vendor/jquery/jquery.min.js"); ?>"></script>
		<script src="<?php echo base_url("vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
		<!-- Core plugin JavaScript-->
		<script src="<?php echo base_url("vendor/jquery-easing/jquery.easing.min.js"); ?>"></script>
	</body>
	
	</html>