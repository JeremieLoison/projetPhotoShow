@extends('layouts.app')


@section('content')
  
@section('content')
  @if(count($photo) > 0)
    <?php
      $colcount = count($photo);
      $i = 1;
    ?>
    <div id="albums">
        <div class="row text-center">
            @foreach($photo as $photo)
              @if($i == $colcount)
                <div class="medium-4 column end">
                  <a href="/photos/show/{{$photo->id}}">
                    <img class="thumbnail" src="../public/storage/album_covers/{{$photo->title}}"
                    alt="{{$photo->description}}">
                  </a>
                  <br>
                  <h4>{{$photo->title}}</h4>
                  <br><br>
  {!!Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST'])!!}
    {{Form::hidden('_method',  'delete')}}
    {{Form::submit("Supprimer l'album", ['class' => 'button alert'])}}
  {!!Form::close()!!}
  <hr>
  <small>Taille: {{$photo->created_at}}</small>
              @else
                <div class="medium-4 column">
                  <a href="/{{$photo->id}}">
                    <img class="thumbnail" src="../storage/app/public/storage/album_covers/{{$photo->title}}"
                    alt="{{$photo->title}}">
                  </a>
                  <br>
                  <h4>{{$photo->title}}</h4>
                  <br><br>
  {!!Form::open(['action' => ['AlbumsController@destroy', $title->id], 'method' => 'POST'])!!}
    {{Form::hidden('_method',  'delete')}}
    {{Form::submit("Supprimer l'album", ['class' => 'button alert'])}}
  {!!Form::close()!!}
  <hr>
  <small>Photo créé le: {{$photo->created_at}}</small>
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
    <p>Aucune photos à afficher !</p>
  @endif
   
@endsection
