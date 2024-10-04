<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Band;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Band;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function indexAlbums($bandId) {
        // Encontre a banda pelo ID
        $band = Band::findOrFail($bandId); // Isso vai lançar um erro se a banda não for encontrada

        // Busque os álbuns relacionados a essa banda
        $albums = $band->albums; // Usa a relação que você definiu na model Band

        // Chame a view correta para exibir os álbuns

        return view('layouts.show', compact('band', 'albums')); // A variável $band deve ser passada

    }

    public function store(Request $request, $bandId) {
        // Validação dos dados
        $validatedData = $request->validate([
            'album_name' => 'required|string|max:255',
        ]);

        // Encontrar a banda pela ID
        $band = Band::findOrFail($bandId);

        // Criar o álbum
        $album = new Album();
        $album->album_name = $validatedData['album_name'];
        $album->band_id = $band->id;
        $album->save();

        // Redirecionar de volta para a página dos álbuns da banda
        return redirect()->route('bands.albums', $bandId)->with('success', 'Álbum adicionado com sucesso!');
    }

}



