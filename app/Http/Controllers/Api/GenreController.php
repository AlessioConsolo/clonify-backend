<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        return response()->json([
            'success' => true,
            'data' => $genres,
            'message' => 'Genres list retrieved successfully.'
        ]);
    }

    public function show(Genre $genre)
    {
        return response()->json([
            'success' => true,
            'data' => $genre,
            'message' => 'Genre retrieved successfully.'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $genre = Genre::create($validated);

        return response()->json([
            'success' => true,
            'data' => $genre,
            'message' => 'Genre created successfully.'
        ], 201);
    }

    public function update(Request $request, Genre $genre)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $genre->update($validated);

        return response()->json([
            'success' => true,
            'data' => $genre,
            'message' => 'Genre updated successfully.'
        ]);
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();

        return response()->json([
            'success' => true,
            'message' => 'Genre deleted successfully.'
        ], 204);
    }
}
