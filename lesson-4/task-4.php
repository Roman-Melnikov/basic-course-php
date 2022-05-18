<?php
//Реализуйте рекурсивную функцию вычисления факториала через замыкание.

$input = 5;

$factorial = function (int $number) use (&$factorial): int {
    if ($number === 0 || $number === 1) {
        return 1;
    }
    return $number * $factorial($number - 1);
};

echo $factorial($input);