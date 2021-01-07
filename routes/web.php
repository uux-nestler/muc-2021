<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramsController;

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

Route::redirect('/', '/programs');

Route::view('/overview', 'overview')->name('overview');
Route::view('/misc', 'misc')->name('misc');

Route::get('/programs', [ProgramsController::class, 'index'])->name('programs');
Route::view('/quasar', 'quasar');


Route::get('/programs/add', [ProgramsController::class, 'add']);
Route::post('/programs/create', [ProgramsController::class, 'store']);
Route::get('/programs/{id}', [ProgramsController::class, 'show']);
Route::get('/programs/{id}/edit', [ProgramsController::class, 'edit']);
Route::post('/programs/{id}/update', [ProgramsController::class, 'update']);
Route::get('/programs/{id}/delete', [ProgramsController::class, 'destroy']);
