<?php
// array
$colors = array("red", "blue", "green", "orange");

foreach ($colors as $x) {
    echo "$x \t";
}
echo "<------->\n";

// key value
$members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
foreach($members as $x => $y) {
    echo "$x : $y \n";
}
echo "<------->\n";

// objects
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
}
$myCar = new Car("red", "Volvo");
foreach($myCar as $x => $y) {
    echo "$x: $y \n";
}

echo "<------->\n";

foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
}
echo "<------->\n";

foreach ($colors as $x) {
  echo "$x \n";
}
echo "<------->\n";
foreach ($colors as $x) :
    echo "$x \n";
endforeach;

?>