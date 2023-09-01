<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- tailwind -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}" />

    <title>Prueba técnica</title>
</head>

<body>
    <div class="container">
        <!-- barra navegación -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="{{route('clients.index')}}">
                <div class="home-container">
                    <img
                        id="home"
                        src="{{asset('/assets/images/home.png')}}"
                        alt="Home"
                    >
                </div>
            </a>
        </nav>

        <div class="nav-container">
            <!-- buscador -->
            <h2>Buscar clientes</h2>
            <x-search/>
        </div>

        {{ $slot }}

    </div>

    <footer>
        <div class="footer">
            María Daniela Wuerich, 2023.
        </div>
    </footer>
</body>

