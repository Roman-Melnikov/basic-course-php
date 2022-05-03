<?php
$correctAnswer = false;
$correctMessage = "Поздравляю! Вы ответили правильно.";
$inCorrectMessage = "К сожалению ответ не верный.";

do {
    echo "В каком году произошла Куликовская битва ?\n";
    echo "-1242\n";
    echo "-1709\n";
    echo "-1380\n";
    $userAnswer = readline();
    switch ($userAnswer) {
        case "1242":
            $correctAnswer = true;
            $message = $inCorrectMessage;
            break;
        case "1709":
            $correctAnswer = true;
            $message = $inCorrectMessage;
            break;
        case "1380":
            $correctAnswer = true;
            $message = $correctMessage;
            break;
        default:
            $correctAnswer = false;
    }
} while(!$correctAnswer);

echo $message;
