@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Reviews] </h1>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.review.store') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01"> User </label>
                </div>
                <select class="custom-select" name="users_id_foreign" id="inputGroupSelect01">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}"> {{ $user->name }} </option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01"> Product </label>
                </div>
                <select class="custom-select" name="products_id_foreign" id="inputGroupSelect01">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}"> {{ $product->name }} </option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01"> Statuse </label>
                </div>
                <select class="custom-select" name="statuses_id_foreign" id="inputGroupSelect01">
                    @foreach ($statuses as $status)
                        <option value="{{ $status->id }}"> {{ $status->name }} </option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Name </span>
                </div>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Score </span>
                </div>
                <input type="number" min="1" max="10" name="score" class="form-control">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Positive </span>
                </div>
                <textarea class="form-control" name="positive" cols="30" rows="3"></textarea>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Negative </span>
                </div>
                <textarea class="form-control" name="negative" cols="30" rows="3"></textarea>
            </div>

            <div class="btn-group mt-1" role="group" aria-label="Basic example">
                <a class="btn btn-primary" href="{{ route('admin.review.index') }}"> Back </a>
                <button class="btn btn-success" type="submit"> Store </button>
            </div>

        </form>

    </div>

@endsection
