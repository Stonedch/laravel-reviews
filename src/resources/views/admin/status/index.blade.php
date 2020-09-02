@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> ПА - [Statuses] </h1>
    </div>

    <div class="card-body">

        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col"> ID </th>
                    <th scope="col"> Slug </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($statuses as $status)
                    <tr>
                        <th scope="row"> {{ $status->id }} </th>
                        <td> {{ $status->slug }} </td>
                        <td> <a href="{{ route('admin.status.show', $status->id) }}"> Detail </a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="btn-group mt-1" role="group" aria-label="Basic example">
            <a class="btn btn-primary" href="{{ route('admin.index') }}"> Back </a>
            <a class="btn btn-success" href="{{ route('admin.status.create') }}"> Store </a>
        </div>

    </div>

@endsection
