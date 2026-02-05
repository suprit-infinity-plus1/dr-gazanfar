@extends('layouts.master')

@section('title', 'Blogs - Healdi')

@section('content')
    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area bg-gradient text-center">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url({{ asset('assets/img/shape/9.png') }});"></div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Blogs</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="active">Sidebar</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog -->
    <div class="blog-area full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content col-lg-8 col-md-12">
                        <div class="blog-item-box">
                            <div class="row">
                                @forelse($latestBlogs as $blog)
                                    <!-- Single Item -->
                                    <div class="col-lg-6 col-md-6 single-item">
                                        <div class="item wow fadeInUp" data-wow-delay="500ms">
                                            <div class="thumb">
                                                <a href="{{ route('blog.show', $blog->slug) }}">
                                                    <img src="{{ asset('storage/' . $blog->cover_image) }}"
                                                        alt="{{ $blog->cover_image_alt ?? $blog->title }}">
                                                </a>
                                                <div class="post-date">
                                                    {{ $blog->published_at->format('d M') }}
                                                </div>
                                            </div>
                                            <div class="info">
                                                @if ($blog->categories->isNotEmpty())
                                                    <div class="tags">
                                                        <ul>
                                                            @foreach ($blog->categories as $category)
                                                                <li>
                                                                    <a
                                                                        href="{{ route('all-blogs', $category->slug) }}">{{ $category->name }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                <h4>
                                                    <a
                                                        href="{{ route('blog.show', $blog->slug) }}">{{ Str::limit($blog->title, 50) }}</a>
                                                </h4>
                                                <p>
                                                    {{ Str::limit(strip_tags($blog->content), 100) }}
                                                </p>
                                                <div class="meta">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <img src="{{ asset('assets/img/team/1.jpg') }}"
                                                                    alt="Author">
                                                                <span>{{ $blog->author }}</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                @empty
                                    <div class="col-12">
                                        <p>No blogs found.</p>
                                    </div>
                                @endforelse
                            </div>

                            <!-- Pagination -->
                            <div class="row">
                                <div class="col-md-12 pagi-area text-center">
                                    {{ $latestBlogs->links('pagination.custom') }}
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Sidebar -->
                    @include('partials.blog-sidebar')

                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
