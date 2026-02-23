@extends('layouts.master')

@section('title', 'Hip Conditions - Dr. Gazanfar')
@section('meta_description', 'Learn about common hip conditions and symptoms.')

@section('content')

    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area bg-gradient text-center">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url({{ asset('assets/img/shape/9.png') }});"></div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Hip Conditions</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Hip Conditions</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Department Single -->
    <div class="department-single-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="department-single-content">

                        <!-- Main H1 -->
                        <h1 class="mb-4" style="font-size: 2.2rem; font-weight: 700; line-height: 1.3;">
                            Hip Conditions
                        </h1>

                        <!-- Thumb -->
                        <div class="thumb mb-4">
                            <img src="{{ asset('assets/img/Conditions/Hip-Conditions.jpg') }}" alt="Hip Conditions"
                                style="width: 100%; border-radius: 8px;">
                        </div>

                        <!-- Content -->
                        <div class="intro-text mb-5">
                            <p>
                                Dr. Gazanfar specializes in diagnosing and treating a wide spectrum of hip conditions from
                                early-stage tendon and bursitis problems to advanced joint disease and fractures. Whether
                                you’re experiencing persistent groin pain, stiffness, or difficulty bearing weight, his goal
                                is to help you restore mobility, reduce discomfort, and return to the life you enjoy.
                            </p>
                            <p>
                                Using advanced diagnostics and personalized treatment plans, Dr. Gazanfar guides each
                                patient from assessment through recovery, whether through minimally invasive surgery or
                                total hip replacement, to relieve pain, protect the joint, and keep you active for years to
                                come.
                            </p>

                            <h3 class="mt-4 mb-3">Comprehensive Hip Conditions</h3>

                            <h4 class="mt-4">1. Joint & Degenerative Conditions</h4>
                            <ul>
                                <li><strong>Osteoarthritis of the Hip</strong> – Wear and tear of the joint cartilage.</li>
                                <li><strong>Inflammatory Arthritis of the Hip</strong> – Conditions like rheumatoid
                                    arthritis affecting the joint.</li>
                                <li><strong>Avascular Necrosis (AVN)</strong> – Loss of blood supply to the bone causing
                                    tissue death.</li>
                                <li><strong>Transient Osteoporosis of the Hip</strong> – Temporary loss of bone density
                                    causing pain.</li>
                                <li><strong>Hip Pain</strong> – General assessment for various sources of hip discomfort.
                                </li>
                            </ul>

                            <h4 class="mt-4">2. Hip Fractures & Traumatic Injuries</h4>
                            <ul>
                                <li><strong>Hip Fracture</strong> – A break in the upper quarter of the femur bone.</li>
                                <li><strong>Femoral Neck Fracture</strong> – Fracture specifically in the neck of the femur.
                                </li>
                                <li><strong>Femoral Shaft Fracture</strong> – Break in the long part of the thigh bone.</li>
                                <li><strong>Subtrochanteric Hip Fracture</strong> – Fracture just below the lesser
                                    trochanter.</li>
                                <li><strong>Stress Fractures of the Hip</strong> – Tiny cracks in the bone from repetitive
                                    force.</li>
                                <li><strong>Hip Dislocation</strong> – When the femoral head is pushed out of its socket.
                                </li>
                                <li><strong>Hip Injury</strong> – Acute trauma to the hip region.</li>
                            </ul>

                            <h4 class="mt-4">3. Soft Tissue & Sports Injuries</h4>
                            <ul>
                                <li><strong>Femoroacetabular Impingement (FAI)</strong> – Abnormal contact between the ball
                                    and socket.</li>
                                <li><strong>Trochanteric Bursitis</strong> – Inflammation of the fluid-filled sac on the
                                    outer hip.</li>
                                <li><strong>Iliopsoas Tendonitis</strong> – Inflammation of the hip flexor tendon.</li>
                                <li><strong>Hip Abductor Tears</strong> – Injuries to the gluteus medius or minimus tendons.
                                </li>
                                <li><strong>Hamstring Injuries</strong> – Strains or tears of the muscles at the back of the
                                    thigh.</li>
                                <li><strong>Snapping Hip</strong> – A snapping sensation or sound during hip movement.</li>
                            </ul>

                        </div>

                    </div>
                </div>

                <!-- Sidebar -->
                @include('partials.department-sidebar')
            </div>
        </div>
    </div>
    <!-- End Department Single -->

@endsection
