<?php

namespace Database\Factories;

use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consulta>
 */
class ConsultaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'data' => $this->faker->date('Y-m-d'),
            'hora' => $this->faker->time('H:i:s'),
            'particular' => $this->faker->randomElement([1, 0]),
            'pac_codigo_id' => Paciente::inRandomOrder()->first()->pac_codigo,
            'med_codigo_id' => Medico::inRandomOrder()->first()->med_codigo,
        ];
    }
}
