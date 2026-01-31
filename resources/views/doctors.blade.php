@extends('layouts.master')

@section('title', 'Our Doctors - Healdi')
@section('meta_description', 'Meet our team of expert doctors and specialists dedicated to your health.')

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
                    <h1>Doctor List</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Doctor</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Team
            ============================================= -->
    <div class="team-default-area bg-gray default-padding bottom-less">
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
                                <img src="{{ asset('assets/img/doctors/2.jpg') }}" alt="Thumb">
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
                                <img src="{{ asset('assets/img/doctors/3.jpg') }}" alt="Thumb">
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
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/doctors/5.jpg') }}" alt="Thumb">
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
                                <img src="{{ asset('assets/img/doctors/7.jpg') }}" alt="Thumb">
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
@endsection
