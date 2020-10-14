<?php

require_once 'autoload.php';

use Guenka\Bank\Model\Account\{Owner, PoupancaAccount, CorrenteAccount};
use Guenka\Bank\Model\{Address, CPF};

$jorgeAccount = new CorrenteAccount(
  new Owner(
    'Jorge',
    new CPF('1'),
    new Address('Parca Street', 'New York', 'New York', 'United States')
  )
);

$jorgeAccount->depositMoney(10000);
$jorgeAccount->withdrawMoney(500);

$mateoAccount = new CorrenteAccount(
  new Owner(
    'Mateo',
    new CPF('2'),
    new Address('10th street', 'Findlay', 'Ohio', 'United States')
  )
);

$mateoAccount->depositMoney(10000);
$mateoAccount->transferMoney(300, $jorgeAccount);

echo $jorgeAccount->getBalance() . PHP_EOL;
echo $mateoAccount->getBalance() . PHP_EOL;
echo PoupancaAccount::getNumberOfAccounts() . PHP_EOL;

$myHouse = new Address('Parca Street', 'New York', 'New York', 'United States');
echo $myHouse. PHP_EOL;