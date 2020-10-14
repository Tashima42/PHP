<?php

namespace Guenka\Bank\Service;

use Guenka\Bank\Model\Employee\DirectorEmployee;

class Authenticator 
{
  public function tryLogin(DirectorEmployee $director, string $password): bool
  {
    if(!$director->canAuthenticate($password)) {
      return false;
    }
    return true;
  }
}