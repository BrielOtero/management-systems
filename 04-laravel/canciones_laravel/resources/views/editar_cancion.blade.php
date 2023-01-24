@extends('principal')
@section('titulo', 'Editar cancion')
@section('contenido')
    <h1>Editar cancion</h1>
    <form method="post" action="{{ route('guardarCambiosCancion') }}">
        @csrf
        <p><input type="hidden" name="idCancion" value="{{$cancion->id}}"></p>
        <p><input type="text" name="nombre" value="{{$cancion->nombre}}"></p>
        <p><input type="text" name="artista" value="{{$cancion->artista}}"></p>
        <p><input type="text" name="album" value="{{$cancion->album}}"></p>
        <p> <input type="number" name="anio" value="{{$cancion->anio}}"></p>
        <p><input type="submit" value="Guardar"></p>
    </form>
@endsection
