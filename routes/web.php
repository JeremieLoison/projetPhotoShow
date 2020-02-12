<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| => insertion des routes 
/
/    1) Route vers l'application côté UTILISATEUR
/       => / WELCOME
        => / Portrait
        => / Galerie
        => / Contact

    2) Route vers l'application côté ADMINISTRATEUR
        => /
*/

// Mise en place des routes côté UTILISATEUR

use App\Http\Controllers\AlbumsController;
use App\Album;

Route::get('/', function () {
    return view('welcome');
});

// Navbar = route Portrait
Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');

// Navbar = route Portrait
Route::get('portrait', function () {
    return view('layoutsApp.portrait-laurent');
})->name('portrait-laurent');

// Navbar = route Galerie de Laurent
Route::get('galerie', function(){
    $data['albums'] = Album::with('Photos')->get();
    return view('layoutsApp.gallery-laurent',$data);
})->name('gallery-laurent');


// Navbar = route Formulaire de contact
Route::get('contact', function () {
    return view('layoutsApp.contact-laurent');
})->name('contact-laurent');




/*
|--------------------------------------------------------------------------
| ADMINISTRATION Web Routes 
|--------------------------------------------------------------------------
|
| 
*/
// AdminMenu = route du menu d'administration du site web
//Route::get('admin', function () {
//    return view('layoutsAdmin.adminMenu');
//})->name('adminMenu');

// Home 
Route::get('home', function () {
    return view('layoutsAdmin.adminHome');
})->name('home');

// Login
Route::get('login', function () {
    return view('layoutsAdmin.adminLogin');
})->name('login');

// Photos
Route::get('photos', function () {
     $data['albums'] = Album::with('Photos')->get();
    return view('layoutsAdmin.adminPhotos', $data);
})->name('adminPhotos');



// AdminGallery = route pour administrer la galerie
Route::get('admGal', function () {
    return view('layoutsAdmin.adminGallery');
})->name('adminGalerie');

// AdminParametre = route pour modifier les infos
Route::get('parametre', function () {
    return view('layoutsAdmin.adminParametre');
})->name('adminParametre');

// AdminPresentation= route pour modifier la présentation 
Route::get('maPresentation', function () {
    return view('layoutsAdmin.adminPresentation');
})->name('maPresentation');

// AdminAidee = route pour une FAQ
Route::get('aides', function () {
    return view('layoutsAdmin.adminAides');
})->name('aides');

// AdminIdee = route pour une FAQ
Route::get('ideeformulaire', function () {
    return view('layoutsAdmin.adminIdee');
})->name('ideeformulaire');


//Route admin gall

Route::get('/index', 'AlbumsController@index');
Route::get('albums/create', 'AlbumsController@create');
Route::get('/albums/show/{id}', 'AlbumsController@show');
Route::post('/albums/store', 'AlbumsController@store');
Route::delete('/albums/destroy/{id}', 'AlbumsController@destroy');

Route::get('/photos/show/{id}', 'PhotosController@show');
Route::get('/photos/create/{id}', 'PhotosController@create');
Route::post('/photos/store', 'PhotosController@store');
Route::delete('/photos/destroy/{id}', 'PhotosController@destroy');
