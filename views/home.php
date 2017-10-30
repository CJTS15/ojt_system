<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Exercise 1: Home</title>

	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />
</head>
<body>
	<div class="container">
		<h1>Welcome to Pixzel Digital!</h1>
		<p>A digital agency specialising in creative strategy, web design & development, web & mobile app development, branding, and digital marketing strategy.</p>
		<hr>
		<a href="<?php echo base_url('Welcome/signupPage/') ?>"><button class="btn btn-primary" type="button">Sign Up</button></a>
		<a href="<?php echo base_url('Welcome/loginPage/') ?>"><button class="btn btn-primary" type="button">Login</button></a>

	
	</div>
	
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>