<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pac_nome' => $this->faker->name(),
            'pac_dataNascimento' => $this->faker->date('Y-m-d'),
            'pac_telefones' => $this->faker->phoneNumber(),
        ];
    }
}
