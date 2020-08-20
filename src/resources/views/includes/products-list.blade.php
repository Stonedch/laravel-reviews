<div class="row mb-4">
    @foreach ($products as $product)
        <div class="col-md-4">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0"> {{ $product->name }} </h3>
                    <div class="mb-1 text-muted"> {{ number_format($product->price) }}р. </div>
                    <p class="card-text mb-auto"> {{ $product->description }} </p>
                    <a href="{{ route('products-detail', $product->slug) }}" class="stretched-link"> Подробнее </a>
                </div>
                @if ($product->picture)
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    </div>
                @endif
            </div>
        </div>
    @endforeach
</div>
