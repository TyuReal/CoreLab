@extends('layouts.app-shop')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" align="center">

                <?php

                use GuzzleHttp\Client;

                $client = new Client([
                    // Базовый URI используется с относительными запросами
                    'base_uri' => 'http://spkterminal/unf_fisenko/hs/CL_Goods/',
                    // Вы можете установить любое количество параметров запроса по умолчанию.
                    'timeout' => 2.0,
                    'auth' => ['Даньковский Виталий', '503515']
                ]);

                $response = $client->request('POST', 'GetItems', [
                    // Вы можете установить любое количество параметров запроса.
                    'json' => [
 //                       'GoodArticle' => 'SY-06',
    //                    'GoodArticle' => 'art-01',
//                        'GoodName' => 'Тест',
                        'GoodCategory' => 'Товары'
                    ]
                ]);

                echo $response->getBody();
                ?>

            </div>
        </div>
    </div>
</div>
@endsection


