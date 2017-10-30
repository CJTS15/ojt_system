<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Exercise 1: Profile</title>

	<!-- Bootstrap core CSS-->
	<link href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/vendor/bootstrap/css/style.css"); ?>" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url("assets/vendor/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
	<!-- Custom styles for this template-->
	<link href="<?php echo base_url("assets/css/sb-admin.css"); ?>" rel="stylesheet">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h4>Profile Summary</h4>
				<hr/>
				<p>Name: <?php echo $uname; ?></p>
				<p>Email: <?php echo $uemail; ?></p>
				
			</div>
		</div>
		<!-- Time -->
<!-- 		<div class="row">
			<div class="col-lg-12">
				<div class="div-center">
					<div id="clockdate">
						<div class="clockdate-wrapper">
							<div class="startTime">
								<div id="clock"></div>
								<div id="date"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
 -->
		<a href="<?php echo base_url('Welcome/logoutPage'); ?>"><button name="submit" type="submit" class="btn btn-danger">Logout</button></a>
	</div>
	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo_base_url("vendor/jquery/jquery.min.js"); ?>"></script>
	<script src="<?php echo base_url("vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url("vendor/jquery-easing/jquery.easing.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/vendor/jquery/showdate.js"); ?>"></script>
</body>
</html> 