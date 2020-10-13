<?php

namespace Guenka\Bank\Model\Employee;

use Guenka\Bank\Model\Employee\Employee;

class DeveloperEmployee extends Employee
{
  public function levelPromotion()
  {
    $percentageToIncrease = 0.3;
    $this->salaryIncrease($percentageToIncrease);
  }

  protected function getBenefitsAmount(): float
  {
    return 0.1;
  }
}