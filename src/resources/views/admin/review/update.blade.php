@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Reviews] {{ $review->name }} </h1>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.review.update', $review->id) }}" method="post">

            @csrf

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01"> User </label>
                </div>
                <select class="custom-select" name="users_id_foreign" id="inputGroupSelect01">
                    <option selected value="{{ $review->users_id_foreign }}"> {{ $users->find($review->users_id_foreign)->name }} </option>
                    @foreach ($users as $user)
                        @if ($user->id != $review->users_id_foreign)
                            <option value="{{ $user->id }}"> {{ $user->name }} </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01"> Product </label>
                </div>
                <select class="custom-select" name="products_id_foreign" id="inputGroupSelect01">
                    <option selected value="{{ $review->products_id_foreign }}"> {{ $products->find($review->products_id_foreign)->name }} </option>
                    @foreach ($products as $product)
                        @if ($product->id != $review->products_id_foreign)
                            <option value="{{ $product->id }}"> {{ $product->name }} </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01"> Statuse </label>
                </div>
                <select class="custom-select" name="statuses_id_foreign" id="inputGroupSelect01">
                    <option selected value="{{ $review->statuses_id_foreign }}"> {{ $statuses->find($review->statuses_id_foreign)->name }} </option>
                    @foreach ($statuses as $status)
                        @if ($status->id != $review->statuses_id_foreign)
                            <option value="{{ $status->id }}"> {{ $status->name }} </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Name </span>
                </div>
                <input type="text" name="name" class="form-control" value="{{ $review->name}}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Score </span>
                </div>
                <input type="number" min="1" max="10" name="score" class="form-control" value="{{ $review->score }}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Positive </span>
                </div>
                <textarea class="form-control" name="positive" cols="30" rows="3"> {{ $review->positive }} </textarea>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Negative </span>
                </div>
                <textarea class="form-control" name="negative" cols="30" rows="3"> {{ $review->negative }} </textarea>
            </div>

            <div class="btn-group mt-1" role="group" aria-label="Basic example">
                <a class="btn btn-primary" href="{{ route('admin.review.show', $review->id) }}"> Back </a>
                <button class="btn btn-success" type="submit"> Update </button>
            </div>

        </form>

    </div>

@endsection
