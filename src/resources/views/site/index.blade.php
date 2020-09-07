@extends('layouts.app')

@section('content')

    <div class="text-center mb-5">
        <h1 class="h1 text-uppercase"> {{ trans('site.page.home.title') }} </h3>
        <h3 class="h3 text-lowercase"> {{ trans('site.page.home.description') }} </h3>
    </div>

    @include('site/product/includes/list')

    <div class="text-center mb-5">
        <a type="button" class="btn black white-text waves-effect waves-light" href="{{ route('site.product.index') }}">
            <i class="fas fa-angle-double-right"></i>
            <span class="text-upercase"> {{ trans('site.page.home.products') }} </span>
        </a>
    </div>

@endsection
