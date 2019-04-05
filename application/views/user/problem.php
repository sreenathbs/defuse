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

	<style>
	@import url("https://fonts.googleapis.com/css?family=Audiowide");
	@import 'https://fonts.googleapis.com/css?family=Allerta+Stencil|Roboto+Mono';
	</style>
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
						<!-- problem slide start -->
						<div class="problem-slide slide">
							<div class="d-flex height-100-percentage">
								<div class="align-self-center width-100-percentage">
									<h3 id="level"></h3>
									<p id="problem"></p>

									<form id="answer" method="post">

										<div class="form-group user-name-field">
											<input id="answer-input" type="text" class="form-control" name="answer" placeholder="Answer" required>
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

										<div class="sign-up-txt">
											<a href="javascript:;" class="timer-select">Timer</a>
										</div>

									</form>

								</div>
							</div>
						</div>
						<!-- problem slide end -->
						<!-- timer slide start -->
						<div class="timer-slide slide">
							<div class="d-flex height-100-percentage">
								<div class="align-self-center width-100-percentage">

									<div class="wrapper">

									  <h2 class="subtitle">
									    <span>Be</span>
									    <span>Quick,</span>
									    <span>there</span>
									    <span>is just:</span>
									  </h2>
									  <ul id="countdown" class="countdown">
									    <li>
									      <span id="hours" class="days">00</span>
									      <p class="hours_ref">hours</p>
									    </li>
									    <li>
									      <span id="mins" class="days">00</span>
									      <p class="minutes_ref">minutes</p>
									    </li>
									    <li>
									      <span id="seconds" class="days">00</span>
									      <p class="seconds_ref">seconds</p>
									    </li>
									  </ul>

									</div>

									<div class="sign-up-txt">
										<a href="javascript:;" class="problem-select">Go Back</a>
									</div>
									<div id="time-left1">
										<p style="font-family: 'Allerta Stencil', sans-serif;" id="time-left">Time Left</p>
									</div>

								</div>
							</div>
						</div>
						<!-- timer slide end -->
						<!-- defused slide start -->
						<div class="defused-slide slide">
							<div class="d-flex height-100-percentage">
								<div class="align-self-center width-100-percentage">

									<div class="wrapper">

									  <h2 class="subtitle">
									    <span>Congratulations!</span>
									    <span>You have</span>
									    <span>successfully</span>
									    <span>defused the bomb!</span>
									  </h2>

										<hr>
										<img style="max-width: 75%;height: 40%;" src="<?php echo base_url(); ?>assets/images/defused.jpg" alt="difused">

									</div>

									<div class="d-none sign-up-txt">
										<a href="javascript:;" class="problem-select">Go Back</a>
									</div>

								</div>
							</div>
						</div>
						<!-- defused slide end -->
						<!-- explode slide start -->
						<div class="explode-slide slide" style="overflow: inherit;padding: 0;">
							<div class="d-flex height-100-percentage">
								<div class="align-self-center width-100-percentage">

									<div class="wrapper">

										<br>
									  <h2 class="subtitle">
									    <span>OOPS...</span>
									    <span> </span>
									    <span>Game</span>
									    <span>Over</span>
									  </h2>

										<br>
										<canvas id="canvas"> </canvas>

									</div>

									<div class="d-none sign-up-txt">
										<a href="javascript:;" class="problem-select">Go Back</a>
									</div>

								</div>
							</div>
						</div>
						<!-- explode slide end -->
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
	function show_qn() {
    $.ajax({
       type: "GET",
       url: '<?php echo base_url(); ?>problem/get_next_qn',
       success: function(data)
       {
				 	var qn = JSON.parse(data);
					if (qn.status == 0) {
						// window.location = '<?php echo base_url(); ?>problem/defused';
						$('.defused-slide').velocity({translateX: ['0%','-100%'] }, {display:"block"});
						$('.problem-slide').velocity({translateX: '100%' }, {display:"none"});
						$('.timer-slide').velocity({translateX: '100%' }, {display:"none"});
						$(".login-box").css("height", "130%");
						$(".login-box").css("margin-top", "-5%");
						return;
					}
					$('#level').text("Problem "+qn.level);
					$('#problem').html(qn.question);
					$('.wrong-answer').addClass('d-none');
					$('.right-answer').addClass('d-none');
       }
   	});
	}

	$(window).on( "load", function() {
		show_qn();
		doTimer();
	});

	 $('#answer').submit(function(e) {
		 e.preventDefault();
		 $.ajax({
				type: "POST",
				url: '<?php echo base_url(); ?>problem/verify_ans',
				data: $(this).serialize(),
				success: function(data)
				{
					 if (data == 1) {
						 $('.wrong-answer').addClass('d-none');
						 $('.right-answer').removeClass('d-none');
	 					$('#answer-input').val("");
						 show_qn();
					 }
					 else {
						 $('.right-answer').addClass('d-none');
						 $('.wrong-answer').removeClass('d-none');
	 					$('#answer-input').val("");
					 }
				}
		});
	});

	$(document).on('click', '.timer-select', function() {
		$('.timer-slide').velocity({translateX: ['0%','-100%'] }, {display:"block"});
		$('.problem-slide').velocity({translateX: '100%' }, {display:"none"});
	});
	$(document).on('click', '.problem-select', function() {
		$('.problem-slide').velocity({translateX: ['0%','-100%'] }, {display:"block"});
		$('.timer-slide').velocity({translateX: '100%' }, {display:"none"});
	});

	// $(document).on('load', '.problem-slide', function() {
	// 	doTimer();
	// });

	// $(".login-box").css("height", "130%");
	// $(".login-box").css("margin-top", "-5%");


	// Set the date we're counting down to
	var countDownDate = new Date("April 05, 2019 10:30:00").getTime();

	// Update the count down every 1 second
	var countdownfunction = setInterval(function() {

	    // Get todays date and time
	    var now = new Date().getTime();

	    // Find the distance between now an the count down date
	    var distance = countDownDate - now;



	    // Time calculations for days, hours, minutes and seconds
	    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	    document.getElementById('hours').innerHTML = (hours < 10 ? '0' : '') + hours;
	    document.getElementById('mins').innerHTML = (minutes < 10 ? '0' : '') + minutes;
	    document.getElementById('seconds').innerHTML = (seconds < 10 ? '0' : '') + seconds;
	    //console.log(days);

	     //document.getElementById("demo").innerHTML = '01';

	    // If the count down is over, write some text
	    if (distance < 0) {
	        // clearInterval(countdownfunction);
	        document.getElementById("countdown").innerHTML = "<h2>Exploding...</h2>";
	    }
	}, 1000);


	//



