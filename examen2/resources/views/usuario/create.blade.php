@extends('app.base')

@section('content')
<div>
    <form action="{{ url('usuario') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input value="{{ old('nombre') }}" _required type="text" minlength="2" maxlength="50" class="form-control" id="nombre" name="nombre" placeholder="Nombre Usuario">
            <label for="correo">Correo</label>
            <input value="{{ old('correo') }}" required type="text" minlength="2" maxlength="100" class="form-control" id="correo" name="correo" placeholder="correo">
            <label for="fechaNacimiento">Fecha Nacimiento</label>
            <input value="{{ old('fechaNacimiento') }}" type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="fechaNacimiento">
        </div>
        <button type="register" class="btn btn-primary">Register</button>
        &nbsp;
        <a href="{{ url('usuario') }}" class="btn btn-primary">back</a>
    </form>
</div>
@endsection