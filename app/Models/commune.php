<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commune extends Model
{
    use HasFactory;
    public function clusters()
    {
        return $this->hasMany(Cluster::class, 'id_commune');
    }
}
