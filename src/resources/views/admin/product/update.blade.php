@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Products] {{ $product->name }} </h1>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">

            @csrf

            @if ($product->picture)
                <div class="text-center mb-3">
                    <img width="128"class="img-fluid" src="{{ asset('storage/pictures/'.$product->picture) }}">
                </div>
            @endif

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
                    <span class="input-group-text" id="inputGroupFileAddon01"> Picture </span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="picture" value="{{ $product->picture }}">
                    <label class="custom-file-label"> {{ $request->file ?? $product->picture ?? 'Choose file' }} </label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Description </span>
                </div>
                <textarea class="form-control" name="description" cols="30" rows="5"> {{ $product->description }} </textarea>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Price </span>
                </div>
                <input type="number" step="any" name="price" class="form-control" value="{{ $product->price }}">
            </div>

            <div class="btn-group mt-1" role="group" aria-label="Basic example">
                <a class="btn btn-primary" href="{{ route('admin.product.show', $product->id) }}"> Back </a>
                <button class="btn btn-success" type="submit"> Update </button>
            </div>

        </form>

    </div>

@endsection
