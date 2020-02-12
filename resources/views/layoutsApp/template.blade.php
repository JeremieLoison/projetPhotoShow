<!-- view parents -> insertion du template general du site-->

<html>

<head>
    <!-- CSS Bootstrap 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    -->
    <!-- CSS Perso -->
    <link rel="stylesheet" href="../resources/css/layoutsApp.css">
    
    <!-- JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- insertion UnitGallery -->

</head>

<body>

    @section('sidebar')

    
    <div class="social-access">
        <a href="#">
            <img src="https://img.icons8.com/ios/50/FFFFFF/facebook-circled.png" class="social-style">

        </a>
        <a href="#">
            <img src="https://img.icons8.com/wired/50/FFFFFF/instagram-new.png" class="social-style">
        </a>
        <a href="#">
            <img src="https://img.icons8.com/android/50/FFFFFF/twitter.png" class="social-style">
        </a>
        <a href="#">
            <img src="https://img.icons8.com/ios-filled/50/FFFFFF/edit-chat-history.png" class="social-style">
        </a>
    </div>
    <!-- Titre -->
    <div class="header">
        <h1 class="header-title-1">Laurent Bénard</h1>
        <h2 class="header-title-2">Photographe</h2>

    </div>

    <!-- Navbar content -->
      <nav class="navbar-center">

        <a class="nav-btn" href="{{ route(('welcome')) }}">{{ __('Home') }}</a>


        <a class="nav-btn" href="{{ route(('portrait-laurent')) }}">{{ __('Portrait de Laurent Bénard') }}</a>


        <a class="nav-btn" href="{{ route(('gallery-laurent')) }}">{{ __('Galerie') }}</a>


        <a class="nav-btn" href="{{ route(('contact-laurent')) }}">{{ __('Contactez-moi') }}</a>

      </nav>


    @show

    <div class="container">
        @yield('content')
    </div>


    <footer>
        <div class="copiright">
            <p>Mise en place du footer / copiright / plan du site</p><br>
            <P> | Les photos sont la propriétés exclusives de Laurent Bénard.</p>
            <p>Merci de me contacter pour plus d'informations sur les droits d'exploitations.</p>
        </div>
        <div class="maps-site">
        </div>

    </footer>
</body>

</html>
