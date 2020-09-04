@extends('layouts.app')

@section('content')

    <div class="text-center mb-5">
        <h1 class="h1 text-uppercase"> home </h3>
        <h3 class="h3"> our new products </h3>
    </div>

    @include('site/product/includes/list')

    <div class="text-center mb-5">
        <a type="button" class="btn black white-text waves-effect waves-light" href="{{ route('site.product.index') }}">
            <i class="fas fa-angle-double-right"></i>
            <span class="text-upercase"> more products </span>
        </a>
    </div>

@endsection
