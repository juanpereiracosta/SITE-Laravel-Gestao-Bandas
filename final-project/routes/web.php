<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BandsController;
use Illuminate\Routing\Route as RoutingRoute;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/index', [BandsController::class, 'index'])->name('index');

Route::get('/bands/create', [BandsController::class, 'create'])->name('create');

Route::post('/bands', [BandsController::class, 'store'])->name('bands.store');





