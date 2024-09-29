<?php

use App\Http\Controllers\HomeController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route::get('/bands', [HomeController::class, 'index'])->name('home');





