<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ejemplar;

class EjemplarController extends Controller
{
    public function index()
    {
        return response()->json(Ejemplar::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'libro_id' => 'required|exists:libros,id',
            'ubicacion_fisica' => 'nullable|string',
            'disponible' => 'required|boolean',
        ]);

        $ejemplar = Ejemplar::create($request->all());
        return response()->json($ejemplar, 201);
    }
}