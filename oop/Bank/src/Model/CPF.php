<?php

namespace Guenka\Bank\Model;

class CPF 
{
  private string $cpf;

  public function __construct(string $cpf)
  {
    $this->$cpf = $cpf;
  }
  
}