<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

echo 'Connected';

$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');