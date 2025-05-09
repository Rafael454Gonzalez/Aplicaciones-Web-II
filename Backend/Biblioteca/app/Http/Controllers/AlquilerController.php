<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alquiler;

class AlquilerController extends Controller
{
    public function index()
    {
        return response()->json(Alquiler::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'libro_id' => 'required|exists:libros,id',
            'fecha_devolucion' => 'nullable|date',
            'devuelto' => 'nullable|boolean',
        ]);

        $alquiler = Alquiler::create($request->all());
        return response()->json($alquiler, 201);
    }
}