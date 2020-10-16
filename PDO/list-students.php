<?php

use Alura\Pdo\Domain\Model\Student;

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$statement = $pdo->query('SELECT * FROM  students;');
print_r($statement->fetchColumn(2));

$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach ($studentDataList as $studentData) {
  $studentList[] = new Student(
    $studentData['id'],
    $studentData['name'],
    new \DateTimeImmutable($studentData['birth_date'])
  );
}
echo print_r($studentDataList);

/* 
while ($studentData = $statement->fetch(PDO::FETCH_ASSOC)) {
  $student = new Student(
    $studentData['id'],
    $studentData['name'],
    new \DateTimeImmutable($studentData['birth_date'])
  );
  echo $student->age() . PHP_EOL;
} 
*/
