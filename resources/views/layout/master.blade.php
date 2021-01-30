<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('title')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lobster:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/9419b934fb.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">

        <!-- Bootstrap -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <link  rel="stylesheet" href="{{URL::to('css/style.css')}}"/>
        <style>
        body {
            font-family: 'Lobster';
        }
        </style>
    </head>
    <body>
        <header>
            @if(session('bgcolor') && session('color'))
            @php
             $bg = session('bgcolor');
             $font = session('color')
            @endphp
            <x-header :bg="$bg" :font="$font"/>
            @else
            <x-header bg="CAF0F8" font="0077B6"/>
            @endif
        </header>
        <main>
        @yield('content')
        </main>
        <footer>
            @if(session('bgcolor') && session('color'))
            @php
             $bg = session('bgcolor');
             $font = session('color')
            @endphp
            <x-footer :bg="$bg" :font="$font"/>
            @else
            <x-footer bg="CAF0F8" font="0077B6"/>
            @endif
        </footer>
    </body>
</html>
