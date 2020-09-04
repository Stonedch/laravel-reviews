@extends('layouts.app')

@section('content')

    @include('admin.includes.links')

    <div class="card">

        <div class="card-header black">
            <h1 class="h1 white-text text-uppercase"> Statuses table </h1>
        </div>

        <div class="card-body">
            <table class="table table-striped table-bordered table-hover table-sm table-responsive text-nowrap text-center">
                <thead>
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> name </th>
                        <th scope="col"> slug </th>
                        <th scope="col"> color bg </th>
                        <th scope="col"> color fg </th>
                        <th scope="col"> tools </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($statuses as $status)
                        <tr>
                            <th scope="row"> {{ $status->id }} </th>
                            <td> {{ $status->name }} </td>
                            <td> {{ $status->slug }} </td>
                            <td> {{ $status->color_bg }} </td>
                            <td> {{ $status->color_fg }} </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a type="button" class="btn btn-dark" href="{{ route('admin.status.show', $status->id) }}"> <i class="fas fa-info"></i> </a>
                                    <a type="button" class="btn btn-dark" href="{{ route('admin.status.edit', $status->id) }}"> <i class="fas fa-edit"></i> </a>
                                    <a type="button" class="btn btn-danger" href="{{ route('admin.status.destroy', $status->id) }}"> <i class="fas fa-trash"></i> </a>
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
                        <th scope="col"> color bg </th>
                        <th scope="col"> color fg </th>
                        <th scope="col"> tools </th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="card-footer black">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-white black-text" href="{{ route('admin.status.create') }}"> Store <i class="fas fa-plus"></i> </a>
            </div>

        </div>

    </div>

    @include('admin.includes.tables')

@endsection
