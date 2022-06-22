<?php
require_once 'model/UserProvider.php';
$pdo = require 'db.php';

session_start();

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
}

$error = null;
if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;

    $userProvider = new UserProvider($pdo);
    $user = $userProvider->getByUsernameAndPassword($username, $password);

    if ($user === null) {
        $error = 'Пользователь с указанными учетными данными не найден';
    } else {
        //сохранять в сессии не объект, а логин и id
        $_SESSION['username'] = $user->getUsername();
        $_SESSION['user_id'] = $user->getId();
    }
}

if (isset($_SESSION['username'])) {
    header('Location: /');
}

require_once 'view/signin.php';
