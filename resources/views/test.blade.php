<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>webPLE | Test</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
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
		<a href="{{URL::to('/confirm')}}" class="active">Personality test</a> -->
		<a href="{{URL::to('/history')}}">History</a>
		<a href="{{URL::to('/home')}}">Home</a>
		<i class="fa fa-user-circle">&nbsp;&nbsp;{{Auth::user()->name}}</i>
	</div>


	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Panel -->
			<form action="confirm" onSubmit="JavaScript:return fncSubmit();">

				<div class="panel color2-alt" id="one">
					<div class="intro color0">
						<h1 class="major">1</h1>
						<h2>ถ้าคุณอยู่กับกลุ่มคนคุณมักจะ...</h2>
					</div>
					<div class="inner columns divided">
						<div class="content span-2">
							<div class="action" href="#two">
								<input type="radio" id="control_a1" name="select1" value="a1" class="radio" id="one">
								<label for="control_a1">
									<h3>A. มีส่วนร่วมในการพูดคุย</h3>
									<img src="images/option/a1.png" alt="" />
								</label>
							</div>
						</div>
						<div class="content span-2">
							<div class="action" href="#two">
								<input type="radio" id="control_b1" name="select1" value="b1">
								<label for="control_b1">
									<h3>B. คุยเฉพาะคนในกลุ่มที่รู้จักดี</h3>
									<img src="images/option/b1.png" alt="" />
								</label>
							</div>
						</div>
					</div>


					<div class="panel color4-alt" id="two">
						<div class="intro color4">
							<h1 class="major">2</h1>
							<h2>คุณมักจะเข้ากันได้ดีกับคนแบบไหน</h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a2" name="select2" value="a2" href="#tree">
								<label for="control_a2">
									<h3>A. คนที่ยึดติดกับความเป็นจริง</h3>
									<img src="images/option/a2.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b2" name="select2" value="b2">
								<label for="control_b2">
									<h3>B. คนที่เพ้อฝัน ช่างจิตนาการ</h3>
									<img src="images/option/b2.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color2-alt">
						<div class="intro color0">
							<h1 class="major">3</h1>
							<h2>คำใดที่เข้ากับคุณมากกว่ากัน</h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a3" name="select3" value=a3>
								<label for="control_a3">
									<h3>A. วิเคราะห์</h3>
									<img src="images/option/a3.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b3" name="select3" value="b3">
								<label for="control_b3">
									<h3>B. เห็นใจ</h3>
									<img src="images/option/b3.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color4-alt">
						<div class="intro color4">
							<h1 class="major">4</h1>
							<h2>การทำตามกำหนดเวลา เป็นสิ่งที่...</h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a4" name="select4" value="a4">
								<label for="control_a4">
									<h3>A. ดึงดูดคุณ</h3>
									<img src="images/option/a4.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b4" name="select4" value=b4>
								<label for="control_b4">
									<h3>B. กดดันคุณ</h3>
									<img src="images/option/b4.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color2-alt">
						<div class="intro color0">
							<h1 class="major">5</h1>
							<h2>คุณรู้สึกอย่างไรเมื่อต้องพบกับคนแปลกหน้า</h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a5" name="select5" value="a5">
								<label for="control_a5">
									<h3>A. รู้สึกสบายๆ</h3>
									<img src="images/option/a5.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b5" name="select5" value="b5">
								<label for="control_b5">
									<h3>B. รู้สึกว่าเป็นสิ่งที่ต้องใช้ความพยายามมาก</h3>
									<img src="images/option/b5.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color4-alt">
						<div class="intro color4">
							<h1 class="major">6</h1>
							<h2>ถ้าคุณเป็นครู คุณอยากจะสอนหลักสูตรเกี่ยวกับอะไร</h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a6" name="select6" value="a6">
								<label for="control_a6">
									<h3>A. หลักสูตรที่เป็นข้อเท็จจริง</h3>
									<img src="images/option/a6.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b6" name="select6" value="b6">
								<label for="control_b6">
									<h3>B. หลักสูตรที่เป็นทฤษฎี</h3>
									<img src="images/option/b6.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color2-alt">
						<div class="intro color0">
							<h1 class="major">7</h1>
							<h2>คำใดดึงดูดใจคุณมากกว่ากัน</h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a7" name="select7" value="a7">
								<label for="control_a7">
									<h3>A. การมองการณ์การไกล</h3>
									<img src="images/option/a7.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b7" name="select7" value="b7">
								<label for="control_b7">
									<h3>B. ความเห็นอกเห็นใจ</h3>
									<img src="images/option/b7.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color4-alt">
						<div class="intro color4">
							<h1 class="major">8</h1>
							<h2>คุณชอบที่จะ...</h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a8" name="select8" value="a8">
								<label for="control_a8">
									<h3>A. ตั้งกำหนดการเอาไว้ล่วงหน้า</h3>
									<img src="images/option/a8.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b8" name="select8" value="b8">
								<label for="control_b8">
									<h3>B. มีอิสระที่จะทำอะไรก็ได้เมื่อถึงเวลา</h3>
									<img src="images/option/b8.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color2-alt">
						<div class="intro color0">
							<h1 class="major">9</h1>
							<h2>คุณเป็นคนที่... </h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a9" name="select9" value="a9">
								<label for="control_a9">
									<h3>A. ง่ายที่จะทำความรู้จัก</h3>
									<img src="images/option/a9.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b9" name="select9" value="b9">
								<label for="control_b9">
									<h3>B. ยากที่จะทำความรู้จัก</h3>
									<img src="images/option/b9.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color4-alt">
						<div class="intro color4">
							<h1 class="major">10</h1>
							<h2>ใครคือคนที่คุณจะยกย่อง</h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a10" name="select10" value="a10">
								<label for="control_a10">
									<h3>A. คนที่มีสามัญสำนึก</h3>
									<img src="images/option/a10.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b10" name="select10" value="b10">
								<label for="control_b10">
									<h3>B. คนที่มีวิสัยทัศน์</h3>
									<img src="images/option/b10.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color2-alt">
						<div class="intro color0">
							<h1 class="major">11</h1>
							<h2>คำใดที่ดึงดูดใจคุณมากกว่ากัน</h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a11" name="select11" value="a11">
								<label for="control_a11">
									<h3>A. มั่นคง</h3>
									<img src="images/option/a11.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b11" name="select11" value="b11">
								<label for="control_b11">
									<h3>B. อ่อนโยน</h3>
									<img src="images/option/b11.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color4-alt">
						<div class="intro color4">
							<h1 class="major">12</h1>
							<h2>การทำรายการสิ่งที่คุณต้องทำในช่วงสุดสัปดาห์ เป็นสิ่งที่...</h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a12" name="select12" value="a12">
								<label for="control_a12">
									<h3>A. น่าดึงดูดใจ</h3>
									<img src="images/option/a12.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b12" name="select12" value="b12">
								<label for="control_b12">
									<h3>B. คุณรู้สึกเฉยๆ</h3>
									<img src="images/option/b12.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color2-alt">
						<div class="intro color0">
							<h1 class="major">13</h1>
							<h2>คุณมีแนวโน้มที่จะมี... </h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a13" name="select13" value="a13">
								<label for="control_a13">
									<h3>A. มิตรภาพในวงกว้างกับผู้คนที่หลากหลาย</h3>
									<img src="images/option/b13.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b13" name="select13" value="b13">
								<label for="control_b13">
									<h3>B. มิตรภาพที่ลึกซึ้งกับคนไม่กี่คน</h3>
									<img src="images/option/a13.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color4-alt">
						<div class="intro color4">
							<h1 class="major">14</h1>
							<h2>คนแบบไหนที่คุณอยากเป็นเพื่อนด้วย</h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a14" name="select14" value="a14">
								<label for="control_a14">
									<h3>A. คนที่มีเหตุผล</h3>
									<img src="images/option/a14.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b14" name="select14" value="b14">
								<label for="control_b14">
									<h3>B. คนที่แนวคิดใหม่เสมอ</h3>
									<img src="images/option/b14.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color2-alt">
						<div class="intro color0">
							<h1 class="major">15</h1>
							<h2>คำใดที่ดึงดูดใจคุณมากกว่ากัน</h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a15" name="select15" value="a15">
								<label for="control_a15">
									<h3>A. ความคิด</h3>
									<img src="images/option/a15.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b15" name="select15" value="b15">
								<label for="control_b15">
									<h3>B. ความรู้สึก</h3>
									<img src="images/option/b15.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color4-alt">
						<div class="intro color4">
							<h1 class="major">16</h1>
							<h2>เมื่อคุณตกลงที่จะทำบางสิ่งบางอย่างล่วงหน้า คุณพบว่ามันรู้สึก..</h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a16" name="select16" value="a16">
								<label for="control_a16">
									<h3>A. รู้สึกดีที่สามารถทำได้ตามแผนที่วางไว้</h3>
									<img src="images/option/a16.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b16" name="select16" value="b16">
								<label for="control_b16">
									<h3>B. รู้สึกไม่ค่อยพอใจที่โดนผูกมัด</h3>
									<img src="images/option/b16.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color2-alt">
						<div class="intro color0">
							<h1 class="major">17</h1>
							<h2>คุณเป็นอย่างไรในงานปาร์ตี้</h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a17" name="select17" value="a17">
								<label for="control_a17">
									<h3>A. สนุกสนานอยู่เสมอ</h3>
									<img src="images/option/a17.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b17" name="select17" value="b17">
								<label for="control_b17">
									<h3>B. บางครั้งก็เบื่อ</h3>
									<img src="images/option/b17.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color4-alt">
						<div class="intro color4">
							<h1 class="major">18</h1>
							<h2>คุณอยากได้รับการพิจารณาว่าเป็น...</h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a18" name="select18" value="a18">
								<label for="control_a18">
									<h3>A. คนที่เอาการเอางาน</h3>
									<img src="images/option/a18.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b18" name="select18" value="b18">
								<label for="control_b18">
									<h3>B. คนที่เฉลียวฉลาด</h3>
									<img src="images/option/b18.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color2-alt">
						<div class="intro color0">
							<h1 class="major">19</h1>
							<h2>คำชมเชยใดที่ทำให้คุณรู้สึกดี</h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a19" name="select19" value="a19">
								<label for="control_a19">
									<h3>A. คุณเป็นคนมีเหตุผล</h3>
									<img src="images/option/a19.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b19" name="select19" value="b19">
								<label for="control_b19">
									<h3>B. คุณเป็นคนที่จริงใจ</h3>
									<img src="images/option/b19.png" alt="" />
								</label>
							</div>
						</div>
					</div>

					<div class="panel color4-alt">
						<div class="intro color4">
							<h1 class="major">20</h1>
							<h2>คุณปรับตัวกับสิ่งใดได้ยากกว่ากัน</h2>
						</div>
						<div class="inner columns divided">
							<div class="content span-2">
								<input type="radio" id="control_a20" name="select20" value="a20">
								<label for="control_a20">
									<h3>A. สิ่งที่มีการเปลี่ยนแปลงอย่างสม่ำเสมอ</h3>
									<img src="images/option/a20.png" alt="" />
								</label>
							</div>
							<div class="content span-2">
								<input type="radio" id="control_b20" name="select20" value="b20">
								<label for="control_b20">
									<h3>B. ความซ้ำซาก จำเจ</h3>
									<img src="images/option/b20.png" alt="" />
								</label>
							</div>
						</div>
					</div>
					<div class="panel banner right">
						<div class="content color0 span-1-75">
							<h2>ส่งคำตอบ</h2>
							<button type="submit" class="button primary color1 circle icon solid fa-angle-right" onclick="fncSubmit()">ส่งคำตอบ</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/main.js"></script>

	<script type="text/javascript">
		function fncSubmit() {

			if (document.getElementsByName('select1').checked == false && document.getElementsByName('select2').checked == false) {
				alert('PLEASE CHECK TRUE');
				return false;
			}
		}
	</script>

</body>

</html>