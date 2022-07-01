<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedimento extends Model
{
    use HasFactory;

    protected $table = 'procedimento';
    protected $primaryKey = 'proc_codigo';

    public function consultas()
    {
        return $this->belongsToMany(Consulta::class);
    }
}
