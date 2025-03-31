<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistSong extends Model
{
    use HasFactory;

    // La tabella di relazione many-to-many, quindi non è necessario aggiungere $fillable se non hai campi extra
    protected $table = 'playlist_song';

    // Definisci eventuali campi extra (se necessari), ad esempio:
    // protected $fillable = ['playlist_id', 'song_id'];

    public $timestamps = false; // Se non hai bisogno di timestamps in questa tabella
}
