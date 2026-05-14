<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        :root{
            --primary:#120078;
            --secondary:#2f1eff;
            --accent:#29d9d5;
            --light:#f5f7fb;
            --dark:#111827;
            --sidebar-width:270px;
        }

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            background:var(--light);
            overflow-x:hidden;
        }

        /* Sidebar */

        .sidebar{
            position:fixed;
            top:0;
            left:0;
            width:var(--sidebar-width);
            height:100vh;
            background:
            linear-gradient(180deg,
            var(--primary),
            var(--secondary));
            padding:25px 18px;
            transition:.3s;
            z-index:1000;
            overflow-y:auto;
        }

        .sidebar.collapsed{
            width:85px;
        }

        .sidebar.collapsed .menu-text,
        .sidebar.collapsed .logo-text,
        .sidebar.collapsed .sidebar-footer{
            display:none;
        }

        .logo{
            display:flex;
            align-items:center;
            gap:14px;
            margin-bottom:45px;
            padding:0 10px;
        }

        .logo-icon{
            width:50px;
            height:50px;
            border-radius:16px;
            background:rgba(255,255,255,.1);
            display:flex;
            align-items:center;
            justify-content:center;
            color:#fff;
            font-size:24px;
        }

        .logo-text{
            color:#fff;
            font-size:28px;
            font-weight:700;
        }

        .menu-title{
            color:rgba(255,255,255,.5);
            font-size:12px;
            text-transform:uppercase;
            margin:25px 12px 12px;
            letter-spacing:1px;
        }

        .nav-item{
            margin-bottom:8px;
        }

        .nav-link{
            color:rgba(255,255,255,.75);
            padding:14px 16px;
            border-radius:16px;
            display:flex;
            align-items:center;
            gap:14px;
            transition:.3s;
            font-weight:500;
        }

        .nav-link:hover,
        .nav-link.active{
            background:rgba(255,255,255,.1);
            color:#fff;
        }

        .nav-link i{
            font-size:20px;
        }

        .sidebar-footer{
            margin-top:40px;
            background:rgba(255,255,255,.08);
            padding:18px;
            border-radius:20px;
            color:#fff;
        }

        /* Main */

        .main-content{
            margin-left:var(--sidebar-width);
            transition:.3s;
            min-height:100vh;
        }

        .main-content.expanded{
            margin-left:85px;
        }

        /* Topbar */

        .topbar{
            background:#fff;
            height:85px;
            padding:0 30px;
            display:flex;
            align-items:center;
            justify-content:space-between;
            box-shadow:0 2px 20px rgba(0,0,0,.04);
            position:sticky;
            top:0;
            z-index:100;
        }

        .toggle-btn{
            width:45px;
            height:45px;
            border:none;
            border-radius:14px;
            background:#eef2ff;
            color:var(--primary);
            font-size:20px;
            transition:.3s;
        }

        .toggle-btn:hover{
            background:var(--primary);
            color:#fff;
        }

        .topbar-right{
            display:flex;
            align-items:center;
            gap:18px;
        }

        .user-box{
            display:flex;
            align-items:center;
            gap:14px;
        }

        .user-avatar{
            width:45px;
            height:45px;
            border-radius:14px;
            background:
            linear-gradient(135deg,
            var(--primary),
            var(--secondary));
            color:#fff;
            display:flex;
            align-items:center;
            justify-content:center;
            font-weight:700;
        }

        /* Content */

        .content-wrapper{
            padding:30px;
        }

        .page-title{
            font-size:30px;
            font-weight:700;
            color:var(--dark);
        }

        .page-subtitle{
            color:#6b7280;
        }

        /* Stats */

        .stats-card{
            background:#fff;
            border-radius:24px;
            padding:28px;
            position:relative;
            overflow:hidden;
            transition:.3s;
            box-shadow:0 4px 20px rgba(0,0,0,.04);
            height:100%;
        }

        .stats-card:hover{
            transform:translateY(-6px);
        }

        .stats-icon{
            width:65px;
            height:65px;
            border-radius:18px;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:26px;
            margin-bottom:18px;
        }

        .stats-card h3{
            font-size:34px;
            font-weight:700;
            margin-bottom:5px;
        }

        .stats-card p{
            color:#6b7280;
            margin:0;
        }

        .stats-purple .stats-icon{
            background:#eef2ff;
            color:#4338ca;
        }

        .stats-green .stats-icon{
            background:#ecfdf5;
            color:#059669;
        }

        .stats-orange .stats-icon{
            background:#fff7ed;
            color:#ea580c;
        }

        .stats-red .stats-icon{
            background:#fef2f2;
            color:#dc2626;
        }

        /* Dashboard Card */

        .dashboard-card{
            background:#fff;
            border-radius:24px;
            padding:30px;
            box-shadow:0 4px 20px rgba(0,0,0,.04);
        }

        .table th{
            border:none;
            color:#6b7280;
            font-weight:600;
        }

        .table td{
            vertical-align:middle;
            border-color:#f1f5f9;
        }

        @media(max-width:991px){

            .sidebar{
                left:-100%;
            }

            .sidebar.show{
                left:0;
            }

            .main-content{
                margin-left:0;
            }

            .content-wrapper{
                padding:20px;
            }

            .topbar{
                padding:0 20px;
            }
        }
    </style>

