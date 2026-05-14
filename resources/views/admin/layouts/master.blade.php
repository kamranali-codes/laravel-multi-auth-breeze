<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        /* ================================================
           1. CSS VARIABLES — LIGHT MODE
           ================================================ */
        :root {

            /* Brand */
            --primary: #120078;
            --primary-light: #3d1eaa;
            --primary-dark: #0a004d;
            --primary-subtle: #ede8ff;
            --secondary: #2f1eff;
            --accent: #29d9d5;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --info: #3b82f6;

            /* Layout */
            --sidebar-width: 264px;
            --sidebar-collapsed: 80px;
            --topbar-height: 68px;

            /* Surfaces */
            --bg-body: #f8fafc;
            --bg-card: #ffffff;
            --bg-topbar: rgba(255, 255, 255, 0.82);
            --bg-sidebar: #0a004d;
            --bg-sidebar-item-hover: rgba(255, 255, 255, 0.06);
            --bg-sidebar-item-active: rgba(47, 30, 255, 0.18);
            --bg-input: #f1f5f9;
            --bg-hover: #f1f5f9;

            /* Text */
            --text-primary: #0f172a;
            --text-secondary: #475569;
            --text-muted: #94a3b8;
            --text-inverse: #ffffff;
            --text-sidebar: rgba(255, 255, 255, 0.62);
            --text-sidebar-hover: rgba(255, 255, 255, 0.92);
            --text-sidebar-active: #ffffff;

            /* Borders */
            --border-color: #e2e8f0;
            --border-light: #f1f5f9;

            /* Shadows */
            --shadow-xs: 0 1px 2px rgba(0, 0, 0, 0.04);
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.06), 0 1px 2px rgba(0, 0, 0, 0.04);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.06), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.06), 0 4px 6px -2px rgba(0, 0, 0, 0.02);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.06), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
            --shadow-card: 0 1px 3px rgba(0, 0, 0, 0.05), 0 1px 2px rgba(0, 0, 0, 0.03);
            --shadow-card-hover: 0 10px 24px rgba(0, 0, 0, 0.08);
            --shadow-dropdown: 0 12px 28px rgba(0, 0, 0, 0.12), 0 4px 10px rgba(0, 0, 0, 0.04);

            /* Radius */
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 20px;
            --radius-2xl: 24px;
            --radius-full: 9999px;

            /* Transitions */
            --transition-fast: 0.15s ease;
            --transition-base: 0.25s ease;
            --transition-smooth: 0.3s cubic-bezier(0.4, 0, 0.2, 1);

            /* Icon backgrounds */
            --icon-purple-bg: #ede8ff;
            --icon-purple: #120078;
            --icon-green-bg: #ecfdf5;
            --icon-green: #10b981;
            --icon-orange-bg: #fff7ed;
            --icon-orange: #f59e0b;
            --icon-red-bg: #fef2f2;
            --icon-red: #ef4444;
            --icon-blue-bg: #eff6ff;
            --icon-blue: #3b82f6;
            --icon-cyan-bg: #ecfeff;
            --icon-cyan: #29d9d5;
            --icon-pink-bg: #fdf2f8;
            --icon-pink: #ec4899;

            /* Scrollbar */
            --scroll-track: #f1f5f9;
            --scroll-thumb: #cbd5e1;
        }


        /* ================================================
           2. CSS VARIABLES — DARK MODE
           ================================================ */
        body.dark-mode {

            --bg-body: #020617;
            --bg-card: #0f172a;
            --bg-topbar: rgba(15, 23, 42, 0.82);
            --bg-sidebar: #020617;
            --bg-sidebar-item-hover: rgba(255, 255, 255, 0.04);
            --bg-sidebar-item-active: rgba(47, 30, 255, 0.22);
            --bg-input: #1e293b;
            --bg-hover: #1e293b;

            --text-primary: #f1f5f9;
            --text-secondary: #94a3b8;
            --text-muted: #64748b;

            --border-color: #1e293b;
            --border-light: #1e293b;

            --shadow-card: none;
            --shadow-card-hover: 0 10px 30px rgba(0, 0, 0, 0.25);
            --shadow-dropdown: 0 12px 28px rgba(0, 0, 0, 0.4);

            --icon-purple-bg: rgba(18, 0, 120, 0.18);
            --icon-purple: #a78bfa;
            --icon-green-bg: rgba(16, 185, 129, 0.12);
            --icon-green: #34d399;
            --icon-orange-bg: rgba(245, 158, 11, 0.12);
            --icon-orange: #fbbf24;
            --icon-red-bg: rgba(239, 68, 68, 0.12);
            --icon-red: #f87171;
            --icon-blue-bg: rgba(59, 130, 246, 0.12);
            --icon-blue: #60a5fa;
            --icon-cyan-bg: rgba(41, 217, 213, 0.12);
            --icon-cyan: #29d9d5;
            --icon-pink-bg: rgba(236, 72, 153, 0.12);
            --icon-pink: #f472b6;

            --primary-subtle: rgba(18, 0, 120, 0.18);
            --primary-light: #a78bfa;

            --scroll-track: #0f172a;
            --scroll-thumb: #334155;
        }


        /* ================================================
           3. BASE & RESET
           ================================================ */
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--bg-body);
            color: var(--text-primary);
            overflow-x: hidden;
            transition: background var(--transition-smooth), color var(--transition-smooth);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h1, h2, h3, h4, h5, h6, p, small, td, th, label {
            color: var(--text-primary);
        }

        a {
            text-decoration: none;
            color: var(--primary);
            transition: color var(--transition-fast);
        }

        a:hover {
            color: var(--primary-dark);
        }

        .text-muted {
            color: var(--text-muted) !important;
        }

        ::selection {
            background: var(--primary);
            color: #fff;
        }


        /* ================================================
           4. SIDEBAR
           ================================================ */
        .sidebar-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            z-index: 1040;
            opacity: 0;
            visibility: hidden;
            transition: opacity var(--transition-smooth), visibility var(--transition-smooth);
        }

        .sidebar-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: linear-gradient(180deg, var(--bg-sidebar), #1a0a4e);
            padding: 24px 14px;
            transition: width var(--transition-smooth), transform var(--transition-smooth);
            z-index: 1050;
            overflow-y: auto;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            border-right: 1px solid rgba(255, 255, 255, 0.04);
        }

        .sidebar.collapsed {
            width: var(--sidebar-collapsed);
        }

        .sidebar.collapsed .menu-text,
        .sidebar.collapsed .logo-text,
        .sidebar.collapsed .menu-title,
        .sidebar.collapsed .sidebar-footer-card,
        .sidebar.collapsed .sidebar-user-info {
            opacity: 0;
            width: 0;
            overflow: hidden;
            white-space: nowrap;
        }

        .sidebar.collapsed .nav-link {
            justify-content: center;
            padding: 12px;
        }

        .sidebar.collapsed .nav-link i {
            font-size: 20px;
        }

        .sidebar.collapsed .logo {
            justify-content: center;
            padding: 0;
        }

        .sidebar.collapsed .logo-icon {
            width: 42px;
            height: 42px;
            min-width: 42px;
        }


        /* Logo */
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 32px;
            padding: 0 8px;
        }

        .logo-icon {
            width: 44px;
            height: 44px;
            min-width: 44px;
            border-radius: var(--radius-md);
            background: linear-gradient(135deg, var(--accent), var(--secondary));
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 20px;
            box-shadow: 0 4px 14px rgba(41, 217, 213, 0.3);
        }

        .logo-text {
            color: #fff;
            font-size: 22px;
            font-weight: 700;
            letter-spacing: -0.5px;
            transition: opacity var(--transition-smooth), width var(--transition-smooth);
        }


        /* Menu Titles */
        .menu-title {
            color: rgba(255, 255, 255, 0.3);
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            margin: 24px 12px 10px;
            transition: opacity var(--transition-smooth), width var(--transition-smooth);
        }


        /* Nav Items */
        .sidebar-nav {
            list-style: none;
            padding: 0;
            margin: 0;
            flex: 1;
        }

        .sidebar-nav-item {
            margin-bottom: 2px;
        }

        .sidebar-nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 14px;
            border-radius: var(--radius-md);
            color: var(--text-sidebar);
            font-size: 14px;
            font-weight: 500;
            transition: all var(--transition-fast);
            position: relative;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
        }

        .sidebar-nav-link i {
            font-size: 18px;
            min-width: 20px;
            text-align: center;
            transition: transform var(--transition-fast);
        }

        .sidebar-nav-link:hover {
            background: var(--bg-sidebar-item-hover);
            color: var(--text-sidebar-hover);
        }

        .sidebar-nav-link:hover i {
            transform: scale(1.08);
        }

        .sidebar-nav-link.active {
            background: var(--bg-sidebar-item-active);
            color: var(--text-sidebar-active);
        }

        .sidebar-nav-link.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 3px;
            height: 20px;
            background: var(--accent);
            border-radius: 0 4px 4px 0;
        }

        .menu-text {
            transition: opacity var(--transition-smooth), width var(--transition-smooth);
        }


        /* Sidebar Badge */
        .sidebar-badge {
            margin-left: auto;
            background: var(--secondary);
            color: #fff;
            font-size: 11px;
            font-weight: 600;
            padding: 2px 8px;
            border-radius: var(--radius-full);
            line-height: 1.4;
        }


        /* Sidebar Footer */
        .sidebar-footer {
            margin-top: auto;
            padding-top: 16px;
        }

        .sidebar-footer-card {
            background: linear-gradient(135deg, rgba(47, 30, 255, 0.2), rgba(41, 217, 213, 0.1));
            border: 1px solid rgba(47, 30, 255, 0.15);
            border-radius: var(--radius-lg);
            padding: 18px 16px;
            text-align: center;
            transition: opacity var(--transition-smooth);
        }

        .sidebar-footer-card h6 {
            color: #fff;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .sidebar-footer-card p {
            color: rgba(255, 255, 255, 0.5);
            font-size: 11px;
            margin-bottom: 14px;
        }

        .sidebar-footer-card .btn-upgrade {
            background: var(--accent);
            color: #0a004d;
            border: none;
            padding: 7px 20px;
            border-radius: var(--radius-sm);
            font-size: 12px;
            font-weight: 700;
            transition: all var(--transition-fast);
        }

        .sidebar-footer-card .btn-upgrade:hover {
            background: #fff;
            color: var(--primary);
            transform: translateY(-1px);
        }

        .sidebar-user-info {
            transition: opacity var(--transition-smooth);
        }


        /* ================================================
           5. MAIN CONTENT
           ================================================ */
        .main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            transition: margin-left var(--transition-smooth);
        }

        .main-content.expanded {
            margin-left: var(--sidebar-collapsed);
        }


        /* ================================================
           6. TOPBAR
           ================================================ */
        .topbar {
            background: var(--bg-topbar);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            height: var(--topbar-height);
            padding: 0 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 1px solid var(--border-color);
            transition: background var(--transition-smooth), border-color var(--transition-smooth);
        }

        .topbar-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .topbar-toggle {
            width: 40px;
            height: 40px;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-sm);
            background: var(--bg-card);
            color: var(--text-secondary);
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .topbar-toggle:hover {
            background: var(--primary);
            border-color: var(--primary);
            color: #fff;
        }

        .topbar-title h5 {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 0;
            color: var(--text-primary);
            letter-spacing: -0.3px;
        }

        .topbar-title small {
            font-size: 12px;
            color: var(--text-muted);
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 8px;
        }


        /* Search */
        .topbar-search {
            position: relative;
            margin-right: 8px;
        }

        .topbar-search input {
            background: var(--bg-input);
            border: 1px solid transparent;
            border-radius: var(--radius-sm);
            padding: 8px 14px 8px 38px;
            font-size: 13px;
            color: var(--text-primary);
            width: 220px;
            transition: all var(--transition-fast);
            font-family: inherit;
        }

        .topbar-search input::placeholder {
            color: var(--text-muted);
        }

        .topbar-search input:focus {
            outline: none;
            border-color: var(--primary);
            background: var(--bg-card);
            box-shadow: 0 0 0 3px rgba(18, 0, 120, 0.1);
            width: 280px;
        }

        .topbar-search .search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            font-size: 14px;
            pointer-events: none;
        }

        .topbar-search .search-kbd {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 5px;
            padding: 1px 6px;
            font-size: 11px;
            color: var(--text-muted);
            font-family: inherit;
            pointer-events: none;
        }


        /* Icon Buttons */
        .topbar-icon-btn {
            width: 40px;
            height: 40px;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-sm);
            background: var(--bg-card);
            color: var(--text-secondary);
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all var(--transition-fast);
            position: relative;
        }

        .topbar-icon-btn:hover {
            background: var(--bg-hover);
            color: var(--text-primary);
            border-color: var(--border-color);
        }

        .topbar-icon-btn .notif-dot {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 8px;
            height: 8px;
            background: var(--danger);
            border-radius: 50%;
            border: 2px solid var(--bg-card);
        }


        /* Theme Toggle */
        .theme-toggle-btn {
            width: 40px;
            height: 40px;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-sm);
            background: var(--bg-card);
            color: var(--text-secondary);
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .theme-toggle-btn:hover {
            background: var(--primary-subtle);
            color: var(--primary);
            border-color: var(--primary);
        }


        /* User Dropdown */
        .topbar-divider {
            width: 1px;
            height: 32px;
            background: var(--border-color);
            margin: 0 8px;
        }

        .user-dropdown-toggle {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            padding: 4px 8px 4px 4px;
            border-radius: var(--radius-md);
            transition: background var(--transition-fast);
            border: none;
            background: none;
        }

        .user-dropdown-toggle:hover {
            background: var(--bg-hover);
        }

        .user-dropdown-toggle::after {
            display: none;
        }

        .user-avatar {
            width: 38px;
            height: 38px;
            min-width: 38px;
            border-radius: var(--radius-sm);
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
        }

        .user-dropdown-info {
            text-align: left;
        }

        .user-dropdown-name {
            font-size: 13px;
            font-weight: 600;
            color: var(--text-primary);
            line-height: 1.3;
        }

        .user-dropdown-role {
            font-size: 11px;
            color: var(--text-muted);
        }

        .user-dropdown-chevron {
            font-size: 12px;
            color: var(--text-muted);
            transition: transform var(--transition-fast);
        }

        .user-dropdown-toggle[aria-expanded="true"] .user-dropdown-chevron {
            transform: rotate(180deg);
        }


        /* ================================================
           7. DROPDOWN OVERRIDES
           ================================================ */
        .dropdown-menu {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-dropdown);
            padding: 6px;
            min-width: 200px;
            animation: dropdownFadeIn 0.18s ease;
        }

        @keyframes dropdownFadeIn {
            from { opacity: 0; transform: translateY(-6px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .dropdown-item {
            border-radius: var(--radius-sm);
            padding: 9px 14px;
            font-size: 13px;
            color: var(--text-secondary);
            transition: all var(--transition-fast);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .dropdown-item:hover {
            background: var(--bg-hover);
            color: var(--text-primary);
        }

        .dropdown-item i {
            font-size: 16px;
            width: 18px;
            text-align: center;
        }

        .dropdown-divider {
            border-color: var(--border-color);
            margin: 4px 0;
        }

        .dropdown-header-custom {
            padding: 12px 14px 8px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: var(--text-muted);
        }


        /* Notification Dropdown */
        .notification-dropdown {
            width: 340px;
            padding: 0;
            overflow: hidden;
        }

        .notification-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 16px;
            border-bottom: 1px solid var(--border-color);
        }

        .notification-header h6 {
            font-size: 14px;
            font-weight: 700;
            margin: 0;
        }

        .notification-header a {
            font-size: 12px;
            font-weight: 500;
        }

        .notification-list {
            max-height: 280px;
            overflow-y: auto;
        }

        .notification-item {
            display: flex;
            gap: 12px;
            padding: 12px 16px;
            transition: background var(--transition-fast);
            cursor: pointer;
        }

        .notification-item:hover {
            background: var(--bg-hover);
        }

        .notification-item-icon {
            width: 36px;
            height: 36px;
            min-width: 36px;
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .notification-item-body h6 {
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .notification-item-body p {
            font-size: 12px;
            color: var(--text-muted);
            margin: 0;
        }

        .notification-footer {
            border-top: 1px solid var(--border-color);
            text-align: center;
            padding: 10px;
        }

        .notification-footer a {
            font-size: 13px;
            font-weight: 600;
        }


        /* User Dropdown Specific */
        .user-dropdown-menu {
            min-width: 220px;
        }

        .user-dropdown-header {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px;
            border-bottom: 1px solid var(--border-color);
        }

        .user-dropdown-header .user-avatar {
            width: 42px;
            height: 42px;
            min-width: 42px;
            font-size: 16px;
        }

        .user-dropdown-header-info h6 {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 1px;
        }

        .user-dropdown-header-info p {
            font-size: 12px;
            color: var(--text-muted);
            margin: 0;
        }

        .dropdown-item-danger {
            color: var(--danger);
        }

        .dropdown-item-danger:hover {
            background: var(--icon-red-bg);
            color: var(--danger);
        }


        /* ================================================
           8. CONTENT AREA
           ================================================ */
        .content-wrapper {
            padding: 28px;
        }

        .page-header {
            margin-bottom: 28px;
        }

        .page-title {
            font-size: 26px;
            font-weight: 800;
            letter-spacing: -0.5px;
            color: var(--text-primary);
        }

        .page-subtitle {
            color: var(--text-muted);
            font-size: 14px;
            margin-top: 4px;
        }

        .breadcrumb-custom {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            color: var(--text-muted);
            margin-bottom: 4px;
        }

        .breadcrumb-custom a {
            color: var(--text-muted);
        }

        .breadcrumb-custom a:hover {
            color: var(--primary);
        }

        .breadcrumb-custom .separator {
            font-size: 10px;
        }


        /* ================================================
           9. STAT CARDS
           ================================================ */
        .stats-card {
            background: var(--bg-card);
            border-radius: var(--radius-xl);
            padding: 24px;
            position: relative;
            overflow: hidden;
            transition: all var(--transition-smooth);
            box-shadow: var(--shadow-card);
            height: 100%;
            border: 1px solid var(--border-color);
        }

        .stats-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-card-hover);
        }

        .stats-card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 16px;
        }

        .stats-icon {
            width: 48px;
            height: 48px;
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .stats-trend {
            display: inline-flex;
            align-items: center;
            gap: 3px;
            font-size: 12px;
            font-weight: 600;
            padding: 3px 8px;
            border-radius: var(--radius-full);
        }

        .stats-trend.up {
            color: var(--success);
            background: var(--icon-green-bg);
        }

        .stats-trend.down {
            color: var(--danger);
            background: var(--icon-red-bg);
        }

        .stats-card h3 {
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 4px;
            letter-spacing: -0.5px;
            color: var(--text-primary);
        }

        .stats-card p {
            color: var(--text-muted);
            margin: 0;
            font-size: 13px;
            font-weight: 500;
        }

        .stats-purple .stats-icon {
            background: var(--icon-purple-bg);
            color: var(--icon-purple);
        }

        .stats-green .stats-icon {
            background: var(--icon-green-bg);
            color: var(--icon-green);
        }

        .stats-orange .stats-icon {
            background: var(--icon-orange-bg);
            color: var(--icon-orange);
        }

        .stats-red .stats-icon {
            background: var(--icon-red-bg);
            color: var(--icon-red);
        }

        .stats-blue .stats-icon {
            background: var(--icon-blue-bg);
            color: var(--icon-blue);
        }

        .stats-cyan .stats-icon {
            background: var(--icon-cyan-bg);
            color: var(--icon-cyan);
        }

        .stats-pink .stats-icon {
            background: var(--icon-pink-bg);
            color: var(--icon-pink);
        }

        /* Decorative bottom accent on stat cards */
        .stats-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            border-radius: 0 0 var(--radius-xl) var(--radius-xl);
            opacity: 0;
            transition: opacity var(--transition-smooth);
        }

        .stats-card:hover::after {
            opacity: 1;
        }

        .stats-purple::after { background: var(--primary); }
        .stats-green::after { background: var(--icon-green); }
        .stats-orange::after { background: var(--icon-orange); }
        .stats-red::after { background: var(--icon-red); }
        .stats-blue::after { background: var(--icon-blue); }
        .stats-cyan::after { background: var(--accent); }
        .stats-pink::after { background: var(--icon-pink); }


        /* ================================================
           10. DASHBOARD CARDS
           ================================================ */
        .dashboard-card {
            background: var(--bg-card);
            border-radius: var(--radius-xl);
            padding: 24px;
            box-shadow: var(--shadow-card);
            border: 1px solid var(--border-color);
            transition: all var(--transition-smooth);
        }

        .dashboard-card:hover {
            box-shadow: var(--shadow-card-hover);
        }

        .card-header-custom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .card-header-custom h5 {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 2px;
            letter-spacing: -0.2px;
        }

        .card-header-custom small {
            font-size: 12px;
            color: var(--text-muted);
        }


        /* ================================================
           11. TABLES
           ================================================ */
        .table-wrapper {
            overflow-x: auto;
        }

        .table {
            color: var(--text-primary);
            margin-bottom: 0;
        }

        .table thead th {
            border: none;
            color: var(--text-muted);
            font-weight: 600;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 12px 16px;
            background: transparent;
            white-space: nowrap;
        }

        .table tbody td {
            vertical-align: middle;
            border-color: var(--border-color);
            background: transparent;
            color: var(--text-secondary);
            font-size: 14px;
            padding: 14px 16px;
            white-space: nowrap;
        }

        .table tbody tr {
            transition: background var(--transition-fast);
        }

        .table tbody tr:hover {
            background: var(--bg-hover);
        }

        .table-user-cell {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .table-avatar {
            width: 36px;
            height: 36px;
            min-width: 36px;
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 700;
            color: #fff;
        }

        .table-user-name {
            font-weight: 600;
            color: var(--text-primary);
            font-size: 14px;
        }

        .table-user-email {
            font-size: 12px;
            color: var(--text-muted);
        }

        .table-actions {
            display: flex;
            gap: 4px;
        }

        .table-action-btn {
            width: 32px;
            height: 32px;
            border-radius: var(--radius-sm);
            border: 1px solid var(--border-color);
            background: var(--bg-card);
            color: var(--text-muted);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .table-action-btn:hover {
            border-color: var(--primary);
            color: var(--primary);
            background: var(--primary-subtle);
        }

        .table-action-btn.danger:hover {
            border-color: var(--danger);
            color: var(--danger);
            background: var(--icon-red-bg);
        }


        /* ================================================
           12. FORMS
           ================================================ */
        .form-control,
        .form-select {
            background: var(--bg-input);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-sm);
            padding: 10px 14px;
            font-size: 14px;
            color: var(--text-primary);
            transition: all var(--transition-fast);
            font-family: inherit;
        }

        .form-control:focus,
        .form-select:focus {
            background: var(--bg-card);
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(18, 0, 120, 0.1);
            color: var(--text-primary);
        }

        .form-control::placeholder {
            color: var(--text-muted);
        }

        .form-label {
            font-size: 13px;
            font-weight: 600;
            color: var(--text-secondary);
            margin-bottom: 6px;
        }

        .form-floating>.form-control,
        .form-floating>.form-select {
            background: var(--bg-input);
            border-color: var(--border-color);
            color: var(--text-primary);
        }

        .form-floating>.form-control:focus,
        .form-floating>.form-select:focus {
            background: var(--bg-card);
            border-color: var(--primary);
        }

        .form-floating>label {
            color: var(--text-muted);
        }

        .invalid-feedback {
            font-size: 12px;
        }

        .form-check-input {
            background-color: var(--bg-input);
            border-color: var(--border-color);
        }

        .form-check-input:checked {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .form-check-label {
            color: var(--text-secondary);
            font-size: 14px;
        }


        /* ================================================
           13. BUTTONS
           ================================================ */
        .btn {
            font-family: inherit;
            font-weight: 600;
            font-size: 13px;
            border-radius: var(--radius-sm);
            padding: 9px 20px;
            transition: all var(--transition-fast);
        }

        .btn-primary {
            background: var(--primary);
            border-color: var(--primary);
        }

        .btn-primary:hover {
            background: var(--primary-light);
            border-color: var(--primary-light);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(18, 0, 120, 0.3);
        }

        .btn-outline-primary {
            color: var(--primary);
            border-color: var(--primary);
        }

        .btn-outline-primary:hover {
            background: var(--primary);
            border-color: var(--primary);
            color: #fff;
            transform: translateY(-1px);
        }

        .btn-soft-primary {
            background: var(--primary-subtle);
            color: var(--primary);
            border: none;
        }

        .btn-soft-primary:hover {
            background: var(--primary);
            color: #fff;
        }

        .btn-danger {
            background: var(--danger);
            border-color: var(--danger);
        }

        .btn-danger:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
        }

        .btn-success {
            background: var(--success);
            border-color: var(--success);
        }

        .btn-success:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }


        /* ================================================
           14. BADGES
           ================================================ */
        .badge-status {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 4px 10px;
            border-radius: var(--radius-full);
            font-size: 12px;
            font-weight: 600;
        }

        .badge-status .dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
        }

        .badge-status-active {
            background: var(--icon-green-bg);
            color: var(--icon-green);
        }

        .badge-status-active .dot {
            background: var(--icon-green);
        }

        .badge-status-pending {
            background: var(--icon-orange-bg);
            color: var(--icon-orange);
        }

        .badge-status-pending .dot {
            background: var(--icon-orange);
        }

        .badge-status-verified {
            background: var(--icon-blue-bg);
            color: var(--icon-blue);
        }

        .badge-status-verified .dot {
            background: var(--icon-blue);
        }

        .badge-status-inactive {
            background: var(--icon-red-bg);
            color: var(--icon-red);
        }

        .badge-status-inactive .dot {
            background: var(--icon-red);
        }

        .badge-role {
            padding: 3px 10px;
            border-radius: var(--radius-full);
            font-size: 11px;
            font-weight: 600;
        }

        .badge-role-admin {
            background: var(--icon-purple-bg);
            color: var(--icon-purple);
        }

        .badge-role-vendor {
            background: var(--icon-cyan-bg);
            color: var(--icon-cyan);
        }

        .badge-role-user {
            background: var(--icon-blue-bg);
            color: var(--icon-blue);
        }


        /* ================================================
           15. ACTIVITY FEED
           ================================================ */
        .activity-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .activity-item {
            display: flex;
            gap: 14px;
            padding: 14px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .activity-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .activity-item:first-child {
            padding-top: 0;
        }

        .activity-icon {
            width: 36px;
            height: 36px;
            min-width: 36px;
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .activity-body h6 {
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 2px;
            color: var(--text-primary);
        }

        .activity-body p {
            font-size: 12px;
            color: var(--text-muted);
            margin: 0;
        }


        /* ================================================
           16. CHART PLACEHOLDER
           ================================================ */
        .chart-placeholder {
            background: var(--bg-input);
            border-radius: var(--radius-lg);
            height: 220px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            gap: 8px;
            padding: 20px 30px;
            position: relative;
            overflow: hidden;
        }

        .chart-bar {
            width: 32px;
            border-radius: 6px 6px 0 0;
            transition: all var(--transition-smooth);
            cursor: pointer;
        }

        .chart-bar:hover {
            opacity: 0.8;
            transform: scaleY(1.05);
            transform-origin: bottom;
        }


        /* ================================================
           17. SCROLLBAR
           ================================================ */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-track {
            background: var(--scroll-track);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--scroll-thumb);
            border-radius: var(--radius-full);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--text-muted);
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.1);
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.2);
        }


        /* ================================================
           18. ANIMATIONS
           ================================================ */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(16px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-in {
            animation: fadeInUp 0.4s ease forwards;
        }

        .animate-delay-1 { animation-delay: 0.05s; opacity: 0; }
        .animate-delay-2 { animation-delay: 0.10s; opacity: 0; }
        .animate-delay-3 { animation-delay: 0.15s; opacity: 0; }
        .animate-delay-4 { animation-delay: 0.20s; opacity: 0; }
        .animate-delay-5 { animation-delay: 0.25s; opacity: 0; }
        .animate-delay-6 { animation-delay: 0.30s; opacity: 0; }


        /* ================================================
           19. RESPONSIVE — TABLET
           ================================================ */
        @media (max-width: 1199px) {
            .topbar-search input {
                width: 180px;
            }

            .topbar-search input:focus {
                width: 220px;
            }
        }


        /* ================================================
           20. RESPONSIVE — MOBILE
           ================================================ */
        @media (max-width: 991px) {
            .sidebar {
                transform: translateX(-100%);
                width: var(--sidebar-width);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .sidebar.collapsed {
                width: var(--sidebar-width);
                transform: translateX(-100%);
            }

            .sidebar.collapsed.show {
                transform: translateX(0);
            }

            .sidebar.collapsed .menu-text,
            .sidebar.collapsed .logo-text,
            .sidebar.collapsed .menu-title,
            .sidebar.collapsed .sidebar-footer-card,
            .sidebar.collapsed .sidebar-user-info {
                opacity: 1;
                width: auto;
                overflow: visible;
            }

            .sidebar.collapsed .nav-link {
                justify-content: flex-start;
                padding: 10px 14px;
            }

            .sidebar.collapsed .logo {
                justify-content: flex-start;
                padding: 0 8px;
            }

            .main-content,
            .main-content.expanded {
                margin-left: 0;
            }

            .content-wrapper {
                padding: 20px;
            }

            .topbar {
                padding: 0 16px;
            }

            .topbar-search {
                display: none;
            }

            .user-dropdown-info {
                display: none;
            }

            .user-dropdown-chevron {
                display: none;
            }

            .topbar-divider {
                display: none;
            }

            .stats-card h3 {
                font-size: 24px;
            }

            .notification-dropdown {
                width: 300px;
            }
        }

        @media (max-width: 575px) {
            .content-wrapper {
                padding: 16px;
            }

            .page-title {
                font-size: 22px;
            }

            .stats-card {
                padding: 18px;
            }

            .stats-card h3 {
                font-size: 22px;
            }

            .dashboard-card {
                padding: 18px;
            }

            .notification-dropdown {
                width: 280px;
                right: -60px !important;
            }
        }
    </style>

</head>

<body>

    <!-- Sidebar Overlay (Mobile) -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- ===================== SIDEBAR ===================== -->
    <aside class="sidebar" id="sidebar">

        <!-- Logo -->
        <div class="logo">
            <div class="logo-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            <div class="logo-text">AuthNova</div>
        </div>

        <!-- Navigation -->
        <ul class="sidebar-nav">

            <li class="menu-title">Main</li>

            <li class="sidebar-nav-item">
                <a href="{{ route('admin.dashboard') }}"
                    class="sidebar-nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="bi bi-grid-1x2"></i>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-nav-item">
                <a href="#" class="sidebar-nav-link">
                    <i class="bi bi-bar-chart-line"></i>
                    <span class="menu-text">Analytics</span>
                    <span class="sidebar-badge menu-text">New</span>
                </a>
            </li>

            <li class="menu-title">Management</li>

            <li class="sidebar-nav-item">
                <a href="#" class="sidebar-nav-link">
                    <i class="bi bi-people"></i>
                    <span class="menu-text">Users</span>
                </a>
            </li>

            <li class="sidebar-nav-item">
                <a href="#" class="sidebar-nav-link">
                    <i class="bi bi-shop"></i>
                    <span class="menu-text">Vendors</span>
                </a>
            </li>

            <li class="sidebar-nav-item">
                <a href="#" class="sidebar-nav-link">
                    <i class="bi bi-bag-check"></i>
                    <span class="menu-text">Orders</span>
                    <span class="sidebar-badge menu-text">12</span>
                </a>
            </li>

            <li class="sidebar-nav-item">
                <a href="#" class="sidebar-nav-link">
                    <i class="bi bi-box-seam"></i>
                    <span class="menu-text">Products</span>
                </a>
            </li>

            <li class="menu-title">System</li>

            <li class="sidebar-nav-item">
                <a href="#" class="sidebar-nav-link">
                    <i class="bi bi-bell"></i>
                    <span class="menu-text">Notifications</span>
                </a>
            </li>

            <li class="sidebar-nav-item">
                <a href="{{ route('profile.edit') }}"
                    class="sidebar-nav-link {{ request()->routeIs('profile.*') ? 'active' : '' }}">
                    <i class="bi bi-person"></i>
                    <span class="menu-text">Profile</span>
                </a>
            </li>

            <li class="sidebar-nav-item">
                <a href="#" class="sidebar-nav-link">
                    <i class="bi bi-gear"></i>
                    <span class="menu-text">Settings</span>
                </a>
            </li>

        </ul>

        <!-- Footer -->
        <div class="sidebar-footer">
            <div class="sidebar-footer-card">
                <h6>Upgrade to Pro</h6>
                <p>Unlock all features & premium support</p>
                <button class="btn-upgrade">
                    <i class="bi bi-lightning-charge"></i> Upgrade
                </button>
            </div>
        </div>

    </aside>

    <!-- ===================== MAIN ===================== -->
    <div class="main-content" id="mainContent">

        <!-- Topbar -->
        <header class="topbar">

            <div class="topbar-left">
                <button class="topbar-toggle" id="sidebarToggle">
                    <i class="bi bi-list"></i>
                </button>
                <div class="topbar-title d-none d-sm-block">
                    <h5>@yield('page-title', 'Dashboard')</h5>
                </div>
            </div>

            <div class="topbar-right">

                <!-- Search -->
                <div class="topbar-search d-none d-lg-block">
                    <i class="bi bi-search search-icon"></i>
                    <input type="text" placeholder="Search anything...">
                    <kbd class="search-kbd">⌘K</kbd>
                </div>

                <!-- Notifications -->
                <div class="dropdown">
                    <button class="topbar-icon-btn" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-expanded="false">
                        <i class="bi bi-bell"></i>
                        <span class="notif-dot"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end notification-dropdown">
                        <div class="notification-header">
                            <h6>Notifications</h6>
                            <a href="#">Mark all read</a>
                        </div>
                        <div class="notification-list">
                            <div class="notification-item">
                                <div class="notification-item-icon"
                                    style="background:var(--icon-green-bg);color:var(--icon-green);">
                                    <i class="bi bi-person-plus"></i>
                                </div>
                                <div class="notification-item-body">
                                    <h6>New user registered</h6>
                                    <p>Ralph Alva joined 2 min ago</p>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="notification-item-icon"
                                    style="background:var(--icon-cyan-bg);color:var(--icon-cyan);">
                                    <i class="bi bi-bag-check"></i>
                                </div>
                                <div class="notification-item-body">
                                    <h6>New order received</h6>
                                    <p>Order #1234 — 15 min ago</p>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="notification-item-icon"
                                    style="background:var(--icon-orange-bg);color:var(--icon-orange);">
                                    <i class="bi bi-exclamation-triangle"></i>
                                </div>
                                <div class="notification-item-body">
                                    <h6>Vendor approval pending</h6>
                                    <p>3 vendors awaiting review</p>
                                </div>
                            </div>
                        </div>
                        <div class="notification-footer">
                            <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>

                <!-- Theme Toggle -->
                <button class="theme-toggle-btn" id="themeToggle" title="Toggle theme">
                    <i class="bi bi-moon-stars" id="themeIcon"></i>
                </button>

                <div class="topbar-divider"></div>

                <!-- User Dropdown -->
                <div class="dropdown">
                    <button class="user-dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-avatar">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                        <div class="user-dropdown-info">
                            <div class="user-dropdown-name">{{ Auth::user()->name }}</div>
                            <div class="user-dropdown-role">Administrator</div>
                        </div>
                        <i class="bi bi-chevron-down user-dropdown-chevron"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end user-dropdown-menu">
                        <div class="user-dropdown-header">
                            <div class="user-avatar">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                            <div class="user-dropdown-header-info">
                                <h6>{{ Auth::user()->name }}</h6>
                                <p>{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                            <i class="bi bi-person"></i> My Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-gear"></i> Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-question-circle"></i> Help Center
                        </a>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item dropdown-item-danger">
                                <i class="bi bi-box-arrow-right"></i> Log Out
                            </button>
                        </form>
                    </div>
                </div>

            </div>

        </header>

        <!-- Content -->
        <main class="content-wrapper">
            @yield('content')
        </main>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        /* ============================================
           SIDEBAR TOGGLE
           ============================================ */
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const isMobile = () => window.innerWidth <= 991;

        sidebarToggle.addEventListener('click', () => {
            if (isMobile()) {
                sidebar.classList.toggle('show');
                sidebarOverlay.classList.toggle('active');
                document.body.style.overflow = sidebar.classList.contains('show') ? 'hidden' : '';
            } else {
                sidebar.classList.toggle('collapsed');
                mainContent.classList.toggle('expanded');
            }
        });

        sidebarOverlay.addEventListener('click', () => {
            sidebar.classList.remove('show');
            sidebarOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });

        window.addEventListener('resize', () => {
            if (!isMobile()) {
                sidebar.classList.remove('show');
                sidebarOverlay.classList.remove('active');
                document.body.style.overflow = '';
            }
        });


        /* ============================================
           THEME TOGGLE
           ============================================ */
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');

        function applyTheme(dark) {
            document.body.classList.toggle('dark-mode', dark);
            themeIcon.classList.toggle('bi-moon-stars', !dark);
            themeIcon.classList.toggle('bi-sun', dark);
            localStorage.setItem('theme', dark ? 'dark' : 'light');
        }

        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark' || (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            applyTheme(true);
        }

        themeToggle.addEventListener('click', () => {
            applyTheme(!document.body.classList.contains('dark-mode'));
        });


        /* ============================================
           ANIMATE ON LOAD
           ============================================ */
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.animate-in').forEach(el => {
                el.style.animationPlayState = 'running';
            });
        });
    </script>

</body>

</html>