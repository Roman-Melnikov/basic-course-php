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
        case "1242": //case "1242" и case "1709" код одинаков, дублирование, надо было: case "1709": case "1242": и тут нужный код, case это же как метка.
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
            $correctAnswer = false;//если ни один case не сработает, переменная не будет определена, в default то надо было указать сообщение.
    }
} while(!$correctAnswer);

echo $message;
