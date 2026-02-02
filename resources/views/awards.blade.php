@extends('layouts.master')

@section('title', 'Awards, Honours & Recognitions - Dr. Gazanfar')
@section('meta_description', 'Awards, Honours & Recognitions received by Dr. Gazanfar.')

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
                    <h1>Awards, Honours & Recognitions</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li class="active">Awards</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Featured Awards (Alternating Layout)
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Featured Awards</h2>
                        <p>Highlighting significant milestones and global recognition in the field of orthopaedics.</p>
                    </div>
                </div>
            </div>

            @php
                $dummyContent = "warded and completed the prestigious Delhi Orthopaedic Association (D.O.A.) travelling fellowship for the academic year 2017-18 at Ganga Medical Centre & Hospitals Pvt Ltd, Coimbatore, Tamil Nadu, India in the sub speciality of Sports Medicine, Arthroscopy (Knee, Shoulder, Hip, Ankle) and Arthroplasty (Knee, Hip, Shoulder).";
            @endphp

            @for ($i = 1; $i <= 5; $i++)
                <div class="row align-center mb-5">
                    @if ($i % 2 != 0)
                        <!-- Odd Items: Image Left, Text Right -->
                        <div class="col-lg-6 thumb">
                            <img src="https://placehold.co/600x400?text=Featured+Award+{{ $i }}" alt="Featured Award {{ $i }}" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-6 info">
                            <h3>Prestigious Award Title {{ $i }}</h3>
                            <p>{{ $dummyContent }}</p>
                            <ul>
                                <li>Global Recognition</li>
                                <li>Excellence in Surgery</li>
                            </ul>
                        </div>
                    @else
                        <!-- Even Items: Text Left, Image Right -->
                        <div class="col-lg-6 info order-last order-lg-first">
                            <h3>Prestigious Award Title {{ $i }}</h3>
                            <p>{{ $dummyContent }}</p>
                             <ul>
                                <li>Innovation Award</li>
                                <li>Medical Contribution</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 thumb order-first order-lg-last">
                            <img src="https://placehold.co/600x400?text=Featured+Award+{{ $i }}" alt="Featured Award {{ $i }}" class="img-fluid rounded">
                        </div>
                    @endif
                </div>
            @endfor
        </div>
    </div>
    <!-- End Featured Awards -->

    <!-- Start Distinctions & Recognitions (Text Grid)
    ============================================= -->
    <div class="services-area default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Distinctions & Recognitions</h2>
                        <p>A comprehensive list of professional honors and academic achievements.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @for ($i = 1; $i <= 10; $i++)
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="item">
                            <div class="info">
                                <h4>
                                    <a href="#">Distinction Title {{ $i }}</a>
                                </h4>
                                <p>
                                    {{ $dummyContent }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <!-- End Distinctions & Recognitions -->
@endsection
