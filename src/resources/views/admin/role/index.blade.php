@extends('layouts.app')

@section('content')

    @include('admin.includes.links')

    <div class="card black">

        <div class="card-header ">
            <h1 class="h1 white-text text-uppercase text-center"> Roles table </h1>
        </div>

        <div class="card-body ">

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
                @foreach ($roles as $role)
                <tr>
                    <th scope="row">{{ $role-> id}}</th>
                    <td>{{ $role-> name}}</td>
                    <td>{{ $role-> slug}}</td>
                    <td>
                        <div style="width: 30%"
                            class="btn-toolbar justify-content-between">
                            <a type="button" href="{{ route('admin.role.show', $role->id) }}"> <i
                                    class="fas fa-info"></i> </a>
                            <a type="button" href="{{ route('admin.role.edit', $role->id) }}"> <i
                                    class="fas fa-edit"></i> </a>
                            <a type="button" href="{{ route('admin.role.destroy', $role->id) }}"> <i
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
                <a class="btn btn-white black-text" href="{{ route('admin.role.create') }}"> Store <i
                        class="fas fa-plus"></i> </a>
            </div>

        </div>

    </div>

    @include('admin.includes.tables')

@endsection
