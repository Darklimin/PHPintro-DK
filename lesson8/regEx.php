<?php

declare(strict_types=1);

$someProducts = [
    '000_product_1  ',
    ' 000_product_2',
    '000_product_3  ',
    '000_product_4',
    '  000_product_5 ',
    '000_product_20
    ',
];

//function exercise1(): array
//{
//    /*
//    Išskaidykite $longLine kintamajį į atskirus žodžius. Žodžiai turi grįžti iš funkcijos masyvo formoje.
//    Skaidykite per underscore (_)
//    */
//    $longLine = 'Hello_how_are_you_doing?';
//    return explode("_", $longLine);
//    }
//
//    var_dump(exercise1());
//
//function exercise2(): array
//{
//    /*
//    Grąžinkite masyvą, kuris talpintų tik tuos žodžius, kurie panašūs į emailų adresus
//    t.y. turi savyje simbolį @
//    */
//    $emails = [
//        'some@email.com',
//        'someAemail.com',
//        'another@gmail.com',
//        'notAreal.email.com',
//        'real@gmail.com',
//    ];
//    foreach ($emails as $key => $value){
//        if (str_contains($value, "@")){
//        continue;} else {
//            unset($emails[$key]);
//        }
//    }
//
//    return $emails;
//}
//
//var_dump(exercise2());
//
//function exercise3(array $products): int
//{
//    /*
//    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą.
//    Naudokite $someProducts masyvą
//    */
//    $sum = 0;
//foreach ($products as $values){
//    $sum += strlen($values);
//}
//    return $sum;
//}
//
//print_r(exercise3($someProducts));
//
//function exercise4(): array
//{
//    /*
//    Kiekvienam žodžiui apskaičiuokite balsių skaičių (a, e, i, o, u)
//    Funkcijos kvietimas: exercise4()
//    Funkcija grąžina: [2, 3, 3, 1, 2]
//    */
//
//    $words = [
//        'tennis',
//        'rooftops',
//        'hillside',
//        'warm',
//        'friends',
//    ];
//    $output = [];
//    $sum = 0;
//    foreach ($words as $key => $value){
//        $var = str_split($value);
//        foreach ($var as $xKey => $xValue){
//            if ($xValue === "a" || $xValue === "e" || $xValue === "i" || $xValue === "o" || $xValue === "u"){
//                $sum++;
//            }
//        }
//        $output[$key] = $sum;
//        $sum = 0;
//    }
//
//    return $output;
//}
//
//var_dump(exercise4());
//
//function exercise5(array $products): int
//{
//    /*
//    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą, BET
//    į sumą neįtraukite tuščių simbolių - ty. tarpų, new line ir pan.
//    Naudokite $someProducts masyvą.
//    */
//    $sum = 0;
//    foreach ($products as $values) {
//        $sum += strlen(chop($values));
//    }
//    return $sum;
//}
//
//var_dump(exercise5($someProducts));

function exercise6(): int
{
    $text = 'The African philosophy of Ubuntu has its roots in the Nguni word for being human.
    The concept emphasises the significance of our community and shared humanity and teaches
    us that "A person is a person through others". Many view the philosphy as a counterweight
    to the culture of individualism in our contemporary world.';

    /*
    Suskaičiuokite kiek balsių yra tekste
    */
    return substr_count(strtolower($text), 'a')+substr_count(strtolower($text), 'e')
        +substr_count(strtolower($text), 'i')+substr_count(strtolower($text), 'o')
        +substr_count(strtolower($text), 'u')+substr_count(strtolower($text), 'i');
}

print_r(exercise6());
