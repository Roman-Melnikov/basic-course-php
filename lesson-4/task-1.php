<?php
//Подготовьте массив целых чисел (4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2).
// Разработайте анонимную функцию для применения в качестве аргумента array_map,
// возвращающую для каждого элемента массива строковое значение: «четное» или «нечетное».
// Для проверки четности числа используйте деление по модулю (%).

$mas = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$evenOddCheck = function (int $el): string {
    return $el & 1 ? 'нечетное' : 'четное';
};

$evenOdd = array_map($evenOddCheck, $mas);

print_r($evenOdd);

//Отлично что не стали функцию в array_map помещать, очень хорошо все читается. Тернарник то что нужно.

