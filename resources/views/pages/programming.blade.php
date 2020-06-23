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

            html, body {
                background:     #f2f9ff;
                color:          #636b6f;
                height:         100vh;
                margin:         0;
                font-family:    'Nunito', sans-serif;
                font-weight:    200;
            }
            
            .onlytext {
                position:       relative;           /* Относительное позиционирование */
                top:            30%;                /* Отступ сверху*/
                left:           30%;                /* Отступ слева */
                height:         40%;                /* Высота блока */
                width:          40%;                /* Ширина блока */
                display:        flex;               /* Тип блока */
                align-items:    center;             /* Вертикальное центрирование содержимого */
                background:     white;              /* Цвет фона */
                 
            }
            
            #center { 
                text-align:     center;             /* Выравнивание текста по центру */
                margin:         auto;               /* Выравнивание текстового блока по центру */
            }
 
            @include('css.header-css')
            @include('css.footer-css')

        </style>
        
    </head>

    <body>

        <!-- Header -->
        @include('includes.header')
        
        <div class='onlytext'>
        <div id='center'>
            
            <h2>
            Когда нибудь, возможно скоро <br>
            Мы будем заниматься разработкой сайтов
            </h2>

        </div>
        </div>
        
        <!-- Footer -->
        @include('includes.footer')

    </body>

</html>
