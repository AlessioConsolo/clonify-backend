<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;
use App\Models\Song;

class GenreSongSeeder extends Seeder
{
    public function run()
    {
        // Ottieni tutte le canzoni e i generi
        $songs = Song::all();
        $genres = Genre::all();

        foreach ($songs as $song) {
            // Assegna casualmente generi alla canzone
            $song->genres()->attach($genres->random(2)->pluck('id')->toArray());
        }
    }
}
