<?php

namespace Guenka\Bank\Model\Employee;

use Guenka\Bank\Model\Person;
use Guenka\Bank\Model\CPF;

abstract class Employee extends Person
{
  private string $salary;

  public function __construct(string $name, CPF $cpf, float $salary)
  {
    parent::__construct($name, $cpf);
    $this->salary = $salary;
  }

  public function changeName(string $name)
  {
    $this->name = $this->validateName($name);
  }
 
  public function calculateBenfits(): float
  {
    $salary = $this->salary;
    return $salary *= $this->getBenefitsAmount();
  }

  public function salaryIncrease(float $percentageToIncrease): void
  {
    if($percentageToIncrease <= 0){
      echo "must be greater than 0";
      return;
    }
    $this->salary += $this->salary * $percentageToIncrease;
  }

  public function getPosition(): string
  {
    return $this->position;
  }

  public function getSalary(): float
  {
    return $this->salary;
  }

  abstract protected function getBenefitsAmount(): float;
}
