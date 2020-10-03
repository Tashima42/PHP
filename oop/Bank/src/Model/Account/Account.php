<?php

namespace Guenka\Bank\Model\Account;

use Guenka\Bank\Model\Account\Owner;

abstract class Account
{
  private Owner $owner;
  private float $balance;

  private static int $numberOfAccounts = 0;

  public function __construct(Owner $owner)
  {
    $this->owner = $owner;
    $this->balance = 0;

    self::$numberOfAccounts++;
  }

  public function withdrawMoney(float $valueToWithdraw): void
  {
    $valueToWithdraw *=  $this->getAccountTax();
    if ($valueToWithdraw > $this->balance) {
      echo "Not enough balance";
      return;
    }
    $this->balance -= $valueToWithdraw;
  }

  public function depositMoney(float $valueToDeposit): void
  {
    if ($valueToDeposit < 0) {
      echo "Yout can't deposit zero or less";
      return;
    }
    $this->balance += $valueToDeposit;
  }

  public function getBalance(): float
  {
    return $this->balance;
  }

  public static function getNumberOfAccounts(): int
  {
    return self::$numberOfAccounts;
  }

  public function __destruct()
  {
    self::$numberOfAccounts--;
  }

  abstract protected function getAccountTax(): float;
}
