@extends('layouts.master')

@section('title', $category->name . ' Blogs - Dr. Gazanfar')
@section('meta_description', 'Browse all ' . $category->name . ' blogs from Dr. Gazanfar')

@section('content')
    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image: url({{ asset('assets/img/banner/2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>{{ $category->name }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="{{ route('blogs') }}">Blogs</a></li>
                        <li class="active">{{ $category->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog Area -->
    <div class="blog-area full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading text-center">
                        <h2>{{ $category->name }} Blogs</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                @forelse($blogs as $blog)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{ route('blog.show', $blog->slug) }}">
                                    <img src="{{ asset('storage/' . $blog->cover_image) }}"
                                        alt="{{ $blog->cover_image_alt ?? $blog->title }}">
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li><i class="fas fa-user"></i> {{ $blog->author }}</li>
                                        <li><i class="fas fa-calendar-alt"></i> {{ $blog->published_at->format('M d, Y') }}
                                        </li>
                                        <li><i class="fas fa-eye"></i> {{ $blog->views }} views</li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                                </h4>
                                <p>{{ Str::limit(strip_tags($blog->content), 150) }}</p>
                                <div class="tags mb-2">
                                    @foreach ($blog->tags as $tag)
                                        <span class="badge bg-secondary">{{ $tag->name }}</span>
                                    @endforeach
                                </div>
                                <a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-theme effect btn-sm">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center">No blogs in this category yet.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="row">
                <div class="col-md-12 pagi-area text-center">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->
@endsection
