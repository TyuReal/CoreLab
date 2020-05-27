<header>

    <div class="header-left">    

        <p><img src="./images/logo_32x32.ico" alt=" Лаборатория по ремонту ноутбуков и компьютеров"  align="left" hspace="10">
                     <h3>  Лаборатория по ремонту ноутбуков и компьютеров</h3>
                 </p> 

    </div>

    @if (Route::has('login'))
    <div class="header-right links" >
        @auth
        <a href="{{ url('/home') }}">Главная</a>
        @else
        <a href="{{ route('login') }}">Вход</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Регистрация</a>
        @endif
        @endauth
    </div>
    @endif

</header>
