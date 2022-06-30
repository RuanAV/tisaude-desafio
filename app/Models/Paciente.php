<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'paciente';

    public function consultas()
    {
        return $this->belongsToMany(Consulta::class);
    }

    public function planossaude()
    {
        return $this->belongsToMany(PlanoSaude::class);
    }
}
