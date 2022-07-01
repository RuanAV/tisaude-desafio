<?php

use App\Http\Controllers\API\v1\AuthController;
use App\Http\Controllers\API\v1\ConsultaController;
use App\Http\Controllers\API\v1\EspecialidadeController;
use App\Http\Controllers\API\v1\MedicoController;
use App\Http\Controllers\API\v1\PacienteController;
use App\Http\Controllers\API\v1\PlanoSaudeController;
use App\Http\Controllers\API\v1\ProcedimentoController;
use App\Http\Controllers\API\v1\UserController;
use App\Http\Middleware\API\v1\ProtectedRouteAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return response()->json(['api_name' => 'tisaude-desafio', 'api_version' => '1.0.0']);
});

Route::prefix('v1')->group(function() {
    Route::post('login', [AuthController::class, 'login']);

    Route::middleware([ProtectedRouteAuth::class])->group(function() {
        //paciente
        Route::get('pacientes', [PacienteController::class, 'index']);
        Route::get('pacientes/{id}', [PacienteController::class, 'getPacienteById']);
        Route::get('pacientes-procedimento/{id}', [PacienteController::class, 'getProcedimentosRealizedByPaciente']);
        Route::get('pacientes-planosaude/{id}', [PacienteController::class, 'getPlanosSaudePaciente']);
        Route::get('paciente-gasto/{id}', [PacienteController::class, 'getGastoTotalPorPaciente']);
        //plano de saude
        Route::get('planos-saude', [PlanoSaudeController::class, 'index']);
        //medico
        Route::get('medicos', [MedicoController::class, 'index']);
        Route::get('medicos/{id}', [MedicoController::class, 'getMedicoById']);
        Route::get('medico-especialidade/{id}', [MedicoController::class, 'getEspecialidadeMedico']);
        //especialdade
        Route::get('especialidades', [EspecialidadeController::class, 'index']);
        //consultas
        Route::get('consultas', [ConsultaController::class, 'index']);
        Route::get('consulta-valor/{id}', [ConsultaController::class, 'getValorConsulta']);
        //procedimentos
        Route::get('procedimentos', [ProcedimentoController::class, 'index']);
        //extra
        Route::get('users', [UserController::class, 'index']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('me', [AuthController::class, 'me']);
    });
});
