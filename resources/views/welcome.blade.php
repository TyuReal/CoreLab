<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'CoReLab - Лаборатория по ремонту ноутбуков и компьютеров!') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            
            html, body {
                background:     #f2f9ff;
                color:          #636b6f;
                height:         100vh;
                margin:         0;
                font-family:    'Nunito', sans-serif;
                font-weight:    200;
            }

            @include('css.header-css')
            @include('css.circle-css')
            @include('css.sidebar-address-css') 
            @include('css.footer-css')

        </style>

    </head>

    <body>

        <!-- Header -->
        @include('includes.header')
        <!-- Main -->
        @include('includes.circle')
        <!-- Sidebar Address-->
        @include('includes.sidebar-address')
        <!-- Footer -->
        @include('includes.footer')

    </body>

</html>
