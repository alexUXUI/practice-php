<?php

$myArray=array(1,2,3,'apple','banana','orange');
define('fruit', 'orange');
function iterArry($arr, $fruit){
  foreach ($arr as $value) {
    if($value === 'banana'){
      echo "$value detected!";
    } elseif($value === $fruit) {
      echo "$value detected!";
    } else {
      echo "false";
    }
  }
}
iterArry($myArray, fruit);

class Tree {
  function Tree(){
    $this->species="Redwood";
  }
}

$bigRed = new Tree();
echo $bigRed->species;
var_dump($bigRed);

define('hello', 'world');
echo hello;

// $t = date("H");
// if ($t < "20") {
//     echo "Have a good day!";
// } else {
//     echo "Have a good night!";
// }

$x = 1;
while($x <= 5) {
  echo "The number is: $x ";
  $x++;
}

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x ";
}
?>
