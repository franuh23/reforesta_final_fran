<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventoPost;
use App\Http\Requests\EventoPut;
use App\Models\Evento;
use App\Models\Especie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventoController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Evento::all();
        return view ('eventos.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $especies = Especie::all();
        return view ('eventos.create', compact('especies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventoPost $request)
    {
        $imagenPath = null;
        $pdfPath = null;

        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('repositorio_ficheros', 'public');

            // solo para debug
            $archivo = $request->file('imagen');
            dump($archivo->getRealPath());
            dump(Storage::path($imagenPath));
        }

        if ($request->hasFile('pdf')) {
            $pdfPath = $request->file('pdf')->store('repositorio_ficheros', 'public');
        }

        // Guardar evento
        $evento = Evento::create([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'ubicacion' => $request->ubicacion,
        'tipo_terreno' => $request->tipo_terreno,
        'tipo_evento' => $request->tipo_evento,
        'fecha' => $request->fecha,
        'imagen' => $imagenPath,
        'pdf' => $pdfPath,
        'id_usuario' => $request->id_usuario
        ]);

        // Guardar especies
        if($request->has('especies')) {
            $syncData = [];
            foreach($request->especies as $especieData) {
                if(isset($especieData['id'])) {
                    $syncData[$especieData['id']] = ['num_especies' => $especieData['cantidad'] ?? 1];
                }
            }
            $evento->especiesIncluidas()->sync($syncData);
        }

        return redirect()->route('eventos.index')->with('success', 'Evento creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        return view ('eventos.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento)
    {
        $especies = Especie::all();
        return view ('eventos.edit', compact('evento', 'especies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventoPut $request, Evento $evento)
    {
        $data = $request->except(['imagen']);

        // Solo si sube nueva imagen
        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('eventos/imagenes', 'public');
        }

        $evento->update($data);

        // Sincronizar especies
        if($request->has('especies')) {
            $syncData = [];
            foreach($request->especies as $especieData) {
                if(isset($especieData['id'])) {
                    $syncData[$especieData['id']] = ['num_especies' => $especieData['cantidad'] ?? 1];
                }
            }
            $evento->especiesIncluidas()->sync($syncData);
        }

        return redirect()->route('eventos.index')->with('success', 'Evento modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();
        return redirect()->route('eventos.index')->with('success', 'Evento eliminado correctamente');
    }

    /**
     * Método para añadir participantes a un evento
     */
    public static function unirParticipante (Request $request, $id_evento, $id_usuario) {
        $evento = Evento::findOrFail($id_evento);
        $evento->participantes()->syncWithoutDetaching([$id_usuario]);

        return redirect()->route('eventos.show', $evento)->with('success', 'Se ha unido al evento satisfactoriamente');
    }

    /**
     * Método para desunirse de un evento
     */
    public static function desunirParticipante () { //Request $request, $id_evento, $id_usuario ----> esto va dentro del paréntesis, no sé si está bien
        // con detach()
    }

}
