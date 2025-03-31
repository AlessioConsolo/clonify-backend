<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SongController;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\PlaylistController;
use App\Http\Controllers\Api\AlbumController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Rotte per le canzoni
Route::get('/songs', [SongController::class, 'index']);
Route::get('/songs/{song}', [SongController::class, 'show']);
Route::post('/songs', [SongController::class, 'store']);
Route::put('/songs/{song}', [SongController::class, 'update']);
Route::delete('/songs/{song}', [SongController::class, 'destroy']);

// Rotte per i generi
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/{genre}', [GenreController::class, 'show']);
Route::post('/genres', [GenreController::class, 'store']);
Route::put('/genres/{genre}', [GenreController::class, 'update']);
Route::delete('/genres/{genre}', [GenreController::class, 'destroy']);

// Rotte per le playlist
Route::get('/playlists', [PlaylistController::class, 'index']);
Route::get('/playlists/{playlist}', [PlaylistController::class, 'show']);
Route::post('/playlists', [PlaylistController::class, 'store']);
Route::put('/playlists/{playlist}', [PlaylistController::class, 'update']);
Route::delete('/playlists/{playlist}', [PlaylistController::class, 'destroy']);

// Rotte per gli album
Route::get('/albums', [AlbumController::class, 'index']);
Route::get('/albums/{album}', [AlbumController::class, 'show']);
Route::post('/albums', [AlbumController::class, 'store']);
Route::put('/albums/{album}', [AlbumController::class, 'update']);
Route::delete('/albums/{album}', [AlbumController::class, 'destroy']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
