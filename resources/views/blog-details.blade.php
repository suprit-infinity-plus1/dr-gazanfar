@extends('layouts.master')

@section('title', $blog->seo_title ?? $blog->title)
@section('meta_description', $blog->meta_description)
@section('meta_keywords', $blog->meta_keywords)

@section('content')
    @if ($blog->schema)
        <script type="application/ld+json">
{!! $blog->schema !!}
</script>
    @endif

    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image: url({{ asset('assets/img/banner/2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>{{ $blog->title }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="{{ route('blogs') }}">Blogs</a></li>
                        <li class="active">{{ Str::limit($blog->title, 30) }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog Single -->
    <div class="blog-area single full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="blog-content">
                            <!-- Cover Image -->
                            @if ($blog->cover_image)
                                <div class="thumb mb-4">
                                    <img src="{{ asset('storage/' . $blog->cover_image) }}"
                                        alt="{{ $blog->cover_image_alt ?? $blog->title }}">
                                </div>
                            @endif

                            <!-- Blog Meta -->
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-user"></i> By {{ $blog->author }}</li>
                                    <li><i class="fas fa-calendar-alt"></i> {{ $blog->published_at->format('F d, Y') }}</li>
                                    <li><i class="fas fa-folder"></i> {{ $blog->category->name ?? 'Uncategorized' }}</li>
                                    <li><i class="fas fa-eye"></i> {{ $blog->views }} views</li>
                                </ul>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-detail-content">
                                {!! $blog->content !!}
                            </div>

                            <!-- Tags -->
                            @if ($blog->tags->count() > 0)
                                <div class="tags mt-4">
                                    <h5>Tags:</h5>
                                    @foreach ($blog->tags as $tag)
                                        <span class="badge bg-primary me-2">{{ $tag->name }}</span>
                                    @endforeach
                                </div>
                            @endif

                            <!-- FAQs Section -->
                            @if ($blog->faqs->count() > 0)
                                <div class="faq-section mt-5">
                                    <h3 class="mb-4">Frequently Asked Questions</h3>
                                    <div class="accordion" id="faqAccordion">
                                        @foreach ($blog->faqs as $index => $faq)
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="faqHeading{{ $index }}">
                                                    <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#faqCollapse{{ $index }}"
                                                        aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                                        aria-controls="faqCollapse{{ $index }}">
                                                        {{ $faq->question }}
                                                    </button>
                                                </h2>
                                                <div id="faqCollapse{{ $index }}"
                                                    class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                                    aria-labelledby="faqHeading{{ $index }}"
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

                            <!-- Related Blogs -->
                            @if ($relatedBlogs->count() > 0)
                                <div class="related-blogs mt-5">
                                    <h3 class="mb-4">Related Articles</h3>
                                    <div class="row">
                                        @foreach ($relatedBlogs as $relatedBlog)
                                            <div class="col-md-6 mb-4">
                                                <div class="item">
                                                    <div class="thumb">
                                                        <a href="{{ route('blog.show', $relatedBlog->slug) }}">
                                                            <img src="{{ asset('storage/' . $relatedBlog->cover_image) }}"
                                                                alt="{{ $relatedBlog->cover_image_alt ?? $relatedBlog->title }}">
                                                        </a>
                                                    </div>
                                                    <div class="info">
                                                        <h5>
                                                            <a
                                                                href="{{ route('blog.show', $relatedBlog->slug) }}">{{ $relatedBlog->title }}</a>
                                                        </h5>
                                                        <p>{{ Str::limit(strip_tags($relatedBlog->content), 100) }}</p>
                                                        <a href="{{ route('blog.show', $relatedBlog->slug) }}"
                                                            class="btn btn-theme effect btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Single -->
@endsection
