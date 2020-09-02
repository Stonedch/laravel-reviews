@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Statuses] {{ $status->name }} </h1>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.status.update', $status->id) }}" method="post">

            @csrf

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Name </span>
                </div>
                <input type="text" name="name" class="form-control" value="{{ $status->name }}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Slug </span>
                </div>
                <input type="text" name="slug" class="form-control" value="{{ $status->slug }}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Color_BG </span>
                </div>
                <input type="text" name="color_bg" class="form-control" value="{{ $status->color_bg }}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Color_FG </span>
                </div>
                <input type="text" name="color_fg" class="form-control" value="{{ $status->color_fg }}">
            </div>

            <div class="btn-group mt-1" role="group" aria-label="Basic example">
                <a class="btn btn-primary" href="{{ route('admin.status.show', $status->id) }}"> Back </a>
                <button class="btn btn-success" type="submit"> Update </button>
            </div>

        </form>

    </div>

@endsection
