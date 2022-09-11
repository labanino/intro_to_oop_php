<?php

// Access modifiers = Public, Private and Protected
class User {
  // Properties
  private $name;

  // Methods
  protected function sayHello() {
    return "Hello!"; 
  }
}

// Instantiate user object from "User Class"
$user = new User();
$user->name = "Alex";

echo $user->sayHello();