@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> ПА - [Users] </h1>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.user.store') }}" method="post">

            @csrf

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Name <span class="text-danger">*</span> </span>
                </div>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> E-mail <span class="text-danger">*</span> </span>
                </div>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Password <span class="text-danger">*</span> </span>
                </div>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="btn-group mt-1" role="group" aria-label="Basic example">
                <a class="btn btn-primary" href="{{ route('admin.user.index') }}"> Back </a>
                <button class="btn btn-success" type="submit"> Store </button>
            </div>

        </form>

    </div>

@endsection
