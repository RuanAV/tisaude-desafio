<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\Paciente;
use Illuminate\Support\Facades\DB;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all();

        return response()->json($pacientes);
    }

    public function getPacienteById($id)
    {
        $paciente = Paciente::find($id);

        return response()->json($paciente);
    }

    public function getProcedimentosRealizedByPaciente($id)
    {
        $pacientes = DB::table('paciente')
                        ->join('consulta', 'paciente.pac_codigo', '=', 'consulta.pac_codigo_id')
                        ->join('cons_proc', 'cons_proc.cons_codigo_id', '=', 'consulta.cons_codigo')
                        ->join('procedimento', 'procedimento.proc_codigo', '=', 'cons_proc.proc_codigo_id')
                        ->where('paciente.pac_codigo', '=', $id)
                        ->select('paciente.pac_codigo', 'paciente.pac_nome', 'procedimento.proc_nome', 'procedimento.proc_valor')
                        ->get();

        return response()->json($pacientes);
    }

    public function getPlanosSaudePaciente($id)
    {
        $pacientes = DB::table('paciente')
                        ->join('vinculos', 'paciente.pac_codigo', '=', 'vinculos.pac_codigo_id')
                        ->join('plano_saude', 'vinculos.plan_codigo_id', '=', 'plano_saude.plan_codigo')
                        ->where('paciente.pac_codigo', '=', $id)
                        ->select('paciente.pac_codigo', 'paciente.pac_nome', 'vinculos.nr_contrato', 'plano_saude.plano_descricao', 'plano_saude.plano_telefone')
                        ->get();

        return response()->json($pacientes);
    }

    public function getGastoTotalPorPaciente($id)
    {
        $idPacientesValor = DB::table('paciente')
            ->join('consulta', 'paciente.pac_codigo', '=', 'consulta.pac_codigo_id')
            ->join('cons_proc', 'cons_proc.cons_codigo_id', '=', 'consulta.cons_codigo')
            ->join('procedimento', 'procedimento.proc_codigo', '=', 'cons_proc.proc_codigo_id')
            ->where('paciente.pac_codigo', '=', $id)
            ->groupBy('paciente.pac_codigo', 'paciente.pac_nome')
            ->select('paciente.pac_codigo', 'paciente.pac_nome', DB::raw('SUM(procedimento.proc_valor) as total'))
            ->get();

        return response()->json($idPacientesValor);
    }
}
