<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;

class BandsController extends Controller
{
    public function index() {
        $bands = Band::all();

    // Retorna a view 'layouts.index' com os dados das bandas armazenados na variável $bands
        return view('layouts.index', compact('bands'));
    }
}
