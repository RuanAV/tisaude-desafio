<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\Especialidade;

class EspecialidadeController extends Controller
{
    public function index()
    {
        $especialdiades = Especialidade::all();

        return response()->json($especialdiades);
    }
}
