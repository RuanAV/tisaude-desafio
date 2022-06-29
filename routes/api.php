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
        Route::get('pacientes', [PacienteController::class, 'index']);
        Route::get('planos-saude', [PlanoSaudeController::class, 'index']);
        Route::get('medicos', [MedicoController::class, 'index']);
        Route::get('especialidades', [EspecialidadeController::class, 'index']);
        Route::get('consultas', [ConsultaController::class, 'index']);
        Route::get('procedimentos', [ProcedimentoController::class, 'index']);
        Route::get('users', [UserController::class, 'index']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('me', [AuthController::class, 'me']);
    });
});
