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
                            Hip Conditions: Causes, Symptoms, Diagnosis, and Treatment
                        </h1>

                        <!-- Thumb -->
                        <div class="thumb mb-4">
                            <img src="{{ asset('assets/img/Conditions/Hip-Conditions.jpg') }}" alt="Hip Conditions"
                                style="width: 100%; border-radius: 8px;">
                        </div>

                        <!-- Content -->
                        <div class="intro-text mb-5">
                            <p>
                                The hip is one of the largest and most important joints in the human body. It supports body
                                weight, allows movement in multiple directions, and plays a vital role in walking, running,
                                sitting, and standing. Because of its constant use and load-bearing function, the hip joint
                                is prone to various conditions affecting people of all ages — from children to older adults.
                            </p>
                            <p>
                                This comprehensive guide explores common hip conditions, their causes, symptoms, diagnosis,
                                treatment options, and prevention strategies.
                            </p>

                            <h3 class="mt-4 mb-3">Understanding the Hip Joint</h3>
                            <p>The hip is a ball-and-socket joint, where:</p>
                            <ul>
                                <li>The femoral head (ball) fits into</li>
                                <li>The acetabulum of the pelvis (socket)</li>
                            </ul>
                            <p>Key structures include:</p>
                            <ul>
                                <li><strong>Articular cartilage</strong> – cushions bones and allows smooth movement</li>
                                <li><strong>Labrum</strong> – a ring of cartilage that stabilizes the joint</li>
                                <li><strong>Ligaments</strong> – provide stability</li>
                                <li><strong>Muscles and tendons</strong> – enable movement</li>
                                <li><strong>Bursa sacs</strong> – reduce friction</li>
                            </ul>
                            <p>Damage or inflammation in any of these structures can cause hip pain and dysfunction.</p>

                            <h3 class="mt-5 mb-3">Osteoarthritis of the Hip</h3>
                            <p>Osteoarthritis (OA) is the most common hip condition, especially in older adults.</p>

                            <p><strong>Causes</strong></p>
                            <ul>
                                <li>Age-related cartilage wear</li>
                                <li>Previous injury</li>
                                <li>Obesity</li>
                                <li>Genetics</li>
                                <li>Joint overuse</li>
                            </ul>

                            <p><strong>Symptoms</strong></p>
                            <ul>
                                <li>Gradual groin or thigh pain</li>
                                <li>Stiffness (especially in the morning)</li>
                                <li>Limited range of motion</li>
                                <li>Grinding sensation</li>
                            </ul>

                            <p><strong>Diagnosis</strong></p>
                            <ul>
                                <li>Physical examination</li>
                                <li>X-rays</li>
                                <li>MRI (in some cases)</li>
                            </ul>

                            <p><strong>Treatment</strong></p>
                            <ul>
                                <li>Weight management</li>
                                <li>Physical therapy</li>
                                <li>NSAIDs (pain relievers)</li>
                                <li>Corticosteroid injections</li>
                                <li>Total hip replacement (in severe cases)</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Hip Bursitis</h3>
                            <p>Hip bursitis occurs when the bursae become inflamed. The most common type is trochanteric
                                bursitis.</p>

                            <p><strong>Causes</strong></p>
                            <ul>
                                <li>Repetitive motion</li>
                                <li>Injury or fall</li>
                                <li>Poor posture</li>
                                <li>Prolonged standing</li>
                            </ul>

                            <p><strong>Symptoms</strong></p>
                            <ul>
                                <li>Outer hip pain</li>
                                <li>Pain when lying on the affected side</li>
                                <li>Tenderness to touch</li>
                            </ul>

                            <p><strong>Treatment</strong></p>
                            <ul>
                                <li>Rest</li>
                                <li>Ice therapy</li>
                                <li>Anti-inflammatory medications</li>
                                <li>Physical therapy</li>
                                <li>Steroid injections</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Hip Labral Tear</h3>
                            <p>A labral tear involves damage to the cartilage ring around the socket.</p>

                            <p><strong>Causes</strong></p>
                            <ul>
                                <li>Sports injuries</li>
                                <li>Repetitive twisting movements</li>
                                <li>Structural abnormalities</li>
                                <li>Trauma</li>
                            </ul>

                            <p><strong>Symptoms</strong></p>
                            <ul>
                                <li>Deep groin pain</li>
                                <li>Clicking or locking sensation</li>
                                <li>Limited mobility</li>
                            </ul>

                            <p><strong>Treatment</strong></p>
                            <ul>
                                <li>Physical therapy</li>
                                <li>Anti-inflammatory medication</li>
                                <li>Arthroscopic surgery (if severe)</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Hip Fracture</h3>
                            <p>Hip fractures are serious injuries, especially in older adults.</p>

                            <p><strong>Causes</strong></p>
                            <ul>
                                <li>Falls (common in elderly)</li>
                                <li>Osteoporosis</li>
                                <li>High-impact trauma (car accidents)</li>
                            </ul>

                            <p><strong>Symptoms</strong></p>
                            <ul>
                                <li>Severe hip or groin pain</li>
                                <li>Inability to bear weight</li>
                                <li>Shortened or externally rotated leg</li>
                            </ul>

                            <p><strong>Treatment</strong></p>
                            <ul>
                                <li>Emergency surgery</li>
                                <li>Physical rehabilitation</li>
                                <li>Osteoporosis management</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Hip Impingement (Femoroacetabular Impingement – FAI)</h3>
                            <p>FAI occurs when extra bone growth causes abnormal contact between hip bones.</p>

                            <p><strong>Types</strong></p>
                            <ul>
                                <li>Cam impingement</li>
                                <li>Pincer impingement</li>
                                <li>Mixed type</li>
                            </ul>

                            <p><strong>Symptoms</strong></p>
                            <ul>
                                <li>Groin pain during movement</li>
                                <li>Stiffness</li>
                                <li>Reduced flexibility</li>
                            </ul>

                            <p><strong>Treatment</strong></p>
                            <ul>
                                <li>Activity modification</li>
                                <li>Physical therapy</li>
                                <li>Surgical reshaping (if necessary)</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Hip Dysplasia</h3>
                            <p>Hip dysplasia is a structural abnormality where the socket does not fully cover the ball.</p>

                            <p><strong>Common in:</strong></p>
                            <ul>
                                <li>Infants (developmental dysplasia)</li>
                                <li>Young adults (mild untreated cases)</li>
                            </ul>

                            <p><strong>Symptoms</strong></p>
                            <ul>
                                <li>Uneven leg length (in children)</li>
                                <li>Hip instability</li>
                                <li>Early arthritis (in adults)</li>
                            </ul>

                            <p><strong>Treatment</strong></p>
                            <ul>
                                <li>Pavlik harness (infants)</li>
                                <li>Bracing</li>
                                <li>Surgery (severe cases)</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Avascular Necrosis (AVN)</h3>
                            <p>AVN occurs when blood supply to the femoral head is reduced.</p>

                            <p><strong>Causes</strong></p>
                            <ul>
                                <li>Long-term steroid use</li>
                                <li>Alcohol abuse</li>
                                <li>Trauma</li>
                                <li>Blood disorders</li>
                            </ul>

                            <p><strong>Symptoms</strong></p>
                            <ul>
                                <li>Gradual hip pain</li>
                                <li>Limited movement</li>
                                <li>Pain that worsens over time</li>
                            </ul>

                            <p><strong>Treatment</strong></p>
                            <ul>
                                <li>Medications</li>
                                <li>Core decompression surgery</li>
                                <li>Total hip replacement (advanced cases)</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Risk Factors for Hip Conditions</h3>
                            <ul>
                                <li>Aging</li>
                                <li>Obesity</li>
                                <li>Sedentary lifestyle</li>
                                <li>High-impact sports</li>
                                <li>Previous injuries</li>
                                <li>Genetic predisposition</li>
                            </ul>

                            <h3 class="mt-5 mb-3">When to See a Doctor</h3>
                            <p>Seek medical care if you experience:</p>
                            <ul>
                                <li>Persistent hip pain lasting more than a few weeks</li>
                                <li>Inability to bear weight</li>
                                <li>Sudden severe pain after injury</li>
                                <li>Swelling or redness</li>
                                <li>Fever with joint pain</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Prevention Strategies</h3>
                            <ul>
                                <li>✔ Maintain healthy body weight</li>
                                <li>✔ Strengthen hip and core muscles</li>
                                <li>✔ Stretch regularly</li>
                                <li>✔ Use proper sports techniques</li>
                                <li>✔ Avoid prolonged sitting</li>
                                <li>✔ Manage osteoporosis</li>
                            </ul>

                            <h3 class="mt-5 mb-3">Conclusion</h3>
                            <p>Hip conditions range from mild inflammatory problems to severe degenerative or traumatic
                                injuries. Early diagnosis and appropriate treatment are essential to prevent long-term
                                complications and preserve mobility. With modern medical advances, many hip disorders can be
                                effectively managed — and even severe conditions like advanced arthritis can be successfully
                                treated with joint replacement surgery.</p>

                            <div class="mt-4 p-4 bg-gray rounded border-l-4 border-theme">
                                <h5 class="mb-2">Need a consultation?</h5>
                                <p class="mb-0">Contact Dr. Gazanfar’s team for an appointment today to discuss your hip
                                    health. <a href="tel:+919820727046" class="text-theme font-bold">Call +91 98207
                                        27046</a></p>
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