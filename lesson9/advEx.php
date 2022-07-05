<?php

declare(strict_types=1);
//
//function exercise1(): array
//{
//    $products = [
//        [
//            'name' => 'Wine glass',
//            'last_purchase' => '2022 Jan 15 18:34:12',
//        ],
//        [
//            'name' => 'Bread knife',
//            'last_purchase' => '2020 Mar 15 23:14:00',
//        ],
//        [
//            'name' => 'Blue chair',
//            'last_purchase' => '2019 Dec 12 15:00:12',
//        ],
//        [
//            'name' => 'Cutting board',
//            'last_purchase' => '2022 Feb 1 03:15:01',
//        ],
//    ];
//
//    /*
//    Grąžinkite iš funkcijos masyvą tik su tais produktais, kurie paskutinį kartą buvo pirkti einamaisiais metais.
//    Ši funkcija turėtų veikti ir bet kuriais ateinančiais metais (2023, 2024 ir t.t.)
//    */
//    $curDate = new DateTime();
//    $output = [];
//    $x = 0;
//    foreach ($products as $key){
//        $date = DateTime::createFromFormat("Y M d H:i:s", $key['last_purchase']);
//        if (($curDate->format("Y")) === ($date->format("Y"))){
//            $output[$x] = $key['name'];
//            $x++;
//        }
//    }
//    return $output;
//}
//
//var_dump(exercise1());
//
//function exercise2(bool $showOnlyDays): void
//{
//    $products = [
//        [
//            'name' => 'Wine glass',
//            'last_purchase' => '2022 Jan 15 18:34:12',
//        ],
//        [
//            'name' => 'Bread knife',
//            'last_purchase' => '2020 Mar 15 23:14:00',
//        ],
//        [
//            'name' => 'Blue chair',
//            'last_purchase' => '2019 Dec 12 15:00:12',
//        ],
//        [
//            'name' => 'Cutting board',
//            'last_purchase' => '2022 Feb 1 03:15:01',
//        ],
//    ];
//    foreach ($products as $key) {
//        if ($showOnlyDays === true) {
//            $date = DateTime::createFromFormat("Y M d H:i:s", $key['last_purchase']);
//            $curDate = new DateTime();
//            $interval = $curDate->diff($date);
//            echo $key['name'] . $interval->format(' %a days ago') . PHP_EOL;
//        } else {
//            $date = DateTime::createFromFormat("Y M d H:i:s", $key['last_purchase']);
//            $curDate = new DateTime();
//            $interval = $curDate->diff($date);
//            echo $key['name'] . $interval->format(' %y years %m month %d days ago') . PHP_EOL;
//        }
//    }
//}
//
//    /*
//    Išspausdinkite paskutinių pirkimų santrauką. Jeigu $showOnlyDays yra true, tuomet rodykite tik dienas.
//    Funkcijos kvietimas: exercise11(false)
//    Rezultatas:
//    Last purchased:
//    Wine glass 0 years 1 month 23 days ago
//    ...
//    Funkcijos kvietimas: exercise11(true)
//    Rezultatas:
//    Last purchased:
//    Wine glass 51 days ago
//    ...
//    */
//
//exercise2(true);
//exercise2(false);

function exercise3(int $numberOfCycles = 1000000): void
{
    /*
    Išspausdinkite kiek laiko trunka prasukti tuščią ciklą nurodytą kiekį kartų ($numberOfCycles).
    Trukmę apvalinkite iki milisekundžių.
    Pridėkite parametrui $numberOfCycles numatytąją reikšmę 1000000.
    */
    echo $numberOfCycles . " empty \"while\" cycles takes ";
    $start = hrtime(true);
    while ($numberOfCycles>0){
        $numberOfCycles--;
    };
    $end = hrtime(true);
    $duration = $end - $start;
    echo round($duration / 1000000, 2) . " miliseconds";
}

exercise3(2000000);