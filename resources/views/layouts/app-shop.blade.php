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

            @include('css.shop.header-css')
            @include('css.shop.footer-css')
            @include('css.shop.main-css')
            @include('css.shop.sidebar-search-css')

        </style>

    </head>
    <body>

        <!-- Header -->
        @include('includes.shop.header')
        <!-- Sidebar Search -->
        @include('includes.shop.sidebar-search')
 
<!--        
        <div id="main-products">

            <main class="cards">
                @yield('content')
            </main>
        </div>
-->
        
        <!-- Footer -->
        @include('includes.shop.footer')

    </body>
</html>
