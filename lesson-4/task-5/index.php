<?php
//Реализовать 4 математические функции add, sub... учесть, что div должен возвращать null при делении на ноль.
// Реализовать универсальную фукнцию mathOperation($x, $y, $operation)
// которая будет делать все 4 действия математических использую реализованные ранее 4 функции.
// Вместо switch попробуйте использовать тему вызова функции через переменную.

require 'functions.php';

$action = readline('Введите одно из четырёх действий:' . PHP_EOL .
    '- sum' . PHP_EOL .
    '- diff' . PHP_EOL .
    '- multi' . PHP_EOL .
    '- div' . PHP_EOL
);

$firstNumber = (int)readline('Введите первое число' . PHP_EOL);
$secondNumber = (int)readline('Введите второе число' . PHP_EOL);

$mathOperation = function (int $x, int $y, string $operation): string {
    return $operation($x, $y);
};

echo "Результат = {$mathOperation($firstNumber, $secondNumber, $action)}";