@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Roles] </h1>
    </div>

    <div class="card-body">

        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col"> ID </th>
                    <th scope="col"> Name </th>
                    <th scope="col"> slug </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <th scope="row"> {{ $role->id }} </th>
                        <td> {{ $role->name }} </td>
                        <td> {{ $role->slug }} </td>
                        <td> <a href="{{ route('admin.role.show', $role->id) }}"> Detail </a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="btn-group mt-1" role="group" aria-label="Basic example">
            <a class="btn btn-primary" href="{{ route('admin.index') }}"> Back </a>
            <a class="btn btn-success" href="{{ route('admin.role.create') }}"> Store </a>
        </div>

    </div>

@endsection
