<?php
/**
 * @var Task $task
 */

use model\Task;

?>
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>

<h1><?= $pageHeader ?></h1>
Добро пожаловать <?=$username?>! <a href="/?controller=security&action=logout">Выйти</a>
<a href="/">Главная</a>
<br><br>
<form action="/?controller=tasks&action=add" method="post">
    <input type="text" name="task" placeholder="Опишите новую задачу">
    <input type="submit" value="Добавить">
</form>

<?php foreach ($tasks as $task): ?>
    <div>
        <?= $task->getDescription() ?> [Done]
    </div>
<?php endforeach; ?>

</body>
