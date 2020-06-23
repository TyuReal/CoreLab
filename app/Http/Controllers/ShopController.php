<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ShopController extends Controller {

    public function show() {
        
//        die ($category);

        // Формируем запрос для построения каталога товаров
        $responseCat = Http::timeout(5)
                ->withBasicAuth('webuser', 'webuserpass')
                ->post('http://spkterminal/unf_fisenko/hs/CL_Goods/GetCatalog');
        // Конвертируем json в Collection
        // и сразу создаем ключевое поле CatalogCode
        $myCollectionCat = collect(json_decode($responseCat->getBody(), true))->keyBy('CatalogCode');

        // Формируем запрос для отображения товаров
        $responseItems = Http::timeout(120)
                ->withBasicAuth('webuser', 'webuserpass')
                ->post('http://spkterminal/unf_fisenko/hs/CL_Goods/GetItems', [
                    'NoParam' => 'NoParam'
                ]);
        // Конвертируем json в Collection
        // и сразу создаем ключевое поле GoodCode
        $myCollectionItems = collect(json_decode($responseItems->getBody(), true))->keyBy('GoodCode');
   
  //        die ($responseItems->getBody());
          
          
        return \view('pages.shop', [
            'param_CollectionCat' => $myCollectionCat, 
            'param_CollectionItems' => $myCollectionItems,
        ]);
 
        }
        
        
    public function index($category) {
        
//        die ($category);

        
        // Формируем запрос для построения каталога товаров
        $responseCat = Http::timeout(5)
                ->withBasicAuth('webuser', 'webuserpass')
                ->post('http://spkterminal/unf_fisenko/hs/CL_Goods/GetCatalog');
        // Конвертируем json в Collection
        // и сразу создаем ключевое поле CatalogCode
        $myCollectionCat = collect(json_decode($responseCat->getBody(), true))->keyBy('CatalogCode');

        // Формируем запрос для отображения товаров
        $responseItems = Http::timeout(120)
                ->withBasicAuth('webuser', 'webuserpass')
                ->post('http://spkterminal/unf_fisenko/hs/CL_Goods/GetItems', [
                    'GoodCategory' => $category
                ]);
        // Конвертируем json в Collection
        // и сразу создаем ключевое поле GoodCode
        $myCollectionItems = collect(json_decode($responseItems->getBody(), true))->keyBy('GoodCode');

//       die (dd($myCollectionItems));
        
         
        
        return \view('pages.shop', [
            'param_CollectionCat' => $myCollectionCat, 
            'param_CollectionItems' => $myCollectionItems,
        ]);

    }
    
    public function item($itemcard) {
        
        // Формируем запрос для отображения карточки товара
        $responseItemCard = Http::timeout(50)
                ->withBasicAuth('webuser', 'webuserpass')
                ->post('http://spkterminal/unf_fisenko/hs/CL_Goods/GetItems', [
                    'GoodItemCode' => $itemcard
                ]);
        // Конвертируем json в Collection
        // и сразу создаем ключевое поле GoodCode
        $myCollectionItemCard = collect(json_decode($responseItemCard->getBody(), true))->keyBy('GoodCode');
        
//            die (dd($myCollectionItemCard));
        
        return \view('pages.gooditem', [
            'param_Photo' => collect($myCollectionItemCard->first())->get('GoodPhoto'), 
            'param_Name' => collect($myCollectionItemCard->first())->get('GoodName'),
            'param_Price' => collect($myCollectionItemCard->first())->get('GoodPrice'),
            'param_Description' => collect($myCollectionItemCard->first())->get('GoodDescription'),
        ]);
    }

}