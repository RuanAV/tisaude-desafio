<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use Illuminate\Support\Facades\DB;

class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::all();

        return response()->json($medicos);
    }

    public function getMedicoById($id)
    {
        $medico = Medico::find($id);

        return response()->json($medico);
    }

    public function getEspecialidadeMedico($id)
    {
        $pacientes = DB::table('medico')
            ->join('especialidade', 'medico.espec_codigo_id', '=', 'especialidade.espec_codigo')
            ->where('medico.med_codigo', '=', $id)
            ->select('medico.med_codigo', 'medico.med_nome', 'medico.med_crm', 'especialidade.espec_nome')
            ->get();

        return response()->json($pacientes);
    }
}
