@extends('layouts.master')

@section('title', $condition->seo_title ?? $condition->title . ' - Dr. Gazanfar')
@section('meta_description', $condition->meta_description ?? 'Treatment for ' . $condition->title . ' by Dr. Gazanfar.')

@section('content')

    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area bg-gradient text-center">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url({{ asset('assets/img/shape/9.png') }});"></div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>{{ $condition->title }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Conditions</a></li>
                        <li><a
                                href="{{ $condition->type == 'knee' ? route('knee-conditions') : route('hip-conditions') }}">{{ ucfirst($condition->type) }}</a>
                        </li>
                        <li class="active">{{ $condition->title }}</li>
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
                            {{ $condition->title }} Treatment by Leading {{ ucfirst($condition->type) }} Surgeon in Kashmir
                        </h1>

                        <!-- Thumb -->
                        @if ($condition->icon)
                            <div class="thumb mb-4">
                                <img src="{{ asset('storage/' . $condition->icon) }}" alt="{{ $condition->title }}"
                                    style="width: 100%; border-radius: 8px;">

                            </div>
                        @endif

                        <!-- Content -->
                        <div class="intro-text mb-5">
                            {!! $condition->content !!}

                            <div class="mt-4 p-4 bg-gray rounded border-l-4 border-theme">
                                <h5 class="mb-2">Ready to move specifically?</h5>
                                <p class="mb-0">Contact Dr. Gazanfar’s team for an appointment today to discuss your
                                    health. <a href="tel:+919820727046" class="text-theme font-bold">Call +91 98207
                                        27046</a></p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sidebar -->
                @include('partials.department-sidebar')
            </div>
            <!-- Related Treatments Section -->
            @if (isset($relatedTreatments) && $relatedTreatments->count() > 0)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-heading text-center">
                            <h2>Related Treatments</h2>
                            <div class="devider"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($relatedTreatments as $related)
                        <div class="col-lg-4 col-md-6 single-item">
                            <div class="item">
                                <div class="thumb">
                                    @if ($related->icon)
                                        <img src="{{ asset('storage/' . $related->icon) }}" alt="{{ $related->title }}"
                                            style="width: 100%; height: 250px; object-fit: cover; border-radius: 8px;">
                                    @else
                                        <img src="{{ asset('assets/img/departments/2.jpg') }}" alt="Placeholder"
                                            style="width: 100%; height: 250px; object-fit: cover; border-radius: 8px;">
                                    @endif
                                </div>
                                <div class="info mt-30">
                                    <h4><a
                                            href="{{ route('treatment.show', $related->slug ?? '#') }}">{{ $related->title }}</a>
                                    </h4>
                                    <p>
                                        {{ Str::limit(strip_tags($related->content), 100) }}
                                    </p>
                                    <a href="{{ route('treatment.show', $related->slug ?? '#') }}"
                                        class="btn btn-sm btn-theme border btn-md">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
    <!-- End Department Single -->

@endsection
