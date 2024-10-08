
<?php

use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BandsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home'])->middleware(['auth'])->name('home');

Route::get('/bands/create', [BandsController::class, 'create'])->name('create');

Route::post('/bands/create', [BandsController::class, 'store'])->name('bands.store');

Route::get('/index', [BandsController::class, 'index'])->name('index');

Route::get('/bands/{band}/albums', [AlbumsController::class, 'indexAlbums'])->name('bands.albums');

Route::get('/bands/{id}', [BandsController::class, 'show'])->name('bands.show');

Route::delete('/bands/{id}', [BandsController::class, 'destroy'])->name('bands.destroy');

Route::get('/dashboard', function () {
    return view('layouts.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
