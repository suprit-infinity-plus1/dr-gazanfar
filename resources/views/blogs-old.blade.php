@extends('layouts.master')

@section('title', 'Blogs - Healdi')

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

    <!-- Start Blog
                    ============================================= -->
    <div class="blog-area full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content col-lg-8 col-md-12">
                        <div class="blog-item-box">
                            <div class="row">
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 single-item">
                                    <div class="item wow fadeInUp" data-wow-delay="500ms">
                                        <div class="thumb">
                                            <a href="{{ route('single-blog') }}"><img
                                                    src="{{ asset('assets/img/blog/1.jpg') }}" alt="Thumb"></a>
                                            <div class="post-date">
                                                12 Jul
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="tags">
                                                <ul>
                                                    <li>
                                                        <a href="#">Health</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Patient</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>
                                                <a href="{{ route('single-blog') }}">Apartments frequently or motionless on
                                                    reasonable.</a>
                                            </h4>
                                            <p>
                                                Draw part them he an to he roof only. Music leave say doors him. Tore bred
                                                form if sigh case as do. Staying he Distrusts delighted
                                            </p>
                                            <div class="meta">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/team/1.jpg') }}" alt="Author">
                                                            <span>Author</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-comments"></i> 12 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 single-item">
                                    <div class="item wow fadeInUp" data-wow-delay="600ms">
                                        <div class="thumb">
                                            <a href="{{ route('single-blog') }}"><img
                                                    src="{{ asset('assets/img/blog/2.jpg') }}" alt="Thumb"></a>
                                            <div class="post-date">
                                                15 Aug
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="tags">
                                                <ul>
                                                    <li>
                                                        <a href="#">Hospital</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Patient</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>
                                                <a href="{{ route('single-blog') }}">Consulted he eagerness unfeeling
                                                    deficient. </a>
                                            </h4>
                                            <p>
                                                Draw part them he an to he roof only. Music leave say doors him. Tore bred
                                                form if sigh case as do. Staying he Distrusts delighted
                                            </p>
                                            <div class="meta">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/team/2.jpg') }}" alt="Author">
                                                            <span>Author</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-comments"></i> 27 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 single-item">
                                    <div class="item wow fadeInUp" data-wow-delay="700ms">
                                        <div class="thumb">
                                            <a href="{{ route('single-blog') }}"><img
                                                    src="{{ asset('assets/img/blog/3.jpg') }}" alt="Thumb"></a>
                                            <div class="post-date">
                                                05 Nov
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="tags">
                                                <ul>
                                                    <li>
                                                        <a href="#">Health</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Patient</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>
                                                <a href="{{ route('single-blog') }}">Draw part them he an to he roof
                                                    only.</a>
                                            </h4>
                                            <p>
                                                Draw part them he an to he roof only. Music leave say doors him. Tore bred
                                                form if sigh case as do. Staying he Distrusts delighted
                                            </p>
                                            <div class="meta">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/team/3.jpg') }}" alt="Author">
                                                            <span>Author</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-comments"></i> 48 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 single-item">
                                    <div class="item wow fadeInUp" data-wow-delay="800ms">
                                        <div class="thumb">
                                            <a href="{{ route('single-blog') }}"><img
                                                    src="{{ asset('assets/img/blog/4.jpg') }}" alt="Thumb"></a>
                                            <div class="post-date">
                                                12 Jul
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="tags">
                                                <ul>
                                                    <li>
                                                        <a href="#">Health</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Patient</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>
                                                <a href="{{ route('single-blog') }}">Things do plenty others an vanity
                                                    myself waited.</a>
                                            </h4>
                                            <p>
                                                Draw part them he an to he roof only. Music leave say doors him. Tore bred
                                                form if sigh case as do. Staying he Distrusts delighted
                                            </p>
                                            <div class="meta">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/team/4.jpg') }}" alt="Author">
                                                            <span>Author</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-comments"></i> 12 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 single-item">
                                    <div class="item wow fadeInUp" data-wow-delay="500ms">
                                        <div class="thumb">
                                            <a href="{{ route('single-blog') }}"><img
                                                    src="{{ asset('assets/img/blog/6.jpg') }}" alt="Thumb"></a>
                                            <div class="post-date">
                                                12 Jul
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="tags">
                                                <ul>
                                                    <li>
                                                        <a href="#">Health</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Patient</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>
                                                <a href="{{ route('single-blog') }}">Apartments frequently or motionless
                                                    on reasonable.</a>
                                            </h4>
                                            <p>
                                                Draw part them he an to he roof only. Music leave say doors him. Tore bred
                                                form if sigh case as do. Staying he Distrusts delighted
                                            </p>
                                            <div class="meta">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/team/5.jpg') }}"
                                                                alt="Author">
                                                            <span>Author</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-comments"></i> 12 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 single-item">
                                    <div class="item wow fadeInUp" data-wow-delay="600ms">
                                        <div class="thumb">
                                            <a href="{{ route('single-blog') }}"><img
                                                    src="{{ asset('assets/img/blog/6.jpg') }}" alt="Thumb"></a>
                                            <div class="post-date">
                                                15 Aug
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="tags">
                                                <ul>
                                                    <li>
                                                        <a href="#">Hospital</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Patient</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4>
                                                <a href="{{ route('single-blog') }}">Consulted he eagerness unfeeling
                                                    deficient. </a>
                                            </h4>
                                            <p>
                                                Draw part them he an to he roof only. Music leave say doors him. Tore bred
                                                form if sigh case as do. Staying he Distrusts delighted
                                            </p>
                                            <div class="meta">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/team/1.jpg') }}"
                                                                alt="Author">
                                                            <span>Author</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-comments"></i> 27 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>

                            <!-- Pagination -->
                            <div class="row">
                                <div class="col-md-12 pagi-area text-center">
                                    <nav aria-label="navigation">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#"><i
                                                        class="fas fa-angle-double-left"></i></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#"><i
                                                        class="fas fa-angle-double-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar wow fadeInLeft col-lg-4 col-md-12">
                        <aside>
                            <div class="sidebar-item search">
                                <div class="title">
                                    <h4>Search</h4>
                                </div>
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text" name="text" class="form-control">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Recent Post</h4>
                                </div>
                                <ul>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="{{ asset('assets/img/gallery/1.jpg') }}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="{{ route('single-blog') }}">Participate in staff meetingness
                                                dedicated</a>
                                            <div class="meta-title">
                                                <span class="post-date"><i class="fas fa-clock"></i> 12 Feb,
                                                    2025</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="{{ route('single-blog') }}">
                                                <img src="{{ asset('assets/img/gallery/3.jpg') }}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="{{ route('single-blog') }}">Future Plan & Strategy for Consutruction
                                            </a>
                                            <div class="meta-title">
                                                <span class="post-date"><i class="fas fa-clock"></i> 05 Jul,
                                                    2019</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="{{ asset('assets/img/gallery/4.jpg') }}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="{{ route('single-blog') }}">Melancholy particular devonshire
                                                alteration</a>
                                            <div class="meta-title">
                                                <span class="post-date"><i class="fas fa-clock"></i> 29 Aug,
                                                    2025</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>category list</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="#">national <span>69</span></a>
                                        </li>
                                        <li>
                                            <a href="#">national <span>25</span></a>
                                        </li>
                                        <li>
                                            <a href="#">sports <span>18</span></a>
                                        </li>
                                        <li>
                                            <a href="#">megazine <span>37</span></a>
                                        </li>
                                        <li>
                                            <a href="#">health <span>12</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item gallery">
                                <div class="title">
                                    <h4>Gallery</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('assets/img/departments/1.jpg') }}" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('assets/img/departments/2.jpg') }}" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('assets/img/departments/3.jpg') }}" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('assets/img/departments/4.jpg') }}" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('assets/img/departments/5.jpg') }}" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('assets/img/departments/6.jpg') }}" alt="thumb">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item archives">
                                <div class="title">
                                    <h4>Archives</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="#">Aug 2025</a></li>
                                        <li><a href="#">Sept 2025</a></li>
                                        <li><a href="#">Nov 2025</a></li>
                                        <li><a href="#">Dec 2025</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item social-sidebar">
                                <div class="title">
                                    <h4>follow us</h4>
                                </div>
                                <div class="sidebar-info">
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
                                                <i class="fab fa-pinterest"></i>
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
                            <div class="sidebar-item tags">
                                <div class="title">
                                    <h4>tags</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="#">Fashion</a>
                                        </li>
                                        <li><a href="#">study</a>
                                        <li><a href="#">Education</a>
                                        </li>
                                        <li><a href="#">nation</a>
                                        </li>
                                        <li><a href="#">health</a>
                                        </li>
                                        <li><a href="#">food</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
