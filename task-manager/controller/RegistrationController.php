<?php
require_once 'model/UserProvider.php';
require_once 'model/User.php';
$pdo = require 'db.php';

session_start();

$error = null;
if (isset($_POST['name'], $_POST['username'], $_POST['password'])) {
    ['name' => $name, 'username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider($pdo);
    $user = new User($username);
    $user->setName($name);

    try {
        //Регистрация нового пользователя в БД.Если такой логин уже есть, то будет "выброшено" исключение.
        $id = $userProvider->insertUser($user, $password);

        //сохраняем в сессии не объект, а логин и id
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['user_id'] = $id;
    } catch (Exception $exception) {
        $error = $exception->getMessage();
    }
}

if (isset($_SESSION['username'])) {
    header('Location: /');
}

require_once 'view/signup.php';
