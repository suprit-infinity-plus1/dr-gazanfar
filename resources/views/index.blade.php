@extends('layouts.master')

@section('title', 'Home - Dr. Gazanfar')
@section('meta_description',
    'Welcome to Dr. Gazanfar, your trusted medical and health partner. We offer expert surgery,
    dental, and general health services.')
@section('content')
    <!-- Start Banner
                                                                                                                                                                ============================================= -->
    <div class="banner-area inc-shape content-less">
        <div id="bootcarousel" class="carousel text-light text-large slide carousel-fade animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-cover" style="background-image: url({{ asset('assets/img/banner/1.jpg') }});">
                    </div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                            <h4 data-animation="animated slideInDown">Good doctor, Healthy life</h4>
                                            <h2 data-animation="animated slideInRight">Meet the <strong>Best
                                                    Doctors</strong></h2>
                                            <a data-animation="animated fadeInUp" class="btn btn-md btn-gradient"
                                                href="#"><i class="fas fa-angle-right"></i> Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover"
                        style="background-image: url({{ asset('assets/img/banner/2.jpg') }});"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                            <h4 data-animation="animated slideInDown">Best institution, Good services</h4>
                                            <h2 data-animation="animated slideInRight">Meet the <strong>Best
                                                    Hospital</strong></h2>
                                            <a data-animation="animated fadeInUp" class="btn btn-md btn-gradient"
                                                href="#"><i class="fas fa-angle-right"></i> Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <button class="carousel-control-prev" type="button" data-bs-target="#bootcarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#bootcarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Top Entry
                                                                                                                                                            ============================================= -->
    <div class="top-entry-area relative default-padding text-center">
        <div class="container">
            <div class="item-box">
                <div class="row align-center">
                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <i class="fas fa-ambulance"></i>
                            <h4>Hip Treatments</h4>
                            <p>
                                Hip treatments are a type of medical procedure that is used to treat hip pain and other
                                hip-related conditions. These treatments may include physical therapy, medication, and other
                                non-surgical procedures.
                            </p>
                            <ul>
                                <li>
                                    <span>Phone</span>
                                    <p>(+987)98765432</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="thumb">
                            {{-- <img src="{{ asset('assets/img/thumb/1.png') }}" alt="Thumb"> --}}
                            <img class="w-100" src="{{ asset('assets/img/doctors/17610.png') }}" alt="Thumb">
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <i class="fas fa-ribbon"></i>
                            <h4>Knee Treatments</h4>
                            <p>
                                Knee treatments are a type of medical procedure that is used to treat knee pain and other
                                knee-related conditions. These treatments may include physical therapy, medication, and
                                other non-surgical procedures.
                            </p>
                            <ul>
                                <li>
                                    <span>Phone</span>
                                    <p>(+987)98765432</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Entry -->

    <!-- Start About -->
    <div class="about-area default-padding bg-gray relative">

        <!-- Shape -->
        <div class="shape-left-top shape">
            <img src="{{ asset('assets/img/shape/1.png') }}" alt="Shape">
        </div>
        <!-- End Shape -->

        <div class="container">
            <div class="row">

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
                    <h5>Authority & Expertise</h5>
                    <h2>Trusted Orthopaedic Expertise for Pain-Free Movement</h2>
                    <p>
                        Dr. Gazanfar Patel is a highly respected Senior Consultant Orthopaedic Surgeon specializing in
                        Minimally Invasive, Robotic Joint Replacement and Sports Medicine. With a strong academic background
                        and extensive international training, he is committed to delivering precise, patient-centric
                        orthopaedic care using the latest surgical advancements.<br>

                        <br>
                        With over a decade of clinical excellence, Dr. Patel has successfully treated thousands of patients,
                        helping them regain mobility, relieve pain, and return to active lifestyles with confidence.
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
                    <a class="btn btn-md btn-gradient" href="#"><i class="fas fa-angle-right"></i> Make
                        Appoinment</a>
                </div>

            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Fun Factor Area -->
    <div class="fun-factor-area bg-gray default-padding-bottom">
        <div class="container">
            <div class="fun-fact-items bg-gradient text-light text-center">
                <div class="row">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="35000" data-speed="5000"></div>
                            <span class="medium">Patients Treated</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="11" data-speed="5000"></div>
                            <span class="medium">Years of Experience</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="50" data-speed="5000"></div>
                            <span class="medium">Departments</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="2348" data-speed="5000"></div>
                            <span class="medium">Servant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->

    <!-- Start Services -->
    <div class="department-area carousel-shadow default-padding-bottom bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        {{-- <h4>Services</h4> --}}
                        <h2>Our Treatments</h2>
                        <p>
                            we provide the best treatment to our patients. we are here to help you to get the best
                            treatment.

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="department-items department-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/departments/1.jpg') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">Anterior Hip Replacement</a></h4>
                                <p>
                                    Medical conditions such as arthritis can damage or wear out the articular cartilage
                                    covering the hip joint surface and cause inflammation and severe pain in the hip.
                                </p>
                                {{-- <div class="head-of">
                                    <p>
                                        <strong>Department head: </strong> Prof. Jonathom Doe
                                    </p>
                                </div> --}}
                                <div class="bottom">
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/departments/2.jpg') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">Non‑Surgical Hip Treatments</a></h4>
                                <p>
                                    Non‑surgical hip treatments offer effective alternatives to surgery for many hip
                                    conditions such as arthritis, bursitis, tendonitis or early degeneration.
                                </p>
                                {{-- <div class="head-of">
                                    <p>
                                        <strong>Department head: </strong> Prof. Jaknil Akia
                                    </p>
                                </div> --}}
                                <div class="bottom">
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/departments/3.jpg') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">Hip Fracture Surgery</a></h4>
                                <p>
                                    Hip fractures are breaks in the upper part of the femur near the hip joint often caused
                                    by falls in older adults or high‑impact trauma in younger individuals.
                                </p>
                                {{-- <div class="head-of">
                                    <p>
                                        <strong>Department head: </strong> Prof. Shikla Brotha
                                    </p>
                                </div> --}}
                                <div class="bottom">
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/departments/4.jpg') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">Revision Hip Replacement</a></h4>
                                <p>
                                    Revision hip replacement involves replacing or revising a previous hip implant when
                                    issues like loosening, wear, infection or fracture compromise the joint’s function and
                                    cause pain or instability.
                                </p>
                                {{-- <div class="head-of">
                                    <p>
                                        <strong>Department head: </strong> Prof. Jaknil Akia
                                    </p>
                                </div> --}}
                                <div class="bottom">
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="shape-bottom shape">
            <img src="{{ asset('assets/img/shape/8.png') }}" alt="Shape">
        </div>
        <!-- End Shape -->
    </div>
    <!-- End Services -->

    <!-- Start Consultation
                                                                                                                                                                                                                                                            ============================================= -->
    <div class="consultation-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-7 process title">
                    <h2>
                        How to get a <br> consultation
                    </h2>
                    <p>
                        Scheduling a consultation with Dr. Gazanfar Patel is simple and convenient. Patients receive expert
                        guidance, accurate diagnosis, and a personalized treatment plan focused on long-term recovery and
                        improved mobility.
                    </p>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="item">
                                <i class="flaticon-calendar-1"></i>
                                <h5>Make Appointment</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="item">
                                <i class="flaticon-doctor"></i>
                                <h5>Select A Doctor</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="item">
                                <i class="flaticon-heartbeat-1"></i>
                                <h5>Confirm Consultation</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 form">
                    <div class="appoinment-box text-center wow fadeInRight">
                        <div class="heading">
                            <h4>Make an Appointment</h4>
                        </div>
                        <form action="#">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="f_name" name="name" placeholder="Name"
                                            type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="f_phone" name="phone" placeholder="Phone"
                                            type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Child</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select>
                                            <option value="">Treatment</option>
                                            <option value="hip treatment">Hip Treatment</option>
                                            <option value="knee treatment">Knee Treatment</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" name="date" id="f_date" placeholder="Date"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="time" name="time" id="f_time" placeholder="Time"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit" id="f_submit">
                                        Book Appoinment
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Consultation -->

    <!-- Start Choose Us
                                                                                                                                                                                                                                                            ============================================= -->
    <div class="choose-us-area">
        <div class="row">
            <div class="col-lg-6 thumb bg-cover" style="background-image: url({{ asset('assets/img/banner/3.jpg') }});">
            </div>
            <div class="col-lg-6 info">
                <div class="info-box title">
                    <h5>At a Glance</h5>
                    <h2>Expertise That Puts Patients First</h2>
                    <p>
                        Dr. Gazanfar Patel offers advanced orthopaedic care with a personalized approach. Specializing in
                        robotic joint replacement, sports injuries, and complex knee and hip procedures, he is committed to
                        helping patients return to active, pain-free lives through precise and ethical medical care.
                    </p>
                    <p>
                        Dr. Patel believes in a patient first approach combining clinical excellence with clear
                        communication and compassionate care. From accurate diagnosis to complete recovery, patients receive
                        focused attention and evidence-based treatment at every stage.
                    </p>
                    <a class="btn btn-md btn-gradient" href="#"><i class="fas fa-angle-right"></i> Doctor Lists</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Choose Us -->

    <!-- Start Doctos Area
                                                                                                                                                                                                                                                            ============================================= -->
    {{-- <div class="doctors-area bg-gray default-padding">
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
            <div class="doctor-items">
                <div class="row">
                    <div class="col-lg-6 thumb">
                        <img src="{{ asset('assets/img/doctors/1.jpg') }}" alt="Thumb">
                    </div>
                    <div class="col-lg-6 info-box">
                        <div class="info">
                            <h4>Dr. Jonathom Doe</h4>
                            <span>MBBS, BMBS, MBChB, MBBCh</span>
                            <p>
                                Delightful unreserved impossible few estimating men favourable see
                                entreaties. She propriety immediate was improving. He or entrance
                                humoured likewise
                            </p>
                            <a class="btn btn-sm btn-gradient cirlce" href="#"><i class="fas fa-angle-right"></i>
                                Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Doctos Area -->

    <!-- Start Gallery
                                                                                                                                                                                                                                                        ============================================= -->
    <div class="gallery-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Gallery</h4>
                        <h2>Our Environment</h2>
                        <p>
                            Explore moments from Dr. Gazanfar Patel’s clinical practice, advanced surgical procedures,
                            academic activities, and professional milestones in orthopaedic care.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="gallery-items-area text-center">
                <div class="row">
                    <div class="col-md-12 gallery-content">
                        <div class="mix-item-menu text-center">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".development">Surgery</button>
                            <button data-filter=".consulting">Orthopaedics</button>
                            <button data-filter=".finance">Joint Replacement</button>
                            <button data-filter=".branding">Fracture Care</button>
                            <button data-filter=".capital">Health</button>
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="magnific-mix-gallery masonary">
                            <div id="portfolio-grid" class="gallery-items colums-3">
                                <!-- Single Item -->
                                <div class="pf-item development capital">
                                    <div class="effect-box">
                                        <img src="{{ asset('assets/img/gallery/1.jpg') }}" alt="thumb">
                                        <div class="info">
                                            <h4><a href="#">General Surgery</a></h4>
                                            <a href="{{ asset('assets/img/gallery/1.jpg') }}" class="item popup-link"><i
                                                    class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting branding">
                                    <div class="effect-box">
                                        <img src="{{ asset('assets/img/gallery/2.jpg') }}" alt="thumb">
                                        <div class="info">
                                            <h4><a href="#">Primary Care</a></h4>
                                            <a href="{{ asset('assets/img/gallery/2.jpg') }}" class="item popup-link"><i
                                                    class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting finance">
                                    <div class="effect-box">
                                        <img src="{{ asset('assets/img/gallery/3.jpg') }}" alt="thumb">
                                        <div class="info">
                                            <h4><a href="#">Cardiology</a></h4>
                                            <a href="{{ asset('assets/img/gallery/3.jpg') }}" class="item popup-link"><i
                                                    class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item finance">
                                    <div class="effect-box">
                                        <img src="{{ asset('assets/img/gallery/4.jpg') }}" alt="thumb">
                                        <div class="info">
                                            <h4><a href="#">Cancer Care</a></h4>
                                            <a href="{{ asset('assets/img/gallery/4.jpg') }}" class="item popup-link"><i
                                                    class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item capital development">
                                    <div class="effect-box">
                                        <img src="{{ asset('assets/img/gallery/5.jpg') }}" alt="thumb">
                                        <div class="info">
                                            <h4><a href="#">Knee Treatment</a></h4>
                                            <a href="{{ asset('assets/img/gallery/5.jpg') }}" class="item popup-link"><i
                                                    class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting branding">
                                    <div class="effect-box">
                                        <img src="{{ asset('assets/img/gallery/6.jpg') }}" alt="thumb">
                                        <div class="info">
                                            <h4><a href="#">Eye Care</a></h4>
                                            <a href="{{ asset('assets/img/gallery/6.jpg') }}" class="item popup-link"><i
                                                    class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

    <!-- Start Testomonials
                                                                                                                                                                                                                                                            ============================================= -->
    <div class="testimonials-area overflow-hidden carousel-shadow default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-4 text-light">
                    <div class="heading title-mini">
                        <h5>Testimonials</h5>
                        <h2>What people says <br> about Dr. Gazanfar</h2>
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
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testomonials Area -->

    <!-- Start Blog
                                                                                                                                                                                                                                                            ============================================= -->
    <div class="blog-area bottom-less bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>News</h4>
                        <h2>Latest Blog</h2>
                        <p>
                            Explore moments from Dr. Gazanfar Patel’s clinical practice, advanced surgical procedures,
                            academic activities, and professional milestones in orthopaedic care.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('assets/img/blog/1.jpg') }}" alt="Thumb"></a>
                                <div class="post-date">
                                    12 Jul
                                </div>
                            </div>
                            <div class="info">
                                <div class="tags">
                                    <ul>
                                        <li>
                                            <a href="#">Health</a>
                                        </li>
                                        <li>
                                            <a href="#">Patient</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Enjoyed me settled mr respect no spirits civilly. </a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('assets/img/team/5.jpg') }}" alt="Author">
                                                <span>Author</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 12 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('assets/img/blog/2.jpg') }}" alt="Thumb"></a>
                                <div class="post-date">
                                    05 Aug
                                </div>
                            </div>
                            <div class="info">
                                <div class="tags">
                                    <ul>
                                        <li>
                                            <a href="#">Test</a>
                                        </li>
                                        <li>
                                            <a href="#">Doctor</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Suitable settling attended no doubtful feelings.</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('assets/img/team/4.jpg') }}" alt="Author">
                                                <span>Author</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 24 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('assets/img/blog/3.jpg') }}" alt="Thumb"></a>
                                <div class="post-date">
                                    27 Dec
                                </div>
                            </div>
                            <div class="info">
                                <div class="tags">
                                    <ul>
                                        <li>
                                            <a href="#">Patient</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Unwilling sportsmen he in questions september. </a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('assets/img/team/3.jpg') }}" alt="Author">
                                                <span>Author</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 07 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Contact Area
                                                                                                                                                                                                                                                            ============================================= -->
    <div id="contact" class="contact-us-area default-padding">
        <div class="container">
            <div class="contact-items">
                <div class="row">

                    <div class="col-lg-7 wow address-box fadeInUp bg-cover"
                        style="background-image: url({{ asset('assets/img/contact/1.jpg') }});">
                        <div class="address-info">
                            <ul>
                                <li>
                                    <h5><i class="flaticon-call"></i> Phone</h5>
                                    <span>+44-20-7328-4499</span>
                                </li>
                                <li>
                                    <h5><i class="flaticon-email"></i> Email</h5>
                                    <span>info@drgazanfar.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 wow fadeInLeft contact-form-box">
                        <h2>Need help? <strong>Let's ask your questions</strong></h2>
                        <form action="{{ asset('assets/mail/contact.php') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*"
                                            type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message
                                    </button>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-lg-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
@endsection
