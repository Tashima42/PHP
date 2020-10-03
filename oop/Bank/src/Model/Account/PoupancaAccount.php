<?php

namespace Guenka\Bank\Model\Account;

use Guenka\Bank\Model\Account\Account;

class PoupancaAccount extends Account
{
  protected function getAccountTax(): float
  {
    return 0.03;
  }
}
