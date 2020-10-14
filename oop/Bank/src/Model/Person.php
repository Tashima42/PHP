<?php

namespace Guenka\Bank\Model;

use Guenka\Bank\Model\CPF;

abstract class Person
{
  protected string $name;
  private CPF $cpf;

  public function __construct(string $name, CPF $cpf)
  {
    $this->name = $this->validateName($name);
    $this->cpf = $cpf;
  }

  final protected function validateName(string $name)
  {
    if (strlen($name) < 5) {
      echo "Name has less than 5 characters";
      exit();
    }
    return $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getCpf()
  {
    return $this->cpf;
  }
}
