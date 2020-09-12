@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Roles] {{ $role->name }} </h1>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.role.update', $role->id) }}" method="post">

            @csrf

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Name </span>
                </div>
                <input type="text" name="name" class="form-control" value="{{ $role->name }}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Slug </span>
                </div>
                <input type="text" name="slug" class="form-control" value="{{ $role->slug }}">
            </div>

            <div class="btn-toolbar mt-1 justify-content-center" role="toolbar" aria-label="Basic example">
                <a class="btn btn-dark" href="{{ route('admin.role.show', $role->id) }}"> Back </a>
                <button class="btn btn-dark" type="submit"> Update </button>
            </div>

        </form>

    </div>

@endsection
