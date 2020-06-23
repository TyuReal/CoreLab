<?php

    echo "<div class='catalog'> \n ";
    echo "         <h3>Каталог</h3> <br> \n\n";

    // Получаем коллекцию из контроллера
    $myCollectCatalog = $param_CollectionCat;
    // Создаем временную коллекцию, 
    // куда будем отбирать элементы текущего уровня
    $myCol = $myCollectCatalog;
            
    echo "          <ul class='navbar'> \n\n";
    
    foreach ($myCol as $item) {
                    
        // Запоминаем текущие значения, они будут использоваться в include
        $myCode = collect($item)->get('CatalogCode');
        $myParentCode = collect($item)->get('CatalogParentCode');
        $myName = collect($item)->get('CatalogName');
                    
        if ($myParentCode == "НФ-000061") {
            include "/www/CoreLab/resources/views/partials/project-menu.blade.php";
        };
    };
    
    echo "          </ul> \n\n";
    echo "       </div> \n";
    
 ?>        

