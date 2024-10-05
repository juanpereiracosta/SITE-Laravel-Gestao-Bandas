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

        $band = Band::findOrFail($bandId);


        $albums = $band->albums;

        return view('layouts.show', compact('band', 'albums'));
    }

    public function store(Request $request, $bandId) {

        $validatedData = $request->validate([
            'album_name' => 'required|string|max:255',
        ]);


        $band = Band::findOrFail($bandId);


        $album = new Album();
        $album->album_name = $validatedData['album_name'];
        $album->band_id = $band->id;
        $album->save();

        return redirect()->route('bands.albums', $bandId)->with('success', 'Álbum adicionado com sucesso!');
    }

}



