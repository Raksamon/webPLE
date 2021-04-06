<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>webPLE | History</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css"/>
	<link rel="shortcut icon" href="images/picon.ico">
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

		.navbar i {
			float: left;
			margin: 15px;
			font-size: 23px;

		}

		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			transition: 0.3s;
			width: 100%;
		}

		.card:hover {
			box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
		}

		.container {
			padding: 2px 16px;
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
		<a href="{{URL::to('/history')}}" class="active">History</a>
		<a href="{{URL::to('/home')}}">Home</a>
		<i class="fa fa-user-circle">&nbsp;&nbsp;{{Auth::user()->name}}</i>
	</div>

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Wrapper -->
		<div id="wrapper">

			@foreach($hi as $index => $h)
			<section class="panel banner">
				<div class="content color0 span-8">
					<h4><b>ผลครั้งที่ {{$index+1}}</b></h4>
					<h2>Personality Type: {{$h->type}}</h2>
					<p><b>ลักษณะบุคลิกภาพ:</b> {{$h->description}}</p>
					<p><b>อาชีพที่เหมาะสมกับบุคลิกภาพ:</b><br> {{$h->job}}</p>
					<blockquote>
					<h2>อาชีพจากการทำนาย : {{$h->predictJob}}</h2>
					<h3>สางานที่เกี่ยวข้อง : {{$h->jobPart}}</h3>
					</blockquote>
				</div>
			</section>
			@endforeach
		</div>
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>