<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    // Recupera tutte le canzoni
    public function index()
    {
        $songs = Song::all();

        return response()->json([
            'success' => true,
            'data' => $songs,
            'message' => 'Songs retrieved successfully.'
        ]);
    }

    // Mostra una singola canzone
    public function show(Song $song)
    {
        return response()->json([
            'success' => true,
            'data' => $song,
            'message' => 'Song retrieved successfully.'
        ]);
    }

    // Crea una nuova canzone
    public function store(Request $request)
    {
        // Validazione dei dati in ingresso
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'album_id' => 'required|exists:albums,id',
            'genre_id' => 'required|exists:genres,id',
            'file_path' => 'required|string',
            'duration' => 'required|integer',
        ]);

        $song = Song::create($validated);

        return response()->json([
            'success' => true,
            'data' => $song,
            'message' => 'Song created successfully.'
        ], 201);
    }

    // Aggiorna una canzone esistente
    public function update(Request $request, Song $song)
    {
        // Validazione dei dati in ingresso
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'album_id' => 'required|exists:albums,id',
            'genre_id' => 'required|exists:genres,id',
            'file_path' => 'required|string',
            'duration' => 'required|integer',
        ]);

        $song->update($validated);

        return response()->json([
            'success' => true,
            'data' => $song,
            'message' => 'Song updated successfully.'
        ]);
    }

    // Elimina una canzone
    public function destroy(Song $song)
    {
        $song->delete();

        return response()->json([
            'success' => true,
            'message' => 'Song deleted successfully.'
        ], 204);
    }
}
