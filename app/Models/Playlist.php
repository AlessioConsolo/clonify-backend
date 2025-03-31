<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'user_id', 'description', // campi relativi alla playlist
    ];

    // Relazione con User (una playlist appartiene a un utente)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relazione many-to-many con Song
    public function songs()
    {
        return $this->belongsToMany(Song::class, 'playlist_song');
    }
}
