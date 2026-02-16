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
                            Knee Treatments: Complete Guide to Modern Care, Pain Relief & Recovery
                        </h1>

                        <!-- Thumb -->
                        <div class="thumb mb-4">
                            <img src="{{ asset('assets/img/Treatments/Knee-Treatments.jpg') }}" alt="Knee Treatments"
                                style="width: 100%; border-radius: 8px;">
                        </div>

                        <!-- Content -->
                        <div class="intro-text mb-5">
                            <p>
                                The knee is one of the largest and most complex joints in the body. It carries your body weight, absorbs shock, and enables essential movements like walking, running, squatting, and climbing stairs. Because of its constant use and mechanical stress, the knee is highly vulnerable to wear, strain, and injury.
                            </p>
                            <p>
                                This comprehensive guide explores modern knee treatments, from conservative therapies to advanced surgical solutions, rehabilitation timelines, and long-term joint care strategies.
                            </p>

                            <h3 class="mt-4 mb-3">Understanding the Knee Joint</h3>
                            <p>The knee joint is a hinge joint formed by:</p>
                            <ul>
                                <li><strong>Femur (thigh bone)</strong></li>
                                <li><strong>Tibia (shin bone)</strong></li>
                                <li><strong>Patella (kneecap)</strong></li>
                            </ul>
                            <p>It is supported by:</p>
                            <ul>
                                <li><strong>Cartilage</strong> – Cushions and protects bones</li>
                                <li><strong>Meniscus</strong> – Shock-absorbing pads between bones</li>
                                <li><strong>Ligaments (ACL, PCL, MCL, LCL)</strong> – Provide stability</li>
                                <li><strong>Tendons</strong> – Connect muscles to bone</li>
                            </ul>
                            <p>Because the knee handles both mobility and stability, even minor imbalances can lead to discomfort or dysfunction.</p>

                            <h3 class="mt-5 mb-3">Non-Surgical Knee Treatments</h3>
                            <p>Most knee issues are treated conservatively before surgery is considered.</p>

                            <h4 class="mt-4">Physical Therapy</h4>
                            <p>Physical therapy is often the first and most effective treatment approach.</p>
                            <p><strong>Goals:</strong></p>
                            <ul>
                                <li>Strengthen quadriceps and hamstrings</li>
                                <li>Improve joint alignment</li>
                                <li>Restore flexibility</li>
                                <li>Improve balance and coordination</li>
                                <li>Reduce stress on the joint</li>
                            </ul>
                            <p><strong>Common Exercises:</strong></p>
                            <ul>
                                <li>Straight leg raises</li>
                                <li>Wall sits</li>
                                <li>Hamstring curls</li>
                                <li>Step-ups</li>
                                <li>Resistance band training</li>
                            </ul>
                            <p>Many patients notice improvement within 4–8 weeks of consistent therapy.</p>

                            <h4 class="mt-4">Medication Management</h4>
                            <p>Medications can help manage inflammation and pain.</p>
                            <p><strong>Options Include:</strong></p>
                            <ul>
                                <li>NSAIDs (ibuprofen, naproxen)</li>
                                <li>Acetaminophen</li>
                                <li>Prescription anti-inflammatory medications</li>
                                <li>Topical gels and creams</li>
                            </ul>
                            <p>While helpful for symptom control, medications do not repair structural damage.</p>

                            <h4 class="mt-4">Injection Therapy</h4>
                            <p>Injection treatments can provide temporary to long-lasting relief.</p>
                            <ul>
                                <li><strong>Corticosteroid Injections:</strong> Reduce inflammation and provide relief lasting weeks to months</li>
                                <li><strong>Hyaluronic Acid Injections:</strong> Improve joint lubrication and enhance smoother movement</li>
                                <li><strong>Platelet-Rich Plasma (PRP):</strong> Uses your own blood components and may promote tissue healing</li>
                            </ul>
                            <p>These are minimally invasive and performed in an outpatient setting.</p>

                            <h3 class="mt-5 mb-3">Minimally Invasive Knee Procedures</h3>
                            <h4 class="mt-3">Knee Arthroscopy</h4>
                            <p>Knee arthroscopy uses a small camera inserted through tiny incisions to diagnose and treat internal joint problems.</p>
                            <p><strong>Benefits:</strong></p>
                            <ul>
                                <li>Smaller incisions</li>
                                <li>Less tissue trauma</li>
                                <li>Faster recovery</li>
                                <li>Minimal scarring</li>
                            </ul>
                            <p>It is commonly used to repair meniscus injuries, trim damaged cartilage, or address ligament issues.</p>
                            <p>Recovery often ranges from 4–8 weeks depending on the procedure.</p>

                            <h3 class="mt-5 mb-3">Surgical Knee Treatments</h3>
                            <p>When conservative care fails to provide relief, surgery may be recommended.</p>

                            <h4 class="mt-4">Total Knee Replacement</h4>
                            <p>Total knee replacement is a highly successful orthopedic procedure.</p>
                            <p><strong>During Surgery:</strong></p>
                            <ul>
                                <li>Damaged cartilage and bone are removed</li>
                                <li>The joint surfaces are replaced with metal and plastic components</li>
                            </ul>
                            <p><strong>Benefits:</strong></p>
                            <ul>
                                <li>Significant pain reduction</li>
                                <li>Improved joint function</li>
                                <li>Long-lasting results (often 15–20+ years)</li>
                            </ul>
                            <p>Patients usually begin walking with assistance within 24 hours after surgery.</p>
                            <p>Full recovery typically takes 3–6 months with structured rehabilitation.</p>

                            <h4 class="mt-4">Partial Knee Replacement</h4>
                            <p>In this procedure, only the damaged portion of the knee is replaced.</p>
                            <p><strong>Advantages:</strong></p>
                            <ul>
                                <li>Smaller incision</li>
                                <li>Faster recovery</li>
                                <li>More natural knee motion</li>
                            </ul>
                            <p>It is suitable when damage is limited to one compartment of the knee.</p>

                            <h4 class="mt-4">Ligament Reconstruction (e.g., ACL Reconstruction)</h4>
                            <p>Ligament reconstruction restores stability to the knee.</p>
                            <ul>
                                <li>Damaged ligament is replaced with a graft</li>
                                <li>Common among athletes</li>
                                <li>Rehabilitation may take 6–9 months</li>
                            </ul>

                            <h3 class="mt-5 mb-3">🏃 Lifestyle-Based Knee Care</h3>
                            <p>Lifestyle adjustments are essential for both treatment and prevention.</p>
                            
                            <h5 class="mt-3">Weight Management</h5>
                            <p>Excess body weight increases pressure on the knee joint, accelerating wear.</p>

                            <h5 class="mt-3">Low-Impact Exercise</h5>
                            <ul>
                                <li>Swimming</li>
                                <li>Cycling</li>
                                <li>Elliptical</li>
                                <li>Water aerobics</li>
                            </ul>
                            <p>These strengthen muscles without excessive joint stress.</p>

                            <h5 class="mt-3">Supportive Devices</h5>
                            <ul>
                                <li>Knee braces</li>
                                <li>Orthotic shoe inserts</li>
                                <li>Walking aids</li>
                            </ul>

                            <h5 class="mt-3">Heat & Ice Therapy</h5>
                            <ul>
                                <li>Ice reduces swelling</li>
                                <li>Heat relaxes stiffness</li>
                            </ul>

                            <h3 class="mt-5 mb-3">⏳ Recovery Timeline Overview</h3>
                            <table class="table table-bordered table-striped">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Treatment Type</th>
                                        <th>Estimated Recovery</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Physical Therapy</td>
                                        <td>4–12 weeks</td>
                                    </tr>
                                    <tr>
                                        <td>Injection</td>
                                        <td>1–2 days downtime</td>
                                    </tr>
                                    <tr>
                                        <td>Arthroscopy</td>
                                        <td>4–8 weeks</td>
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
                            <p>Recovery depends on age, general health, and adherence to rehabilitation.</p>

                            <h3 class="mt-5 mb-3">Long-Term Knee Health</h3>
                            <p>To maintain healthy knees:</p>
                            <ul>
                                <li>Strengthen leg muscles regularly</li>
                                <li>Stretch before and after exercise</li>
                                <li>Wear proper footwear</li>
                                <li>Avoid repetitive high-impact stress</li>
                                <li>Maintain balanced nutrition</li>
                            </ul>
                            <p>Early attention to knee discomfort can prevent more advanced treatments later.</p>

                            <h3 class="mt-5 mb-3">📌 Final Thoughts</h3>
                            <p>Modern knee treatments provide effective solutions ranging from conservative therapy to advanced surgical reconstruction and joint replacement. With proper evaluation, personalized treatment, and consistent rehabilitation, most individuals regain mobility and return to active lifestyles.</p>
                            <p>Early intervention, patient education, and preventive care remain the keys to long-term knee health and joint preservation.</p>

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
