<?php

namespace Database\Factories;

use App\Models\Paciente;
use App\Models\PlanoSaude;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vinculo>
 */
class VinculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pac_codigo_id' => Paciente::inRandomOrder()->first()->pac_codigo,
            'plan_codigo_id' => PlanoSaude::inRandomOrder()->first()->plan_codigo,
        ];
    }
}
