<?php

declare(strict_types=1);
//
//function exercise1(): array
//{
//    $products = [
//        'item_1' => 'desk',
//        'item_2' => 'lamp',
//        'item_3' => 'error',
//        'item_4' => 'sofa',
//        'item_5' => 'error',
//    ];
//
//    foreach ($products as $key => $value){
//        if ($value === "error")
//        {
//            unset($products[$key]);
//        }
//    }
//    /*
//    Sunaikinkitę visus elementus, kurių reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
//    Tikėkitės, kad $products masyvas gali turėti ne 5, 100 elementų - naudokite ciklą.
//    */
//    return $products;
//}
//
//var_dump(exercise1());
//
//function exercise2(int $keyPart): ?array
//{
//    $products = [
//        'product_1' => 'desk',
//        'product_2' => 'lamp',
//        'product_3' => 'sofa',
//    ];
//
//    if (isset($products['product_' . $keyPart])){
//        unset($products['product_' . $keyPart]);
//    } else {
//        return NULL;
//    }
//
//    /*
//    Sunaikinkitę reikšmę, kuri atitiktų raktą 'product_' + $keyPart ir grąžinkite pamodifikuotą masyvą.
//    Jeigu tokio rakto nėra, gražinkite null. Pridėkite trūkstamą return tipą.
//    Funkcijos kvietimas: exercise2(1)
//    */
//
//    return $products;
//}
//
//var_dump(exercise2(1));
//
//function exercise3(): array
//{
//    $transactions = [
//        [
//            'total' => 200,
//            'status' => 'error',
//        ],
//        [
//            'total' => 150,
//            'status' => 'completed',
//        ],
//    ];
//
//    /*
//    Sunaikinkitę visus elementus, kurių reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
//    Tikėkitės, kad $products masyvas gali turėti ne 5, 100 elementų - naudokite ciklą.
//    */
//    foreach ($transactions as $fkey => $fvalue){
//        foreach ($fvalue as $value){
//            if ($value === 'error'){
//                unset($transactions[$fkey]);
//            }
//        }
//    }
//
//    return $transactions;
//}
//
//    var_dump(exercise3());
//
//function exercise4(string $key): string
//{
//    $products = [
//        'product_1' => 'shirt',
//        'product_2' => 'trousers',
//        'product_98' => 'coat',
//    ];
//    /*
//    Funkcija turi grąžinti reikšmę pagal paduota raktą.
//    Jeigu paduotas raktas neegzistuoja $products masyve, gražinkite tekstą 'Item not found'.
//    Funkcijos kvietimas: exercise4('product_2')
//    */
//
//    if (isset($products[$key])){
//        return $products[$key];
//    } else {
//        return 'Item not found';
//    }
//}
//echo exercise4('product_2');
//
//function exercise5(): array
//{
//    $transactions = [
//        [
//            'count' => 2,
//            'price' => 13,
//        ],
//        [
//            'count' => 15,
//            'price' => 14,
//        ],
//    ];
//
//    foreach ($transactions as $key => $value){
//        $transactions[$key]["total"] = $value["count"] * $value["price"];
//    }
////
//    /*
//    Kiekvienai iš transakcijų, esančių kintamajame $transactions, suskaičiuokite galutinę sumą ir pridėkite į
//    transakciją su raktu 'total'. Grąžinkite $transactions iš funkcijos.
//    Tikėkitės, kad transakciju skaičius gali išaugti. Jų gali būti ne 2, o 100. Dėl to naudokite ciklą.
//    Laukiamas rezultatas:
//    [
//        [
//            'count' => 2,
//            'price' => 13,
//            'total' => 26,
//        ],
//        ...
//    ];
//    */
//
//    return $transactions;
//}
//
//var_dump(exercise5());
//
//function exercise6(): array
//{
//    $currencyRates = [
//        'usd' => 1.13,
//        'gbp' => 0.83,
//    ];
//
//    $transactions = [
//        [
//            'count' => 2,
//            'price' => 3.55
//        ],
//        [
//            'count' => 15,
//            'price' => 14.1
//        ],
//    ];
//
//    foreach ($transactions as $key => $value){
//        $transactions[$key]["totals"]["eur"]= $value["count"] * $value["price"];
//        $transactions[$key]["totals"]["usd"]= round(($value["count"] * $value["price"] * $currencyRates['usd']), 2);
//        $transactions[$key]["totals"]["gbp"]= round(($value["count"] * $value["price"] * $currencyRates['gbp']), 2);
//    }
//
//    /*
//    Kiekvienai iš transakcijų, esančių kintamajame $transactions, suskaičiuokite galutinę sumą visomis valiutomis
//    esančiomis kintamajame $currencyRates (taip pat ir bazine valiuta - eur) ir pridėkite į transakciją su raktu 'totals'.
//    Apvalinkite dviejų skaitmenų po kablelio tikslumu.
//    Grąžinkite pamodifikuotą $transactions masyvą iš funkcijos.
//    Tikėkitės, kad transakciju skaičius gali išaugti. Jų gali būti ne 2, o 100. Dėl to naudokite ciklą.
//    Valiutų skaičius taip pat gali augti.
//    Laukiamas rezultatas:
//    [
//        [
//            'count' => 2,
//            'price' => 3.55,
//            'totals' => [
//                'eur' => ...,
//                'usd' => ...,
//                'gbp' => ...,
//            ],
//        ],
//        ...
//    ];
//    */
//
//    return $transactions;
//}
//
//var_dump(exercise6());
//
//$productCollection = [
//    [
//        'name' => 'Best sofa',
//        'price' => '55',
//    ],
//];
//
//function exercise7(array $collection): array
//{
//    /*
//    Funkcijai paduodama produktų kolekcija:
//
//    Funkcija turi grąžinti performuota kolekciją - 'name' turi tapti kolekcijos elemento raktu:
//    [
//        'Best sofa' => [
//            'price' => '55,
//        ],
//        ...
//    ]
//    */
//    $collection[$collection[0]["name"]] = $collection[0];
//    unset($collection[0]);
//    unset($collection["Best sofa"]["name"]);
//    return $collection;
//}
//
//print_r(exercise7($productCollection));
//
//function exercise8(): array
//{
//    $products = [
//        'desk',
//        'lamp',
//        'sofa',
//        'error',
//    ];
//
//$output = [];
//foreach ($products as $key => $value){
//    $output [$value] = str_split($value);
//}
//
//    /*
//    Išskaidykite produktų pavadinimus į raides.
//    [
//        'desk' => [
//            'd',
//            'e',
//            's',
//            'k',
//        ],
//        ...
//    ]
//    */
//
//    return $output;
//}
//
//print_r(exercise8());
//
//function exercise9(): void
//{
//    $animals = [
//        [
//            'type' => 'water',
//            'name' => 'shark',
//        ],
//        [
//            'type' => 'land',
//            'name' => 'chimp',
//        ],
//        [
//            'type' => 'water',
//            'name' => 'hippo',
//        ],
//        [
//            'type' => 'water',
//            'name' => 'crocodile',
//        ],
//        [
//            'type' => 'land',
//            'name' => 'cat',
//        ],
//        [
//            'type' => 'land',
//            'name' => 'dog',
//        ],
//    ];
//    echo "land: ";
//    foreach ($animals as $value){
//        if ($value["type"] === 'land'){
//            echo $value['name'] . " ";
//        }
//    }
//    echo PHP_EOL . "water: ";
//    foreach ($animals as $value){
//        if ($value["type"] === 'water'){
//            echo $value['name'] . " ";
//        }
//    }
//
//    /*
//    Išspausdinkite gyvūnus sugrupuotus pagal tipą.
//    Rezultatas:
//    land: chimp dog cat
//    water: shark hippo crocodile
//    */
//}
//
//exercise9();

