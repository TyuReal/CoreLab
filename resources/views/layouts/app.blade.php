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

            @include('css.welcome.header-css')
            @include('css.welcome.footer-css')

        </style>

    </head>
    <body>
        
        <!-- Header -->
        @include('includes.welcome.header')
<!--
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'CoReLab - Лаборатория по ремонту ноутбуков и компьютеров!!!') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
   
                            <ul class="navbar-nav mr-auto">

                        </ul>
                    </div>
                </div>
            </nav>
-->
            <main class="py-4">
                @yield('content')
            </main>
        </div>

        <!-- Footer -->
        @include('includes.welcome.footer')

    </body>
</html>
