@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Users] {{$user->name}} </h1>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.user.update.password', $user->id) }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Password </span>
                </div>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="btn-toolbar mt-1 justify-content-center" role="toolbar" aria-label="Basic example">
                <a class="btn btn-dark" href="{{ route('admin.user.show', $user->id) }}"> Back </a>
                <button class="btn btn-dark" type="submit"> Update </button>
            </div>
        </form>

    </div>

@endsection
