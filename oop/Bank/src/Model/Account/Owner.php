<?php

namespace Guenka\Bank\Model\Account;

use Guenka\Bank\Model\Person;
use Guenka\Bank\Model\CPF; 
use Guenka\Bank\Model\Address;
use Guenka\Bank\Model\Authenticated;

class Owner extends Person implements Authenticated
{
  private Address $address;

  public function __construct(string $name, CPF $cpf, Address $address)
  {
    parent::__construct($name, $cpf);
    $this->address = $address;
  }

  public function canAuthenticate(string $password): bool
  {
    return $password === '456';
  }

}