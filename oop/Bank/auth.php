<?php

require_once 'autoload.php';

use Guenka\Bank\Model\CPF;
use Guenka\Bank\Model\Employee\DirectorEmployee;
use Guenka\Bank\Service\Authenticator;

$authenticator = new Authenticator();

$victor = new DirectorEmployee(
  'Victor',
  new CPF('1801933'),
  50000
);

echo $authenticator->tryLogin($victor, '123456'). PHP_EOL;
