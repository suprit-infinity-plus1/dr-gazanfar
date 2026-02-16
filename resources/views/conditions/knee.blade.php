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
                            Knee Conditions: Causes, Symptoms, Diagnosis, and Treatment
                        </h1>

                        <!-- Thumb -->
                        <div class="thumb mb-4">
                            <img src="{{ asset('assets/img/Conditions/Knee-Conditions.jpg') }}" alt="Knee Conditions"
                                style="width: 100%; border-radius: 8px;">
                        </div>

                        <!-- Content -->
                        <div class="intro-text mb-5">
                            <p>
                                The knee is one of the largest and most complex joints in the human body. It supports body weight, absorbs shock, and allows essential movements like walking, running, squatting, and jumping. Because of its heavy workload and structural complexity, the knee is highly vulnerable to injury and degenerative conditions.
                            </p>
                            <p>
                                This detailed guide explores common knee conditions, their causes, symptoms, diagnostic methods, treatment options, and prevention strategies.
                            </p>

                            <h3 class="mt-4 mb-3">Understanding the Knee Joint</h3>
                            <p>The knee is primarily a hinge joint, connecting:</p>
                            <ul>
                                <li>Femur (thigh bone)</li>
                                <li>Tibia (shin bone)</li>
                                <li>Patella (kneecap)</li>
                            </ul>
                            <p>Key structures include:</p>
                            <ul>
                                <li><strong>Articular cartilage</strong> – cushions the bones</li>
                                <li><strong>Menisci (medial & lateral)</strong> – shock absorbers</li>
                                <li><strong>Ligaments (ACL, PCL, MCL, LCL)</strong> – stabilize the joint</li>
                                <li><strong>Tendons</strong> – connect muscles to bone</li>
                                <li><strong>Bursa sacs</strong> – reduce friction</li>
                            </ul>
                            <p>Damage to any of these components can cause pain, instability, and limited mobility.</p>

                            <h3 class="mt-5 mb-3">Osteoarthritis of the Knee</h3>
                            <p>Knee osteoarthritis (OA) is the most common knee condition, especially among older adults.</p>
                            
                            <p><strong>Causes</strong></p>
                            <ul>
                                <li>Age-related wear and tear</li>
                                <li>Obesity</li>
                                <li>Previous knee injuries</li>
                                <li>Genetics</li>
                                <li>Repetitive stress</li>
                            </ul>

                            <p><strong>Symptoms</strong></p>
                            <ul>
                                <li>Gradual knee pain</li>
                                <li>Morning stiffness</li>
                                <li>Swelling</li>
                                <li>Crunching or grinding sensation</li>
                                <li>Decreased range of motion</li>
                            </ul>

                            <p><strong>Treatment</strong></p>
                            <ul>
                                <li>Weight loss</li>
                                <li>Physical therapy</li>
                                <li>Anti-inflammatory medications</li>
                                <li>Corticosteroid injections</li>
                                <li>Knee replacement surgery (severe cases)</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Anterior Cruciate Ligament (ACL) Injury</h3>
                            <p>An ACL tear is a common sports injury involving a major stabilizing ligament.</p>

                            <p><strong>Causes</strong></p>
                            <ul>
                                <li>Sudden stops or direction changes</li>
                                <li>Jumping and landing incorrectly</li>
                                <li>Direct collision</li>
                            </ul>

                            <p><strong>Symptoms</strong></p>
                            <ul>
                                <li>“Popping” sound at injury</li>
                                <li>Immediate swelling</li>
                                <li>Instability</li>
                                <li>Difficulty bearing weight</li>
                            </ul>

                            <p><strong>Treatment</strong></p>
                            <ul>
                                <li>Rest and bracing</li>
                                <li>Physical therapy</li>
                                <li>Surgical reconstruction (active individuals)</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Meniscus Tear</h3>
                            <p>The meniscus acts as a shock absorber. Tears are common in athletes and older adults.</p>

                            <p><strong>Causes</strong></p>
                            <ul>
                                <li>Twisting movements</li>
                                <li>Squatting while lifting</li>
                                <li>Age-related degeneration</li>
                            </ul>

                            <p><strong>Symptoms</strong></p>
                            <ul>
                                <li>Knee pain</li>
                                <li>Locking or catching sensation</li>
                                <li>Swelling</li>
                                <li>Limited motion</li>
                            </ul>

                            <p><strong>Treatment</strong></p>
                            <ul>
                                <li>Rest, ice, compression, elevation (RICE)</li>
                                <li>Physical therapy</li>
                                <li>Arthroscopic surgery (if severe)</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Patellofemoral Pain Syndrome (Runner’s Knee)</h3>
                            <p>Often called runner’s knee, this condition affects the front of the knee.</p>

                            <p><strong>Causes</strong></p>
                            <ul>
                                <li>Overuse</li>
                                <li>Muscle imbalance</li>
                                <li>Misalignment of kneecap</li>
                                <li>Flat feet</li>
                            </ul>

                            <p><strong>Symptoms</strong></p>
                            <ul>
                                <li>Dull aching pain in front of knee</li>
                                <li>Pain when climbing stairs</li>
                                <li>Pain after prolonged sitting</li>
                            </ul>

                            <p><strong>Treatment</strong></p>
                            <ul>
                                <li>Activity modification</li>
                                <li>Strengthening exercises</li>
                                <li>Proper footwear</li>
                                <li>Knee taping</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Knee Bursitis</h3>
                            <p>Knee bursitis occurs when bursae become inflamed.</p>

                            <p><strong>Causes</strong></p>
                            <ul>
                                <li>Prolonged kneeling</li>
                                <li>Repetitive motion</li>
                                <li>Direct trauma</li>
                                <li>Infection</li>
                            </ul>

                            <p><strong>Symptoms</strong></p>
                            <ul>
                                <li>Localized swelling</li>
                                <li>Warmth and redness</li>
                                <li>Pain when bending</li>
                            </ul>

                            <p><strong>Treatment</strong></p>
                            <ul>
                                <li>Rest</li>
                                <li>Ice</li>
                                <li>Anti-inflammatory medication</li>
                                <li>Drainage (if infected)</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Rheumatoid Arthritis (RA)</h3>
                            <p>Rheumatoid arthritis is an autoimmune condition affecting joints, including the knee.</p>

                            <p><strong>Causes</strong></p>
                            <ul>
                                <li>Autoimmune response</li>
                                <li>Genetic factors</li>
                            </ul>

                            <p><strong>Symptoms</strong></p>
                            <ul>
                                <li>Symmetrical knee pain</li>
                                <li>Morning stiffness lasting >1 hour</li>
                                <li>Swelling and warmth</li>
                                <li>Fatigue</li>
                            </ul>

                            <p><strong>Treatment</strong></p>
                            <ul>
                                <li>Disease-modifying drugs (DMARDs)</li>
                                <li>Biologic medications</li>
                                <li>Physical therapy</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Tendinitis (Patellar Tendinitis)</h3>
                            <p>Also known as jumper’s knee, this affects the tendon connecting the kneecap to the shinbone.</p>

                            <p><strong>Causes</strong></p>
                            <ul>
                                <li>Repetitive jumping</li>
                                <li>Overtraining</li>
                                <li>Tight muscles</li>
                            </ul>

                            <p><strong>Symptoms</strong></p>
                            <ul>
                                <li>Pain below kneecap</li>
                                <li>Tenderness</li>
                                <li>Pain during activity</li>
                            </ul>

                            <p><strong>Treatment</strong></p>
                            <ul>
                                <li>Rest</li>
                                <li>Stretching</li>
                                <li>Strength training</li>
                                <li>Bracing</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Knee Fractures</h3>
                            <p>Knee fractures involve breaks in the femur, tibia, or patella.</p>

                            <p><strong>Causes</strong></p>
                            <ul>
                                <li>Car accidents</li>
                                <li>Falls</li>
                                <li>Sports injuries</li>
                            </ul>

                            <p><strong>Symptoms</strong></p>
                            <ul>
                                <li>Severe pain</li>
                                <li>Swelling</li>
                                <li>Visible deformity</li>
                                <li>Inability to walk</li>
                            </ul>

                            <p><strong>Treatment</strong></p>
                            <ul>
                                <li>Immobilization</li>
                                <li>Surgery (in many cases)</li>
                                <li>Rehabilitation</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Risk Factors for Knee Conditions</h3>
                            <ul>
                                <li>Aging</li>
                                <li>Obesity</li>
                                <li>Sedentary lifestyle</li>
                                <li>High-impact sports</li>
                                <li>Weak muscles</li>
                                <li>Previous knee injuries</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Diagnosis of Knee Problems</h3>
                            <p>Doctors may use:</p>
                            <ul>
                                <li>Physical examination</li>
                                <li>X-rays</li>
                                <li>MRI</li>
                                <li>CT scan</li>
                                <li>Arthroscopy</li>
                            </ul>
                            <p>Early diagnosis improves treatment outcomes.</p>

                            <h3 class="mt-5 mb-3">Prevention Tips</h3>
                            <ul>
                                <li>✔ Maintain a healthy weight</li>
                                <li>✔ Strengthen quadriceps and hamstrings</li>
                                <li>✔ Warm up before exercise</li>
                                <li>✔ Wear proper footwear</li>
                                <li>✔ Avoid sudden increases in activity</li>
                                <li>✔ Practice correct sports techniques</li>
                            </ul>

                            <h3 class="mt-5 mb-3">When to See a Doctor</h3>
                            <p>Seek medical help if you experience:</p>
                            <ul>
                                <li>Severe or sudden knee pain</li>
                                <li>Inability to bear weight</li>
                                <li>Swelling that doesn’t improve</li>
                                <li>Knee deformity</li>
                                <li>Fever with joint swelling</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Conclusion</h3>
                            <p>Knee conditions range from mild overuse injuries to severe degenerative diseases and traumatic fractures. Because the knee plays such a critical role in mobility, early recognition and treatment are essential. Many conditions can be managed effectively with conservative care, while advanced cases may require surgical intervention.</p>
                            <p>With proper care, exercise, and preventive strategies, most people can maintain healthy knee function throughout life.</p>

                            <div class="mt-4 p-4 bg-gray rounded border-l-4 border-theme">
                                <h5 class="mb-2">Need a consultation?</h5>
                                <p class="mb-0">Contact Dr. Gazanfar’s team for an appointment today to discuss your knee health. <a href="tel:+919820727046" class="text-theme font-bold">Call +91 98207 27046</a></p>
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
