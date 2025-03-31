<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'release_date', 'artist_id', // campi relativi all'album
    ];

    // Relazione inversa con Artist (un album appartiene a un artista)
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    // Relazione uno a molti con Song
    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
