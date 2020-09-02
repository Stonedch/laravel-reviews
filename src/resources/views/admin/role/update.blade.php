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

            <div class="btn-group mt-1" role="group" aria-label="Basic example">
                <a class="btn btn-primary" href="{{ route('admin.role.show', $role->id) }}"> Back </a>
                <button class="btn btn-success" type="submit"> Update </button>
            </div>

        </form>

    </div>

@endsection
