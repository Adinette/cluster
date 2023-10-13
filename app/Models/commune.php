<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commune extends Model
{
    use HasFactory;

    public function departement()
    {
        return $this->belongsTo(departement::class);
    }


    public function arrondissements()
    {
        return $this->hasMany(arrondissement::class);
    }
}