var c = 2;
var mnts = 0;
var hrs = 0;
var t;
var timer_is_on=0;

function timedCount()
{
	// console.log('hours:'+ hrs + 'minutes:'+ mnts + ' seconds: '+ c);
document.getElementById('time-left').innerHTML= (hrs < 10 ? '0' : '') + hrs + ':'+ (mnts < 10 ? '0' : '') + mnts + ':'+ (c < 10 ? '0' : '') + c;
if (c == 0) {
	mnts -= 1;
	c = 60;
	if (mnts == 0) {
		if (hrs > 0) {
			hrs -= 1;
			mnts = 60;
		}
	}
}
c -= 1;
if (c == 0) {
	mnts -= 1;
	c = 60;
	if (mnts == 0) {
		if (hrs > 0) {
			hrs -= 1;
			mnts = 60;
		}
	}
}
if (mnts < 0 || hrs < 0) {
	$('.explode-slide').velocity({translateX: ['0%','-100%'] }, {display:"block"});
	$('.problem-slide').velocity({translateX: '100%' }, {display:"none"});
	$('.timer-slide').velocity({translateX: '100%' }, {display:"none"});
	$(".login-box").css("height", "130%");
	$(".login-box").css("margin-top", "-5%");
	$('#level').text("Problem ");
	$('#problem').html("GAME OVER");
	return 0;
}
t=setTimeout("timedCount()",1000);
}

