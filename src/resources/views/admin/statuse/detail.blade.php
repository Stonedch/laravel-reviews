@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h1> ПА - [Statuses] {{ $statuse->name }} </h1>
                    </div>

                    <div class="card-body">

                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $statuse->id ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> id </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $statuse->name ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> name </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $statuse->slug ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> slug </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $statuse->color_bg ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> color_bg </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $statuse->color_fg ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> color_fg </span>
                            </li>
                        </ul>

                        <div class="btn-group mt-1" role="group" aria-label="Basic example">
                            <a class="btn btn-primary" href="{{ route('admin-statuse-all') }}"> Вернуться </a>
                            <a class="btn btn-success" href="{{ route('admin-statuse-update', $statuse->id) }}"> Обновить </a>
                            <a class="btn btn-danger" href="{{ route('admin-statuse-delete', $statuse->id) }}"> Удалить </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
