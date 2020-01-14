<!-- Stored in resources/views/child.blade.php -->

@extends('layoutsApp.template')

@section('title', 'Portrait de Laurent Bénard')

@section('sidebar')
@parent


@endsection

@section('content')
<!--
    Corps du document -
    Insertion de la partie présentation de Laurent Bénard

    Dispositon :
    Photo de présentation sur le coté gauche, 
    Corps de texte sur la droite

 -->
<div id="content">
    <div class="elmt-body-img-left">
        <img src="../public/images/portrait/Autoportrait-laurent-benard.jpg" alt="Photo représentant Laurent Bénard" class="elmt-img-laurentb">
    </div>

    <div class="elmt-body-presentation-right">
        <h2 class="elmt-title-presentation">Photographe de passion.</h2>
        <br>
        <p><br>
            Figer l'instant, rendre immortel le temps; le temps d'un sourire, d'une grimace, d'une larme, d'un reflet dans les yeux.
            Capturer dans la boite un instant, dérouler cet seconde et la plonger dans un bain pour lui donner l'immortalité.
            </p>
            <p>Je suis Laurent Bénard, un photographe amoureux de l'instantanité, d'une prise de vue spontanée et unique.
            Mon envie, à travers le site web, est de vous faire découvrir mon univers et ma vision artistique.
            <br>
            Ma boite favorite est le IROLLEX, cet appareil ...
        </p>
    </div>
</div>

@endsection