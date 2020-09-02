@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> New products: </h1>
    </div>

    <div class="card-body">
        @include('site/product/includes/list')
    </div>

@endsection
