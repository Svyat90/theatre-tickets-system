@if ($paginator->hasPages())
    <div class="cards-pagination">
        <a class="prev" href="{{ $paginator->previousPageUrl() }}"></a>

        @foreach(range(1, $paginator->lastPage()) as $i)
            @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                @if ($i == $paginator->currentPage())
                    <a class="pagination-num active" href="">{{ $i }}</a>
                @else
                    <a class="pagination-num" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                @endif
            @endif
        @endforeach

        <a class="next" href="{{ $paginator->nextPageUrl() }}"></a>
    </div>
@endif
