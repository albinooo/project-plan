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

// Rute untuk halaman beranda
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Rute-rute terkait dashboard
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [ProjectController::class, 'index'])->name('dashboard');
});

// Rute Project
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::delete('/projects/{idpj}/delete', [ProjectController::class, 'delete'])->name('projects.delete');
    Route::get('/projects/add', [ProjectController::class, 'add'])->name('projects.add');
    Route::post('/projects/save', [ProjectController::class, 'save'])->name('projects.save');
    Route::get('/projects/edit/{idpj}', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::post('/projects/update/{idpj}', [ProjectController::class, 'update'])->name('projects.update');
});

// Rute Tasks
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/tasks/save', [TaskController::class, 'save'])->name('tasks.save');
});

// Rute profil pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rute detail (misalnya detail tugas) 
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/detail', [TaskController::class, 'detail'])->name('detail');
});

// Memuat rute otentikasi
require __DIR__.'/auth.php';
