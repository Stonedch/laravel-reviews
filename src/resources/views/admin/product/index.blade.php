@extends('layouts.app')

@section('content')

    @include('admin.includes.links')

    <div class="card">

        <div class="card-header black">
            <h1 class="h1 white-text text-uppercase"> Products table </h1>
        </div>

        <div class="card-body">
            <table class="table table-striped table-bordered table-hover table-sm table-responsive text-nowrap text-center">
                <thead>
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> name </th>
                        <th scope="col"> slug </th>
                        <th scope="col"> picture </th>
                        <th scope="col"> description </th>
                        <th scope="col"> price </th>
                        <th scope="col"> created at </th>
                        <th scope="col"> updated at </th>
                        <th scope="col"> tools </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row"> {{ $product->id }} </th>
                            <td> {{ $product->name }} </td>
                            <td> {{ $product->slug }} </td>
                            <td> {{ $product->picture }} </td>
                            <td> {{ Str::words($product->description, 10) }} </td>
                            <td> {{ $product->price }} </td>
                            <td> {{ $product->created_at }} </td>
                            <td> {{ $product->updated_at }} </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a type="button" class="btn btn-dark" href="{{ route('admin.product.show', $product->id) }}"> <i class="fas fa-info"></i> </a>
                                    <a type="button" class="btn btn-dark" href="{{ route('admin.product.edit', $product->id) }}"> <i class="fas fa-edit"></i> </a>
                                    <a type="button" class="btn btn-danger" href="{{ route('admin.product.destroy', $product->id) }}"> <i class="fas fa-trash"></i> </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> name </th>
                        <th scope="col"> slug </th>
                        <th scope="col"> picture </th>
                        <th scope="col"> description </th>
                        <th scope="col"> price </th>
                        <th scope="col"> created at </th>
                        <th scope="col"> updated at </th>
                        <th scope="col"> tools </th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="card-footer black">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-white black-text" href="{{ route('admin.product.create') }}"> Store <i class="fas fa-plus"></i> </a>
            </div>

        </div>

    </div>

    @include('admin.includes.tables')

@endsection
