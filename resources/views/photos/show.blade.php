 @extends('layouts.app')

 @section('content')
 

  <h3>{{$photo->title}}</h3>
  <p>{{$photo->description}}</p>
  <a href="../../storage/app/public/storage/photo/{{$photo->album_id}}" class="button">Retour à la galerie</a>
  <hr>
  <img src="/storage/photo/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
  <br><br>
  {!!Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Supprimer la photo', ['class' => 'button alert'])}}
  {!!Form::close()!!}
  
  {!!Form::open(['action' => ['PhotosController@update', $photo->id], 'method' => 'POST'])!!}
    {{Form::hidden('_method',  'POST')}}
    {{Form::submit('remplacer la photo', ['class' => 'button secondary'])}}
  {!!Form::close()!!}
  <hr>
  <small>Taille: {{$photo->size}} MO</small>
 
@endsection
