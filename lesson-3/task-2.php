<?php
//Разработайте скрипт для запуска из командной строки, генерирующий персонализированные поздравления с днём рождения.
//Подготовьте два массива: в первом храните пожелания (счастья, здоровья и т.д.), во втором эпитеты (бесконечного, крепкого и т.д.).
//При запуске запросите имя именинника и после ввода сгенерируйте текст поздравления, включающий три пожелания.
//Комбинации эпитетов и пожеланий должны быть случайными. В результате необходимо получить строку, по следующему примеру:
//«Дорогой Илон Маск, от всего сердца поздравляю тебя с днем рождения, желаю космического терпения, бесконечного здоровья и безудержного воображения!».
//Для реализации используйте функции array_rand и implode;
//ИЛИ сделайте генератор речи. Выведите несколько фраз.

$adjectives = ['бесконечного', 'крепкого', 'безудержного'];
$nouns = ['счастья', 'здоровья', 'воображения'];
$wishesArr = [];
$wishesQuantity = 3;

for ($i = 1; $i <= $wishesQuantity; $i++) {
    $adjectivesKey = array_rand($adjectives);
    $nounsKey = array_rand($nouns);
    switch ($i) {
        case $wishesQuantity - 1:
            $wishesArr[] = "$adjectives[$adjectivesKey] $nouns[$nounsKey] и";
            break;
        case $wishesQuantity:
            $wishesArr[] = "$adjectives[$adjectivesKey] $nouns[$nounsKey]";
            break;
        default:
            $wishesArr[] = "$adjectives[$adjectivesKey] $nouns[$nounsKey],";
    }
    unset($adjectives[$adjectivesKey], $nouns[$nounsKey]);
}

$wishesStr = implode(" ", $wishesArr);

$name = readline('Как вас зовут?' . PHP_EOL);
echo "Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю $wishesStr!";