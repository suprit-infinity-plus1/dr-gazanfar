@extends('layouts.master')

@section('title', 'Knee Osteoarthritis - Dr. Gazanfar')
@section('meta_description', 'Treatment for Knee Osteoarthritis by Dr. Gazanfar.')

@section('content')

    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area bg-gradient text-center">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url({{ asset('assets/img/shape/9.png') }});"></div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Knee Osteoarthritis</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Conditions</a></li>
                        <li><a href="#">Knee</a></li>
                        <li class="active">Knee Osteoarthritis</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Department Single -->
    <!-- Start Department Single -->
    <div class="department-single-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="department-single-content">

                        <!-- Breadcrumb-like top text -->
                        <div class="mb-3 text-muted" style="font-size: 0.9rem;">
                            Dr. Gazanfar, Orthopaedic Surgeon // Conditions // Knee // <span class="text-theme">Knee
                                Osteoarthritis</span>
                        </div>

                        <!-- Main H1 -->
                        <h1 class="mb-4" style="font-size: 2.2rem; font-weight: 700; line-height: 1.3;">
                            Knee Osteoarthritis treatment by Leading Knee Surgeon in Kashmir
                        </h1>

                        <!-- Thumb -->
                        <div class="thumb mb-4">
                            <img src="{{ asset('assets/img/departments/1.jpg') }}" alt="Thumb"
                                style="width: 100%; border-radius: 8px;">
                        </div>

                        <!-- Intro Text -->
                        <div class="intro-text mb-5">
                            <p class="lead" style="font-size: 1.1rem; color: #555;">
                                Knee osteoarthritis is a degenerative condition in which the cartilage covering the ends of
                                bone in the knee joint wears away, causing pain, swelling, stiffness and limited movement.
                                <strong>Dr. Gazanfar</strong>, a specialist knee and hip surgeon, offers expert evaluation
                                and advanced treatment options including minimally invasive arthroplasty and
                                joint-preserving care to restore function and relieve discomfort.
                            </p>
                            <div class="mt-4 p-4 bg-gray rounded border-l-4 border-theme">
                                <h5 class="mb-2">Ready to move specifically?</h5>
                                <p class="mb-0">Contact Dr. Gazanfar’s team for an appointment today to discuss your knee
                                    health. <a href="tel:+919820727046" class="text-theme font-bold">Call +91 98207
                                        27046</a></p>
                            </div>
                        </div>

                        <!-- Specific Sections -->
                        <div id="what-is" class="content-section mb-5 pt-4">
                            <h2>What is Knee Osteoarthritis?</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>

                        <div id="causes" class="content-section mb-5 pt-4">
                            <h2>Causes and Risk Factors</h2>
                            <p>Several factors can increase the risk of developing osteoarthritis of the knee:</p>
                            <ul>
                                <li><strong>Age:</strong> The ability of cartilage to heal decreases as people get older.
                                </li>
                                <li><strong>Weight:</strong> Weight increases pressure on all the joints, especially the
                                    knees.</li>
                                <li><strong>Heredity:</strong> This includes genetic mutations that might make a person more
                                    likely to develop osteoarthritis of the knee.</li>
                                <li><strong>Gender:</strong> Women are more likely than men to develop osteoarthritis.</li>
                            </ul>
                        </div>

                        <div id="diagnosis" class="content-section mb-5 pt-4">
                            <h2>Diagnosis</h2>
                            <p>
                                The diagnosis of knee osteoarthritis begins with a physical examination by Dr. Gazanfar. He
                                will also look into your medical history and note any symptoms. X-rays are typically used to
                                confirm the diagnosis and verify the extent of the damage. MRI scans may be ordered to check
                                for problems with the soft tissues of your knee.
                            </p>
                        </div>

                        <div id="treatment" class="content-section mb-5 pt-4">
                            <h2>Treatment Options</h2>
                            <p>The primary goal of treating knee osteoarthritis is to relieve pain and return mobility. The
                                treatment plan will depend on the stage of the disease.</p>
                        </div>

                        <div id="medications" class="content-section mb-5 pt-4">
                            <h3>Medications</h3>
                            <p>
                                Several types of medications are useful in treating osteoarthritis of the knee. Because some
                                people respond differently to medications, Dr. Gazanfar or a physical therapist can help
                                develop an individualized exercise program that meets your needs and lifestyle.
                            </p>
                        </div>

                        <div id="lifestyle" class="content-section mb-5 pt-4">
                            <h3>Lifestyle Modifications</h3>
                            <p>Some lifestyle changes can protect your knee joint and slow the progress of osteoarthritis:
                            </p>
                            <ul class="check-list">
                                <li>Minimizing activities that aggravate the condition, such as climbing stairs.</li>
                                <li>Switching from high-impact activities (like jogging or tennis) to lower impact
                                    activities (like swimming or cycling).</li>
                                <li>Losing weight to reduce stress on the knee joint.</li>
                            </ul>
                        </div>

                        <div id="therapy" class="content-section mb-5 pt-4">
                            <h3>Physical Therapy</h3>
                            <p>
                                Specific exercises can help increase range of motion and flexibility, as well as strengthen
                                the muscles in your leg. Dr. Gazanfar or a physical therapist can help develop an
                                individualized exercise program that meets your needs and lifestyle.
                            </p>
                        </div>

                        <div id="surgery" class="content-section mb-5 pt-4">
                            <h3>Surgery</h3>
                            <p>
                                If your pain from arthritis causes disability and is not relieved with nonsurgical
                                treatment, Dr. Gazanfar may recommend surgery. Options include Arthroscopy, Osteotomy, or
                                Total or Partial Knee Replacement.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- Sidebar -->
                @include('partials.department-sidebar')
            </div>

            <!-- Related Treatments Section -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading text-center">
                        <h2>Related Treatments</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/departments/2.jpg') }}" alt="Thumb"
                                style="width: 100%; border-radius: 8px;">
                        </div>
                        <div class="info mt-30">
                            <h4><a href="#">Knee Replacement</a></h4>
                            <p>
                                Surgical procedure to replace the weight-bearing surfaces of the knee joint to relieve pain
                                and disability.
                            </p>
                            <a href="#" class="btn btn-sm btn-theme border btn-md">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/departments/3.jpg') }}" alt="Thumb"
                                style="width: 100%; border-radius: 8px;">
                        </div>
                        <div class="info mt-30">
                            <h4><a href="#">ACL Reconstruction</a></h4>
                            <p>
                                A surgical tissue graft replacement of the anterior cruciate ligament, located in the knee,
                                to restore its function.
                            </p>
                            <a href="#" class="btn btn-sm btn-theme border btn-md">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/departments/4.jpg') }}" alt="Thumb"
                                style="width: 100%; border-radius: 8px;">
                        </div>
                        <div class="info mt-30">
                            <h4><a href="#">Meniscus Repair</a></h4>
                            <p>
                                Minimally invasive surgical procedure to repair a torn meniscus, the cartilage that cushions
                                the knee joint.
                            </p>
                            <a href="#" class="btn btn-sm btn-theme border btn-md">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Department Single -->

@endsection
