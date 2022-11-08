@extends('app.base')

@section('content')
<div>
    <form action="{{ url('usuario') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="interprete">Correo</label>
            <input value="{{ old('correo') }}" required type="text" minlength="2" maxlength="100" class="form-control" id="correo" name="correo" placeholder="correo">
            
        </div>
        <button type="signin" class="btn btn-primary">Sign in</button>
        &nbsp;
        <a href="{{ url('usuario/create') }}" class="btn btn-primary">Register</a>
    </form>
</div>
@endsection