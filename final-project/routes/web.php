<?php

use App\Http\Controllers\AlbumsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BandsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/index', [BandsController::class, 'index'])->name('index');
Route::post('/bands/create', [BandsController::class, 'create'])->name('create');
Route::get('/bands', [BandsController::class, 'store'])->name('bands.store');
Route::get('/albums', [AlbumsController::class, 'albums'])->name('albums');
Route::get('/bands/{band}/albums', [AlbumsController::class, 'indexAlbums'])->name('bands.albums');
Route::get('/bands/{id}', [BandsController::class, 'show'])->name('bands.show');

