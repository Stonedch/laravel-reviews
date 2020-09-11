@extends('layouts.app')

@section('content')

    <style>
        .md-form input:focus {
            box-shadow: 0 1px 0 0 black !important;
            border-bottom: 1px solid black !important;
        }
    </style>

    <div class="row justify-content-center">

        <div class="col-md-6 mb-4">

            <!--Naked Form-->
            <div class="card-body">

                <!--Header-->
                <div class="text-center black-text">
                    <h2 class='h2 '> Login  </h2>
                </div>

                <form method="POST" action="{{ route('login') }}">

                    @csrf

                    <!--Body-->
                    <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="form-email" class="form-control @error('email') is-invalid @enderror" placeholder="Your email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="md-form">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="dpurpleForm-pass" class="form-control @error('password') is-invalid @enderror" placeholder="Your password" name="password">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-black white-text waves-effect waves-light">Login</button>
                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection
