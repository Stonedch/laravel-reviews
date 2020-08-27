@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h1> ПА - [Products] {{ $product->name }} </h1>
                    </div>

                    <div class="card-body">

                        <ul class="list-group">
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

                        <div class="btn-group mt-1" role="group" aria-label="Basic example">
                            <a class="btn btn-primary" href="{{ route('admin.products.index') }}"> Вернуться </a>
                            <a class="btn btn-success" href="{{ route('admin.products.update', $product->id) }}"> Обновить </a>
                            <a class="btn btn-danger" href="{{ route('admin.products.delete', $product->id) }}"> Удалить </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
