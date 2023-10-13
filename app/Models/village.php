<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class village extends Model
{
    use HasFactory;

    public function arrondissement()
    {
        return $this->belongsTo(arrondissement::class);
    }

    public function clusters()
    {
        return $this->hasMany(cluster::class);
    }
}
