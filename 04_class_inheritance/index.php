<?php

// Access modifiers = Public, Private and Protected
class User {
  // Properties
  public $name;
  public $email;

  public function welcomeMessage() {
    return "Have a good working day!";
  }
}

class Admin extends User {
  public $level;
}

$user = new User();
$user->name = "Alex";
$user->email = "info@alexlabanino.com";
echo $user->name . " " . $user->email;

$admin = new Admin();
$admin ->name = "John";
$admin->email = "info@gmail.com";
$admin ->level = "SuperAdmin";
echo $admin->name . " " . $admin->email . " " . $admin->level;
echo "<br>";
echo $admin->welcomeMessage();