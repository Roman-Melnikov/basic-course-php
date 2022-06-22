<?php
require_once 'model/TaskProvider.php';
require_once 'model/Task.php';
require_once 'model/User.php';
$pdo = require 'db.php';

session_start();

//проверка залогинен ли пользователь
if (!isset($_SESSION['username'])) {
    header('Location: /?controller=registration');
    die();
}

$repository = new TaskProvider($pdo);
if (isset($_POST['addTask']) && !empty($_POST['addTask'])) {
    $newTask = new Task();
    $newTask->setDescription($_POST['addTask']);
    $newTask->setIsDone(false);
    $repository->addTask($newTask, $_SESSION['user_id']);
    header('Location: /?controller=task');
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'done') {
    $repository->isDone($_GET['id']);
    header('Location: /?controller=task');
    die();
}

$undoneList = $repository->getUndoneList($_SESSION['user_id']);

require_once 'view/tasks.php';
