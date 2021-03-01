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
        input[type="button"] {
            min-width: 100px;
            display: block;
        }

        .highlighted {
            background-color: black;
            outline: 4px solid rgba(0, 0, 0);
        }

        .highlighted:active {
            background-color: #ffe4b4;
        }
    </style>
</head>

<body class="is-preload">

    <!-- Page Wrapper -->
    <div id="page-wrapper">

        <!-- Wrapper -->
        <div id="wrapper">

            <section class="panel color1">
                <div class="intro joined"">
                    <h2 class=" major">บันทึกข้อมูล <br>Major Elective</h2>
                    <p>โปรดคลิกรายชื่อวิชาที่ตรงกับ<br>Major Elective ของท่าน<br>หากไม่มีให้คลิกปุ่มถัดไป</p>

                </div>
                <div class="inner columns aligned">
                    <div class="span-5-75">
                        <form action="ArtiIntel">
                            <h3 class="major">Artificial Intelligence</h3>
                            <ul class="actions">
                                <li><input type="button" id="button0" value="Digital Image Processing" class="button large primary color2"></li>
                                <li><input type="button" id="button1" value="Fundamentals of Computation for Computer Engineers" class="button large primary color2"></li>
                            </ul>
                            <ul class="actions">
                                <li><input type="button" id="button2" value="Introduction to Computational Intelligence for Computer Engineering" class="button large primary color2"></li>
                                <li><input type="button" id="button3" value="Robotics" class="button large primary color2"></li>
                            </ul>
                            <ul class="actions">
                                <li><input type="button" id="button4" value="Machine Vision" class="button large primary color2"></li>
                                <li><input type="button" id="button5" value="Bioinformatics Programming" class="button large primary color2"></li>
                                <li><input type="button" id="button6" value="Principles of Control Systems" class="button large primary color2"></li>
                            </ul>
                            <ul class="actions">
                                <li><input type="button" id="button7" value="Introduction to Neuro-Fuzzy Systems" class="button large primary color2"></li>
                                <li><input type="button" id="button8" value="Computer-Aided Manufacturing" class="button large primary color2"></li>
                                <li><input type="button" id="button9" value="NLP" class="button large primary color2"></li>
                            </ul>
                         
                            <div class="align-right">
                                <h3>ถัดไป <button type="submit" class="button primary color1 circle icon solid fa-angle-right" id="check-buttons"></button></h3>
                            </div>
                        </form>
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

    <script type="text/javascript">
        let buttons = document.querySelectorAll('input[type="button" ]');
        let buttonData = Array.from(buttons).map((el, i) => {
            el.addEventListener('click', () => {
                const clicked = !buttonData[i].clicked;
                buttonData[i].clicked = clicked;
                if (clicked) {
                    el.classList.add('highlighted');
                } else {
                    el.classList.remove('highlighted');
                }
            });
            return {
                element: el,
                clicked: false
            }
        });

        buttonData.forEach((btn, i) => {

        });

        document.getElementById('check-buttons').addEventListener('click', () => {
            buttonData.forEach((btn, i) => {
                console.log("button:", btn.element.id, "is highlighted?", btn.clicked);
            });
        });
    </script>

</body>

</html>