<?php

/*
 2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas), +0.5 jeigu array funkcijos naudojamos
*/

$numbers2 = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];

function exercises2(array $newNumbers2): int
{

    return array_reduce($newNumbers2, function (int $carry, array $array) {

        foreach ($array as $number)
        $carry *= $number;
        return $carry;
        },

    1);
}
echo exercises2($numbers2);