@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Users] {{ $user->name }} </h1>
    </div>

    <div class="card-body">

        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $user->id ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> id </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $user->name ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> name </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $user->email ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> email </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $user->email_verifiead_at ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> email_verifiead_at </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $user->password ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> password </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $user->remember_token ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> remember_token </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $user->role->name ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> role </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $user->created_at ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> created_at </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $user->updated_at ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> updated_at </span>
            </li>
        </ul>

        <div class="btn-group mt-1" role="group" aria-label="Basic example">
            <a class="btn btn-primary" href="{{ route('admin.user.index') }}"> Back </a>
            <a class="btn btn-success" href="{{ route('admin.user.edit', $user->id) }}"> Edit </a>
            <a class="btn btn-success" href="{{ route('admin.user.edit.password', $user->id) }}"> Change password </a>
            <a class="btn btn-danger" href="{{ route('admin.user.destroy', $user->id) }}"> Destroy </a>
        </div>

    </div>

@endsection
