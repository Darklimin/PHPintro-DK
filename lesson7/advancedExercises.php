<?php

declare(strict_types=1);

function getShoppingCart(): array
{
    return [
        'products' => [
            'Comfy chair' => 'no data',
            'Yellow lamp' => [
                'price' => 15.3,
                'quantity' => 2,
            ],
            'Didzioji sofa' => [
                'pavadinimas' => 'Didzioji sofa',
                'kaina' => 'trylika eurų'
            ],
            'Softest rug' => [
                'price' => 27.3,
                'quantity' => 3,
                'discount' => 13,
            ],
            'Blue shelf' => [],
        ],
        'cartDiscounts' => [5, 16, 15],
    ];
}
// Visose užduotyse stenkitės naudoti array funkcijas

//function exercise1(): void
//{
//    echo implode(', ', array_keys(getShoppingCart()['products']));
//    /*
//    Išspausdinti visų krepšelio produktų pavadinimus vienoje eilutėje.
//    Comfy chair, Yellow lamp, Didzioji sofa, Softest rug, Blue shelf
//    */
//}
//
//exercise1();
//
//function exercise2(): float
//{
//    /*
//    Suskaičiuokite pirkimų krepšelio bendrą sumą (price * quantity)
//    Kaip matote, krepšelio duomenys, kuriuos gavome iš svetimos sistemos, yra netvarkingi.
//    - Skaičiuojant reikėtų atsižvelgti tik į produktus, kurie turi laukus 'price' ir 'quantity'.
//    Jeigu produkto laukai užvadinti kitais pavadinimais arba iš viso jų neturi, tą produktą reikia ignoruoti.
//    */
//    $sum = 0;
//    foreach (getShoppingCart()['products'] as $value){
//        if (is_array($value)){
//            if (array_key_exists('price', $value) && array_key_exists('quantity', $value)){
//                $sum += $value['price'] * $value['quantity'];
//            }
//        }
//    }
//    return $sum;
//}
//
//echo exercise2();
//
//function exercise3(): float
//{
//
//    /*
//    Suskaičiuokite pirkinių krepšelio bendrą sumą.
//    Galioja tos pačios salygos kaip ir funkcijoje exercise2, bet papildomai reikia:
//    - Skaičiuojant bendrą sumą pritaikyti nuolaidas.
//    Nuolaida laikoma 'cartDiscounts' masyve, taip pat nuolaida gali būti ir prie produkto - 'discount'.
//    Abi reikšmės yra išreikštos procentais.
//    Nuolaidos sumuojasi.
//    Krepšelio nuolaida taikoma bendrai krepšelio sumai.
//    Naudojama tik viena, didžiausia su krepšeliu susieta nuolaida ('cartDiscounts').
//    */
//    $sum = 0;
//    foreach (getShoppingCart()['products'] as $value){
//        $midSum = 0;
//        if (is_array($value)){
//            if (array_key_exists('price', $value) && array_key_exists('quantity', $value)){
//                $midSum += $value['price'] * $value['quantity'];
//            }
//            if (array_key_exists('discount', $value)){
//                $midSum -= $midSum / 100 * $value['discount'];
//            }
//        }
//        $sum += $midSum;
//    }
//    $finalDisc = getShoppingCart()['cartDiscounts'];
//    rsort($finalDisc);
//    $sum -= $sum / 100 * $finalDisc[0];
//    return round($sum, 2);
//}
//
//echo exercise3();
//
//function exercise4(array $newIpList): array
//{
//    $existingIpList = [
//        '1.17.2.1',
//        '15.1.2.1',
//        '1.9.2.1',
//        '1.1.98.1',
//        '1.1.2.12',
//        '1.11.2.1',
//        '122.1.2.1',
//        '1.31.2.1',
//        '33.12.2.1',
//    ];
//
//    /*
//    Sukategorizuokite ip adresų sąrašą.
//    ipsNew - ip iš $newIpList, kurių nėra $existingIpList
//    ipsOld - ip iš $existingIpList, kurių nėra $newIpList
//    ipsRemaining - ip, kurie egzistuoja abiejuose sąrašuose
//    funkcija butu kviečiam taip:
//    exercise4(
//        ['15.1.2.1', '16.1.8.1', '15.1.8.1']
//    );
//    */
//    $ipsNew = [];
//    $ipsOld =[];
//    $ipsRemaining = [];
//    foreach ($newIpList as $value){
//        if (!in_array($value, $existingIpList)){
//            $ipsNew[] = $value;
//        }
//    }
//    foreach ($existingIpList as $value){
//        if (!in_array($value, $newIpList)){
//            $ipsOld[] = $value;
//        }
//    }
//    $ipsRemaining = array_intersect($existingIpList, $newIpList);
//
//    return [
//        $ipsNew,
//        $ipsOld,
//        $ipsRemaining,
//    ];
//}
//
//var_dump(exercise4(
//    ['15.1.2.1', '16.1.8.1', '15.1.8.1']
//));
//
//function exercise5(): string
//{
//    $words = [
//        'over',
//        'jumps',
//        'fox',
//        'Quick',
//        'dog',
//        'lazy',
//        'very',
//        'the',
//    ];
//
//    /*
//    "Išverskite" masyvą į kitą pusę ir paverskite į string tipo reikšmę.
//    Arčiausiai vidurio esantys masyvo elementai turėtų atsirasti šonuose.
//    Masyvo elementų skaičius galėtų dideti, bet jis visada bus lyginis.
//    Rezultatas turėtų būti - 'Quick fox jumps over the very lazy dog'
//    */
//    $newArr = array_chunk($words, (count($words)/2));
//    $output = '';
//    foreach ($newArr as $value){
//        for ($i = (count($value)-1); $i>=0; $i--){
//            $output = $output . $value[$i] . " ";
//        }
//    }
//    return $output;
//}
////echo exercise5();
///*
//    exercise 6
//    Parašykite savo array_map funkcijos versiją nesinaudodami pačia array_map funkcija
//*/
//$myArr = [1,2,3,8,];
//$myCall = function ($a){
//    return $a * 3;
//};
//
//function array_map_custom(callable $callback, array $array): array
//{
//    $output = [];
//    foreach ($array as $value){
//        $output[] = $callback($value);
//    }
//    return $output;
//}
//
//print_r(array_map_custom($myCall, $myArr));
///*
//    exercise 7
//    Parašykite savo array_filter funkcijos versiją nesinaudodami pačia array_filter funkcija
//*/
//$myArr = [1,2,3,4,5,6,7,8,];
//$myCall = function ($x){
//    return $x % 2 === 0;
//};
//function array_filter_custom(array $array, ?callable $callback): array
//{
//    $output = [];
//    foreach ($array as $value){
//        if ($callback($value)){
//            $output[] = $value;
//        }
//    }
//    return $output;
//}
//print_r(array_filter_custom($myArr, $myCall));
/*
    exercise 8
    Parašykite savo array_reduce funkcijos versiją nesinaudodami pačia array_reduce funkcija
*/
$myArr = [1,2,3,4,5,6,];
$myCall = function ($x){
    return $x * 2;
};

function array_reduce_custom(array $array, callable $callback, $carry)
{
    $output = $carry . " ";
    foreach ($array as $value){
        $output = $output . $callback($value) . " ";
    }
    return $output;
}

var_dump(array_reduce_custom($myArr, $myCall, 5));