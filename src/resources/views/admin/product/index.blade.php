@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Products] </h1>
    </div>

    <div class="card-body">

        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col"> ID </th>
                    <th scope="col"> Name </th>
                    <th scope="col"> slug </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row"> {{ $product->id }} </th>
                        <td> {{ $product->name }} </td>
                        <td> {{ $product->slug }} </td>
                        <td> <a href="{{ route('admin.product.show', $product->id) }}"> Detail </a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="btn-group mt-1" role="group" aria-label="Basic example">
            <a class="btn btn-primary" href="{{ route('admin.index') }}"> Back </a>
            <a class="btn btn-success" href="{{ route('admin.product.create') }}"> Store </a>
        </div>

    </div>

@endsection
