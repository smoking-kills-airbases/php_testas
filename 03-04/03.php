<?php

/*
 3. Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
 Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
 Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (2 balai)
*/

//   Destination "Paris".
//   Titles: "Romantic Paris", "Hidden Paris"
//   Total: 99500
//   ************
//   Destination "New York"



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

// function exercises3($array)
// {   
//     foreach ($array as $city) {
//        if ($city['price'] == null) {
//             continue;
//        } else {
//             echo $city['title'] . PHP_EOL;
//             echo $city['destination'] . PHP_EOL;
//             echo 'Price: ' . $city['price'] . PHP_EOL;
//             echo 'Tourists: ' . $city['tourists'] . PHP_EOL;
//             echo '========================' . PHP_EOL;
//         }    
//     }
// }
// var_dump(exercises3($holidays));


function exercises3($array)
{   
    $secondArray = [];
    $secondArray = $array;

    foreach ($array as $key => $city) {
        if ($city['price'] == null) {
            unset($city);
            continue;
        } else {
            return $array;
        }    
    }
    
    return $array;
    
   
    
}
var_dump(exercises3($holidays));


