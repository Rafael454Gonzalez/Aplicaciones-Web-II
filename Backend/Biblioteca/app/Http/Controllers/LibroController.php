<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    public function index()
    {
        return response()->json(Libro::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'anio_publicacion' => 'required|integer',
            'isbn' => 'required|string|unique:libros',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $libro = Libro::create($request->all());
        return response()->json($libro, 201);
    }
}