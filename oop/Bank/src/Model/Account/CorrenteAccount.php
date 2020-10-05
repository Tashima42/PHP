<?php

namespace Guenka\Bank\Model\Account;

use Guenka\Bank\Model\Account\Account;

class CorrenteAccount extends Account
{
  public function transferMoney(float $valueToTransfer, Account $accountToTransfer): void
  {
    if ($valueToTransfer > $this->getBalance()) {
      echo "Value is bigger than balance or less than zero";
      return;
    }
    $this->withdrawMoney($valueToTransfer);
    $accountToTransfer->depositMoney($valueToTransfer);
  }


  protected function getAccountTax(): float
  {
    return 0.05;
  }
}
