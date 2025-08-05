<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ArticleController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicArticleController; 
use App\Http\Controllers\Admin\ClubController;
use App\Http\Controllers\PublicClubController;

Route::get('/', function () {
    return view('index');
});

Route::get('/clubs', [PublicClubController::class, 'index'])->name('clubs.index');
Route::get('/actualites', [PublicArticleController::class, 'index'])->name('articles.index');
Route::get('/actualites/{slug}', [PublicArticleController::class, 'show'])->name('articles.show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('articles', ArticleController::class);
    Route::resource('clubs', ClubController::class); // <-- Ajoutez cette ligne
});

require __DIR__.'/auth.php';
