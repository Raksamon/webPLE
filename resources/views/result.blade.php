<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>webPLE | Result</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="../assets/css/main.css" />
	<link rel="shortcut icon" href="images/picon.ico">
	<noscript>
		<link rel="stylesheet" href="../assets/css/noscript.css" />
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

		.dropdown {
			float: left;
			overflow: hidden;
		}

		.dropdown .dropbtn {
			font-size: 16px;
			border: none;
			outline: none;
			color: white;
			padding: 0px 15px;
			font-family: 'Kanit', sans-serif;
			margin: 0;
		}

		.dropdown:hover .dropbtn {
			background-color: #e37b7c;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 190px;
			box-shadow: 0px 8px 8px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
		}

		.dropdown-content a {
			float: none;
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			text-align: left;
		}

		.dropdown-content a:hover {
			background-color: #ddd;
		}

		.dropdown:hover .dropdown-content {
			display: block;
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
		<!-- <a href="/result" class="active">Result</a>
		<a href="{{URL::to('/MajorElctive')}}">Major Elective</a>
		<a href="{{URL::to('/confirm')}}">Personality test</a> -->
		<a href="{{URL::to('/history')}}">History</a>
		<a href="{{URL::to('/home')}}">Home</a>
		<i class="fa fa-user-circle">&nbsp;&nbsp;{{Auth::user()->name}}</i>
	</div>

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Panel (Banner) -->
			<section class="panel color2-alt">
				<div class="inner columns divided">
					<div class="span-4">
						<h1 class="major">"{{$personalityKey}}" type<br>
							@foreach($personalityType as $type)
							{{$type->title}}
						</h1>
						<p>{{$type->description}}</p>
						@endforeach
						<br>
						<ul class="actions">
							<li><a href="#one" class="button primary color1 circle icon solid fa-angle-right">Take the test</a></li>
						</ul>
					</div>
					<div class="span-4">
						<h1 class="major">อาชีพที่เหมาะสมกับลักษณะบุคลิกภาพ</h1>
						<br>
						<blockquote>
							<h3>{{$joboftype}}</h3>
						</blockquote>
						<br>
						<!-- <ul class="actions">
							<li><a href="#two" class="button primary color1 circle icon solid fa-angle-right">Take the test</a></li>
						</ul> -->
					</div>
				</div>
				<!-- <div class="image filtered span-1-75" data-position="25% 25%">
					<img src="../images/pic01.jpg" alt="" />
				</div> -->
			</section>

			<section class="panel banner left" id="one">
				<div class="content color4 span-4-25">
					<h1 class="major">หมวดวิชาที่คุณเรียนมากที่สุด</h1>
					<br>
					<blockquote>
						<h3>{{$rank1}}</h3>
						<h3>{{$rank2}}</h3>
					</blockquote>

				</div>
				<!-- <div class="image filtered span-3-75" data-position="25% 25%">
					<img src="../images/pic01.jpg" alt="" />
				</div> -->
			</section>

			@if($job != null && $part != null)
			<section class="panel banner left" id="two">
				<div class="content color1 span-4-75">
					<h1 class="major">อาชีพที่ได้จากการประมวลผลจาก<br>วิชาเลือกและลักษณะบุคลิกภาพ</h1>
					<br>
					<blockquote>
						<h1>{{$job}}</h1>
						<h3>สายงานที่เกี่ยวข้อง : <br>{{$part}}</h3>
					</blockquote>
				</div>
				<!-- <div class="image filtered span-3-75" data-position="25% 25%">
					<img src="../images/pic01.jpg" alt="" />
				</div> -->
			</section>
			@endif

			<!-- <section class="panel banner left">
				<div class="content color1 span-2">
					<div class="dropdown">
						<button class="dropbtn">ดูผลลัพธ์ครั้งอื่นๆ
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
							<a href="#">ผลลัพธ์ครั้งที่ 1</a>
							<a href="#">ผลลัพธ์ครั้งที่ 2</a>
							<a href="#">ผลลัพธ์ครั้งที่ 3</a>
						</div>
					</div>
				</div>
			</section> -->

		</div>

	</div>

	<!-- Scripts -->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/browser.min.js"></script>
	<script src="../assets/js/breakpoints.min.js"></script>
	<script src="../assets/js/main.js"></script>

</body>

</html>