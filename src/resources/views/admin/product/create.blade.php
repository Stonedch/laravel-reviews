@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Products] </h1>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Name </span>
                </div>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Slug </span>
                </div>
                <input type="text" name="slug" class="form-control">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Picture </span>
                </div>
                <input type="file" name="picture" class="form-control">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Description </span>
                </div>
                <textarea class="form-control" name="description" cols="30" rows="10"></textarea>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Price </span>
                </div>
                <input type="number" step="any" name="price" class="form-control">
            </div>

            <div class="btn-group mt-1" role="group" aria-label="Basic example">
                <a class="btn btn-primary" href="{{ route('admin.product.index') }}"> Back </a>
                <button class="btn btn-success" type="submit"> Store </button>
            </div>

        </form>

    </div>

@endsection
