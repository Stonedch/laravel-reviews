@extends ('layouts.app')

@section('content')

@include('admin.includes.links')

<div class="card">

    <div class="card-header black">
        <h1 class="h1 white-text text-uppercase text-center"> Users table </h1>
    </div>

    <div class="card-body black">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user-> id}}</th>
                    <td>{{ $user-> name}}</td>
                    <td>{{ $user-> email}}</td>
                    <td>@if ($user->role) {{ $user-> role -> name}} @endif</td>
                    <td>
                        <div class="btn-toolbar justify-content-between w-50">
                            <a type="button" href="{{ route('admin.user.show', $user->id) }}"> <i
                                    class="fas fa-info"></i> </a>
                            <a type="button" href="{{ route('admin.user.edit', $user->id) }}"> <i
                                    class="fas fa-edit"></i> </a>
                            <a type="button" href="{{ route('admin.user.destroy', $user->id) }}"> <i
                                    class="fas fa-trash"></i> </a>
                        </div>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class=" btn-toolbar justify-content-center">
            <div class="btn-group " role="group" aria-label="Basic example">
                <a class="btn btn-white black-text" href="{{ route('admin.user.create') }}"> Store <i
                        class="fas fa-plus"></i> </a>
            </div>

        </div>

    </div>

    @include('admin.includes.tables')

    @endsection
