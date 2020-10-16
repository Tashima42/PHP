<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$studentRepo = new PdoStudentRepository();

$student = new Student(
    8,
    'Joao Augusto',
    new \DateTimeImmutable('2000-05-02')
);

//print_r($studentRepo->save($student));
//print_r($studentRepo->remove($student));
//print_r($studentRepo->studentsBirthDayAt(new \DateTimeImmutable('2005-05-02')));
print_r($studentRepo->allStudents());
