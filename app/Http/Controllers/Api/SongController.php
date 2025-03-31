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
        return response()->json(Song::all());
    }

    // Mostra una singola canzone
    public function show(Song $song)
    {
        return response()->json($song);
    }

    // Crea una nuova canzone
    public function store(Request $request)
    {
        $song = Song::create($request->all());
        return response()->json($song, 201);
    }

    // Aggiorna una canzone esistente
    public function update(Request $request, Song $song)
    {
        $song->update($request->all());
        return response()->json($song);
    }

    // Elimina una canzone
    public function destroy(Song $song)
    {
        $song->delete();
        return response()->json(null, 204);
    }
}