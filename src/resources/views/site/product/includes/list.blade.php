<div class="row">

    @foreach ($products as $product)

        <div class="col-lg-4 mb-4">

            <!-- Card Narrower -->
            <div class="card card-cascade narrower h-100">

                <!-- Card image -->
                @if ($product->picture)
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="{{ asset('storage/pictures/'.$product->picture) }}">
                        <a href="{{ route('site.product.show', $product->slug) }}">
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                @else
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="{{ asset('images/emptypicture.jpg') }}">
                        <a href="{{ route('site.product.show', $product->slug) }}">
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                @endif

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">

                    <!-- Title -->
                    <h4 class="card-title text-center pb-2 pt-1"> {{ $product->name }} </h4>
                    <!-- Text -->
                    @if ($product->description)
                        <p class="card-text"> {{ Str::words($product->description, 10) }} </p>
                    @endif
                    <!-- Button -->
                    <a class="btn btn-black white-text waves-effect waves-light" href="{{ route('site.product.show', $product->slug) }}"> {{ trans('site.product.show') }} </a>

                </div>

                <!-- Card footer -->
                <div class="mdb-color black text-center">
                    <ul class="list-unstyled list-inline font-small mt-3">
                        <li class="list-inline-item pr-2 white-text">
                            <i class="fas fa-dollar-sign"></i> {{ number_format($product->price) }} 
                        </li>
                        <li class="list-inline-item pr-2 white-text">
                            <i class="far fa-comments pr-1"></i> {{ $product->reviews->count() }}
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Card Narrower -->

        </div>

    @endforeach

</div>
