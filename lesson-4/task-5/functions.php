<?php
//Реализовать 4 математические функции add, sub... учесть, что div должен возвращать null при делении на ноль.
// Реализовать универсальную фукнцию mathOperation($x, $y, $operation)
// которая будет делать все 4 действия математических использую реализованные ранее 4 функции.
// Вместо switch попробуйте использовать тему вызова функции через переменную.

function sum(int $x, int $y): string
{
    return (string)($x + $y);
}

function diff(int $x, int $y): string
{
    return (string)($x - $y);
}

function multi(int $x, int $y): string
{
    return (string)($x * $y);
}

function div(int $x, int $y): string
{
    return (string)($y !== 0 ? $x / $y : 'NULL');
}