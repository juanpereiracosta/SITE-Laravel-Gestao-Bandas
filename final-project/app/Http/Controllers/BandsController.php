<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\Album;
use Illuminate\Http\Request;

class BandsController extends Controller
{
    public function index() {
        $bands = Band::withCount('albums')->get();
        return view('layouts.index', compact('bands'));
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'photo' => 'nullable|image',
        'album_name' => 'required|string|max:255',
        'album_photo' => 'nullable|image', 
    ]);

    $band = new Band();
    $band->name = $validatedData['name'];

    if ($request->hasFile('photo')) {
        $path = $request->file('photo')->store('photos', 'public');
        $band->photo = $path;
    }

    $band->save();

    if ($validatedData['album_name']) {
        $album = new Album();
        $album->album_name = $validatedData['album_name'];
        $album->band_id = $band->id;

        if ($request->hasFile('album_photo')) {
            $albumPath = $request->file('album_photo')->store('album_photos', 'public');
            $album->album_photo = $albumPath;
        }

        $album->save();
    }

    return redirect()->route('home')->with('success', 'Banda e álbum adicionados com sucesso!');
}



    public function create() {
        return view('layouts.create');
    }


    public function show($id) {

        $band = Band::find($id);

        if (!$band) {
            return redirect()->route('index')->with('error', 'Banda não encontrada.');
        }

        $albums = $band->albums;

        return view('layouts.show', compact('band', 'albums'));
    }

    public function destroy($id)
{
    $band = Band::findOrFail($id);
    $band->delete();

    return redirect()->route('index')->with('success', 'Banda excluída com sucesso!');
}

}
