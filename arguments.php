<?php

/**
 * This is an anon func that
 * uses a closure through the 'use' keyword
 * and changes the value of $test
 * because it is passed by reference '&'
 */

$value = "testing";

$anonClosureFunc = function () use(&$value)
{
    echo $value; // before change
    $value = "This is a new value by reference";
};

$anonClosureFunc();
echo $value; //after change

 ?>
