<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    public function run(): void
    {
        Artist::create([
            'name' => 'Artist 1',
            'bio' => 'Biography of Artist 1',
        ]);

        Artist::create([
            'name' => 'Artist 2',
            'bio' => 'Biography of Artist 2',
        ]);
    }
}
