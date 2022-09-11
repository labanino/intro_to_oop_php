<?php

class User {
  public $name;
  public $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;

    // echo "My name is " . $this->name;
  }

  public function __destruct() {
    echo "Destruct is working!";
  }

  public function myAge() {
    return "My age is " . $this->age;
  }
}

$user = new User("Alex", 24 ); // same as $user-name = "Alex";
// echo "My name is " . $user->name;
echo $user->myAge();