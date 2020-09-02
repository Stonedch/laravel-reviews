@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard: </h1>
    </div>

    <div class="card-body">

        <div class="list-group">
            <a href="{{ route('admin.user.index') }}" class="list-group-item list-group-item-action"> Users </a>
            <a href="{{ route('admin.product.index') }}" class="list-group-item list-group-item-action"> Products </a>
            <a href="{{ route('admin.status.index') }}" class="list-group-item list-group-item-action"> Statuses </a>
            <a href="{{ route('admin.review.index') }}" class="list-group-item list-group-item-action"> Reviews </a>
        </div>

    </div>

@endsection