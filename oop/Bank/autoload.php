<?php

spl_autoload_register(function (string $fullClassName) {
  $filePath = __DIR__ . DIRECTORY_SEPARATOR;
  $filePath .= str_replace('Guenka\\Bank', 'src', $fullClassName);
  $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $filePath);
  $filePath .= '.php';

  if (file_exists($filePath)) {
      require_once $filePath;
  }
});