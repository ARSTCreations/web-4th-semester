<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DepartmentsController;
use App\Http\Controllers\Api\JobsController;
use App\Http\Controllers\Api\EmployeesController;
use App\Http\Controllers\Api\FilesController;
use App\Http\Controllers\Api\AgendasController;
use App\Http\Controllers\Api\PresencesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('stable')->group(function(){
    Route::prefix('auth')->group(function(){
        Route::post('login', [AuthController::class, 'login']);
        Route::post('register', [AuthController::class, 'register']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::get('me', [AuthController::class, 'me']);
    });

    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('departments',DepartmentsController::class,[
            'as'=>'api'
        ]);
        Route::apiResource('jobs',JobsController::class,[
            'as'=>'api'
        ]);
        Route::apiResource('employees',EmployeesController::class,[
            'as'=>'api'
        ]);
        Route::apiResource('files',FilesController::class,[
            'as'=>'api'
        ]);
        Route::apiResource('agendas',AgendasController::class,[
            'as'=>'api'
        ]);
        Route::apiResource('presences',PresencesController::class,[
            'as'=>'api'
        ]);

        Route::get('/dashboard', [AuthController::class, 'getProfileDash'])->name('getProfileDash');
        Route::get('/profile', [AuthController::class, 'getProfile'])->name('getProfile');
        Route::get('/permohonan_surat', [AuthController::class, 'getSurat'])->name('getSurat');
        Route::get('/presensi', [AuthController::class, 'getPresensi'])->name('getPresensi');
        Route::get('/agenda', [AuthController::class, 'getAgenda'])->name('getAgenda');
        Route::get('/register', function () {
            return view('register');
        });
    });
});