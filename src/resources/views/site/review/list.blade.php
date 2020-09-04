@foreach ($reviews as $review)

    <div class="media mt-4 px-1 text-md-left pl-3 border-left">
        <div class="media-body">
            <h5 class="font-weight-bold mt-0 mb-3">
                @if ($review->user)
                    <span> @ {{ $review->user->name }} </span>
                @else
                    <span> @ Anonim </span>
                @endif
                <span class="grey-text"> {{ $review->score }}/10 </span>
            </h5>
            @if ($review->name)
                <p> <i class="far fa-comment"></i> {{ $review->name }} </p>
            @endif
            @if ($review->positive)
                <p> <i class="far fa-thumbs-up"></i> {{ $review->positive }} </p>
            @endif
            @if ($review->negative)
                <p> <i class="far fa-thumbs-down"></i> {{ $review->negative }} </p>
            @endif
        </div>
    </div>

@endforeach