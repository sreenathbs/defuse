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
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/problem.css">
	<!-- Normal media CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/media.css">
</head>
<body>

	<!-- Header start
	<div class="header-wrap">
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
	</div>
	 Header end -->
	<main class="cd-main">
		<section class="cd-section index2 visible">
			<div class="cd-content style2">
				<div class="login-box">
					<div class="login-form-slider">
						<!-- login slide start -->
						<div class="login-slide slide">
							<div class="d-flex height-100-percentage">
								<div class="align-self-center width-100-percentage">
									<h3 id="level"></h3>
									<p id="problem">
										If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.<br>
										Find the sum of all the multiples of 3 or 5 below 1000.
									</p>
									<form id="answer" method="post">
										<div class="form-group user-name-field">
											<input type="text" class="form-control" name="answer" placeholder="Answer">
										</div>
										<input type="text" class="form-control" hidden name="email">
										<input type="text" class="form-control" hidden name="level">
										<div class="form-group margin-bottom-30px forgot-password-field d-none">
											<input type="password" class="form-control" placeholder="Password">
											<div class="field-icon"><i class="ion-locked"></i></div>

										</div>
										<div class="form-group sign-in-btn">
											<input type="submit" class="submit" value="Submit">
										</div>

										<div class="d-none wrong-answer alert alert-danger text-center" role="alert">
										  Wrong Answer :(
										</div>
										<div class="d-none right-answer alert alert-success text-center" role="alert">
										  Right Answer...
										</div>

									</form>

								</div>
							</div>
						</div>
						<!-- login slide end -->
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
	$(document).ready(function show_qn() {
    $.ajax({
       type: "GET",
       url: 'problem/get_next_qn',
       success: function(data)
       {
				 	var qn = JSON.parse(data);
					$('#level').text("Problem "+qn.level);
					$('#problem').html(qn.question);
       }
   });

	 $('#answer').submit(function(e) {
		 e.preventDefault();
		 $.ajax({
				type: "POST",
				url: 'problem/verify_ans',
				data: $(this).serialize(),
				success: function(data)
				{
					 if (data == 1) {
						 show_qn();
						 $('.wrong-answer').addClass('d-none');
						 $('.right-answer').removeClass('d-none');
					 }
					 else {
						 $('.right-answer').addClass('d-none');
						 $('.wrong-answer').removeClass('d-none');
					 }
				}
		});
	});
	});
</script>

</body>
</html>
