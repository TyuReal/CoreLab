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
                background:     #f2f9ff;                /* Цвет фона */
                color:          #636b6f;                /* Цвет текста */
                margin:         0;                      /* Поля внешние по умолчанию */
                font-family:    'Nunito', sans-serif;   /* Шрифт по умолчанию */
                font-weight:    200;                    /* Ширина шрифта*/
            }
            
            .mycontent {
                position:       absolute;               /* Относительное позиционирование */
                top:            10%;                    /* Отступ сверху*/
                left:           10%;                    /* Отступ слева */
                height:         80%;                    /* Высота блока */
                width:          80%;                    /* Ширина блока */
                display:        flex;                   /* Тип блока */
                align-items:    center;                 /* Вертикальное центрирование содержимого */
                background:     white;                  /* Цвет фона */
                 
            }
            
            #center { 
                text-align:     center;                 /* Выравнивание текста по центру */
                margin:         auto;                   /* Выравнивание текстового блока по центру */
            }


            @include('css.header-css')
            @include('css.footer-css')

        </style>

    </head>

    <body>

        <!-- Header -->
        @include('includes.header')

        <div class='mycontent'>
            @yield('content')
        </div>
        
        <!-- Footer -->
        @include('includes.footer')

    </body>

</html>
