        <div class="catalog" >
            <h3>Каталог</h3> <br>
            
            <?php

            use GuzzleHttp\Client;

            // Создаем основу запроса к 1С
            $clientCat = new Client([
                // Базовый URI используется с относительными запросами
                'base_uri' => 'http://spkterminal/unf_fisenko/hs/CL_Goods/',
                // Вы можете установить любое количество параметров запроса по умолчанию.
                'timeout' => 2.0,
                'auth' => ['webuser', 'webuserpass']
                    ]);

            // Дополняем запрос параметрами, отправляем его и получаем ответ
            $responseCat = $clientCat->request('POST', 'GetCatalog');

            // Конвертируем json в Collection
            // и сразу создаем ключевое поле GoodCode
            $myCollectCatalog = collect(json_decode($responseCat->getBody(), true))->keyBy('CatalogCode');
            
            // Создаем временную коллекцию, 
            // куда будем отбирать элементы текущего уровня
            $myCol = $myCollectCatalog;
             ?>
            
                <ul>
                @foreach ($myCol as $item) 
                
                    <?php
                        // Запоминаем текущие значения, они будут использоваться в include
                        $myCode = collect($item)->get('CatalogCode');
                        $myParentCode = collect($item)->get('CatalogParentCode');
                        $myName = collect($item)->get('CatalogName');
                    ?>
                    
                    <!--    Отбираем записи верхнего уровня,
                            ждя каждой вызываем рекурсивный include
                    -->
                     @if ($myParentCode == "НФ-000061")
                        @include('partials.project', $myCollectCatalog)
                     @endif   
                @endforeach
                </ul>
            
        </div>

