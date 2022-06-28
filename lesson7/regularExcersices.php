<?php

declare(strict_types=1);

function getCities(): array
{
    return [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        [
            'name' => 'Delhi',
            'population' => 29399141,
        ],
        [
            'name' => 'Shanghai',
            'population' => 26317104,
        ],
        [
            'name' => 'Sao Paulo',
            'population' => 21846507,
        ],
        [
            'name' => 'Mexico City',
            'population' => 21671908,
        ],
        [
            'name' => 'New York',
            'population' => 25000000,
        ],
    ];
}

function exercise1(): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami paprastu 'foreach' ir grąžinkite ją iš funkcijos.
    Miestus pasiimkite iškvietę funkciją 'getCities'
    */
    $sumPop = 0;
    foreach (getCities() as $key => $value) {
        $sumPop += getCities()[$key]["population"];
    }

    return $sumPop;
}

//print_r(exercise1());

function exercise2(): int
{

    return array_sum(array_column(getCities(), 'population'));

    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcijomis array_column ir array_sum
    ir grąžinkite ją iš funkcijos
    */

}

//print_r(exercise2());

//function exercise3(): int
//{
//    /*
//    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcija array_reduce ir grąžinkite ją iš funkcijos
//    */
//    return array_reduce(getCities(), function ($sum, $item){
//        $sum += $item['population'];
//        return $sum;
//    });
//}
//print_r(exercise3());
//
//function exercise4(): int
//{
//    /*
//    Suskaičiuokite populiaciją miestų, kurie yra didesni nei 25,000,000 gyventojų.
//    Rinkites sau patogiausią skaičiavimo būdą.
//    */
//    return array_reduce(getCities(), function ($sum, $item) {
//        if ($item['population'] > 25000000) {
//            $sum += $item['population'];
//        }
//        return $sum;
//    });
//}
//
//print_r(exercise4());

//function exercise5(): array
//{
    /*
    Grąžinkite masyvą, kuriame būtų tik tie miestai, kurie yra didesni nei 25,000,000 gyventojų
    Rezultatas turi būti tokios pat struktūros, kaip ir pradinis miestų masyvas:
    [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        ...
    ]
    */
//    return array_filter(getCities(), function ($item) {
//        if ($item['population'] > 25000000) {
//            return true;
//        }
//    });
//}
//
//var_dump(exercise5());

    function exercise6(): int
    {

        /*
        Suskaičiuokite ir grąžinkite bendrą užsakymo sumą.
        Prekėms, kurių pavadinimai nurodyti masyve $lowPriceItems, taikykite kainą 'priceLow'.
        Kitoms prekėms taikykite kainą 'priceRegular'.
        Bandykite panaudoti array_* funkcijas.
        */

        $lowPriceItems = ['t-shirt', 'shoes'];

        $orderItems = [
            [
                'name' => 't-shirt',
                'priceRegular' => 15,
                'priceLow' => 13,
                'quantity' => 3,
            ],
            [
                'name' => 'coat',
                'priceRegular' => 74,
                'priceLow' => 60,
                'quantity' => 6,
            ],
            [
                'name' => 'shirt',
                'priceRegular' => 25,
                'priceLow' => 20,
                'quantity' => 2,
            ],
            [
                'name' => 'shoes',
                'priceRegular' => 115,
                'priceLow' => 100,
                'quantity' => 1,
            ],
        ];
        return array_reduce($orderItems, function ($sum, $item) {
            if ($item['name'] == "t-shirt" || $item['name'] == "shoes") {
                $sum += $item['priceLow'];
            } else {
                $sum += $item["priceRegular"];
            }
            return $sum;
        });
    };


print_r(exercise6());