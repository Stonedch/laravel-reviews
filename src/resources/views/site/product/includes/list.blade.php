<div class="row mb-4">

    @foreach ($products as $product)

        <div class="col-md-4">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0"> {{ $product->name }} </h3>
                    <div class="mb-1 text-muted"> price: {{ number_format($product->price) }} </div>
                    @if ($product->description)
                        <p class="card-text mb-auto"> {{ Str::words($product->description, 10) }}... </p>
                    @endif
                    <a class="stretched-link" href="{{ route('site.product.show', $product->slug) }}"> Detail </a>
                </div>

                @if ($product->picture)
                    <img class="d-none d-lg-block" src="{{ asset('storage/pictures/'.$product->picture) }}" alt="">
                @endif

            </div>
        </div>

    @endforeach

</div>
