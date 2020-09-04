<nav>
    <ul class="pagination pg-dark">
        <li class="page-item">
            <a class="page-link waves-effect" href="{{ $products->previousPageUrl() }}">
                <i class="fas fa-chevron-left"></i>
            </a>
        </li>
        @for ($i = 1; $i <= $products->lastPage(); $i++)
            @if ($i == $products->currentPage())
                <li class="page-item active">
                    <a class="page-link waves-effect" href="#"> {{ $i }}
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link waves-effect" href="{{ $products->url($i) }}"> {{ $i }} </a>
                </li>
            @endif
        @endfor
        <li class="page-item">
            <a class="page-link waves-effect" href="{{ $products->nextPageUrl() }}">
                <i class="fas fa-chevron-right"></i>
            </a>
        </li>
    </ul>
</nav>
