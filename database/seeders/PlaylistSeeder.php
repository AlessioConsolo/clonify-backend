<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Playlist;

class PlaylistSeeder extends Seeder
{
    public function run()
    {
        Playlist::create([
            'name' => 'My Favorite Playlist',
            'user_id' => 1, 
        ]);

        Playlist::create([
            'name' => 'Workout Playlist',
            'user_id' => 2, 
        ]);
    }
}
