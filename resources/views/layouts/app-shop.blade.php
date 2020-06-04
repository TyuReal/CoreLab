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
                background:     #f2f9ff;
                color:          #636b6f;
                height:         100vh;
                margin:         0;
                font-family:    'Nunito', sans-serif;
                font-weight:    200;
            }
           
            .goods {
                position:       fixed;              /* Фиксированное позиционирование */
                right:          0px;                /* Прижимаем к правому краю */
                top:            7%;                 /* Отступ сверху */
                height:         90%;                /* Высота блока */
                width:          77%;                /* Ширина блока */
                color:          #636b6f;            /* Цвет текста */
                margin:         0;                  /* Отступ от границы внешний*/
                overflow-y:     auto;               /* Добавляет боковую полосу прокрутки при необходимости */
            }
            
            .goodcard {
                position:       relative;           /* Относительное позиционирование */
                height:         100px;              /* Высота блока */
                width:          90%;                /* Ширина блока */
                background:     white;              /* Фоновый цвет */
                color:          #636b6f;            /* Цвет текста */
                margin:         20px;               /* Отступ от границы внешний*/
                padding:        20px;               /* Отступ от границы внутренний*/
                border:         2px inset black;    /* Параметры границы */         
            }
            
            .goodcard img {
                margin:         3px 20px 3px 3px;   /* Отступ от границы внешний*/
                width:          90px;               /* Высота картинки */
                height:         90px;               /* Ширина картинки */
            }    
            
            .price {
                position:       absolute;           /* Относительное позиционирование */
                right:          0px;                /* Прижимаем к правому краю */
                top:            0px;                /* Отступ сверху */
                height:         60px;               /* Высота блока */
                width:          140px;              /* Ширина блока */
                margin:         20px;               /* Отступ от границы внешний*/
                display:        inline-block;       /* Тип блока */   
                text-align:     right;              /* Выравнивание */
            }
            
            @include('css/header-css')
            @include('css.footer-css')
            @include('css.sidebar-catalog-css')

        </style>

    </head>
    <body>
        
        <!-- Header -->
        @include('includes.header')
        <!-- Sidebar Catalog -->
        @include('includes.sidebar-catalog')
        <!-- Footer -->
        @include('includes.footer')
        
        <div class = "goods">
            <div>
                Кнопки фильтрации и сортировки
            </div>
            
            @yield('content')
         </div>

    </body>
</html>
