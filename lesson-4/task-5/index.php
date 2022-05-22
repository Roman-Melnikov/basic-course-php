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

//А почему string то возвращает? Матемаические функции же, надо float. 'NULL' надо чтобы null как тип вернуло через ?float
//function div(float $x, float $y): ?float
//{
//return $y != 0 ? $x / $y : null;
//}
//
//require_once 'functions.php'; вы же библиотечную подключаете, вдруг еще где то будете подключать
//
//Перед return $operation($x, $y) хорошо бы вызвать function_exists() проверку, мало ли что там ввели.