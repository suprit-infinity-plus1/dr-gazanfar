@extends('layouts.master')

@section('title', $blog->seo_title ?? $blog->title)
@section('meta_description', $blog->meta_description)
@section('meta_keywords', $blog->meta_keywords)

@section('canonical_url', $blog->canonical_url ?? url()->current())

@section('og_title', $blog->seo_title ?? $blog->title)
@section('og_description', $blog->meta_description)
@section('og_image', $blog->cover_image ? asset('storage/' . $blog->cover_image) : asset('assets/img/logo1.png'))

@section('twitter_title', $blog->seo_title ?? $blog->title)
@section('twitter_description', $blog->meta_description)
@section('twitter_image', $blog->cover_image ? asset('storage/' . $blog->cover_image) : asset('assets/img/logo1.png'))

@section('content')
    @if ($blog->schema)
        <script type="application/ld+json">
    {!! $blog->schema !!}
    </script>
    @endif

    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area bg-gradient text-center">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url({{ asset('assets/img/shape/9.png') }});"></div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>{{ Str::limit($blog->title, 40) }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="{{ route('blogs') }}">Blog</a></li>
                        <li class="active">Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog -->
    <div class="blog-area single full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content single-item wow fadeInUp col-lg-8 col-md-12">
                        <div class="item">

                            <div class="blog-item-box">
                                <!-- Start Post Thumb -->
                                <div class="thumb">
                                    <a href="#"><img src="{{ asset('storage/' . $blog->cover_image) }}"
                                            alt="{{ $blog->cover_image_alt ?? $blog->title }}" class="w-100"></a>
                                    <div class="post-date">
                                        {{ $blog->published_at->format('d M') }}
                                    </div>
                                </div>
                                <!-- Start Post Thumb -->

                                <div class="info">
                                    <div class="tags">
                                        <ul>
                                            <li>
                                                <a href="#">{{ $blog->category->name }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4>{{ $blog->title }}</h4>

                                    <div class="blog-detail-content">
                                        {!! $blog->content !!}
                                    </div>

                                    <!-- FAQs if any -->
                                    @if ($blog->faqs->count() > 0)
                                        <div class="mt-4">
                                            <h3>Frequently Asked Questions</h3>
                                            <div class="accordion" id="faqAccordion">
                                                @foreach ($blog->faqs as $index => $faq)
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="heading{{ $index }}">
                                                            <button
                                                                class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapse{{ $index }}"
                                                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                                                aria-controls="collapse{{ $index }}">
                                                                {{ $faq->question }}
                                                            </button>
                                                        </h2>
                                                        <div id="collapse{{ $index }}"
                                                            class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                                            aria-labelledby="heading{{ $index }}"
                                                            data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body">
                                                                {{ $faq->answer }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif

                                    <!-- Start Post Pagination -->
                                    <div class="post-pagi-area">
                                        <a href="{{ route('blogs') }}"><i class="fas fa-angle-double-left"></i> Back to
                                            Blogs</a>
                                    </div>
                                    <!-- End Post Pagination -->
                                </div>
                            </div>
                        </div>

                        <!-- Start Post Tags -->
                        <div class="post-tags share">
                            <div class="tags">
                                @foreach ($blog->tags as $tag)
                                    <a href="{{ route('blogs.tag', $tag->slug) }}">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Post Tags -->

                    </div>

                    <!-- Sidebar -->
                    @include('partials.blog-sidebar')

                </div>

                <!-- Related Blogs Full Width -->
                @if ($relatedBlogs->count() > 0)
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="related-blogs mt-5">
                                <div class="site-heading text-center">
                                    <h2>Related Blogs</h2>
                                    <div class="devider"></div>
                                </div>
                                <div class="related-blogs-carousel owl-carousel owl-theme">
                                    @foreach ($relatedBlogs as $relatedBlog)
                                        <div class="item">
                                            <div class="thumb">
                                                <a href="{{ route('blog.show', $relatedBlog->slug) }}">
                                                    <img src="{{ asset('storage/' . $relatedBlog->cover_image) }}"
                                                        alt="{{ $relatedBlog->cover_image_alt ?? $relatedBlog->title }}"
                                                        style="height: 200px; width: 100%; object-fit: cover;">
                                                </a>
                                                <div class="post-date">
                                                    {{ $relatedBlog->published_at->format('d M') }}
                                                </div>
                                            </div>
                                            <div class="info mt-3">
                                                <h4>
                                                    <a
                                                        href="{{ route('blog.show', $relatedBlog->slug) }}">{{ Str::limit($relatedBlog->title, 40) }}</a>
                                                </h4>
                                                <p
                                                    style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                                    {{ strip_tags($relatedBlog->content) }}
                                                </p>
                                                <a href="{{ route('blog.show', $relatedBlog->slug) }}"
                                                    class="btn-simple"><i class="fas fa-angle-right"></i> Read More</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- End Related Blogs -->
            </div>
        </div>
        <!-- End Blog -->
    @endsection

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.related-blogs-carousel').owlCarousel({
                    loop: false,
                    margin: 30,
                    nav: false,
                    dots: true,
                    autoplay: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        800: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
            });
        </script>
    @endpush
