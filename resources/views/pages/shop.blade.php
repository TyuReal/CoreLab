@extends('layouts.app-shop')

@section('content')

<?php

    // Получаем коллекцию из контроллера
    $myCollection = $param_CollectionItems;
    
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
           {echo "      <a href='/shop/items/$myCode' target='_blank'>";
            echo "          <img src='data:image/gif;base64,$myPhoto' align='left'> \n </a> \n";}
        else 
            {echo "          <img src='/images/no_picture.png' align='left'> \n";};

        echo "          <big><b><a href='/shop/items/$myCode' target='_blank'>$myName</a></b></big> \n";
        echo "          <p>Артикул: $myArticle</p> \n";
        echo "          <div class=\"price\"><big><b>$myPrice руб.</b></big></div> \n";
        echo "      </div> \n";
    });
 
?>
@endsection


