<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    public function index()
    {
        return response()->json(Rol::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_rol' => 'required|string|max:50',
            'descripcion' => 'nullable|string',
            'nivel_prioridad' => 'required|integer',
            'activo' => 'required|boolean',
        ]);

        $rol = Rol::create($request->all());
        return response()->json($rol, 201);
    }
}