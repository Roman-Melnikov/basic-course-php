<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<h1><?= $pageHeader ?></h1>
<?php if ($username !== null) : ?>
    <p>Рады вас приветствовать, <?= $username ?></p>
    <a href="?controller=security&action=logout">Выйти</a>
    <a href="?controller=task">Ваш список задач</a>
<?php else : ?>
    <a href="?controller=security">Войти</a>
<?php endif ?>
</body>


