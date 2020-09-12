@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Users] {{ $user->name }} </h1>
    </div>

    <div class="card-body">

        <ul class="list-group">
            <li class="list-group-item">
                {{ $user->id ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> id </span>
            </li>
            <li class="list-group-item">
                {{ $user->name ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> name </span>
            </li>
            <li class="list-group-item">
                {{ $user->email ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> email </span>
            </li>
            <li class="list-group-item">
                {{ $user->email_verifiead_at ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> email_verifiead_at </span>
            </li>
            <li class="list-group-item">
                {{ $user->password ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> password </span>
            </li>
            <li class="list-group-item">
                {{ $user->remember_token ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> remember_token </span>
            </li>
            <li class="list-group-item">
                {{ $user->role->name ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> role </span>
            </li>
            <li class="list-group-item">
                {{ $user->created_at ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> created_at </span>
            </li>
            <li class="list-group-item">
                {{ $user->updated_at ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> updated_at </span>
            </li>
        </ul>

        <div class="btn-toolbar justify-content-center mt-1" role="toolbar" aria-label="Basic example">
            <a class="btn btn-dark" href="{{ route('admin.user.index') }}"> Back </a>
            <a class="btn btn-dark" href="{{ route('admin.user.edit', $user->id) }}"> Edit </a>
            <a class="btn btn-dark" href="{{ route('admin.user.edit.password', $user->id) }}"> Change password </a>
            <a class="btn btn-dark" href="{{ route('admin.user.destroy', $user->id) }}"> Destroy </a>
        </div>

    </div>

@endsection
