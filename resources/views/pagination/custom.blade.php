<style>
    .pagination .page-item .page-link {
        transform: none !important;
        transition: none !important;
    }

    .pagination .page-item .page-link:active,
    .pagination .page-item .page-link:focus,
    .pagination .page-item .page-link:hover {
        transform: none !important;
        box-shadow: none !important;
    }
</style>

<div class="row">
    <div class="col-md-12 pagi-area text-center">
        <nav aria-label="Page navigation">
            <ul class="pagination">

                {{-- Jump Backward 10 Pages (Double Arrow Left) --}}
                @if ($paginator->currentPage() > 1)
                    @php
                        $prevTen = $paginator->currentPage() - 10;
                        $jumpBackUrl = $prevTen < 1 ? $paginator->url(1) : $paginator->url($prevTen);
                    @endphp
                    <li class="page-item">
                        <a class="page-link" href="{{ $jumpBackUrl }}" aria-label="Jump Backward">
                            <i class="fas fa-angle-double-left"></i>
                        </a>
                    </li>
                @endif

                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    {{-- <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li> --}}
                @else
                    <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i
                                class="fas fa-angle-left"></i></a></li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled"><a class="page-link" href="#">{{ $element }}</a></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a>
                                </li>
                            @else
                                <li class="page-item"><a class="page-link"
                                        href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link (Single Arrow) --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                            aria-label="Next &raquo;">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </li>
                @else
                    {{-- <li class="page-item disabled">
                        <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                    </li> --}}
                @endif

                {{-- Jump Forward 10 Pages (Double Arrow Right) --}}
                @if ($paginator->hasMorePages())
                    @php
                        $nextTen = $paginator->currentPage() + 10;
                        $jumpUrl =
                            $nextTen > $paginator->lastPage()
                                ? $paginator->url($paginator->lastPage())
                                : $paginator->url($nextTen);
                    @endphp
                    <li class="page-item">
                        <a class="page-link" href="{{ $jumpUrl }}" aria-label="Jump Forward">
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                    </li>
                @endif

            </ul>
        </nav>
    </div>
</div>
