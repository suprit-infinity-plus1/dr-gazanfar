@extends('layouts.master')

@section('title', 'About Us - Healdi')
@section('meta_description',
    'Learn more about Healdi, our experienced doctors, and our mission to provide the best
    medical care.')

@section('content')
    <!-- Start Breadcrumb
                ============================================= -->
    <div class="breadcrumb-area bg-gradient text-center">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url({{ asset('assets/img/shape/9.png') }});"></div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>About Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About
                ============================================= -->
    <div class="about-area bg-gray default-padding relative">

        <!-- Shape -->
        <div class="shape-left-top shape">
            <img src="{{ asset('assets/img/shape/1.png') }}" alt="Shape">
        </div>
        <!-- End Shape -->

        <div class="container">
            <div class="row align-center">

                <div class="col-lg-6 thumb">
                    <div class="thumb-box">
                        <img src="{{ asset('assets/img/about/2.jpg') }}" alt="Thumb">
                        <div class="intro-video">
                            <div class="video">
                                <a href="https://www.youtube.com/watch?v=5vY-D42NFP4"
                                    class="popup-youtube relative theme video-play-button item-center">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <div class="content">
                                <h5>Let’s see our intro video</h5>
                                <p>
                                    If your smile is not becoming to you, then you should be coming.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 info title">
                    <h5>Has been working since 2000</h5>
                    <h2>A Great Place to Work. A Great Place to <strong>Receive.</strong></h2>
                    <p>
                        Pursuit chamber as elderly amongst on. Distant however warrant farther to of. My justice wishing
                        prudent waiting in be. Who decisively attachment has dispatched. Fruit defer in party me built under
                        first. Forbade him but savings
                    </p>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Online Appoinment</a></h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-drugs"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Health Queries</a></h5>
                            </div>
                        </li>
                    </ul>
                    <a class="btn btn-md btn-gradient" href="#"><i class="fas fa-angle-right"></i> Make Appoinment</a>
                </div>

            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Services
                ============================================= -->
    <div class="department-area icon-only carousel-shadow default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Services</h4>
                        <h2>Our Department</h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it
                            examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="item-box text-center">
                <div class="department-carousel owl-carousel owl-theme">
                    <!-- Single Item -->
                    <div class="item">
                        <div class="info">
                            <h4>
                                <a href="#">Body Surgery</a>
                            </h4>
                            <div class="icon">
                                <i class="flaticon-broken-bone"></i>
                            </div>
                            <p>
                                Attachment astonished to on appearance imprudence so collecting date expert over excellence.
                                Tiled way blind lived.
                            </p>
                            <a class="btn btn-sm circle btn-theme border" href="#"><i class="fas fa-angle-right"></i>
                                Read More</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="info">
                            <h4>
                                <a href="#">Knee Treatment</a>
                            </h4>
                            <div class="icon">
                                <i class="flaticon-tooth-1"></i>
                            </div>
                            <p>
                                Attachment astonished to on appearance imprudence so collecting date expert over excellence.
                                Tiled way blind lived.
                            </p>
                            <a class="btn btn-sm circle btn-theme border" href="#"><i class="fas fa-angle-right"></i>
                                Read More</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="info">
                            <h4>
                                <a href="#">Eye Care</a>
                            </h4>
                            <div class="icon">
                                <i class="flaticon-ophtalmology"></i>
                            </div>
                            <p>
                                Attachment astonished to on appearance imprudence so collecting date expert over excellence.
                                Tiled way blind lived.
                            </p>
                            <a class="btn btn-sm circle btn-theme border" href="#"><i class="fas fa-angle-right"></i>
                                Read More</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="info">
                            <h4>
                                <a href="#">Blood Cancer</a>
                            </h4>
                            <div class="icon">
                                <i class="flaticon-blood"></i>
                            </div>
                            <p>
                                Attachment astonished to on appearance imprudence so collecting date expert over excellence.
                                Tiled way blind lived.
                            </p>
                            <a class="btn btn-sm circle btn-theme border" href="#"><i class="fas fa-angle-right"></i>
                                Read More</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="info">
                            <h4>
                                <a href="#">Neurology Sargery</a>
                            </h4>
                            <div class="icon">
                                <i class="flaticon-neurology"></i>
                            </div>
                            <p>
                                Attachment astonished to on appearance imprudence so collecting date expert over excellence.
                                Tiled way blind lived.
                            </p>
                            <a class="btn btn-sm circle btn-theme border" href="#"><i class="fas fa-angle-right"></i>
                                Read More</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Choose Us
                ============================================= -->
    <div class="choose-us-area relative inc-list">
        <div class="row">
            <div class="col-lg-6 thumb bg-cover" style="background-image: url({{ asset('assets/img/banner/3.jpg') }});">
            </div>
            <div class="col-lg-6 info">
                <div class="info-box title">
                    <h5>Why Choose Us</h5>
                    <h2>At Our Clinic Our <br> Doctors Specialize in you.</h2>
                    <ul>
                        <li>
                            <h5>More Experience</h5>
                            <p>
                                Be confident in the treatment plan and your doctor’s abilities.
                            </p>
                        </li>
                        <li>
                            <h5>The right answers?</h5>
                            <p>
                                Get the answers and assurance you deserve and you can trust.
                            </p>
                        </li>
                        <li>
                            <h5>Seamless care</h5>
                            <p>
                                We’re committed to delivering compassionate healthcare.
                            </p>
                        </li>
                        <li>
                            <h5>Unparalleled expertise</h5>
                            <p>
                                Don’t doubt that you are getting the expert care that you deserve.
                            </p>
                        </li>
                    </ul>
                    <a class="btn btn-md btn-gradient" href="#"><i class="fas fa-angle-right"></i> About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Choose Us -->

    <!-- Start Team
                ============================================= -->
    <div class="team-default-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Doctors</h4>
                        <h2>Meet our Experts</h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it
                            examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/doctors/1.jpg') }}" alt="Thumb">
                                <div class="contact">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-phone"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <h5>Dr. Jonathom Doe</h5>
                                <span>Dentist</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/doctors/8.jpg') }}" alt="Thumb">
                                <div class="contact">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-phone"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <h5>Prof. Sakaoat Amir</h5>
                                <span>Neurologist</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/doctors/6.jpg') }}" alt="Thumb">
                                <div class="contact">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-phone"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <h5>Dr. Andro kuria</h5>
                                <span>Dermatologists</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/doctors/4.jpg') }}" alt="Thumb">
                                <div class="contact">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-phone"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <h5>Prof. Matori Pulas</h5>
                                <span>Medicine Specialists</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team -->

    <!-- Start Testomonials
                ============================================= -->
    <div class="testimonials-area overflow-hidden carousel-shadow default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-4 text-light">
                    <div class="heading title-mini">
                        <h5>Testimonials</h5>
                        <h2>Whay people says <br> about our services</h2>
                        <a class="btn btn-sm btn-light effect" href="#"><i class="fas fa-angle-right"></i>Viewl
                            All</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="testimonials-carousel text-center owl-carousel owl-theme">

                        <div class="item">
                            <div class="provider">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/team/1.jpg') }}" alt="Thumb">
                                </div>
                                <div class="bio">
                                    <h5>Jonathom Doe</h5>
                                    <span>patient of <strong>surgery</strong></span>
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                    Totally dearest expense on demesne ye he. Curiosity excellent commanded in me.
                                    Unpleasing.
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="provider">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/team/2.jpg') }}" alt="Thumb">
                                </div>
                                <div class="bio">
                                    <h5>Jonathom Doe</h5>
                                    <span>patient of <strong>surgery</strong></span>
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                    Totally dearest expense on demesne ye he. Curiosity excellent commanded in me.
                                    Unpleasing.
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="provider">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/team/3.jpg') }}" alt="Thumb">
                                </div>
                                <div class="bio">
                                    <h5>Jonathom Doe</h5>
                                    <span>patient of <strong>surgery</strong></span>
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                    Totally dearest expense on demesne ye he. Curiosity excellent commanded in me.
                                    Unpleasing.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testomonials Area -->
@endsection
