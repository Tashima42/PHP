<?php

namespace Guenka\Bank\Model;

class Address
{
  private string $street;
  private string $city;
  private string $state;
  private string $country;

  public function __constructor(string $street, string $city, string $state, string $country)
  {
    $this->street = $street;
    $this->city = $city;
    $this->state = $state;
    $this->country = $country;
  }

  public function getStreet(): string
  {
    return $this->street;
  }

  public function getCity(): string
  {
    return $this->city;
  }
  
  public function getState(): string
  {
    return $this->state;
  }
  public function getCountry(): string
  {
    return $this->country;
  }
}