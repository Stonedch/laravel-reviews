@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Reviews] </h1>
    </div>

    <div class="card-body">

        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col"> ID </th>
                    <th scope="col"> Score </th>
                    <th scope="col"> Product </th>
                    <th scope="col"> Status </th>
                    <th scope="col"> User </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $review)
                    <tr>
                        <th scope="row"> {{ $review->id }} </th>
                        <td> {{ $review->score }} </td>
                        <td> {{ $review->product->name }} </td>
                        <td> {{ $review->status->slug }} </td>
                        <td> {{ $review->user->name ?? NULL }} </td>
                        <td> <a href="{{ route('admin.review.show', $review->id) }}"> Detail </a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="btn-group mt-1" role="group" aria-label="Basic example">
            <a class="btn btn-primary" href="{{ route('admin.index') }}"> Back </a>
            <a class="btn btn-success" href="{{ route('admin.review.create') }}"> Store </a>
        </div>

    </div>

@endsection
