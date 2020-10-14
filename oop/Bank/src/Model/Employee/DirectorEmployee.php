<?php

namespace Guenka\Bank\Model\Employee;

use Guenka\Bank\Model\Authenticated;
use Guenka\Bank\Model\Employee\Employee;

class DirectorEmployee extends Employee implements Authenticated
{
  protected function getBenefitsAmount(): float
  {
    return 2;
  }

  public function canAuthenticate(string $password): bool
  {
    return $password === '123';
  }
}