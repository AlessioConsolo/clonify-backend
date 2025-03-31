<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Recupera tutte le categorie (generi)
    public function index()
    {
        return response()->json(Genre::all());
    }

    // Mostra un singolo genere
    public function show(Genre $genre)
    {
        return response()->json($genre);
    }

    // Crea un nuovo genere
    public function store(Request $request)
    {
        // Validazione dei dati in ingresso
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $genre = Genre::create($validated);
        return response()->json($genre, 201);
    }

    // Aggiorna un genere esistente
    public function update(Request $request, Genre $genre)
    {
        // Validazione dei dati in ingresso
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $genre->update($validated);
        return response()->json($genre);
    }

    // Elimina un genere
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return response()->json(null, 204);
    }
}
