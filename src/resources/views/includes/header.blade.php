<nav class="mb-3 navbar navbar-expand-lg navbar-dark black lighten-1">

    <a class="navbar-brand" href="{{ route('site.index') }}"> {{ trans('header.logo') }} </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent-3">

        <ul class="navbar-nav mr-auto">

            @if (\Request::route()->getName() == 'site.index')
                <li class="nav-item active">
            @else
                <li class="nav-item">
            @endif
                    <a class="nav-link waves-effect waves-light" href="{{ route('site.index') }}"> {{ trans('header.home') }} </a>
                </li>

            @if (\Request::route()->getName() == 'site.product.index')
                <li class="nav-item active">
            @else
                <li class="nav-item">
            @endif
                    <a class="nav-link waves-effect waves-light" href="{{ route('site.product.index') }}"> {{ trans('header.products') }} </a>
                </li>

        </ul>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="https://github.com/stonedch/" target="_blank">
                    <i class="fab fa-github"></i> Stonedch
                </a>
            </li>

            @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> {{ trans('auth.profile') }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info text-center" aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item waves-effect waves-light" href="{{ route('login') }}"> {{ trans('auth.login') }} </a>
                        @if (Route::has('register'))
                            <a class="dropdown-item waves-effect waves-light" href="{{ route('register') }}"> {{ trans('auth.register') }} </a>
                        @endif
                    </div>
                </li>
            @else
                @if (Auth::user()->isAdmin())
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{ route('admin.index') }}">
                            <i class="fas fa-cogs"></i> {{ trans('header.dashboard') }}
                        </a>
                    </li>
                @endif
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info text-center" aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item waves-effect waves-light" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ trans('auth.logout') }} </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest

        </ul>

    </div>

</nav>
