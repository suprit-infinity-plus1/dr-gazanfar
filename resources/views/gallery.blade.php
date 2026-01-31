@extends('layouts.master')

@section('title', 'Gallery - Healdi')
@section('meta_description', 'View our gallery of state-of-the-art medical facilities and successful patient stories.')

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
                    <h1>Gallery</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Gallery
                ============================================= -->
    <div class="gallery-area default-padding">
        <div class="container">
            <div class="gallery-items-area text-center">
                <div class="row">
                    <div class="col-md-12 gallery-content">
                        <div class="mix-item-menu text-center">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".development">Surgery</button>
                            <button data-filter=".consulting">Orthopaedics</button>
                            <button data-filter=".finance">Dental</button>
                            <button data-filter=".branding">Eye</button>
                            <button data-filter=".capital">Health</button>
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="magnific-mix-gallery masonary">
                            <div id="portfolio-grid" class="gallery-items colums-3">
                                <!-- Single Item -->
                                <div class="pf-item development capital">
                                    <div class="effect-box">
                                        <img src="{{ asset('assets/img/gallery/1.jpg') }}" alt="thumb">
                                        <div class="info">
                                            <h4><a href="#">General Surgery</a></h4>
                                            <a href="{{ asset('assets/img/gallery/1.jpg') }}" class="item popup-link"><i
                                                    class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting branding">
                                    <div class="effect-box">
                                        <img src="{{ asset('assets/img/gallery/2.jpg') }}" alt="thumb">
                                        <div class="info">
                                            <h4><a href="#">Primary Care</a></h4>
                                            <a href="{{ asset('assets/img/gallery/2.jpg') }}" class="item popup-link"><i
                                                    class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting finance">
                                    <div class="effect-box">
                                        <img src="{{ asset('assets/img/gallery/3.jpg') }}" alt="thumb">
                                        <div class="info">
                                            <h4><a href="#">Cardiology</a></h4>
                                            <a href="{{ asset('assets/img/gallery/3.jpg') }}" class="item popup-link"><i
                                                    class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item finance">
                                    <div class="effect-box">
                                        <img src="{{ asset('assets/img/gallery/4.jpg') }}" alt="thumb">
                                        <div class="info">
                                            <h4><a href="#">Cancer Care</a></h4>
                                            <a href="{{ asset('assets/img/gallery/4.jpg') }}" class="item popup-link"><i
                                                    class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item capital development">
                                    <div class="effect-box">
                                        <img src="{{ asset('assets/img/gallery/5.jpg') }}" alt="thumb">
                                        <div class="info">
                                            <h4><a href="#">Knee Treatment</a></h4>
                                            <a href="{{ asset('assets/img/gallery/5.jpg') }}" class="item popup-link"><i
                                                    class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting branding">
                                    <div class="effect-box">
                                        <img src="{{ asset('assets/img/gallery/6.jpg') }}" alt="thumb">
                                        <div class="info">
                                            <h4><a href="#">Eye Care</a></h4>
                                            <a href="{{ asset('assets/img/gallery/6.jpg') }}" class="item popup-link"><i
                                                    class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->
@endsection
