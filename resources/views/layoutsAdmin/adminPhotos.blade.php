@extends('layoutsAdmin/app')
@extends('layouts.app')

@section('content')
  @if(count($albums) > 0)
    <?php
      $colcount = count($albums);
      $i = 1;
    ?>
    
    <div class="row justify-content-center">
    <div id="albums">
        <div class="row text-center">
            @foreach($albums as $album)
              @if($i == $colcount)
                <div class="medium-4 column end">
                  <a href="albums/{{$album->id}}">
                    <img class="thumbnail" src="../storage/app/public/storage/album_covers/{{$album->cover_image}}"
                    alt="{{$album->name}}">
                  </a>
                  <br>
                  <h4>{{$album->name}}</h4>
                  <br><br>
  <small>Taille: {{$album->created_at}}</small>
  <br><br>
<br><br>
  {!!Form::open(['action' => ['PhotosController@destroy', $album->id], 'method' => 'POST'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Supprimer la photo', ['class' => 'button alert'])}}
  {!!Form::close()!!}

              @else
                <div class="medium-4 column">
                  <a href="albums/{{$album->id}}">
                    <img class="thumbnail" src="../storage/app/public/storage/album_covers/{{$album->cover_image}}"
                    alt="{{$album->name}}">
                  </a>
                  <br>
                  <h4>{{$album->name}}</h4>
                  <br><br>
  <small>Album créé le: {{$album->created_at}}</small>
  {!!Form::open(['action' => ['AlbumsController@destroy', $album->id], 'method' => 'POST'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Supprimer la photo', ['class' => 'button alert'])}}
  {!!Form::close()!!}
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
    </div>
  @else
    <p>Aucun albums à afficher !</p>
  @endif
 
@endsection