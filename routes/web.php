<?php

use Illuminate\Support\Facades\Route;

use App\Models\Article; 
use App\Models\Club;
use App\Models\Album;
use App\Models\ContactMessage;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ArticleController; 
use App\Http\Controllers\PublicArticleController; 
use App\Http\Controllers\Admin\ClubController;
use App\Http\Controllers\PublicClubController;
use App\Http\Controllers\Admin\AlbumController; 
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\BureauMemberController; 
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\PublicGalleryController;
use App\Http\Controllers\PublicContactController;
use App\Http\Controllers\PublicBureauController;
Route::get('/', function () {
    return view('index');
});

Route::get('/clubs', [PublicClubController::class, 'index'])->name('clubs.index');
Route::get('/actualites', [PublicArticleController::class, 'index'])->name('articles.index');
Route::get('/actualites/{slug}', [PublicArticleController::class, 'show'])->name('articles.show');
Route::get('/galerie', [PublicGalleryController::class, 'index'])->name('gallery.index');
Route::get('/galerie/{slug}', [PublicGalleryController::class, 'show'])->name('gallery.show');
Route::get('/contact', [PublicContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [PublicContactController::class, 'store'])->name('contact.store');
Route::get('/federation/bureau', [App\Http\Controllers\PublicBureauController::class, 'index'])->name('bureau.index');
Route::get('/a-propos', function () {
    return view('public.a-propos');
})->name('about');
Route::get('/mission', function () {
    return view('public.mission');
})->name('mission');
Route::get('/disciplines', function () {
    return view('public.disciplines');
})->name('disciplines');
Route::get('/dashboard', function () {
    // On récupère les statistiques
    $stats = [
        'articles' => Article::count(),
        'clubs' => Club::count(),
        'albums' => Album::count(),
        'unread_messages' => ContactMessage::where('is_read', false)->count(),
    ];

    // On récupère les derniers messages non lus pour l'aperçu
    $latestMessages = ContactMessage::where('is_read', false)
                                    ->latest()
                                    ->take(5)
                                    ->get();

    return view('dashboard', [
        'stats' => $stats,
        'latestMessages' => $latestMessages
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('articles', ArticleController::class);
    Route::resource('clubs', ClubController::class);
    Route::resource('albums', AlbumController::class);
    Route::resource('photos', PhotoController::class); 
    Route::get('/messages', [ContactMessageController::class, 'index'])->name('messages.index');
    Route::get('/messages/{message}', [ContactMessageController::class, 'show'])->name('messages.show');
    Route::delete('/messages/{message}', [ContactMessageController::class, 'destroy'])->name('messages.destroy');
    Route::resource('bureau-members', BureauMemberController::class)->names('bureau.members');
});

require __DIR__.'/auth.php';
