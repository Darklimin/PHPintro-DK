<?php

declare(strict_types=1);

$inventory = [
    'apple' => [
        'count' => 5,
        'price' => 0.15,
    ],
    'carrot' => [
        'count' => 100,
        'price' => 0.01,
    ],
    'fish' => [
        'count' => 15,
        'price' => 5.5,
    ],
    'beer_bottle' => [
        'count' => 22,
        'price' => 1.3,
    ],
    'cheese' => [
        'count' => 1,
        'price' => 4.5,
    ],
    'wine_bottle' => [
        'count' => 4,
        'price' => 8,
    ],
    'bread' => [
        'count' => 11,
        'price' => 2.1,
    ],
];

function exercise1 (string $myString, array $myInventory): void
{
    $firstEx = explode(" ", $myString);
    echo "You bought: ";
    for ($x=0; $x<count($firstEx); $x++){
        $secondEx[$x] = explode(":", $firstEx[$x]);
        if ($x<count($firstEx)-1) {
            echo $secondEx[$x][1] . " " . $secondEx[$x][0] . ", ";
        } else {echo $secondEx[$x][1] . " " . $secondEx[$x][0];}
    }
    $total = 0;
    echo PHP_EOL . "*****" . PHP_EOL;
    for ($y=0; $y<count($firstEx); $y++){
        echo $secondEx[$y][0] . PHP_EOL . $myInventory[$secondEx[$y][0]]["price"] .
            " * " . $secondEx[$y][1] . " = " . $myInventory[$secondEx[$y][0]]["price"] * $secondEx[$y][1] .
            PHP_EOL;
        $total += $myInventory[$secondEx[$y][0]]["price"] * $secondEx[$y][1];
    }
    echo "*****" . PHP_EOL . "Total: " . $total;
}

exercise1($argv[1], $inventory);
