<div class="sidebar wow fadeInLeft col-lg-4 col-md-12">
    <aside>
        <!-- Search (Non-Sticky) -->
        <div class="sidebar-item search">
            <div class="title">
                <h4>Search</h4>
            </div>
            <div class="sidebar-info">
                <form action="{{ route('blogs') }}" method="GET">
                    <input type="text" name="text" class="form-control" placeholder="Search..."
                        value="{{ request('text') }}">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>

        <!-- Sticky Container for Rest -->
        <div style="position: sticky; top: 100px;">
            <!-- Recent Posts -->
            <div class="sidebar-item recent-post">
                <div class="title">
                    <h4>Recent Post</h4>
                </div>
                <ul>
                    @foreach ($recentBlogs as $recent)
                        <li>
                            <div class="thumb">
                                <a href="{{ route('blog.show', $recent->slug) }}">
                                    <img src="{{ asset('storage/' . $recent->cover_image) }}"
                                        alt="{{ $recent->cover_image_alt ?? $recent->title }}"
                                        style="width: 80px; height: 80px; object-fit: cover;">
                                </a>
                            </div>
                            <div class="info">
                                <a
                                    href="{{ route('blog.show', $recent->slug) }}">{{ Str::limit($recent->title, 40) }}</a>
                                <div class="meta-title">
                                    <span class="post-date"><i class="fas fa-clock"></i>
                                        {{ $recent->published_at->format('d M, Y') }}</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Categories -->
            <div class="sidebar-item category">
                <div class="title">
                    <h4>category list</h4>
                </div>
                <div class="sidebar-info">
                    <ul>
                        @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('all-blogs', $category->slug) }}">{{ $category->name }}
                                    <span>{{ $category->blogs_count }}</span></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Social -->
            <div class="sidebar-item social-sidebar">
                <div class="title">
                    <h4>follow us</h4>
                </div>
                <div class="sidebar-info">
                    <ul>
                        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- Tags -->
            <div class="sidebar-item tags">
                <div class="title">
                    <h4>tags</h4>
                </div>
                <div class="sidebar-info">
                    <ul>
                        @foreach ($tags as $tag)
                            <li><a href="#">{{ $tag->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </aside>
</div>
