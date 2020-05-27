html, body {
background-color: #fff;
color: #636b6f;
//color: green;
font-family: 'Nunito', sans-serif;
font-weight: 200;
height: 100vh;
margin: 0;
}

.full-height {
height: 100vh;
}

.flex-center {
position:   fixed;                                  /* Относительное позиционирование */
left:       0px;                                    /* Прижимаем к нижнему краю */
height:     80%;                                    /* Высота блока */
width:      70%;                                    /* Ширина блока */

align-items: center;
display: flex;
justify-content: center;
}

.position-ref {
position: relative;
}

.block {
position: absolute;
// border: 0px dashed black;
width: 110px;
height: 110px;
margin: auto;
transform-origin: 110% 26px;
transform: rotate(0deg);
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
background: #389aed;
//  border: 1px solid black;
width: 80px;
height: 80px;
border-radius: 100%;
vertical-align: middle;
}
