<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanoSaude extends Model
{
    use HasFactory;

    protected $table = 'plano_saude';
    protected $primaryKey = 'plan_codigo';

    public function vinculos()
    {
        return $this->belongsToMany(Vinculo::class);
    }
}
