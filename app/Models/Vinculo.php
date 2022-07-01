<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vinculo extends Model
{
    use HasFactory;

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }

    public function planosSaude()
    {
        return $this->hasMany(PlanoSaude::class);
    }
}
