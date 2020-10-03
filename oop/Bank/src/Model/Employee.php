<?php

namespace Guenka\Bank\Model;

use Guenka\Bank\Model\Person;

class Employee extends Person
{
  private string $position;

  public function __construct(string $name, CPF $cpf, string $position)
  {
    parent::__construct($name, $cpf);
    $this->position = $position;
  }

  public function changeName(string $name)
  {
    $this->name = $this->validateName($name);
  }

  public function getPosition(): string
  {
    return $this->position;
  }
}
