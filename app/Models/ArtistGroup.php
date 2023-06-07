<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistGroup extends Model
{
    use HasFactory;

    public function artist() {
        return $this->hasMany(Artist::class);
    }
}
