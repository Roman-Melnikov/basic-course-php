<?php
/*По введенному числу количества яблок верните правильное окончание 1 яблоко, 2 яблока, 10 яблок.*/

$amountApples = (int)readline("Введите количество яблок:\n");
$amountApplesForCalc = $amountApples;

while ($amountApplesForCalc > 100) {
    $amountApplesForCalc -= 100;
}

if ($amountApplesForCalc >= 11 && $amountApplesForCalc <= 20) {
    $variantEnding = "яблок";
} else {
    $remainder = $amountApplesForCalc % 10; //остаток от деления
    if ($remainder === 1) {
        $variantEnding = "яблоко";
    } elseif ($remainder >= 2 && $remainder <= 4) {
        $variantEnding = "яблока";
    } else {
        $variantEnding = "яблок";
    }
}

echo "$amountApples $variantEnding";