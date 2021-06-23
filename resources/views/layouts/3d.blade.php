<!doctype html>
<html style="overflow:  hidden;" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        @if(Route::current()->getName() == 'products.nn101')
           {transform: scaleX(-1);}
        @endif
    </style>
</head>

<body>
    

        @yield('content')


</body>

</html>