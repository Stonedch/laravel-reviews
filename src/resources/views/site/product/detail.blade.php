@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Product: {{ $product->name }} </h1>
    </div>

    <div class="card-body">

        <h1 class="my-4">
            Product name: {{ $product->name }}
            <small> - {{ number_format($product->price) }} </small>
        </h1>

        <div class="row">

            @if ($product->picture)
                <div class="col-md-8">
                    <img class="img-fluid" src="{{ asset('storage/pictures/'.$product->picture) }}">
                </div>
            @endif

            @if ($product->description)
                <div class="col-md-4">
                    <h3 class="my-3"> Description: </h3>
                    <p> {{ $product->description }} </p>
                </div>
            @endif

        </div>

        <div class="my-3 p-3 bg-white rounded box-shadow">
            <h6 class="border-bottom border-gray"> Reviews: </h6>

            @include ('site/review/list', ['reviews' => $product->reviewsUnRejected])

            @include ('site/review/form')


        </div>


    </div>

@endsection
