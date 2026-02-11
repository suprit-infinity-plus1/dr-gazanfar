@extends('layouts.master')

@section('title', $treatment->seo_title ?? $treatment->title . ' - Dr. Gazanfar')
@section('meta_description', $treatment->meta_description ?? 'Treatment for ' . $treatment->title . ' by Dr. Gazanfar.')

@section('content')

    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area bg-gradient text-center">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url({{ asset('assets/img/shape/9.png') }});"></div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>{{ $treatment->title }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Treatments</a></li>
                        <li><a
                                href="{{ $treatment->type == 'knee' ? route('knee-treatments') : route('hip-treatments') }}">{{ ucfirst($treatment->type) }}</a>
                        </li>
                        <li class="active">{{ $treatment->title }}</li>
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
                            {{ $treatment->title }}
                        </h1>

                        <!-- Thumb -->
                        @if ($treatment->icon)
                            <div class="thumb mb-4">
                                <img src="{{ asset('storage/' . $treatment->icon) }}" alt="{{ $treatment->title }}"
                                    style="width: 100%; border-radius: 8px;">
                            </div>
                        @endif

                        <!-- Content -->
                        <div class="intro-text mb-5">
                            {!! $treatment->content !!}

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
        </div>
    </div>
    <!-- End Department Single -->

@endsection
