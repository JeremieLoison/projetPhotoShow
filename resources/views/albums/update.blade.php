@extends('layouts.app')

@section('content')
<div class="grid-container">
    <h3>Modifier l'album</h3>
         <h1>{{$album->name}}</h1>
  <a class="button secondary" href="/">Retour</a>
  <a class="button" href="/photos/create/{{$album->id}}">Charger des photos dans l'album</a>
  
  <hr>

  @if(count($album->photos) > 0)
    <?php
      $colcount = count($album->photos);
      $i = 1;
    ?>
    <div id="photos">
        <div class="column text-center">
            @foreach($album->photos as $photo)
              @if($i == $colcount)
                <div class="large-flex-dir-column">
                  <a href="../photos/{{$photo->id}}">
                    <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}"
                    alt="{{$photo->title}}">
                  </a>
                  <br>
                  <h4>{{$photo->title}}</h4>
                  <a class="button alert" href="../photos/{{$photo->id}}">Supprimer la photo de l'album</a>
              @else
                <div class="large-flex-dir-column">
                  <a href="photos/{{$photo->id}}">
                    <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}"
                    alt="{{$photo->title}}">
                  </a>
                  <br>
                  <h4>{{$photo->title}}</h4>
                   <a class="button alert" href="../photos/{{$photo->id}}">Supprimer la photo de l'album</a>
              @endif
              @if($i % 3 == 0)
              </div> </div><div class="row text-center">
              @else
                </div>
              @endif
              <?php $i++; ?>
            @endforeach
        </div>
    </div>
  @else
    <p>Aucune photo à afficher !</p>
  @endif
        
        {!!Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
            {{Form::text('name','', ['placeholder' => "Nom de l'album"])}}
            {{Form::textarea('description','', ['placeholder' => "description de l'album..."])}}
            {{Form::file('cover_image')}}
            {{Form::submit('Envoyer')}}
        {!!Form::close()!!}
</div>
@endsection
