<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>webPLE</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>

	<style>
		body {
			margin: 0;
			font-family: 'Kanit', sans-serif;
		}

		.navbar {
			overflow: hidden;
			background-color: #2e2b37;
			position: fixed;
			top: 0;
			width: 100%;
		}

		.navbar a {
			float: right;
			display: block;
			color: whitesmoke;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
		}

		.navbar a:hover {
			background: lightcyan;
			color: black;
		}

		.navbar a.active {
			background-color: #e37b7c;
			color: white;
		}
		.navbar i{
			float: left;
			margin: 15px;
			font-size: 23px;

		}
	</style>
</head>



<body class="is-preload">

	<div class="navbar align-right">
		<a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			@csrf
		</form>
		<a href="#result" class="active">Result</a>
		<a href="/test">Personality test</a>
		<a href="#home">Home</a>
		<i class="fa fa-user-circle">&nbsp;&nbsp;{{Auth::user()->name}}</i>
	</div>

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Panel (Banner) -->
			<section class="panel banner right">
				<div class="content color0 span-3-75">
					<h1 class="major">MBTI<br />
						Type</h1>
					<p>This is <strong>Ethereal</strong>, a free site template by AJ for <a href="https://html5up.net">HTML5 UP</a>. It’s fully responsive, built on HTML5 and CSS3, and released entirely for free under the Creative Commons license. Hope you dig it :)</p>
					<ul class="actions">
						<li><a href="#one" class="button primary color1 circle icon solid fa-angle-right">Take the test</a></li>
					</ul>
				</div>
				<div class="image filtered span-1-75" data-position="25% 25%">
					<img src="images/pic01.jpg" alt="" />
				</div>
			</section>

			<section class="panel banner right">
				<div class="image filtered span-2-75" data-position="25% 25%">
					<img src="images/pic01.jpg" alt="" />
				</div>
			</section>

			<section class="panel banner left" id="one">
				<div class="content color4 span-3-75">
					<h1 class="major">Top 3</h1>
					<p>This is <strong>Ethereal</strong>, a free site template by AJ for <a href="https://html5up.net">HTML5 UP</a>. It’s fully responsive, built on HTML5 and CSS3, and released entirely for free under the Creative Commons license. Hope you dig it :)</p>
					<ul class="actions">
						<li><a href="#two" class="button primary color1 circle icon solid fa-angle-right">Take the test</a></li>
					</ul>
				</div>
				<div class="image filtered span-3-75" data-position="25% 25%">
					<img src="images/pic01.jpg" alt="" />
				</div>
			</section>

			<section class="panel banner left" id="two">
				<div class="content color2 span-3-75">
					<h1 class="major">Job</h1>
					<p>This is <strong>Ethereal</strong>, a free site template by AJ for <a href="https://html5up.net">HTML5 UP</a>. It’s fully responsive, built on HTML5 and CSS3, and released entirely for free under the Creative Commons license. Hope you dig it :)</p>
					<ul class="actions">
						<li><a href="profile" class="button primary color1 circle icon solid fa-angle-right">Take the test</a></li>
					</ul>
				</div>
				<div class="image filtered span-3-75" data-position="25% 25%">
					<img src="images/pic01.jpg" alt="" />
				</div>
			</section>

		</div>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>