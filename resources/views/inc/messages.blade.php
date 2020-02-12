@if(count($errors) > 0)
  @foreach($errors->all() as $error)
    <div class="col align-self-center">
      <div class="callout alert">
      <center>
        <h3>
       {{$error}}
        </h3>
      </center>
      </div>
   </div>
  @endforeach
@endif

@if(session('success'))
    <div class="col align-self-center">
      <div class="callout success">
      <center>
        <h3>
       {{session('success')}}
        </h3>
      </center>
      </div>
    </div>
@endif

@if(session('error'))
    <div class="col align-self-center">
      <div class="callout alert">
      <center>
        <h3>
       {{session('error')}}
        </h3>
      </center>
      </div>
    </div>
@endif