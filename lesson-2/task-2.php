<?php
do {
    $amountTasks = (int)readline("Введите число количества задач запланированных на день ?\n");
} while ($amountTasks <= 0);

$outputMessage = "Запланировано:\n";
$totalTime = 0;

for ($i = 1; $i <= $amountTasks; $i++) {
    $nameTask = readline("Какая задача запланирована?\n");
    $amountTime = readline("Сколько понадобится времени?\n");
    $outputMessage .= "$nameTask ${amountTime}ч.\n";
    $totalTime += $amountTime;
}

echo $outputMessage;
echo "Всего времени: {$totalTime}ч.";
