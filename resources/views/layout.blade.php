<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Recipes</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- feather icons -->
        <script src="https://unpkg.com/feather-icons"></script>
    </head>
    <body>
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand navbar-brand--logo" href="#">Food<span>junky<span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item {{ Request::route()->getName() === 'recipes.index' ? 'active' : '' }}">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item {{ Request::route()->getName() === 'recipes.overview' ? 'active' : '' }}">
                      <a class="nav-link" href="{{ route('recipes.overview') }}">Recipes</a>
                    </li>
                    <li class="nav-item {{ Request::route()->getName() === 'contact.create' ? 'active' : '' }}">
                      <a class="nav-link" href="{{ route('contact.create') }}">Contact</a>
                    </li>
                  </ul>
                </div>
            </nav>
        </div>

        @yield('content')
        
        <div class="footer">
          <p>Fictitious website created by Pieter Vleminckx</p>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            feather.replace();
        </script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
