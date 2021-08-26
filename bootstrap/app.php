<?php

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

require_once("../config/database.php");

new \Core\Application\Application();


