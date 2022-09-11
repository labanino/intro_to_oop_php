<?php

// Define a class
class User {
  // Properties
  public $name;

  // Methods
  public function sayHello() {
    return $this->name . " says Hello!"; 
  }
}

// Instantiate user object from "User Class"
$user = new User();
$user->name = "Alex";
echo $user->sayHello();