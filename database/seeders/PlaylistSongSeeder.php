<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Playlist;
use App\Models\Song;

class PlaylistSongSeeder extends Seeder
{
    public function run()
    {
        // Ottieni tutte le playlist e le canzoni
        $playlists = Playlist::all();
        $songs = Song::all();

        foreach ($playlists as $playlist) {
            // Aggiungi canzoni casuali alla playlist
            $playlist->songs()->attach($songs->random(min(5, $songs->count()))->pluck('id')->toArray());
        }
        
    }
}
