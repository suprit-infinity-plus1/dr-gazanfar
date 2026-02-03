@extends('layouts.master')

@section('title', 'Our Blogs - Dr. Gazanfar')
@section('meta_description', 'Read the latest medical blogs and articles from Dr. Gazanfar')
@section('meta_keywords', 'medical blogs, health articles, orthopedic surgery, knee treatment, hip treatment')

@section('content')
    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image: url({{ asset('assets/img/banner/2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Our Blogs</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Blogs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog Area -->
    <div class="blog-area full-blog default-padding">
        <div class="container">
            <!-- Category Tabs -->
            @if ($categories->count() > 0)
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <div class="site-heading text-center">
                            <h2>Browse by Category</h2>
                            <div class="devider"></div>
                        </div>
                        <ul class="nav nav-tabs justify-content-center" role="tablist">
                            @foreach ($categories as $index => $category)
                                <li class="nav-item">
                                    <a class="nav-link {{ $index == 0 ? 'active' : '' }}" data-bs-toggle="tab"
                                        href="#category-{{ $category->id }}">
                                        {{ $category->name }} ({{ $category->blogs_count }})
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <div class="tab-content mt-4">
                            @foreach ($categories as $index => $category)
                                <div id="category-{{ $category->id }}" class="tab-pane {{ $index == 0 ? 'active' : '' }}">
                                    <div class="row">
                                        @forelse($category->blogs as $blog)
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
                                                                <li><i class="fas fa-calendar-alt"></i>
                                                                    {{ $blog->published_at->format('M d, Y') }}</li>
                                                            </ul>
                                                        </div>
                                                        <h4>
                                                            <a
                                                                href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                                                        </h4>
                                                        <p>{{ Str::limit(strip_tags($blog->content), 120) }}</p>
                                                        <a href="{{ route('blog.show', $blog->slug) }}"
                                                            class="btn btn-theme effect btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="col-12">
                                                <p class="text-center">No blogs in this category yet.</p>
                                            </div>
                                        @endforelse
                                    </div>
                                    @if ($category->blogs_count > 6)
                                        <div class="text-center mt-3">
                                            <a href="{{ route('all-blogs', $category->slug) }}"
                                                class="btn btn-theme effect">View More</a>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            <!-- Latest Articles -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading text-center">
                        <h2>Latest Articles</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                @forelse($latestBlogs as $blog)
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
                                <p>{{ Str::limit(strip_tags($blog->content), 120) }}</p>
                                <div class="tags">
                                    @foreach ($blog->tags as $tag)
                                        <span class="badge bg-secondary">{{ $tag->name }}</span>
                                    @endforeach
                                </div>
                                <a href="{{ route('blog.show', $blog->slug) }}"
                                    class="btn btn-theme effect btn-sm mt-2">Read More</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center">No blogs available yet.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="row">
                <div class="col-md-12 pagi-area text-center">
                    {{ $latestBlogs->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->
@endsection
