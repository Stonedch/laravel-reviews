@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Products: </h1>
    </div>

    <div class="card-body">

        @include('site/product/includes/list')

        {{ $products->links() }}

    </div>

@endsection
