<?php

require_once 'autoload.php';

use Guenka\Bank\Model\Employee\{DeveloperEmployee, DirectorEmployee, ManagerEmployee};
use Guenka\Bank\Model\CPF;
use Guenka\Bank\Service\BenefitsController;

$mateo = new DeveloperEmployee(
  'Mateo',
  new CPF('14512'),
  10000
);

$jorge = new ManagerEmployee(
  'Jorge',
  new CPF('18351'),
  20000
);

$marcus = new DirectorEmployee(
  'Marcus',
  new CPF('182839'),
  50000
);

$controller = new BenefitsController();
$controller->addBenefits($mateo);
$controller->addBenefits($jorge);
$controller->addBenefits($marcus);

echo $controller->getTotalBenefits() . PHP_EOL;
echo $marcus->canAuthenticate('123456') . PHP_EOL;

$mateo->levelPromotion();
echo $mateo->getSalary() . PHP_EOL;
