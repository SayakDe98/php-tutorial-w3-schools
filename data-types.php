<?php
    $x = 5;
    var_dump($x);
    $txt1 = "Hello world";
    $txt2 = 'Hello world';

    var_dump($txt1);
    echo "\n";
    var_dump($txt2);

    $num = 5895;
    var_dump($num);

    $decimalNum = 10.365;
    var_dump($decimalNum);

    $bool = true;
    var_dump($bool);

    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);

    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
            $this -> color = $color;
            $this -> model = $model;
        }
        public function message() {
            return "My car is a " . $this -> color . " " . $this -> model . "!"; 
        }
    }
    $myCar = new Car("red", "Volvo");
    var_dump($myCar);

    $assignToNUllLater = "Hello world";
    var_dump($assignToNUllLater);
    $assignToNUllLater = NULL;
    var_dump($assignToNUllLater);

    // Cast to different data type
    $a = 5;
    $a = (string) $a;
    var_dump($a);
?>