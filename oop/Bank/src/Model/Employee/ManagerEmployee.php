<?php

namespace Guenka\Bank\Model\Employee;

use Guenka\Bank\Model\Employee\Employee;

class ManagerEmployee extends Employee
{
  protected function getBenefitsAmount(): float
  {
    return 0.2;
  }
}