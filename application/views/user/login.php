<!DOCTYPE html>
<html>
<head>
	<title>You Login Template</title>
	<!-- Site favicon -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700" rel="stylesheet">
	<!-- Icon Font -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/ionicons/css/ionicons.css">
	<!-- Text Font -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/font.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<!-- Normal style CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<!-- Normal media CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/media.css">
</head>
<body>

	<!-- Header start -->
	<!-- <div class="header-wrap">
		<div class="clearfix">
			<div class="logo">
				<a href="index.php"><img src="images/logo.svg" alt=""></a>
			</div>
			<div class="menu">
				<div class="dropdown">
					<a class="dropdown-toggle hamburgler" href="#" role="button" data-toggle="dropdown">
						<span class="menu-icon">
							<div class="bun top"></div>
							<div class="meat"></div>
							<div class="bun bottom"></div>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<ul>
							<li><a class="dropdown-item" href="index.php">Login Style 1</a></li>
							<li><a class="dropdown-item selected" href="index2.php">Login Style 2</a></li>
							<li><a class="dropdown-item" href="index3.php">Login Style 3</a></li>
							<li><a class="dropdown-item" href="index4.php">Login Style 4</a></li>
							<li><a class="dropdown-item" href="index5.php">Login Style 5</a></li>
							<li><a class="dropdown-item" href="index6.php">Login Style 6</a></li>
							<li><a class="dropdown-item" href="index7.php">Login Style 7</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- Header end -->
	<main class="cd-main">
		<section class="cd-section index2 visible">
			<div class="cd-content style2">
				<div class="login-box">
					<div class="login-form-slider">
						<!-- login slide start -->
						<div class="login-slide slide">
							<div class="d-flex height-100-percentage">
								<div class="align-self-center width-100-percentage">
									<h3>Sign In</h3>
									<form id="login" method="post">
										<div class="form-group user-name-field">
											<input type="text" class="form-control" name="email" placeholder="Email" required>
											<div class="field-icon"><i class="ion-person"></i></div>
										</div>
										<div class="form-group margin-bottom-30px forgot-password-field">
											<input type="text" class="form-control" name="password" placeholder="Mobile Number" required>
											<div class="field-icon"><i class="ion-locked"></i></div>
											<!-- <a href="javascript:;" class="forgot-password-click">Forgot?</a> -->
										</div>
										<div class="d-none login-failed alert alert-danger text-center" role="alert">
										  Invalid Login :(
										</div>
										<div class="d-none login-success alert alert-success text-center" role="alert">
										  Login Successful. Redirecting...
										</div>
										<div class="form-group sign-in-btn">
											<input type="submit" class="submit" value="Sign In">
										</div>
									</form>
									<div class="sign-up-txt">
										Don't have an account? <a href="javascript:;" class="sign-up-click">Signup</a>
									</div>
								</div>
							</div>
						</div>
						<!-- login slide end -->
						<!-- signup slide start -->
						<div class="signup-slide slide">
							<div class="d-flex height-100-percentage">
								<div class="align-self-center width-100-percentage">
									<h3>Sign Up</h3>
									<form id="signup" method="post">
										<div class="form-group user-name-field">
											<input type="text" class="form-control" name="name" placeholder="Name" required>
											<div class="field-icon"><i class="ion-person"></i></div>
										</div>
										<div class="form-group user-name-field">
											<input type="text" class="form-control" name="email" placeholder="Email" required>
											<div class="field-icon"><i class="ion-ios-email"></i></div>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="phone" placeholder="Mobile Number" required>
											<div class="field-icon"><i class="ion-locked"></i></div>
										</div>
										<div class="form-group margin-bottom-30px">
											<input type="text" class="form-control" name="college" placeholder="College" required>
											<div class="field-icon"><i class="ion-locked"></i></div>
										</div>
										<div class="d-none signup-failed alert alert-danger text-center" role="alert">
										  Already registered. Try login.
										</div>
										<div class="d-none signup-success alert alert-success text-center" role="alert">
										  Signup Successful. Redirecting...
										</div>
										<div class="form-group sign-in-btn">
											<input type="submit" class="submit" value="Sign Up">
										</div>
									</form>
									<div class="sign-up-txt">
										if you have an account? <a href="javascript:;" class="login-click">login</a>
									</div>
								</div>
							</div>
						</div>
						<!-- signup slide end -->
						<!-- forgot password slide start -->
						<!-- <div class="forgot-password-slide slide">
							<div class="d-flex height-100-percentage">
								<div class="align-self-center width-100-percentage">
									<h3>Forgot Password</h3>
									<form>
										<label class="label">Enter your email address to reset your password</label>
										<div class="form-group user-name-field">
											<input type="text" class="form-control" placeholder="Email">
											<div class="field-icon"><i class="ion-ios-email"></i></div>
										</div>
										<div class="form-group sign-in-btn">
											<input type="submit" class="submit" value="Submit">
										</div>
									</form>
									<div class="sign-up-txt">
										if you remember your password? <a href="javascript:;" class="login-click">login</a>
									</div>
								</div>
							</div>
						</div> -->
						<!-- forgot password slide end -->
					</div>
				</div>
			</div>
		</section>
	</main>
	<div id="cd-loading-bar" data-scale="1"></div>
	<!-- JS File -->
	<script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/velocity.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>

<script>
	$(document).ready(function() {
		  $('#login').submit(function(e) {
		    e.preventDefault();
		    $.ajax({
		       type: "POST",
		       url: 'login',
		       data: $(this).serialize(),
		       success: function(data)
		       {
		          if (data == 1) {
								$('.login-success').removeClass('d-none');
		            window.location = '<?php echo base_url(); ?>problem';
		          }
		          else {
		            $('.login-failed').removeClass('d-none');
		          }
		       },
					 error: function()
		       {
	            window.location = '<?php echo base_url(); ?>problem';
		       }
		   });
		 });

		 $('#signup').submit(function(e) {
			 e.preventDefault();
			 $.ajax({
					type: "POST",
					url: 'signup',
					data: $(this).serialize(),
					success: function(data)
					{
						 if (data == 1) {
							 $('.signup-success').removeClass('d-none');
							 window.location = '<?php echo base_url(); ?>problem';
						 }
						 else {
							 $('.signup-failed').removeClass('d-none');
						 }
					}
			});
		});
	});
</script>
</body>
</html>
