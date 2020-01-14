@extends('layouts.app')

@section('content')
  @if(count($albums) > 0)
    <?php
      $colcount = count($albums);
      $i = 1;
    ?>
    <div id="albums">
        <div class="row text-center">
            @foreach($albums as $album)
              @if($i == $colcount)
                <div class="medium-4 column end">
                  <a href="/albums/{{$album->id}}">
                    <img class="thumbnail" src="storage/album_covers/{{$album->cover_image}}"
                    alt="{{$album->name}}">
                  </a>
                  <br>
                  <h4>{{$album->name}}</h4>
                  <br><br>
  {!!Form::open(['action' => ['PhotosController@destroy', $album->id], 'method' => 'POST'])!!}
    {{Form::hidden('_method',  'delete')}}
    {{Form::submit("Supprimer l'album", ['class' => 'button alert'])}}
  {!!Form::close()!!}
  <hr>
  <small>Taille: {{$album->created_at}}</small>
              @else
                <div class="medium-4 column">
                  <a href="/albums/{{$album->id}}">
                    <img class="thumbnail" src="storage/album_covers/{{$album->cover_image}}"
                    alt="{{$album->name}}">
                  </a>
                  <br>
                  <h4>{{$album->name}}</h4>
                  <br><br>
  {!!Form::open(['action' => ['AlbumsController@destroy', $album->id], 'method' => 'POST'])!!}
    {{Form::hidden('_method',  'delete')}}
    {{Form::submit("Supprimer l'album", ['class' => 'button alert'])}}
  {!!Form::close()!!}
  <hr>
  <small>Album créé le: {{$album->created_at}}</small>
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
    <p>Aucun albums à afficher !</p>
  @endif
@endsection