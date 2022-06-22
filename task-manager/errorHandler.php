<?php
set_exception_handler(function (Throwable $exception) {
    //записываем ошибку в файл
    $logger = new Logger('error_handler');
    $logger->log($exception->getMessage());

    $error = 'Произошла ошибка. Команда уже работает над исправлением ошибки.';
    require_once 'view/error.php';
});