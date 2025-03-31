<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    // Recupera tutte le playlist
    public function index()
    {
        return response()->json(Playlist::all());
    }

    // Mostra una singola playlist
    public function show(Playlist $playlist)
    {
        return response()->json($playlist);
    }

    // Crea una nuova playlist
    public function store(Request $request)
    {
        // Validazione dei dati in ingresso (opzionale)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $playlist = Playlist::create($validated);
        return response()->json($playlist, 201);
    }

    // Aggiorna una playlist esistente
    public function update(Request $request, Playlist $playlist)
    {
        // Validazione dei dati in ingresso (opzionale)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $playlist->update($validated);
        return response()->json($playlist);
    }

    // Elimina una playlist
    public function destroy(Playlist $playlist)
    {
        $playlist->delete();
        return response()->json(null, 204);
    }
}
