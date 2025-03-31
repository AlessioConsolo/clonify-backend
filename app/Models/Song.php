<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'artist_id', 'album_id', 'genre_id', 'duration', 'file_path', // campi relativi alla canzone
    ];

    // Relazione con Artist (una canzone appartiene a un artista)
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    // Relazione con Album (una canzone appartiene a un album)
    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    // Relazione con Genre (una canzone ha un genere)
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_song');
    }

    // Relazione many-to-many con Playlist
    public function playlists()
    {
        return $this->belongsToMany(Playlist::class, 'playlist_song');
    }
}
