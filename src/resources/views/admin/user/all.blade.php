@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h1> ПА - [Users] </h1>
                    </div>

                    <div class="card-body">

                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col"> ID </th>
                                    <th scope="col"> Name </th>
                                    <th scope="col"> E-mail </th>
                                    <th scope="col"> Created at </th>
                                    <th scope="col"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row"> {{ $user->id }} </th>
                                        <td> {{ $user->name }} </td>
                                        <td> {{ $user->email }} </td>
                                        <td> {{ $user->created_at }} </td>
                                        <td> <a href="{{ route('admin-user-detail', $user->id) }}"> Подробнее </a> </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="btn-group mt-1" role="group" aria-label="Basic example">
                            <a class="btn btn-primary" href="{{ route('admin-panel') }}"> Вернуться </a>
                            <a class="btn btn-success" href="{{ route('admin-user-create') }}"> Создать </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
