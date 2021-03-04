<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>webPLE | Register</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/style.css">
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>

</head>

<body class="is-preload">

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Wrapper -->
		<div id="wrapper">

			<section class="panel banner right">
				<div class="content color0 span-5">
					<div class="container">
						<div class="signup">
							<div class="container">
								<div class="signup-content">
									<div class="signup-form">
										<h2 class="form-title">R e g i s t e r</h2>
										<form method="POST" class="register-form" id="register-form" action="{{ URL::to('/userCheck') }}">
										@csrf
											<div class="form-group">
												<label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
												<input type="text" name="name" id="name" placeholder="Your Name" />
											</div>
											<div class="form-group">
												<label for="email"><i class="zmdi zmdi-email"></i></label>
												<input type="email" name="email" id="email" placeholder="Your Email" />
											</div>
											<div class="form-group">
												<label for="pass"><i class="zmdi zmdi-lock"></i></label>
												<input type="password" name="pass" id="pass" placeholder="Password" />
											</div>
											<!-- <div class="form-group">
												<label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
												<input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
											</div> -->
											<br>
											<div class="form-group form-button">
												<input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
											</div>
											<br>
											<a href="login" class="signup-image-link">I am already member</a>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="image filtered span-3" data-position="25% 25%">
					<img src="images/signup-image.jpg" alt="" />
				</div>
			</section>

		</div>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>