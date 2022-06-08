<?php
require_once 'model/TaskProvider.php';
require_once 'model/Task.php';
require_once 'model/User.php';
$pdo = require 'db.php';

session_start();

$repository = new TaskProvider($pdo);
if (isset($_POST['addTask']) && !empty($_POST['addTask'])) {
    $newTask = new Task();
    $newTask->setDescription($_POST['addTask']);
    $newTask->setIsDone(false);
    $repository->addTask($newTask, $_SESSION['user']->getId());
}

if (isset($_GET['isDone'])) {
    $repository->isDone($_GET['isDone']);
}

$undoneList = $repository->getUndoneList($_SESSION['user']->getId());

require_once 'view/tasks.php';
