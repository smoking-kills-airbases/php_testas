<?php

/*
 1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas) +0.5 jeigu array funkcijos naudojamos
*/

$numbers = [
    15,
    55,
    66,
    91,
    100,
    995,
    17,
    550,
];



function exercises1(array $numbers): int
{
    function checkEven($number) {
        return $number % 2 == 0;
    }
    $evenNum = array_filter($numbers, "checkEven");
    return array_sum($evenNum);
}

echo exercises1($numbers);