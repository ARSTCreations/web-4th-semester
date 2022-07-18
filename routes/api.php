<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DepartmentsController;
use App\Http\Controllers\Api\JobsController;
use App\Http\Controllers\Api\EmployeesController;
use App\Http\Controllers\Api\FilesController;
use App\Http\Controllers\Api\AgendasController;

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

        Route::get('/dashboard', function () {
            return view('dashboard');
        });
        Route::get('/profile', function () {
            return view('profile');
        });
        Route::get('/permohonan_surat', function () {
            return view('permohonan_surat');
        });
        Route::get('/presensi', function () {
            return view('presensi');
        });
        Route::get('/agenda', function () {
            return view('agenda');
        });
        Route::get('/register', function () {
            return view('register');
        });
    });
});