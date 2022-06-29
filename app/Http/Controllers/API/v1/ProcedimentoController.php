<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\Procedimento;

class ProcedimentoController extends Controller
{
    public function index()
    {
        $procedimentos = Procedimento::all();

        return response()->json($procedimentos);
    }
}
