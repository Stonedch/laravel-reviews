@extends('layouts.app')

@section('content')

    @include('admin.includes.links')

    <div class="card black">

        <div class="card-header black">
            <h1 class="h1 white-text text-uppercase text-center"> Products table </h1>
        </div>

        <div class="card-body">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> Name </th>
                        <th scope="col"> Slug </th>
                        <th scope="col"> Price </th>
                        <th scope="col"> Tools </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <th scope="row"> {{ $product->id }} </th>
                    <td> {{ $product->name }} </td>
                    <td> {{ $product->slug }} </td>
                    <td> {{ $product->price }} </td>
                    <td>
                        <div class="btn-toolbar justify-content-between w-50">
                            <a type="button" href="{{ route('admin.product.show', $product->id) }}"> <i
                                    class="fas fa-info"></i> </a>
                            <a type="button" href="{{ route('admin.product.edit', $product->id) }}"> <i
                                    class="fas fa-edit"></i> </a>
                            <a type="button" href="{{ route('admin.product.destroy', $product->id) }}"> <i
                                    class="fas fa-trash"></i> </a>
                        </div>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        </div>

        <div class=" btn-toolbar justify-content-center">
            <div class="btn-group mb-3" role="group" aria-label="Basic example">
                <a class="btn btn-white black-text" href="{{ route('admin.product.create') }}"> Store <i
                        class="fas fa-plus"></i> </a>
            </div>

        </div>

    </div>

    @include('admin.includes.tables')

@endsection
