<?php
require_once 'model/UserProvider.php';
require_once 'model/User.php';
$pdo = require 'db.php';

session_start();

$error = null;
if (isset($_POST['name'], $_POST['username'], $_POST['password'])) {
    ['name' => $name, 'username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider($pdo);

    if ($userProvider->getByUsernameAndPassword($username, $password)) {
        $error = 'Пользователь с указанными учетными данными уже существует';
    } else {
        $user = new User($username);
        $user->setName($name);

        //регистрация нового пользователя в БД
        $userProvider->insertUser($user, $password);

        //получение текущего пользователя с id из БД
        $currentUser = $userProvider->getByUsernameAndPassword($username, $password);

        $_SESSION['user'] = $currentUser;
    }
}

if (isset($_SESSION['user'])) {
    header('Location: /');
}

require_once 'view/signup.php';
