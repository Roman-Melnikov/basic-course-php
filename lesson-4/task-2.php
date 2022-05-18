<?php
//Разработайте функцию с объявленными типами аргументов и возвращаемого значения, принимающую в качестве аргумента массив целых чисел.
//Результатом работы функции должен быть массив, содержащий три элемента:
// max — наибольшее число, min — наименьшее число, avg — среднее арифметическое всех чисел массива.

$mas = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$aggregationData = function (array $numbers): array {
    sort($numbers);
    return [
        'max' => $numbers[count($numbers) - 1],
        'min' => $numbers[0],
        'avg' => array_sum($numbers) / count($numbers),
    ];
};

print_r($aggregationData($mas));