</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">

        <div class="logo">

            <div class="logo-icon">
                <i class="bi bi-shield-lock"></i>
            </div>

            <div class="logo-text">
                AuthNova
            </div>

        </div>

        <div class="menu-title">
            Main Menu
        </div>

        <div class="nav-item">
            <a href="{{ route('admin.dashboard') }}"
                class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">

                <i class="bi bi-grid"></i>
                <span class="menu-text">Dashboard</span>

            </a>
        </div>

        <div class="nav-item">
            <a href="{{ route('profile.edit') }}"
                class="nav-link {{ request()->routeIs('profile.*') ? 'active' : '' }}">

                <i class="bi bi-person"></i>
                <span class="menu-text">Profile</span>

            </a>
        </div>

        <div class="nav-item">
            <a href="#"
                class="nav-link">

                <i class="bi bi-gear"></i>
                <span class="menu-text">Settings</span>

            </a>
        </div>

        <div class="nav-item">
            <a href="#"
                class="nav-link">

                <i class="bi bi-bell"></i>
                <span class="menu-text">Notifications</span>

            </a>
        </div>

        <div class="sidebar-footer">

            <h6 class="fw-bold mb-2">
                Premium Dashboard
            </h6>

            <small class="text-white-50">
                Laravel Breeze + Bootstrap 5 Admin Panel
            </small>

        </div>

    </div>

    <!-- Main -->
    <div class="main-content" id="mainContent">

        <!-- Topbar -->
        <div class="topbar">

            <div class="d-flex align-items-center gap-3">

                <button class="toggle-btn" id="toggleBtn">
                    <i class="bi bi-list"></i>
                </button>

                <div>

                    <h5 class="mb-0 fw-bold">
                        @yield('page-title')
                    </h5>

                    <small class="text-muted">
                        Welcome back, {{ Auth::user()->name }}
                    </small>

                </div>

            </div>

            <div class="topbar-right">

                <button class="btn btn-light rounded-circle">
                    <i class="bi bi-bell"></i>
                </button>

                <div class="user-box">

                    <div class="text-end d-none d-md-block">

                        <h6 class="mb-0 fw-semibold">
                            {{ Auth::user()->name }}
                        </h6>

                        <small class="text-muted">
                            Administrator
                        </small>

                    </div>

                    <div class="user-avatar">
                        {{ strtoupper(substr(Auth::user()->name,0,1)) }}
                    </div>

                </div>

            </div>

        </div>

        <!-- Content -->
        <div class="content-wrapper">

            @yield('content')

        </div>

    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>

        const toggleBtn = document.getElementById('toggleBtn');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');

        toggleBtn.addEventListener('click',()=>{

            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');

        });

    </script>

</body>

</html>