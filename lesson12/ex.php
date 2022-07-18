<?php

declare(strict_types=1);

/*
1. Parašykite funkciją, kuri pašalintų paskutinį žodį iš stringo
"A car is standing in a parkinglot." --> "A car is standing in a"
*/

$output = '';
function removeLastWord($myString): void{
    $output = preg_replace('/\W\w+\s*\W*$/', '$1', $myString);
    echo $output;
}

//removeLastWord('A car is standing in a parkinglot.');


//
//2. Parašykite funkciją, kuri patikrintų, ar tekstas atitinka lietuviško mobilaus telefono numerio formatą
//"+37062345678" - true
//"+37012345678" - false
//"+3706234567" - false
//"+3706234567a" - false

function valMobNum ($myString): void {
    if (preg_match('/^\+3706[1-9][0-9]{6}$/', $myString)){
        echo 'Number valid';
    } else {
        echo 'Number invalid';
    }
}

//valMobNum('+37062345678');

//3. Patobulinkite funkciją (2). Funkcija turėtų galėti patikrinti ir tokius telefono numerius:
//"+370 623 45678"
//"+370-623-45678"
//"+370-623 45678"
//"00370 623 45678"
//Jeigu telefono numeris validus, iš funkcijos turėtų grįžti tvarkingai suformatuotas telefono numeris:
//"+370-623 45678" --> "+37062345678"

function valMobNumOne ($myString): void {
    $band = preg_replace('/\D+/i', '', $myString);
    $secBand = preg_replace('/^[0]{2}/i', '', $band);
    if (preg_match('/^[0-9]{11}$/', $secBand)) {
        echo 'Number +' . $secBand . ' valid';
    } else {
        echo 'Number invalid';
    }
}

//valMobNumOne('00370-600 45678');

//4. Parašykite funkciją, kuri užmaskuotų dalį vartotojo duomenų. Pavardės ir gimimo metų simboliai
//turėtų būti pakeisti i simbolius 'X'.
//"John Smith, 1979 05 15" --> "John XXXXX, XXXX 05 15"

function maskData($myString): void{
    $myArray = explode(' ', $myString);
    $nameMask = '';
    for ($x=1; $x<strlen($myArray[1]); $x++){
        $nameMask = $nameMask . 'X';
    }
    $myArray[1] = $nameMask . ',';
    $myArray[2] = 'XXXX';
    $output = implode(' ', $myArray);
    echo $output;
}

//maskData('John Smith, 1979 05 15');

//5. Parašykite funkciją, kuri pravaliduotų IPv4 adresą. IPv4 adresas yra sudarytas iš 4 skaičių, kurių kiekvienas gali
//būti nuo 0 iki 255. Skaičiai atskirti taškais.
//Pvz.:
//255.255.255.255
//1.1.0.1
//*/

function vadidateIP (string $myString): void
    {
        $isValid = filter_var($myString, FILTER_VALIDATE_IP);
        if ($isValid){
            echo $isValid . ' is valid IPv4';
        } else {
            echo 'IPv4 is invalid';
        }
}

vadidateIP('255.255.255.250');
