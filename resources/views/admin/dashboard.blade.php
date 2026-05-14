@extends('admin.layouts.master')

@section('title', 'Admin Dashboard')

@section('page-title', 'Dashboard Overview')

@section('content')

    <!-- Page Header -->
    <div class="page-header animate-in">
        <div class="breadcrumb-custom">
            <a href="{{ route('admin.dashboard') }}">Admin</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span>Dashboard</span>
        </div>
        <h1 class="page-title">Welcome back, {{ Auth::user()->name }}</h1>
        <p class="page-subtitle">Here's what's happening with your platform today.</p>
    </div>

    <!-- Stat Cards -->
    <div class="row g-4 mb-4">

        <div class="col-xl-3 col-md-6 animate-in animate-delay-1">
            <div class="stats-card stats-purple">
                <div class="stats-card-header">
                    <div class="stats-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <span class="stats-trend up">
                        <i class="bi bi-arrow-up-short"></i>12.5%
                    </span>
                </div>
                <h3>1,250</h3>
                <p>Total Users</p>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 animate-in animate-delay-2">
            <div class="stats-card stats-green">
                <div class="stats-card-header">
                    <div class="stats-icon">
                        <i class="bi bi-person-check"></i>
                    </div>
                    <span class="stats-trend up">
                        <i class="bi bi-arrow-up-short"></i>8.2%
                    </span>
                </div>
                <h3>845</h3>
                <p>Active Accounts</p>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 animate-in animate-delay-3">
            <div class="stats-card stats-orange">
                <div class="stats-card-header">
                    <div class="stats-icon">
                        <i class="bi bi-envelope-check"></i>
                    </div>
                    <span class="stats-trend down">
                        <i class="bi bi-arrow-down-short"></i>2.4%
                    </span>
                </div>
                <h3>530</h3>
                <p>Email Verified</p>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 animate-in animate-delay-4">
            <div class="stats-card stats-cyan">
                <div class="stats-card-header">
                    <div class="stats-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <span class="stats-trend up">
                        <i class="bi bi-arrow-up-short"></i>0.1%
                    </span>
                </div>
                <h3>99.9%</h3>
                <p>System Security</p>
            </div>
        </div>

    </div>

    <!-- Chart + Activity Row -->
    <div class="row g-4 mb-4">

        <!-- Revenue Chart -->
        <div class="col-xl-8 animate-in animate-delay-5">
            <div class="dashboard-card">
                <div class="card-header-custom">
                    <div>
                        <h5>Revenue Overview</h5>
                        <small class="text-muted">Monthly revenue performance</small>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-soft-primary btn-sm">Weekly</button>
                        <button class="btn btn-primary btn-sm">Monthly</button>
                    </div>
                </div>
                <div class="chart-placeholder" id="revenueChart">
                    <div class="chart-bar" style="height:45%;background:var(--primary);opacity:0.5;"></div>
                    <div class="chart-bar" style="height:60%;background:var(--primary);opacity:0.55;"></div>
                    <div class="chart-bar" style="height:40%;background:var(--primary);opacity:0.5;"></div>
                    <div class="chart-bar" style="height:72%;background:var(--secondary);opacity:0.55;"></div>
                    <div class="chart-bar" style="height:55%;background:var(--primary);opacity:0.55;"></div>
                    <div class="chart-bar" style="height:85%;background:var(--secondary);opacity:0.65;"></div>
                    <div class="chart-bar" style="height:68%;background:var(--primary);opacity:0.55;"></div>
                    <div class="chart-bar" style="height:92%;background:var(--secondary);opacity:0.7;"></div>
                    <div class="chart-bar" style="height:78%;background:var(--primary);opacity:0.6;"></div>
                    <div class="chart-bar" style="height:65%;background:var(--secondary);opacity:0.55;"></div>
                    <div class="chart-bar" style="height:88%;background:var(--primary);opacity:0.65;"></div>
                    <div class="chart-bar" style="height:95%;background:linear-gradient(180deg,var(--primary),var(--accent));"></div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="col-xl-4 animate-in animate-delay-6">
            <div class="dashboard-card h-100">
                <div class="card-header-custom">
                    <div>
                        <h5>Recent Activity</h5>
                        <small class="text-muted">Latest platform events</small>
                    </div>
                    <a href="#" class="btn btn-sm btn-soft-primary">View All</a>
                </div>
                <ul class="activity-list">
                    <li class="activity-item">
                        <div class="activity-icon" style="background:var(--icon-green-bg);color:var(--icon-green);">
                            <i class="bi bi-person-plus"></i>
                        </div>
                        <div class="activity-body">
                            <h6>New user registered</h6>
                            <p>Ralph Alva joined the platform</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon" style="background:var(--icon-cyan-bg);color:var(--icon-cyan);">
                            <i class="bi bi-bag-check"></i>
                        </div>
                        <div class="activity-body">
                            <h6>Order #1234 placed</h6>
                            <p>Purchase worth $249.00</p>
                            <small class="text-muted">15 minutes ago</small>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon" style="background:var(--icon-orange-bg);color:var(--icon-orange);">
                            <i class="bi bi-shop"></i>
                        </div>
                        <div class="activity-body">
                            <h6>Vendor approval request</h6>
                            <p>TechStore applied for vendor account</p>
                            <small class="text-muted">1 hour ago</small>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon" style="background:var(--icon-red-bg);color:var(--icon-red);">
                            <i class="bi bi-shield-exclamation"></i>
                        </div>
                        <div class="activity-body">
                            <h6>Security alert</h6>
                            <p>Failed login attempt from unknown IP</p>
                            <small class="text-muted">3 hours ago</small>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon" style="background:var(--icon-purple-bg);color:var(--icon-purple);">
                            <i class="bi bi-arrow-up-circle"></i>
                        </div>
                        <div class="activity-body">
                            <h6>System update completed</h6>
                            <p>Platform upgraded to v2.4.1</p>
                            <small class="text-muted">5 hours ago</small>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <!-- Quick Stats Row -->
    <div class="row g-4 mb-4">

        <div class="col-xl-4 col-md-6 animate-in animate-delay-5">
            <div class="dashboard-card">
                <div class="card-header-custom">
                    <div>
                        <h5>User Distribution</h5>
                        <small class="text-muted">By account type</small>
                    </div>
                </div>
                <div class="d-flex flex-column gap-3">
                    <div>
                        <div class="d-flex justify-content-between mb-1">
                            <span style="font-size:13px;font-weight:500;">Admins</span>
                            <span style="font-size:13px;font-weight:600;color:var(--icon-purple);">5%</span>
                        </div>
                        <div style="height:6px;background:var(--bg-input);border-radius:var(--radius-full);overflow:hidden;">
                            <div style="width:5%;height:100%;background:var(--primary);border-radius:var(--radius-full);transition:width 0.6s ease;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between mb-1">
                            <span style="font-size:13px;font-weight:500;">Vendors</span>
                            <span style="font-size:13px;font-weight:600;color:var(--icon-cyan);">25%</span>
                        </div>
                        <div style="height:6px;background:var(--bg-input);border-radius:var(--radius-full);overflow:hidden;">
                            <div style="width:25%;height:100%;background:var(--accent);border-radius:var(--radius-full);transition:width 0.6s ease;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between mb-1">
                            <span style="font-size:13px;font-weight:500;">Users</span>
                            <span style="font-size:13px;font-weight:600;color:var(--icon-blue);">70%</span>
                        </div>
                        <div style="height:6px;background:var(--bg-input);border-radius:var(--radius-full);overflow:hidden;">
                            <div style="width:70%;height:100%;background:var(--secondary);border-radius:var(--radius-full);transition:width 0.6s ease;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 animate-in animate-delay-5">
            <div class="dashboard-card">
                <div class="card-header-custom">
                    <div>
                        <h5>Server Status</h5>
                        <small class="text-muted">System health overview</small>
                    </div>
                </div>
                <div class="d-flex flex-column gap-3">
                    <div>
                        <div class="d-flex justify-content-between mb-1">
                            <span style="font-size:13px;font-weight:500;">CPU Usage</span>
                            <span style="font-size:13px;font-weight:600;color:var(--icon-green);">34%</span>
                        </div>
                        <div style="height:6px;background:var(--bg-input);border-radius:var(--radius-full);overflow:hidden;">
                            <div style="width:34%;height:100%;background:var(--icon-green);border-radius:var(--radius-full);transition:width 0.6s ease;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between mb-1">
                            <span style="font-size:13px;font-weight:500;">Memory</span>
                            <span style="font-size:13px;font-weight:600;color:var(--icon-orange);">67%</span>
                        </div>
                        <div style="height:6px;background:var(--bg-input);border-radius:var(--radius-full);overflow:hidden;">
                            <div style="width:67%;height:100%;background:var(--icon-orange);border-radius:var(--radius-full);transition:width 0.6s ease;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between mb-1">
                            <span style="font-size:13px;font-weight:500;">Storage</span>
                            <span style="font-size:13px;font-weight:600;color:var(--icon-red);">82%</span>
                        </div>
                        <div style="height:6px;background:var(--bg-input);border-radius:var(--radius-full);overflow:hidden;">
                            <div style="width:82%;height:100%;background:var(--icon-red);border-radius:var(--radius-full);transition:width 0.6s ease;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12 animate-in animate-delay-6">
            <div class="dashboard-card">
                <div class="card-header-custom">
                    <div>
                        <h5>Quick Actions</h5>
                        <small class="text-muted">Frequently used shortcuts</small>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <a href="#" class="d-flex align-items-center gap-2 p-3 rounded-3"
                            style="background:var(--icon-purple-bg);transition:all var(--transition-fast);"
                            onmouseover="this.style.transform='translateY(-2px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <i class="bi bi-person-plus" style="font-size:18px;color:var(--icon-purple);"></i>
                            <span style="font-size:13px;font-weight:600;color:var(--icon-purple);">Add User</span>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="#" class="d-flex align-items-center gap-2 p-3 rounded-3"
                            style="background:var(--icon-cyan-bg);transition:all var(--transition-fast);"
                            onmouseover="this.style.transform='translateY(-2px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <i class="bi bi-shop" style="font-size:18px;color:var(--icon-cyan);"></i>
                            <span style="font-size:13px;font-weight:600;color:var(--icon-cyan);">Add Vendor</span>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="#" class="d-flex align-items-center gap-2 p-3 rounded-3"
                            style="background:var(--icon-orange-bg);transition:all var(--transition-fast);"
                            onmouseover="this.style.transform='translateY(-2px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <i class="bi bi-file-earmark-text" style="font-size:18px;color:var(--icon-orange);"></i>
                            <span style="font-size:13px;font-weight:600;color:var(--icon-orange);">Reports</span>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="#" class="d-flex align-items-center gap-2 p-3 rounded-3"
                            style="background:var(--icon-blue-bg);transition:all var(--transition-fast);"
                            onmouseover="this.style.transform='translateY(-2px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <i class="bi bi-gear" style="font-size:18px;color:var(--icon-blue);"></i>
                            <span style="font-size:13px;font-weight:600;color:var(--icon-blue);">Settings</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Users Table -->
    <div class="dashboard-card animate-in animate-delay-6">

        <div class="card-header-custom">
            <div>
                <h5>Recent Users</h5>
                <small class="text-muted">Latest registered accounts on the platform</small>
            </div>
            <div class="d-flex align-items-center gap-2">
                <div class="topbar-search" style="margin-right:0;">
                    <i class="bi bi-search search-icon"></i>
                    <input type="text" placeholder="Search users..." style="width:180px;">
                </div>
                <button class="btn btn-primary">
                    <i class="bi bi-plus-lg"></i> Add User
                </button>
            </div>
        </div>

        <div class="table-wrapper">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Status</th>
                        <th>Role</th>
                        <th>Joined</th>
                        <th style="text-align:right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="table-user-cell">
                                <div class="table-avatar"
                                    style="background:linear-gradient(135deg,var(--primary),var(--secondary));">
                                    RA
                                </div>
                                <div>
                                    <div class="table-user-name">Ralph Alva</div>
                                    <div class="table-user-email">ralph@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge-status badge-status-active">
                                <span class="dot"></span> Active
                            </span>
                        </td>
                        <td><span class="badge-role badge-role-admin">Admin</span></td>
                        <td>Dec 28, 2024</td>
                        <td>
                            <div class="table-actions" style="justify-content:flex-end;">
                                <button class="table-action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="table-action-btn" title="Edit"><i class="bi bi-pencil"></i></button>
                                <button class="table-action-btn danger" title="Delete"><i
                                        class="bi bi-trash3"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-user-cell">
                                <div class="table-avatar"
                                    style="background:linear-gradient(135deg,var(--accent),var(--secondary));">
                                    JD
                                </div>
                                <div>
                                    <div class="table-user-name">John Doe</div>
                                    <div class="table-user-email">john@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge-status badge-status-pending">
                                <span class="dot"></span> Pending
                            </span>
                        </td>
                        <td><span class="badge-role badge-role-vendor">Vendor</span></td>
                        <td>Dec 26, 2024</td>
                        <td>
                            <div class="table-actions" style="justify-content:flex-end;">
                                <button class="table-action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="table-action-btn" title="Edit"><i class="bi bi-pencil"></i></button>
                                <button class="table-action-btn danger" title="Delete"><i
                                        class="bi bi-trash3"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-user-cell">
                                <div class="table-avatar"
                                    style="background:linear-gradient(135deg,var(--icon-green),var(--accent));">
                                    AS
                                </div>
                                <div>
                                    <div class="table-user-name">Alex Smith</div>
                                    <div class="table-user-email">alex@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge-status badge-status-verified">
                                <span class="dot"></span> Verified
                            </span>
                        </td>
                        <td><span class="badge-role badge-role-user">User</span></td>
                        <td>Dec 24, 2024</td>
                        <td>
                            <div class="table-actions" style="justify-content:flex-end;">
                                <button class="table-action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="table-action-btn" title="Edit"><i class="bi bi-pencil"></i></button>
                                <button class="table-action-btn danger" title="Delete"><i
                                        class="bi bi-trash3"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-user-cell">
                                <div class="table-avatar"
                                    style="background:linear-gradient(135deg,var(--secondary),var(--icon-pink));">
                                    SW
                                </div>
                                <div>
                                    <div class="table-user-name">Sarah Wilson</div>
                                    <div class="table-user-email">sarah@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge-status badge-status-active">
                                <span class="dot"></span> Active
                            </span>
                        </td>
                        <td><span class="badge-role badge-role-vendor">Vendor</span></td>
                        <td>Dec 22, 2024</td>
                        <td>
                            <div class="table-actions" style="justify-content:flex-end;">
                                <button class="table-action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="table-action-btn" title="Edit"><i class="bi bi-pencil"></i></button>
                                <button class="table-action-btn danger" title="Delete"><i
                                        class="bi bi-trash3"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-user-cell">
                                <div class="table-avatar"
                                    style="background:linear-gradient(135deg,var(--primary),var(--icon-pink));">
                                    MJ
                                </div>
                                <div>
                                    <div class="table-user-name">Mike Johnson</div>
                                    <div class="table-user-email">mike@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge-status badge-status-inactive">
                                <span class="dot"></span> Inactive
                            </span>
                        </td>
                        <td><span class="badge-role badge-role-user">User</span></td>
                        <td>Dec 20, 2024</td>
                        <td>
                            <div class="table-actions" style="justify-content:flex-end;">
                                <button class="table-action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="table-action-btn" title="Edit"><i class="bi bi-pencil"></i></button>
                                <button class="table-action-btn danger" title="Delete"><i
                                        class="bi bi-trash3"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-between align-items-center mt-3 pt-3"
            style="border-top:1px solid var(--border-color);">
            <small class="text-muted">Showing 1-5 of 1,250 users</small>
            <nav>
                <ul class="pagination pagination-sm mb-0" style="gap:4px;">
                    <li class="page-item disabled">
                        <a class="page-link" href="#"
                            style="background:var(--bg-card);border-color:var(--border-color);color:var(--text-muted);border-radius:var(--radius-sm);">
                            <i class="bi bi-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#"
                            style="background:var(--primary);border-color:var(--primary);color:#fff;border-radius:var(--radius-sm);">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"
                            style="background:var(--bg-card);border-color:var(--border-color);color:var(--text-secondary);border-radius:var(--radius-sm);">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"
                            style="background:var(--bg-card);border-color:var(--border-color);color:var(--text-secondary);border-radius:var(--radius-sm);">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"
                            style="background:var(--bg-card);border-color:var(--border-color);color:var(--text-muted);border-radius:var(--radius-sm);">
                            ...
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"
                            style="background:var(--bg-card);border-color:var(--border-color);color:var(--text-secondary);border-radius:var(--radius-sm);">42</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"
                            style="background:var(--bg-card);border-color:var(--border-color);color:var(--text-muted);border-radius:var(--radius-sm);">
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

@endsection