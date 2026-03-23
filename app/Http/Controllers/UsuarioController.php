<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioPost;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsuarioController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::with(['ser_anfitrion', 'participar'])->get();
        return view ('usuarios.index', compact('usuarios'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsuarioPost $request)
    {
        $archivoPath = null;

        if ($request->hasFile('avatar')) {
            $archivoPath = $request->file('avatar')->store('repositorio_ficheros', 'public');

            // solo para debug
            $archivo = $request->file('avatar');
            dump($archivo->getRealPath());
            dump(Storage::path($archivoPath));
        }

        Usuario::create([
        'nick' => $request->nick,
        'nombre' => $request->nombre,
        'apellidos' => $request->apellidos,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'avatar' => $archivoPath,
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return view ('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
