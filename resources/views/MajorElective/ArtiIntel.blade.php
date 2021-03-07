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
    <link rel="stylesheet" href="../assets/css/main.css" />
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

        .container {
            max-width: 900px;
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

    <div class="navbar">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a href="#result">Test results</a>
        <a href="#test">Personality test</a>
        <a href="#home" class="active">Home</a>
        <i class="fa fa-user-circle">&nbsp;&nbsp;{{Auth::user()->name}}</i>
    </div>

    <!-- Page Wrapper -->
    <div id="page-wrapper">

        <!-- Wrapper -->
        <div id="wrapper">

            <section class="panel color1">
                <div class="intro joined">
                    <h2 class=" major">บันทึกข้อมูล <br>Major Elective</h2>
                    <p>โปรดคลิกรายชื่อวิชาที่ตรงกับ<br>Major Elective ของท่าน<br>หากไม่มีให้คลิกปุ่มถัดไป</p>

                </div>
                <div class="inner columns aligned">
                    <div class="span-5-25">
                        <form action="MajorElective/ArtiIntel/confirm">

                            <h3 class="major">Artificial Intelligence</h3>
                            <div class="container">
                                <ul class="ks-cboxtags">
                                    <li><input type="checkbox" id="checkboxOne" name="checkboxOne" value="261453"><label for="checkboxOne">Digital Image Processing</label></li>
                                    <li><input type="checkbox" id="checkboxTwo" name="checkboxTwo" value="261407"><label for="checkboxTwo">Fundamentals of Computation for Computer Engineers</label></li>
                                    <li><input type="checkbox" id="checkboxThree" name="checkboxThree" value="261456"><label for="checkboxThree">Introduction to Computational Intelligence for Computer Engineering</label></li>
                                    <li><input type="checkbox" id="checkboxFour" name="checkboxFour" value="261472"><label for="checkboxFour">Robotics</label></li>
                                    <li><input type="checkbox" id="checkboxFive" name="checkboxFive" value="261472"><label for="checkboxFive">Bioinformatics Programming</label></li>
                                    <li><input type="checkbox" id="checkboxSix" name="checkboxSix" value="261458"><label for="checkboxSix">Machine Vision</label></li>
                                    <li><input type="checkbox" id="checkboxSeven" name="checkboxSeven" value="261478"><label for="checkboxSeven">Principles of Control Systems</label></li>
                                    <li><input type="checkbox" id="checkboxEight" name="checkboxEight" value="261478"><label for="checkboxEight">Introduction to Neuro-Fuzzy Systems</label></li>
                                    <li><input type="checkbox" id="checkboxNine" name="checkboxNine" value="261473"><label for="checkboxNine">Computer-Aided Manufacturing</label></li>
                                    <li><input type="checkbox" id="checkboxTen" name="checkboxTen" value="6"><label for="checkboxTen">NLP</label></li>
                                    <input type="hidden" id="ID_result" name="ID_result" value={{$ID_result}}>
                                </ul>
                            </div>

                            <div class="align-right">
                                <h3>ถัดไป <button type="submit" class="button primary color1 circle icon solid fa-angle-right" id="next"></button></h3>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

        </div>

    </div>

    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>