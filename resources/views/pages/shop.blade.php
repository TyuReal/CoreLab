@extends('layouts.app-shop')

@section('content')

<?php

    use GuzzleHttp\Client;

    // Создаем основу запроса к 1С
    $client = new Client([
        // Базовый URI используется с относительными запросами
        'base_uri' => 'http://spkterminal/unf_fisenko/hs/CL_Goods/',
        // Вы можете установить любое количество параметров запроса по умолчанию.
        'timeout' => 120.0,
        'auth' => ['webuser', 'webuserpass']
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

    echo $response->getBody()->getSize();
    echo " байт";
    
    // Перебираем товары
    $myCollection->each(function($item, $key) {

        // Здесь выводим карточку товара
        $myCode = collect($item)->get('GoodCode');
        $myArticle = collect($item)->get('GoodArticle');
        $myName = collect($item)->get('GoodName');
        $myPrice = collect($item)->get('GoodPrice');
        $myQuantity = collect($item)->get('GoodQuantity');
        $myPhoto = collect($item)->get('GoodPhoto');
        $myCategoryID = collect($item)->get('GoodCategoryCode');
        $myCategoryParentID = collect($item)->get('GoodCategoryParentCode');
        $myCategoryName = collect($item)->get('GoodCategoryName');
        
    
        echo "      <div class=\"goodcard\"> \n";
        
        if ($myPhoto != "Не заполнено") 
           {echo "          <img src=\"data:image/gif;base64,$myPhoto\" align=\"left\"> \n";}
        else 
            {echo "          <img src=\"./images/no_picture.png\" align=\"left\"> \n";};

        echo "          <big><b>$myName</b></big> \n";
        echo "          <p>Артикул: $myArticle</p> \n";
        echo "          <div class=\"price\"><big><b>$myPrice руб.</b></big></div> \n";
        echo "      </div> \n";
    });
 
?>
@endsection


