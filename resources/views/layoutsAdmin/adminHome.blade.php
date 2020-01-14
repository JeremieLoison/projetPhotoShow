@extends('layoutsAdmin/app')
<center>
    <h2>Accueil du portail d'administration</h2>
</center>
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
                Mise en place d'un historique des actions: 
                <ul>dernière ajout d'image,</ul>
                <ul>date,</ul>
                <ul>dernière connexion établis,</ul>
            </li>
            <li>
                Mise en avant de la dernière photo ajoutée
            </li>
            <li>
                Nombre de visite mensuel
            </li>
        </ol>
    </p>
</div>