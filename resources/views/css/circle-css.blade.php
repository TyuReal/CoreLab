            .flex-center {
                position:       fixed;              /* Относительное позиционирование */
                left:           0px;                /* Прижимаем к нижнему краю */
                height:         80%;                /* Высота блока */
                width:          70%;                /* Ширина блока */
                display:        flex;               /* Расположение кольца */
                align-items:    center;             /* Расположение кольца */
                justify-content: center;            /* Расположение кольца */
            }

            .block {
                position:       absolute;           /* Позиционирование блока*/ 
                width:          110px;              /* Размер кружков */ 
                height:         110px;              /* Размер кружков */ 
                margin:         auto;               /* Отступы автоматически */
                transform-origin: 110% 26px;
                transform:      rotate(0deg);
            }
            .block:nth-child(2) {
               transform: rotate(0deg) translate(15em) rotate(0deg);
            }
            .block:nth-child(3) {
               transform: rotate(60deg) translate(15em) rotate(-60deg);
            }
            .block:nth-child(4) {
               transform: rotate(120deg) translate(15em) rotate(-120deg);
            }
            .block:nth-child(5) {
               transform: rotate(180deg) translate(15em) rotate(-180deg);
            }
            .block:nth-child(6) {
               transform: rotate(240deg) translate(15em) rotate(-240deg);
            }
            .block:nth-child(7) {
               transform: rotate(300deg) translate(15em) rotate(-300deg);
            }
            .block:nth-child(8) {
               transform: rotate(360deg) translate(15em) rotate(-360deg);
            }

            .square {
                background:     #389aed;            /* Цвет фона */ 
                width:          80px;               /* Ширина блока */ 
                height:         80px;               /* Высота блока */ 
                border-radius:  100%;               /* Радиус блока */ 
                vertical-align: middle;             /* Вертикальное расположение внутри блока */ 
            }
