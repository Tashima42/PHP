<?php

namespace Guenka\Bank\Model;

/**
 * @property-read string $street
 * @property-read string $city
 * @property-read string $state
 * @property-read string $country
 */


class Address
{
  private string $street;
  private string $city;
  private string $state;
  private string $country;

  public function __construct(string $street, string $city, string $state, string $country)
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

  public function __toString(): string
  {
    return "{$this->street}, {$this->city}, {$this->state}, {$this->country}";
  }

  public function __get(string $attributeName)
  {
    $method = 'get' . ucfirst($attributeName);
    return $this->$method(); 
  }
}