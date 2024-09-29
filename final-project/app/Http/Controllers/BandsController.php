<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;

class BandsController extends Controller
{
public function index() {
    // Busca todas as bandas e conta os álbuns relacionados
    $bands = Band::withCount('albums')->get();

    // Retorna a view 'layouts.index' com os dados das bandas armazenados na variável $bands
    return view('layouts.index', compact('bands'));
}

public function store(Request $request) {
    $request->validate([
        'name'=> 'required|string|max:255',
        'photo'=> 'required'
    ]);

    if ($request->hasFile('photo')) {
        $path = $request->file('photo')->store('images', 'public');
    }

        // Criar nova banda
        // À esquerda são as chaves do array que representam os nomes das colunas da tabela
        Band::create([
            'name' => $request->name,
            'photo' => $path,
        ]);

        // Redirecionar para a lista de bandas com uma mensagem de sucesso
    return redirect()->route('index')->with('success', 'Banda adicionada com sucesso!');
}


    public function create() {

    // Retorna a view 'layouts.create' com o formulário para o usuário adicionar uma nova banda
        return view('layouts.create');
    }
}
