<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cancion;

class CancionController extends Controller
{
	public function index()
	{
		$canciones = Cancion::get();
		return view('inicio', ['canciones' => $canciones]);
	}

	public function agregarCancion(Request $peticion)
	{
		$cancion = new Cancion;
		$cancion->nombre = $peticion->nombre;
		$cancion->artista = $peticion->artista;
		$cancion->album = $peticion->album;
		$cancion->anio = $peticion->anio;

		$cancion->save();

		session()->flash('mensaje', 'Cancion agregada correctamente');
		return redirect()->route('inicio');
	}

	public function editarCancion($id){

		$cancion = Cancion::find($id);
		session()->flash('mensaje', 'Cancion editada');
		return view('editar_cancion', ['cancion' => $cancion]);
	}

	public function guardarCambiosCancion(Request $peticion)
	{
		$cancion = Cancion::find($peticion->idCancion);
		$cancion->nombre = $peticion->nombre;
		$cancion->artista = $peticion->artista;
		$cancion->album = $peticion->album;
		$cancion->anio = $peticion->anio;

		$cancion->save();

		session()->flash('mensaje', 'Cancion actualizada');
		return redirect()->route('inicio');
	}

	public function eliminarCancion($id){
		$cancion = Cancion::find($id);
		$cancion->delete();
		session()->flash('mensaje', 'Cancion eliminada');
		return redirect()->route('inicio');
	}
}