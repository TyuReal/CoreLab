<!--    Выводим имя текущего элемента -->
<li>{{ $myName }} </li>

        <!--    Проверяем наличие у него детей в общей коллекции,
                если есть, отбираем именно их для дальнейших манипуляций
                и вызываем каждому include
                предварительно запомнив значения каждого элемента
        -->
	@if ($myCollectCatalog->contains('CatalogParentCode', $myCode))
	    <ul>
                 <?php   $myCol = $myCollectCatalog->where('CatalogParentCode', $myCode) ?>
                        
	    @foreach($myCol as $item)
                 <?php
                        $myCode = collect($item)->get('CatalogCode');
                        $myParentCode = collect($item)->get('CatalogParentCode');
                        $myName = collect($item)->get('CatalogName');
                ?>

	        @include('partials.project', $myCollectCatalog)
	    @endforeach
	    </ul>
	@endif
