@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h1> ПА - [Products] </h1>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('admin-product-update-submit', $product->id) }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> Name </span>
                                </div>
                                <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> Slug </span>
                                </div>
                                <input type="text" name="slug" class="form-control" value="{{ $product->slug }}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> Picture </span>
                                </div>
                                <input type="text" name="picture" class="form-control" value="{{ $product->picture }}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> Description </span>
                                </div>
                                <textarea class="form-control" name="description" cols="30" rows="10"> {{ $product->description }} </textarea>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> Price </span>
                                </div>
                                <input type="number" step="any" name="price" class="form-control" value="{{ $product->price }}">
                            </div>
                            <div class="btn-group mt-1" role="group" aria-label="Basic example">
                                <a class="btn btn-primary" href="{{ route('admin-product-detail', $product->id) }}"> Вернуться </a>
                                <button class="btn btn-success" type="submit"> Обновить </button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
