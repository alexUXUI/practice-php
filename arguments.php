<?php

$test = "testing";

$closure = function() use(&$test) {
  echo $test;
  $test = "This is a new value by reference";
};

$closure();

echo $test;

 ?>
