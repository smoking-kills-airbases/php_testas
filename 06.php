<?php

/*
 6. Parašykite programą, kuri per argumentų padavimą terminale, paleidžiant funkciją juos priimtų, sudaugintų
tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas ne skaičius, reikia, kad
terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)
*/

//  php index.php  3 5 -->> Jūsų skaičius: 225


echo 'iveskite du skaicius: ';
fscanf(STDIN, "%d %d", $numOne, $numTwo);

if (is_numeric($numOne) === false || !(int)$numTwo) {
    echo 'ivestas ne skaicius';
    exit(1);
}

$result = ($numOne * $numTwo)**2;
echo 'Jusu skaicius: ' . $result;


//========================================================================================
// su $argv :


// $number = (int)$argv[1];
// $number2 = (int)$argv[2];
// if (is_numeric($argv[1]) === false && is_numeric($argv[2]) === false) {
//     echo "ivestas ne skaicius" . PHP_EOL;
//     exit(1);
// }

// $kvadratas = ($number * $number2)**2;
// echo 'jusu skaicius: ' . $kvadratas;

