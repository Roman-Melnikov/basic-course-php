<?php
$name = readline("Как вас зовут?\n");

$firstTask = readline("Какая задача стоит перед вами сегодня?\n");
$firstTime = readline("Сколько примерно времени эта задача займет?\n");

$secondTask = readline("Какая задача стоит перед вами сегодня?\n");
$secondTime = readline("Сколько примерно времени эта задача займет?\n");

$thirdTask = readline("Какая задача стоит перед вами сегодня?\n");
$thirdTime = readline("Сколько примерно времени эта задача займет?\n");

$sumTimes = $firstTime + $secondTime + $thirdTime;

echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n- $firstTask ({$firstTime}ч)\n- $secondTask ({$secondTime}ч)\n- $thirdTask ({$thirdTime}ч)\nПримерное время выполнения плана = {$sumTimes}ч";