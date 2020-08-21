@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h1> Панель администратора </h1>
                    </div>

                    <div class="card-body">

                        <div class="list-group">
                            <a href="{{ route('admin-user-all') }}" class="list-group-item list-group-item-action"> Users</a>
                            <a href="#" class="list-group-item list-group-item-action"> Products </a>
                            <a href="#" class="list-group-item list-group-item-action"> Statuses </a>
                            <a href="#" class="list-group-item list-group-item-action"> Reviews </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection