@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h1> ПА - [Review] </h1>
                    </div>

                    <div class="card-body">

                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col"> ID </th>
                                    <th scope="col"> Name </th>
                                    <th scope="col"> Score </th>
                                    <th scope="col"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $review)
                                    <tr>
                                        <th scope="row"> {{ $review->id }} </th>
                                        <td> {{ $review->name }} </td>
                                        <td> {{ $review->score }} </td>
                                        <td> <a href="{{ route('admin-review-detail', $review->id) }}"> Подробнее </a> </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="btn-group mt-1" role="group" aria-label="Basic example">
                            <a class="btn btn-primary" href="{{ route('admin-panel') }}"> Вернуться </a>
                            <a class="btn btn-success" href="{{ route('admin-review-create') }}"> Создать </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
