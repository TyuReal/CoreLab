<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CoReLab - Лаборатория по ремонту ноутбуков и компьютеров</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

            @include('css.welcome.header-css')
            @include('css.welcome.main-css')
            @include('css.welcome.sidebar-css') 
            @include('css.welcome.footer-css')

        </style>

    </head>

    <body>

        <!-- Header -->
        @include('includes.welcome.header')
        <!-- Main -->
        @include('includes.welcome.main')
        <!-- Sidebar -->
        @include('includes.welcome.sidebar')
        <!-- Footer -->
        @include('includes.welcome.footer')

    </body>

</html>
