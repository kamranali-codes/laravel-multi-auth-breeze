@extends('vendor.layouts.master')

@section('title', 'Vendor Dashboard')

@section('page-title', 'Store Overview')

@section('content')

    <!-- Page Header -->
    <div class="page-header animate-in">
        <div class="breadcrumb-custom">
            <a href="{{ route('vendor.dashboard') }}">Vendor</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span>Dashboard</span>
        </div>
        <h1 class="page-title">Welcome back, {{ Auth::user()->name }}</h1>
        <p class="page-subtitle">Here's your store performance overview for today.</p>
    </div>

    <!-- Stat Cards -->
    <div class="row g-4 mb-4">

        <div class="col-xl-3 col-md-6 animate-in animate-delay-1">
            <div class="stats-card stats-cyan">
                <div class="stats-card-header">
                    <div class="stats-icon">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <span class="stats-trend up">
                        <i class="bi bi-arrow-up-short"></i>4.2%
                    </span>
                </div>
                <h3>240</h3>
                <p>Total Products</p>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 animate-in animate-delay-2">
            <div class="stats-card stats-green">
                <div class="stats-card-header">
                    <div class="stats-icon">
                        <i class="bi bi-cart-check"></i>
                    </div>
                    <span class="stats-trend up">
                        <i class="bi bi-arrow-up-short"></i>12.5%
                    </span>
                </div>
                <h3>1,540</h3>
                <p>Completed Orders</p>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 animate-in animate-delay-3">
            <div class="stats-card stats-purple">
                <div class="stats-card-header">
                    <div class="stats-icon">
                        <i class="bi bi-currency-dollar"></i>
                    </div>
                    <span class="stats-trend up">
                        <i class="bi bi-arrow-up-short"></i>8.1%
                    </span>
                </div>
                <h3>$12,540</h3>
                <p>Total Earnings</p>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 animate-in animate-delay-4">
            <div class="stats-card stats-orange">
                <div class="stats-card-header">
                    <div class="stats-icon">
                        <i class="bi bi-star"></i>
                    </div>
                    <span class="stats-trend up">
                        <i class="bi bi-arrow-up-short"></i>0.3%
                    </span>
                </div>
                <h3>4.9</h3>
                <p>Vendor Rating</p>
            </div>
        </div>

    </div>

    <!-- Chart + Activity Row -->
    <div class="row g-4 mb-4">

        <!-- Earnings Chart -->
        <div class="col-xl-8 animate-in animate-delay-5">
            <div class="dashboard-card">
                <div class="card-header-custom">
                    <div>
                        <h5>Earnings Overview</h5>
                        <small class="text-muted">Monthly sales performance</small>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-soft-primary btn-sm">Weekly</button>
                        <button class="btn btn-primary btn-sm">Monthly</button>
                    </div>
                </div>
                <div class="chart-placeholder" id="revenueChart">
                    <div class="chart-bar" style="height:38%;background:var(--accent);opacity:0.45;"></div>
                    <div class="chart-bar" style="height:55%;background:var(--accent);opacity:0.5;"></div>
                    <div class="chart-bar" style="height:42%;background:var(--accent);opacity:0.45;"></div>
                    <div class="chart-bar" style="height:68%;background:var(--secondary);opacity:0.5;"></div>
                    <div class="chart-bar" style="height:48%;background:var(--accent);opacity:0.5;"></div>
                    <div class="chart-bar" style="height:75%;background:var(--secondary);opacity:0.6;"></div>
                    <div class="chart-bar" style="height:62%;background:var(--accent);opacity:0.55;"></div>
                    <div class="chart-bar" style="height:85%;background:var(--secondary);opacity:0.7;"></div>
                    <div class="chart-bar" style="height:72%;background:var(--accent);opacity:0.6;"></div>
                    <div class="chart-bar" style="height:58%;background:var(--secondary);opacity:0.5;"></div>
                    <div class="chart-bar" style="height:82%;background:var(--accent);opacity:0.65;"></div>
                    <div class="chart-bar" style="height:92%;background:linear-gradient(180deg,var(--accent),var(--primary));"></div>
                </div>
            </div>
        </div>

        <!-- Top Products -->
        <div class="col-xl-4 animate-in animate-delay-6">
            <div class="dashboard-card h-100">
                <div class="card-header-custom">
                    <div>
                        <h5>Top Products</h5>
                        <small class="text-muted">Best sellers this month</small>
                    </div>
                    <a href="#" class="btn btn-sm btn-soft-primary">View All</a>
                </div>
                <ul class="activity-list">
                    <li class="activity-item">
                        <div class="activity-icon" style="background:var(--icon-cyan-bg);color:var(--icon-cyan);">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <div class="activity-body">
                            <h6>Wireless Headphones</h6>
                            <p>142 units sold • $8,520 earned</p>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon" style="background:var(--icon-purple-bg);color:var(--icon-purple);">
                            <i class="bi bi-smartwatch"></i>
                        </div>
                        <div class="activity-body">
                            <h6>Smart Watch Pro</h6>
                            <p>98 units sold • $5,880 earned</p>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon" style="background:var(--icon-green-bg);color:var(--icon-green);">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <div class="activity-body">
                            <h6>Ultra Slim Laptop</h6>
                            <p>64 units sold • $4,210 earned</p>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon" style="background:var(--icon-orange-bg);color:var(--icon-orange);">
                            <i class="bi bi-controller"></i>
                        </div>
                        <div class="activity-body">
                            <h6>Gaming Controller</h6>
                            <p>210 units sold • $3,150 earned</p>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon" style="background:var(--icon-blue-bg);color:var(--icon-blue);">
                            <i class="bi bi-camera"></i>
                        </div>
                        <div class="activity-body">
                            <h6>DSLR Camera Kit</h6>
                            <p>32 units sold • $2,890 earned</p>
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
                <small class="text-muted">Latest customer purchases</small>
            </div>
            <div class="d-flex align-items-center gap-2">
                <div class="topbar-search" style="margin-right:0;">
                    <i class="bi bi-search search-icon"></i>
                    <input type="text" placeholder="Search orders..." style="width:180px;">
                </div>
                <button class="btn btn-primary">
                    <i class="bi bi-download"></i> Export
                </button>
            </div>
        </div>

        <div class="table-wrapper">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th style="text-align:right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight:600;color:var(--primary);">#1001</td>
                        <td>
                            <div class="table-user-cell">
                                <div class="table-avatar" style="background:linear-gradient(135deg,var(--accent),var(--secondary));">AR</div>
                                <div>
                                    <div class="table-user-name">Alex Rivera</div>
                                    <div class="table-user-email">alex@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>Wireless Headphones</td>
                        <td>
                            <span class="badge-status badge-status-active">
                                <span class="dot"></span> Completed
                            </span>
                        </td>
                        <td style="font-weight:600;color:var(--text-primary);">$240.00</td>
                        <td>Dec 28, 2024</td>
                        <td>
                            <div class="table-actions" style="justify-content:flex-end;">
                                <button class="table-action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="table-action-btn" title="Print"><i class="bi bi-printer"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:600;color:var(--primary);">#1002</td>
                        <td>
                            <div class="table-user-cell">
                                <div class="table-avatar" style="background:linear-gradient(135deg,var(--primary),var(--secondary));">JD</div>
                                <div>
                                    <div class="table-user-name">John Doe</div>
                                    <div class="table-user-email">john@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>Smart Watch Pro</td>
                        <td>
                            <span class="badge-status badge-status-pending">
                                <span class="dot"></span> Pending
                            </span>
                        </td>
                        <td style="font-weight:600;color:var(--text-primary);">$120.00</td>
                        <td>Dec 27, 2024</td>
                        <td>
                            <div class="table-actions" style="justify-content:flex-end;">
                                <button class="table-action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="table-action-btn" title="Print"><i class="bi bi-printer"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:600;color:var(--primary);">#1003</td>
                        <td>
                            <div class="table-user-cell">
                                <div class="table-avatar" style="background:linear-gradient(135deg,var(--icon-green),var(--accent));">SW</div>
                                <div>
                                    <div class="table-user-name">Sarah Wilson</div>
                                    <div class="table-user-email">sarah@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>Ultra Slim Laptop</td>
                        <td>
                            <span class="badge-status badge-status-shipped">
                                <span class="dot"></span> Shipped
                            </span>
                        </td>
                        <td style="font-weight:600;color:var(--text-primary);">$650.00</td>
                        <td>Dec 26, 2024</td>
                        <td>
                            <div class="table-actions" style="justify-content:flex-end;">
                                <button class="table-action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="table-action-btn" title="Print"><i class="bi bi-printer"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:600;color:var(--primary);">#1004</td>
                        <td>
                            <div class="table-user-cell">
                                <div class="table-avatar" style="background:linear-gradient(135deg,var(--secondary),var(--icon-pink));">EM</div>
                                <div>
                                    <div class="table-user-name">Emma Martin</div>
                                    <div class="table-user-email">emma@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>Gaming Controller</td>
                        <td>
                            <span class="badge-status badge-status-cancelled">
                                <span class="dot"></span> Cancelled
                            </span>
                        </td>
                        <td style="font-weight:600;color:var(--text-primary);">$15.00</td>
                        <td>Dec 25, 2024</td>
                        <td>
                            <div class="table-actions" style="justify-content:flex-end;">
                                <button class="table-action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="table-action-btn" title="Print"><i class="bi bi-printer"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-between align-items-center mt-3 pt-3" style="border-top:1px solid var(--border-color);">
            <small class="text-muted">Showing 1-4 of 1,540 orders</small>
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
                        <a class="page-link" href="#" style="background:var(--bg-card);border-color:var(--border-color);color:var(--text-secondary);border-radius:var(--radius-sm);">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" style="background:var(--bg-card);border-color:var(--border-color);color:var(--text-muted);border-radius:var(--radius-sm);">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" style="background:var(--bg-card);border-color:var(--border-color);color:var(--text-secondary);border-radius:var(--radius-sm);">85</a>
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