@extends('layouts.master')

@section('title', 'Knee Treatments - Dr. Gazanfar')
@section('meta_description', 'Learn about our advanced knee treatments and procedures.')

@section('content')

    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area bg-gradient text-center">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url({{ asset('assets/img/shape/9.png') }});"></div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Knee Treatments</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Knee Treatments</li>
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
                            Knee Treatment
                        </h1>

                        <!-- Thumb -->
                        <div class="thumb mb-4">
                            <img src="{{ asset('assets/img/Treatments/Knee-Treatments.jpg') }}" alt="Knee Treatments"
                                style="width: 100%; border-radius: 8px;">
                        </div>

                        <!-- Content -->
                        <div class="intro-text mb-5">
                            <p>
                                Dr. Gazanfar offers a full spectrum of advanced knee treatments to support active
                                lifestyles. Whether you’re dealing with persistent knee pain, swelling, instability, or loss
                                of mobility, his goal is to help you regain strength, move without discomfort, and get back
                                to an active, fulfilling lifestyle.
                            </p>
                            <p>
                                Using state-of-the-art diagnostics and tailored treatment plans, Dr. Gazanfar guides each
                                patient through their journey, whether it involves minimally invasive arthroscopy, ligament
                                reconstruction, robotic-assisted total knee replacement, or targeted non-surgical
                                interventions, to relieve pain, preserve joint function, and keep you moving confidently for
                                years to come.
                            </p>

                            <h3 class="mt-4 mb-3">Comprehensive Knee Treatments</h3>

                            <h4 class="mt-4">1. Joint Replacement Surgery</h4>
                            <ul>
                                <li><strong>Primary Knee Replacement</strong> – Precision-aligned replacement for severe
                                    arthritis.</li>
                                <li><strong>Robotic Assisted Knee Replacement</strong> – Advanced technology for superior
                                    implant accuracy.</li>
                                <li><strong>Muscle-sparing Knee Replacement</strong> – Technique designed for faster
                                    recovery and less tissue trauma.</li>
                                <li><strong>Unicompartmental / Partial Knee Replacement</strong> – Replacing only the
                                    damaged part of the joint.</li>
                                <li><strong>Bilateral Knee Replacement</strong> – Addressing both knees in a single or
                                    staged setting.</li>
                                <li><strong>Revision & Complex Knee Replacement</strong> – Specialist care for failed or
                                    highly complex primary joints.</li>
                            </ul>

                            <h4 class="mt-4">2. Arthroscopic & Minimally Invasive Procedures</h4>
                            <ul>
                                <li><strong>Knee Arthroscopy</strong> – Minimally invasive "keyhole" surgery for diagnosis
                                    and repair.</li>
                                <li><strong>Meniscal Repair Surgery</strong> – Preserving the joint's natural shock
                                    absorbers.</li>
                                <li><strong>Partial Meniscectomy</strong> – Removing damaged meniscal tissue to restore
                                    smooth motion.</li>
                                <li><strong>Patellofemoral Realignment</strong> – Correcting kneecap tracking issues.</li>
                                <li><strong>Tibial Tubercle Transfer</strong> – Precision realignment for chronic patellar
                                    instability.</li>
                            </ul>

                            <h4 class="mt-4">3. Ligament & Tendon Reconstruction</h4>
                            <ul>
                                <li><strong>ACL Reconstruction</strong> – Restoring stability for athletes and active
                                    individuals.</li>
                                <li><strong>Multiligament Reconstruction</strong> – Addressing complex injuries involving
                                    multiple ligaments.</li>
                                <li><strong>Quadriceps & Patellar Tendon Repair</strong> – Surgical restoration of critical
                                    knee extensors.</li>
                                <li><strong>Knee Ligament Reconstruction</strong> – Comprehensive care for MCL, LCL, and PCL
                                    injuries.</li>
                            </ul>

                            <h4 class="mt-4">4. Non-Surgical & Regenerative Treatments</h4>
                            <ul>
                                <li><strong>Intraarticular Knee Injections</strong> – Targeted delivery of anti-inflammatory
                                    medications.</li>
                                <li><strong>Viscosupplementation</strong> – Improving joint lubrication to reduce pain.</li>
                                <li><strong>Non-operative ACL Management</strong> – Structured rehabilitation for specific
                                    ligament injuries.</li>
                                <li><strong>General Non-surgical Care</strong> – Bracing, physical therapy, and lifestyle
                                    modifications.</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Recovery Overview</h3>
                            <table class="table table-bordered table-striped">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Treatment</th>
                                        <th>Estimated Recovery</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Non-Surgical Treatments</td>
                                        <td>4–12 weeks</td>
                                    </tr>
                                    <tr>
                                        <td>Injection Therapy</td>
                                        <td>1–2 days</td>
                                    </tr>
                                    <tr>
                                        <td>Knee Arthroscopy</td>
                                        <td>6–12 weeks</td>
                                    </tr>
                                    <tr>
                                        <td>Total Knee Replacement</td>
                                        <td>3–6 months</td>
                                    </tr>
                                    <tr>
                                        <td>ACL Reconstruction</td>
                                        <td>6–9 months</td>
                                    </tr>
                                </tbody>
                            </table>

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
