<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();

        return response()->json([
            'success' => true,
            'data' => $albums,
            'message' => 'Album list retrieved successfully.'
        ]);
    }

    public function show(Album $album)
    {
        return response()->json([
            'success' => true,
            'data' => $album,
            'message' => 'Album retrieved successfully.'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'artist_id' => 'required|exists:artists,id',
            'release_date' => 'required|date',
        ]);

        $album = Album::create($validated);

        return response()->json([
            'success' => true,
            'data' => $album,
            'message' => 'Album created successfully.'
        ], 201);
    }

    public function update(Request $request, Album $album)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'artist_id' => 'required|exists:artists,id',
            'release_date' => 'required|date',
        ]);

        $album->update($validated);

        return response()->json([
            'success' => true,
            'data' => $album,
            'message' => 'Album updated successfully.'
        ]);
    }

    public function destroy(Album $album)
    {
        $album->delete();

        return response()->json([
            'success' => true,
            'message' => 'Album deleted successfully.'
        ], 204);
    }
}