function doTimer()
{
if (!timer_is_on)
  {
  timer_is_on=1;
  timedCount();
  }
}
</script>

<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var cw = canvas.width = window.innerWidth,
  cx = cw / 2;
var ch = canvas.height = window.innerHeight,
  cy = ch / 2;
ctx.strokeStyle = "#fff";

var requestId = null;
var rad = Math.PI / 180;

var colors = ["#6A0000", "#900000", "#902B2B", "#A63232", "#A62626", "#FD5039", "#C12F2A", "#FF6540", "#f93801"];
//var colors = ["#66C2FF", "#48819C", "#205487", "#1DA7D1", "#1FC3FF"];

var spring = 1 / 10;
var friction = .85;
var explosions = [];

function Particle(o) {
  this.decay = .95; //randomIntFromInterval(80, 95)/100;//
  this.r = randomIntFromInterval(10, 70);
  this.R = 100 - this.r;
  this.angle = Math.random() * 2 * Math.PI;
  this.center = o; //{x:cx,y:cy}
  this.pos = {};
  this.pos.x = this.center.x + this.r * Math.cos(this.angle);
  this.pos.y = this.center.y + this.r * Math.sin(this.angle);
  this.dest = {};
  this.dest.x = this.center.x + this.R * Math.cos(this.angle);
  this.dest.y = this.center.y + this.R * Math.sin(this.angle);
  this.color = colors[~~(Math.random() * colors.length)];
  this.vel = {
    x: 0,
    y: 0
  };
  this.acc = {
    x: 0,
    y: 0
  };

  this.update = function() {
    var dx = (this.dest.x - this.pos.x);
    var dy = (this.dest.y - this.pos.y);

    this.acc.x = dx * spring;
    this.acc.y = dy * spring;
    this.vel.x += this.acc.x;
    this.vel.y += this.acc.y;

    this.vel.x *= friction;
    this.vel.y *= friction;

    this.pos.x += this.vel.x;
    this.pos.y += this.vel.y;

    if (this.r > 0) this.r *= this.decay;
  }

  this.draw = function() {

    ctx.fillStyle = this.color;
    ctx.beginPath();
    ctx.arc(this.pos.x, this.pos.y, this.r, 0, 2 * Math.PI);
    ctx.fill();

  }

}

function Explosion() {

  this.pos = {
    x: Math.random() * cw,
    y: Math.random() * ch
  };
  this.particles = [];
  for (var i = 0; i < 50; i++) {
    this.particles.push(new Particle(this.pos));
  }

  this.update = function() {
    for (var i = 0; i < this.particles.length; i++) {
      this.particles[i].update();
      if (this.particles[i].r < .5) {
        this.particles.splice(i, 1)
      }
    }

  }

  this.draw = function() {
    for (var i = 0; i < this.particles.length; i++) {
      this.particles[i].draw();
    }
  }
}

function Draw() {
  requestId = window.requestAnimationFrame(Draw);
  ctx.clearRect(0, 0, cw, ch);
  ctx.globalCompositeOperation = "lighter";
  if (Math.random() < .1) {
    explosions.push(new Explosion());
  }

  for (var j = 0; j < explosions.length; j++) {

    explosions[j].update();
    explosions[j].draw();

  }

}
var Init = function() {
  if (requestId) {
    window.cancelAnimationFrame(requestId);
    requestId = null;
  }
  cw = canvas.width = window.innerWidth,
    cx = cw / 2;
  ch = canvas.height = window.innerHeight,
    cy = ch / 2;

  Draw();
}

window.setTimeout(function() {
  Init();
  window.addEventListener('resize', Init, false);
}, 15);

function randomIntFromInterval(mn, mx) {
  return Math.floor(Math.random() * (mx - mn + 1) + mn);
}
</script>

</body>
</html>
