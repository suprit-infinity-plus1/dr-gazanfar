@extends('layouts.master')

@section('title', 'Doctor’s Professional Qualifications - Dr. Gazanfar')
@section('meta_description', 'Professional qualifications and certifications of Dr. Gazanfar.')

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
                    <h1>Doctor’s Professional Qualifications</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li class="active">Qualifications</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Qualifications About
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 info">
                    <h5>About Dr. Gazanfar</h5>
                    <h2>A Legacy of Excellence in Orthopaedics</h2>
                    <p>
                        Dr. Gazanfar Patel is a highly distinguished Senior Consultant Orthopaedic Surgeon known for his
                        expertise in Minimally Invasive and Robotic Joint Replacement Surgery. With a career spanning over a
                        decade, he has set benchmarks in patient care and surgical outcomes.
                    </p>
                    <p>
                        His academic journey is marked by prestigious qualifications and fellowships from renowned
                        institutions globally. Dr. Gazanfar is not just a surgeon but a thought leader, contributing to
                        scientific research and training the next generation of orthopaedic surgeons.
                    </p>
                    <div class="bottom-info">
                        <ul>
                            <li>
                                <i class="fas fa-check"></i> Specialized in Robotic Surgery
                            </li>
                            <li>
                                <i class="fas fa-check"></i> Fellowship Trained in Australia
                            </li>
                            <li>
                                <i class="fas fa-check"></i> Advanced Sports Medicine Expert
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 thumb">
                    <img src="{{ asset('assets/img/about/2.jpg') }}" alt="Dr. Gazanfar">
                </div>
            </div>
        </div>
    </div>
    <!-- End Qualifications About -->

    <!-- Start Certificates
    ============================================= -->
    <div class="certificates-area default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Achievements</h4>
                        <h2>Professional Certificates</h2>
                        <p>
                            A showcase of academic excellence and professional recognition awarded to Dr. Gazanfar Patel by
                            leading medical boards and associations.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                     <div class="certificate-items text-center">
                        <div class="row">
                            <!-- Certificate Item -->
                            <div class="col-lg-6 col-md-6 mb-30 pb-4">
                                <div class="certificate-card">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/certificates/cert-1.jpg') }}" alt="Fellowship in Arthroplasty">
                                    </div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h5 class="title">Fellowship in Arthroplasty</h5>
                                            <p class="description">Advanced specialized training in joint reconstruction and replacement surgery.</p>
                                        </div>
                                    </div>
                                    <a href="{{ asset('assets/img/certificates/cert-1.jpg') }}" class="popup-gallery card-link"></a>
                                </div>
                            </div>
                            
                            <!-- Certificate Item -->
                            <div class="col-lg-6 col-md-6 mb-30 pb-4">
                                <div class="certificate-card">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/certificates/cert-3.jpg') }}" alt="MBBS Degree">
                                    </div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h5 class="title">MBBS Degree</h5>
                                            <p class="description">Bachelor of Medicine, Bachelor of Surgery - Foundation of medical practice.</p>
                                        </div>
                                    </div>
                                    <a href="{{ asset('assets/img/certificates/cert-3.jpg') }}" class="popup-gallery card-link"></a>
                                </div>
                            </div>

                            <!-- Certificate Item -->
                            <div class="col-lg-6 col-md-6 mb-30 pb-4">
                                <div class="certificate-card">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/certificates/cert-2.jpg') }}" alt="Diplomate of National Board">
                                    </div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h5 class="title">Diplomate of National Board</h5>
                                            <p class="description">Postgraduate title awarded by the National Board of Examinations.</p>
                                        </div>
                                    </div>
                                    <a href="{{ asset('assets/img/certificates/cert-2.jpg') }}" class="popup-gallery card-link"></a>
                                </div>
                            </div>

                            <!-- Certificate Item -->
                            <div class="col-lg-6 col-md-6 mb-30 pb-4">
                                <div class="certificate-card">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/certificates/cert-4.jpg') }}" alt="Medical Qual. Registration">
                                    </div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h5 class="title">Medical Qual. Registration</h5>
                                            <p class="description">Official registration with the Medical Council indicating licensed practice.</p>
                                        </div>
                                    </div>
                                    <a href="{{ asset('assets/img/certificates/cert-4.jpg') }}" class="popup-gallery card-link"></a>
                                </div>
                            </div>

                            <!-- Certificate Item -->
                            <div class="col-lg-6 col-md-6 mb-30 pb-4">
                                <div class="certificate-card">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/certificates/cert-5.jpg') }}" alt="National Academy of Med. Sciences">
                                    </div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h5 class="title">National Academy of Med. Sciences</h5>
                                            <p class="description">Member of the prestigious National Academy of Medical Sciences.</p>
                                        </div>
                                    </div>
                                    <a href="{{ asset('assets/img/certificates/cert-5.jpg') }}" class="popup-gallery card-link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Certificates -->
@endsection
