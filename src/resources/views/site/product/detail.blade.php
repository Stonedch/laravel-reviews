@extends('layouts.app')

@section('content')


    <div class="text-center mb-5">
        <h1 class="h1 text-uppercase"> {{ trans('site.page.product.title') }} </h3>
    </div>

    <!--Section: Content-->
    <section class="text-center">

        <div class="row">

            @if ($product->picture)
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ asset('storage/pictures/'.$product->picture) }}">
                </div>
            @else
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ asset('images/emptypicture.jpg') }}">
                </div>
            @endif

            <div class="col-lg-6 text-center text-md-left">

                <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                    <strong> {{ $product->name }} </strong>
                </h2>
                <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
                    <span class="red-text font-weight-bold">
                        <strong>${{ number_format($product->price) }}</strong>
                    </span>
                </h3>

                <!--Accordion wrapper-->
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header black" role="tab" id="headingOne1">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                <h5 class="mb-0 white-text">
                                    {{ trans('site.product.description') }}
                                    <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                    <!-- Card body -->
                    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                        <div class="card-body">
                            {{ $product->description ?? NULL}}
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="my-5">

        <div class="text-center mb-3">
            <h3 class="h3"> {{ trans('site.review.reviews') }} </h3>
            <span class="grey-text">
                <i class="far fa-comments pr-1"></i> {{ $product->reviews->count() }}
            </span>
        </div>

        @include ('site/review/form')

        @include ('site/review/list', ['reviews' => $product->reviews])

    </section>

@endsection
