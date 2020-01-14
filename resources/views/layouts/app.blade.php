<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Albums</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.6.0/css/foundation.css">
</head>

<body>
    @include('inc.topbar')
    <br>
    <div class="row">
        @include('inc.messages')
        @yield('content')
    </div>

</body>

</html>