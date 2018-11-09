<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
    <title>Mediacollege Amsterdam - @yield('title')</title>
</head>
<body>
<div class="container">
    <header>
        <h1>Mediacollege Amsterdam</h1>
        <h2 class="caps txt-red">@yield('page_title')</h2>
    </header>
    @section('navigation')
        NAVIGATION
    @show
    <main>
        @yield('content')
    </main>
        @section('footer')
        <footer>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-2">Opleidingen</div>
                <div class="col-xs-12 col-sm-6 col-md-2">Nieuwsbrief</div>
                <div class="col-xs-12 col-sm-6 col-md-2">Inloggen</div>
                <div class="col-xs-12 col-sm-6 col-md-2">Contact</div>
                <div class="col-xs-12 col-sm-12 col-md-2">Route</div>
            </div>
        </footer>
    @show
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>