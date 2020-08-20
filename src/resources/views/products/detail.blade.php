@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h1> {{ $product->name }} </h1>
                    </div>

                    <div class="card-body">

                        <h1 class="my-4">
                            {{ $product->name }}
                            <small> {{ number_format($product->price) }}р. </small>
                        </h1>

                        <div class="row">

                            <div class="col-md-8">
                                <img class="img-fluid" src="http://placehold.it/750x500">
                            </div>

                            @if ($product->description)
                                <div class="col-md-4">
                                    <h3 class="my-3"> Описание: </h3>
                                    <p> {{ $product->description }} </p>
                                </div>
                            @endif

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
