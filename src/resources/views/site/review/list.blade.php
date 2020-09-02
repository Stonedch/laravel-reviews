<div class="mb-3">
    @foreach ($reviews as $review)

        <div class="media text-muted ">
            <p class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">

                @if ($review->user)
                    <strong class="d-block text-gray-dark"> @ {{ $review->user->name }} </strong>
                @else
                    <strong class="d-block text-gray-dark"> @ anonim </strong>
                @endif

                <span class="d-block"> <b> Score: </b> {{ $review->score }} </span>

                @if ($review->name)
                    <span class="d-block"> <b> Review name: </b> {{ $review->name }} </span>
                @endif

                @if ($review->positive)
                    <span class="d-block"> <b> Positive: </b> {{ $review->positive }} </span>
                @endif

                @if ($review->negative)
                    <span class="d-block"> <b> Negative: </b> {{ $review->negative }} </span>
                @endif

            </p>
        </div>

    @endforeach
</div>
