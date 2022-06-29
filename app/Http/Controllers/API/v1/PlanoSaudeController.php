<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\PlanoSaude;

class PlanoSaudeController extends Controller
{
    public function index()
    {
        $planos = PlanoSaude::all();

        return response()->json($planos);
    }
}
