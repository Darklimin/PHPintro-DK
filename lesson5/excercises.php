<?php

// Visur sudėkite reikiamus parametrų bei return tipus

/*
1. Parašykite funkciją 'dividesBy5', kuri priimtų int tipo skaičių ir grąžintų jo dalybos iš 5 liekaną.
*/

//function dividesBy5 (int $num): int {
//    return $num / 5;
//}
//
//var_dump(dividesBy5(30));

/*
2. Parašykite funkciją 'arrayPrinter', kuri priimtų array tipo parametrą ir
išspausdintų kiekvieną masyvo elementą naujoje eilutėje.

Funkcijos kvietimas: arrayPrinter(['some text', 'another text'])
Funkcija grąžina: funkcija nieko negrąžina - ji tik išspausdina masyvą į terminalą:
'some text'
'another text'
...
*/
//
//function arrayPrinter (array $myArr): void {
//    foreach ($myArr as $arr){
//        echo $arr . PHP_EOL;
//    }
//}
//
//arrayPrinter(['some text', 'another text']);

/*
3. Parašykite funkciją 'stringEnhancer', kuri grąžintų pakeistą tekstą.

Funkcijos kvietimas: stringEnhancer('some text', '##')
Funkcija grąžina: '##some text##'

Funkcijos kvietimas: stringEnhancer('some text')
Funkcija grąžina: '**some text**'
*/

//function stringEnhancer (string $text, string $enh = "**"): string {
//            return $enh . $text . $enh;
//   }
//
//echo stringEnhancer('some text');
//echo stringEnhancer('some text', '##');


/*
4. Parašykite funkciją 'stringModifier', kuri pamodifikuotų paduotą string tipo kintamąjį.

Funkcijos kvietimas:
$x = 'some text';
stringModifier($x, '##');
echo $x; // '##some text##'

Funkcija grąžina: funkcija nieko negrąžina

*/
//
//function stringModifier (string $myVar, string $myMod = "##"): void {
//    global $x;
//    $x = $myMod . $myVar . $myMod;
//}
//
//$x = 'some text';
//stringModifier($x, '##');
//echo $x;


/*
4. Parašykite funkciją 'textReplicator', kuri grąžintų 'padaugintą' tekstą.

Funkcijos kvietimas:
textReplicator('some_text', 3);

Funkcija grąžina: 'some_text-some_text-some_text'

Funkcijos kvietimas:
textReplicator('some_text', null);

Funkcija grąžina: 'some_text'
*/

//function textReplicator (string $myText, ?int $replica = 1): string {
//    $output = $myText;
//    while ($replica > 1){
//        $output = $output . "-" . $myText;
//        $replica--;
//    };
//    return $output;
//}
//
//echo textReplicator('some_text', 3);
//echo PHP_EOL;
//echo textReplicator('some_text', null);

/*
4. Paverskite funkciją 'textReplicator', į veikiančią anoniminę funkciją.
*/

$myAnonFunction = function (string $myText, ?int $replica = 1): string {
    $output = $myText;
    while ($replica > 1){
        $output = $output . "-" . $myText;
        $replica--;
    };
    return $output;
};

var_dump($myAnonFunction('some_text', 3));
var_dump($myAnonFunction('some_text', null));