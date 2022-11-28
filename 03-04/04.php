<?php

/*
 4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1 balas)
*/



$holidays = [
    [
        'title' => 'Romantic Paris',
        'destination' => 'Paris',
        'price' => 1500,
        'tourists' => 55,
    ],
    [
        'title' => 'Amazing New York',
        'destination' => 'New York',
        'price' => 2699,
        'tourists' => 21,
    ],
    [
        'title' => 'Spectacular Sydey',
        'destination' => 'Sydey',
        'price' => 4130,
        'tourists' => 9,
    ],
    [
        'title' => 'Hidden Paris',
        'destination' => 'Paris',
        'price' => 1700,
        'tourists' => 10,
    ],
    [
        'title' => 'Emperors of the past',
        'destination' => 'Beijing',
        'price' => null,
        'tourists' => 10,
    ],
];

function exercises3($array)
{   
    
    // $miestai = function($array) {
        
    //     foreach ($array as $city) {
    //         if ($city['price'] == null) {
    //              continue;
    //         } else {
    //              echo $city['title'] . PHP_EOL;
    //              echo $city['destination'] . PHP_EOL;
    //              echo 'Price: ' . $city['price'] . PHP_EOL;
    //              echo 'Tourists: ' . $city['tourists'] . PHP_EOL;
    //              echo '========================' . PHP_EOL;
    //          }    
    //     }

    //     $returnable = array_map()

    // };
    $callback = fn($title, $v): string => "$title: $v";
    $result = array_map($callback, array_keys($array), array_values($array));

    var_dump($result);
   

}
var_dump(exercises3($holidays));