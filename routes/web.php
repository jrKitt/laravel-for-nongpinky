<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabController;
use App\Http\Controllers\ProjectController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/lab', [LabController::class, 'index']);
    Route::get('/projects', [ProjectController::class, 'index']);
    Route::get('/projects/create', [ProjectController::class, 'showForm']);
    Route::post('/projects/create', [ProjectController::class, 'addProject']);
    Route::get('/projects/{id}', [ProjectController::class, 'editForm']);
    Route::post('/projects/{id}', [ProjectController::class, 'update']);
    Route::get('/projects/{id}/delete', [ProjectController::class, 'destroy'])->name("projects.destroy");
});

