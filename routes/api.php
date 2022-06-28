<?php

use App\Http\Controllers\API\v1\AuthController;
use App\Http\Middleware\API\v1\ProtectedRouteAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return response()->json(['api_name' => 'tisaude-desafio', 'api_version' => '1.0.0']);
});

Route::prefix('v1')->group(function() {
    Route::post('login', [AuthController::class, 'login']);

    Route::middleware([ProtectedRouteAuth::class])->group(function() {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('me', [AuthController::class, 'me']);
    }); 
});

// Route::post('logout', 'AuthController@logout');
// Route::post('refresh', 'AuthController@refresh');
// Route::post('me', 'AuthController@me');