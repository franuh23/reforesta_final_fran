<?php

namespace App\Http\Controllers;

use App\Http\Requests\EspeciePost;
use App\Models\Especie;
use Illuminate\Http\Request;

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
        Especie::create([
        'nombre' => $request->nombre,
        'clima' => $request->clima,
        'tiempo' => $request->tiempo,
        'beneficios' => $request->beneficios,
        'enlace' => $request->enlace,
        'foto' => $request->foto
        ]);

        //return view('especies.index');
        return redirect()->route('especies.index')->with('success', 'Especie creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Especie $especie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Especie $especie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Especie $especie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Especie $especie)
    {
        //
    }
}
