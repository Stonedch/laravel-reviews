@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h1> ПА - [Statuses] </h1>
                    </div>

                    <div class="card-body">

                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col"> ID </th>
                                    <th scope="col"> Name </th>
                                    <th scope="col"> Slug </th>
                                    <th scope="col"> Color_BG </th>
                                    <th scope="col"> Color_FG </th>
                                    <th scope="col"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($statuses as $statuse)
                                    <tr>
                                        <th scope="row"> {{ $statuse->id }} </th>
                                        <td> {{ $statuse->name }} </td>
                                        <td> {{ $statuse->slug }} </td>
                                        <td> {{ $statuse->color_bg }} </td>
                                        <td> {{ $statuse->color_fg }} </td>
                                        <td> <a href="{{ route('admin.statuses.detail', $statuse->id) }}"> Подробнее </a> </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="btn-group mt-1" role="group" aria-label="Basic example">
                            <a class="btn btn-primary" href="{{ route('admin.index') }}"> Вернуться </a>
                            <a class="btn btn-success" href="{{ route('admin.statuses.create') }}"> Создать </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
