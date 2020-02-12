<!-- Stored in resources/views/child.blade.php -->

@extends('layoutsApp.template')
<link rel="stylesheet" href="css/layoutsGalleryApp.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


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
                  <a href="/albums/show/{{$album->id}}">
                    <img class="thumbnail" src="../storage/app/public/storage/album_covers/{{$album->cover_image}}"
                    alt="{{$album->name}}">
                  </a>
                  <br>
                  <h4>{{$album->name}}</h4>
                  <br><br>
 
  <hr>
  <small>Taille: {{$album->created_at}}</small>
              @else
                <div class="medium-4 column">
                  <a href="/albums/show/{{$album->id}}">
                    <img class="thumbnail" src="public/album_covers/{{$album->cover_image}}"
                    alt="{{$album->name}}">
                  </a>
                  <br>
                  <h4>{{$album->name}}</h4>
                  <br><br>
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