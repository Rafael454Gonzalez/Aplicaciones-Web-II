<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sancion;

class SancionController extends Controller
{
    public function index()
    {
        return response()->json(Sancion::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'motivo' => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'nullable|date',
            'estado' => 'required|boolean',
            'monto_sancion' => 'nullable|numeric',
        ]);

        $sancion = Sancion::create($request->all());
        return response()->json($sancion, 201);
    }
}