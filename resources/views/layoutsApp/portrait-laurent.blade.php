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
            La photo a toujours été très présente chez moi. 
            Mon père me laissait prendre des photos quand j'avais 4 ans,
            et j'ai eu mon premier appareil à 6 ans, un appareil Pocket 110.
            Dès lors, la photo a été présente dans ma vie par intermittence, jusqu'à mes 16 ans.
            Je la pratique depuis avec assiduité. J'ai toujours aimé le paysage ainsi que la photo de rue,
            mais m'adonne plus désormais au portrait.
        </p>
    </div>
</div>

@endsection