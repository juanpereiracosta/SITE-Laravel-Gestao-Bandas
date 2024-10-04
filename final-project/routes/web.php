
<?php

use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BandsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Suas rotas de gerenciamento de bandas e álbuns
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home'])->name('home');

// Rota para criar uma nova banda (GET)
Route::get('/bands/create', [BandsController::class, 'create'])->name('create');

// Rota para armazenar uma nova banda (POST)
Route::post('/bands/create', [BandsController::class, 'store'])->name('bands.store');

// Rota para exibir a lista de bandas
Route::get('/index', [BandsController::class, 'index'])->name('index');

// Rota para exibir álbuns de uma banda específica
Route::get('/bands/{band}/albums', [AlbumsController::class, 'indexAlbums'])->name('bands.albums');

// Rota para mostrar detalhes de uma banda específica
Route::get('/bands/{id}', [BandsController::class, 'show'])->name('bands.show');

// Rota para exibir álbuns (GET)
Route::get('/albums', [AlbumsController::class, 'albums'])->name('albums');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
