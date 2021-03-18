<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>webPLE | Major Elective</title>
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

        .navbar i {
            float: left;
            margin: 15px;
            font-size: 23px;

        }

        .container {
            max-width: 1200px;
            font-family: 'Kanit', sans-serif;
            font-size: 14px;
        }

        ul.ks-cboxtags {
            list-style: none;
            padding: 20px;
        }

        ul.ks-cboxtags li {
            display: inline;
        }

        ul.ks-cboxtags li label {
            display: inline-block;
            background-color: rgba(255, 255, 255, .9);
            border: 2px solid rgba(139, 139, 139, .3);
            color: gray;
            border-radius: 8px;
            white-space: nowrap;
            margin: 5px 0px;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
            transition: all .2s;
        }

        ul.ks-cboxtags li label {
            padding: 8px 28px;
            cursor: pointer;
        }

        ul.ks-cboxtags li label::before {
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            font-family: "Font Awesome 5 Free";
            font-weight: 700;
            font-size: 12px;
            padding: 2px 4px 2px 2px;
            content: "\f067";
            transition: transform .3s ease-in-out;
        }

        ul.ks-cboxtags li input[type="checkbox"]:checked+label::before {
            content: "\f00c";
            transform: rotate(-360deg);
            transition: transform .3s ease-in-out;
        }

        ul.ks-cboxtags li input[type="checkbox"]:checked+label {
            border: 2px solid whitesmoke;
            background-color: #ffbb3e;
            color: black;
            transition: all .2s;
        }

        ul.ks-cboxtags li input[type="checkbox"] {
            display: absolute;
        }

        ul.ks-cboxtags li input[type="checkbox"] {
            position: absolute;
            opacity: 0;
        }

        ul.ks-cboxtags li input[type="checkbox"]:focus+label {
            border: 2px solid #e9a1ff;
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
        <a href="{{URL::to('/MajorElctive')}}" class="active">Major Elective</a>
        <a href="{{URL::to('/confirm')}}">Personality test</a> -->
        <a href="{{URL::to('/history')}}">History</a>
        <a href="{{URL::to('/home')}}">Home</a>
        <i class="fa fa-user-circle">&nbsp;&nbsp;{{Auth::user()->name}}</i>
    </div>

    <!-- Page Wrapper -->
    <div id="page-wrapper">

        <!-- Wrapper -->
        <div id="wrapper">
            <form action="MajorElective/confirm">
                <section class="panel color4-alt">
                    <div class="intro color4">
                        <h2 class=" major">บันทึกข้อมูล <br>Major Elective</h2>
                        <p>โปรดคลิกรายชื่อวิชาที่ตรงกับ<br>Major Elective ของท่าน
                        <p>
                    </div>
                    <div class="inner columns divided">
                        <div class="span-5-25">
                            <div class="fields">
                                <h3 class="major">Artificial Intelligence</h3>
                                <div class="container">
                                    <ul class="ks-cboxtags">
                                        <input type="hidden" id="ID_result" name="ID_result" value={{$ID_result}}>
                                        <li><input type="checkbox" id="checkboxOne" name="checkboxOne" value="261453"><label for="checkboxOne">Digital Image Processing</label></li>
                                        <li><input type="checkbox" id="checkboxTwo" name="checkboxTwo" value="261407"><label for="checkboxTwo">Fundamentals of Computation for Computer Engineers</label></li>
                                        <li><input type="checkbox" id="checkboxThree" name="checkboxThree" value="261456"><label for="checkboxThree">Introduction to Computational Intelligence for Computer Engineering</label></li>
                                        <li><input type="checkbox" id="checkboxFour" name="checkboxFour" value="261472"><label for="checkboxFour">Robotics</label></li>
                                        <li><input type="checkbox" id="checkboxFive" name="checkboxFive" value="261479"><label for="checkboxFive">Bioinformatics Programming</label></li>
                                        <li><input type="checkbox" id="checkboxSix" name="checkboxSix" value="261458"><label for="checkboxSix">Machine Vision</label></li>
                                        <li><input type="checkbox" id="checkboxSeven" name="checkboxSeven" value="261478"><label for="checkboxSeven">Principles of Control Systems</label></li>
                                        <li><input type="checkbox" id="checkboxEight" name="checkboxEight" value="269451"><label for="checkboxEight">Introduction to Neuro-Fuzzy Systems</label></li>
                                        <li><input type="checkbox" id="checkboxNine" name="checkboxNine" value="261473"><label for="checkboxNine">Computer-Aided Manufacturing</label></li>
                                        <li><input type="checkbox" id="checkboxTen" name="checkboxTen" value="6"><label for="checkboxTen">NLP</label></li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="span-5">
                            <h3 class="major">Computer Architecture and Organisation</h3>
                            <div class="container">
                                <ul class="ks-cboxtags">
                                    <li><input type="checkbox" id="checkboxeleven" name="checkboxeleven" value="261404"><label for="checkboxeleven">Advanced Computer Engineering Laboratory</label></li>
                                    <li><input type="checkbox" id="checkboxtwelve" name="checkboxtwelve" value="261421"><label for="checkboxtwelve">Computer Hardware Design</label></li>
                                    <li><input type="checkbox" id="checkboxthirteen" name="checkboxthirteen" value="261414"><label for="checkboxthirteen">Digital System Design</label></li>
                                    <li><input type="checkbox" id="checkboxfourteen" name="checkboxfourteen" value="261468"><label for="checkboxfourteen">System Analysis and Design for Computer Engineering</label></li>
                                    <li><input type="checkbox" id="checkboxfifteen" name="checkboxfifteen" value="261424"><label for="checkboxfifteen">Remote Monitoring and Control Systems</label></li>
                                    <li><input type="checkbox" id="checkboxfifteen" name="checkboxfortyseven" value="261410"><label for="checkboxfortyseven">Electronic Device for Computer Enginering</label></li>
                                </ul>
                            </div>
                        </div>

                        <div class="span-8-25">
                            <h3 class="major">Network and Security</h3>
                            <div class="container">
                                <ul class="ks-cboxtags">
                                    <li><input type="checkbox" id="checkboxsixteen" name="checkboxsixteen" value="269430"><label for="checkboxsixteen">Wireless and Broadband Computer Networks</label></li>
                                    <li><input type="checkbox" id="checkboxseventeen" name="checkboxseventeen" value="261435"><label for="checkboxseventeen">Broadband Communication Networks</label></li>
                                    <li><input type="checkbox" id="checkboxeighteen" name="checkboxeighteen" value="261438"><label for="checkboxeighteen">Fundamentals of Multiprotocol Label Switching</label></li>
                                    <li><input type="checkbox" id="checkboxnineteen" name="checkboxnineteen" value="261434"><label for="checkboxnineteen">Computer Network Design and Management</label></li>
                                    <li><input type="checkbox" id="checkboxtwenty" name="checkboxtwenty" value="269421"><label for="checkboxtwenty">Computer Network Traffic Analysis</label></li>
                                    <li><input type="checkbox" id="checkboxtwentyone" name="checkboxtwentyone" value="261470"><label for="checkboxtwentyone">Signal and Systems</label></li>
                                    <li><input type="checkbox" id="checkboxtwentytwo" name="checkboxtwentytwo" value="269432"><label for="checkboxtwentytwo">Peer-to-peer Systems</label></li>
                                    <li><input type="checkbox" id="checkboxtwentythree" name="checkboxtwentythree" value="261447"><label for="checkboxtwentythree">Network and Information Security</label></li>
                                    <li><input type="checkbox" id="checkboxtwentyfour" name="checkboxtwentyfour" value="261433"><label for="checkboxtwentyfour">Network Programming</label></li>
                                    <li><input type="checkbox" id="checkboxtwentyfive" name="checkboxtwentyfive" value="269431"><label for="checkboxtwentyfive">Wireless Sensor Networks</label></li>
                                    <li><input type="checkbox" id="checkboxtwentysix" name="checkboxtwentysix" value="261471"><label for="checkboxtwentysix">Advanced Digital Signal Processing</label></li>
                                    <li><input type="checkbox" id="checkboxtwentyseven" name="checkboxtwentyseven" value="261437"><label for="checkboxtwentyseven">Fundamentals of Queueing Theory for Computer Engineers</label></li>
                                    <li><input type="checkbox" id="checkboxtwentyeight" name="checkboxtwentyeight" value="261439"><label for="checkboxtwentyeight">Wireless Communications for Computer Engineering</label></li>
                                    <li><input type="checkbox" id="checkboxtwentynine" name="checkboxtwentynine" value="261430"><label for="checkboxtwentynine">Wireless Network</label></li>

                                </ul>
                            </div>
                        </div>

                        <div class="span-3">
                            <h3 class="major">Databases and Data Mining</h3>
                            <div class="container">
                                <ul class="ks-cboxtags">
                                    <li><input type="checkbox" id="checkboxthirty" name="checkboxthirty" value="261444"><label for="checkboxthirty">Advanced Database Systems</label></li>
                                    <li><input type="checkbox" id="checkboxthirtyone" name="checkboxthirtyone" value="261448"><label for="checkboxthirtyone">Data Mining for Computer Engineering</label></li>
                                    <li><input type="checkbox" id="checkboxthirtytwo" name="checkboxthirtytwo" value="261446"><label for="checkboxthirtytwo">Information Systems</label></li>
                                </ul>
                            </div>
                        </div>

                        <div class="span-3">
                            <h3 class="major">Computer Graphics and Visualization</h3>
                            <div class="container">
                                <ul class="ks-cboxtags">
                                    <li><input type="checkbox" id="checkboxthirtythree" name="checkboxthirtythree" value="261457"><label for="checkboxthirtythree">Digital Image and Video Compression</label></li>
                                    <li><input type="checkbox" id="checkboxthirtyfive" name="checkboxthirtyfive" value="2"><label for="checkboxthirtyfive">Game Development</label></li>
                                    <li><input type="checkbox" id="checkboxthirtysix" name="checkboxthirtysix" value="261465"><label for="checkboxthirtysix">Computer Graphics</label></li>
                                </ul>
                            </div>
                        </div>

                        <div class="span-5">
                            <h3 class="major">Software Engineering</h3>
                            <div class="container">
                                <ul class="ks-cboxtags">
                                    <li><input type="checkbox" id="checkboxthirtyseven" name="checkboxthirtyseven" value="3"><label for="checkboxthirtyseven">Advanced Project Management for ISNE</label></li>
                                    <li><input type="checkbox" id="checkboxthirtyeight" name="checkboxthirtyeight" value="5"><label for="checkboxthirtyeight">Risk Management in Software Project</label></li>
                                    <li><input type="checkbox" id="checkboxthirtynine" name="checkboxthirtynine" value="4"><label for="checkboxthirtynine">Mobile Application Development</label></li>
                                    <li><input type="checkbox" id="checkboxforty" name="checkboxforty" value="269462"><label for="checkboxforty">HCI</label></li>
                                    <li><input type="checkbox" id="checkboxfortyone" name="checkboxfortyone" value="269461"><label for="checkboxfortyone">Personal Software Process Improvement</label></li>
                                    <li><input type="checkbox" id="checkboxfortytwo" name="checkboxfortytwo" value="261449"><label for="checkboxfortytwo">Software Testing for Computer Engineering</label></li>
                                    <li><input type="checkbox" id="checkboxfortythree" name="checkboxfortythree" value="261469"><label for="checkboxfortythree">Software Project Management for Computer Engineering</label></li>
                                </ul>
                            </div>
                        </div>

                        <div class="span-2">
                            <h3 class="major">Scientific Computing and Simulation</h3>
                            <div class="container">
                                <ul class="ks-cboxtags">
                                    <li><input type="checkbox" id="checkboxfortyfive" name="checkboxfortyfive" value="261406"><label for="checkboxfortyfive">Basic Compiler Design</label></li>
                                </ul>
                            </div>
                        </div>

                        <div class="span-3">
                            <h3 class="major">Concurrent, parallel and distributed systems</h3>
                            <div class="container">
                                <ul class="ks-cboxtags">
                                    <li><input type="checkbox" id="checkboxfortysix" name="checkboxfortysix" value="261411"><label for="checkboxfortysix">Parallel Processing and Distributed Systems</label></li>
                                </ul>
                            </div>
                        </div>

                        <div class="span-1">
                            <h2>ส่งคำตอบ</h2>
                            <button type="submit" class="button primary color1 circle icon solid fa-angle-right">ส่งคำตอบ</button>
                        </div>

                    </div>
                </section>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>