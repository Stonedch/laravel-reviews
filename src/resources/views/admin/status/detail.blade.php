@extends('layouts.app')

@section('content')
    <div class="card-header">
        <h1> Dashboard - [Statuses] {{ $status->name }} </h1>
    </div>

    <div class="card-body">

        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $status->id ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> id </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $status->name ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> name </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $status->slug ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> slug </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $status->color_bg ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> color_bg </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $status->color_fg ?: 'Null' }}
                <span class="badge badge-primary badge-pill"> color_fg </span>
            </li>
        </ul>

        <div class="btn-toolbar mt-1 justify-content-center" role="toolbar" aria-label="Basic example">
            <a class="btn btn-dark" href="{{ route('admin.status.index') }}"> Back </a>
            <a class="btn btn-dark" href="{{ route('admin.status.edit', $status->id) }}"> Edit </a>
            <a class="btn btn-dark" href="{{ route('admin.status.destroy', $status->id) }}"> Destroy </a>
        </div>

    </div>

@endsection
