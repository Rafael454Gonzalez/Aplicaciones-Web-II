<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;

class EstadoController extends Controller
{
    public function index()
    {
        return response()->json(Estado::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_est' => 'required|string|max:50',
            'descripcion_est' => 'nullable|string',
        ]);

        $estado = Estado::create($request->all());
        return response()->json($estado, 201);
    }
}