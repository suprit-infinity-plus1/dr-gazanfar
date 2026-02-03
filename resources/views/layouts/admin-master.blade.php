<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title', 'Admin Panel') - Dr. Gazanfar</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/bundles/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/bundles/bootstrap-daterangepicker/daterangepicker.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/bundles/chocolat/dist/css/chocolat.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/bundles/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">

    @yield('styles')
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            <!-- Top Navigation Bar -->
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"><i
                                    data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <i class="far fa-user"></i>
                            <span class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">Hello Admin</div>
                            <a href="#" class="dropdown-item has-icon"> <i class="far fa-user"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('home') }}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Back to Website
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <!-- Sidebar -->
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ route('dashboard') }}">
                            <img alt="image" src="{{ asset('assets/img/logo1.png') }}" class="header-logo"
                                style="max-width: 150px;" />
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Manage Menu</li>

                        <li class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="fas fa-fire"></i><span>Dashboard</span>
                            </a>
                        </li>

                        <!-- Blog Management -->
                        <li class="dropdown {{ Request::routeIs('admin.blogs*') ? 'active' : '' }}">
                            <a href="#" class="menu-toggle nav-link has-dropdown">
                                <i class="fas fa-blog"></i><span>Blog Management</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li
                                    class="{{ Request::routeIs('admin.blogs') && !Request::routeIs('admin.blogs.categories') && !Request::routeIs('admin.blogs.tags') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.blogs') }}">All Blogs</a>
                                </li>
                                <li class="{{ Request::routeIs('admin.blogs.categories*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.blogs.categories') }}">Categories</a>
                                </li>
                                <li class="{{ Request::routeIs('admin.blogs.tags*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.blogs.tags') }}">Tags</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                {{ session('error') }}
                            </div>
                        </div>
                    @endif

                    @yield('content')
                </section>
            </div>

            <!-- Footer -->
            <footer class="main-footer">
                <div class="footer-left">
                    <a href="https://sanjaresolutions.com/">Sanjar E Solutions</a>
                </div>
                <div class="footer-right">
                    Copyright © 2025. Designed by <a href="https://sanjaresolutions.com/">Sanjar E Solutions</a>
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('admin/js/app.min.js') }}"></script>
    <script src="{{ asset('admin/bundles/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
    <script src="{{ asset('admin/bundles/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin/bundles/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.validate.min.js') }}"></script>

    <!-- jQuery Lazy Load -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

    @yield('scripts')
</body>

</html>
