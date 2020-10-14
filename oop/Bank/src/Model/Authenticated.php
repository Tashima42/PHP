<?php

namespace Guenka\Bank\Model;

interface Authenticated {
  public function canAuthenticate(string $password):  bool;
}