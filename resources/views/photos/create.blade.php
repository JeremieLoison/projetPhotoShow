@extends('layouts.app')

@section('content')
<div class="grid-container">
    <h3>Insérer des photos à l'album</h3>
        
        {!!Form::open(['action' => 'PhotosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
            {{Form::text('title','', ['placeholder' => "Titre de la photo"])}}
            {{Form::textarea('description','', ['placeholder' => "description de la photo"])}}
            {{Form::hidden('album_id', $album_id)}}
            {{Form::file('photo')}}
            {{Form::submit('Envoyer')}}
        {!!Form::close()!!}
</div>
@endsection
