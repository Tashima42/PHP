<?php

namespace Alura\Pdo\Domain\Repository;

use Alura\Pdo\Domain\Model\Student;

interface StudentRepository
{
  public function allStudents(): array;
  public function studentsBirthDayAt(\DateTimeInterface $birthDate): array;
  public function insert(Student $student): bool;
  public function remove(Student $student): bool;
}