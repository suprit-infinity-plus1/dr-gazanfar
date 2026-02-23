@extends('layouts.master')

@section('title', 'Knee Conditions - Dr. Gazanfar')
@section('meta_description', 'Learn about common knee conditions and symptoms.')

@section('content')

    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area bg-gradient text-center">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url({{ asset('assets/img/shape/9.png') }});"></div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Knee Conditions</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Knee Conditions</li>
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
                            Knee Conditions
                        </h1>

                        <!-- Thumb -->
                        <div class="thumb mb-4">
                            <img src="{{ asset('assets/img/Conditions/Knee-Conditions.jpg') }}" alt="Knee Conditions"
                                style="width: 100%; border-radius: 8px;">
                        </div>

                        <!-- Content -->
                        <div class="intro-text mb-5">
                            <p>
                                Dr. Gazanfar specializes in diagnosing and treating a wide spectrum of knee conditions, from
                                early-stage tendon and ligament strains to advanced joint disease and complex fractures.
                                Whether you’re dealing with persistent knee pain, swelling, instability, or difficulty
                                walking, his goal is to help you regain strength, reduce discomfort, and return to the life
                                you enjoy.
                            </p>
                            <p>
                                Using advanced diagnostics and personalized treatment plans, Dr. Gazanfar guides each
                                patient from assessment through recovery, whether through minimally invasive arthroscopy,
                                ligament reconstruction, or total knee replacement, to relieve pain, protect the joint, and
                                keep you active for years to come.
                            </p>

                            <h3 class="mt-4 mb-3">Comprehensive Knee Conditions</h3>

                            <h4 class="mt-4">1. Joint & Degenerative Conditions</h4>
                            <ul>
                                <li><strong>Knee Osteoarthritis</strong> – Progressive wear of the knee joint cartilage.
                                </li>
                                <li><strong>Patellofemoral Arthritis</strong> – Arthritis specifically under the kneecap.
                                </li>
                                <li><strong>Osteonecrosis of the Knee</strong> – Bone tissue death due to lack of blood
                                    supply.</li>
                                <li><strong>Pseudogout</strong> – Inflammatory arthritis caused by calcium pyrophosphate
                                    crystals.</li>
                                <li><strong>Knock Knees</strong> – Alignment where knees tilt inward while ankles remain
                                    apart.</li>
                                <li><strong>Knee Pain & Anterior Knee Pain</strong> – Specialized assessment for various
                                    sources of joint discomfort.</li>
                            </ul>

                            <h4 class="mt-4">2. Ligament & Meniscal Injuries</h4>
                            <ul>
                                <li><strong>ACL (Anterior Cruciate Ligament) Tears</strong> – Common injury causing knee
                                    instability.</li>
                                <li><strong>MCL (Medial Collateral Ligament) Tears</strong> – Stretching or tearing of the
                                    inner knee ligament.</li>
                                <li><strong>PCL (Posterior Cruciate Ligament) Injuries</strong> – Tearing of the ligament
                                    that prevents backward tibial movement.</li>
                                <li><strong>MPFL (Medial Patellofemoral Ligament) Tears</strong> – Critical injury leading
                                    to kneecap instability.</li>
                                <li><strong>Meniscal Tears</strong> – Damage to the shock-absorbing cushions in the knee.
                                </li>
                                <li><strong>Multiligament Knee Injuries</strong> – Complex injuries involving multiple
                                    stabilizing ligaments.</li>
                            </ul>

                            <h4 class="mt-4">3. Tendon & Soft Tissue Conditions</h4>
                            <ul>
                                <li><strong>Patellar Tendinitis (Jumper's Knee)</strong> – Inflammation of the tendon
                                    connecting the patella to the tibia.</li>
                                <li><strong>Quadriceps & Patellar Tendon Ruptures</strong> – Severe injuries cutting off the
                                    knee's extension mechanism.</li>
                                <li><strong>Iliotibial Band (ITB) Syndrome</strong> – Overuse injury causing pain on the
                                    outer side of the knee.</li>
                                <li><strong>Patellar Tracking Disorder</strong> – When the kneecap shifts out of its groove
                                    during movement.</li>
                                <li><strong>Baker's Cyst</strong> – Fluid-filled swelling behind the knee joint.</li>
                                <li><strong>Knee Joint Bursa Infection</strong> – Inflammation and infection of the
                                    cushioning sacs around the knee.</li>
                            </ul>

                            <h4 class="mt-4">4. Knee Fractures & Instability</h4>
                            <ul>
                                <li><strong>Patella (Kneecap) Fracture</strong> – A break in the bone that protects the knee
                                    joint.</li>
                                <li><strong>Distal Femur Fracture</strong> – Fractures of the lower part of the thigh bone.
                                </li>
                                <li><strong>Tibia (Shinbone) Fractures</strong> – Breaks in the upper part of the main lower
                                    leg bone.</li>
                                <li><strong>Knee Stress Fractures</strong> – Small cracks in the bone from chronic overuse.
                                </li>
                                <li><strong>Knee Dislocation</strong> – A medical emergency where the bones are moved out of
                                    alignment.</li>
                                <li><strong>Patellar Instability (Medial & Lateral)</strong> – Recurrent movement or
                                    dislocation of the kneecap.</li>
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
