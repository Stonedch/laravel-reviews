@extends('layouts.app')

@section('content')

    @include('admin.includes.links')

    <div class="card black">

        <div class="card-header black">
            <h1 class="h1 white-text text-uppercase text-center"> Reviews table </h1>
        </div>

        <div class="card-body">
        <table class="table table-hover table-dark">
            <thead>
            <tr>
                <th scope="col"> ID </th>
                <th scope="col"> Product </th>
                <th scope="col"> User </th>
                <th scope="col"> Status </th>
                <th scope="col"> Score </th>
                <th scope="col"> Tools </th>
            </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $review)
                <tr>
                    <th scope="row"> {{ $review->id }} </th>
                    <td> @if ($review->product) {{ $review->product->name }} @endif </td>
                    <td> @if ($review->user) {{ $review->user->name }} @endif </td>
                    <td> @if ($review->status) {{ $review->status->name }} @endif </td>
                    <td> {{ $review->score }} </td>
                    <td>
                        <div class="btn-toolbar justify-content-between w-50">
                            <a type="button" href="{{ route('admin.review.show', $review->id) }}"> <i
                                    class="fas fa-info"></i> </a>
                            <a type="button" href="{{ route('admin.review.edit', $review->id) }}"> <i
                                    class="fas fa-edit"></i> </a>
                            <a type="button" href="{{ route('admin.review.destroy', $review->id) }}"> <i
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
                <a class="btn btn-white black-text" href="{{ route('admin.review.create') }}"> Store <i
                        class="fas fa-plus"></i> </a>
            </div>

        </div>

    </div>

    @include('admin.includes.tables')

@endsection