function getProducts(): array
{
    return [
        'chair' => [
            'type' => 'furniture',
            'name' => 'Best chair',
            'price' => 15,
        ],
        'lamp' => [
            'type' => 'lighting',
            'name' => 'Ultimate lamp',
            'price' => 99,
        ],
        'sofa' => [
            'type' => 'furniture',
            'name' => 'Soft sofa',
            'price' => 350
        ],
    ];
}
//
//function exercise10(): array
//{
//    $products = getProducts();
//    /*
//    Į masyvą $products pridėkite naują narį ir grąžinkite naujajį masyvą. Nario 'key' - 'fridge'. Nario reikšmė:
//    [
//        'type' => 'appliance',
//        'name' => 'Coolest fridge',
//        'price' => 200,
//    ]
//    */
//    $products['fridge'] = [
//        'type' => 'appliance',
//        'name' => 'Coolest fridge',
//        'price' => 200,
//    ];
//
//    return $products;
//}
//
//var_dump(exercise10());

//function exercise11(): int
//{
//    $products = getProducts();
//    /*
//    Raskite ir grąžinkite visų produktų kainų vidurkį
//    */
//    $sum = 0;
//    foreach ($products as $value){
//        $sum += $value['price'];
//    }
//    return (int) ($sum / count($products));
//}
//
//echo exercise11();
//
//function exercise12(): array
//{
//    $products = getProducts();
//    /*
//    Sudėkite visų produktų pavadinimus į masyvą ir jį grąžinkite
//    [
//        'Best chair',
//        'Ultimate lamp',
//        'Soft sofa',
//    ]
//    */
//    $output = [];
//    $key = 0;
//    foreach ($products as $value){
//        $output[$key] = $value['name'];
//        $key++;
//    }
//    return $output;
//}
//
//var_dump(exercise12());

function exercise13(): void
{
    $products = getProducts();
    /*
    Iteruodami per masyvą išspausdinkite eilutę, kurioje matytusi produkto pavadinimas ir tipas atskirti brūkšneliu:
    Best chair - furniture, Ultimate lamp - lighting, Soft sofa - furniture
    */
    $x = 0;
    foreach ($products as $value){
        if ($x < count($products)-1) {
            echo $value['name'] . " - " . $value['type'] . ", ";
        } else {
            echo $value['name'] . " - " . $value['type'];
        }
        $x++;
    }
}

exercise13();