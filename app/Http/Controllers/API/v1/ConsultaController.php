<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\Consulta;
use Illuminate\Support\Facades\DB;

class ConsultaController extends Controller
{
    public function index()
    {
        $consultas = Consulta::all();

        return response()->json($consultas);
    }

    public function getValorConsulta($id)
    {
        $valorConsulta = DB::table('consulta')
            ->join('cons_proc', 'cons_proc.cons_codigo_id', '=', 'consulta.cons_codigo')
            ->join('procedimento', 'procedimento.proc_codigo', '=', 'cons_proc.proc_codigo_id')
            ->where('consulta.cons_codigo', '=', $id)
            ->groupBy('consulta.cons_codigo')
            ->select('consulta.cons_codigo',DB::raw('SUM(procedimento.proc_valor) as total'))
            ->get();

        return response()->json($valorConsulta);
    }
}
