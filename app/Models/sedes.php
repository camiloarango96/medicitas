<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sedes extends Model
{
    use HasFactory;

    public function medicos(){
        return $this->hasMany(medicos::class);
    }
}
