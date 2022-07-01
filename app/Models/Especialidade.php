<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    use HasFactory;

    protected $table = 'especialidade';
    protected $primaryKey = 'espec_codigo';

    public function medico()
    {
        return $this->belongsToMany(Medico::class);
    }
}
