<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = User::all();
        return response()->json($empleados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // Valida los datos del request
            $validatedData = $request->validate(User::$rules);

            // Crea un nuevo usuario con los datos validados
            $user = User::create($validatedData);

            // Manejo de archivo si se incluye en la solicitud
            if ($request->hasFile('fotografia')) {
                $user->fotografia = $request->file('fotografia')->store('fotografias', 'public');
                $user->save();
            }

            // Retorna una respuesta JSON de éxito
            return response()->json($user, 201);

        } catch (ValidationException $e) {
            // Retorna una respuesta JSON con los errores de validación
            return response()->json([
                'errors' => $e->errors()
            ], 422); // 422 Unprocessable Entity
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarioExistente = User::find($id);
        if (!$usuarioExistente) {
            return response()->json([
                'errors' => 'Usuario no encontrado'
            ], 404); // 404 not found
        }
        return response()->json($usuarioExistente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $usuarioExistente = User::find($id);
        if (!$usuarioExistente) {
            return response()->json([
                'errors' => 'Usuario no encontrado'
            ], 404); // 404 not found
        }

        try {
            // Valida los datos del request
            $validatedData = $request->validate(User::$rules);

            // Crea un nuevo usuario con los datos validados
            $usuarioExistente->update($validatedData);

            if ($request->hasFile('fotografia')) {
                if ($usuarioExistente->fotografia && Storage::exists($usuarioExistente->fotografia)) {
                    Storage::delete($usuarioExistente->fotografia);
                }

                $usuarioExistente->fotografia = $request->file('fotografia')->store('fotografias', 'public');
                $usuarioExistente->save();

                return response()->json($usuarioExistente);
            }
        } catch (ValidationException $e) {
            // Retorna una respuesta JSON con los errores de validación
            return response()->json([
                'errors' => $e->errors()
            ], 422); // 422 Unprocessable Entity
        }catch (\Exception $e) {
            // Manejo de otras excepciones
            return response()->json([
                'errors' => 'Error inesperado'
            ], 500); // 500 Internal Server Error
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarioExistente = User::find($id);
        if ($usuarioExistente) {
            if ($usuarioExistente->fotografia && Storage::exists($usuarioExistente->fotografia)) {
                Storage::delete($usuarioExistente->fotografia);
            }

            $usuarioExistente->delete();
            return response()->json(null, 204);
        }
        return response()->json([
            'errors' => 'Usuario no encontrado'
        ], 404); // 404 not found
    }
}
