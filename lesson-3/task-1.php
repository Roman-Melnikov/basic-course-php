<?php
//Подготовьте два массива одинаковой размерности, но не менее 10 элементов, с произвольными числовыми значениями.
//Разработайте скрипт для запуска из командной строки, выполняющий перемножение элементов двух массивов и выводящий
//результат в консоль с помощью print_r. Умножение должно выполняться только между элементами соответствующих индексов,
//то есть нулевой элемент первого массива умножается на нулевой элемент второго массива;

$masRandom1 = [];
$masRandom2 = [];
$result = [];
$q = 10;
$minRange = 0;
$maxRange = 15;

for ($i = 0; $i < $q; $i++) {
    $masRandom1[] = rand($minRange, $maxRange);
    $masRandom2[] = rand($minRange, $maxRange);
    $result[] = $masRandom1[$i] * $masRandom2[$i];
}

print_r($result);
