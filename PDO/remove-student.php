<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$preaparedStatement = $pdo->prepare('DELETE FROM students WHERE id = :id;');
$preaparedStatement->bindValue(':id', 4, PDO::PARAM_INT);

if($preaparedStatement->execute()) {
  echo "ok";
}