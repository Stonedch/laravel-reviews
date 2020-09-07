@extends('layouts.app')

@section('content')

    <div class="text-center mb-5">
        <h1 class="h1 text-uppercase"> {{ trans('site.page.products.title') }} </h3>
        <h3 class="h3 text-lowercase"> {{ trans('site.page.products.title') }} </h3>
    </div>

    @include('site/product/includes/list')

    @include('site/product/includes/links')

@endsection
