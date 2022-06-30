<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanoSaude extends Model
{
    use HasFactory;

    protected $table = 'plano_saude';

    public function pacientes()
    {
        return $this->belongsToMany(Paciente::class);
    }
}
