@extends('layoutsAdmin/app')
@extends('layoutsAdmin/inc/messages')

<style>
    .content-app {
        display: flex;
        justify-content: center;
        color: red;
        border: 3px solid yellow;
    }
</style>

<div class="content-app">
    <p>
        <ol>
            <li>
                Mise en place des actions:
                <ul>Affichage des albums créés,</ul>
                <ol>Ajouter un nouvel album contenant:
                    <li>Le nom de la galerie</li>
                    <li>Une description</li>
                    <li>Une photo de couverture</li>
                    <li>Les photos à ajouter</li>
                </ol>
            </li>
            <li>
                Permettre la suppression d'un album et les photos descendantes
            </li>
            <ol>
                Modifier un album :
                <li>ajouter de nouvelles photos,</li>
                <li>supprimer des photos.</li>
                <li>Activer (1) ou désactiver (0) l'affichage des photos ou d'un album</li>
            </ol>
        </ol>
</div>

@yield('content')
<div class="container">
    <div class="row">
        <div class="col align-self-start">
            <div class="callout success">
                {{session('success')}}
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col align-self-start">
            <div class="callout success">
                @extends('layoutsAdmin.albums.create')
            </div>
        </div>
    </div>
</div>
