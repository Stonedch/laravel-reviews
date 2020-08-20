@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h1> Товары </h1>
                    </div>

                    <div class="card-body">

                        @include('includes/products-list')

                        {{ $products->links() }}

                    </div>


                </div>
            </div>
        </div>
    </div>


@endsection
