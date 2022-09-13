<?php

class User {
  // Properties
  public $name;
  public $age;

  // Constructors
  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }
  // toString method, not setters and getters
  public function __toString() {
    return "Name: " . $this->name . "<br> Age: " . $this->age;
  }

  // Getters and Setters
  public function setName($name) {
    $this->name = $name;
  }

  public function getName() {
    echo $this->name;
  }

  public function setAge($age) {
    $this->age = $age;
  }

  public function getAge() {
    echo $this->age;
  }
}

$user = new User("Labanino", 56);
echo $user;