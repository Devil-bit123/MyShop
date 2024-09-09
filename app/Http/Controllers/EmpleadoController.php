<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
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
        $empleados = User::with('provincia', 'provinciaLaboral')->get();
        //$empleados = User::all();

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
            // Convertir a booleano
            $request->merge([
                'jornada_parcial' => filter_var($request->input('jornada_parcial'), FILTER_VALIDATE_BOOLEAN)
            ]);

            // Validar los datos del request
            $validatedData = $request->validate(User::$rules);

            // Crear un nuevo usuario con los datos validados
            $user = User::create($validatedData);

            // Manejo de archivo si se incluye en la solicitud
            if ($request->hasFile('fotografia')) {
                // Almacenar la fotografía
                $photoPath = $request->file('fotografia')->store('fotografias', 'public');

                // Verificar si el archivo fue almacenado correctamente
                if (Storage::disk('public')->exists($photoPath)) {
                    // Si el archivo existe, guardar la ruta en la base de datos
                    $user->fotografia = $photoPath;
                    $user->save();
                } else {
                    // Si el archivo no fue guardado correctamente, devolver un error
                    return response()->json(['error' => 'No se pudo guardar la fotografía'], 500);
                }
            }

            // Retorna una respuesta JSON de éxito con la URL de la imagen
            return response()->json([
                'user' => $user,
                'fotografia_url' => Storage::url($user->fotografia)
            ], 201);
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

        $request->merge([
            'jornada_parcial' => filter_var($request->input('jornada_parcial'), FILTER_VALIDATE_BOOLEAN)
        ]);

        try {
            $rules = [
                'nombres' => 'required|string',
                'apellidos' => 'required|string',
                'cedula' => 'required|digits:10|unique:users,cedula,' . $id,
                'provincia' => 'required|integer',
                'fecha_nacimiento' => 'required|date',
                'email' => 'required|email|unique:users,email,' . $id,
                'fecha_ingreso' => 'required|date',
                'cargo' => 'required|string',
                'departamento' => 'required|string',
                'provincia_laboral' => 'required|integer',
                'sueldo' => 'required|numeric',
                'jornada_parcial' => 'required|boolean',
                'observaciones' => 'nullable|string',
            ];

            $validatedData = $request->validate($rules);

            // Actualizar el usuario
            $user = User::find($id);
            $user->update($validatedData);

            // Manejo de la fotografía si se ha enviado
            if ($request->hasFile('fotografia')) {
                $photoPath = $request->file('fotografia')->store('fotografias', 'public');
                if (Storage::disk('public')->exists($photoPath)) {
                    $user->fotografia = $photoPath;
                    $user->save();
                } else {
                    return response()->json(['error' => 'No se pudo guardar la fotografía'], 500);
                }
            }

            return response()->json([
                'user' => $user,
                'fotografia_url' => Storage::url($user->fotografia)
            ], 200);
        } catch (ValidationException $e) {
            return response()->json([
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'errors' => 'Error inesperado'
            ], 500);
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
            // Verifica si la fotografía existe y está almacenada
            if ($usuarioExistente->fotografia && Storage::exists($usuarioExistente->fotografia)) {
                // Elimina el archivo de almacenamiento
                Storage::delete($usuarioExistente->fotografia);
            }

            // Elimina el registro del usuario
            $usuarioExistente->delete();
            return response()->json(['message' => 'Usuario eliminado exitosamente.'], 200);
        }
        return response()->json([
            'errors' => 'Usuario no encontrado'
        ], 404); // 404 not found
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

}
