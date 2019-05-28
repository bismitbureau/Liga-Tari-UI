<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description" content="Description of the page">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <!-- Foundation Zurb CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('css/vendor/foundation.min.css') }}"> -->
    <!-- Materialize CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('css/vendor/materialize.min.css') }}"> -->
    <!-- Flat UI CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('css/vendor/flat-ui.min.css') }}"> -->
    <!-- Fontawesome CSS
        <link rel="stylesheet" href="{{ asset('css/vendor/all.min.css') }}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/style.css') }}">
    <title>Liga Tari Krida Budaya @yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('img/ligtar logo.png') }}">


</head>

<body>

    @include('layout/_nav')

    @yield('content')

    @include('layout/_footer')

    @yield('extrajs')


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>


</html>
