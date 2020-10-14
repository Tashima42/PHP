<?php

namespace Guenka\Bank\Model;

final class CPF 
{
  private string $cpf;

  public function __construct(string $cpf)
  {
    $this->$cpf = $cpf;
  }
  
}