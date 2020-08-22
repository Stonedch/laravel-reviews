@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h1> ПА - [Products] </h1>
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
                                        <td> <a href="{{ route('admin-product-detail', $product->id) }}"> Подробнее </a> </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="btn-group mt-1" role="group" aria-label="Basic example">
                            <a class="btn btn-primary" href="{{ route('admin-panel') }}"> Вернуться </a>
                            <a class="btn btn-success" href="{{ route('admin-product-create') }}"> Создать </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
