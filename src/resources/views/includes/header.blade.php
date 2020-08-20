<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded mt-3">

    <a class="navbar-brand" href="{{ route('home') }}"> Product-Reviews. </a>

    <button class="navbar-toggler collNavbarton" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExample09" style="">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}"> Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#"> Товары </a>
            </li>
        </ul>
        <ul class="navbar-nav my-2 my-md-0">
            <li class="nav-item">
                <a class="nav-link disabled" href="#"> Вход </a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#"> Регистрация </a>
            </li>
        </ul>
    </div>

</nav>
