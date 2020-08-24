@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h1> {{ $product->name }} </h1>
                    </div>

                    <div class="card-body">

                        <h1 class="my-4">
                            {{ $product->name }}
                            <small> {{ number_format($product->price) }}р. </small>
                        </h1>

                        <div class="row">

                            <div class="col-md-8">
                                <img class="img-fluid" src="{{ $product->picture ?: 'http://placehold.it/750x500' }}">
                            </div>

                            @if ($product->description)
                                <div class="col-md-4">
                                    <h3 class="my-3"> Описание: </h3>
                                    <p> {{ $product->description }} </p>
                                </div>
                            @endif

                        </div>

                        <div class="my-3 p-3 bg-white rounded box-shadow">
                            <h6 class="border-bottom border-gray pb-2 mb-0"> Отзывы </h6>

                            @foreach ($reviews as $review)
                                <div class="media text-muted pt-3">
                                    <p class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                                        @if ($review->users_id_foreign)
                                            <strong class="d-block text-gray-dark"> {{ App\Models\Users::find($review->users_id_foreign)->name }} </strong>
                                        @else
                                            <strong class="d-block text-gray-dark"> Anonim </strong>
                                        @endif
                                        <span class="d-block"> Оценка: {{ $review->score }} </span>
                                        <span class="d-block"> Отзыв: {{ $review->name }} </span>
                                        <span class="d-block"> Положительные стороны: {{ $review->positive }} </span>
                                        <span class="d-block"> Негативные стороны: {{ $review->negative }} </span>
                                    </p>
                                </div>
                            @endforeach

                            <form id="review-form" action="{{ route('review-create') }}" method="post">
                                @csrf
                                <input type="hidden" name="products_id_foreign" value="{{ $product->id }}">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> Загаловок </span>
                                    </div>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> Оценка </span>
                                    </div>
                                    <input type="number" min="1" max="10" name="score" class="form-control">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> Положительные стороны </span>
                                    </div>
                                    <textarea class="form-control" name="positive" cols="30" rows="3"></textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> Негативные стороны </span>
                                    </div>
                                    <textarea class="form-control" name="negative" cols="30" rows="3"></textarea>
                                </div>
                                <div class="btn-group mt-1" role="group" aria-label="Basic example">
                                    <button class="btn btn-success" type="submit"> Создать </button>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
