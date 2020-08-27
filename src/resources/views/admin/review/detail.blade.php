@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h1> ПА - [Products] {{ $review->name }} </h1>
                    </div>

                    <div class="card-body">

                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $review->id ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> id </span>
                            </li>
                            <a href="{{ route('admin.products.detail', $review->products_id_foreign) }}">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $review->products_id_foreign ?: 'Null' }}
                                    <span class="badge badge-primary badge-pill"> products_id_foreign </span>
                                </li>
                            </a>
                            @if ($review->users_id_foreign)
                                <a href="{{ route('admin.users.detail', $review->users_id_foreign) }}">
                            @endif
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $review->users_id_foreign ?: 'Anonim' }}
                                    <span class="badge badge-primary badge-pill"> users_id_foreign </span>
                                </li>
                            </a>
                            <a href="{{ route('admin.statuses.detail', $review->statuses_id_foreign) }}">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $review->statuses_id_foreign ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> statuses_id_foreign </span>
                            </li>
                            </a>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $review->name ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> name </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $review->score ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> score </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $review->positive ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> positive </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $review->negative ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> negative </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $review->posted_at ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> posted_at </span>
                            </li>
                        </ul>

                        <div class="btn-group mt-1" role="group" aria-label="Basic example">
                            <a class="btn btn-primary" href="{{ route('admin.reviews.index') }}"> Вернуться </a>
                            <a class="btn btn-success" href="{{ route('admin.reviews.update', $review->id) }}"> Обновить </a>
                            <a class="btn btn-danger" href="{{ route('admin.reviews.delete', $review->id) }}"> Удалить </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
