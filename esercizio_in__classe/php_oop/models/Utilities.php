<?php

class Utilities {
  public static $counter = 0;

  public static function generateUniqueId() {
    return uniqid("util_");
  }

  public static function generateFakeCreditCardNum() {
    $numLength = 16;
    $groups = 4;
    $num = "";

    for ($i = 0; $i < $groups; $i++) {
      $groupNum = [rand(0, 9), rand(0, 9), rand(0, 9), rand(0, 9)];

      $num .= implode("", $groupNum);
    }

    $num;
  }
}


/* Utilities::generateUniqueId();
Utilities::generateFakeCreditCardNum();
Utilities::$counter++;
 */