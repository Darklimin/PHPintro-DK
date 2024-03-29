<?php

declare(strict_types=1);

//function exercise1(string $stringToSplit, array $delimiters): array
//{
//    /*
//    Funkcija turi priimti string'ą, kuris bus skaidomas,
//    bei masyvą segmentų, pagal kuriuos bus skaidoma.
//    Kvietimas turi atrodyti taip:
//    exercise1('Hello_how_are-you doing?', [' ', '-', '_'])
//    Funkcijos outputas turėtų atrodyti taip:
//    ['Hello', 'how', 'are', 'you', 'doing?']
//    */
//    $makeReady = str_replace($delimiters, $delimiters[0], $stringToSplit);
//    return explode($delimiters[0], $makeReady);
//}
//
//var_dump(exercise1('Hello_how_are-you doing?', [' ', '-', '_']));
//
//function exercise2(array $words): array
//{
//    /*
//    Sukategorizuokite žodžius pagal jų pradžios simbolį.
//    Funkcija kviečiama:
//    exercise2(['hello', 'Hickup', '123', 'computer'])
//    Funkcijos outputas:
//    [
//        'h' => ['hello', 'Hickup'],
//        '1' => ['123'],
//        'c' => ['computer'],
//    ]
//    */
//    $output = [];
//    $arrKeys = "";
//    foreach ($words as $key => $value){
//        $letter = substr($value, 0, 1);
//        $arrKeys = strtolower($letter);
//        $output[$arrKeys][$key] = $value;
//    }
//    return $output;
//}
//
//print_r(exercise2(['hello', 'Hickup', '123', 'computer']));
//
//function exercise3(array $words): array
//{
//    /*
//    Išveskite žodžių statistiką.
//    Funkcija kviečiama:
//    exercise2(['hello', 'you'])
//    Funkcijos outputas:
//    [
//        'hello' => [
//            'vowels' => 2,
//            'consonants' => 3,
//            'length' => 5,
//            'starts_with' => h,
//            'ends_with' => o,
//        ],
//        'you' => [
//            'vowels' => 3,
//            'consonants' => 0,
//            'length' => 3,
//            'starts_with' => y,
//            'ends_with' => u,
//        ]
//    ]
//    */
//    $output = [];
//    foreach ($words as $key => $value){
//        $vow = substr_count($value, 'a')+substr_count($value,'e')+substr_count($value, 'i')
//            +substr_count($value, 'o')+substr_count($value, 'u')+substr_count($value, 'i')
//            +substr_count($value, 'y');
//        $output[$key] = ["$value" => [  "vowels" => $vow,
//                                        "consonants" => strlen($value) - $vow,
//                                        'length' => strlen($value),
//                                        'starts_with' => substr($value, 0, 1),
//                                        'ends_with' => substr($value, -1, 1)]];
//    }
//    return $output;
//}
//
//var_dump(exercise3(['hello', 'you']));

function exercise4(): array
{
    /*
    Grąžinkite masyvą, kuris savyje turėtų tik tuos žodžius, kurie arba prasideda, arba baigiasi
    simboliais a, s, b, o
    */
    $emails = [
        'some@email.com',
        'someAemail.com',
        'another@gmail.com',
        'notAreal.email.io',
        'real@gmail.com',
    ];

    foreach ($emails as $key => $value){
        if ((substr($value, 0, 1))==="a"||
            (substr($value, 0, 1))==="s"||
            (substr($value, 0, 1))==="b"||
            (substr($value, 0, 1))==="o"||
            (substr($value, -1, 1))==="a"||
            (substr($value, -1, 1))==="s"||
            (substr($value, -1, 1))==="b"||
            (substr($value, -1, 1))==="o"){
          continue;} else {
            unset($emails[$key]);
          }
        }

    return $emails;
}

var_dump(exercise4());
