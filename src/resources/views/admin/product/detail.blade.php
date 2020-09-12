@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Products] {{ $product->name }} </h1>
    </div>

    <div class="card-body">

        <ul class="list-group">
            @if ($product->picture)
                <div class="text-center mb-3">
                    <img width="128"class="img-fluid" src="{{ asset('storage/pictures/'.$product->picture) }}">
                </div>
            @endif
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $product->id ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> id </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $product->name ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> name </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $product->slug ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> slug </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $product->picture ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> picture </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $product->description ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> description </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $product->price ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> price </span>
            </li>
        </ul>

        <div class="btn-toolbar mt-1 justify-content-center" role="toolbar" aria-label="Basic example">
            <a class="btn btn-dark" href="{{ route('admin.product.index') }}"> Back </a>
            <a class="btn btn-dark" href="{{ route('admin.product.edit', $product->id) }}"> Edit </a>
            <a class="btn btn-dark" href="{{ route('admin.product.destroy', $product->id) }}"> Destroy </a>
        </div>

    </div>

@endsection
