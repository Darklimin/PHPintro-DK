<?php

declare(strict_types=1);

//function exercise1(): int
//{
//    /*
//    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
//    */
//
//    $numbers = [0, 1, 2, 3, 4];
//
//    return $numbers[3];
//}
//
//var_dump(exercise1());
//
//function exercise2(): int
//{
//    /*
//    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
//    */
//
//    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
//
//    return $numbers["three"];
//}
//
//var_dump(exercise2());

//function exercise3(): int
//{
//    /*
//    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
//    */
//
//    $numbers = [
//        [0, 1],
//        [1, 0, 2],
//        [
//            0,
//            [
//                0, 1, 99
//            ],
//        ],
//    ];
//
//    return $numbers[2][1][2];
//}
//
//var_dump(exercise3());
//
//function exercise4(): int
//{
//    /*
//    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
//    */
//
//    $numbers = [
//        'first' => [0, 1],
//        'third' => [1, 0, 2],
//        'fourth' => [
//            'value_1' => 0,
//            'value_2' => [
//                'zero' => 0, 'one' => 1, 'ninetynine' => 99
//            ],
//        ],
//    ];
//
//    return $numbers["fourth"]["value_2"]["ninetynine"];
//}
//
//var_dump(exercise4());
//
////
//function exercise5(): int
//{
//    /*
//    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
//    */
//
//    $numbers = [
//        'first' => [0, 1],
//        'third' => [1, 0, 2],
//        'fourth' => ['value_1' => 0, 'value_6' => [
//                'zero' => 0,
//                'one' => 1,
//                99
//            ],
//        ],
//    ];
//
//    return $numbers["fourth"]["value_6"][0];
//}
//
//var_dump(exercise5());
//
//function exercise6(): int
//{
//    /*
//    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
//    */
//
//    $numbers = [
//        'first' => [0, 1],
//        'third' => [1, 0, 2],
//        'fourth' => [
//            'value_1' => 0,
//            'value_6' => [
//                5 => 0, 'one' => 1, 99
//            ],
//        ],
//    ];
//
//    return $numbers["fourth"]["value_6"][6];
//}
//
//var_dump(exercise6());
//
//function exercise7(): array
//{
//    /*
//    Sunaikinkitę reikšmę 2 ir grąžinkite masyvą
//    Turėtumėte gauti masyvą: ['zero' => 0, 'one' => 1, 'three' => 3, 'four' => 4]
//    */
//
//    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
//    unset($numbers["two"]);
//    return [$numbers];
//}
//
//var_dump(exercise7());
//
//function exercise8(): array
//{
//    /*
//    Sunaikinkitę visas reikšmes, kurios dalijasi 2 ir grąžinkite masyvą
//    Turėtumėte gauti masyvą: ['one' => 1, 'three' => 3, 'four' => 4, 'five' => 5]
//    */
//
//    $numbers = ['ninety' => 90, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];
//foreach ($numbers as $key => $value){
//    if ($value % 2 === 0){
//        unset($numbers[$key]);
//    }
//}
//    return [$numbers];
//}
//
//var_dump(exercise8());
//
//function exercise9(int $start, int $end): void
//{
//    if ($start < $end){
//        while ($start <= $end){
//            echo $start . PHP_EOL;
//            $start++;
//        };
//    }
//    /*
//    Išspausdinkite skaičius nuo $start iki $end pasinaudodami ciklu.
//    Jeigu $start yra mažiau nei $end, funkcija nieko nespausdina.
//    */
//}
//
//exercise9(2, 11);
//
//function exercise10(int $number): void
//{
//    if ($number > 2){
//        $i = 5;
//        while ($i < $number){
//            if ($i % 3 === 0){
//                echo $i . PHP_EOL;
//            }
//            $i++;
//        }
//    }
//    /*
//    Išspausdinkite skaičius, kurie yra mažesni nei $number ir dalijasi iš 3. Jeigu paduotas skaičius mažesnis nei 0,
//    funkcija nieko nespausdina.
//    Funkcijos kvietimas: exercise10(60)
//    Funkcija spausdina:
//    3
//    6
//    9
//    12
//    ...
//    60
//    */
//}
//
//exercise10(22);

//function exercise11(int $number): void
//{
//    while ($number >= 0){
//        echo $number . PHP_EOL;
//        $number--;
//    }
//    /*
//    Išspausdinkite skaičius nuo $number iki 0 pasinaudodami ciklu. Jeigu paduotas skaičius neigiamas,
//    funkcija nieko nespausdina.
//    Funkcijos kvietimas: exercise11(21)
//    Funkcija spausdina:
//    21
//    20
//    19
//    ...
//    1
//    0
//    */
//}
//
//exercise11(21);

function getNumbers(): array
{
    return [
        99,
        15,
        28,
        13,
        145,
        99,
        12,
        -57,
        -36,
    ];
}

//function exercise12 (): int {
//    $sum = 0;
//    foreach (getNumbers() as $value){
//        $sum += $value;
//    }
//    return $sum;
//};
//
//echo exercise12();

//function exercise13 (): int {
//    $sum = 0;
//    foreach (getNumbers() as $value){
//        if ($value % 2 === 0) {
//            $sum += $value;
//        }
//    }
//    return $sum;
//};
//
//echo exercise13();

//function exercise14 (): int {
//    $sum = 0;
//    foreach (getNumbers() as $value){
//        if ($value > 0) {
//            $sum += $value;
//        }
//    }
//    return $sum;
//};
//
//echo exercise14();

//function exercise15 (): int {
//    $sum = 1;
//    foreach (getNumbers() as $value){
//        if ($value % 5 === 0) {
//            $sum = $sum * $value;
//        }
//    }
//    return $sum;
//};
//
//echo exercise15();

//function exercise16 (): int {
//    $sum = 0;
//    $count = 0;
//    foreach (getNumbers() as $value){
//            $sum += abs($value);
//            $count++;
//    }
//    return $sum / $count;
//};
//
//echo exercise16();

function exercise17 (): array {
    $newArr = getNumbers();
    $newArr[]=255;
    return $newArr;
};

print_r(exercise17());

/*
Kiekviena užduoties dalis turi būti funkcija. Tęskite funkcijų numeraciją: exercise12, exercise13 ir t.t.
Masyvą gausite iškvietę funkciją 'getNumbers'
12. Raskite ir grąžinkite visų masyvo narių sumą
13. Raskite ir grąžinkite lyginių masyvo narių sumą
14. Raskite ir grąžinkite teigiamų masyvo narių sumą
15. Raskite ir grąžinkite sandaugą tų masyvo narių, kurie dalijasi iš 5
16. Raskite ir grąžinkite masyvo narių vidurkį. Neigiamus skaičius paverskite į teigiamus
17. Į masyvą pridėkite naują narį - skaičiu 255 - ir išspausdinkite masyva pasinaudodami funkcija 'printr'
*/
