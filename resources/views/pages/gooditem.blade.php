@extends('shop-framework')

@section('content')

        <div>

            @if ($param_Photo != "Не заполнено") 
            <img src='data:image/gif;base64,{{$param_Photo}}' height='300px' width='300px' align='left'>
            @else 
            <img src='/images/no_picture.png' align='left'>
            @endif    

            <br><br><h2> {{ $param_Name }} </h2>

            <div class='price'>
                <big><b>{{ $param_Price }} руб.</b></big>
            </div>

        </div>

        <div class='description'>
            <b> Описание: </b><br><br>
            {{ $param_Description }}
        </div>

@endsection