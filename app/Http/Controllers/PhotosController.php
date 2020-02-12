<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Photo;

class PhotosController extends Controller
{
    public function create($album_id){
        return view('photos.create')->with('album_id', $album_id);
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
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
        $path = $request->file('photo')->storeAs('../storage/app/public/storage/photos/' .$request->input('album_id'), $filenameToStore);
        
        $photo = new Photo;
        $photo->album_id = $request->input('album_id');
        $photo->title = $request->input('title');
        $photo->description = $request->input('description');
        $photo->size = $request->file('photo')->getClientSize();
        $photo->photo = $filenameToStore;


        $photo->save();

        return redirect('/albums/'.$request->input('album_id'))->with('success', $photo->title.  "Album créé avec succès !");

    }

      public function show($id){
          $photo = Photo::find($id);
          return view('photos.show')->with('photos', $photo);
        }
    

    public function destroy($id){
          $photo = Photo::find($id);

            if(storage::delete('/public/storage/photos/'.$photo['album_id'].'/'.$photo['photo'])){
                $photo->delete();

            return redirect('/')->with('success', 'Votre photo est définitivement supprimé !');
            }
            else return redirect('/')->with('error', 'ERREUR DANS LA SUPRESSION');
        }
}
