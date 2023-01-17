@extends('principal')
@section('titulo', 'Todas las canciones')
@section('contenido')
    <h1>Todas las canciones</h1>
    @if (session('mensaje'))
        <h3 style="color:blue;">{{ session('mensaje') }}</h3>
    @endif
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Artista</th>
                <th>Album</th>
                <th>Año</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($canciones as $cancion)
                <tr>
                    <td>{{ $cancion->Nombre }}< /td>
                    <td>{{ $cancion->Artista }}< /td>
                    <td>{{ $cancion->Album }}< /td>
                    <td>{{ $cancion->anio }}< /td>
                    <td><a href="{{ route('editarCancion', ['id' => $cancion->id]) }}">Editar</a></td>
                    <td><a href="{{ route('eliminarCancion', ['id' => $cancion->id]) }}">Eliminar</a></td>
                </tr>
        </tbody>
    </table>
@endsection
