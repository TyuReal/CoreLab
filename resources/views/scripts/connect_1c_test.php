<?php
 //   $mytext =     htmlentities($_POST['comment']);

use GuzzleHttp\Client;


$client = new Client([
  // Базовый URI используется с относительными запросами
  'base_uri' => 'http://spkterminal/unf_fisenko/hs/CL/',
  // Вы можете установить любое количество параметров запроса по умолчанию.
  'timeout'  => 2.0,
  'auth' => ['Даньковский Виталий', '503515']
]);


// Отправить запрос 
$response = $client->request('GET', 'GetCustomerInfo/5261088880');
 
// Отправить запрос на https://foo.com/root
//$response = $client->request('GET', '/root');
/*
    $output ="
    <html>
    <head>
    <title>Проба пера</title>
    </head>
    <body>
    Мой текст: $response->getBody() <br />";
    $output.="</ul></body></html>";
    echo $output;
  
 */
echo $response->getBody();
?>
