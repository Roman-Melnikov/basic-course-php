<?php
//Подготовьте многомерный ассоциативный массив следующего вида:
//$students = [
//    'ИТ20' => [
//        'Иванов Иван' => 5,
//        'Кириллов Кирилл' => 3
//    ],
//    'БАП20' => [
//        'Антонов Антон' => 4
//    ]
//];
//В качестве ключей массива используются названия групп. В качестве элементов — отношение студента и его оценки.
//Добавьте произвольные имена студентов и их оценки в обе группы.
//После подготовки массива, реализуйте скрипт командной строки, выполняющий следующие вычисления:
//b) Составить список на отчисление, в который попадают студенты из любой группы, имеющие оценку ниже трёх.
// В списке студенты должны быть сгруппированы по их группе.
// Выведите полученные данные в консоль, с помощью функции print_r;

$students = [
    'ИТ20' => [
        'Сергеев Сергей' => 5,
        'Иванов Иван' => 4,
        'Петров Петр' => 2,
        'Кириллов Кирилл' => 3,
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Андреев Андрей' => 2,
        'Илюшин Илья' => 1,
        'Александров Александр' => 4,
    ],
];

$badList = [];
foreach ($students as $nameGroup => $dataGroup) {
    foreach ($dataGroup as $member => $mark) {
        if ($mark < 3) {
            $$nameGroup = $member;
            $badList = array_merge_recursive($badList, compact($nameGroup));
        }
    }
}

print_r($badList);

