header { 
position:   fixed;              /* Относительное позиционирование */
top:        0px;                /* Прижимаем к верхнему краю */
height:     5%;                 /* Высота блока */
width:      100%;               /* Ширина блока */
background: #b3dbfd;            /* Фоновый цвет */
border:     1px inset black;    /* Параметры границы */
color:      black;              /* Цвет текста */
display:    block;
margin:     0 0 0 0;                              /* Поля вокруг текста */
padding:    0 0 0 0;
}

.header-left {
position:   relative;           /* Позиционирование */
left:       0px;
top:        0px;
width:      50%;                /* Ширина блока */
height:     100%;               /* Высота блока */
display:    inline-block;       /* Тип блока */
color:      black;              /* Цвет текста */
//background: gray;               /* Фоновый цвет */
//line-height: 3px;                                   /* Регулирует отступ сверху */

margin:     0 20px;             /* Поля вокруг текста */
padding:    0 20px;             /* Поля вокруг текста */
}


.header-right {
position: absolute;
right: 10px;
top: 10px;
}

.links > a {
color: #636b6f;
padding: 0 25px;
font-size: 13px;
font-weight: 600;
letter-spacing: .1rem;
text-decoration: none;
text-transform: uppercase;
}
