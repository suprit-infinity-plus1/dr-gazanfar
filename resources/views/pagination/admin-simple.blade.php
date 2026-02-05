@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
        {{-- Mobile View (Simple) --}}
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <span
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:bg-gray-50 focus:outline-none focus:border-gray-300 active:bg-gray-100">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:bg-gray-50 focus:outline-none focus:border-gray-300 active:bg-gray-100">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        {{-- Desktop View --}}
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700 leading-5">
                    Showing
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    to
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    of
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    results
                </p>
            </div>

            <div>
                <span class="relative z-0 inline-flex shadow-sm rounded-md">

                    {{-- Double Arrow Left (Jump Backward 10) --}}
                    @if ($paginator->currentPage() > 1)
                        @php
                            $prevTen = $paginator->currentPage() - 10;
                            $jumpBackUrl = $prevTen < 1 ? $paginator->url(1) : $paginator->url($prevTen);
                        @endphp
                        <a href="{{ $jumpBackUrl }}" aria-label="Jump Backward"
                            class="relative inline-flex items-center justify-center w-10 h-10 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-md hover:bg-gray-50 focus:z-10 focus:outline-none focus:border-gray-300">
                            <span class="sr-only">Jump Backward</span>
                            <i class="fas fa-angle-double-left"></i>
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="Jump Backward"
                            class="relative inline-flex items-center justify-center w-10 h-10 -ml-px text-sm font-medium text-gray-300 bg-white border border-gray-300 cursor-default rounded-l-md">
                            <span class="sr-only">Jump Backward</span>
                            <i class="fas fa-angle-double-left"></i>
                        </span>
                    @endif


                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}"
                            class="relative inline-flex items-center justify-center w-10 h-10 -ml-px text-sm font-medium text-gray-300 bg-white border border-gray-300 cursor-default">
                            <span class="sr-only">Previous</span>
                            <i class="fas fa-angle-left"></i>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                            aria-label="{{ __('pagination.previous') }}"
                            class="relative inline-flex items-center justify-center w-10 h-10 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 hover:bg-gray-50 focus:z-10 focus:outline-none focus:border-gray-300">
                            <span class="sr-only">Previous</span>
                            <i class="fas fa-angle-left"></i>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span
                                    class="relative inline-flex items-center justify-center w-10 h-10 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span
                                            class="relative inline-flex items-center justify-center w-10 h-10 -ml-px text-sm font-medium text-white bg-gray-500 border border-gray-300 cursor-default leading-5">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}"
                                        class="relative inline-flex items-center justify-center w-10 h-10 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:bg-gray-50 focus:z-10 focus:outline-none focus:border-gray-300"
                                        aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                            aria-label="{{ __('pagination.next') }}"
                            class="relative inline-flex items-center justify-center w-10 h-10 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 hover:bg-gray-50 focus:z-10 focus:outline-none focus:border-gray-300">
                            <span class="sr-only">Next</span>
                            <i class="fas fa-angle-right"></i>
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}"
                            class="relative inline-flex items-center justify-center w-10 h-10 -ml-px text-sm font-medium text-gray-300 bg-white border border-gray-300 cursor-default">
                            <span class="sr-only">Next</span>
                            <i class="fas fa-angle-right"></i>
                        </span>
                    @endif

                    {{-- Double Arrow Right (Jump Forward 10) --}}
                    @if ($paginator->hasMorePages())
                        @php
                            $nextTen = $paginator->currentPage() + 10;
                            $jumpUrl =
                                $nextTen > $paginator->lastPage()
                                    ? $paginator->url($paginator->lastPage())
                                    : $paginator->url($nextTen);
                        @endphp
                        <a href="{{ $jumpUrl }}" aria-label="Jump Forward"
                            class="relative inline-flex items-center justify-center w-10 h-10 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 hover:bg-gray-50 focus:z-10 focus:outline-none focus:border-gray-300 rounded-r-md">
                            <span class="sr-only">Jump Forward</span>
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="Jump Forward"
                            class="relative inline-flex items-center justify-center w-10 h-10 -ml-px text-sm font-medium text-gray-300 bg-white border border-gray-300 cursor-default rounded-r-md">
                            <span class="sr-only">Jump Forward</span>
                            <i class="fas fa-angle-double-right"></i>
                        </span>
                    @endif

                </span>
            </div>
        </div>
    </nav>
@endif
