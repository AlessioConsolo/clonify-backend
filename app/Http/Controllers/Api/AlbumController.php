<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    // Recupera tutti gli album
    public function index()
    {
        return response()->json(Album::all());
    }

    // Mostra un singolo album
    public function show(Album $album)
    {
        return response()->json($album);
    }

    // Crea un nuovo album
    public function store(Request $request)
    {
        // Validazione dei dati in ingresso
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'artist_id' => 'required|exists:artists,id',
            'release_date' => 'required|date',
        ]);

        $album = Album::create($validated);
        return response()->json($album, 201);
    }

    // Aggiorna un album esistente
    public function update(Request $request, Album $album)
    {
        // Validazione dei dati in ingresso
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'artist_id' => 'required|exists:artists,id',
            'release_date' => 'required|date',
        ]);

        $album->update($validated);
        return response()->json($album);
    }

    // Elimina un album
    public function destroy(Album $album)
    {
        $album->delete();
        return response()->json(null, 204);
    }
}
