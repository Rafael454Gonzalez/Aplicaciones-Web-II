<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function index()
    {
        return response()->json(Reserva::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'libro_id' => 'required|exists:libros,id',
            'fecha_reserva' => 'required|date',
            'estado' => 'required|string|max:20',
        ]);

        $reserva = Reserva::create($request->all());
        return response()->json($reserva, 201);
    }
}