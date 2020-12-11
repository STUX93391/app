<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>App</title>


        <!-- Styles -->
            <link rel="stylesheet" href="{{ asset('css/bs.css') }}">

    </head>
    <body class="">
        <div class="container text-center text-info">
            <div class="row">
                <div class="col-sm-4"><header><h1>App</h1></header></div>
            </div>
            <div class="row">
                <div calss="col-sm-4">
                    @if (Route::has('login'))
                        <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </body>
</html>
