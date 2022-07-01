<?php

namespace Database\Seeders;

use App\Models\Consulta;
use App\Models\Especialidade;
use App\Models\Medico;
use App\Models\Paciente;
use App\Models\PlanoSaude;
use App\Models\Procedimento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        \App\Models\Paciente::factory(10)->create();
        \App\Models\PlanoSaude::factory(5)->create();

        $especialdiades = ['Cardiologista', 'Endocrinologista', 'Ortopedista', 'Nefrologista'];
        $procedimentos = [['DRENAGEM TORÁCICA', '100.0'], ['IOT', '200.0'], ['CRICOSTOMIA POR PUNÇÃO', '300.0'], ['ACESSO VENOSO CENTRAL/PROFUNDO', '400.0'], ['CATETERISMO VESICAL', '500.0']];

        foreach ($especialdiades as $especialdiade) {
            Especialidade::create([
                'espec_nome' => $especialdiade
            ]);
        }

        foreach ($procedimentos as $procedimento) {
            Procedimento::create([
                'proc_nome' => $procedimento[0],
                'proc_valor' => $procedimento[1],
            ]);
        }

        \App\Models\Medico::factory(5)->create();
        \App\Models\Consulta::factory(20)->create();
        \App\Models\Vinculo::factory(20)->create();
        \App\Models\ConsProc::factory(35)->create();

    }



}
