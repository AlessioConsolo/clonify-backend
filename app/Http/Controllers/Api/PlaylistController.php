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
        $playlists = Playlist::all();

        return response()->json([
            'success' => true,
            'data' => $playlists,
            'message' => 'Playlists retrieved successfully.'
        ]);
    }

    // Mostra una singola playlist
    public function show(Playlist $playlist)
    {
        return response()->json([
            'success' => true,
            'data' => $playlist,
            'message' => 'Playlist retrieved successfully.'
        ]);
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

        return response()->json([
            'success' => true,
            'data' => $playlist,
            'message' => 'Playlist created successfully.'
        ], 201);
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

        return response()->json([
            'success' => true,
            'data' => $playlist,
            'message' => 'Playlist updated successfully.'
        ]);
    }

    // Elimina una playlist
    public function destroy(Playlist $playlist)
    {
        $playlist->delete();

        return response()->json([
            'success' => true,
            'message' => 'Playlist deleted successfully.'
        ], 204);
    }
}
