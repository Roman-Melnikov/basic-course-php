<?php

use model\Task;
use model\User;

require_once 'User.php';
require_once 'Task.php';
require_once 'Comment.php';
require_once 'TaskService.php';

$user1 = new User('Roma', '12345@yandex.ru');
$task1 = new Task($user1);
$comment1 = new Comment($user1, $task1);

TaskService::addComment($comment1);
$task1->markAsDone();

print_r($task1);
