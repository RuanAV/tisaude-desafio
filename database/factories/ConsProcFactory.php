<?php

namespace Database\Factories;

use App\Models\Consulta;
use App\Models\Procedimento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ConsProc>
 */
class ConsProcFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cons_codigo_id' => Consulta::inRandomOrder()->first()->cons_codigo,
            'proc_codigo_id' => Procedimento::inRandomOrder()->first()->proc_codigo,
        ];
    }
}
