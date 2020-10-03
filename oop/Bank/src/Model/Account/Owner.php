<?php

namespace Guenka\Bank\Model\Account;

use Guenka\Bank\Model\Person;
use Guenka\Bank\Model\CPF; 
use Guenka\Bank\Model\Address;

class Owner extends Person
{
  private Address $address;

  public function __construct(string $name, CPF $cpf, Address $address)
  {
    parent::__construct($name, $cpf);
    $this->address = $address;
  }

}