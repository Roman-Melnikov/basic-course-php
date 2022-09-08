<?php
require_once 'errorHandler.php';
require_once 'Logger.php';

$controller = $_GET['controller'] ?? 'home';
$routes = require 'routes.php';

require_once $routes[$controller];