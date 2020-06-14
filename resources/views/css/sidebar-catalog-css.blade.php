            .catalog { 
                position:           fixed;              /* Позиционирование */
                left :              0px;                /* Прижимаем к правому краю */
                top:                6%;                 /* Отступ сверху*/
                width:              20%;                /* Ширина блока */
                height:             80%;                /* Высота блока */
                background:         #b3dbfd;            /* Фоновый цвет */
                color:              black;              /* Цвет текста */
                border:             1px inset black;    /* Параметры границы */
                display:            inline-block;       /* Тип блока */
                padding:            10px 10px;          /* Отступ от границы блока внутренний */
                margin:             10px 10px;          /* Отступ от границы блока внешний */
                z-index:            1;                  /* Выводит на первый план */
            }
            
            .navbar ul {
                display:            none;
                background-color:   #5c90bc;
                position:           absolute;
                left:               100%;
                top:                0%;
            }
            
            .navbar, .navbar ul {
                margin:             0;
                padding:            0;
                list-style-type:    none;
            }
            
            .navbar {
                background-color:   #0a6cbf;            /* Цвет темно-синий */
                width:              80%;
            }
            
            .navbar li {
                position:           relative;
                height:             100%;
                min-width:          100%;
                border:             2px solid white;    /* Параметры границы */
            }
            
            .navbar li a {
                display:            block;
                padding:            6px;
                width:              80%;
                color:              #fff;
                text-decoration:    none;
                padding-left:       25px;
            }
            
            .navbar ul li { float: none; }
            .navbar li:hover { background-color: #5c90bc; }
            .navbar ul li:hover { background-color: blue; }
            .navbar li:hover ul { display: block; }
