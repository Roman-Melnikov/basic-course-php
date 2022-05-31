<?php
require_once "model/User.php";
require_once "model/UserProvider.php";
$pdo = require 'db.php';

$pdo->exec('CREATE TABLE users (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(150),
  username VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
)');

$user = new User('admin');
$user->setName('Главный админ');

$userProvider = new UserProvider($pdo);
$userProvider->registerUser($user, '123');