<?php
//1. Išspausdinkite kas antrą skaičių nuo 100 iki 500 naudodamiesi for ciklu.
//                                                                     Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
//100
//   102
//   103
//   ...

function exercise1(): void {
    for ($i=100; $i<501; $i++){
        echo $i . PHP_EOL;
        $i++;
    }
}

//exercise1();


//2. Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 555 ir grąžinkite tą reikšmę iš funkcijos.
//
$numbers = [
    [0, 1],
    [1, 0, 2],
    [0,
        [0, 1, 99,
                    [10, 44, 555,
                    ],
        ],
    ],
];

//echo $numbers[2][1][3][2];

//
//3.     Išspausdinkite skaičius, kurie yra mažesni nei $number ir dalijasi iš 55. Jeigu paduotas skaičius mažesnis nei 0,
//       funkcija paverčia šį skaičių pliusiniu.
//Funkcijos kvietimas: exercise10(60)
//
function exercise3(int $number): void {
    if ($number<0){
        $number=abs($number);
    }
    for ($i=$number-1; $i>=0; $i--){
        if ($i%55===0){
            echo $i . PHP_EOL;
        }
    }
}

//exercise3(60);

//
//4.   Išveskite žodžių statistiką.
//Funkcija kviečiama:
//         exercise2(['hello', 'you'])
//         Funkcijos outputas:
//         [
//             'hello' => [
//                 'vowels' => 2,
//                 'consonants' => 3,
//                 'length' => 5,
//                 'starts_with' => h,
//                 'ends_with' => o,
//             ],
//             'you' => [
//                 'vowels' => 3,
//                 'consonants' => 0,
//                 'length' => 3,
//                 'starts_with' => y,
//                 'ends_with' => u,
//             ]
//         ]
//
function exercise4(array $myArr): void {
    $output=[];
    foreach ($myArr as $key => $value){
        $output[$value]=[
            'vowels' => $vowels = substr_count($value, 'a')+substr_count($value, 'e')+
                substr_count($value, 'i')+substr_count($value, 'o')+
                substr_count($value, 'u'),
            'consonants' => strlen($value) - $vowels,
            'length' => strlen($value),
            'starts_with' => substr($value, 0, 1),
            'ends_with' => substr($value, -1),
        ];
    }
    print_r($output);
}

exercise4(['hello', 'you']);
//
//Sis array bus naudojamas 5 ir 6 uzduociai :
//
//[
//    'products' => [
//        'Comfy chair' => 'no data',
//        'Yellow lamp' => [
//            'price' => 15.3,
//            'quantity' => 2,
//        ],
//        'Didzioji sofa' => [
//            'pavadinimas' => 'Didzioji sofa',
//            'kaina' => 'trylika eurų'
//        ],
//        'Softest rug' => [
//            'price' => 27.3,
//            'quantity' => 3,
//            'discount' => 13,
//        ],
//        'Blue shelf' => [],
//    ],
//    'cartDiscounts' => [5, 16, 15],
//];
//
//
//5. Atspausdinkite statistika - pavadinima, kokia kaina ir koks likutis.
//Pvz:. Pavadinimas - Sofa, Kaina - 15.6, Likutis - 2
//
//6. Parašykite funkciją kuri priimti prekės pavadinimą ir kokį kiekį norima nusipirkti, jeigu kiekio užtenka mūsų sandelyje (masyve)
//    tuomet atspausdinama - Jums parduota tokio pavadinimo - PREKES_PAVADINIMAS, prekė, kuri kainuoja - 55.55
//    Kitu atveju turi buti spausdinama - atsiprasau, bet tokio likucio sandelyje nebeturime.