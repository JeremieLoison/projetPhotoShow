<h1>Gestion de la galerie</h1>
{!!Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
{{Form::text('name', '',['placeholder' => 'Nom de la galerie'])}}
{{Form::text('description','',['placeholder' => 'Une description sommaire...'])}}
{{Form::file('cover_image')}}
{{Form::submit('Enregistrer')}}
{!! Form::close() !!}