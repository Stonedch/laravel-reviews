@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Role] {{ $role->name }} </h1>
    </div>

    <div class="card-body">

        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $role->id ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> id </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $role->name ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> name </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $role->slug ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> slug </span>
            </li>
        </ul>

        <div class="btn-toolbar mt-1 justify-content-center" role="toolbar" aria-label="Basic example">
            <a class="btn btn-dark" href="{{ route('admin.role.index') }}"> Back </a>
            <a class="btn btn-dark" href="{{ route('admin.role.edit', $role->id) }}"> Edit </a>
            <a class="btn btn-dark" href="{{ route('admin.role.destroy', $role->id) }}"> Destroy </a>
        </div>

    </div>

@endsection
