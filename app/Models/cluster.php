<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cluster extends Model
{
    use HasFactory;
    public function departement()
    {
        return $this->belongsTo(Departement::class, 'id_departement');
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class, 'id_commune');
    }

    public function arrondissement()
    {
        return $this->belongsTo(Arrondissement::class, 'id_arrondissement');
    }
}
