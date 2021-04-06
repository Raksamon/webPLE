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
	</style>
</head>


<body class="is-preload">

	<div class="navbar align-right">
		<a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			@csrf
		</form>
		<!-- <a href="/result">Result</a>
		<a href="{{URL::to('/MajorElctive')}}">Major Elective</a>
		<a href="{{URL::to('/test')}}">Personality test</a> -->
		<a href="{{URL::to('/history')}}">History</a>
		<a href="{{URL::to('/home')}}" class="active">Home</a>
		<i class="fa fa-user-circle">&nbsp;&nbsp;{{Auth::user()->name}}</i>
	</div>

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Wrapper -->
		<div id="wrapper">

			<section class="panel spotlight medium right">
				<div class="content span-10">
					<h1 class="major">What is&nbsp;&nbsp; M B T I &nbsp;&nbsp;?</h1>
					<p>MBTI คือ ตัวชี้วัดรูปแบบบุคลิกภาพที่ติดตัวมาแต่กำเนิด โดย Myers และ Briggs พัฒนาจากทฤษฎี "Personality Type" จากนักจิตวิทยา ชาวสวิตเซอร์แลนด์ Carl G. Jung (1875-1961) ซึ่งเชื่อว่ามนุษย์แต่ละคนไม่ได้แตกต่างกันอย่าง สะเปสะปะแต่มีรูปแบบของพฤติกรรมที่แสดงว่าเราเป็น Type ใด สอดคล้องกับถ้อยคำของนักมานุษยวิทยา Clyde Kluckhohn ที่กล่าวไว้ว่า
					<blockquote>“มนุษย์ทุกคนนั้นคล้ายคลึงกับมนุษย์คนอื่น ๆ เหมือนกับมนุษย์บางคน แต่ก็ไม่เหมือนมนุษย์คนใดเลย”</blockquote>
					</p>
					<ul class="actions">
						<li><a href="#first" class="button primary color1 circle icon solid fa-angle-right">Take the test</a></li>
					</ul>
				</div>
				<div class="image filtered tinted" data-position="top left">
					<img src="images/pic02.jpg" alt="" />
				</div>
			</section>

			<section class="panel banner right" id="first">
				<div class="content color0 span-5">
					<h1 class="major">What is the&nbsp;&nbsp; M B T I &nbsp;&nbsp;for ?</h1>
					<p>
					<blockquote>"EQ มีความสำคัญมากเป็น 2 เท่าของ IQ"</blockquote>
					MBTI คือเครื่องมือในการนำมาพัฒนา Emotional Intelligence หรือความฉลาดทางอารมณ์
					โดยเน้นสร้างความเข้าใจพื้นฐานเกี่ยวกับการตระหนักรู้ในตัวเองและการเข้าใจผู้อื่น
					ซึ่งจะเป็นแผนที่ที่นำไปสู่ความสามารถในการบริหารจัดการตัวเองและพัฒนาตัวเอง
					รวมไปถึงการพัฒนาทักษะในการเข้าสังคมที่ดีด้วย</p>
					<ul class="actions">
						<li><a href="#secound" class="button primary color1 circle icon solid fa-angle-right">Take the test</a></li>
					</ul>
				</div>
			</section>

			<!-- Panel -->
			<section class="panel color1-alt" id="secound">
				<div class="intro color4">
					<h2 class="major">What is the MBTI measure ?</h2>
					<p>MBTI เป็น Type Indicator ดังนั้นสิ่งที่ MBTI จะวัดก็คือ รูปแบบบุคลิกภาพ (Personality) ที่ติดตัวมาแต่กำเนิด ผ่านการหาความพึงใจ (Preference)<br> 4 ตัวจาก 8 ตัว ซึ่งเป็นสิ่งที่เราถนัดเป็นธรรมชาติมากกว่า </p>
					<br>

					<div class="actions">
						<div class="align-left">


							<a href="Test" class="button primary color1 circle icon solid fa-angle-right"></a>
							<h3>ทำแบบทดสอบ</h3>

						</div>
					</div>
				</div>
				<div class="inner columns divided">
					<ul class="content span-2-75">
						<li><strong>E | I</strong>&nbsp  Extraversion | Introvertsion:<br>
							ช่วยเรื่องการสื่อสาร การสร้างความไว้วางใจ และการดูแลพลังงานของตัวเอง</li><br>
						<li><strong>S | N</strong>&nbsp  Sensing | iNtuition:<br>
							ช่วยเรื่องการเข้าใจเรื่องการให้คุณค่าข้อมูลและการมองภาพที่แตกต่าง การใช้ภาษา (การสื่อสาร) และโฟกัสในTimeline ของแต่ละคน </li><br>
						<li><strong>T | F</strong>&nbsp  Thinking | Feeling:<br>
							ช่วยเรื่องการสร้างบรรยากาศในที่ทำงาน การได้รับ Feedback การให้ค่าของเหตุผล</li><br>
						<li><strong>J | P</strong>&nbsp  Judging-Perceiving:<br>
							ช่วยเรื่องการบริหารจัดการการทำงาน การเข้าใจมุมมองที่มีต่อการปรับตัวเข้าหาโลกภายนอกและทัศนคติที่ต่างกัน</li>
					</ul>
					<div class="content span-2-75">
						<img src="images/16.png" alt="" />
					</div>
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