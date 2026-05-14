<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AuthNova - Modern Laravel Authentication System</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f5f7fb;
            overflow-x: hidden;
        }

        :root {
            --primary: #120078;
            --secondary: #2f1eff;
            --dark: #0f172a;
            --light: #f8fafc;
        }

        /* Navbar */

        .navbar {
            padding: 20px 0;
            background: transparent;
        }

        .navbar-brand {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary);
        }

        .nav-btn {
            padding: 10px 22px;
            border-radius: 14px;
            font-weight: 500;
        }

        /* Hero */

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background:
                linear-gradient(135deg,
                    #0f172a 0%,
                    #120078 50%,
                    #2f1eff 100%);
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, .08);
            border-radius: 50%;
            top: -120px;
            right: -120px;
        }

        .hero::after {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, .05);
            border-radius: 50%;
            bottom: -120px;
            left: -120px;
        }

        .hero-title {
            font-size: 62px;
            font-weight: 700;
            line-height: 1.2;
        }

        .hero-text {
            color: rgba(255, 255, 255, .8);
            font-size: 18px;
            margin: 25px 0;
        }

        .hero-btn {
            padding: 14px 30px;
            border-radius: 16px;
            font-weight: 600;
        }

        .glass-card {
            background: rgba(255, 255, 255, .08);
            border: 1px solid rgba(255, 255, 255, .12);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            padding: 40px;
        }

        /* Features */

        .section {
            padding: 100px 0;
        }

        .section-title {
            font-size: 42px;
            font-weight: 700;
        }

        .section-subtitle {
            color: #64748b;
            max-width: 700px;
            margin: auto;
        }

        .feature-card {
            background: #fff;
            border-radius: 28px;
            padding: 35px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, .04);
            transition: .3s;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-8px);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            border-radius: 22px;
            background: rgba(47, 30, 255, .1);
            color: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin-bottom: 25px;
        }

        /* Stats */

        .stats-section {
            background: linear-gradient(135deg, #120078, #2f1eff);
            color: #fff;
            border-radius: 40px;
            padding: 60px;
        }

        .stats-box h2 {
            font-size: 52px;
            font-weight: 700;
        }

        .stats-box p {
            color: rgba(255, 255, 255, .7);
        }

        /* Footer */

        footer {
            background: #0f172a;
            color: rgba(255, 255, 255, .7);
            padding: 30px 0;
        }

        @media(max-width:992px) {

            .hero-title {
                font-size: 42px;
            }

            .hero {
                padding: 100px 0;
            }

        }
    </style>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg position-absolute top-0 start-0 w-100 z-3">

        <div class="container">

            <a class="navbar-brand text-white" href="#">
                AuthNova
            </a>

            <div class="d-flex gap-3">

                <a href="{{ route('login') }}" class="btn btn-outline-light nav-btn">
                    Login
                </a>

                <a href="{{ route('register') }}" class="btn btn-light nav-btn">
                    Register
                </a>

            </div>

        </div>

    </nav>

    <!-- Hero -->
    <section class="hero">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <h1 class="hero-title">
                        Modern Laravel
                        Authentication &
                        Multi Panel System
                    </h1>

                    <p class="hero-text">
                        AuthNova is a modern Laravel Breeze authentication starter kit
                        built with Bootstrap 5, role-based dashboards,
                        email verification, profile management,
                        secure authentication and professional UI design.
                    </p>

                    <div class="d-flex gap-3 flex-wrap">

                        <a href="{{ route('register') }}"
                            class="btn btn-light hero-btn">

                            Get Started

                        </a>

                        <a href="{{ route('login') }}"
                            class="btn btn-outline-light hero-btn">

                            Login Now

                        </a>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="glass-card">

                        <div class="row g-4">

                            <div class="col-6">

                                <div class="bg-white rounded-4 p-4 text-dark">

                                    <i class="bi bi-shield-check fs-1 text-primary"></i>

                                    <h5 class="fw-bold mt-3">
                                        Secure Auth
                                    </h5>

                                    <p class="small text-muted mb-0">
                                        Complete authentication security system.
                                    </p>

                                </div>

                            </div>

                            <div class="col-6">

                                <div class="bg-white rounded-4 p-4 text-dark">

                                    <i class="bi bi-person-badge fs-1 text-success"></i>

                                    <h5 class="fw-bold mt-3">
                                        Multi Roles
                                    </h5>

                                    <p class="small text-muted mb-0">
                                        Admin, Vendor & User dashboards.
                                    </p>

                                </div>

                            </div>

                            <div class="col-6">

                                <div class="bg-white rounded-4 p-4 text-dark">

                                    <i class="bi bi-envelope-check fs-1 text-danger"></i>

                                    <h5 class="fw-bold mt-3">
                                        SMTP Ready
                                    </h5>

                                    <p class="small text-muted mb-0">
                                        Email verification & password reset.
                                    </p>

                                </div>

                            </div>

                            <div class="col-6">

                                <div class="bg-white rounded-4 p-4 text-dark">

                                    <i class="bi bi-bootstrap fs-1 text-purple"></i>

                                    <h5 class="fw-bold mt-3">
                                        Bootstrap 5
                                    </h5>

                                    <p class="small text-muted mb-0">
                                        Modern responsive UI components.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Features -->
    <section class="section">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="section-title">
                    Everything You Need
                </h2>

                <p class="section-subtitle">
                    A complete Laravel Breeze authentication and dashboard starter system
                    designed for modern SaaS and web applications.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-4">

                    <div class="feature-card">

                        <div class="feature-icon">
                            <i class="bi bi-speedometer2"></i>
                        </div>

                        <h4 class="fw-bold mb-3">
                            Professional Dashboards
                        </h4>

                        <p class="text-muted">
                            Modern admin, vendor and user panels with analytics,
                            cards, tables and responsive layouts.
                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="feature-card">

                        <div class="feature-icon">
                            <i class="bi bi-lock"></i>
                        </div>

                        <h4 class="fw-bold mb-3">
                            Authentication System
                        </h4>

                        <p class="text-muted">
                            Login, register, forgot password,
                            email verification and profile update system.
                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="feature-card">

                        <div class="feature-icon">
                            <i class="bi bi-palette"></i>
                        </div>

                        <h4 class="fw-bold mb-3">
                            Modern UI Design
                        </h4>

                        <p class="text-muted">
                            Beautiful Bootstrap 5 interface
                            with professional dark gradient theme.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Stats -->
    <section class="section pt-0">

        <div class="container">

            <div class="stats-section">

                <div class="row text-center g-4">

                    <div class="col-md-3">

                        <div class="stats-box">

                            <h2>
                                100%
                            </h2>

                            <p>
                                Responsive Design
                            </p>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="stats-box">

                            <h2>
                                3
                            </h2>

                            <p>
                                User Roles
                            </p>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="stats-box">

                            <h2>
                                SMTP
                            </h2>

                            <p>
                                Email Ready
                            </p>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="stats-box">

                            <h2>
                                Laravel
                            </h2>

                            <p>
                                Breeze Powered
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Footer -->
    <footer>

        <div class="container text-center">

            <p class="mb-0">
                © {{ date('Y') }} AuthNova.
                Modern Laravel Authentication System.
            </p>

        </div>

    </footer>

</body>

</html>