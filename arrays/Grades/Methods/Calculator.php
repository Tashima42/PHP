<?php

namespace Study\Arrays\Methods;

class Calculator
{
  public function median(array $array)
  {
    $sizeOfArray = sizeof($array);
    $total = 0;
    $i = 0;
    $median = 0;

    if ($sizeOfArray > 0) {
      for ($i = 0; $i < $sizeOfArray; $i++) {
        $total += $array[$i];
      }
      $median = $total / $sizeOfArray;
      return $median;
    }
    echo "Wrong type";
    exit();
  }
}
