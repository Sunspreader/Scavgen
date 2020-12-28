<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneratorController;
use App\Http\Controllers\Api\GeneratorController as ApiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [GeneratorController::class, 'generate'])->name('single');
Route::get('/team', [GeneratorController::class, 'generateTeam'])->name('team');
Route::get('/api/single', [ApiController::class, 'generate']);
Route::get('/api/team', [ApiController::class, 'generateTeam']);
