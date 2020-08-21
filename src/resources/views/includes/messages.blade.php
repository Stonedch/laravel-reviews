@if ($errors->any())
    <div class="container">
        <div class="alert alert-dunger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif 

@if (session('success'))
    <div class="container">
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    </div>
@endif
