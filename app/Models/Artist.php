<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'bio', 'image_url', // campi relativi all'artista
    ];

    // Relazione uno a molti con Album
    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    // Relazione uno a molti con Songs
    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
