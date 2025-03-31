<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    public function run(): void
    {
        Album::create([
            'title' => 'Album 1',
            'artist_id' => 1, // Assumendo che l'ID dell'artista esista
            'release_year' => 2022,
        ]);

        Album::create([
            'title' => 'Album 2',
            'artist_id' => 2, // Assumendo che l'ID dell'artista esista
            'release_year' => 2023,
        ]);
    }
}
