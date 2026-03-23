<?php

namespace App\Http\Controllers;

use App\Http\Requests\EspeciePost;
use App\Models\Especie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EspecieController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $especies = Especie::all();
        return view ('especies.index', compact('especies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('especies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EspeciePost $request)
    {
        $archivoPath = null;

        if ($request->hasFile('foto')) {
            $archivoPath = $request->file('foto')->store('repositorio_ficheros', 'public');

            // solo para debug
            $archivo = $request->file('foto');
            dump($archivo->getRealPath());
            dump(Storage::path($archivoPath));
        }

        Especie::create([
        'nombre' => $request->nombre,
        'clima' => $request->clima,
        'tiempo' => $request->tiempo,
        'beneficios' => $request->beneficios,
        'enlace' => $request->enlace,
        'foto' => $archivoPath,
        ]);

        return redirect()->route('especies.index')->with('success', 'Especie creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Especie $especie)
    {
        return view ('especies.show', compact('especie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Especie $especie)
    {
        return view ('especies.edit', compact('especie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Especie $especie)
    {
        $especie->update($request->all());
        return redirect()->route('especies.index')->with('success', 'Especie modificada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Especie $especie)
    {
        $especie->delete();
        return redirect()->route('especies.index')->with('success', 'Especie eliminada correctamente');
    }
}
