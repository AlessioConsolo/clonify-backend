<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    public function run(): void
    {
        Song::create([
            'title' => 'Song 1',
            'album_id' => 1,
            'genre_id' => 1, 
            'duration' => 180, // Durata in secondi
            'file_path' => 'default/path/to/file.mp3'
        ]);

        Song::create([
            'title' => 'Song 2',
            'album_id' => 2,
            'genre_id' => 2, 
            'duration' => 210,
            'file_path' => 'default/path/to/file.mp3'
        ]);
    }
}
