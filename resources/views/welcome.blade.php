<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="jumbotron">
            <h1 class="display-4">Welcome</h1>
            <p class="lead">This is a dummy site.</p>
            <hr class="my-4">
            @if (Route::has('login'))
                @auth
                    <p>Welcome back</p>
                @else
                    <p>Please login</p>
                @endauth
            @endif
            <p class="lead">
            @if (Route::has('login'))
                @auth
                    <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button" href="{{ url('/home') }}">Home</a>
                @else
                    <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button" href="{{ route('login') }}">Login</a>
                @endauth
            @endif
            </p>
        </div>
    </body>
</html>
