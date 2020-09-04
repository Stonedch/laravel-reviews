@extends('layouts.app')

@section('content')

    @include('admin.includes.links')

    <div class="card">

        <div class="card-header black">
            <h1 class="h1 white-text text-uppercase"> Reviews table </h1>
        </div>

        <div class="card-body">
            <table class="table table-striped table-bordered table-hover table-sm table-responsive text-nowrap text-center">
                <thead>
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> product </th>
                        <th scope="col"> user </th>
                        <th scope="col"> status </th>
                        <th scope="col"> score </th>
                        <th scope="col"> name </th>
                        <th scope="col"> positive </th>
                        <th scope="col"> negative </th>
                        <th scope="col"> created at </th>
                        <th scope="col"> updated at </th>
                        <th scope="col"> tools </th>
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
                            <td> {{ $review->name }} </td>
                            <td> {{ $review->positive }} </td>
                            <td> {{ $review->negative }} </td>
                            <td> {{ $review->created_at }} </td>
                            <td> {{ $review->updated_at }} </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a type="button" class="btn btn-dark" href="{{ route('admin.review.show', $review->id) }}"> <i class="fas fa-info"></i> </a>
                                    <a type="button" class="btn btn-dark" href="{{ route('admin.review.edit', $review->id) }}"> <i class="fas fa-edit"></i> </a>
                                    <a type="button" class="btn btn-danger" href="{{ route('admin.review.destroy', $review->id) }}"> <i class="fas fa-trash"></i> </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> product </th>
                        <th scope="col"> user </th>
                        <th scope="col"> status </th>
                        <th scope="col"> score </th>
                        <th scope="col"> name </th>
                        <th scope="col"> positive </th>
                        <th scope="col"> negative </th>
                        <th scope="col"> created at </th>
                        <th scope="col"> updated at </th>
                        <th scope="col"> tools </th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="card-footer black">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-white black-text" href="{{ route('admin.review.create') }}"> Store <i class="fas fa-plus"></i> </a>
            </div>

        </div>

    </div>

    @include('admin.includes.tables')

@endsection
