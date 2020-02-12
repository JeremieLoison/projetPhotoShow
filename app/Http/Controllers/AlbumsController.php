<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Album;
use App\Photo;



class AlbumsController extends Controller
{
    public function index(){
        $albums = Album::with('Photos')->get();
        return view('albums.index')->with('albums', $albums);
    }

    public function photos(){
        $albums = Album::with('Photos')->get();
        return view('layoutsAdmin.adminPhotos', compact($albums));
    }

    public function admGal(){
        $albums = Album::with('Photos')->get();
        return view::make('admGal')
               ->with('photos', $albums);
    }

  /*  public function create(){
        return view('layoutsAdmin.albums.create');
    }*/
     public function create(){
        return view('albums.create');
     }

    protected function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'cover_image' => 'image|max:1999'
        ]);
        // obtenir un fichier avec son extension
        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

        // Obtenir son extension
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        
        // Obtenir l'extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();

        // Créer un nouveau nom de fichier
        $filenameToStore = $filename.'_'.time().'.'.$extension;

        // Charger l'image
        $path= $request->file('cover_image')->storeAs('/public/album_covers', $filenameToStore);
    
        $album = new Album;
        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover_image = $filenameToStore;


        $album->save();

        return redirect('photos')->with('success', "L'album a bien été créé !");
    }

     public function show($id){
          $album = Album::with('Photos')->find($id);
          return view('albums/show')->with('album', $album);
        }
    
    public function destroy($id){
          $album = Album::find($id);
            if(Storage::delete('../storage/app/public/storage/album_covers/'.$album['cover_image'])){
                $album->delete();

            return redirect('/photos')->with('success', 'Votre photo est définitivement supprimé !');
            }
            else return redirect('/photos')->with('error', 'ERREUR DANS LA SUPRESSION');   
        }
        
         public function update(Request $request){
           $this->validate($request, [
          'title' => 'required',
          'photo' => 'image|max:1999'
          ]);
          // Obtenir le nom avec son extension
          $filenameWithExt = $request->file('photo')->getClientOriginalName();
        
          // Obtenir seulement le nom
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
          
          // Obtenir l'extension de l'image
          $extension = $request->file('photo')->getClientOriginalExtension();

          // Créer un nouveau nom à l'image: nom original + date de création + extension
          $filenameToStore = $filename.'_'.time().'.'.$extension;
          
          // Charger l'image
          $path = $request->file('photo')->storeAs('public/photos/'.$request->input('album_id'), $filenameToStore);
         
          // Creation de de l'album
          $photo = new Photo;
          $photo->album_id = $request->input('album_id');
          $photo->title = $request->input('title');
          $photo->description = $request->input('description');
          $photo->size = $request->file('photo')->getClientSize();
          $photo->photo = $filenameToStore;

          $photo->save();

          return redirect('/albums/'.$request->input('album_id'))->with('success', "La photo a bien été modifié !");
           
         }
}
