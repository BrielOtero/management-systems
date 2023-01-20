@extends('principal')
@section('titulo', 'Agregar cancion')
@section('contenido')
    <h1>Todas las canciones</h1>
    <form method="post" action="{{ route('agregarCancion') }}">
        @csrf
        <p><input type="text" name="nombre" placeholder="nombre cancion"></p>
        <p><input type="text" name="artista" placeholder="nombre artista"></p>
        <p><input type="text" name="album" placeholder="nombre albúm"></p>
        <p> <input type="number" name="anio" placeholder="año"></p>
        <p><input type="submit" value="Guardar"></p>
    </form>
@endsection
