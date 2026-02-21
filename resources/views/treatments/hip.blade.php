@extends('layouts.master')

@section('title', 'Hip Treatments - Dr. Gazanfar')
@section('meta_description', 'Learn about our advanced hip treatments and procedures.')

@section('content')

    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area bg-gradient text-center">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url({{ asset('assets/img/shape/9.png') }});"></div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Hip Treatments</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Hip Treatments</li>
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
                            Hip Treatment
                        </h1>

                        <!-- Thumb -->
                        <div class="thumb mb-4">
                            <img src="{{ asset('assets/img/Treatments/Hip-Treatments.jpg') }}" alt="Hip Treatments"
                                style="width: 100%; border-radius: 8px;">
                        </div>

                        <!-- Content -->
                        <div class="intro-text mb-5">
                            <p>
                                The hip joint is one of the body's largest and most important joints, responsible for
                                supporting your weight and enabling movement. Hip problems can range from mild discomfort
                                to severely limiting mobility. Effective treatment depends on the underlying cause,
                                severity, and overall health of the patient.
                            </p>

                            <h3 class="mt-4 mb-3">Types of Hip Treatment</h3>

                            <h4 class="mt-4">1. Physical Therapy</h4>
                            <p>A structured physical therapy program helps strengthen the muscles around the hip,
                                improve flexibility, and restore normal movement. It is often the first step before
                                considering any surgical intervention.</p>

                            <h4 class="mt-4">2. Medications</h4>
                            <p>Anti-inflammatory medications (NSAIDs), pain relievers, and muscle relaxants are
                                commonly used to manage hip pain and reduce inflammation effectively.</p>

                            <h4 class="mt-4">3. Injection Therapy</h4>
                            <ul>
                                <li><strong>Corticosteroid Injections</strong> – Reduce joint inflammation and provide
                                    relief</li>
                                <li><strong>PRP (Platelet-Rich Plasma)</strong> – Promotes natural tissue healing</li>
                                <li><strong>Hyaluronic Acid</strong> – Improves joint lubrication and movement</li>
                            </ul>

                            <h4 class="mt-4">4. Hip Arthroscopy</h4>
                            <p>A minimally invasive procedure using a small camera to diagnose and treat problems
                                inside the hip joint. It is suitable for conditions like labral tears, impingement,
                                and cartilage damage, with faster recovery than open surgery.</p>

                            <h4 class="mt-4">5. Total Hip Replacement</h4>
                            <p>The damaged hip joint is replaced with an artificial implant made of durable materials
                                like ceramic or metal alloy. This is recommended for advanced arthritis or severe joint
                                damage, offering long-lasting pain relief and improved mobility.</p>

                            <h4 class="mt-4">6. Partial Hip Replacement</h4>
                            <p>Only the femoral head (ball) is replaced, typically used in cases of hip fractures
                                where the socket remains healthy.</p>

                            <h4 class="mt-4">7. Hip Resurfacing</h4>
                            <p>Instead of full replacement, the damaged surfaces of the hip joint are reshaped and
                                capped. This approach preserves more natural bone and is suitable for younger,
                                active patients.</p>

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
                                        <td>Physical Therapy</td>
                                        <td>4–12 weeks</td>
                                    </tr>
                                    <tr>
                                        <td>Injection Therapy</td>
                                        <td>1–2 days</td>
                                    </tr>
                                    <tr>
                                        <td>Hip Arthroscopy</td>
                                        <td>6–12 weeks</td>
                                    </tr>
                                    <tr>
                                        <td>Total Hip Replacement</td>
                                        <td>3–6 months</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="mt-4 p-4 bg-gray rounded border-l-4 border-theme">
                                <h5 class="mb-2">Book a Consultation</h5>
                                <p class="mb-0">To find out which hip treatment is right for you, schedule a consultation
                                    today. <a href="tel:+919820727046" class="text-theme font-bold">Call +91 98207 27046</a>
                                </p>
                            </div>
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
