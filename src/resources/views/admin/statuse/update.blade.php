@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h1> ПА - [Statuses] </h1>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('admin.statuses.update', $statuse->id) }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> Name </span>
                                </div>
                                <input type="text" name="name" class="form-control" value="{{ $statuse->name }}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> Slug </span>
                                </div>
                                <input type="text" name="slug" class="form-control" value="{{ $statuse->slug }}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> Color_BG </span>
                                </div>
                                <input type="text" name="color_bg" class="form-control" value="{{ $statuse->color_bg }}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> Color_FG </span>
                                </div>
                                <input type="text" name="color_fg" class="form-control" value="{{ $statuse->color_fg }}">
                            </div>
                            <div class="btn-group mt-1" role="group" aria-label="Basic example">
                                <a class="btn btn-primary" href="{{ route('admin.statuses.detail', $statuse->id) }}"> Вернуться </a>
                                <button class="btn btn-success" type="submit"> Обновить </button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
