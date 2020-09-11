@extends('layouts.app')

@section('content')

    @include('admin.includes.links')

    <div class="card black">

        <div class="card-header">
            <h1 class="h1 white-text text-uppercase text-center"> Statuses table </h1>
        </div>

        <div class="card-body">
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> Name </th>
                        <th scope="col"> Slug </th>
                        <th scope="col"> Tools </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($statuses as $status)
                    <tr>
                        <th scope="row">{{ $status-> id}}</th>
                        <td>{{ $status-> name}}</td>
                        <td>{{ $status-> slug}}</td>
                        <td>
                            <div style="width: 30%"
                                class="btn-toolbar justify-content-between">
                                <a type="button" href="{{ route('admin.status.show', $status->id) }}"> <i
                                        class="fas fa-info"></i> </a>
                                <a type="button" href="{{ route('admin.status.edit', $status->id) }}"> <i
                                        class="fas fa-edit"></i> </a>
                                <a type="button" href="{{ route('admin.status.destroy', $status->id) }}"> <i
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
                <a class="btn btn-white black-text" href="{{ route('admin.status.create') }}"> Store <i
                        class="fas fa-plus"></i> </a>
            </div>

        </div>

    </div>

    @include('admin.includes.tables')

@endsection
