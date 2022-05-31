<?php

require_once 'model/TaskProvider.php';

$taskProvider = new TaskProvider();
if (isset($_POST['addTask']) && !empty($_POST['addTask'])) {
    echo $_POST['addTask'];
    echo print_r($taskProvider->getTasks());
    $taskProvider->addTask($_POST['addTask']);
    $undoneList = $taskProvider->getUndoneList();
    $_SESSION['undonelist'] = $undoneList;
}

if (isset($_SESSION['undonelist'])) {
    $undoneList = $_SESSION['undonelist'];
} else {
    $undoneList = $taskProvider->getUndoneList();
    $_SESSION['undonelist'] = $undoneList;
}

require_once 'view/tasks.php';
