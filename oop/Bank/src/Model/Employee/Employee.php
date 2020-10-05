<?php

namespace Guenka\Bank\Model\Employee;

use Guenka\Bank\Model\Person;
use Guenka\Bank\Model\CPF;

abstract class Employee extends Person
{
  private string $position;
  private string $wage;

  public function __construct(string $name, CPF $cpf, string $position, float $wage)
  {
    parent::__construct($name, $cpf);
    $this->position = $position;
    $this->wage = $wage;
  }

  public function changeName(string $name)
  {
    $this->name = $this->validateName($name);
  }

  public function getPosition(): string
  {
    return $this->position;
  }

  public function getWage(): float
  {
    return $this->wage;
  }

  public function calculateBenfits(): float
  {
    return $this->wage *= $this->getBenefitsAmount();
  }

  abstract protected function getBenefitsAmount(): float;
}
