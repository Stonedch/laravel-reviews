@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h1> ПА - [Users] </h1>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('admin-user-create-submit') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> Name </span>
                                </div>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> E-mail </span>
                                </div>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> Password </span>
                                </div>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="btn-group mt-1" role="group" aria-label="Basic example">
                                <a class="btn btn-primary" href="{{ route('admin-user-all') }}"> Вернуться </a>
                                <button class="btn btn-success" type="submit"> Создать </button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
