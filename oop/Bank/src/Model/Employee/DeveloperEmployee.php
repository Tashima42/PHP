<?php

namespace Guenka\Bank\Model\Employee;

use Guenka\Bank\Model\Employee\Employee;

class DeveloperEmployee extends Employee
{
  protected function getBenefitsAmount(): float
  {
    return 0.1;
  }
}