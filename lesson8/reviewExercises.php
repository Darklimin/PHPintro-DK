<?php

declare(strict_types=1);

//function exercise1(): int
//{
//    /*
//    Grąžinkite masyvo narių sumą, pakeltą kvadratu
//    */
//    $numbers = [1, 15, 25, 13, 45, 551, 2];
//    return array_sum($numbers)**2;
//}
//
//print_r(exercise1());
//
$numbers = [1, 15, 25, 13, 45, 551, 2];

//function exercise2($arr): array
//{
//    /*
//    Kiekvieną masyvo narį padauginkite iš 15
//
//    Funkcijos outputas:
//    [15, 225, 375, ...]
//    */
////function multi($i){$i * 15}
//    return array_map(function($i){
//        return $i * 15;
//    }, $arr);
//}
//
////print_r(exercise2($numbers));
//
//function exercise3(string $orderDirection): array
//{
//    $myNumbers = [-60, -45, 8, 16, 69, 7, -2];
//    $newArr = [];
////    /*
////    Išmeskite iš masyvo neigiamus skaičius ir juos išrikiuokite didėjimo arba mažėjimo tvarka
////    priklausomai nuo $orderDirection reikšmės (ascending arba descending)
////
////    Funkcijos kvietimas: exercise3('descending')
////    Funkcijos outputas:
////    [15, 3, 1, 0]
////
////    Funkcijos kvietimas: exercise3('ascending')
////    Funkcijos outputas:
////    [0, 1, 3, 15]
////    */
//    if ($orderDirection === "descending") {
//        $newArr = (array_filter($myNumbers, function ($x) {
//            return $x > 0;
//        }));
//        arsort($newArr);
//    } elseif ($orderDirection === "ascending") {
//        $newArr = (array_filter($myNumbers, function ($x) {
//            return $x > 0;
//        }));
//        asort($newArr);
//    }
//    return $newArr;
//}
//print_r(exercise3('descending'));

//
//function exercise4(int $number): int
//{
//    /*
//    Prie kiekvieno masyvo nario pridėkite skaičių $number ir grąžinkite visų masyvo narių sumą.
//    Funkcijos kvietimas: exercise5(9)
//    Funkcija grąžina: 715
//
//    */
//    $numbers = [1, 15, 25, 13, 45, 551, 2];
//
//    return 0;
//}
//
//function exercise5(int $number): void
//{
//    /*
//    Išspausdinkite skaičius, kurie prasideda nuo $number ir mažėja arba didėja iki 0, per du skaitmenis.
//
//    Funkcijos kvietimas: exercise6(5)
//    Funkcija spausdina:
//    5
//    3
//    1
//    0
//
//    Funkcijos kvietimas: exercise6(-5)
//    Funkcija spausdina:
//    -5
//    -3
//    -1
//    0
//    */
//
//}
//
//function exercise6(array $numbers): array
//{
//    /*
//    Apskaičiuokite skaičių masyvo statistiką.
//    Jeigu tarp paduotų skaičių yra neigiamų skaičių arba 0, juos ignoruokite.
//
//    Funkcijos kvietimas: exercise7([1, 3, 40])
//    Funkcija grąžina:
//    [
//        'suma' => 44,
//        'sandauga' => 120,
//        'vidurkis' => 14.66,
//        'maksimumas' => 40,
//        'minimumas' => 1,
//        'skirtumas_max_min' => 39
//    ]
//    */
//
//    return [];
//}
//
//function exercise7($height, $width)
//{
//    /*
//    Parašykite funkciją, kuri išspausdintų nurodytų matmenų bloką.
//    Taip pat, pataisykite funkcijos parametrus ir return tipą.
//
//    Funkcijos kvietimas: exercise8(3, 4)
//    Funkcija grąžina: funkcija nieko negrąžina, ji tik spausdina:
//    [][][][]
//    [][][][]
//    [][][][]
//    */
//
//}
//
//
//function exercise8(array $items, int $partsCount = 2): array
//{
//    /*
//    Išskaidykite masyvą į nurodytą kiekį dalių.
//    Patasykite šios funkcijos 'signature' (parametrus) taip, kad būtų galima ją kviesti nepaduodant
//    antrojo parametro $partsCount (2 pavyzdys) ir tokiu atveju masyvas būtų dalinamas į dvi dalis.
//
//    Funkcijos kvietimas:
//    exercise9(
//        [1, 2, 3, 4, 5, 6, 7],
//        4
//    )
//    Funkcija grąžina:
//    [
//        [1, 2],
//        [3, 4],
//        [5, 6],
//        [7]
//    ]
//
//    Funkcijos kvietimas: exercise9([1, 2, 3, 4, 5, 6, 7])
//    Funkcija grąžina:
//    [
//        [1, 2, 3, 4],
//        [5, 6, 7],
//    ]
//    */
//
//    return [];
//}<?php
