@extends('app.base')

@section('content')
<div class="row" style="margin-top: 8px;">
<table>
    <thead>
        <tr>
            <th scope="col">Titulo Post</th>
            <th scope="col">Comentarios</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($post as $post)
        <tr>
            <td> {{$post->mensaje}}</td>
            <td>
                <a href="{{ url('post/' . $post->id .'/edit') }}">Editar Comentario</a>
            </td>
            <td>
                <a href="{{ url('post/' . $post->id) }}">Borrar Comentario</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<div>
    <form action="{{ url('post') }}" method="post">
         @csrf
        &nbsp;
        <a href="{{ url('post/create') }}" class="btn btn-primary">Añadir Post</a>
    </form>
</div>
@endsection