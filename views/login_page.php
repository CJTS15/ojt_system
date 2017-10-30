<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Exercise 1: Login</title>

	<!-- Bootstrap core CSS-->
	<link href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/vendor/bootstrap/css/style.css"); ?>" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url("assets/vendor/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
	<!-- Custom styles for this template-->
	<link href="<?php echo base_url("assets/css/sb-admin.css"); ?>" rel="stylesheet">
</head>

	<body class="bg-dark">


		<div class="top-container">
          <div class="text">
              <h1><strong>Welcome </strong> to Pixzel Digital</h1>
              <div class="description">
                
              </div>
          </div>
      	</div>

      	<!-- Time -->
		<div class="row">
			<div class="col-lg-12">
				<div class="div-center">
					<div id="startTime">
						<div class="clockdate-wrapper">
							<div class="startTime">
								<div id="clock">time</div>
								<div id="date">date</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="card card-login mx-auto mt-5">
				<?php $attributes= array("name" => "loginform");
				echo form_open("login/index", $attributes);?>

				<div class="card-header">Time In</div>
				<div class="card-body">
				
						<div class="form-group">
							<label for="exampleInputEmail1">Username</label>
							<input class="form-control" id="exampleInputUsername" name="username" type="text" aria-describedby="usernameHelp" placeholder="Enter username" value="<?php echo set_value('username'); ?>"/>
							<span class="text-danger"><?php echo form_error('username'); ?></span>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password" value="<?php echo set_value('password'); ?>" />
							<span class="text-danger"><?php echo form_error('password'); ?> </span>
						</div>
						<div class="form-group">
							<!-- <div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox"> Remember Password</label>
								</div>
							</div> -->
							<button type="submit" class="btn btn-danger btn-block">Time In</button>
						 
						<?php echo form_close(); ?>
						<?php echo $this->session->flashdata('msg'); ?>

						<div class="text-center">
							<a class="d-block small mt-3" href="<?php echo base_url('signup/index'); ?>">Register an Account</a>
							<!-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
						</div>
					</div>
				</div>
			</div>
			<footer>
				THIS IS A FOOTER.
			</footer>
			<!-- Bootstrap core JavaScript-->
			<script src="<?php echo_base_url("assets/vendor/jquery/jquery.min.js"); ?>"></script>
			<script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
			<!-- Core plugin JavaScript-->
			<script src="<?php echo base_url("assets/vendor/jquery-easing/jquery.easing.min.js"); ?>"></script>
			<script src="<?php echo base_url("assets/vendor/jquery/showdate.js"); ?>"></script>
		</body>

		</html> 