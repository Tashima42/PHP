<?php

function showMessage($message)
{
  echo $message . PHP_EOL;
}

function addAccount($ownerName, $balance)
{
  $accountInfo = [
    'owner' => $ownerName,
    'balance' => $balance
  ];
  return $accountInfo;
}

function withdrawMoney(string $accountBalance, float $valueToWithdraw)
{
  if ($accountBalance >= $valueToWithdraw) {
    return  $accountBalance -= $valueToWithdraw;
  } else {
    return $accountBalance;
  }
}

function addMoney(string $accountBalance, float $valueToAdd)
{
  if ($valueToAdd > 0) {
    return $accountBalance += $valueToAdd;
  } else {
    return $accountBalance;
  }
}
