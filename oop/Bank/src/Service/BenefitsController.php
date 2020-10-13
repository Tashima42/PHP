<?php

namespace Guenka\Bank\Service;

use Guenka\Bank\Model\Employee\Employee;

class BenefitsController
{
  private $benefitsTotal = 0;

  public function addBenefits(Employee $employee)
  {
    $this->benefitsTotal += $employee->calculateBenfits();
  }

  public function getTotalBenefits()
  {
    return $this->benefitsTotal;
  }
}