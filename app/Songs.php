<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Authors;
use App\Genres;

class Songs extends Model
{
    public function author()
    {
        return $this->belongsTo(Authors::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genres::class);
    }
}
