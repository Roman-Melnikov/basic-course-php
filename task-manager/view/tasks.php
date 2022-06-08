<head>
    <title>Задачи</title>
    <meta charset="UTF-8">
</head>
<body>
<?php if ($undoneList !== null): ?>
    <h2>Список невыполненных задач</h2>
    <ol>
        <?php foreach ($undoneList as $task) : ?>
            <li><?= $task->getDescription() ?></li>
            <a href="?controller=task&isDone=<?= $task->id ?>">сделать выполненной</a>
        <?php endforeach ?>
    </ol>
    <a href="?controller=security&action=logout">Выйти</a>
<?php else: ?>
    <h2>Невыполненных задач нет</h2>
<?php endif; ?>
<form method="post">
    <input type="text" name="addTask" placeholder="Опишите задачу"/>
    <input type="submit" value="Добавить"/>
</form>
<a href="?controller=home">Назад</a>
</body>
