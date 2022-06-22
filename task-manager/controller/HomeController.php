<?php
require_once 'model/User.php';

session_start();

$pageHeader = 'Добро пожаловать';

$username = null;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

require_once 'view/home.php';
