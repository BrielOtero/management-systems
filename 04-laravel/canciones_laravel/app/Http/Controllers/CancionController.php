<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cancion;

class CancionController extends Controller
{
    public function index()
    {
        $canciones = Cancion::get();
        return view('inicio')->with('canciones', $canciones);
    }
}