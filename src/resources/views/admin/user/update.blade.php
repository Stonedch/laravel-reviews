@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Users] {{ $user->name }} </h1>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.user.update', $user->id) }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Name </span>
                </div>
                <input type="text" name="name" class="form-control shadow-none" value="{{ $user->name }}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> E-mail </span>
                </div>
                <input type="email" name="email" class="form-control shadow-none" value="{{ $user->email }}">
            </div>
            <div class="btn-toolbar mt-1 justify-content-center" role="toolbar" aria-label="Basic example">
                <a class="btn btn-dark" href="{{ route('admin.user.show', $user->id) }}"> Back </a>
                <button class="btn btn-dark" type="submit"> Update </button>
            </div>
        </form>
    </div>

@endsection
