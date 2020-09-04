@extends('layouts.app')

@section('content')

    @include('admin.includes.links')

    <div class="card">

        <div class="card-header black">
            <h1 class="h1 white-text text-uppercase"> Users table </h1>
        </div>

        <div class="card-body">
            <table class="table table-striped table-bordered table-hover table-sm table-responsive text-nowrap text-center">
                <thead>
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> name </th>
                        <th scope="col"> email </th>
                        <th scope="col"> email verified at </th>
                        <th scope="col"> password </th>
                        <th scope="col"> role </th>
                        <th scope="col"> remember token </th>
                        <th scope="col"> created at </th>
                        <th scope="col"> updated at </th>
                        <th scope="col"> tools </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row"> {{ $user->id }} </th>
                            <td> {{ $user->name }} </td>
                            <td> {{ $user->email }} </td>
                            <td> {{ $user->email_verified_at }} </td>
                            <td> {{ $user->password }} </td>
                            <td> @if ($user->role) {{ $user->role->name }} @endif </td>
                            <td> {{ $user->remember_token }} </td>
                            <td> {{ $user->created_at }} </td>
                            <td> {{ $user->updated_at }} </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a type="button" class="btn btn-dark" href="{{ route('admin.user.show', $user->id) }}"> <i class="fas fa-info"></i> </a>
                                    <a type="button" class="btn btn-dark" href="{{ route('admin.user.edit', $user->id) }}"> <i class="fas fa-edit"></i> </a>
                                    <a type="button" class="btn btn-danger" href="{{ route('admin.user.destroy', $user->id) }}"> <i class="fas fa-trash"></i> </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> name </th>
                        <th scope="col"> email </th>
                        <th scope="col"> email verified at </th>
                        <th scope="col"> password </th>
                        <th scope="col"> role </th>
                        <th scope="col"> remember token </th>
                        <th scope="col"> created at </th>
                        <th scope="col"> updated at </th>
                        <th scope="col"> tools </th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="card-footer black">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-white black-text" href="{{ route('admin.user.create') }}"> Store <i class="fas fa-plus"></i> </a>
            </div>

        </div>

    </div>

    @include('admin.includes.tables')

@endsection
