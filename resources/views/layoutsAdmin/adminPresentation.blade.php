@extends('layoutsAdmin/app')
<center>
    <h2>Personnaliser la présentation</h2>
</center>
<style>
    .content-app {
        display: flex;
        justify-content: center;
        color: red;
        border: 3px solid yellow;
    }

    .content-p {
        display: flexbox;
        font-style: oblique;
        font-weight: 400;
        justify-content: center;
        color:teal;
        border: 1px solid wheat;
    }
</style>
<div class="content-app">
    <p>
    
        Permettre la modification de la présention inséré sur le site ainsi que la modification de la photo.
    </p>   
</div>
    <p class="content-p">
        @php
        $infoBiographie=
            "La photo a toujours été très présente dans chez moi. 
            Mon père me laissait prendre des photos quand j'avais 4 ans,
            et j'ai eu mon premier appareil à 6 ans, un appareil Pocket 110.
            Dès lors, la photo a été présente dans ma vie par intermittence, jusqu'à mes 16 ans.
            Je la pratique depuis avec assiduité. J'ai toujours aimé le paysage ainsi que la photo de rue,
            mais m'adonne plus désormais au portrait.";
            echo $infoBiographie;
        @endphp
    </p>