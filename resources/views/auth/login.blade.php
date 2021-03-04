<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>webPLE | Login</title>
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
                <div class="image filtered span-3" data-position="25% 25%">
                    <img src="images/signin-image.jpg" alt="" />
                </div>
                <div class="content color0 span-5">
                    <div class="container">
                        <div class="sign-in">
                            <div class="container">
                                <div class="signin-content">
                                    <div class="signin-form">
                                        <h2 class="form-title">L o g i n</h2>
                                        <form method="POST" class="register-form" id="login-form" action="{{route('login')}}">
                                            <div class="form-group">
                                            @csrf
                                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                                <input type="email" id="email" placeholder="Your Email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                                <input type="password" id="your_pass" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <br>
                                            <div class="form-group form-button">
                                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                                            </div>
                                        </form>
                                        <a href="register" class="signup-image-link">Create an account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- sweet 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script src="js_login/main.js"></script>
    @if (Session('success'))
    <script type="text/javascript">
        Swal.fire({
            position: 'top',
            icon: 'success',
            title: 'ลงทะเบียนเรียบร้อยแล้ว',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
    @endif

</body>

</html>