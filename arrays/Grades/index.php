<?php

require_once 'Methods/Calculator.php';

use Study\Arrays\Methods\Calculator;

$calculator = new Calculator();

$grades = [9, 3, 10, 5, 10];

$median = $calculator->median($grades);


echo "Median: $median" . PHP_EOL;