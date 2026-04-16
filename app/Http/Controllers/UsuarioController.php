<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioPost;
use App\Http\Requests\UsuarioPut;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
// Para gestión de ficheros
use Illuminate\Support\Facades\Storage;
// Para autenticación
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

        $usuario = Usuario::create([
        'nick' => $request->nick,
        'nombre' => $request->nombre,
        'apellidos' => $request->apellidos,
        'email' => $request->email,
        'karma' => 0,
        'password' => bcrypt($request->password),
        'avatar' => $archivoPath,
        ]);

        // Login automático
        Auth::login($usuario);

        return redirect()->route('usuarios.show', $usuario)->with('success', 'Usuario creado y logeado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        $usuario->load(['ser_anfitrion', 'participar']);
        return view ('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        return view ('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsuarioPut $request, Usuario $usuario)
    {
        $data = $request->except(['avatar', 'password']);
        
        // Solo si sube nueva imagen
        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }
        
        // Solo si cambia la contraseña
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }
        
        $usuario->update($data);
        
        return redirect()->route('usuarios.index')->with('success', 'Usuario modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente');
    }

    // Muestra el formulario de login
    public function showLogin()
    {
        return view ('usuarios.login');
    }

    // Logear usuario
    public function login(LoginRequest $request) {

        $credenciales = $request->only('email', 'password');

        if (Auth::attempt($credenciales)) 
        {
            $usuario = Auth::user();
            // Autenticación exitosa
            return redirect()->intended(route('usuarios.show', $usuario->id));
        } else {
            $error = 'Usuario incorrecto';
            return view('showLogin', compact('error'));
        }
    }

    // Deslogear usuario
    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('eventos.index');
    }
}
