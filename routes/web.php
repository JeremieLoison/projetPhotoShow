<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Mise en place des routes dans la barre de navigation

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
Route::get('galerie', function () {
    return view('layoutsApp.gallery-laurent');
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
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/

Route::get('index', function () {
    return view('layoutsAdmin.index');
})->name('index');

// AdminMenu = route du menu d'administration du site web
Route::get('admin', function () {
    return view('layoutsAdmin.adminMenu');
})->name('adminMenu');

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
     $albums = Album::with('Photo')->get();
    return view('layoutsAdmin.adminPhotos')->with('albums', $albums);
})->name('Photos');



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


// Create = route pour ajouter du contenu à la galerie
Route::get('create', function(){
    return view('layoutsAdmin.albums.create');
})->name('createGallery');

Route::get('create', function(){
    return view('layoutsAdmin.albums.create/{id}');
})->name('createGallery');

Route::get('showPhoto', function(){
    return view('layoutsAdmin.albums.show');
})->name('show');


Route::post('layoutsAdmin.albums.store', 'AlbumsController@store');


/*
Route::get('/', 'AlbumsController@admGal');
Route::get('/albums/admGal', 'AlbumsController@admGal');
Route::get('/albums/create', 'AlbumsController@create');
Route::get('/albums/{id}', 'AlbumsController@show');
Route::post('/albums/store', 'AlbumsController@store');

*/