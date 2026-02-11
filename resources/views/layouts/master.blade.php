<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Dr. Gazanfar')">
    <meta name="keywords" content="@yield('meta_keywords', 'medical, health, doctor, hospital, clinic, healthcare')">
    <meta name="author" content="Dr. Gazanfar">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="@yield('canonical_url', url()->current())">
    <meta property="og:title" content="@yield('og_title', View::getSection('title') ?? 'Dr. Gazanfar')">
    <meta property="og:description" content="@yield('og_description', View::getSection('meta_description') ?? 'Dr. Gazanfar')">
    <meta property="og:image" content="@yield('og_image', asset('assets/img/coastalcityorthopaedics-logo.png'))">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="@yield('canonical_url', url()->current())">
    <meta property="twitter:title" content="@yield('twitter_title', View::getSection('title') ?? 'Dr. Gazanfar')">
    <meta property="twitter:description" content="@yield('twitter_description', View::getSection('meta_description') ?? 'Dr. Gazanfar')">
    <meta property="twitter:image" content="@yield('twitter_image', asset('assets/img/coastalcityorthopaedics-logo.png'))">

    <!-- Canonical -->
    <link rel="canonical" href="@yield('canonical_url', url()->current())">

    <!-- ========== Page Title ========== -->
    <title>@yield('title', 'Dr. Gazanfar')</title>

    <!-- ========== Favicon Icon ========== -->
    {{-- <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon"> --}}
    <link rel="shortcut icon" href="{{ asset('assets/img/coastalcityorthopaedics-favicon.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootsnav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon-set.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- ========== End Stylesheet ========== -->

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top
    ============================================= -->
    <div class="top-bar-area inc-pad inc-border">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 info">
                    <p>
                        <a href="mailto:info@drgazanfar.com"> info@drgazanfar.com</a>
                    </p>
                </div>
                <div class="col-lg-6 text-end item-flex">
                    <div class="info">
                        <ul>
                            <li>
                                <a href="#">Online Appoinment</a>
                            </li>
                            <li>
                                <a href="#">WebMail</a>
                            </li>
                        </ul>
                    </div>
                    <div class="social">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->


    <!-- Header
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs dark">

            <div class="container d-flex justify-content-between align-items-center">


                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('assets/img/coastalcityorthopaedics-logo.png') }}" class="logo"
                            alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <div class="collapse-header">
                        <img src="{{ asset('assets/img/coastalcityorthopaedics-logo.png') }}" alt="Logo">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>

                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('about') }}" class="dropdown-toggle" data-toggle="dropdown">About
                                Us</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('qualifications') }}">Doctor’s
                                        Professional Qualifications</a></li>
                                <li><a href="{{ route('scientific-contributions') }}">Scientific
                                        Contributions and Excellence</a></li>
                                <li><a href="{{ route('awards') }}">Awards, Honours &amp; Recognitions</a></li>
                                <li><a href="#">Fellowships
                                        and Advanced Higher Training</a></li>
                                <li><a href="#">Professional
                                        Organizations and Registrations</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('about') }}" class="dropdown-toggle"
                                data-toggle="dropdown">Treatments</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('hip-treatments') }}">Hip Treatments</a></li>
                                <li><a href="{{ route('knee-treatments') }}">Knee Treatments</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('about') }}" class="dropdown-toggle"
                                data-toggle="dropdown">Conditions</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('hip-conditions') }}">Hip Conditions</a></li>
                                <li><a href="{{ route('knee-conditions') }}">Knee Conditions</a></li>
                            </ul>
                        </li>
                        {{-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Doctors</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('doctors') }}">Doctors Version One</a></li>
                                <li><a href="doctors-2.html">Doctors Version Two</a></li>
                            </ul>
                        </li> --}}
                        <li>
                            <a href="{{ route('blogs') }}">Blogs</a>
                        </li>
                        <li>
                            <a href="#">Testimonials</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="contact">
                                <div class="call">
                                    <div class="icon">
                                        <i class="fas fa-stethoscope"></i>
                                    </div>
                                    <div class="info">
                                        <p>Have any Questions?</p>
                                        <h5><a href="mailto:info@drgazanfar.com">info@drgazanfar.com</a></h5>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->
                </div>
                <!-- End Atribute Navigation -->

            </div>
            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    @yield('content')

    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            {{-- <img src="{{ asset('assets/img/logo-light.png') }}" alt="Logo"> --}}
                            <img src="{{ asset('assets/img/coastalcityorthopaedics-logo.png') }}" alt="Logo">
                            <p>
                                Required honoured trifling eat pleasure man relation. Assurance yet bed was improving
                                furniture man.
                            </p>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-email"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Email:</h5>
                                            <span>info@drgazanfar.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Phone:</h5>
                                            <span>+44-20-7328-4499</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="single-item col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Department</h4>
                            <ul>
                                <li>
                                    <a href="#">Medecine & Health</a>
                                </li>
                                <li>
                                    <a href="#">Knee Treatment</a>
                                </li>
                                <li>
                                    <a href="#">Hip Treatment</a>
                                </li>
                                <li>
                                    <a href="#">Children Chare</a>
                                </li>
                                <li>
                                    <a href="#">Traumatology</a>
                                </li>
                                <li>
                                    <a href="#">X-ray</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="single-item col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Usefull Links</h4>
                            <ul>
                                <li>
                                    <a href="#">Ambulance</a>
                                </li>
                                <li>
                                    <a href="#">Emergency</a>
                                </li>
                                <li>
                                    <a href="{{ route('blogs') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Project</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="single-item col-lg-4 col-md-6 item">
                        <div class="f-item branches">
                            <div class="branches">
                                <ul>
                                    <li>
                                        <strong>USA Branches:</strong>
                                        <span>4992 Bryan Avenue, Prior Lake, Minnesota <br> Phone: 651-379-4698</span>
                                    </li>
                                    <li>
                                        <strong>Central Branches:</strong>
                                        <span>2001 Kia Magentis, Prior Lake, Minnesota <br> Phone: 651-379-4698</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <p>Copyright &copy; 2025. Designed by <a href="https://sanjaresolutions.com/">Sanjar E
                                Solutions</a></p>
                    </div>
                    <div class="col-lg-6 text-end social">
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-youtube"></i> Youtube</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('assets/js/circle-progress.js') }}"></script>
    <script src="{{ asset('assets/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.backgroundMove.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/loopcounter.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/js/progresscircle.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')

</body>

</html>
