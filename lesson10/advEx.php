<?php

/*
Exercise 1

Parašykite PHP scriptą, kuris leistų modifikuoti tr. priemonių "duomenų bazę" (vehicles_database.json).
Galite naudoti tą patį failą, su kuriuo dirbote užduotyse 5-7.
Operacijos, kurias mes norime atlikti su duomenimis:
- pridėti tr. priemonę į DB
- išspausdinti visas transporto priemones esančias duomenų bazėje (DB)
- išspausdinti vieną tr. priemonę, esančią DB, pagal jos ID
- ištrinti vieną tr. priemonę, esančią DB, pagal jos ID

CRUD - Create, Read, Update, Delete

######################################################################################
*/
function addVehicle (): void{
    $data = file_get_contents('./vehicles_database.json');
    $vehicles = json_decode($data, true);
    echo 'Add new vehicle' . PHP_EOL;
    $type = readline('Vehicle type: ');
    $name = readline('Vehicle name: ');
    $weight = readline('Vehicle weight: ');
    $rWeight = intval($weight);
    if (strlen($name)>0 && strlen($name) && $rWeight>0 ) {
        $vehicles[] = ["type" => $type,
            "name" => $name,
            "weight" => $rWeight];
        $serializedData = json_encode($vehicles, JSON_PRETTY_PRINT);
        file_put_contents('./vehicles_database.json', $serializedData);
        echo 'Vehicle saved!';
    } else {
        echo 'You entered invalid parameters. Try one more time.';
    }
}

//addVehicle();

function printAll (){
    $data = file_get_contents('./vehicles_database.json');
    $vehicles = json_decode($data, true);
    echo 'DB vehicles names:' . PHP_EOL;
    foreach ($vehicles as $value){
        echo $value['name'] . PHP_EOL;
    }
}

//printAll();

function printOne (): void
{
    $data = file_get_contents('./vehicles_database.json');
    $vehicles = json_decode($data, true);
    echo 'Enter vehicle ID from 0 to ' . (count($vehicles) - 1) . PHP_EOL;
    $userID = readline();
    if ($userID>=0 && $userID<count($vehicles)){
        echo "Vehicle ID no " . $userID . " is:" . PHP_EOL;
        print_r($vehicles[$userID]);
    } else {
        echo "ID no " . $userID . " doesn't exists in vehicles DB";
    }
}

//printOne();

function deleteOne (): void
{
    $data = file_get_contents('./vehicles_database.json');
    $vehicles = json_decode($data, true);
    echo 'Enter vehicle ID from 0 to ' . (count($vehicles) - 1) . ' you want to delete'. PHP_EOL;
    $userID = readline();
    if ($userID>=0 && $userID<count($vehicles)){
        unset($vehicles[$userID]);
        $serializedData = json_encode($vehicles, JSON_PRETTY_PRINT);
        file_put_contents('./vehicles_database.json', $serializedData);
        echo "Vehicle ID no " . $userID . " is deleted from vehicle DB" . PHP_EOL;
    } else {
        echo "ID no " . $userID . " doesn't exists in vehicles DB";
    }
}

//deleteOne();

/*
1.1 Sukurkite priemonės pridėjimo funkcionalumą.
Žingsniai:
- paimti is failo duomenis
- juos decodinti
- tuomet pridėti savo suvestą tr. priemonę
- vėl encodinti ir išsaugoti faile
php -f vehicles.php add

Add new vehicle
Vehicle name: Audi 80
Vehicle type: passenger car
Vehicle weight: 1290

Vehicle saved!

######################################################################################

1.2 Sukurkite visų tr. priemonių išvedimą.
php -f vehicles.php list

Vehicle list:
--------
id: 1
type: passenger car
name: Honda Civic
weight: 1550
--------
id: 2
type: airplane
name: Boeing 737
weight: 41410
--------
....

######################################################################################

1.3 Sukurkite vienos tr. priemonės išvedimą.
ID - yra masyvo nario raktas
Pvz: čia ID yra 0
Array
(
[0] => Array
(
[type] => passenger car
[name] => Honda Civic
[weight] => 1550
)
)

php -f vehicles.php show_one

Please enter ID of the vehicle:

#################

Pavyzdys #1:
php -f vehicles.php show_one

Please enter ID of the vehicle: 1

id: 1
type: passenger car
name: Honda Civic
weight: 1550

#################

Pavyzdys #2:
php -f vehicles.php show_one

Please enter ID of the vehicle: 999

Vehicle 999 does not exist!

######################################################################################

1.4 Sukurkite vienos tr. priemonės ištrynimą.
php -f vehicles.php delete_one

Please enter ID of the vehicle to delete:

#################

Pavyzdys #1:
php -f vehicles.php delete_one

Please enter ID of the vehicle to delete: 1

Vehicle 1 deleted!

#################

Pavyzdys #2:
php -f vehicles.php delete_one

Please enter ID of the vehicle to delete: 999

Vehicle 999 does not exist!

*/