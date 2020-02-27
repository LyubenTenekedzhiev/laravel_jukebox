<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Songs;
use App\Genres;

class Authors extends Model
{
    public function songs()
    {
        return $this->hasMany(Songs::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
