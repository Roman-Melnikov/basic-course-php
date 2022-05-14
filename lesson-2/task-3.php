<?php
do {
    echo "  Представьте, что вы ведёте счёт на пальцах одной ладони,\n";
    echo "не считая два раза подряд один и тот же, начиная с большого.\n";
    echo "Дойдя до мизинца, вы продолжаете счёт в обратном направлении.\n";
    echo "Введите  любое положительное число и узнайте какому пальцу оно соответствует:";
    $numberFinger = (int)readline();
} while ($numberFinger <= 0);

if ($numberFinger % 8 === 1) { //Цепочка if else антипаттерн, может лучше Switch?
    $matchFinger = "Большому пальцу";
} elseif ($numberFinger % 8 === 2 || $numberFinger % 8 === 0) {
    $matchFinger = "Указательному пальцу";
} elseif ($numberFinger % 8 === 3 || $numberFinger % 8 === 7) {
    $matchFinger = "Среднему пальцу";
} elseif ($numberFinger % 8 === 4 || $numberFinger % 8 === 6) {
    $matchFinger = "Безымянному пальцу";
} elseif ($numberFinger % 8 === 5) {
    $matchFinger = "Мизинцу";
}

echo "Данное число соответствует $matchFinger.";