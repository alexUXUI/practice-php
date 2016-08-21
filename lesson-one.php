
<?php
  $num_one = 1;
  $num_two = 2;
  $num_three = 3;
  // var_dump($num_one + $num_two); --> returns int(3);
?>


<?php
$a =& $b;
$b = 1000;
$foo = $a ?: $b ?: $c;
// print("The value of A is: $a"); --> 1000
// print("The value of foo is: $foo"); --> 1000

class MyClass {
  const A_CONST = 'I am immutable :)';
  public $property = 'public';
  public function myMethod() {
      print 'MyClass';
  }
};

$testing = new MyClass();
$testing->myMethod();

echo MyClass::A_CONST;
echo $testing->property;

$testing->property = "Different value!!!";
echo "The new value of the public var is: $testing->property";

$observable =& $testing;

var_dump($observable);
$observable->property = '¡Yet another value!';
var_dump($testing);
?>
