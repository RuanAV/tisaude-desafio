<?php

namespace Database\Factories;

use App\Models\Especialidade;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medico>
 */
class MedicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'med_nome' => $this->faker->name(),
            'med_crm' => $this->faker->randomNumber(6, true),
            'espec_codigo_id' => Especialidade::inRandomOrder()->first()->espec_codigo,

        ];
    }
}
