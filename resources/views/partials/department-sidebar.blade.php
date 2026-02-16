<div class="sidebar wow fadeInLeft col-lg-4 col-md-12">
    <aside style="position: sticky; top: 100px;">
        <!-- Doctor Photo -->
        <div class="sidebar-item doctor-photo text-center mb-4">
            <img src="{{ asset('assets/img/doctors/dr-gazanfar-profile-img.jpeg') }}" alt="Dr. Gazanfar"
                class="img-fluid rounded" style="width: 100%; object-fit: cover;">
            <h4 class="mt-3">Dr. Gazanfar</h4>
            <p class="text-muted">Specialist Orthopaedic Surgeon</p>
        </div>
        <div class="sidebar-item doctor-contact text-center mb-4">
            <a href="tel:+919876543210" class="btn btn-md btn-block text-white"
                style="background-color: #153754; border-radius: 5px;">
                <i class="fas fa-phone fa-flip-horizontal mr-2"></i> Call: 98765 43210
            </a>
        </div>

        <!-- Recent Posts -->
        @if (isset($recentBlogs) && $recentBlogs->count() > 0)
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
        @endif

        <!-- Social -->
        <div class="sidebar-item social-sidebar mt-5">
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
    </aside>
</div>
