@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Roles] </h1>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.role.store') }}" method="post">

            @csrf

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Name <span class="text-danger">*</span> </span>
                </div>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Slug </span>
                </div>
                <input type="text" name="slug" class="form-control">
            </div>

            <div class="btn-toolbar mt-1 justify-content-center" role="toolbar" aria-label="Basic example">
                <a class="btn btn-dark" href="{{ route('admin.role.index') }}"> Back </a>
                <button class="btn btn-dark" type="submit"> Store </button>
            </div>

        </form>

    </div>

@endsection
