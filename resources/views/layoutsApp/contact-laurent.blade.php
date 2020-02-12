<!-- view child -> insertion du formulaire de contact-->
@extends('layoutsApp.template')


 <!-- CSS Perso -->
    <link rel="stylesheet" href="../resources/css/layoutsContactApp.css">
    
@section('sidebar')
@parent


@endsection

@section('content')

<div class="content-form">
    
    <form action="action_page.php" class="container-form">
    <h1>Contactez-moi</h1>
    <br>
        <label for="fname">Votre nom</label>
        <input type="text" id="fname" name="firstname" placeholder="Votre nom..">

        <label for="lname">Votre prénom</label>
        <input type="text" id="lname" name="lastname" placeholder="Votre prénom..">

        <label for="country">Catégories</label>
        <select id="country" name="country">
            <option value="australia">Informations</option>
            <option value="canada">Achat de photo</option>
            <option value="usa">Services de photographie</option>
        </select>

        <label for="subject">Sujet du message</label>
        <textarea id="subject" name="subject" placeholder="Ecrivez-votre message..." style="height:200px"></textarea>

        <input type="submit" value="Envoyer">

    </form>
</div>
@endsection