<?php

namespace Guenka\Bank\Model\Employee;

use Guenka\Bank\Model\Employee\Employee;

class DirectorEmployee extends Employee
{
  protected function getBenefitsAmount(): float
  {
    return 2;
  }

  public function canAuthenticate(string $password): bool
  {
    $controlPassword = '123456';
    if($password != $controlPassword){
      return false;
    }
    return true;
  }
}