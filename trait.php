<?php

    trait Greeter {
        private $greeting = "hello";
        public function greet()
        {
            echo $this->greeting;
            return;
        }
    }

    class Person {
        use Greeter {
          Greeter::greet as yo;
        }

        public function doSomethingElse()
        {
            echo 'yo again';
        }
    }

    $alex = new Person();
    $alex->yo();

 ?>
