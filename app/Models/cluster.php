<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cluster extends Model
{
    use HasFactory;

    public function filiere()
    {
        return $this->belongsTo(filiere::class);
    }

    public function village()
    {
        return $this->belongsTo(village::class);
    }
}
