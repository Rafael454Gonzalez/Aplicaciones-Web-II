<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    public function index()
    {
        return response()->json(Comentario::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'libro_id' => 'required|exists:libros,id',
            'contenido' => 'required|string',
            'calificacion' => 'nullable|integer|min:1|max:5',
        ]);

        $comentario = Comentario::create($request->all());
        return response()->json($comentario, 201);
    }
}