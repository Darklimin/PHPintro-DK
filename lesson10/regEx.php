<?php

declare(strict_types=1);

function exercise1(): void
{
    /*
    Įrašykite skaičius nuo 0 iki 10 į failą pavadinimu numbers.txt.
    Kiekvienas skaičius turi būti įrašytas naujoje eilutėje.
    */
    for ($i=0; $i<11; $i++){
        file_put_contents('./numbers.txt', $i . PHP_EOL, FILE_APPEND);
    }
}

//exercise1();

function exercise2(): void
{
    /*
    Įrašykite visus transporto priemonių pavadinimus į failą vehicles.txt.
    Kiekvienas pavadinimas turi būti įrašytas naujoje eilutėje.
    */

    $vehicles = [
        [
            'type' => 'passenger car',
            'name' => 'Honda Civic',
            'weight' => 1550
        ],
        [
            'type' => 'airplane',
            'name' => 'Boeing 737',
            'weight' => 41410
        ],
        [
            'type' => 'airplane',
            'name' => 'Cessna DC-6',
            'weight' => 1300
        ],
        [
            'type' => 'truck',
            'name' => 'Volvo FH16',
            'weight' => 12500
        ],
        [
            'type' => 'truck',
            'name' => 'MB Actros',
            'weight' => 13000
        ],
        [
            'type' => 'passenger car',
            'name' => 'VW Golf',
            'weight' => 1450
        ],
    ];
    foreach ($vehicles as $value){
        file_put_contents('./vehicles.txt', $value['name'] . PHP_EOL, FILE_APPEND);
    }
}

//exercise2();

function exercise3(): array
{
    /*
    Perskaitykite visus tr. priemonių pavadinimus iš failo vehicles.txt,
    sudėkite juos į masyva ir grąžinkite iš funkcijos.
    [
        'Honda Civic',
        'Boeing 737',
        ...
    ]
    */
    return explode(PHP_EOL, rtrim(file_get_contents('./vehicles.txt'), PHP_EOL));
}
//print_r(exercise3());

/*
    Užduotis: 4
    Sukurkite naują failą days_until_calculator.php.
    Jį paleidus iš vartotojo turėtų nuskaityti 2 argumentus, vieną po kito:
    php -f days_until_calculator.php
    Event name:
    Event date (YYYY-MM-DD):
    Pavyzdys:
    php -f days_until_calculator.php
    Event name: birthday
    Event date (YYYY-MM-DD): 2022-06-15
    Event 'birthday' is 97 days away
*/
//file_put_contents('./days_until_calculator.php', FILE_APPEND);

function exercise5(): void
{
    /*
    Įrašykite visą $vehicles masyvą į failą vehicles_database.json JSON formatu.
    */

    $vehicles = [
        [
            'type' => 'passenger car',
            'name' => 'Honda Civic',
            'weight' => 1550
        ],
        [
            'type' => 'airplane',
            'name' => 'Boeing 737',
            'weight' => 41410
        ],
        [
            'type' => 'airplane',
            'name' => 'Cessna DC-6',
            'weight' => 1300
        ],
        [
            'type' => 'truck',
            'name' => 'Volvo FH16',
            'weight' => 12500
        ],
        [
            'type' => 'truck',
            'name' => 'MB Actros',
            'weight' => 13000
        ],
        [
            'type' => 'passenger car',
            'name' => 'VW Golf',
            'weight' => 1450
        ],
    ];
    $serializedData = json_encode($vehicles, JSON_PRETTY_PRINT);
    file_put_contents('./vehicles_database.json', $serializedData, FILE_APPEND);
}

//exercise5();

function exercise6(): array
{
    /*
    Perskaitykite failo vehicles_database.json turinį, paverskite jį į masyvą ir grąžinkite iš funkcijos.
    */
    $data = file_get_contents('./vehicles_database.json');
    return json_decode($data, true);
}

//print_r(exercise6());

function exercise7(): array
{
    $newVehicle = [
        'type' => 'plane',
        'name' => 'Airbus A320',
        'weight' => 39500,
    ];

    /*
    Papildykite vehicles_database.json esantį masyvą nauja tr. priemone.
    Žingsniai:
    - perskaitykite failo vehicles_database.json turinį
    - paverskite turinį į masyvą
    - į masyvą pridėkite naują elementą ($newVehicle)
    - vėl išsaugokite visą masyvą faile vehicles_database.json
    */
    $data = file_get_contents('./vehicles_database.json');
    $vehicles = json_decode($data, true);
    $vehicles[] = $newVehicle;
    $serializedData = json_encode($vehicles, JSON_PRETTY_PRINT);
    file_put_contents('./vehicles_database.json', $serializedData);
    return $vehicles;
}

print_r(exercise7());
