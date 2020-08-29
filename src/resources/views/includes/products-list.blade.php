<div class="row mb-4">
    @foreach ($products as $product)
        <div class="col-md-4">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0"> {{ $product->name }} </h3>
                    <div class="mb-1 text-muted"> {{ number_format($product->price) }}р. </div>
                    <p class="card-text mb-auto"> {{ Str::words($product->description, 10) }} </p>
                    <a href="{{ route('products-detail', $product->slug) }}" class="stretched-link"> Подробнее </a>
                </div>
                @if ($product->picture)
                    <div class="col-auto d-none d-lg-block">
                        <img width="250" height="200" src="{{ asset('storage/pictures/'.$product->picture) }}" alt="">
                    </div>
                @endif
            </div>
        </div>
    @endforeach
</div>
