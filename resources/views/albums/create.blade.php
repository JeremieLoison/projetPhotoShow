@extends('layoutsAdmin/app')

@section('content')

<div class="grid-container">
    <h3>Créer un album</h3>
        
        {!!Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
            {{Form::text('name','', ['placeholder' => "Nom de l'album"])}}
            {{Form::textarea('description','', ['placeholder' => "description de l'album..."])}}
            {{Form::file('cover_image')}}
            {{Form::submit('Envoyer')}}
        {!!Form::close()!!}
</div>
@endsection
