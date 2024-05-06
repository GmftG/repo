<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

const MESSAGES_FILE = __DIR__ . "/data/messages.json";

require_once("vendor/autoload.php");

$router = new TeaLovers\TeaChat\Core\Router();
$router->run();

?>
