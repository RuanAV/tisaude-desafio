<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $table = 'medico';

    public function especialidade()
    {
        return $this->belongsTo(Especialidade::class);
    }

    public function consultas()
    {
        return $this->belongsToMany(Consulta::class);
    }
}
