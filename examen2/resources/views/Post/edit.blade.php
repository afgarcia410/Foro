@extends('app.base')

@section('content')
<div>
    <form "{{url('post/' . $post->id ) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <input value="{{ old('mensaje') }}" _required type="text" minlength="2" maxlength="100" class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje">
            <button type="submit" class="btn btn-primary">Editar Post</button>
            &nbsp;
             <a href="{{ url('post') }}" class="btn btn-primary">Volver atras</a>
        </div>
        @csrf
    </form>
</div>
@endsection