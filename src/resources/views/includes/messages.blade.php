@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger mb-1" role="alert"> {{ $error }} </div>
    @endforeach
@endif 

@if (session('success'))
    <div class="alert alert-success mb-1" role="alert"> {{ session('success') }} </div>
@endif
