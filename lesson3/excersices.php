<?php
declare(strict_types=1);

/*
1. Apskaičiuokite PHP pagalba ir išveskite į terminalą. Kiekvienas rezultatas turi būti naujoje eilutėje:

987 + 545 - 32 * 94
32 pakelkite laipsniu 3 ir pridėkite 18
120 padalinkite iš 4 ir dar karta padalinkite iš 3
kokia liekana lieka po skaičiaus 187 dalybos iš 5
skaičiui 3 tris kartus pritaikykite increment operatorių - koki skaičių gaunate?
skaičiui 12 keturis kartus pritaikykite decrement operatorių - koki skaičių gaunate?
*/

//echo (987 + 545 - 32 * 94);
//echo PHP_EOL;
//echo (32 ** 3 + 18);
//echo PHP_EOL;
//echo (120 / 4 / 3);
//echo PHP_EOL;
//echo (187 % 5);
//$varMy1 = 3;
//$varMy1++;
//$varMy1++;
//$varMy1++;
//echo PHP_EOL;
//echo ($varMy1);
//$varMy2 = 12;
//$varMy2--;
//$varMy2--;
//$varMy2--;
//$varMy2--;
//echo PHP_EOL;
//echo ($varMy2);

/*
2. Išspausdinkite skaičius nuo 1 iki 10 naudodamiesi ciklu. Panaudokite visus 4 būdus ciklams aprašyti.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.

1
2
3
...
*/

//$myVar3 = 1;
//while ($myVar3 < 11) {
//    echo $myVar3;
//    echo PHP_EOL;
//    $myVar3++;
//}

//$myVar3 = 1;
//do  {
//    echo $myVar3;
//    echo PHP_EOL;
//    $myVar3++;
//} while ($myVar3 < 11);

//for ($i = 1; $i < 11; $i++) {
//    echo $i . PHP_EOL;
//}

//$nums = [1,2,3,4,5,6,7,8,9,10];
//foreach ($nums as $num) {
//    echo $num . PHP_EOL;
//}

/*
3. Išspausdinkite skaičius nuo 15 iki 3 naudodamiesi ciklu. Panaudokite sau patogiausią ciklą.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

//for ($i = 15; $i > 2; $i--) {
//    echo $i . PHP_EOL;
//}

/*
4. Išspausdinkite kas antrą skaičių nuo 1 iki 20 naudodamiesi ciklu.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.

1
3
5
...
*/
//
//$myVar7 = 1;
//while ($myVar7 < 21) {
//    echo $myVar7;
//    echo PHP_EOL;
//    $myVar7++;
//    $myVar7++;
//}

/*
5. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

//$myVar8 = 1;
//while ($myVar8 < 21) {
//    if ($myVar8 % 3 === 0){
//        echo $myVar8;
//        echo PHP_EOL;
//    }
//    $myVar8++;
//}

/*
6. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3 arba iš 5.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

//$myVar8 = 1;
//while ($myVar8 < 21) {
//    if ($myVar8 % 3 === 0 || $myVar8 % 5 === 0){
//        echo $myVar8;
//        echo PHP_EOL;
//    }
//    $myVar8++;
//}

/*
7. Iteruokite per skaičius, nuo 1 iki 20.
Jeigu skaičius dalijasi iš 3, išspausdinkite žodį 'Hey'.
Jeigu skaičius dalijasi iš 5, išspausdinkite žodį Ho'.
Jeigu skaičius dalijasi ir iš 5, ir iš 3, išspausdinkite žodį 'HeyHo'.
Kitu atveju išspausdinkite skaičių.
Viskas turi būti atspausdinti vienoje eilutėje su tarpais:
1 2 Hey 4 Ho Hey 7 8 Hey Ho 11 Hey 13 14 HeyHo 16 17 Hey 19 Ho
*/

//$myVar9 = 1;
//while ($myVar9 < 21) {
//    if ($myVar9 % 3 === 0 && $myVar9 % 5 === 0){
//        echo "HeyHo" . " ";
//    } elseif ($myVar9 % 3 === 0) {
//        echo "Hey" . " ";
//    } elseif ($myVar9 % 5 === 0) {
//        echo "Ho" . " ";
//    } else {
//        echo $myVar9 . " ";
//    }
//    $myVar9++;
//}

/*
8. Raskite sveikų skaičių nuo 1 iki 100 sumą.
*/
//
//$myVar10 = 1;
//$sum = 0;
//while ($myVar10 < 101) {
//    $sum += $myVar10;
//    $myVar10++;
//}
//echo $sum;

/*
9. Pasinaudodami ciklu išspausdinkite savaitės dienas iš masyvo $days vienoje eilutėje:
monday-tuesday-wednesday-thursday-friday-saturday-sunday-
*/

$days = [
    'monday',
    'tuesday',
    'wednesday',
    'thursday',
    'friday',
    'saturday',
    'sunday',
];
//foreach ($days as $day) {
//    echo $day . "-";
//}

/*
10. Iteruokite sveikus skaičius nuo -5 iki 5.
Išspausdinkite skaičių dvejopai:
1. Pasinaudojant paprastu echo
2. Pasinaudojant funkcija var_dump ir prieš tai pavertus į 'bool' tipo reikšmę

-5
bool(true)
-4
bool(true)
...

HINT: atkreipkite dėmesį į ką pavirsta skaičius 0
*/

$myNum = -5;
while ($myNum < 6) {
    echo $myNum . PHP_EOL;
    var_dump((bool)$myNum);
    $myNum++;
}