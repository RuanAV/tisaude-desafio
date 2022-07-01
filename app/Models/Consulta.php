<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $table = 'consulta';
    protected $primaryKey = 'cons_codigo';

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function procedimentos()
    {
        return $this->belongsToMany(Procedimento::class);
    }

    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }
}
