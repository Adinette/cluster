<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departement extends Model
{
    use HasFactory;
    public function clusters()
    {
        return $this->hasMany(Cluster::class, 'id_departement');
    }
}
