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
            outline: 5px solid rgba(0, 0, 0);
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
                    <p>โปรดคลิกรายชื่อวิชาที่ตรงกับ<br>Major Elective ของท่าน</<i class="ri-home-3-fill">
                    </p>

                </div>
                <div class="inner columns aligned">
                    <div class="span-8-75">
                        <form action="netSecurity">
                            <h3 class="major">Network and Security</h3>
                            <ul class="actions">
                                <li><input type="button" id="button0" value="Wireless and Broadband Computer Networks" class="button large primary color2"></li>
                                <li><input type="button" id="button1" value="Broadband Communication Networks" class="button large primary color2"></li>
                                <li><input type="button" id="button2" value="Fundamentals of Multiprotocol Label Switching" class="button large primary color2"></li>
                            </ul>
                            <ul class="actions">
                                <li><input type="button" id="button3" value="Computer Network Traffic Analysis" class="button large primary color2"></li>
                                <li><input type="button" id="button4" value="Computer Network Design and Management" class="button large primary color2"></li>
                                <li><input type="button" id="button5" value="Signal and Systems" class="button large primary color2"></li>
                                <li><input type="button" id="button6" value="Peer-to-peer Systems" class="button large primary color2"></li>
                            </ul>
                            <ul class="actions">
                                <li><input type="button" id="button7" value="Network and Information Security" class="button large primary color2"></li>
                                <li><input type="button" id="button8" value="Network Programming" class="button large primary color2"></li>
                                <li><input type="button" id="button9" value="Wireless Sensor Networks" class="button large primary color2"></li>
                                <li><input type="button" id="button10" value="Advanced Digital Signal Processing" class="button large primary color2"></li>
                            </ul>
                            <ul class="actions">
                                <li><input type="button" id="button11" value="Fundamentals of Queueing Theory for Computer Engineers" class="button large primary color2"></li>
                                <li><input type="button" id="button12" value="Wireless Communications for Computer Engineering" class="button large primary color2"></li>
                                <li><input type="button" id="button13" value="Wireless Network" class="button large primary color2"></li>
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