<?php

class User {
  public static $nextId = 0;
  public $myId;

  public static function printId($id) {
    return "User id is: " . self::$myId;
  }
}

// $user = new User();
// $user->myId = 10;
// echo $user->myId;

echo User::printId();