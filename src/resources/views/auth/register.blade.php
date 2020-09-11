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
                    <h2 class='h2'> Register </h2>
                </div>

                <form method="POST" action="{{ route('register') }}">

                    @csrf

                    <!--Body-->
                    <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="form-email" class="form-control @error('email') is-invalid @enderror" placeholder="Your email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="md-form">
                        <i class="far fa-address-card prefix grey-text"></i>
                        <input type="text" id="form-email" class="form-control @error('name') is-invalid @enderror" placeholder="Your name" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-black white-text waves-effect waves-light"> Register </button>
                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection
