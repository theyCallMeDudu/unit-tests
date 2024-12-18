<?php

use core\database\Connection;
use Dotenv\Dotenv;

require_once '../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$connection = Connection::getConnection();

dd($_ENV['DB_NAME']);