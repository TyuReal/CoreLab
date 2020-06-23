<?php

    echo "<li><a href='/shop/$myCode'>$myName </a>";
    
	if ($myCollectCatalog->contains('CatalogParentCode', $myCode)) {
	    echo "\n <ul class='navbar'> \n";
            $myCol = $myCollectCatalog->where('CatalogParentCode', $myCode);
	    foreach($myCol as $item) {
                 
                $myCode = collect($item)->get('CatalogCode');
                $myParentCode = collect($item)->get('CatalogParentCode');
                $myName = collect($item)->get('CatalogName');
                
	        include "/www/CoreLab/resources/views/partials/project-menu.blade.php";
            };
	    echo "</ul> \n";
        };
    echo "</li> \n"    
        
?>         
