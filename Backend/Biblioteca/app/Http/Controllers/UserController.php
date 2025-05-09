<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::all(), 200);
    }

    public function store(Request $request)
    {
        // Validar la solicitud manualmente para devolver errores en formato JSON
        $validator = Validator::make($request->all(), [
            'cedula' => 'required|string|max:10|unique:users',
            'nombre' => 'required|string|max:50',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:8',
            'telefono' => 'nullable|string|max:10',
            'direccion' => 'nullable|string',
            'rol_id' => 'required|exists:roles,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Guardar el usuario con la contraseña encriptada
        $user = User::create([
            'cedula' => $request->cedula,
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password), // 🔹 Encripta la contraseña
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'rol_id' => $request->rol_id,
        ]);

        return response()->json(['message' => 'Usuario creado exitosamente', 'data' => $user], 201);
    }
}






