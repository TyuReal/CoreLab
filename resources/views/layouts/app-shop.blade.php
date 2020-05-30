<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'CoReLab - Лаборатория по ремонту ноутбуков и компьютеров!') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>    
            
             html, body {
                background:     #fff;
                color:          #636b6f;
                height:         100vh;
                margin:         0;
                font-family:    'Nunito', sans-serif;
                font-weight:    200;
            }
           
            @include('css.header-css')
            @include('css.sidebar-search-css')
            @include('css.footer-css')

        </style>

    </head>
    <body>
        
        <!-- Header -->
        @include('includes.header')
        <!-- Sidebar Search -->
        @include('includes.sidebar-search')
        <!-- Footer -->
        @include('includes.footer')

    </body>
</html>
