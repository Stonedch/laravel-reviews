@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Reviews] {{ $review->name }} </h1>
    </div>

    <div class="card-body">

        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $review->id ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> id </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $review->product->name ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> product </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $review->user->name ?: 'Anonim' }}
                <span class="badge badge-primary badge-pill"> user </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $review->status->name ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> status </span>
            </li>
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
            <a class="btn btn-primary" href="{{ route('admin.review.index') }}"> Back </a>
            <a class="btn btn-success" href="{{ route('admin.review.edit', $review->id) }}"> Edit </a>
            <a class="btn btn-danger" href="{{ route('admin.review.destroy', $review->id) }}"> Destroy </a>
        </div>

    </div>

@endsection
