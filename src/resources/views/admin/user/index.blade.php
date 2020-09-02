@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Users] </h1>
    </div>

    <div class="card-body">

        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col"> ID </th>
                    <th scope="col"> E-mail </th>
                    <th scope="col"> Name </th>
                    <th scope="col"> Role </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row"> {{ $user->id }} </th>
                        <td> {{ $user->email }} </td>
                        <td> {{ $user->name }} </td>
                        <td> {{ $user->role->name }} </td>
                        <td> <a href="{{ route('admin.user.show', $user->id) }}"> Detail </a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="btn-group mt-1" role="group" aria-label="Basic example">
            <a class="btn btn-primary" href="{{ route('admin.index') }}"> Back </a>
            <a class="btn btn-success" href="{{ route('admin.user.create') }}"> Store </a>
        </div>

    </div>

@endsection
