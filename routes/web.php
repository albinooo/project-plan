<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', [ProjectController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/project', [ProjectController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('project');

Route::delete('/project/{idpj}/delete', 'ProjectController@delete')->name('delete'); 

Route::get('/task', [TaskController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('task');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/detail',[TaskController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('detail');

Route::get('/add', [ProjectController::class, 'add'])->name('add');
Route::post('/add', [ProjectController::class, 'save']);
Route::post('', [ProjectController::class,''])->name('');

Route::get('/create', [TaskController::class, 'create'])->name('create');
Route::post('/create', [TaskController::class, 'save']);
Route::post('', [TaskController::class,''])->name('');

Route::get('/editpj/{idpj}', [ProjectController::class, 'edit'])->name('edit');
Route::post('/editpj/{idpj}', [ProjectController::class, 'update']);

require __DIR__.'/auth.php';