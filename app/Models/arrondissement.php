<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arrondissement extends Model
{
    use HasFactory;

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }

    public function villages()
    {
        return $this->hasMany(village::class);
    }
}
