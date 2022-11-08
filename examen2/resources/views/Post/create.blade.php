@extends('app.base')

@section('content')
<div>
    <form action="{{ url('post') }}" method="post">
    @csrf
<div class="form-group">
     <label for="mensaje">Mensaje</label>
     <input value="{{ old('mensaje') }}" _required type="text" minlength="2" maxlength="100" class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje">
     <button type="register" class="btn btn-primary">Subir Post</button>
</div>
</form>
</div>

@endsection