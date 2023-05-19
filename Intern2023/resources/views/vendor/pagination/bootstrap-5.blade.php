<div class="pages">
    @if ($paginator->hasPages())
        <nav class="pages_nav">

            <div>
                <p class="small text-muted">
                    <span class="fw-semibold">{{ $paginator->total() }}</span>
                    {!! __('件中') !!}
                    <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                    {!! __('-') !!}
                    <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                    {!! __('件') !!}

                </p>
            </div>

            <div class="pages_nav-number">
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled pages_nav-li" aria-disabled="true"
                            aria-label="@lang('pagination.previous')" >
                            <span class="page-link" aria-hidden="true">
                                <i class="fa-solid fa-angles-left"></i></span>
                        </li>
                        <li class="page-item disabled pages_nav-li" aria-disabled="true"
                            aria-label="@lang('pagination.previous')">
                            <span class="page-link" aria-hidden="true"><i
                                    class="fa-solid fa-angle-left resul_page-icon pages_nav-icon"></i></span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link pages_nav-li" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                                aria-label="@lang('pagination.previous')"><i class="fa-solid fa-angles-left"></i></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link pages_nav-li" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                                aria-label="@lang('pagination.previous')"><i
                                    class="fa-solid fa-angle-left resul_page-icon "></i></a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled" aria-disabled="true"><span
                                    class="page-link">{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active pages_nav-li" aria-current="page"><span
                                            class="page-link">{{ $page }}</span></li>
                                @else
                                    <li class="page-item pages_nav-li"><a class="page-link"
                                            href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item">
                            <a class="page-link pages_nav-li" href="{{ $paginator->nextPageUrl() }}" rel="next"
                                aria-label="@lang('pagination.next')"><i
                                    class="fa-solid fa-angle-right resul_page-icon "></i></a>
                        </li>
                        <li class="page-item" id="btnNext" value="{{$paginator->lastPage()}}" onclick="test(this)">
                            <a class="page-link pages_nav-li"  rel="next"
                                aria-label="@lang('pagination.next')"
                                ><i class="fa-solid fa-angles-right"></i></a>
                        </li>
                    @else
                        <li class="page-item disabled pages_nav-li" aria-disabled="true"
                            aria-label="@lang('pagination.next')">
                            <span class="page-link" aria-hidden="true"><i
                                    class="fa-solid fa-angle-right resul_page-icon "></i></span>
                        </li>
                        <li class="page-item disabled pages_nav-li" aria-disabled="true"
                            aria-label="@lang('pagination.next')">
                            <span class="page-link" aria-hidden="true">
                                <i class="fa-solid fa-angles-right"></i></span>
                        </li>
                    @endif
                </ul>
            </div>

        </nav>
    @endif
</div>
