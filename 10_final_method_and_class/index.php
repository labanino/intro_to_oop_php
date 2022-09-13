<?php

class User {
  public $name = 'John';
  public $age;

  final public function printName($name) {
    return "Hi, my name is " . $name;
  }
}

class Manager extends User {
  public $name = 'David';
}

$user = new User();
echo $user->printName("Trucutu");