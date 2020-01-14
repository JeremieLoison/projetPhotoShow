<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function create($album_id){
        return view('photos.create')->with('album_id', $album_id);
    }

    public function store(Request $request){
        $this->validate($request, [
            'file_name' => 'required',
            'photo' => 'image|max:1999'
        ]);
        // obtenir un fichier avec son extension
        $filenameWithExt = $request->file('photo')->getClientOriginalName();

        // Obtenir son extension
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        // Obtenir l'extension
        $extension = $request->file('photo')->getClientOriginalExtension();

        // Créer un nouveau nom de fichier
        $filenameToStore = $filename . '_' . time() . '.' . $extension;

        // Charger l'image
        $path = $request->file('photo')->storeAs('public/storage/photos/' .$request->input('album_id'), $filenameToStore);
        
        $photo = new Photo;
        $photo->album_id = $request->input('album_id');
        $photo->title = $request->input('file_name');
        $photo->description = $request->input('description');
        $photo->size = $request->file('photo')->getClientSize();
        $photo->photo = $filenameToStore;


        $photo->save();

        return redirect('admGal/'.$request->input('album_id'))->with('success', $photo->title.  " Ajouté à la galerie avec succès !");

    }
}
