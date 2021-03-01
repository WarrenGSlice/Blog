<?php  include('config.php'); ?>
<!-- Source code for handling registration and login -->
<?php  include('registration_login.php'); ?>

<?php include('head_section.php'); ?>

<title>Warren Blog | Sign up </title>
</head>
<body>
<div class="container">
	<!-- Navbar -->
		<?php include( ROOT_PATH . '/navbar.php'); ?>
	<!-- // Navbar -->

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="register.php" >
			<h2>Register on Warren Blog</h2>
			<?php include(ROOT_PATH . '/errors.php') ?>
			<input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username">
			<input  type="text" name="firstname" value="<?php echo $firstname; ?>"  placeholder="First Name">
			<input  type="text" name="lastname" value="<?php echo $lastname; ?>"  placeholder="Last Name">
			<input  type="text" name="address" value="<?php echo $address; ?>"  placeholder="Street Address">
			<input  type="text" name="city" value="<?php echo $city; ?>"  placeholder="City">
			<input  type="text" name="state" value="<?php echo $state; ?>"  placeholder="State">
			<input  type="text" name="zip" value="<?php echo $zip; ?>"  placeholder="Zip Code">
			<input  type="text" name="country" value="<?php echo $country; ?>"  placeholder="Country">
			<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email Address">
			<input type="password" name="password_1" placeholder="Password">
			<input type="password" name="password_2" placeholder="Password confirmation">
			<button type="submit" class="btn" name="reg_user">Register</button>
			<button type="reset" class="btn" name="reg_user">Reset</button>
			<p>Already a member? <a href="login.php">Sign in</a></p>
			<p>Go Back to the Home Page <a href="home_page.php">Click Here</a></p>
		</form>
	</div>
</div>
<!-- // container -->
<!-- Footer -->
	<?php include( ROOT_PATH . '/footer.php'); ?>
<!-- // Footer -->