<?php
//Сгенерируйте массив из 100 элементов, значения которого могут быть от 1 до 200 так, чтобы значения были уникальные.
//[1, 5, 6, .... 200] ( in_array )

$mas = [];

for ($i = 1; $i <= 100; $i++) {
    do
        $newItem = rand(1, 200);
    while (in_array($newItem, $mas));
    $mas[] = $newItem;
}

print_r($mas);
