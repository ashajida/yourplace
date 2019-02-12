<!doctype html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Yourplace') }}</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <main>
        <body>
        <header>
            @include('partials.navigation')
            @if($data['show_hero'])
                @include('partials.hero')
            @endif
        </header>
            @yield('content')
            @include('partials.footer')
        </body>
    </main>
</html>
