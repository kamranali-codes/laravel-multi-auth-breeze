@extends('user.layouts.master')

@section('title', 'User Dashboard')

@section('page-title', 'My Dashboard')

@section('content')

    <!-- Page Header -->
    <div class="page-header animate-in">
        <div class="breadcrumb-custom">
            <a href="{{ route('dashboard') }}">Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span>Dashboard</span>
        </div>
        <h1 class="page-title">Welcome back, {{ Auth::user()->name }} </h1>
        <p class="page-subtitle">Track your orders, manage your wishlist, and check your activity.</p>
    </div>

    <!-- Stat Cards -->
    <div class="row g-4 mb-4">

        <div class="col-xl-3 col-md-6 animate-in animate-delay-1">
            <div class="stats-card stats-cyan">
                <div class="stats-card-header">
                    <div class="stats-icon">
                        <i class="bi bi-cart"></i>
                    </div>
                    <span class="stats-trend up">
                        <i class="bi bi-arrow-up-short"></i>12%
                    </span>
                </div>
                <h3>18</h3>
                <p>Total Orders</p>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 animate-in animate-delay-2">
            <div class="stats-card stats-green">
                <div class="stats-card-header">
                    <div class="stats-icon">
                        <i class="bi bi-check-circle"></i>
                    </div>
                    <span class="stats-trend up">
                        <i class="bi bi-arrow-up-short"></i>8%
                    </span>
                </div>
                <h3>12</h3>
                <p>Completed Orders</p>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 animate-in animate-delay-3">
            <div class="stats-card stats-orange">
                <div class="stats-card-header">
                    <div class="stats-icon">
                        <i class="bi bi-clock"></i>
                    </div>
                    <span class="stats-trend down">
                        <i class="bi bi-arrow-down-short"></i>5%
                    </span>
                </div>
                <h3>3</h3>
                <p>Pending Orders</p>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 animate-in animate-delay-4">
            <div class="stats-card stats-pink">
                <div class="stats-card-header">
                    <div class="stats-icon">
                        <i class="bi bi-heart"></i>
                    </div>
                    <span class="stats-trend up">
                        <i class="bi bi-arrow-up-short"></i>2
                    </span>
                </div>
                <h3>7</h3>
                <p>Wishlist Items</p>
            </div>
        </div>

    </div>

    <!-- Chart + Activity Row -->
    <div class="row g-4 mb-4">

        <!-- Spend Chart -->
        <div class="col-xl-8 animate-in animate-delay-5">
            <div class="dashboard-card">
                <div class="card-header-custom">
                    <div>
                        <h5>Spending Overview</h5>
                        <small class="text-muted">Your monthly purchase history</small>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-soft-primary btn-sm">6 Months</button>
                        <button class="btn btn-primary btn-sm">1 Year</button>
                    </div>
                </div>
                <div class="chart-placeholder">
                    <div class="chart-bar" style="height:35%;background:var(--accent);opacity:0.4;"></div>
                    <div class="chart-bar" style="height:50%;background:var(--accent);opacity:0.5;"></div>
                    <div class="chart-bar" style="height:30%;background:var(--accent);opacity:0.4;"></div>
                    <div class="chart-bar" style="height:65%;background:var(--secondary);opacity:0.5;"></div>
                    <div class="chart-bar" style="height:45%;background:var(--accent);opacity:0.5;"></div>
                    <div class="chart-bar" style="height:72%;background:var(--secondary);opacity:0.6;"></div>
                    <div class="chart-bar" style="height:55%;background:var(--accent);opacity:0.55;"></div>
                    <div class="chart-bar" style="height:80%;background:var(--secondary);opacity:0.65;"></div>
                    <div class="chart-bar" style="height:60%;background:var(--accent);opacity:0.55;"></div>
                    <div class="chart-bar" style="height:48%;background:var(--secondary);opacity:0.5;"></div>
                    <div class="chart-bar" style="height:75%;background:var(--accent);opacity:0.6;"></div>
                    <div class="chart-bar" style="height:88%;background:linear-gradient(180deg,var(--accent),var(--primary));"></div>
                </div>
            </div>
        </div>

        <!-- Account Activity -->
        <div class="col-xl-4 animate-in animate-delay-6">
            <div class="dashboard-card h-100">
                <div class="card-header-custom">
                    <div>
                        <h5>Recent Activity</h5>
                        <small class="text-muted">Your latest account events</small>
                    </div>
                </div>
                <ul class="activity-list">
                    <li class="activity-item">
                        <div class="activity-icon" style="background:var(--icon-green-bg);color:var(--icon-green);">
                            <i class="bi bi-check-circle"></i>
                        </div>
                        <div class="activity-body">
                            <h6>Order #1001 Completed</h6>
                            <p>Wireless Headphones delivered</p>
                            <small class="text-muted">2 hours ago</small>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon" style="background:var(--icon-blue-bg);color:var(--icon-blue);">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <div class="activity-body">
                            <h6>Order #1003 Processing</h6>
                            <p>Gaming Mouse is being prepared</p>
                            <small class="text-muted">5 hours ago</small>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon" style="background:var(--icon-pink-bg);color:var(--icon-pink);">
                            <i class="bi bi-heart"></i>
                        </div>
                        <div class="activity-body">
                            <h6>Added to Wishlist</h6>
                            <p>Smart Watch Pro saved</p>
                            <small class="text-muted">1 day ago</small>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon" style="background:var(--icon-purple-bg);color:var(--icon-purple);">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="activity-body">
                            <h6>Login Detected</h6>
                            <p>Multan, Pakistan — Secure</p>
                            <small class="text-muted">2 days ago</small>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <!-- Recent Orders Table -->
    <div class="dashboard-card animate-in animate-delay-6">

        <div class="card-header-custom">
            <div>
                <h5>Recent Orders</h5>
                <small class="text-muted">Your latest purchase history</small>
            </div>
            <div class="d-flex align-items-center gap-2">
                <div class="topbar-search" style="margin-right:0;">
                    <i class="bi bi-search search-icon"></i>
                    <input type="text" placeholder="Search orders..." style="width:180px;">
                </div>
                <button class="btn btn-primary">
                    View All
                </button>
            </div>
        </div>

        <div class="table-wrapper">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th style="text-align:right;">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight:600;color:var(--primary);">#1001</td>
                        <td>Wireless Headphones</td>
                        <td>
                            <span class="badge-status badge-status-active">
                                <span class="dot"></span> Completed
                            </span>
                        </td>
                        <td style="font-weight:600;color:var(--text-primary);">$120.00</td>
                        <td>May 1, 2026</td>
                        <td style="text-align:right;">
                            <button class="btn btn-sm btn-soft-primary"><i class="bi bi-eye"></i> View</button>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:600;color:var(--primary);">#1002</td>
                        <td>Smart Watch</td>
                        <td>
                            <span class="badge-status badge-status-pending">
                                <span class="dot"></span> Pending
                            </span>
                        </td>
                        <td style="font-weight:600;color:var(--text-primary);">$85.00</td>
                        <td>May 3, 2026</td>
                        <td style="text-align:right;">
                            <button class="btn btn-sm btn-soft-primary"><i class="bi bi-eye"></i> View</button>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:600;color:var(--primary);">#1003</td>
                        <td>Gaming Mouse</td>
                        <td>
                            <span class="badge-status badge-status-processing">
                                <span class="dot"></span> Processing
                            </span>
                        </td>
                        <td style="font-weight:600;color:var(--text-primary);">$45.00</td>
                        <td>May 6, 2026</td>
                        <td style="text-align:right;">
                            <button class="btn btn-sm btn-soft-primary"><i class="bi bi-eye"></i> View</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-between align-items-center mt-3 pt-3" style="border-top:1px solid var(--border-color);">
            <small class="text-muted">Showing 1-3 of 18 orders</small>
            <nav>
                <ul class="pagination pagination-sm mb-0" style="gap:4px;">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" style="background:var(--bg-card);border-color:var(--border-color);color:var(--text-muted);border-radius:var(--radius-sm);">
                            <i class="bi bi-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#" style="background:var(--primary);border-color:var(--primary);color:#fff;border-radius:var(--radius-sm);">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" style="background:var(--bg-card);border-color:var(--border-color);color:var(--text-secondary);border-radius:var(--radius-sm);">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" style="background:var(--bg-card);border-color:var(--border-color);color:var(--text-muted);border-radius:var(--radius-sm);">
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

@endsection