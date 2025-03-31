<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // campi relativi al genere
    ];

    // Relazione uno a molti con Song
    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
