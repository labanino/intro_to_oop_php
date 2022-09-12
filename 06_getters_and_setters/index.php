<?php

class User {
  private $name;
  private $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  // __GET Magic Method 
  // So you don't have to create getters and setters for every property
  public function __get($property) {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  public function __set($property, $value) {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }
    return $this;
  }
}

$user = new User('Alex', 56);
// echo $user->getName();
$user->__set('name', 'John');
echo $user->__get('name');