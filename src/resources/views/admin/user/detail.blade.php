@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h1> ПА - [Users] {{ $user->name }} </h1>
                    </div>

                    <div class="card-body">

                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $user->id ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> id </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $user->name ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> name </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $user->email ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> email </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $user->email_verifiead_at ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> email_verifiead_at </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $user->password ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> password </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $user->remember_token ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> remember_token </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $user->created_at ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> created_at </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $user->updated_at ?: 'Null' }}
                                <span class="badge badge-primary badge-pill"> updated_at </span>
                            </li>
                        </ul>

                        <div class="btn-group mt-1" role="group" aria-label="Basic example">
                            <a class="btn btn-primary" href="{{ route('admin.users.index') }}"> Вернуться </a>
                            <a class="btn btn-success" href="{{ route('admin.users.update', $user->id) }}"> Обновить </a>
                            <a class="btn btn-success" href="{{ route('admin.users.update.password', $user->id) }}"> Обновить пароль </a>
                            <a class="btn btn-danger" href="{{ route('admin.users.delete', $user->id) }}"> Удалить </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
