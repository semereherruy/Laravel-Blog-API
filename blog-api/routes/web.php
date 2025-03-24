<?php

use App\Http\Controllers\WebPostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Redirect unauthenticated users to login
Route::get('/', function () {
    return Auth::check() ? redirect()->route('dashboard') : redirect()->route('login');
});

// Dashboard (only for authenticated users)
Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Authentication Routes
Auth::routes();

// Blog Routes
Route::get('/blogs', [WebPostController::class, 'index'])->name('blogs.index');
Route::middleware('auth')->group(function () {
    Route::get('/blogs/create', [WebPostController::class, 'create'])->name('blogs.create');
    Route::post('/blogs', [WebPostController::class, 'store'])->name('blogs.store');
});

// Edit a blog
Route::get('/blogs/{blog}/edit', [WebPostController::class, 'edit'])->name('blogs.edit');
Route::put('/blogs/{blog}', [WebPostController::class, 'update'])->name('blogs.update');

// Delete a blog
Route::delete('/blogs/{blog}', [WebPostController::class, 'destroy'])->name('blogs.destroy');
