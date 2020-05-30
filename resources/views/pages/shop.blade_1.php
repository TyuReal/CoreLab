@extends('layouts.app-shop')

@section('content')

<?php
/*
    use GuzzleHttp\Client;

    // Создаем основу запроса к 1С
    $client = new Client([
        // Базовый URI используется с относительными запросами
        'base_uri' => 'http://spkterminal/unf_fisenko/hs/CL_Goods/',
        // Вы можете установить любое количество параметров запроса по умолчанию.
        'timeout' => 5.0,
        'auth' => ['Даньковский Виталий', '503515']
            ]);

    // Дополняем запрос параметрами, отправляем его и получаем ответ
    $response = $client->request('POST', 'GetItems', [
        // Вы можете установить любое количество параметров запроса.
        'json' => [
            // 'GoodArticle' => 'SY-06',
            // 'GoodArticle' => 'art-01',
            // 'GoodName' => 'Тест',
            'GoodCategory' => 'Товары'
        ]
        ]);

    // Конвертируем json в Collection
    // и сразу создаем ключевое поле GoodCode
    $myCollection = collect(json_decode($response->getBody(), true))->keyBy('GoodCode');

    // Перебираем товары
    $myCollection->each(function($item, $key) {

        // Здесть выводим карточку товара
        $myCode = collect($item)->get('GoodCode');
        $myArticle = collect($item)->get('GoodArticle');
        $myName = collect($item)->get('GoodName');
        $myCategory = collect($item)->get('GoodCategory');
        $myCPrice = collect($item)->get('GoodPrice');
        $myQuantity = collect($item)->get('GoodQuantity');
        $myPhoto = collect($item)->get('GoodPhoto');

        echo "      <div class=\"goodcard\"> \n";
        echo $myName;
        echo "      </div> \n";
    });
 * 
 * 
 */
?>
@endsection


