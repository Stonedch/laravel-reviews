@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> ПА - [Statuses] </h1>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.status.store') }}" method="post">

            @csrf

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Name <span class="text-danger">*</span> </span>
                </div>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Slug <span class="text-danger">*</span> </span>
                </div>
                <input type="text" name="slug" class="form-control">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Color_BG </span>
                </div>
                <input type="text" name="color_bg" class="form-control">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Color_FG </span>
                </div>
                <input type="text" name="color_fg" class="form-control">
            </div>

            <div class="btn-group mt-1" role="group" aria-label="Basic example">
                <a class="btn btn-primary" href="{{ route('admin.status.index') }}"> Back </a>
                <button class="btn btn-success" type="submit"> Store </button>
            </div>

        </form>

    </div>

@endsection
