<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #120078, #2f1eff);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .auth-wrapper {
            width: 100%;
            max-width: 1200px;
            background: rgba(255, 255, 255, .08);
            backdrop-filter: blur(12px);
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .25);
        }

        .left-side {
            background: #fff;
            padding: 70px 60px;
        }

        .logo {
            font-size: 34px;
            font-weight: 700;
            color: #2f1eff;
        }

        .main-heading {
            font-size: 40px;
            font-weight: 700;
            line-height: 1.2;
            color: #111827;
            margin-bottom: 20px;
        }

        .shape-box {
            display: flex;
            gap: 25px;
            align-items: end;
            margin-bottom: 60px;
        }

        .shape {
            background: linear-gradient(135deg, #29d9d5, #2f1eff);
            border-radius: 30px;
        }

        .shape-1 {
            width: 120px;
            height: 120px;
        }

        .shape-2 {
            width: 220px;
            height: 220px;
        }

        .right-side {
            padding: 70px 60px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            background:
                radial-gradient(circle at top right,
                    rgba(255, 255, 255, .25),
                    transparent 30%),
                linear-gradient(135deg, #120078, #2f1eff);
        }

        .auth-box {
            width: 100%;
            max-width: 380px;
        }

        .auth-title {
            font-size: 40px;
            font-weight: 700;
            line-height: 1;
            margin-bottom: 15px;
        }

        .auth-subtitle {
            color: rgba(255, 255, 255, .8);
            margin-bottom: 35px;
        }

        .form-label {
            color: rgba(255, 255, 255, .8);
            font-size: 14px;
        }

        .form-control {
            background: transparent;
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, .4);
            border-radius: 0;
            color: #fff;
            padding-left: 0;
        }

        .form-control:focus {
            background: transparent;
            box-shadow: none;
            border-color: #fff;
            color: #fff;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, .5);
        }

        .btn-submit {
            background: #fff;
            color: #2f1eff;
            border-radius: 50px;
            padding: 12px;
            font-weight: 600;
            border: none;
            transition: .3s;
        }

        .btn-submit:hover {
            background: #2f1eff;
            color: #fff;
        }

        .bottom-links {
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
        }

        .bottom-links a {
            text-decoration: none;
            color: #111827;
            font-size: 14px;
            font-weight: 500;
        }

        .auth-link {
            color: rgba(255, 255, 255, .85);
            font-size: 14px;
        }

        .invalid-tooltip {
            background: #dc3545;
            font-size: 13px;
        }

        @media(max-width:991px) {

            .left-side {
                display: none;
            }

            .right-side {
                padding: 50px 30px;
            }

            .auth-title {
                font-size: 42px;
            }
        }
    </style>

</head>

<body>

    <div class="auth-wrapper">
        <div class="row g-0">

            <!-- Left -->
            <div class="col-lg-7">

                <div class="left-side h-100">

                    <div class="logo">
                        AuthNova
                    </div>

                    <h1 class="main-heading">
                        @yield('heading')
                    </h1>

                    <div class="shape-box">
                        <div class="shape shape-1"></div>
                        <div class="shape shape-2"></div>
                    </div>
                    <div class="bottom-links">
                        <a href="#">Security</a>
                        <a href="#">Data Protection</a>
                        <a href="#">Exchange Rates</a>
                        <a href="#">Contact</a>
                        <a href="#">Help</a>
                    </div>

                </div>

            </div>

            <!-- Right -->
            <div class="col-lg-5">

                <div class="right-side h-100">

                    <div class="auth-box">

                        @yield('content')

                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
            .forEach(el => new bootstrap.Tooltip(el));
    </script>

</body>

</html>
